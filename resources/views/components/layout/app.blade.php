<!doctype html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Leica Florian Robert">
  <meta name="description"
        content="Sito personale di Leica Florian Robert, web e mobile developer, UI/UX designer, e molto altro. Vieni a conoscermi.">

  @fragment('pageTitle')
  <title>{{$pageTitle ?? "Leica Florian Robert"}}</title>
  @endfragment

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#ffffff">

  @include ("components.social-meta-tags")

  @vite('resources/js/app.js')

  <!-- Start cookieyes banner -->
  <script id="cookieyes" type="text/javascript"
          src="https://cdn-cookieyes.com/client_data/179311aba89a53c8c6b20925/script.js"></script>
  <!-- End cookieyes banner -->
</head>
<body class="loading">
  @fragment("header")
  <x-the-header :condensed="$headerCondensed" :pageTitle="$pageTitle ?? null" :bgImage="$bgImage ?? null">
  </x-the-header>
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
      /*transform: translateY(0);*/
    }

    #loader {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      background: #092E2C;
      z-index: 2000;
      opacity: 0;
      /*transform: translateY(-100%);*/
      transition: opacity 0.5s ease, transform 0.5s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #loader svg {
      width: 200px;
      height: 200px;
      color: white;
      opacity: .1;
      animation: loading_logo_in .5s ease-in forwards;
    }

    #loader .halfLine {
      position: absolute;
      bottom: 10%;
      top: calc(90% - 4px);
      left: 0;
      width: 0;
      background-color: white;
      transition: width .6s ease-out;
      z-index: 5;
      animation: halfline_animate_in .7s ease-in forwards
    }

    #loader.animate-in .halfLine {
      /*animation: halfline_animate_in .5s ease-in forwards*/
    }

    #loader.animate-in .halfLine:before {
      animation: lineAnim 2s ease-out 1s infinite;
    }

    #loader.animate-out .halfLine {
      animation: halfline_animate_out .5s ease-in forwards
    }

    #loader .halfLine:before {
      content: "";
      position: absolute;
      left: -50%;
      height: 4px;
      width: 40%;
      background-color: coral;
    }

    @keyframes halfline_animate_in {
      0% {
        width: 0;
        /*left: 0;*/
        background-color: white;
      }
      100% {
        width: 100%;
        /*height: 4px;*/
        background-color: #409783;
      }
    }

    @keyframes halfline_animate_out {
      0% {
        width: 100%;
        bottom: 10%;
        top: calc(90% - 4px);
        background-color: #409783;
      }
      100% {
        width: 100%;
        bottom: 0;
        top: 0;
        background-color: #409783;
      }
    }

    @keyframes lineAnim {
      0% {
        left: -40%;
        width: 40%;
      }
      50% {
        left: 20%;
        width: 80%;
      }
      100% {
        left: 100%;
        width: 100%;
      }
    }

    @keyframes loading_logo_in {
      0% {
        filter: blur(10px);
        opacity: 0;
        color: white;
      }
      50% {
        filter: blur(5px);
        opacity: 0.5;
        color: white;
      }
      100% {
        filter: blur(0);
        opacity: 1;
        color: #409783;
      }
    }

  </style>

  <div id="loader" class="animate-in">
    <x-svg-icon icon="logo" raw></x-svg-icon>

    <div class="top-half"></div>
    <div class="halfLine"></div>
    <div class="bottom-half"></div>
  </div>
</body>
</html>
