<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

    public function show(User $user, UserRequest $request)
    {
        return view('users.show', compact('user', 'request'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        switch ($request->route) {
            case 'profile':
                $data['nickname'] = $request->nickname;
                $data['introduction'] = $request->introduction;
                $user->update($data);
                return redirect()->route('users.edit',$user->id)->with('success','修改成功 ~');

            case 'preference':
                return [

                ];
            case 'security':
                return [

                ];
        }
    }

    public function comment(User $user, UserRequest $request)
    {
        return view('users.show', compact('user', 'request'));
    }

    public function favorite(User $user, UserRequest $request)
    {
        return view('users.show', compact('user', 'request'));
    }

    public function cover(User $user, UserRequest $request)
    {
        return view('users.show', compact('user', 'request'));
    }


}
