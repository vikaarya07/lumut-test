<x-dashboard.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-dashboard.breadcrumbs>
        <x-slot:title>{{ $title }}</x-slot:title>

        <div class="flex my-6 items-end space-x-3">
            <a href="{{ route('admin.account.create') }}"
                class="flex items-center justify-center px-3 py-2 text-sm font-semibold tracking-wide text-white capitalize transition-colors duration-200 transform bg-teal-500 rounded-md hover:bg-teal-500/80 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                <span>Tambah account</span>
            </a>
        </div>

        <div class="relative overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left table-auto text-gray-600">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-5 w-24">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-5">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-5 whitespace-nowrap">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-5 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $key => $account)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-2">
                                {{ $accounts->firstItem() + $key }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $account->name }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $account->email }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $account->username }}
                            </td>
                            <td class="px-6 py-2">
                                <div class="flex items-center justify-start space-x-5">
                                    <a href="{{ route('admin.account.edit', $account->id) }}"
                                        class="text-sm text-sky-300 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                    <form id="delete-form" action="{{ route('admin.account.destroy', $account->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" id="delete-post"
                                            class="text-sm text-red-500 outline-none hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor"
                                                class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                @if ($accounts->isEmpty())
                    <h3 class="text-base font-medium text-center text-gray-700 my-12">Tidak Ada Data Account</h3>
                @endif
            </div>
        </div>

    </x-dashboard.breadcrumbs>

</x-dashboard.layout>
