<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Product;

class MenusController extends Controller
{
    public function index() {

        $today = Carbon::today();

        $products = Product::where('sales_end_date', null)->orWhere('sales_end_date', '>=',$today)->with('productPrice')->get();

        return view('menu.index',compact('products'));
    }
}
