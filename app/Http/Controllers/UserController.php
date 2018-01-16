<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
   
    public function getLogin()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
      $this->validate($request,
        [
            'username' =>'required',
            'password' =>'required|min:3|max:32'
        ],  
        [
          'username.required' => 'Vui long nhap usernmae',
          'password.required' =>'chua nhap pass',
          'password.min' =>'nhap pass khong hop le',
          'password.max' =>'nhap pass khong hop le'
        ]);

      if (Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
        {
          return redirect('home');
        }else{
          return redirect('login')->with('thongbao','Dang nhap that bai');
        }
    }


    public function logout()
    {
      Auth::logout();
      return redirect('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        //
        $this->validate($request,

        [
            'username' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|max:30',
            'confirm-password' =>'required|same:password'
        ],

        [
            'username.required' =>'Chua nhap ten nguoi dung',
            'email.required' => 'Chua nhap email',
            'email.unique' =>'trung email',
            'email.email' => 'khong dung dinh dang',
            'password.required' =>'Pass khong hop le',
             'password.min' =>'pass tu 6->30 ki tu',
              'password.max' =>'pass tu 6->30 ki tu',
            'confirm-password.required' =>'Repass dc yeu cau',
            'confirm-password.same' =>'KHong trung mat khau' 
        ]);
       

       $user = new User;
       $user->username = $request->username;
       $user->password = bcrypt($request->password);
       $user->email = $request->email;
       $user->fullname = $request->fullname;
       $user->gender = $request->gender;
       $user->save();
       return redirect('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
