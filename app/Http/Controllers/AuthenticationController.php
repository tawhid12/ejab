<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ResponseTrait;
use App\Http\Traits\ImageHandleTraits;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Models\User;

use Exception;
use Carbon\Carbon;
// Request
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\newUserRequest;

class AuthenticationController extends Controller
{
    use ResponseTrait, ImageHandleTraits;
    public function signInForm(){
        return view('authentication.login');
    }

    public function signIn(LoginRequest $request){

        if(!!$this->validUser($request))
           
            return redirect(route($this->validUser($request)->roleIdentity.'.Dashboard'))->with($this->resMessage(true, null, 'Log In successed'));
        
       
            
        else
            return redirect(route('signInForm'))->with($this->resMessage(false, "error", 'Invalid username or password.'));
    }

    public function signUpForm(){
        return view('authentication.register');
    }
	
	public function signUpStore(newUserRequest $request){
        try {
            $lastCreatedUser = User::take(1)->orderBy('id', 'desc')->first();
            $user = new User;
            $user->roleId = 7;
            $user->name = $request->fullName;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->contact_no = $request->contact_no;
            $user->password = md5($request->password);
            $user->status = 1;
            $user->userCreatorId = 1;
            $user->created_at = Carbon::now();

            if(!!$user->save()){
				$userd = new UserDetail;
				$userd->userId = $user->id;
				
				if($request->has('photo')) $userd->photo = $this->uploadImage($request->file('photo'), 'user/photo');
				
				$userd->address = $request->address;
				$userd->nid = $request->nid;
				$userd->save();
				
				return redirect(route('signInForm'))->with($this->resMessage(true, null, 'Successfully Registered'));
			}
        } catch (Exception $e) {
            return redirect(route('signUpForm'))->with($this->resMessage(false, 'error', 'Please try again!'));
            return false;
        }
    }

    public function forgotForm(){
        return view('authentication.forgot');
    }

    public function forgotPassword(ForgotPasswordRequest $request){
        $user = User::where(['email' => $request->email, 'status' => 1])->first();
        !!$user && request()->session()->put(['user' => encryptor('encrypt', $user->id)]);

        if(!!$user) return redirect(route('resetPasswordForm'));
        else return redirect(route('forgotPasswordForm'))->with($this->resMessage(false, "error", "This email: $request->email not found"));
    }

    public function resetPasswordForm(){
        return view('authentication.reset-password');
    }

    public function resetPassword(ResetPasswordRequest $request){
        $user = User::find(encryptor('decrypt', $request->session()->get('user')))->first();
        $user->password = md5($request->password);
        if($user->save()) return redirect(route('signInForm'))->with($this->resMessage(true, null, "Password reset successfully. Now you can login"));
    }
    
    public function signOut(){
        request()->session()->flush();
        return redirect(route('signInForm'))->with($this->resMessage(true, "error", 'Successfully logout.'));
    }

    protected function validUser($request){
        return $this->varifyUser($request);
    }

    protected function varifyUser($request){
        $user = User::join('roles', 'role_id', '=', 'roles.id')
        ->leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
        ->select("users.id as userId","users.username","users.email","users.contact_no", "roles.type as roleType", "roles.id as roleId", "user_details.photo", "roles.identity as roleIdentity")
        ->where(['users.username' => $request->username, 'users.password' => sha1(md5($request->password)), 'users.status' => 1])
        ->orWhere(function($query) use($request){
            $query->where(['users.email' => $request->username, 'users.password' => sha1(md5($request->password)), 'users.status' => 1]);
        })
        ->first();
        !!$user && $this->setSession($user);

        return $user;
    }

    protected function setSession($user){
		if($user->photo)
			$photo=$user->photo;
		else
			$photo="dummy.png";
		
        return request()->session()->put(
        [
            'user' => encryptor('encrypt', $user->userId),
            'username' => encryptor('encrypt', $user->username),
            'email' => encryptor('encrypt', $user->email),
            'contact_no' => encryptor('encrypt', $user->contact_no),
            'roleId' => encryptor('encrypt', $user->roleId),
            'roleIdentity' => encryptor('encrypt', $user->roleIdentity),
            'uphoto' => $photo,
        ]);
    }


}
