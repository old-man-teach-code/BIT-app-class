<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function view(){
        error_log("->>>>>>>>> view");
        return view('demoview', ['name' => 'John Doe', 'age' => 25]);
    }

    public function submit(Request $request){
        error_log("------>    submit");
        // return view('demoview', ['name' => 'John Doe', 'age' => 25]);
        try {
            $num1 = $request->input('num1');
            $num2 = $request->input('num2');
            $sum = $num1 + $num2;
            return view('demoview', ['sum' => $sum, 'name' => 'John Doe', 'age' => 25]);
        } catch (\Throwable $th) {
            error_log($th->getMessage());
        }
    }
}
