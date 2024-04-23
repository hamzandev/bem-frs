<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? 'Default Title' }}</title>
    <!-- CSS files -->
    <link href="{{ asset('tabler/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{ asset('tabler/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
        <x-admin.navbar></x-admin.navbar>
        <div class="container">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
