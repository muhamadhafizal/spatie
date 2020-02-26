@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts Dashboard
                @can('write post')
                <a class="float-right" href="{{ route('addPost') }}">Add</a>
                @endcan
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($post as $data)
                        <ul>
                            <li>
                                <a href="#">{{$data->title}}</a>
                                @can('edit post')
                                    <a href="{{ route('editPost') }}" class="float-right">Edit</a>
                                @endcan
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
