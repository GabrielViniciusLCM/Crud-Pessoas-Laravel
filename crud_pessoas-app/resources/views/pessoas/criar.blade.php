<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Nova Pessoa </h1>
    <form method = "post" action ="{{ route('pessoas.criarpost') }}">
        {{csrf_field()}}
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
            <input type= "text" name="id" placeholder="id">
        </div>
        <div>
            <label>Nome</label>
            <input type= "text" name="nome" placeholder="nome">
        </div>
        <div>
            <label>CPF</label>
            <input type= "text" name="cpf" placeholder="cpf">
        </div>
        <div>
            <label>Patente</label>
            <input type= "text" name="patente" placeholder="patente">
        </div>
        <div>
            <label>Admissão</label>
            <input type= "text" name="admissao" placeholder="admissao">
        </div>
        <div>
            <input type= "submit" value = "Salvar">
        </div>

    </form>

</body>
</html>