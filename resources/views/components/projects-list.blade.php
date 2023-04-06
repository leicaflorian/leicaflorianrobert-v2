<div class="projects-list" data-popover-parent>
  @foreach($projects as $project)

    <div class="card-popover card-popover-small" data-aos="fade-up" data-aos-delay="{{25 * rand(0, count($projects))}}">
      <div class="card-body">
        <div class="card-img">
          <img src="{{ $project->image ? asset('/storage/' . $project->image) : asset('img/placeholder.png')}}" alt="">

          <div class="card-offcanvas">
            <p class="mb-1">
              {{ substr($project->description, 0, 80) }}...
            </p>

            <a href="#" class="d-inline-block text-underline"
               data-action="dialog" data-action-target="dialog-{{$project->id}}">
              Mostra dettagli
            </a>
          </div>
        </div>

        <div class="card-text">
          @if( $project->link )
            <a href="{{ $project->link }}" target="__blank">
              {{ $project->title }}
              <x-svg-icon icon="icons/mdi-link"/>
            </a>
          @else
            {{ $project->title }}
          @endif
        </div>
      </div>

      <div id="dialog-{{$project->id}}">
        <template id="title">
          @if( $project->link )
            <a href="{{ $project->link }}" target="_blank">
              {{ $project->title }}
              <x-svg-icon icon="icons/mdi-link"/>
            </a>
          @else
            {{ $project->title }}
          @endif
        </template>
        <template id="body">
          <div>
            @if($project->image)
              <img
                  src="{{ str_starts_with($project->image, "http") ? $project->image :  asset('/storage/' . $project->image)}}"
                  alt="" class="img-flow">
            @endif

            {!! $project->description !!}
          </div>
        </template>

        <template id="footer">
          @if($project->link)
            <a href="{{ $project->link }}" target="_blank">
              Pagina del progetto
              <x-svg-icon icon="icons/mdi-link"/>
            </a>
          @endif

          @if($project->github)
            <a href="{{ $project->github }}" target="_blank">
              Github
              <x-svg-icon icon="icons/github"/>
            </a>
          @endif
        </template>
      </div>
    </div>

  @endforeach
</div>
