<x-header>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-center text-2xl font-bold mb-6">Lista de Usuários</h2>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nome Completo</th>
                    <th class="py-2 px-4 border-b">Telefone</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Tipo de Usuário</th>
                    <th class="py-2 px-4 border-b">Verificado em</th>
                    <th class="py-2 px-4 border-b">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user->full_name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->phone }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ ucfirst($user->user_type) }}</td>
                        <td class="py-2 px-4 border-b">
                            {{ $user->email_verified_at ? $user->email_verified_at->format('d/m/Y H:i:s') : 'Não Verificado' }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('user.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Editar
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
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
            {{ $users->links() }}
        </div>
    </div>

</x-header>