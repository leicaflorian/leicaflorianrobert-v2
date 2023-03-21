<div>
  <table>
    <colgroup>
      <col>
      <col>
      <col style="width: 30%">
      {{--      <col style="width: 20%">--}}
      <col>
      <col>
      <col>
    </colgroup>

    <thead>
    <tr>
      <th>ID</th>
      <th>Immagine</th>
      <th>Titolo</th>
      {{--      <th>Descrizione</th>--}}
      <th>Link</th>
      <th>Github</th>
      <th>Data</th>
      <th></th>
    </tr>
    </thead>

    <tbody>
    @foreach($projects as $project)
      <tr>
        <td>{{ $project->id }}</td>
        <td>
          @isset($project->image)
            <img src="{{ $project->image }}" alt="{{ $project->title }}" width="100" class="img-thumbnail">
          @endisset
        </td>
        <td>{{ $project->title }}</td>
        {{--        <td>{{ substr($project->description, 0, 50) }}...</td>--}}
        <td>
          @isset($project->link)
            <a href="{{ $project->link }}" target="_blank">
              Visualizza
              <x-svg-icon icon="icons/mdi-link"></x-svg-icon>
            </a>
          @endisset
        </td>
        <td>
          @isset($project->github)
            <a href="{{ $project->github }}" target="_blank">
              Pagina GH
              <x-svg-icon icon="icons/mdi-link"></x-svg-icon>
            </a>
          @endisset
        </td>
        <td class="text-nowrap">{{ \Carbon\Carbon::make($project->date)->format("m-Y") }}</td>
        <td>
          <div class="btn-group" role="group">
            {{-- Show Button --}}
            <a type="button" class="btn-icon color-info" title="Edit"
               href="#"
               data-action="dialog" data-action-target="dialogs.projectUpsert"
               wire:click="$emit('showClick', {{ $project->id }})">
              <x-svg-icon icon="icons/mdi-view"></x-svg-icon>
            </a>

            {{-- Delete Button --}}
            <a type="button" class="btn-icon color-danger" title="Delete"
               href="#"
               data-action="dialog" data-action-target="dialogs.projectDelete"
               wire:click="$emitUp('deleteClick', {{ $project->id }})">
              <x-svg-icon icon="icons/mdi-remove"></x-svg-icon>
            </a>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

  <div class="dialog-container" id="dialogs.projectUpsert">
    <div class="dialog">
      <div class="dialog-title">
        Titolo

        <x-svg-icon icon="icons/mdi-close" class="close-icon"></x-svg-icon>
      </div>
      <div class="dialog-body">
        <form action="">
          <div class="form-group">
            <input type="text" name="name" id="name" wire:model="project.name" class="form-control">
            <label for="name">Nome</label>
          </div>

        </form>
      </div>
    </div>
  </div>

</div>
