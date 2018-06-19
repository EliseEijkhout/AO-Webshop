@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/home">Home</a>
                    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producten</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
       
                    
                    @foreach ($products as $product)
                    <p>{{ $product->name }}</p>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection