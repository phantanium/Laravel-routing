<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Contact List') }}
                </h2>

                <p class="mt-1 mb-2 text-sm text-gray-600">
                    {{ __('Here is your contact list.') }}
                </p>
                <div class="flex justify-between items-center">
                    <form action="" method="get">
                        <input type="text" name="search" class="border border-gray-300 shadow  rounded p-3" placeholder="Cari data..." value="{{ request('search') }}">
                    </form>
                    <a href="{{ route('contacts.create') }}"
                       class="px-4 py-3 bg-indigo-500 rounded hover:bg-indigo-700 my-2 ring-indigo-300 border border-indigo-200 text-white">Create
                        Contact</a>
                </div>
                
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="p-2 border">Name</th>
                        <th class="p-2">Avatar</th>
                        <th class="p-2 border">Phone number</th>
                        <th class="p-2 border">Gender</th>
                        <th class="p-2 border">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td class="border p-2">{{ $contact->name }}</td>
                            <td class="p-2 flex justify-center">
                                <img src="{{ Storage::url($contact->avatar) }}" class="h-32 w-32"/>
                            </td>
                            <td class="border p-2">{{ $contact->phone_number }}</td>
                            <td class="border p-2">{{ $contact->gender }}</td>
                            <td class="border p-2">
                                <a href="{{ route('contacts.edit', $contact) }}"
                                   class="text-indigo-700 hover:text-gray-600">Edit</a>
                                   <td class="border p-2">
                                    <a href="{{ route('contacts.edit', $contact) }}"
                                       class="text-indigo-700 hover:text-gray-600">Edit</a>
                                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="bg-red-500 text-white p-3">
                                    </form>
                                </td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>