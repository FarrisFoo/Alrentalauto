<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables as DataTables;

class UserController extends Controller
{
    public function index() 
    {
        $userData = User::get();    

        return view('admin.user.list', compact('userData'));
    }

    public function listing(Request $request)
    {
        if($request->ajax()) {
            $userData = User::latest()->get();
            
            return Datatables::of($userData)
            ->addIndexColumn()
            ->addColumn('action', function($userData){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';

                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }   
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function createPost(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()
            ]);
        }

        $createNewUser = new User();
        $createNewUser->name = $request->name;
        $createNewUser->email = $request->email;

        $finalPassword = '';

        if ($request->password && $request->password_confirmation) {
            if ($request->password == $request->password_confirmation) {
                $finalPassword = Hash::make($request->password);
            }
            $createNewUser->password = $finalPassword;
        } else {
            unset($createNewUser->password);
        }

        $createNewUser->save();

        return response()->json([
            'status' => true
        ]);
    }
}
