<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Auth;
use DB;
use GuzzleHttp\Client;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //removed auth to allow for pulling data from laravel
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    //code for eccomerce react
    public function productJson()
    {
        $products = Product::all();
        
        return $products;
    }
    //code for icpak

    public function getState()
    {
      
        // 'https://kms.kaiza.la/v1/groups/0b9e0148-1006-47c5-b371-5bc80e1aa098/subGroups'

    //     $client = new Client();
    //     $response = $client->request('GET', 'https://kms.kaiza.la/v1/groups/', [
    //         'headers' => [
    //         'Accept' => 'application/json',
    //         'Content-type' => 'application/json',
    //         'accessToken' =>'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cm46bWljcm9zb2Z0OmNyZWRlbnRpYWxzIjoie1wicGhvbmVOdW1iZXJcIjpcIisyNTQ3MTM2MjQyNTRcIixcImNJZFwiOlwiXCIsXCJ0ZXN0U2VuZGVyXCI6XCJmYWxzZVwiLFwiYXBwTmFtZVwiOlwiY29tLm1pY3Jvc29mdC5tb2JpbGUua2FpemFsYWFwaVwiLFwiYXBwbGljYXRpb25JZFwiOlwiZmE3ZGJmOWUtMTA4YS00ZWQwLTliNzYtM2M0NTg5NzU0NDY0XCIsXCJwZXJtaXNzaW9uc1wiOlwiMi4zMDozLjMwOjQuMjo2LjIyOjUuNDo5LjI6MTUuMzA6MTQuMzA6MTkuMzA6MjQuMzBcIixcImFwcGxpY2F0aW9uVHlwZVwiOjMsXCJkYXRhXCI6XCJ7XFxcIkFwcE5hbWVcXFwiOlxcXCJhbm5Db25uZWN0b3IyXFxcIn1cIn0iLCJ1aWQiOiJNb2JpbGVBcHBzU2VydmljZToyNDVhYjIzZC0xZGMwLTQyZGYtYmE2ZC1kYzYwMTZlZGY4NjciLCJ2ZXIiOiIyIiwibmJmIjoxNTQxNDEzOTgxLCJleHAiOjE1NDE1MDAzODEsImlhdCI6MTU0MTQxMzk4MSwiaXNzIjoidXJuOm1pY3Jvc29mdDp3aW5kb3dzLWF6dXJlOnp1bW8iLCJhdWQiOiJ1cm46bWljcm9zb2Z0OndpbmRvd3MtYXp1cmU6enVtbyJ9.RNh1U-pBs8zOV-TeTscTHjhfT7GZq7Nrs085irCFVuY'
    //     ]]);
    //     $body = $response->getBody();
    //     $content =$body->getContents();
    //     $arr = json_decode($content,TRUE);
    // //    return $content;
    // // return $arr['groupName'];
    //     foreach($arr as $obj )
    //     {
            
    //         // return $obj;
            
         
    //      }
     

       
     
        return view('ICPAK.index');
    }

    public function index()
    {
        //
        
        $products = Product::all();
        $categories = Category::all();
        // dd( $products);
        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();
        $categories = Category::all();
       
        return view('products.create', compact('products', 'categories'));
     
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
        $this->validate(request(),[
            'product_name'=>'required',
            'product_status'=>'required',
            'product_price'=>'required',
            'category_id'=>'required',
            'product_description'=>'required',
        ]);

        $user_id = Auth::user()->id;
        // dd($user_id);
        $Product = Product::create(
            array(
            'product_name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'product_status'=>$request->product_status,
            'product_price'=>$request->product_price,
            'product_description'=>$request->product_description,
            'image'=>$request->image,
            'user_id'=>$user_id,

            ));
        // Product::create(request(['product_name', 'product_status', 'product_price', 'category_id', 'product_description','image']));

        // session()->flash("success_message", "You have created a new category");
        return redirect('/products');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::all();
        $product = Product::find($id);
        $category = Category::find($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'products', 'categories', 'category'));
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
        $this->validate(request(),[

            'product_name'=>'required',
            'product_status'=>'required',
            'product_price'=>'required',
             'product_description'=>'required',
        ]);
        
        Product::where('id', $id)
        ->update(request(['product_name', 'product_status', 'product_price', 'product_description' ]));
        return redirect('/products');
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
        Product::where('id', $id)
        ->delete();
        return redirect('/products');
    }

    public function groupByCategory(){
        $products = DB::table('products')
        ->select(DB::raw("COUNT(*) as category, category_id"))
             ->groupBy(DB::raw("(category_id)"))
        ->get();
         
        foreach ($products as $product) {
        $cats = Category::select("category_name")->where('id', $product->category_id)->get();
        foreach ($cats as $cat) {
        $product->category_name = $cat->category_name;
        }
        }
        return view('products.reports', compact('products'));
        }

}
