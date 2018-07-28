@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Alle producten</h1>                  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/makeup.jpg">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> </p>
      </div>
    </div>
  </div>
</div>
       
                    
                    @foreach ($products as $product)
                    <p>{{ $product->name }}</p>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection