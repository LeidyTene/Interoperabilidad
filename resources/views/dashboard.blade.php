
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Investigacion Formativa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Informe de la Investigacion Formativa") }}
                    <br>
                    <!-- Enlace al PDF -->
                    <a href="{{ asset('docs/Informe laravel Final VF.pdf') }}" target="_blank" class="mt-4 inline-block text-blue-500 hover:text-blue-700 underline">
                        Ver o descargar el informe de la investigación
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
