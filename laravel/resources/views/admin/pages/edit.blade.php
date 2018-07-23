@component( 'admin.layouts.elements.body' )
    @slot( 'title' ) Páginas @endslot
    @slot( 'description' ) Edição de Página @endslot

    <form action="{{ route('pages.update', $page->id) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('admin.pages.form')
    </form>

    <a href="{{ route('pages.index') }}" class="btn btn-primary btn-sm">voltar</a>

@endcomponent