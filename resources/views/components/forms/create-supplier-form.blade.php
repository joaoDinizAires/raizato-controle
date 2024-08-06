
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-center text-2xl font-bold mb-6">Cadastro de Fornecedor</h2>
        <form method="POST" action="{{ route('supplier.store') }}">
            @csrf
    

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nome do Fornecedor
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Nome do Fornecedor">
                <x-error-message field="name" />
            </div>
    

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="cnpj">
                        CNPJ
                    </label>
                    <input  id="cnpj" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cnpj" type="text" placeholder="XX.XXX.XXX/0001-XX">
                    <x-error-message field="cnpj" />
                </div>
    
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="email@exemplo.com">
                    <x-error-message field="email" />
                </div>
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                    Telefone
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id ="phone" name="phone" type="text" placeholder="(XX) XXXXX-XXXX">
                <x-error-message field="phone" />
            </div>
    
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Cadastrar Fornecedor
                </button>
            </div>
        </form>
    </div>
    {{--Mask input--}}
    <script>
        $(document).ready(function(){
            $('#phone').mask('(00)00000-0000');
            $('#cnpj').mask('00.000.000/0000-00');
        });
    </script>
    
