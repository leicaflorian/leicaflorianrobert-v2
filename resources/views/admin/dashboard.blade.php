<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">
    Dashboard
  </x-slot>

  <section class="section-small">
    <div class="container text-center">
      <h3>Ciao {{ Auth::user()->name }},</h3>
      <p class="lead mb-3">Benvenuto nella tua dashboard. Scegli la tua strada!</p>
    </div>

    <div class="container container-x-small text-center">
      <ul class="list">
        <li><a href="{{ route('admin.projects.index') }}">Progetti</a></li>
        <li><a href="{{ route('admin.experiences.index') }}">Esperienze</a></li>
        <li><a href="{{ route('admin.contacts.index') }}">Contatti</a></li>
      </ul>
    </div>
  </section>

</x-layout.app>
