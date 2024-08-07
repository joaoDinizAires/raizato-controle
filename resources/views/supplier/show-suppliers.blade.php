<x-header>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-center text-2xl font-bold mb-6">Lista de Fornecedores</h2>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nome da Empresa</th>
                    <th class="py-2 px-4 border-b">CNPJ</th>
                    <th class="py-2 px-4 border-b">Contato</th>
                    <th class="py-2 px-4 border-b">Telefone</th>
                    <th class="py-2 px-4 border-b">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $supplier->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $supplier->cnpj }}</td>
                        <td class="py-2 px-4 border-b">{{ $supplier->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $supplier->phone }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('supplier.edit', $supplier->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Editar
                            </a>
                            <form action="{{ route('supplier.delete', $supplier->id) }}" method="POST" style="display:inline;">
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
    </div>
</x-header>
