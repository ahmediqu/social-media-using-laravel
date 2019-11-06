<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Frontend\Website\Contact;
use Carbon\Carbon;
use App\Models\Frontend\Website\ApplayCourse;
use DB;
class HomeController extends Controller
{
    public function index(){
    	$data = [];
    	$data['users'] = User::count();
    	return view('backend.dashboard',$data);
    }


    public function users(){
        $data = [];
        $data['users'] = DB::table('users')->get();
        return view('backend.pages.users',$data);
    }
}
