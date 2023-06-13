<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="example@gmail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Endereco -->
        <div class="mt-4">
            <x-input-label for="endereco" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco"/>
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- Cep -->
        <div class="mt-4">
            <x-input-label for="cep" :value="__('Cep')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" placeholder="00000-000"/>
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>
        
        <!-- Estado -->
        <div class="mt-4">
            <x-input-label for="estado" :value="__('Estado')" />
            <select id="estado" required name="estado" class="form-select block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 
        dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 
        focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
                                        <option selected value="1">AC</option>
                                            <option value="2">AL</option>
                                            <option value="3">AP</option>
                                            <option value="4">AM</option>
                                            <option value="5">BA</option>
                                            <option value="6">CE</option>
                                            <option value="7">ES</option>
                                            <option value="8">GO</option>
                                            <option value="9">MA</option>
                                            <option value="10">MT</option>
                                            <option value="11">MS</option>
                                            <option value="12">MG</option>
                                            <option value="13">PA</option>
                                            <option value="14">PB</option>
                                            <option value="15">PR</option>
                                            <option value="16">PE</option>
                                            <option value="17">PI</option>
                                            <option value="18">RJ</option>
                                            <option value="19">RN</option>
                                            <option value="20">RS</option>
                                            <option value="21">RO</option>
                                            <option value="22">RR</option>
                                            <option value="23">SC</option>
                                            <option value="24">SP</option>
                                            <option value="25">SE</option>
                                            <option value="26">TO</option>
                                            <option value="27">DF</option>
                                    </select>
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <!-- Telefone -->
        <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="tel" name="telefone" placeholder="(00) 0000-0000"/>
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Celular -->
        <div class="mt-4">
            <x-input-label for="celular" :value="__('Celular')" />
            <x-text-input id="celular" class="block mt-1 w-full" type="tel" name="celular" placeholder="(00) 00000-0000"/>
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
