<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\Product;
use App\models\Product_detail;
use App\models\Category;
use App\models\Color;
use App\models\Size;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $product = DB::table('product_details')
        // ->join('products', 'product_details.product_id', '=', 'products.id')
        // ->join('colors', 'product_details.color_id', '=', 'colors.id')
        // ->select('products.id as id', 'products.name', 'product_details.image','products.status','colors.name as col_name')
        // ->get();
        $product = Product::get();
        // dd($product);
        return view('admin.product.index',compact('product'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::get();
        $product = Product::get();
        $color = Color::get();
        $size = Size::get();
        return view('admin.product.create',compact('color','size','product','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //upload
        if ($request->has('upload')) {
            # code...
            $img_name = time().'-'.$request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads/product'),$img_name);
            //$request->image
            $request->merge(['image' =>  $img_name]);
        }
        //lưu vào đb bảng product
        $product =  Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'content' => $request->content,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);
        $product_id = $product->id;
        //lưu vào db bảng product_detail
        Product_detail::create([
            'product_id' => $product_id,
            'color_id' => $request->color,
            'size_id' => $request->size,
            'image' => $request->image,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
        ]);

        return redirect()->route('product.index')->with('success','Thêm mới sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Product::find($id);
        $category = Category::get();
        // $product = Product::get();
        $color = Color::get();
        $size = Size::get();
        return view('admin.product.edit',compact('data','category','color','size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Product::find($id);


        if ($request->has('upload')) {
            # code...
            $img_name = time().'-'.$request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads/product'),$img_name);
            $request->merge(['image' =>  $img_name]);
        }else{
            $img_name = time().'-'.$request->image;
        }

         Product::where(['id'=>$id])->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        $product_id = $data->id;

        Product_detail::where(['id'=>$id])->update([
            'product_id' => $product_id,
            'color_id' => $request->color,
            'size_id' => $request->size,
            'image' => $request->image,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
        ]);

        return redirect()->route('product.index')->with('success','bạn đã sửa sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dele = Product_detail::where(['product_id'=>$id])->delete();
        $del = Product::find($id)->delete();

        if($del){
            return redirect()->route('product.index')->with('success','bạn đã xóa sản phẩm thành công');
        }else{
            return redirect()->route('product.index')->with('success','bạn đã xóa sản phẩm không thành công');
        }
    }
}
