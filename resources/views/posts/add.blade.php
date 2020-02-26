@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts Dashboard</div>
                <a class="card-header" href="{{ route('post') }}">Post</a>

                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Add Post
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
