<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody style="text-align: center;">
    @foreach($pages as $page)
    <tr>
        <td>{{$page->id}}</td>
        <td>{{$page->title}}</td>
        <td>#</td>
    </tr>
    @endforeach
    </tbody>
</table>