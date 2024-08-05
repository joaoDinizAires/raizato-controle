<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <span class="text-gray-700 font-bold">{{ Auth::user()->full_name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Logout
                </button>
            </form>
        </div>
        

        <div class="flex-1 mx-4">
            <input type="text" placeholder="Pesquisar..." class="w-full py-2 px-4 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        

        <div class="flex items-center space-x-4">
            <a href="#" class="text-gray-700 hover:text-gray-900">Cadastro de Produtos</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Fornecedores</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Usuários</a>
        </div>

    </div>
</nav>


<div class="container mx-auto mt-8">
    {{$slot}}
</div>

</body>
</html>