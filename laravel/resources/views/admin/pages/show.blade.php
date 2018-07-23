@component( 'admin.layouts.elements.body' )
    @slot( 'title' ) Páginas @endslot
    @slot( 'description' ) Exibição de Página @endslot

    <h4>{{ $page->title }}</h4>

    <p>
        <small>Criado em {{ $page->created_at->format('d/m/Y H:i:s') }} | Atualizado em {{ $page->updated_at->format('d/m/Y H:i:s') }}</small>
    </p>

    {!! $page->body !!}

    <a href="{{ route('pages.index') }}" class="btn btn-primary btn-sm">voltar</a>
    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary btn-sm">editar</a>

    <form action="{{ route('pages.destroy', $page->id) }}" class="form-group row" method="post" style="display: contents;">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="remover" class="btn btn-primary btn-sm">
    </form>

@endcomponent