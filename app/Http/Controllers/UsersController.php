<?php

namespace App\Http\Controllers;

use App\Handles\ImageUploadHandler;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Symfony\Component\HttpKernel\Client;

class UsersController extends Controller
{

    public function show(User $user, UserRequest $request)
    {
        return view('users.show', compact('user', 'request'));
    }

    public function edit(User $user, UserRequest $request)
    {
        $this->authorize('update',$user);

        return view('users.edit', compact('user', 'request'));
    }

    public function update(UserRequest $request, User $user, ImageUploadHandler $uploader)
    {
        $this->authorize('update',$user);
        switch ($request->route) {
            case 'profile':
                //判断头像
                if ($request->avatar) {
                    $result = $uploader->save($request->avatar, 'avatars', $user->id, 160);
                    if ($result) {
                        $data['avatar'] = $result['path'];
                    }
                }
                //昵称和自我介绍
                $data['nickname'] = $request->nickname;
                $data['introduction'] = $request->introduction;
                $user->update($data);
                return redirect()->route('users.edit', $user->id)->with('success', '修改成功 ~');

            case 'preference':
                return [

                ];
            case 'security':
                $data['password'] = bcrypt($request->password);
                $user->update($data);
                return back()->with('success', '修改成功 ~');
            case 'cover':
                //dd($request->cover);
                $pattern = '/^(http|https):\/\/[a-zA-Z0-9\-\.\/]+(\.png|\.jpg|\.jpeg)$/';
                $is_cover = preg_match($pattern, $request->cover);
                if (!$is_cover) {
                    return redirect()->back()->with('warning', '链接格式错误');
                }
                $user->cover = $request->cover;
                $user->save();
                return redirect()->back()->with('success', '修改成功 ~');
            default:
                return redirect()->back()->with('danger', '修改失败');

        }
    }


}
