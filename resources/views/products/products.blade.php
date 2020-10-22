@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-table">
                <div class="card-body">
                    <table class="table  mb-5">
                            
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button  class="btn btn-secondary btn-sm " v-on:click="showModalSKU($event)">Cadastrar SKU</button>
                            <button  class="btn btn-secondary btn-sm " v-on:click="showModalProduct($event)">Adicionar produto</button>
                        </div>  

                        <caption>Produtos em estoque</caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Caracteristicas</th>
                                <th scope="col">Preço</th>
                                <th scope="col">SKU</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->feature }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->sku }}</td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $products->links("pagination::bootstrap-4") !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection