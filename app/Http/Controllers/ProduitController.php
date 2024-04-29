<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('produits.index', [
            'produits' => Produit::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request) : RedirectResponse
    {
        //dd($request->all());
         Produit::create($request->all());
        return redirect()->route('produits.index')
                ->withSuccess(' produit ajouter avec success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit) : View
    {
        return view('produits.show', [
            'produit' => $produit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit) : View
    {
        return view('produits.edit', [
            'produit' => $produit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Produit $produit) : RedirectResponse
    {
        $produit->update($request->all());
        return redirect()->route('produits.index')
                ->withSuccess('Produit is updated successfully.');
    
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit) : RedirectResponse
    {
        $produit->delete();
        return redirect()->route('produits.index')
                ->withSuccess('Le Produit est bien supprimé.');
    }
}
