<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
// use App\Http\Request;

use PDF;
//use App/product;

class PDFController extends Controller
{
	public function getPDF(){

		//$products = product::all();


		$pdf=PDF:: loadview('pdf.products',['products'=>$products]);
		return $pdf->stream('products.pdf'); //download() function ow use korle download hobe.

	}

}