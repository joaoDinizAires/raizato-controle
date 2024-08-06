@props(['suppliers'])
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h2 class="text-center text-2xl font-bold mb-6">Cadastro de Produto</h2>
    <form method="POST" action="{{route('product.store')}}">
        @csrf

        <!-- Nome do Produto -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nome do Produto
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Nome do Produto">
            <x-error-message field="name" />
        </div>

        <!-- Código do Produto e Data de Validade -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="code">
                    Código do Produto
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="code" type="text" placeholder="Código do Produto">
                <x-error-message field="code" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="expiration_date">
                    Data de Validade
                </label>
                {{--minimo da data de validade até a data atual ou adiante--}}
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="expiration_date" type="date">
                <x-error-message field="expiration_date" />
            </div>
        </div>

        <!-- Preço de Venda e Preço de Custo -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="sale_price">
                    Preço de Venda
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="sale_price" type="number" step="0.01" placeholder="Preço de Venda">
                <x-error-message field="sale_price" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cost_price">
                    Preço de Custo
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cost_price" type="number" step="0.01" placeholder="Preço de Custo">
                <x-error-message field="cost_price" />
            </div>
        </div>

        <!-- Quantidade e Fornecedor -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
                    Quantidade
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="quantity" type="number" placeholder="Quantidade">
                <x-error-message field="quantity" />
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="supplier_id">
                    Fornecedor
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="supplier_id">
                    @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}"> {{ $supplier->name }} </option>
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
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" placeholder="Descrição do Produto"></textarea>
            <x-error-message field="description" />
        </div>

        <!-- Botão de Submissão -->
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Cadastrar Produto
            </button>
        </div>
    </form>
</div>
