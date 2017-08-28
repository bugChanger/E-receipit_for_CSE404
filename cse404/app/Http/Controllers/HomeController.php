<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use App\Product as Product;

use DB;
use PDF;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $p_name =  $request->input("p_name");
        $p_quan =  $request->input("p_quan");
        $p_price = $request->input("p_price");
        
        $total = $p_quan*$p_price;

        $data = $arrayName = array('p_name' =>$p_name,'p_quan' =>$p_quan, 'p_price' =>$p_price, 'total' =>$total);

        DB::table('products')->insert($data); //database e data save hosse.

        view()->share('data',$data);

        $pdf=PDF:: loadview('pdf.products'); //pdf generator

        Mail::send(['text'=>'mail'],['name','alvee'],function($message) use ($pdf){
            $message->to('konikaferdous906@gmail.com')->subject('Your Shopping Receipt');
            $message->from('dil.alam.cse@ulab.edu.bd','E-Receipt');
            $message->attachData($pdf->output(),'invoice.pdf');
        });

        return $pdf->stream('invoice.pdf'); //download()
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        // $data['data'] = DB::table('products')->get();

        // if(count($data) > 0)
        // {
        //     // $pdf=PDF:: loadview('pdf.products',['data'=>$data]);
        //     // return $pdf->stream('products.pdf');
        //     //return view('insertFrom',$data);
        //     return var_dump($data);
        // }

        // else
        // {
        //     return ('wrong');
        // }


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
    }
}
