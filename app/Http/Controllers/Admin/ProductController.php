<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index() {
        $products = $this->productRepository->getAll();

        $data = compact('products');

        return view('admin.product.index', $data);
    }

    public function add() {
        return view('admin.product.create');
    }

    public function edit($id_product)
    {
        $product = $this->productRepository->find($id_product);

        $data = compact('product');

        return view('admin.product.edit', $data);
    }

    public function create(Request $request)
    {
        $data = $request->except('_token');

        $data['short_tag'] = sluggify($data->name, "-", 96);


    }

    public function update(Request $request, $id_product)
    {

    }

    public function delete(Request $request, $id_product)
    {

    }
}
