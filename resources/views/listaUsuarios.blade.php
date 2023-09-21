<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>


    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
    


<h1 class="w-full text-center text-xl font-bold">Lista de Usuários</h1>




<div class="overflow-x-auto">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
    
        <th>Usuario</th>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($usuarios as $usuario)

      <!-- row 1 -->
      <tr>
        <th>{{$usuario->usuario}}</th>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->email}}</td>
      </tr>
    
      @endforeach
      
    </tbody>

  </table>
</div>

</body>
</html>