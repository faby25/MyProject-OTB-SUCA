{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tarifa Consumo</title>
  </head>
  <body>
        <h1>Hello, world!</h1>
    <div class="container">
        @yield('contenido')
    </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html> --}}
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Dashboard Socio') }}
            <a href="{{ url('Tconsumos') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tarifa</a>
        </h2>
    </x-slot>
    <main >
  <x-slot name="content">
  </x-slot>

    </main>


</x-app-layout>
