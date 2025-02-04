<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public, protected, private, default
    public function showProduct(){
        $data = [
            [
                'id' => '1',
                'name' => 'Product 1',
            ],
            [
                'id' => '2',
                'name' => 'Product 2',
            ]
        ];
        return view('list-product')->with(['listProduct' => $data]);
        // return view('list-product', compact('data'));
    }

    public function getProduct($id, $name = ''){
        echo $id;
        echo $name;
    }

    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;
    }
}