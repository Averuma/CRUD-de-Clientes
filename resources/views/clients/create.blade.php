<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Cadastrar Cliente') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="p-1">
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                        role="alert">
                                        <span class="font-medium">{{ $error }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <form class="p-10" action="{{ route('clients.store') }}" method="POST" class="p-10">
                            @csrf
                            @method('POST')
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                    </label>
                                    <input type="text" id="name" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira o nome" required>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                    </label>
                                    <input type="email" id="email" name="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira o email" required>
                                </div>
                                <div>
                                    <label for="cpf"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
                                    <input type="number" id="cpf" name="cpf"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira o CPF" required>
                                </div>
                                <div>
                                    <label for="birthdate"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dt.
                                        Nascimento
                                    </label>
                                    <input type="date" id="birthdate" name="birthdate"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira a data de nascimento" required>
                                </div>
                                <div>
                                    <label for="zip_code"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP
                                    </label>
                                    <input type="number" id="zip_code" name="zip_code" maxlength="8"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="insira o CEP" required>
                                </div>
                                <div>
                                    <label for="street"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rua
                                    </label>
                                    <input type="text" id="street" name="street"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira a rua" required>
                                </div>
                            </div>
                            <div class="grid gap-6 mb-6 md:grid-cols-3">
                                <div>
                                    <label for="house_number"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número da
                                        casa
                                    </label>
                                    <input type="number" id="house_number" name="house_number"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira o número da casa" required>
                                </div>
                                <div>
                                    <label for="city"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
                                    <input type="text" id="city" name="city"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira a cidade" required>
                                </div>
                                <div>
                                    <label for="state"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado (UF)
                                    </label>
                                    <input type="text" id="state" name="state"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Insira o estado" required>
                                </div>
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    document.getElementById('zip_code').addEventListener('input', function() {
        const cep = this.value.replace(/\D/g, '');
        if (cep.length === 8) {
            axios.get(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => {
                    const addressData = response.data;
                    document.getElementById('street').value = addressData.logradouro;
                    document.getElementById('city').value = addressData.localidade;
                    document.getElementById('state').value = addressData.uf;
                })
                .catch(error => {
                    console.error('Erro ao consultar o CEP:', error);
                });
        }
    });
</script>
