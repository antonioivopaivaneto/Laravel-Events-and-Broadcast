<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Registro</title>
</head>
<body>
    <h1>Registrar Novo Usuário</h1>
    <form method="POST" action="{{ route('registrar') }}">
        @csrf

        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Registrar</button>
    </form>


    <a href="{{route('contador')}}"> contador</a>
</body>
</html>
