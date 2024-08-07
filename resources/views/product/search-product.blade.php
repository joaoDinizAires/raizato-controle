<x-header>
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-6">Resultados da Pesquisa</h2>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nome do Produto</th>
                    <th class="py-2 px-4 border-b">Fornecedor</th>
                    <th class="py-2 px-4 border-b">Preço</th>
                    <th class="py-2 px-4 border-b">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->supplier->name }}</td>
                        <td class="py-2 px-4 border-b">R$ {{ $product->sale_price }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{route('product.edit', $product->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Editar
                            </a>
                            <form action="{{route('product.delete',$product->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
</x-header>
