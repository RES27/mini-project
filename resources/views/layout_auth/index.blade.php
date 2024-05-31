<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlackBoard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .img-fluid {
            width: 50%;
            height: auto;
        }

        .footer {
        padding-bottom: -100px;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        background-color: #f8f9fa;
        }
    </style>
</head>
<body>


    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('layout_login.footer')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
