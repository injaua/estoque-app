@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Gestão de Estoque</h1>

        <!-- Botão Adicionar Produto -->
        <a href="{{ route('produtos.create') }}" class="inline-block bg-green-500 text-white px-6 py-3 rounded-md font-semibold hover:bg-green-600 transition duration-300 mb-6">Adicionar Produto</a>

        <!-- Tabela de Produtos -->
        <div class="overflow-hidden bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Nome</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Descrição</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Quantidade</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Preço</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    @foreach ($produtos as $produto)
                        <tr class="hover:bg-gray-100 border-t border-b">
                            <td class="px-6 py-4">{{ $produto->nome }}</td>
                            <td class="px-6 py-4">{{ $produto->descricao }}</td>
                            <td class="px-6 py-4">{{ $produto->quantidade }}</td>
                            <td class="px-6 py-4">{{ number_format($produto->preco, 2, ',', '.') }}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="{{ route('produtos.edit', $produto) }}" class="px-4 py-2 bg-yellow-500 text-white font-semibold rounded-md hover:bg-yellow-600 transition duration-300">Editar</a>

                                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 transition duration-300">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
