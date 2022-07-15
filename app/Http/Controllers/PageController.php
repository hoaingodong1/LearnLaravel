<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Date;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
// use App\Providers\ProductType;
use App\Providers\AppServiceProvider;
use Illuminate\Http\Request\addProductForm;
class PageController extends Controller
{
    public function getIndex(){    
    $slide= Slide::all();       
    $new_product=Product::where('new',1)->paginate(8);
    return view('page.trangchu',compact('slide','new_product'));
    }
    public function getLoaiSp($type){
        $type_product=ProductType::all();
        $sp_theoloai=Product::where('id_type',$type)->get();
        $sp_khac=Product::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));
    }
    public function getAdminpage(){
        return view ('AdminPage.AddForm');
    }
    public function getIndexAdmin(){
        $products = product ::all();
        return view('AdminPage.Admin', compact('products')); 
    }
    public function postAdminAdd(Request $request){
        $product = new Product();
        if ($request->hasFile('inputImage')){
            $file = $request -> file ('inputImage');
            $fileName=$file->getClientOriginalName('inputImage');
            $file->move('source/image/product',$fileName);
        }
        $fileName=null;
        if ($request->file('inputImage')!=null){
            $file_name=$request->file('inputImage')->getClientOriginalName();

        }
        $product->name=$request->inputName;
        $product->image=$file_name;
        $product->description=$request->inputDescription;
        $product->unit_price=$request->inputPrice;
        $product->promotion_price=$request->inputPromotionPrice;
        $product->unit=$request->inputUnit;
        $product->new=$request->inputNew;
        $product->id_type=$request->inputType;
        $product->save();
        return redirect('/showadmin')->with('success', 'Đăng ký thành công');
    
    }
    public function Editform(){
        return view ('AdminPage.EditForm');
    }
    
    public function getAdminEdit($id){
        $product = product::find($id);
        return view('AdminPage.EditForm')->with('product',$product);
    }
    
    public function postAdminEdit(Request $request){
        $id = $request->editId;
        $product = product::find($id);
        if($request->hasFile('editImage')){
            $file = $request -> file ('editImage');
            $fileName=$file->getClientOriginalName('editImage');
            $file->move('source/image/product',$fileName);
        }
        if ($request->file('editImage')!=null){
            $product ->image=$fileName;
        }
        $product->name=$request->editName;
        // $product->image=$file_name;
        $product->description=$request->editDescription;
        $product->unit_price=$request->editPrice;
        $product->promotion_price=$request->editPromotionPrice;
        $product->unit=$request->editUnit;
        $product->new=$request->editNew;
        $product->id_type=$request->editType;
        $product->save();
        return redirect('/showadmin');
    }
    public function postAdminDelete($id){
        $product =  product::find($id);
        $product->delete();
        return redirect('/showadmin');
}
public function getAddToCart(Request $req, $id){				
    $product = Product::find($id);				
    $oldCart = Session('cart')?Session::get('cart'):null;				
    $cart = new Cart($oldCart);				
    $cart->add($product,$id);				
    $req->session()->put('cart', $cart);				
    return redirect()->back();				
}				
}