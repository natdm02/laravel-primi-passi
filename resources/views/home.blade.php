<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-primi-passi</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybIXzAqjEr/rbKsvRH9zRiot6zLkpWFnHhHuBJi4W8Lfi6Ip6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93gZnpOf10sIYQ8z5Q14FmgN3PeK9iGkvrH3/t55B6TspbgNxM+nAP+zld9FI5" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
<body>

    @include('partials.header')

    <main class="container text-center py-4">
        <div class="text-center">
            <h1 class="display-4 mb-4">Hello, {{ $name }}</h1>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
