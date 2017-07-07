<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Categoty;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    protected $subcategory;
    protected $user;
    
    public function __construct() {
        $this->category = new Categoty;
        $this->subcategory = new Subcategory;
    }
    
    
    /**
    * Home page
    *
    * @param  Request  $request
    * @return Response
    */
    public function home()
    {
        
        
        return view('products.index',
            [
                'category' => $this->category->get(),
                'subcategory' => $this->subcategory->get()
            ]
        );
    }
    
    /**
    * 
    *
    * @param  Request  $request
    * @return Response
    */
    public function productForm(Request $request)
    {
        return view('products.product_form',
            [
                'category' => $this->category->get(),
                'subcategory' => $this->subcategory->get()
            ]
        );
    }
    
    /*
     * AddProduct method which create new product
     * 
     * @param Request $request
     * return 
     */
    public function addProduct(Request $request)
    {
        
        $this->product->name = $request->name;
        $this->product->category = $request->category;
        $this->product->subcategory = $request->subcategory;
        $this->product->description = $request->description;
        $this->product->price = $request->price;
        $this->product->status_id = $request->status_id;
        //$this->product->user_id = Auth::user()->id;
        
        //$this->product->save();
        
        //return redirect('/home');
    }
}
