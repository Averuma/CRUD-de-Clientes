<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Lista de Clientes') }}
            </h2>
            <a href="{{ route('clients.create') }}" class="text-sm font-medium text-blue-600 hover:underline">
                <button type="button"
                    class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    Cadastrar Cliente
                </button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                        @if (session('success'))
                            <div class="p-1">
                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                    role="alert">
                                    <span class="font-medium">{{ session('success') }}</span>
                                </div>
                            </div>
                        @endif

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center">Nome</th>
                                    <th scope="col" class="px-6 py-3 text-center"">CPF</th>
                                    <th scope="col" class="px-6 py-3 text-center"">Idade</th>
                                    <th scope="col" class="px-6 py-3 text-center"">Dt. Nascimento</th>
                                    <th scope="col" class="px-6 py-3 text-center"">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $client->name }}</th>
                                        <td scope="row" class="px-6 py-4 text-center">
                                            {{ $client->cpf }}</td>
                                        <td scope="row" class="px-6 py-4 text-center">{{ $client->age }}</td>
                                        <td scope="row" class="px-6 py-4 text-center">
                                            {{ $client->formattedBirthdate }}</td>
                                        <td scope="row" class="px-6 py-4 text-center">

                                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                                <a href="{{ route('clients.show', $client) }}">
                                                    <button type="button"
                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-green-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-green-700 focus:text-green-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">

                                                        <svg class="w-3 h-3 mr-2" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                                        </svg>
                                                        Mostrar

                                                    </button>
                                                </a>
                                                <a href="{{ route('clients.edit', $client) }}">
                                                    <button type="button"
                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-yellow-100 hover:text-yellow-700 focus:z-10 focus:ring-2 focus:ring-yellow-700 focus:text-yellow-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                        <svg class="w-3 h-3 mr-2" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                                                        </svg>
                                                        Editar
                                                    </button>
                                                </a>
                                                <button x-data=""
                                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-client-deletion_{{ $client->id }}', { id: {{ $client->id }} })"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-red-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                    <svg class="w-3 h-3 mr-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                        <path
                                                            d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                    </svg>
                                                    Deletar
                                                </button>


                                                <x-modal name="confirm-client-deletion_{{ $client->id }}"
                                                    :show="$errors->userDeletion->isNotEmpty()" focusable>
                                                    <form action="{{ route('clients.destroy', $client->id) }}"
                                                        method="POST" class="p-6">
                                                        @csrf
                                                        @method('DELETE')
                                                        <h2 class="text-lg font-medium text-gray-900">
                                                            {{ __('Certeza que deseja deletar este cliente?') }}
                                                        </h2>

                                                        <p class="mt-1 text-sm text-gray-600">
                                                            {{ __('Uma vez que o cliente for deletado, seus dados serão permanentemente perdidos.') }}
                                                        </p>

                                                        <div class="flex justify-end mt-6">
                                                            <x-secondary-button x-on:click="$dispatch('close')">
                                                                {{ __('Cancelar') }}
                                                            </x-secondary-button>

                                                            <x-danger-button class="ml-3">
                                                                {{ __('Deletar Cliente') }}
                                                            </x-danger-button>
                                                        </div>
                                                    </form>
                                                </x-modal>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="m-4">
                            {{ $clients->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
