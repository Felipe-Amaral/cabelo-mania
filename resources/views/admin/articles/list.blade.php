@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-0">
            @include('admin.articles.includes.btn-new-article')
        </div>
        <div class="row">
            <div class="col mt-4">
                @include('admin.articles.includes.table')
            </div>
        </div>
    </div>
@endsection
