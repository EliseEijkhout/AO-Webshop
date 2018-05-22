@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/home">Home</a>
                    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @foreach ($categories as $category)
                    <p>{{ $category->name }}</p>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
