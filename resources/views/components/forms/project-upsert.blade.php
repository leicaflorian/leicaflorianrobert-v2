@php
  $action = $update ? route('admin.projects.update', $project->id) : route('admin.projects.store');
@endphp

<form action="{{ $action }}"
      method="POST"
      enctype="multipart/form-data">
  @csrf()

  @if($update)
    @method('PUT')
  @endif

  <div class="form-group">
    <input type="text"
           class="form-control @error('title') is-invalid @enderror"
           name="title"
           id="input_title"
           placeholder="Title"
           value="{{ old('title', $project->title) }}">
    <label class="form-label" for="input_title">Title</label>

    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <textarea type="text"
              class="form-control @error('description') is-invalid @enderror"
              name="description"
              id="input_description"
              placeholder="Description"
              cols="30" rows="5"
    >{{ old('description', $project->description) }}</textarea>
    <label class="form-label" for="input_description">Description</label>
    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group-row">
    <div class="form-group">
      <input type="file"
             class="form-control @error('image') is-invalid @enderror"
             name="image"
             id="input_image"
             placeholder="Image"
             value="{{ old('image', $project->image) }}">
      <label class="form-label" for="input_image">Image</label>
      @error('image')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    @if($project->image)
      <a href="{{ asset('/storage/' . $project->image) }}" target="_blank">
        <img src="{{ asset('/storage/' . $project->image) }}" alt="" class="img-thumbnail">
      </a>
    @endif
  </div>

  <div class="form-group">
    <input type="text"
           class="form-control @error('link') is-invalid @enderror"
           name="link"
           id="input_link"
           placeholder="Link"
           value="{{ old('link', $project->link) }}">
    <label class="form-label" for="input_link">Link</label>
    @error('link')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <input type="text"
           class="form-control @error('github') is-invalid @enderror"
           name="github"
           id="input_github"
           placeholder="Github"
           value="{{ old('github', $project->github) }}">
    <label class="form-label" for="input_github">Github</label>
    @error('github')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <input type="date"
           class="form-control @error('date') is-invalid @enderror"
           name="date"
           id="input_date"
           placeholder="Date"
           value="{{ old('date', $project->date) }}">
    <label class="form-label" for="input_date">Date</label>
    @error('date')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="flex-center gap-1">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-light">Annulla</a>
    <button class="btn btn-accent">Salva</button>
  </div>
</form>
