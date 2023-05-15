<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ServerAdminController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', '3')->get();

        if (Auth::user()->role->id == '2' && View::exists('superadmin.admin.index')) {
            return view('superadmin.admin.index')->with('users', $users);
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.admin.index')) {
            return view('serveradmin.admin.index')->with('users', $users);
        }
    }

    public function createUser()
    {
        $roles = Role::all();

        // Create User
        if (Auth::user()->role->id == '2' && View::exists('superadmin.admin.create')) {
            return view('superadmin.admin.create', compact('roles'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.admin.create')) {
            return view('serveradmin.admin.create', compact('roles'));
        } else {
            return view('errors.404');
        }
    }

    public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'roles' => 'required',
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'password' =>  'required|string|min:8|confirmed',
        ]);

        $users = User::where('role_id', '3')->get();

        if ($validator->fails()) {
            if (Auth::user()->role->id == '1' && View::exists('superadmin.admin.index')) {
                return redirect()->route('serveradmin.user.create')->withErrors($validator)->withInput();
            }else{
                return redirect()->route('superadmin.user.create')->withErrors($validator)->withInput();
            }
        } else {
            User::create([
                'role_id' => $request->roles,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        if(session('locale') == 'en'){
            if (Auth::user()->role->id == '1' && View::exists('superadmin.admin.index')) {
                return redirect()->route('serveradmin.adminList')->with('success', 'User has been successfully saved.');
            }else{
                return redirect()->route('superadmin.adminList')->with('success', 'User has been successfully saved.');
            }
        }

        if(session('locale') == 'hi'){
            if (Auth::user()->role->id == '1' && View::exists('superadmin.admin.index')) {
                return redirect()->route('serveradmin.adminList')->with('success', 'यूजर को सफलतापूर्वक स्टोर किया गया।');
            }else{
                return redirect()->route('superadmin.adminList')->with('success', 'यूजर को सफलतापूर्वक स्टोर किया गया।');
            }
        }
    }

    public function editUserRole($id)
    {
        $user_roles = User::where('id', $id)->where('role_id', '=', '3')->first();
        $roles = Role::whereIn('id', ['2', '3'])->get();

        if ($user_roles) {
            if (Auth::user()->role->id == '2' && View::exists('superadmin.admin.edit')) {
                return view('superadmin.admin.edit', compact('user_roles', 'roles'));
            } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.admin.edit')) {
                return view('serveradmin.admin.edit', compact('user_roles', 'roles'));
            }
        } else {
            if(session('locale') == 'en'){
                return redirect()->back()->with('error', 'You are not authorized to access another user profile.');
            }

            if(session('locale') == 'hi'){
                return redirect()->back()->with('error', 'आप किसी अन्य उपयोगकर्ता प्रोफ़ाइल तक पहुंचने के लिए अधिकृत नहीं हैं।');
            }
        }
    }

    public function updateUserRole(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            if (Auth::user()->role->id == '2') {
                return redirect('superadmin/role-edit/' . $id)->withErrors($validator)->withInput();
            } else if (Auth::user()->role->id == '1') {
                return redirect('serveradmin/role-edit/' . $id)->withErrors($validator)->withInput();
            }
        } else {
            $user = User::find($id);
            $user->role_id = $request->input('roles');
            $user->name = $request->input('name');
            $user->update();

            if (Auth::user()->role->id == '2') {
                return redirect()->route('superadmin.adminList')->with('success', 'User Role has been updated successfully.');
            } else if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.adminList')->with('success', 'User Role has been updated successfully.');
            }
        }
    }

    function deleteUserRole($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        if ($user) {
            $user->delete();
            cleanup($user->getTable());
        }
        // User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'User has been deleted successfully.');
    }

    // For Superadmin
    public function superAdminList()
    {
        $admins = User::where('role_id', '2')->get();
        $roles = Role::all();

        if (Auth::user()->role->id == '1' && View::exists('serveradmin.superadmin.index')) {
            return view('serveradmin.superadmin.index', compact('admins', 'roles'));
        }
    }

    public function editSuperAdminRole($id)
    {
        $user_roles = User::where('id', $id)->where('role_id', '=', '2')->first();
        $roles = Role::all();

        if ($user_roles) {
            if (Auth::user()->role->id == '1' && View::exists('serveradmin.superadmin.edit')) {
                return view('serveradmin.superadmin.edit', compact('user_roles', 'roles'));
            }
        } else {
            if(session('locale') == 'en'){
                return redirect()->back()->with('error', 'You are not authorized to access another user profile.');
            }

            if(session('locale') == 'hi'){
                return redirect()->back()->with('error', 'आप किसी अन्य उपयोगकर्ता प्रोफ़ाइल तक पहुंचने के लिए अधिकृत नहीं हैं।');
            }
        }
    }

    public function updateSuperAdminRole(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            if (Auth::user()->role->id == '1') {
                return redirect('serveradmin/superadmin-role-edit/' . $id)->withErrors($validator)->withInput();
            }
        } else {
            $user = User::find($id);
            $user->role_id = $request->input('roles');
            $user->name = $request->input('name');
            $user->update();

            if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.superAdminList')->with('success', 'User Role has been updated successfully.');
            }
        }
    }

    public function changeUserStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        if ($user->status == 0) {
            return response()->json(['message' => 'User account has been actived successfully.']);
        } else if ($user->status == 1) {
            return response()->json(['message' => 'User account has been deactived successfully.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }
}
