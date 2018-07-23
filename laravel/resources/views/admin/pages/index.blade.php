@component( 'admin.layouts.elements.body' )
    @slot( 'title' ) Páginas @endslot
    @slot( 'description' ) Administração de páginas @endslot

    <a href="{{ route('pages.create') }}" class="btn btn-primary">Novo</a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th class="text-right">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{$page->id}}</td>
            <td>{{$page->title}}</td>
            <td class="text-right">
                <a href="{{ route('pages.show', $page->id) }}" class="btn btn-primary btn-sm">
                    <span><i class="fas fa-plus"></i></span>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $pages->links() }}

@endcomponent