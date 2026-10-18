{{-- Logout for the admin toolbars: Breeze's POST /logout, with the CSRF token --}}
<form method="POST" action="{{ route('logout') }}" class="toolbar-form">
  @csrf

  <button type="submit" class="toolbar-link">Esci</button>
</form>
