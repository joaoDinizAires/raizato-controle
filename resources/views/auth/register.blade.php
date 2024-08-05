<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-center text-2xl font-bold mb-6">Registrar</h2>
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="full_name">
                        Nome completo
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="full_name" type="text" placeholder="Seu Nome completo">
                    <x-error-message field="full_name" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="Seu email">
                    <x-error-message field="email" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                        Celular
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="phone" id="phone" type="text" placeholder="(XX)XXXXX-XXXX">
                    <x-error-message field="phone" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Senha
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Sua senha">
                    <x-error-message field="password" />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                        Confirme a Senha
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" placeholder="Confirme sua senha">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Selecione o Tipo de Usuário
                    </label>
                    {{--Verifica se ja existe um administrador--}}
                    @if (!$adminExists > 0)

                    <div class="flex items-center">
                        <input required class="mr-2 leading-tight" type="radio" name="user_type" value="admin">
                        <label class="text-gray-700" for="admin">Administrador</label>
                    </div>

                    @endif

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
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{route('login')}}">
                        Voltar para Login
                    </a>
                </div>
            </form>
        </div>
        <p class="text-center text-gray-500 text-xs">
            &copy;2024 Todos os direitos reservados.
        </p>
    </div>
    <script>
        $(document).ready(function(){
            $('#phone').mask('(00)00000-0000');
        });
    </script>
</body>
</html>
