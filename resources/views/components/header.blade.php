<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
        
        <form method="POST" action="{{ route('product.search') }}" class="flex-1 mx-4">
            @csrf
            <input type="text" placeholder="Pesquisar..." name="search" class="w-full py-2 px-4 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </form>
        
        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900">Inicio</a>
            <a href="{{ route('product.create') }}" class="text-gray-700 hover:text-gray-900">Cadastro de Produtos</a>
            <a href="{{ route('supplier.create') }}" class="text-gray-700 hover:text-gray-900">Cadastro de Fornecedor</a>
            <a href="{{ route('supplier.index') }}" class="text-gray-700 hover:text-gray-900">Fornecedores</a>
            <a href="{{route('user.show')}}" class="text-gray-700 hover:text-gray-900">Usuários</a>
        </div>
    </div>
</nav>

<div class="container mx-auto mt-8">
    {{$slot}}
</div>

</body>
</html>
