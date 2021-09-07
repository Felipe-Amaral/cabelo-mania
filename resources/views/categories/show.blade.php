@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h1><i class="fas fa-tag"></i> Visualização Categoria</h1>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" readonly value="{{ $category->name }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" rows="3" readonly>{{ $category->description }}</textarea>
                </div>

                <a href="{{ route('categories.index') }}" class="btn btn-danger"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
            </div>
        </div>
    </div>
@endsection
