<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        //product::create(Request::all());
        // $user = new product;
        $p_name =  $request->input('p_name');
        $p_quan =  $request->input('p_quan');
        $p_price = $request->input('p_price');
        //$total = $request->input('total');
        
        $data = $arrayName = array('p_name' =>$p_name,'p_quan' =>$p_quan, 'p_price' =>$p_price);

        DB::table('products')->insert($data);

        

        echo "Data insert";;
    }
}
