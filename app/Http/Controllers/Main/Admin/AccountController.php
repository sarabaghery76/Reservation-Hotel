<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view(('Main.Admin.account.index'),compact('users'));
    }

    public function delete($account_id)
    {
        if($account_id && ctype_digit($account_id))
        {
            User::destroy($account_id);
        }
    }

    public function edit($account_id)
    {
        if($account_id && ctype_digit($account_id))
        {
            $userItem = User::find($account_id);
            if ($userItem && $userItem instanceof User)
            {
                return view(('Main.Admin.account.edit'),compact('userItem'));
            }
        }
    }

    public function update(UserRequest $userRequest,$account_id)
    {
        if($account_id && ctype_digit($account_id))
        {
            $inputs = [
                'name'=> request()->input('name') ,
                'email' => request()->input('email'),
                'password' => request()->input('password'),
            ];
            if(!request()->has('password'))
            {
                unset($inputs['password']);
            }
            $accountItem = User::find($account_id);
            $accountItem->Update($inputs);
            return redirect()->route('admin.account.index');
        }
    }

    public function store(UserRequest $userRequest)
    {
        $inputs = [
            'password'=> request()->input('password') ,
            'name' => request()->input('name') ,
            'email' => request()->input('email') ,
        ];

        User::create($inputs);
        return redirect()->route('admin.account.index');
    }

    public function insert()
    {
        return view(('Main.Admin.account.insert'));
    }
}
