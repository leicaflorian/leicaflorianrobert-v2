<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">
    Esperienze
  </x-slot>

  <section class="pt-10 section-fluid">
    <div class="container">

      <div class="toolbar mb-2">
        <a href="{{ route('admin.dashboard') }}" class="toolbar-link">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em">
            <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
          </svg>
        </a>

        <div class="spacer"></div>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Created at</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach ($contacts as $contact)
            <tr>
              <td>{{ $contact->id }}</td>
              <td>{{ $contact->name }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ $contact->message }}</td>
              <td>{{ $contact->created_at }}</td>
              <td>{{ $contact->updated_at }}</td>
              {{-- Table actions --}}
              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                  {{-- show Button --}}
                  <a type="button" class="btn-icon" title="Edit"
                     href="{{ route('admin.contacts.show', $contact->id) }}">
                    <x-svg-icon icon="icons/mdi-view"></x-svg-icon>
                  </a>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
</x-layout.app>
