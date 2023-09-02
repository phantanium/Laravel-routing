<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Edit Contact') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Edit your friends contact to stay updated.') }}
                </p>
                <form method="post" enctype="multipart/form-data" action="{{ route('contacts.update', $contact) }}" class="mt-6 space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" name="name" type="text"
                                      class="mt-1 block w-full" placeholder="Your name" value="{{ $contact->name }}"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <div>
                        <x-input-label for="name" :value="__('Phone number')"/>
                        <x-text-input id="phone_number" name="phone_number" type="text"
                                      class="mt-1 block w-full" placeholder="08xxxxxx" value="{{ $contact->phone_number }}"/>
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>
                    </div>

                    <div>
                        <x-input-label for="name" :value="__('Avatar')"/>
                        <x-text-input id="avatar" name="avatar" type="file"
                                      class="mt-1 block w-full"/>
                        <x-input-error :messages="$errors->get('avatar')" class="mt-2"/>
                    </div>
                    <div>
                        <x-input-label for="name" :value="__('Gender')"/>
                        <select name="gender" id=""
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="Laki-Laki" @selected($contact->gender == 'Laki-Laki')>Laki-Laki</option>
                            <option value="Perempuan" @selected($contact->gender == 'Perempuan')>Perempuan</option>
                        </select>
                        <x-input-error :messages="$errors->get('gender')" class="mt-2"/>
                    </div>
                    <div>
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
