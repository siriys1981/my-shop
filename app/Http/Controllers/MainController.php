<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Review;

class MainController extends Controller
{
    public function index ()
    {
    	//$title = 'Home page';
    	//$subtitle = '<em>My first laravel projec</em>';
        //find - метод , который делает выборку из БД по айди
        // $category = Category::find(1);
        // $products = $category->products;
        // dd($products);

        // $product = Product::find(1);
        // dd($product->category->name);

        $categories = Category::all();
        $products = Product::where('recommended','=',1)->get();
        $reviews = Review::latest()->limit(5)->get();
        //Product::where('recommended','=',1)->where('price','>',100)->where('category_id','=',2) -- можно так писать запросы к базе данных. Заканчивать нужно методом get() или first() - если возвращается одно значение

    	return view('main.index', compact('categories', 'products','reviews'));
    }

    public function category (string $slug) 
    {
        //return $slug;
        $category = Category::firstWhere('slug',$slug);
        //dd($category);
        $products = Product::where('category_id', $category->id)->SimplePaginate(8);
        //get();
        return view('shop.category',compact('category','products'));
    }

    public function product (string $slug) 
    {
        $products = Product::firstWhere('slug',$slug);
        $reviews = Review::where('product_id','=',$products->id)->first();
       // $category = Category::all();
        return view('shop.product', compact('products', 'reviews'));
    }

    public function contacts()
    {
    	$title = 'Contacts Page';
    	$message = 'Some message here...';
    	return view('main.contacts', compact('title', 'message'));
    }
}
