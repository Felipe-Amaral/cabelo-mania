@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-0">
            @include('articles.includes.btn-new-article')
        </div>
        <div class="row">
            <div class="col mt-4">
                @include('articles.includes.table')
            </div>
        </div>
    </div>
@endsection
