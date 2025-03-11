<!DOCTYPE html>
<html lang="en" class="h-full bg-putih">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }} - Test PT Lumut Karya Sejahtera</title>

</head>

<body>
    <div class="flex h-full">

        <x-dashboard.sidebar>
            <div class="flex flex-col flex-1">

                <main>
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">KESALAHAN!</strong>
                            <span class="block sm:inline">Terjadi kesalahan pada input</span>
                            <ul class="list-disc pl-5 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li class="text-sm text-red">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ $slot }}
                </main>

            </div>
        </x-dashboard.sidebar>

    </div>

    <x-dashboard.footer />
</body>

</html>
