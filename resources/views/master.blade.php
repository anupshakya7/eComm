<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <title>E-comm Project</title>
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous"></script>
</body>
<style>
    .custom-login {
        height: 100%;
    }

    .custom-product {
        height: 100%;
    }

    img.slider-img {
        height: 750px !important;
    }

    .slider-text {
        background: #162d1687;
    }

    .trending-image {
        height: 100px;
    }

    .trending-wrapper {
        margin: 40px;
    }

    .trending-item {
        float: left;
        width: 16%;
    }
</style>

</html>