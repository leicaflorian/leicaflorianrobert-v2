<!doctype html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @fragment('pageTitle')
  <title>{{$pageTitle ?? "Leica Florian Robert"}}</title>
  @endfragment

  @vite('resources/js/app.js', 'vendor/courier/build')
</head>
<body class="loading">
  @fragment("header")
  <x-the-header :condensed="$headerCondensed" :pageTitle="$pageTitle ?? null"></x-the-header>
  @endfragment

  @fragment('main')
  <main style="">
    {{ $slot  }}
  </main>
  @endfragment

  <x-the-footer></x-the-footer>

  <template id="icons">
    <x-svg-icon icon="icons/mdi-close"></x-svg-icon>
  </template>

  <style>
    body.loading {
      overflow: hidden;
    }

    body.loading #loader {
      opacity: 1;
    }

    #loader {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      background: #409783;
      z-index: 2000;
      opacity: 0;
      transition: opacity 0.5s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #loader svg {
      width: 200px;
      height: 200px;
      color: white;
    }
  </style>

  <div id="loader">
    <x-svg-icon icon="logo" raw></x-svg-icon>
  </div>
</body>
</html>
