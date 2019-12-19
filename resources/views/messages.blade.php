@extends("layouts.app")


@section("content")
    <h1>Menssagem Recebidas</h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Nome: {{$message->name}}</li>
                <li class="list-group-item">Email: {{$message->email}}</li>
                <li class="list-group-item">Mensagem: {{$message->message}}</li>
            </ul>
            <br>
        @endforeach

    @endif
@endsection("content")

@section("sidebar")
    @parent
    <p>Texto dentro da section da sidebar da view suas mensagens</p>
@endsection