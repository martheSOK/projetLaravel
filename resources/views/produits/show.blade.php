@extends('produits.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Detail sur le produit
                </div>
                <div class="float-end">
                    <a href="{{ route('produits.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $produit->code }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $produit->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantite" class="col-md-4 col-form-label text-md-end text-start"><strong>Quantite:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $produit->quantite }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="prix" class="col-md-4 col-form-label text-md-end text-start"><strong>Prix:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $produit->prix }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $produit->description }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection