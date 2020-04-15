<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/feather.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/uikit.js') }}" defer></script>
    <script src="{{ asset('assets/js/uikit-icons.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/28nh0ld7eg9ssvimzamzo93ee80yq8dfpupzdjisonqclqse/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea',
          toolbar: 'undo redo | bold italic | link image | wordcount',
          toolbar_mode: 'floating',
          plugins: "link | image | wordcount",
          menubar: false,
        //   skin_url: '/css/app.css',
          mobile: {
                plugins: [ 'autosave', 'lists', 'autolink' ],
                toolbar: [ 'undo redo | bold italic | link image | wordcount' ]
            }
        });
      </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.sidebar')


    <div class="df-main uk-section">
        <main class="uk-container uk-position-relative" >
            <div>
                <h1 class="uk-h1 ">Novo Video</h1>
                <p>Easily create nice looking forms with different styles and layouts.</p>
            </div>
            @yield('content')
        </main>
    </div>
</body>
</html>
