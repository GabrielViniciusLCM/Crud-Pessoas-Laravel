<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Editar Pessoa </h1>
    <form method = "post" action ="{{route('pessoas.atualizar', ['pessoas' => $pessoas])}}">
        {{csrf_field()}}
        @method ('put')
        <div>
            @if($errors -> any() )
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div>
            <label>ID</label>
            <input type= "text" name="id" placeholder="id" value ="{{$pessoas -> id}}"> 
        </div>
        <div>
            <label>Nome</label>
            <input type= "text" name="nome" placeholder="nome" value ="{{$pessoas -> nome}}">
        </div>
        <div>
            <label>CPF</label>
            <input type= "text" name="cpf" placeholder="cpf" value ="{{$pessoas -> cpf}}">
        </div>
        <div>
            <label>Patente</label>
            <input type= "text" name="patente" placeholder="patente" value ="{{$pessoas -> patente}}">
        </div>
        <div>
            <label>Admissão</label>
            <input type= "text" name="admissao" placeholder="admissao" value ="{{$pessoas -> admissao}}">
        </div>
        <div>
            <input type= "submit" value = "Salvar">
        </div>

    </form>

</body>
</html>