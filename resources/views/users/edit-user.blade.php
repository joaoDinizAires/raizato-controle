<!-- resources/views/users/edit-user.blade.php -->
<x-header>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-center text-2xl font-bold mb-6">Editar Usuário</h2>
        <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="full_name">
                    Nome Completo
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="full_name" type="text" value="{{ old('full_name', $user->full_name) }}">
                <x-error-message field="full_name" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                    Telefone
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="phone" type="text" value="{{ old('phone', $user->phone) }}">
                <x-error-message field="phone" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" value="{{ old('email', $user->email) }}">
                <x-error-message field="email" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user_type">
                    Tipo de Usuário
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="user_type">
                    <option value="admin" {{ old('user_type', $user->user_type) == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="manager" {{ old('user_type', $user->user_type) == 'manager' ? 'selected' : '' }}>Manager</option>
                    <option value="user" {{ old('user_type', $user->user_type) == 'user' ? 'selected' : '' }}>User</option>
                </select>
                <x-error-message field="user_type" />
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Atualizar Usuário
                </button>
            </div>
        </form>
    </div>
</x-header>
