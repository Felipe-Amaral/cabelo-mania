@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h1><i class="fas fa-tag"></i> Editar Categoria</h1>

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                      <label for="name" class="form-label">Nome*</label>
                      <input type="text" class="form-control" id="name" name="name" required value="{{ $category->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição <small>(opcional)</small></label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $category->description }}</textarea>
                      </div>

                      <a href="{{ route('categories.index') }}" class="btn btn-danger"><i class="fas fa-arrow-circle-left"></i> Voltar</a>

                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>

                </form>
            </div>
        </div>
    </div>
@endsection
