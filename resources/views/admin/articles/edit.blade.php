@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h1><i class="fas fa-file"></i> Editar Artigo</h1>
                <form action="{{ route('articles.update',  $article->getId()) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label class="form-label" for="title"><i class="fas fa-heading"></i> Título</label>
                        <input type="text" class="form-control" name="title" id="title" required value="{{ $article->getTitle() }}">
                    </div>

                    <label class="form-label mb-3" for="visible"><i class="fas fa-eye"></i> Visível
                        <input type="checkbox" name="visible" id="visible" value="1" @if($article->getVisible()) checked @endif>
                    </label>

                    <div class="mb-3">
                        <label class="form-label" for="category_id"><i class="fas fa-tags"></i> Categoria</label>
                        <select name="category_id" class="form-control" id="category_id">
                            <option value="">Sem categoria</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if ($category->id === $article->getCategoryId())
                                        selected
                                    @endif
                                >
                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="seo_description"><i class="fas fa-search-dollar"></i> Descrição SEO</label>
                        <input class="form-control" type="text" name="seo_description" id="seo_description" value="{{ $article->getSeoDescription() }}">
                    </div>

                    <label class="form-label" for="content"><i class="fas fa-paragraph"></i> Conteúdo</label>
                    <textarea id="summernote" name="content" class="form-control" id="content" cols="30" rows="10" required>
                        {{ $article->getContent() }}
                    </textarea>

                    <div class="margin-bottom-70px mt-4">
                        <a href="{{ route('articles.list') }}" class="btn btn-danger">
                            <i class="fas fa-arrow-circle-left"></i> Voltar
                        </a>

                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


    <script>
      $('#summernote').summernote({
        //placeholder: 'Hello stand alone ui',
        tabsize: 4,
        height: 150
      });
    </script>
@endsection
