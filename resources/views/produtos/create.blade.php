@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-6 sm:px-8 py-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center ">Criar Produto</h1>

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <!-- Nome -->
                <div>
                    <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" id="nome" name="nome" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>

                <!-- Descrição -->
                <div>
                    <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                    <input type="text" id="descricao" name="descricao" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>

                <!-- Quantidade -->
                <div>
                    <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>

                <!-- Preço -->
                <div>
                    <label for="preco" class="block text-sm font-medium text-gray-700">Preço</label>
                    <input type="text" id="preco" name="preco" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>

                <!-- Botão Salvar -->
                <div class="mt-6">
                    <button type="submit" class="w-full bg-green-500 text-white px-6 py-3 rounded-md font-semibold hover:bg-green-600 transition duration-300">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
