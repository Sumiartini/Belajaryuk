<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function getAllUser()
    {
        $users =  User::all();
        return view('users', compact("users"));
    }

    public function getAllUserServerSide()
    {
        $data = User::latest()->get();
        return Datatables::of($data)
            ->editColumn("created_at", function ($data) {
                return date("m/d/Y", strtotime($data->created_at));
            })
            ->addColumn('ID', function ($data) {
                $update = '<a href="javascript:void(0)" class="btn btn-primary">' . $data->id . '</a>';
                return $update;
            })
            ->rawColumns(['ID'])
            ->make(true);
    }

    public function indexGetUser()
    {
        return view("user_server_side");
    }
}