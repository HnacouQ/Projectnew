<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\models\Category;

class TestController extends Controller
{
    //
    


    public function index(){
        $category = DB::table('categories')
        ->join('products', 'categories.id', '=', 'products.category_id')
        ->select('categories.id', 'categories.name', 'categories.status','products.name as pro_name','products.id as pro_id')
        // ->where('categories.id',1)
        ->paginate(1);
        // dd($category);
        return view('testdemo',compact('category'));
    }

    public function post_add(){
        
        // Category::create([
        //     'name' => $req->name,
        //     'slug' => $req->slug,
        // ]);

        // return redirect()->route('testdemo');

        dd(Request()->all());
    }

    public function delete($id){
        $id = Category::find($id)->delete();


        return redirect()->route('testdemo');
        // echo $id;
    }

    public function edit($id){

        $data = Category::find($id);


        return view('edit',compact('data'));
    }

    public function update(Request $req, $id){

        $data = Category::find($id);

        Category::where('id',$id)->update([
            'name' => $req->name,
            'slug' => $req->slug,
        ]);

        return redirect()->route('testdemo');
        


    }
}
