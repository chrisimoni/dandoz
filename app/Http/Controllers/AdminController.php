<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home');
    }

    public function showProfile() {
        return view('backend.profile');
    }

    public function showProfileEdit($email) {
        $user = User::where('email', $email)->first();

        return view('backend.profileEdit', compact('user'));
    }

    public function updateProfile(Request $request, $email) {
        $this->validate($request, [
            'name' => 'required|min:3',
            'profile_pic' => 'image|mimes:jpeg,jpg,png'
        ]);
        
        $user = User::where('email', $email)->first();

        $user->name = $request->name;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->bio = $request->bio;       

        //remove and/or save image
        if($request->hasFile('profile_pic')) {
            
            if($user->file){
                if(File::exists(public_path('images/profile_pics/'. $user->file))){
                    unlink(public_path() . "/images/profile_pics/" . $user->file);
                }
            }

            $image = $request->file('profile_pic');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/profile_pics/' . $filename);

            $image->move(public_path('images/profile_pics'), $filename);

            $user->file = $filename;
        }

        $user->update();

        return back()->with('success','Profile Updated!');
    }

    public function passwordPage() {
        return view('backend.passwordPage');
    }

    public function changePassword(Request $request) {
        $this->validate($request, [
            'password' => 'required|min:6',
        ]);

        if($request->password != $request->cpassword) {
            return back()->with('failed', 'Password do not match');
        }

        $user = User::find(auth()->user()->id);

        //change the password
        $user->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return back()->with('success', 'Your Password has been updated!');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
