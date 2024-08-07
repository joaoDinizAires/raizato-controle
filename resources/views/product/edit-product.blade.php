<x-header>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-center text-2xl font-bold mb-6">Editar produto</h2>
        <form method="POST" action="{{ route('product.update', $product->id) }}">
            @csrf
            @method('PUT')

            <!-- Nome do Produto -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nome do Produto
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Nome do Produto" value="{{ old('name', $product->name) }}">
                <x-error-message field="name" />
            </div>

            <!-- Código do Produto e Data de Validade -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="code">
                        Código do Produto
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="code" type="text" placeholder="Código do Produto" value="{{ old('code', $product->code) }}">
                    <x-error-message field="code" />
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="expiration_date">
                        Data de Validade
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="expiration_date" type="date" value="{{ old('expiration_date', $product->expiration_date) }}">
                    <x-error-message field="expiration_date" />
                </div>
            </div>

            <!-- Preço de Venda e Preço de Custo -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="sale_price">
                        Preço de Venda
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="sale_price" type="number" step="0.01" placeholder="Preço de Venda" value="{{ old('sale_price', $product->sale_price) }}">
                    <x-error-message field="sale_price" />
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="cost_price">
                        Preço de Custo
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cost_price" type="number" step="0.01" placeholder="Preço de Custo" value="{{ old('cost_price', $product->cost_price) }}">
                    <x-error-message field="cost_price" />
                </div>
            </div>

            <!-- Quantidade e Fornecedor -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
                        Quantidade
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="quantity" type="number" placeholder="Quantidade" value="{{ old('quantity', $product->quantity) }}">
                    <x-error-message field="quantity" />
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="supplier_id">
                        Fornecedor
                    </label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="supplier_id">
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}" {{ $supplier->id == old('supplier_id', $product->supplier_id) ? 'selected' : '' }}> {{ $supplier->name }} </option>
                        @endforeach
                    </select>
                    <x-error-message field="supplier_id" />
                </div>
            </div>

            <!-- Descrição do Produto -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Descrição
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" placeholder="Descrição do Produto">{{ old('description', $product->description) }}</textarea>
                <x-error-message field="description" />
            </div>

            <!-- Botão de Submissão -->
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Atualizar Produto
                </button>
            </div>
        </form>
    </div>

</x-header>