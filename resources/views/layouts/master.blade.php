<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes._top')
</head>

<body class="goto-here">
    @include('layouts.includes._nav')
    <!-- END nav -->
    @yield('content')
    

    @include('layouts.includes._subscribe')
    @include('layouts.includes._footer')



    <!-- loader -->
    @include('layouts.includes._loader')


    @include('layouts.includes._scripts')

</body>

</html>
