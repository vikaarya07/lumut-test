<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-title>
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
                        <th scope="col" class="px-6 py-5 whitespace-nowrap">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-5 whitespace-nowrap">
                            Password
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
                                {{ $account->username }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $account->password }}
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

    </x-title>
</x-layout>
