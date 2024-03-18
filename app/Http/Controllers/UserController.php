<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserLoginRequest;
use App\Http\Requests\LoginHandlerRequest;
use App\Http\Requests\userEditHandlerRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

class UserController extends Controller
{
    public function admindashboard(){
        return view('admin.index');
    }
    
    public function servicedashboard(){
        return view('service.index');
    }
    public function CreateUserPage(){
        return view('admin.createuserpage');
    }

    public function createUser(CreateUserLoginRequest $request, User $user){

        $user -> name = $request -> name;
        $user -> role = $request -> role;
        $user -> password = bcrypt($request->password);
        $user ->admin_id = Auth::id();
        $user->save();

        if($user->role == 'service'){
            return redirect()->back()->with('success','le service utilisateur a été crée avec succès.');
        }else {
            return redirect()->back()->with('success','l\'admin a été crée avec succès.');}
    }

    public function loginHandler(LoginHandlerRequest $request): RedirectResponse{

        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $url='';

            if($request->user()->role == 'admin'){
                $url='adminDashboard';
                
            }elseif($request->user()->role == 'service'){
                $url='serviceDashboard';
            }
            return redirect()->intended($url);
        } 
            
        return redirect()->back();
        
        
    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function userList(User $user){
        $users = User::all();
        $nombreUsers = User::count();
        return view('admin.list', [
            'users' => $users,
            'nombreusers' => $nombreUsers,
        ]);
    }

    public function userEditList(User $user){
        $users = User::all();
        $nombreUsers = User::count();
        return view('admin.editlist', [
            'users' => $users,
            'nombreusers' => $nombreUsers,
        ]);
    }

    public function userEdit(User $user){
        return view('admin.editpage',[
            'user'=>$user,
        ]);
    }
    public function userEditHandler(userEditHandlerRequest $request, User $user){
        $user -> name = $request -> name;
        $user -> role = $request -> role;
        $user -> password = bcrypt($request->password);
        $user ->admin_id = Auth::id();
        $user->save();

        return redirect()->back()->with('success','la mise à jour a été crée avec succès.');
    }

    public function deleteUser(User $user){
        $user->delete();
        return redirect()->back()->with('success','le service utilisateur a été supprimé avec succès.');
    }

}
