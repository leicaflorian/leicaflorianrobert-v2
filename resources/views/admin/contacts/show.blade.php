<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">
    Esperienze
  </x-slot>

  <section class="pt-10 section-fluid">
    <div class="container">

      <div class="toolbar mb-2">
        <a href="{{ route('admin.contacts.index') }}" class="toolbar-link">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em">
            <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
          </svg>
        </a>

        <div class="spacer"></div>
      </div>


      <div><strong>Id:</strong> {{ $contact->id }}</div>

      <div><strong>Name:</strong> {{ $contact->name }}</div>

      <div><strong>Email:</strong> {{ $contact->email }}</div>

      <div><strong>Message:</strong> {{ $contact->message }}</div>

      <div><strong>Created at:</strong> {{ $contact->created_at }}</div>

      <div><strong>Updated at:</strong> {{ $contact->updated_at }}</div>

    </div>
  </section>
</x-layout.app>
