<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colmenas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-950">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-900">
                            <thead class="text-xs text-gray-900 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-900">
                                <tr>
                                    <th scope="col" class="px-6 py-3">colmena</th>
                                    <th scope="col" class="px-6 py-3">ubicacion</th>
                                    <th scope="col" class="px-6 py-3">reina</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hives as $hive)
                                <tr class="odd:bg-white even:bg-gray-500 border-b dark:border-gray-900">
                                    <td class="px-6 py-4">{{ $hive->hive}}</td>
                                    <td class="px-6 py-4">{{ $hive->location->reference_point}}</td>

                                    @foreach($hive->queens as $queen)
                                    <td>{{ $queen->name }} </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>