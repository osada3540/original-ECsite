@extends('layouts.app')

@section('content')
@if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @foreach ($likeitems as $likeitem)
                        <div class="card-header">
                            <a href="/item/{{ $likeitem->id }}">{{ $likeitem->name }}</a>
                        </div>
                        <div class="card-body">
                            <div>
                                {{ $likeitem->amount }}円
                            </div>
                            <div class="form-inline">
                                <form method="POST" action="/likeitem/{{ $likeitem->id }}" class="mr-1">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-success ml-1">気になるリストから削除する</button>
                                </form>
                                <a class="btn btn-primary" href="/item/{{ $likeitem->id }}" role="button">商品詳細</a>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection