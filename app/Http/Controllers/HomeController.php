<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        //for Validation
        $string = "Today is ?a good d ay?";
        // $output = Str::endsWith($string, '?');
        // $output = Str::endsWith('something@email.com', 'net');
        // $output = Str::startsWith($string, 'good');



        //wordCount()
        // $output = Str::wordCount($string);

        //remove ()
        // $output = Str::remove(' ', $string);

        //
        //$output = Str::replace('Day', 'days', $string);

        //replaceArray()
        // $output = Str::replaceArray('?', ['1st', '2nd'], $string);

        //replaceFirst()
        // $output = Str::replaceFirst('?', '1st', $string);

        //replaceLast()
        // $output = Str::replaceLast('?',  '2nd', $string);

        //first Word
        //$output = Str::contains($string, 'good');
        // $output = Str::containsAll($string, ['good', 'day']);


        //singular()
        // $output = Str::singular('toys');

        //plural()
        // $output = Str::plural('toy');

        //after()
        // $output = Str::after($string, 'day');
        // $output = Str::afterLast($string, 'day');
        $output = Str::between($string, 'day', '?');
        dd($output);
    }
    public function arrayHelper()
    {
        $simpleArray = [
            'name' => 'Desk',
            'Model' => 'gtx',
            'price' => 100,
            'feature' => '[hight_adjustment]',
        ];

        $array = [
            'class_one' => true,
            'class_two' => false,
            'class_three' => true,
        ];
        $products = [
            'product' => [
                ['name' => 'Desk', 'price' => 100],
                ['name' => 'Chair', 'price' => 70],
                ['name' => 'Monitar', 'price' => 230],
            ]


        ];


        //Add css Classes
        // $output = Arr::toCssClasses($array);

        // set & get Values
        // $output = data_set($products, 'product.price', 40);
        // $output = data_set($products, 'product.2.price', 40);
        // $output = data_get($products, 'product.price');


        //Array to query
        //$output = Arr::query($simpleArray);

        //sort
        $output = Arr::sort($products);

        dd($output);
    }
    public function global()
    {
        // dd(toUpper('some string'));
        return view('home')->with('name', 'some name for testing');
    }
}
