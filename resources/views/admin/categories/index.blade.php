@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-0">
            @include('categories.includes.btn-new-category')
        </div>
        <div class="row">
            <div class="col">
                @include('categories.includes.table')
            </div>
        </div>
    </div>
@endsection
