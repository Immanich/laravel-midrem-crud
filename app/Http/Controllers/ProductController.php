<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Pdf;
use Illuminate\Http\Request;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Inertia\Inertia;



class ProductController extends Controller
{
    public function index() {
        $product = Product::orderBy('id')->get();
        return inertia('Product/Index', [
            'product' => $product
        ]);
    }

    public function create() {
        return inertia('Product/Create');
    }
    public function about() {   
        return inertia('Product/About');
    }

    public function store(Request $request) {
        Product::create($request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]));

        return redirect('/products');
    }

    public function pdf() {
        $product = Product::orderBy('name')->get();

        $pdf = Pdf::loadView('product-list', compact('product'));

        return $pdf->stream('product-list.pdf');
    }
}
