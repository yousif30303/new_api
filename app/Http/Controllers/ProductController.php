<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function GetAll(){

        $products_count = count(Product::get());
        $product = Product::get();
        $array1 = array();
        $array2 = array();

        $img = Product::get()->first()->image;
        $image = 'http://127.0.0.1:8000/img/'.$img.'';

        for($i=0;$i<=$products_count-1;++$i){

            $img = $product[$i]->image;
            $image = 'http://127.0.0.1:8000/img/'.$img.'';
    
            $array1['id']=$product[$i]->id;
            $array1['name']=$product[$i]->name;
            $array1['price']=$product[$i]->price;
            $array1['image']=$image;

            array_push($array2,$array1);
        }

        
        return response($array2);
    }
}