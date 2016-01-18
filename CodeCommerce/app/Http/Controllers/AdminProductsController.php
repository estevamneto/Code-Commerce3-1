<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;


class AdminProductsController extends Controller {

    private $product;

    public function __construct(Product $product)
    {
        $this->products = $product;
    }

    public function index()
    {
        $products = $this->products->all();
        return view('products', compact('products'));
    }

}