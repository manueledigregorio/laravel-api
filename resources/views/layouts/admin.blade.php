<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-
    iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous"/>
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    @include('admin.partials.header')

    <div class="main-wrapper d-flex">
        @include('admin.partials.sidebar')

        @yield('content')
    </div>

</body>
</html>
