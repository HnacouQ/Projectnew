<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\Category;
use Illuminate\Http\Request;
use App\http\Requests\CatReq;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * lênh tạo Controller cấu trúc CRUD
     *php artisan make:controller admin\CategoryController --model=models\Category
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cat  = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.category.index',compact('cat'));
        // dd($cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatReq $request )
    {
        //thêm mới dữ liệu 
        $data = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        if($data){
            return redirect()->route('category.index')->with('success','thêm dữ liệu thành công!!');
        }else{
            return  redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //truyền dữ liệu cũ sang view(form sửa)
        $data = Category::find($id);

        return view('admin.category.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Category::where(['id'=> $id])->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        if($data){
            return redirect()->route('category.index')->with('success','Sửa dữ liệu thành công');
        }else{
            return redirect()->route('category.index')->with('success','Sửa dữ liệu không thành công');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Category::find($id);
        $data->delete();

        if($data){
            return redirect()->route('category.index')->with('success','Xóa dữ liệu thành công!!');
        }else{
            return redirect()->route('category.index')->with('success','Xóa dữ liệu không thành công!!');
        }
    }
}
