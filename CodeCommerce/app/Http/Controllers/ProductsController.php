<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $productsModel;

    public function __construct(Product $productsModel)
        {
            $this->productsModel = $productsModel;
        }

    public function index()
        {
            $products = $this->productsModel->all();

            return view('products.index', compact('products'));
        }

    public function create()
        {
            return view('products.create');
        }

    public function store(Requests\ProductsRequest $request)
        {
            $input = $request->all();

            $products = $this->productsModel->fill($input);

            $products->save();

            return redirect()->route('products');
        }

    public function edit($id)
        {
            $Products = $this->productsModel->find($id);

            return view('products.edit', compact('Products'));
        }

    public function update(Requests\ProductsRequest $request, $id)
        {
           $this->productsModel->find($id)->update($request->all());

          return redirect()->route('products');
        }

    public  function destroy($id)
        {
            $this->productsModel->find($id)->delete();

            return redirect()->route('products');
        }
}
