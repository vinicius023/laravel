{{--<h1>Olá {{$n}}!</h1>--}}
<h1>Hello Maker</h1>

<form action="/hello" method="post">
    {{ csrf_field() }}
    {{--<input type="text" name="name" value="{{$n}}">--}}
    <input type="text" name="name">
    <input type="submit" value="enviar">
</form>