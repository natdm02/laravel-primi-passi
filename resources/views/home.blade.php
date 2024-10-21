<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-primi-passi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSkt85Bx0ILb6vLcVKKKyi7KjyEme1MQu2KnZ9o6z2k" crossorigin="anonymous">
</head>
<body>

    @include('partials.header')

    <main class="container py-4">
        <h1 class="display-4 text-center">Hello, {{$name}}</h1>
    </main>


    @include('partials.footer')
</body>

</html>
