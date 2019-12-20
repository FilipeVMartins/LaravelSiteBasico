@extends("layouts.app")


@section("content")
    <h1>Menssagem Recebidas</h1>
    @if(count($messages) > 0)
    {!! Form::open(['url' => 'messages/submitdelet']) !!}
    {{Form::submit('Deletar Mensagens Selecionadas', ["class" => "btn btn-danger"])}}
        <br>
        <br>
        <?php $i=0; ?>
        @foreach($messages as $message)

            <ul class="list-group">
                <li class="list-group-item">Nome: {{$message->name}}</li>
                <li class="list-group-item">Email: {{$message->email}}</li>
                <li class="list-group-item">Mensagem: {{$message->message}}</li>
                <li class="list-group-item">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck{{$i}}" name="{{$i}}" value="{{$message->id}}">
                        <label class="custom-control-label" for="customCheck{{$i}}">Marque a caixa para selecionar a mensagem acima para exclusão.</label>
                    </div>
                </li>
            </ul>
            <br>
            <?php $i++ ?>
        @endforeach
    {{Form::submit('Deletar Mensagens Selecionadas', ["class" => "btn btn-danger"])}}
    {!! Form::close() !!}
    @endif
@endsection("content")

@section("sidebar")
    @parent
    <p>Texto dentro da section da sidebar da view suas mensagens</p>
@endsection