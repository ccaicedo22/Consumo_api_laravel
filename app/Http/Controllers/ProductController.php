<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = trim($request->get('name'));
        if ($search == "") {
            $url = 'https://fakestoreapi.com/products';
            $response = Http::get($url);
            $productsArray = $response->json();
            // dd($productsArray);
        } else {
            $url = 'https://fakestoreapi.com/products';
            $response = Http::get($url);
            $productsArray = $response->json();
            $matchingNames = [];
            foreach ($productsArray as $product) {
                if (stripos($product['title'], $search) !== false) {
                    $matchingNames[] = $product;
                }
            }
            $productsArray = $matchingNames;
        }
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 5; // Número de elementos por página
        $slice = array_slice($productsArray, ($currentPage - 1) * $perPage, $perPage);
        $productsArray = new LengthAwarePaginator($slice, count($productsArray), $perPage);
        $productsArray->setPath(route('products'));

        return view('index',  compact('productsArray'));
    }

    public function show($id)
    {
        $products = HTTP::get('https://fakestoreapi.com/products/' . $id);
        $productsArray = $products->json();
        return view('show', compact('products'));
    }
}
