<x-header>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-center text-2xl font-bold mb-6">Estoque Baixo</h2>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nome do Produto</th>
                    <th class="py-2 px-4 border-b">Estoque</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lowStockProducts as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-8">
        <h2 class="text-center text-2xl font-bold mb-6">Próximos a Vencer</h2>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nome do Produto</th>
                    <th class="py-2 px-4 border-b">Estoque</th>
                    <th class="py-2 px-4 border-b">Data de Validade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nearExpiryProducts as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->quantity }}</td>
                        <td class="py-2 px-4 border-b">{{ \Carbon\Carbon::parse($product->expiration_date)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-header>