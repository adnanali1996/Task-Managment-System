<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return ['msg' => 'Upadating'];
    }

    public function update_profile(Request $request)
    {
        //
        $user = auth('api')->user();
        // dd($request->all());
        $this->validate($request,[
            "name" => "required|string|max:50",
            "email" => "required|string|email|max:50|unique:users,email,".$user->id,
            "adress" => "required|string|max:191",
        ]);

        $current_photo = $user->photo;
        if($request->photo != $current_photo)
        {
            $extension = explode('/', mime_content_type($request->photo))[1];
            $delete_photo = public_path('assets/images/profiles/').$current_photo;
            // DELETE PHILE
            if(file_exists($delete_photo))
            {
                @unlink($delete_photo);
            }
            if($extension == 'jpg' || $extension == 'png' || $extension=='jpeg')
            {

                $image = time().'.'.$extension;
                Image::make($request->photo)->save(public_path('assets/images/profiles/').$image);
                $request->merge(['photo' =>$image]);
            }
            else{
                return ['msg' => 'Uploaded Invalid Image Format'];
            }
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->adress = $request->adress;
        $user->photo = $request->photo;
        // for password
        if(!empty($request->password))
        {
            // dd(Hash::make($request['password']));
            $this->validate($request,[
                "password" => "required|min:2",
            ]);
            $request->merge(['password' => Hash::make($request['password'])]);
            $user->password = $request->password;
        }
        $user->save();
        return ['msg' => $request->photo];
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

    // PROFILE
    public function profile()
    {
        return auth('api')->user();
    }
}
