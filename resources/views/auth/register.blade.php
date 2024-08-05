<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-center text-2xl font-bold mb-6">Registrar</h2>
            <form method="POST" action="{{route('store')}}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Nome de Usuário
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="Seu nome de usuário">
                    <x-error-message field="username" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="Seu email">
                    <x-error-message field="email" />              </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Senha
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Sua senha">
                    <x-error-message field="password" />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">
                        Confirme a Senha
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" placeholder="Confirme sua senha">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Selecione o Tipo de Usuário
                    </label>
                    <div class="flex items-center">
                        <input required class="mr-2 leading-tight" type="radio" name="user_type" value="admin">
                        <label class="text-gray-700" for="admin">Administrador</label>
                    </div>
                    <div class="flex items-center mt-2">
                        <input required class="mr-2 leading-tight" type="radio" name="user_type" value="manager">
                        <label class="text-gray-700" for="manager">Gerente</label>
                    </div>
                    <div class="flex items-center mt-2">
                        <input required class="mr-2 leading-tight" type="radio" name="user_type" value="user">
                        <label class="text-gray-700" for="user">Usuário Comum</label>
                    </div>
                    <x-error-message field="user_type" />
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Registrar
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Voltar para Login
                    </a>
                </div>
            </form>
        </div>
        <p class="text-center text-gray-500 text-xs">
            &copy;2024 Todos os direitos reservados.
        </p>
    </div>
</body>
</html>
