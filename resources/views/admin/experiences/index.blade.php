<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">
    Esperienze
  </x-slot>

  <section class="pt-10">
    <div class="container">

      <div class="toolbar mb-2">
        <a href="{{ route('admin.dashboard') }}" class="toolbar-link">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em">
            <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
          </svg>
        </a>
        <div class="spacer"></div>
        <a class="toolbar-link" href="{{ route('admin.experiences.create') }}">Aggiungi</a>
        <div class="spacer"></div>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
          <tr>
            <th>Id</th>
            <th>Year</th>
            <th>Period</th>
            <th>Title</th>
            <th>Company</th>
            <th>CompanyLogo</th>
            {{--            <th>Content</th>--}}
            {{--            <th>Created at</th>--}}
            {{--            <th>Updated at</th>--}}
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach ($experiences as $experience)
            <tr>
              <td>{{ $experience->id }}</td>
              <td>{{ $experience->year }}</td>
              <td class="text-nowrap">{{ $experience->period }}</td>
              <td>{{ $experience->title }}</td>
              <td>
                @isset($experience->companyLink)
                  <a href="{{ $experience->companyLink }}" target="_blank">
                    {{ $experience->company }}
                    <x-svg-icon icon="icons/mdi-link"></x-svg-icon>
                  </a>
                @else
                  {{ $experience->company }}
                @endisset
              </td>
              <td>
                @isset($experience->companyLogo)
                  <img src="{{ asset('storage/' . $experience->companyLogo) }}" alt="{{ $experience->company }}"
                       class="img-thumbnail">
                @endisset
              </td>

              {{--              <td>{{ $experience->content }}</td>--}}
              {{--              <td>{{ $experience->created_at }}</td>--}}
              {{--              <td>{{ $experience->updated_at }}</td>--}}
              {{-- Table actions --}}
              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                  {{-- Edit Button --}}
                  <a type="button" class="btn-icon" title="Edit"
                     href="{{ route('admin.experiences.edit', $experience->id) }}">
                    <x-svg-icon icon="icons/mdi-edit"></x-svg-icon>
                  </a>

                  {{-- Delete Button --}}
                  <a type="button" class="btn-icon" title="Delete" href="#"
                     data-action="dialog" data-action-target="dialogs.experienceDelete_{{ $experience->id }}">
                    <x-svg-icon icon="icons/mdi-remove"></x-svg-icon>
                  </a>

                  <div id="dialogs.experienceDelete_{{ $experience->id }}" class="d-none">
                    <template id="body">
                      <p class="lead mb-2">Sei sicuro di voler cancellare l'esperienza selezionata?</p>

                      <form action="{{ route('admin.experiences.destroy', $experience->id) }}"
                            method="POST"
                            class="flex-center">
                        @csrf()
                        @method('DELETE')

                        <button class="btn btn-light close-btn" type="reset">Annulla</button>
                        <button class="btn btn-accent" type="submit">Si, elimina</button>
                      </form>
                    </template>
                  </div>
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
