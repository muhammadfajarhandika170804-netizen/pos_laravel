<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "All Transaction";
        $datas = [];
        return view('order.index', compact('title', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ord-tgl-001
        $categories = category::get();

        $prefix = "ODR";
        $date = now()->format('DMY');
        //select max from orders
        $lastTransaction = Order::whereDate('created_at',now()->toDateString())
        ->orderBy('id','desc')->first();
        $lastNumber=0;
        if ($lastTransaction){
            $lastNumber = (int) substr($lastTransaction->order_code, -4);
        }

        $runningNumber = str_pad($lastNumber + 1, 4,'0', STR_PAD_LEFT);
        $order_code = $prefix . "-" . $date . "-" . $runningNumber;
        return view('order.create', compact('categories'));
    }

    public function getProducts()
    {
        try {
        $products = Product::with('category')->get();
        return response()->json($products);
        
        } catch (\Throwable $th) {
            return response()->json([
            'message' => 'Fetch Productfailed',
            'status' => false,
            'data' => $th->getMessage()
        ],500);
            //throw $th;
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
