<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>


    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
    


<h1 class="w-full text-center text-xl font-bold">Cadastro de Usuários</h1>

<form class="card-body max-w-md m-auto" action="{{route('salva-usuario')}}" method="post">

@csrf

<div class="form-control">
<label class="label">
  <span class="font-bold">Nome</span>
</label>
<input name="nome" type="text" placeholder="nome" class="input input-bordered" required>



</div>

<div class="form-control">
<label class="label">
  <span class="font-bold">Usuário</span>
</label>
<input name="usuario" type="text" placeholder="usuario" class="input input-bordered" required>



</div>


<div class="form-control">
<label class="label">
  <span class="font-bold">Bio</span>
</label>
<input name="bio" type="text" placeholder="Bio" class="input input-bordered" required>



</div>

<div class="form-control">
<label class="label">
  <span class="font-bold">E-mail</span>
</label>
<input name="email" type="text" placeholder="Email" class="input input-bordered" required>

</div>

<div class="form-control">
<label class="label">
  <span class="font-bold">Senha</span>
</label>
<input name="senha" type="password" placeholder="Senha" class="input input-bordered" required>



</div>


<button class="btn btn-success text bg blue-900">Salvar</button>


</form>

</body>
</html>