<h1 class="mb-3"><i class="fas fa-folder-open"></i> Artigos</h1>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="table-responsive mb-5 pb-4">
    <table id="articles" class="table table-striped datatables">
        <thead>
            <tr>
                <th><i class="fas fa-heading"></i> Título</th>
                <th><i class="fas fa-tags"></i> Categoria</th>
                <th><i class="fas fa-search-dollar"></i> Descrição SEO</th>
                <th><i class="fas fa-eye"></i> Visibilidade</th>
                <th><i class="fas fa-rocket"></i> Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->seo_description }}</td>
                    <td>
                        <form action="" method="post">
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn @if ($article->visible) btn-success @else btn-danger @endif">
                            <i class="fas fa-eye"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a title="visualizar" href="{{ route('articles.show', $article->id) }}" class="btn btn-success">
                            <i class="fas fa-search"></i>
                        </a>
                        &nbsp;
                        <a title="editar" href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning text-white">
                            <i class="fas fa-edit"></i>
                        </a>
                        &nbsp;
                        <form class="d-inline" action="{{ route('articles.destroy', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Tem certeza que deseja deletar este artigo?')" type="submit" title="DELETAR ARTIGO!" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
