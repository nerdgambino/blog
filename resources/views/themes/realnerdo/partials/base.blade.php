<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        @yield('metas')
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/themes/realnerdo/master.css') }}" media="screen" title="no title" charset="utf-8">
        @include('themes.realnerdo.partials.favicon')
    </head>
    <body>
        @include('themes.realnerdo.partials.topbar')
        @yield('content')
        <script type="text/javascript" src="{{ asset('js/themes/realnerdo/magic.js') }}"></script>
        <script id="dsq-count-scr" src="//realnerdo.disqus.com/count.js" async></script>
    </body>
</html>
