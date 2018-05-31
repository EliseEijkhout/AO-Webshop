@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/category">Ga naar de Categories!</a> <br>
                    <a href="/product">Ga naar de Products!</a> <br>

                    You are logged in!
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
