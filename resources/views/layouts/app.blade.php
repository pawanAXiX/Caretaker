<html>
<head>
    @include('partials.header')
</head>
<body class="index">
<div class="custom modal-index relative w-full h-full bg-cover bg-center flex overflow-hidden transition-all duration-500">
    <div class="container flex justify-content-end align-content-center m-auto  w-full h-full m-auto">
        @yield('index')
    </div>
</div>
<div class="custom modal-book relative w-full h-full bg-cover bg-center  flex transition-all duration-500">
    <div class="container flex flex-col justify-content-end align-content-center m-auto  w-full h-full mt-auto">
        @yield('book')
    </div>
</div>
@vite('resources/js/app.js')
</body>
</html>
