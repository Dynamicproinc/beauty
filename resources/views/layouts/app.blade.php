<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }} </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{asset('css/style.css?v='.uniqid())}}">
    <link rel="stylesheet" href="{{asset('css/style_tallow.css?v='.uniqid())}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@livewireStyles

</head>
<body>
    <div id="app">
       
        @include('inc.navbar_detailed')
        <main class="">
           
                 @yield('content')
            
        </main>
        {{--  --}}
        
        {{--  --}}
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    {{-- side navbar script --}}
    <script>
        function openNav() {
            document.getElementById("snav").style.width = "100%";
            document.getElementById("navcont").style.right = "0";
        }

        function closeNav() {
            document.getElementById("navcont").style.right = "-400px";
            document.getElementById("snav").style.width = "0";
        }
        </script>
        <script>
    window.addEventListener('open-nav', event => {
        openNav();
    });
</script>

<script>
    const header = document.getElementById('header');
     const headerMo = document.getElementById('mobile_header');
    const navLinks = document.querySelectorAll('.link-secondary');
    const menuIcon = document.getElementById('menu_icon');

    

window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        header.classList.add('scrolled');
        headerMo.classList.add('scrolled');
        menuIcon.style.color = "#000";
        navLinks.forEach(link => link.classList.add('scrolled'));
        
        
    } else {
        header.classList.remove('scrolled');
         headerMo.classList.remove('scrolled');
        menuIcon.style.color = "#fff";

        navLinks.forEach(link => link.classList.remove('scrolled'));
    }
});

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
