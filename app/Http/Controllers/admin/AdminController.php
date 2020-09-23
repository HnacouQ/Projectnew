<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use App\User;
use Auth;

class AdminController extends Controller
{
    //
    
    public  function index(){
        
        return view('admin.admin');

       
    }

    public  function logout(){

        Auth::logout();

        return redirect()->route('login');
    }
    public  function test(){

        Category::create([
            'name' => 'áo nữ',
            'slug' => 'ao-nu',
        ]);
    }
}
