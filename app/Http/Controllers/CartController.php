<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CartController extends Controller
{

  

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|max:255|string',
            'name' => 'required|max:255|string',
            'ingredients' => 'required|string',
            'categorie' => 'required|string',
            'prix' => 'required|numeric'
        ]);
    
        \Cart::add([
            'name' => $validatedData['name'],
            'id' => $validatedData['id'],
            'ingredients' => $validatedData['ingredients'],
            'categorie' => $validatedData['categorie'],
            'prix' => $validatedData['prix']          
        ]);
    
        // session()->flash('success', 'Product is Added to Cart Successfully !');
    
        // Rediriger vers la page du panier
        return redirect('cart');
    }
  
    
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}