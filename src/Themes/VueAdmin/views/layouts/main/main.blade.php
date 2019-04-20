<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <link href="{{ $theme->mix('/css/loading.css') }}" rel="stylesheet">
    <link href="{{ $theme->mix('/css/app.css') }}" rel="stylesheet">
    {{ $header }}
</head>

<body>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
        </div>
        <div id="loading-footer">Loading...</div>
    </div>
</div>
<script>
    (async function f() {
        document.getElementById('loading').style.display = 'none';
        await new Promise(resolve => setTimeout(resolve, 1000));
        if (window.Vue === undefined) {
            document.getElementById('loading').style.display = 'block';
        }
    })();
</script>

<div id="app">
    <layout-sidebar>
        <template slot="menu">
            @if(isset($menus))
                @include($theme->view('layouts.main.menu'), ['menus' => $menus])
            @else
                @include($theme->view('layouts.main.no-menu'))
            @endif
        </template>

        <template slot="header">
            {{ $header_left }}
        </template>

        <template slot="header-right">
            {{ $header_right }}
        </template>

        <template id="app-content">
            {{ $slot }}
        </template>
    </layout-sidebar>
</div>

<script src="{{ $theme->mix('js/manifest.js') }}"></script>
<script src="{{ $theme->mix('js/vendor.js') }}"></script>
<script src="{{ $theme->mix('js/app.js') }}"></script>
{{ $footer }}
</body>
</html>

