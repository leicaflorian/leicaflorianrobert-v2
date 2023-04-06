<header @class([ "condensed" => $condensed])>
  <div @class(["jumbo"])>
    <img src="{{asset($bgImage)}}" class="bg-img {{$headerBgAlign ?? ""}}" alt="hero image of the page">

    <div class="logo-container bordered-logo">
      <x-svg-icon icon="logo"/>
    </div>
  </div>

  <div class="navbar">
    <div class="container">
      <a href="{{ route('home') }}"
         class="navbar-item route-link {{ (strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : '' }}">Home</a>
      <a href="{{ route('about') }}"
         class="navbar-item route-link {{ (strpos(Route::currentRouteName(), 'about') === 0) ? 'active' : '' }}"
         data-page-title="Su di me">Su di me</a>

      <div class="navbar-item-logo-placeholder"></div>

      <a href="{{ route('projects') }}"
         class="navbar-item route-link {{ (strpos(Route::currentRouteName(), 'projects') === 0) ? 'active' : '' }}"
         data-page-title="Progetti">Progetti</a>
      <a href="#contacts" class="navbar-item route-link">Contatti</a>
    </div>
  </div>

  @if( isset($pageTitle) )
    <div class="panel panel-light page-title">
      <h1>{{ $pageTitle  }}</h1>
    </div>
  @endif

  <div id="mobile-menu">
    <button class="btn btn-fab">
      <x-svg-icon icon="icons/mdi-menu"></x-svg-icon>
    </button>

    <div class="mobile-menu-backdrop"></div>

    <div class="mobile-menu-canvas">
      <div class="close-icon">
        <x-svg-icon icon="icons/mdi-close"></x-svg-icon>
      </div>


      <div class="container">
        <div class="color-primary bordered-logo mb-1"
             style="width: 100px; height: 100px; margin: auto;--logo-border-color: white">
          <x-svg-icon icon="logo"/>
        </div>

        <div class="unstyled-list">
          <a href="{{ route('home') }}"
             class="navbar-item route-link {{ (strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : '' }}">Home</a>
          <a href="{{ route('about') }}"
             class="navbar-item route-link {{ (strpos(Route::currentRouteName(), 'about') === 0) ? 'active' : '' }}"
             data-page-title="Su di me">Su di me</a>
          <a href="{{ route('projects') }}"
             class="navbar-item route-link {{ (strpos(Route::currentRouteName(), 'projects') === 0) ? 'active' : '' }}"
             data-page-title="Progetti">Progetti</a>
          <a href="#contacts" class="navbar-item route-link">Contatti</a>
        </div>
      </div>
    </div>
  </div>
</header>


