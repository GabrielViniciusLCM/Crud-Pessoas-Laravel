<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pessoas</h1>
    <div>
        @if(session()-> has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <a href ="{{'/pessoas/criar'}}">Nova Pessoa</a>
    </div>
    <div>
        <table border = "1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Patente</th>
                <th>Admissao</th>
                <th>Editar</th>
                <th>Excluir</th>

            </tr>
            @foreach ($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa -> id}}</td>
                <td>{{$pessoa -> nome}}</td>
                <td>{{$pessoa -> cpf}}</td>
                <td>{{$pessoa -> patente}}</td>
                <td>{{$pessoa -> admissao}}</td>
                <td>
                    <a href ="{{route('pessoas.editar', ['pessoas' => $pessoa] )}}"> Editar </a>
                </td>
                <td>
                    <form method = "post" action="{{route('pessoas.excluir', ['pessoas' => $pessoa])}}">
                        {{csrf_field()}}
                        @method ('delete')
                        <input type= "submit" value= "Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>