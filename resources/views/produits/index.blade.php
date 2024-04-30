@extends('produits.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header"> Liste des Produits </div>
            <div class="card-body">
                <a href="{{ route('produits.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Ajouter un nouveau produit</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($produits as $produit)
                        <tr>
                            <td>{{ $produit->code }}</td> <!-- Correction ici: supprimez la balise <th scope="row"> -->
                            <td>{{ $produit->name }}</td>
                            <td>{{ $produit->quantite }}</td>
                            <td>{{ $produit->prix}}</td>
                            <td>{{ $produit->description}}</td>
                            <td>
                                <form action="{{ route('produits.destroy', $produit->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous  vraiment supprimer ce produit ?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>Aucun produit trouvé!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $produits->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection
