<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $students;
    private $products;
    private $product;
    private $fullName;
    private $result;
    private $i;
    private $choice;

    public function index()
    {
        $this->students = Student::getAllStudent();
        return view('test', ['students' => $this->students]);
    }

    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about', ['products' => $this->products]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {
       $this->product = Product::getProductById($id);
        return view('product-detail',['product' => $this->product]);
    }

    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name ." ".  $request->last_name;
        return redirect('/contact')->with('message',$this->fullName);
    }

    public function series()
    {
        return view('series');
    }

    public function newSeries(Request $request)
    {
        for ($this->i = $request->starting_number; $this->i <= $request->ending_number;$this->i++)
        {
            $this->result .= $this->i.' ';
        }
        return redirect('/series')->with('message', $this->result);
    }

    public function calculator()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
//        return $request->all();

        $this->choice=$request->choice;

        switch($this->choice){
            case "+":
                $this->result=$request->first_number+$request->second_number;
                break;
            case "-":
                $this->result=$request->first_number-$request->second_number;
                break;
            case "*":
                $this->result=$request->first_number*$request->second_number;
                break;
            case "/":
                $this->result=$request->first_number/$request->second_number;
                break;
            case "%":
                $this->result=$request->first_number%$request->second_number;
                break;
            default:
                echo "The value's task has not defined";
        }

        return redirect('/calculator')->with('message',$this->result);

    }
}
