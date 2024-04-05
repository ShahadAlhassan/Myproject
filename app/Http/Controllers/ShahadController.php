<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Items;
class ShahadController extends Controller
{

    
    public function school()
    {
        return" welcome to tuwaiq";
    }

    public function shoq()
    {
        return" welcome to tuwaiq";
    }

    public function Retdata()
    {
        $arr=[
            'id'=>1,
            'name'=>'iphone',
            'type'=> 'iphone 14',
            'price'=> 3500,
            'color'=>'black'

        ];

        $jsondata=json_decode(Storage::get('public/data.json'));
        return view('Shahad',['d'=>$jsondata]);


    }

    public function Total()
    {
        $total= 3005.10;
        return $total;
    }

    public function Shahad()
    {
        return "Welcome to my page (;";
    }

    public function showitem()
    {
        $items=Items::all();

        return view('items',['items'=>$items]);
    }

    
}
