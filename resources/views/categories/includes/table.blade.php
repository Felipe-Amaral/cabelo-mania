<h1 class="mb-3"><i class="fas fa-tags"></i> Categorias</h1>

<div class="table-responsive mb-5 pb-4">
    <table id="categories" class="table table-striped">
        <thead>
            <tr>
                <th><i class="fas fa-id-badge"></i> Nome</th>
                <th><i class="fas fa-file-invoice"></i> Descrição</th>
                <th><i class="fas fa-rocket"></i> Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a title="Visualizar Detalhado" href="{{ route('categories.show', $category->id) }}" class="btn btn-success">
                        <i class="fas fa-search"></i>
                    </a>

                    <a title="Editar Categoria" href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning text-white">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form class="d-inline" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Tem certeza que deseja deletar esta categoria?')" type="submit" title="DELETAR CATEGORIA!" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
