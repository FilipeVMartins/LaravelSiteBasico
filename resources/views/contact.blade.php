@extends("layouts.app")



@section("content")
    <h1>Contato</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name: ')}}
            {{Form::text('name', '', ["class" => "form-control",'placeholder' => 'Insira seu nome'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address: ')}}
            {{Form::text('email', '', ["class" => "form-control", 'placeholder' => 'exemplo@gmail.com'])}} <?php // é necessário ter o segundo parâmetro, nem que seja uma string vazia ""?>
        </div>
        <div class="form-group">
            {{Form::label('message', 'Enter Message: ')}}
            {{Form::textarea('message', "",["class" => "form-control", 'placeholder' => 'Sua mensagem aqui.'])}} 
        </div>
        <div>
            {{Form::submit('Enviar', ["class" => "btn btn-primary"])}}
        </div>
    {!! Form::close() !!}
@endsection("content")