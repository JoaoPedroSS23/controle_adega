<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta charset="utf-8">
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <title>{{ $title ?? 'Adega Control' }}</title>
    </head>
    <style>
        * {
            --prefers-reduced-motion:  no-preference !important;
        }
    </style>
    <body>
        {{ $slot }}

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="toastNotify" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            <i class="bi bi-app-indicator"></i>&nbsp;
            <strong class="me-auto">Notificação</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <p id='messageToast'></p>
            </div>
        </div>
        </div>
    </body>


</html>
