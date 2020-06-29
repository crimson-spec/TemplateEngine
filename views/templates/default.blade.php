<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="@php echo DIRPAGE.'lib/css/style.css'; @endphp">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <br>
    <a href="@php echo DIRPAGE.'produto'; @endphp">VOLTAR</a>
</body>

</html>