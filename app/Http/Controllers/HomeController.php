<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\models\Customer;
use App\models\Product;
use App\models\Banner;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all = Product::orderBy('id','DESC')->limit(8)->get();
    	$men = Product::where('category_id',1)->get();
    	$women = Product::where('category_id',2)->get();
    	$asso = Product::where('category_id',3)->get();
        $banner = Banner::where('type',1)->get();

    	// dd($banner);
        return view('home.home', compact('all','men','women','asso','banner'));
    }

    public function index1()
    {
        return view('admin.admin');
    }

    public function home(){
        return view('home');
    }

    //form đăng ký
    public function home_regis(){
        return view('home.register');
    }

    //xử lý đăng ký
    public function post_regis(Request $request){
        $reg = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            
        ]);

        if($reg){
            return redirect()->route('home');
        }else{
            return redirect()->back();
        }
    }

    //post_login
    public function post_login(Request $request){

        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ],[
            'email.required' => 'Email không được để trống!',
            'email.unique' => 'Tài khoản email này đã tồn tại!',
            'email.email' => 'Email của bạn chưa đúng định dạng',
            'password.required' => 'password không được để trống!',

        ]);
        $login = Auth::guard('cus')->attempt($request->only('email','password'),false);

        if($login){
            return redirect()->route('home');
        }else{
            return redirect()->route('home_login');
        }
    }

    //logout_home
    public function home_logout()
    {
        Auth::guard('cus')->logout();

        return redirect()->route('home');
    }

    

    
}
