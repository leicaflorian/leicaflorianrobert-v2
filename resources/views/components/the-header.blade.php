<header @class([ "condensed" => $condensed])>
  <div @class(["jumbo"])>
    <img src="{{asset('img/jumbo.png')}}" class="bg-img">

    <div class="logo-container">
      <x-svg-icon icon="logo"/>
    </div>
  </div>

  <div class="navbar">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-item">Home</a>
      <a href="{{ route('about') }}" class="navbar-item">Su di me</a>
      <a href="{{ route('home') }}" class="navbar-item navbar-item-logo-placeholder"></a>
      <a href="{{ route('projects') }}" class="navbar-item">Progetti</a>
      <a href="{{ route('home') }}" class="navbar-item">Contatti</a>
    </div>
  </div>

  @if( isset($pageTitle) )
    <div class="panel panel-light page-title">
      <h1>{{ $pageTitle  }}</h1>
    </div>
  @endif
</header>
