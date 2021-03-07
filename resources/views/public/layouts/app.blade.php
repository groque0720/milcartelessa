 <!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ Storage::url($negocio->logo) }}">
    @yield('metas')
    <style>
       .fixed {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            width: 100vw !important;
            padding-top: 0;
            padding-bottom: 0;
            background: rgba(255,255,255,0.5);
       }
       .fixed>.cabecera-menu-contenido {
            margin: auto;
            width: 74%;
       }
       .fixed .logo-empresa{
            width: 6rem !important;
            margin: auto;
       }
    </style>

</head>
<body class="scrollbar bg-gray-100" id="style-3">
    {{-- <img class="img-fondo" src="/images/fondo06.png" alt=""> --}}
    <div id="app">

        <a class="ir-arriba" title="Volver arriba">
            <div class="flex flex-content-center flex-item-center">
                <i class="fas fa-arrow-up"></i>
            </div>
        </a>
        <div class="margen-auto flex flex-space-between flex-direction-column" style="min-height: 100vh;">
            <div class="ancho-100 flex flex-direction-column">
                {{-- <header class="m-b-5">
                   @include('public.layouts.parciales.cabecera')
                </header> --}}
                <section class="flex flex-content-center">
                   {{--  @include('public.layouts.parciales.mensajes') --}}
                    @yield('contenido')
                </section>
            </div>
            <footer class="flex-item-end">
                @include('public.layouts.parciales.footer')
                <div class="flex flex-item-center flex-content-center" style="height: 50px; background: #ddd;">
                    <span>{{ $negocio->nombre }} &copy {{ date('Y') }}</span>
                </div>
            </footer>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @yield('script')
    @yield('estilos')
{{--     <script type="text/javascript" defer>

        let parallax = document.querySelector('.parallax');
        let cabecera_menu = document.querySelector('.cabecera-menu');
        let cabecera_tira_superior = document.querySelector('.cabecera-tira-superior');
        let altura = cabecera_menu.offsetTop + cabecera_tira_superior.offsetTop;

        function scrollParallax() {
            let scrollTop = document.documentElement.scrollTop;
            parallax.style.transform = 'translateY('+ scrollTop * -0.3 +'px)';
            if (window.pageYOffset > altura) {
                cabecera_menu.classList.add('fixed');
            }else{
                cabecera_menu.classList.remove('fixed');
            }
        }

        window.addEventListener('scroll', scrollParallax);

    </script> --}}
</body>
</html>
