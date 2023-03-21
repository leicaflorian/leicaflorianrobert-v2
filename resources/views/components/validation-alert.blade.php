@if ($errors->any())
  <div class="alert alert-danger">
    @isset($icon)
      <x-svg-icon :icon="$icon"></x-svg-icon>
    @endisset

    <ul class="unstyled-list">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
