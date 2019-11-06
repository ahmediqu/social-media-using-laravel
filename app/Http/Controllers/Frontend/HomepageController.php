<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Auth;
class HomepageController extends Controller
{
    public function index(){
        if(Auth::user()){
            return view('frontend.pages.profile');
        }
    	return view('frontend.pages.index');
    }


    public function selfie(){
    	$data = [];
    	$data['user_name']= Auth::user()->name;
    	return view('frontend.pages.add_profile_photo',$data);
    }

    public function selfiePost(Request $request){
    	$addselfie = User::find(Auth::user()->id);
    	
    	$image = $request->file('image');
            if ($image) {
                $image_name = time().'.'.request()->image->getClientOriginalExtension();


                $image_full_name = $image_name;
                $destination_path = 'uploads/profile/';
                $image_url = $destination_path . $image_full_name;
                $success = $request->file('image')->move($destination_path, $image_full_name);
                if ($success) {
                    $addselfie->image = $image_url;
                }
            }
            
    // 	$image = $request->file('image');
    //         if ($image) {
    //             $image_name = $request->image->getClientOriginalName();
    //             $ext = strtolower($image->getClientOriginalExtension());
    //             $image_full_name = $image_name;
    //             $destination_path = 'uploads/profile/image/';
    //             $image_url = $destination_path . $image_full_name;
    //             $success = $request->file('image')->move($destination_path, $image_full_name);
    //             if ($success) {
    //                 $addselfie->image = $image_url;
    //             }
    //         }
        $addselfie->save();
        return redirect('bio');

    }

    public function bio(){
    	return view('frontend.pages.my_bio');
    }

    public function bioPost(Request $request){
    	$addselfie = User::find(Auth::user()->id);
    	$addselfie->bio = $request->bio;
    	$addselfie->save();
    	return redirect('add-social-link');

    }

    public function add_social_link(){
    	return view('frontend.pages.add_social');
    }

    public function add_social_link_post(Request $request){
        $addselfie = User::find(Auth::user()->id);
        $addselfie->instagram = $request->instagram;
        $addselfie->venmo = $request->venmo;
        $addselfie->snapchat = $request->snapchat;
        $addselfie->twitter = $request->twitter;
        $addselfie->facebook = $request->facebook;
        $addselfie->linkedin = $request->linkedin;
        $addselfie->youtube = $request->youtube;
        $addselfie->pinterest = $request->pinterest;
        $addselfie->whatsapp = $request->whatsapp;
        $addselfie->applemusic = $request->applemusic;
        $addselfie->spotify = $request->spotify;
        $addselfie->paypal = $request->paypal;
        $addselfie->soundcloud = $request->soundcloud;
        $addselfie->website = $request->website;
        $addselfie->custom_link = $request->custom_link;
        $addselfie->phone = $request->phone;
        $addselfie->s_email = $request->s_email;
        $addselfie->address = $request->address;
        $addselfie->save();
        return redirect('profile');
    }

    public function profile(){
        $data = [];
        $data['profile'] = DB::table('users')->where('id',Auth::user()->id)->first();
        return view('frontend.pages.profile',$data);
    }

    public function edit(){
        return view('frontend.pages.edit_profile');
    }

    public function editPost(Request $request){
        $addselfie = User::find(Auth::user()->id);
        $addselfie->name = $request->name;
        $addselfie->bio = $request->bio;
        $image = $request->file('image');
            if ($image) {
                $image_name = $request->image->getClientOriginalName();
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name;
                $destination_path = 'uploads/profile/image/';
                $image_url = $destination_path . $image_full_name;
                $success = $request->file('image')->move($destination_path, $image_full_name);
                if ($success) {
                    $addselfie->image = $image_url;
                }
            }
        $addselfie->instagram = $request->instagram;
        $addselfie->venmo = $request->venmo;
        $addselfie->snapchat = $request->snapchat;
        $addselfie->twitter = $request->twitter;
        $addselfie->facebook = $request->facebook;
        $addselfie->linkedin = $request->linkedin;
        $addselfie->youtube = $request->youtube;
        $addselfie->pinterest = $request->pinterest;
        $addselfie->whatsapp = $request->whatsapp;
        $addselfie->applemusic = $request->applemusic;
        $addselfie->spotify = $request->spotify;
        $addselfie->paypal = $request->paypal;
        $addselfie->soundcloud = $request->soundcloud;
        $addselfie->website = $request->website;
        $addselfie->custom_link = $request->custom_link;
        $addselfie->phone = $request->phone;
        $addselfie->s_email = $request->s_email;
        $addselfie->address = $request->address;
        $addselfie->save();
        return redirect('profile');
    }
}
