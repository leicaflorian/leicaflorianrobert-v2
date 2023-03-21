<div class="experiences-slider">
  <div class="timeline-container" data-popover-parent>
    @foreach($years as $year)
      <div class="timeline-entry {{ $year["empty"] ? 'empty' : '' }}">

        @if(isset($workExperiences[$year["num"]]))
          @foreach($workExperiences[$year["num"]] as $exp)
            <div class="timeline-event">
              <div class="timeline-event-card card-popover card-popover-x-small"
                   data-popover-direction="{{ $year['last']  ? 'left' : '' }}">
                @php
                  $id = uniqid()
                @endphp

                <div class="card-body py-0 px-0">
                  <div class="card-img">
                    <img
                        src="{{ $exp['companyLogo'] ? asset('/storage/' . $exp['companyLogo']) : asset('img/placeholder.png')}}"
                        alt="{{$exp["company"]}} logo">

                    <div class="card-offcanvas">
                      <strong>
                        @if($exp['companyLink'])
                          <a href="{{ $exp["companyLink"]}}" target="_blank">
                            {{ $exp["company"] }}
                            <x-svg-icon icon="icons/mdi-link"></x-svg-icon>
                          </a>
                        @else
                          {{ $exp["company"] }}
                        @endif
                      </strong>

                      <small class="mb-1">
                        {{ $exp["title"]  }}
                      </small>

                      <a href="#" class="d-inline-block text-underline"
                         data-action="dialog" data-action-target="dialog-{{$id}}">
                        Mostra dettagli
                      </a>
                    </div>
                  </div>
                </div>

                <div id="dialog-{{$id}}">
                  <template id="title">
                    <strong>
                      @if($exp['companyLink'])
                        <a href="{{ $exp["companyLink"]}}" target="_blank">
                          {{ $exp["company"] }}
                          <x-svg-icon icon="icons/mdi-link"></x-svg-icon>
                        </a>
                      @else
                        {{ $exp["company"] }}
                      @endif
                    </strong>
                    <br>
                    <small>
                      {{ $exp["title"]  }}
                    </small>
                    <br>
                    <small class="mb-1">
                      {{ $exp["period"]  }}
                    </small>
                  </template>
                  <template id="body">
                    @isset($exp['companyLogo'])
                      <img src="{{asset('/storage/' . $exp['companyLogo'])}}" alt="{{$exp["company"]}} logo"
                           class="img-flow">
                    @endisset

                    {!!  $exp["content"] !!}
                  </template>
                </div>
              </div>
            </div>
          @endforeach
        @endif

        <div class="timeline-year">
          <div class="timeline-year__dot"></div>
          <div class="timeline-year__text">{{ $year["num"] }}</div>
        </div>
      </div>
    @endforeach
  </div>
</div>
