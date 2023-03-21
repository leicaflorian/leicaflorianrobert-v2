<!doctype html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$pageTitle ?? "Leica Florian Robert"}}</title>

  @vite('resources/js/app.js', 'vendor/courier/build')
</head>
<body>
  <x-the-header :condensed="$headerCondensed" :pageTitle="$pageTitle ?? null"></x-the-header>

  <main style="">
    {{ $slot  }}
  </main>

  <x-the-footer></x-the-footer>

  <template id="icons">
    <x-svg-icon icon="icons/mdi-close"></x-svg-icon>
  </template>
</body>
</html>
