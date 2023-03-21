<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">
    Progetti
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
        <a class="toolbar-link" href="{{ route('admin.projects.create') }}">Aggiungi</a>
        <div class="spacer"></div>
      </div>

      <div class="table-responsive">
        <table>
          <thead>
          <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Title</th>
            {{--              <th>Description</th>--}}
            <th>Link</th>
            <th>Github</th>
            <th>Date</th>
            {{--              <th>Created at</th>--}}
            {{--              <th>Updated at</th>--}}
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach ($projects as $project)
            <tr>
              <td>{{ $project->id }}</td>
              {{--                <td>{{ $project->description }}</td>--}}
              <td>
                @isset($project->image)
                  <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" width="100"
                       class="img-thumbnail">
                @endisset
              </td>
              <td>{{ $project->title }}</td>
              <td>
                @isset($project->link)
                  <a href="{{ $project->link }}" target="_blank">
                    Visualizza
                    <x-svg-icon icon="icons/mdi-link"></x-svg-icon>
                  </a>
                @endisset</td>
              <td>
                @isset($project->github)
                  <a href="{{ $project->github }}" target="_blank">
                    Pagina GH
                    <x-svg-icon icon="icons/mdi-link"></x-svg-icon>
                  </a>
                @endisset</td>
              <td class="text-nowrap">{{ \Carbon\Carbon::make($project->date)->format("m-Y") }}</td>
              {{--                <td>{{ $project->created_at }}</td>--}}
              {{--                <td>{{ $project->updated_at }}</td>--}}
              {{-- Table actions --}}
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  {{-- Edit Button --}}
                  <a type="button" class="btn-icon" title="Edit"
                     href="{{ route('admin.projects.edit', $project->id) }}">
                    <x-svg-icon icon="icons/mdi-edit"></x-svg-icon>
                  </a>

                  {{-- Delete Button --}}
                  <a type="button" class="btn-icon" title="Delete"
                     data-action="dialog" data-action-target="dialogs.projectDelete_{{ $project->id }}">
                    <x-svg-icon icon="icons/mdi-remove"></x-svg-icon>
                  </a>

                  <div id="dialogs.projectDelete_{{ $project->id }}" class="d-none">
                    <template id="body">
                      <p class="lead mb-2">Sei sicuro di voler cancellare il progetto selezionata?</p>

                      <form action="{{ route('admin.projects.destroy', $project->id) }}"
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
