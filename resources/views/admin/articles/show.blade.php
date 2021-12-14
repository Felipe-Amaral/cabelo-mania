@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h1><i class="fas fa-file"></i> Visualização Artigo</h1>
                <div class="mb-3">
                    <label for="title" class="form-label"><i class="fas fa-heading"></i> Título</label>
                    <input type="text" class="form-control" id="title" readonly value="{{ $article->getTitle() }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="visible"><i class="fas fa-eye"></i> Visível
                        <input type="checkbox" name="visible" disabled
                            @if ($article->getVisible())
                                checked
                            @endif
                        >
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="category_id"><i class="fas fa-tags"></i> Categoria</label>
                    <select name="category_id" class="form-control" id="category_id" disabled>
                        <option>{{ $article->getCategoryName() }}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="seo_description"><i class="fas fa-search-dollar"></i> Descrição SEO</label>
                    <input class="form-control" type="text" name="seo_description" id="seo_description" value="{{ $article->getSeoDescription() }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="content"><i class="fas fa-paragraph"></i> Conteúdo</label>
                        {!! html_entity_decode($article->getContent()) !!}
                </div>


                <a href="{{ route('articles.list') }}" class="btn btn-danger margin-bottom-70px"><i class="fas fa-arrow-circle-left"></i> Voltar</a><br><br>
            </div>
        </div>
    </div>
@endsection
