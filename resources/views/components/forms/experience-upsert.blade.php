@php
  $action = $update ? route('admin.experiences.update', $experience->id) : route('admin.experiences.store');
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
           class="form-control @error('year') is-invalid @enderror"
           name="year"
           id="input_year"
           placeholder="Year"
           value="{{ old('year', $experience->year) }}">
    <label class="form-label" for="input_year">Year</label>
    @error('year')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <input type="text"
           class="form-control @error('period') is-invalid @enderror"
           name="period"
           id="input_period"
           placeholder="Period"
           value="{{ old('period', $experience->period) }}">
    <label class="form-label" for="input_period">Period</label>
    @error('period')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <input type="text"
           class="form-control @error('title') is-invalid @enderror"
           name="title"
           id="input_title"
           placeholder="Title"
           value="{{ old('title', $experience->title) }}">
    <label class="form-label" for="input_title">Title</label>
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <input type="text"
           class="form-control @error('company') is-invalid @enderror"
           name="company"
           id="input_company"
           placeholder="Company"
           value="{{ old('company', $experience->company) }}">
    <label class="form-label" for="input_company">Company</label>
    @error('company')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <input type="text"
           class="form-control @error('companyLink') is-invalid @enderror"
           name="companyLink"
           id="input_companyLink"
           placeholder="Company Link"
           value="{{ old('companyLink', $experience->companyLink) }}">
    <label class="form-label" for="input_companyLink">Company Link</label>
    @error('companyLink')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group-row">

    <div class="form-group">
      <input type="file"
             class="form-control @error('companyLogo') is-invalid @enderror"
             name="companyLogo"
             id="input_companyLogo"
             placeholder="Company Logo"
             value="{{ old('companyLogo', $experience->companyLogo) }}">
      <label class="form-label" for="input_companyLogo">Company Logo</label>
      @error('companyLogo')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    @if($experience->companyLogo)
      <a href="{{ asset('/storage/' . $experience->companyLogo) }}" target="_blank">
        <img src="{{ asset('/storage/' . $experience->companyLogo) }}" alt="" class="img-thumbnail">
      </a>
    @endif
  </div>

  <div class="form-group">
    <textarea type="text"
              class="form-control @error('content') is-invalid @enderror"
              name="content"
              id="input_content"
              placeholder="Content"
              cols="30" rows="10"
    >{{ old('content', $experience->content) }}</textarea>
    <label class="form-label" for="input_content">Content</label>
    @error('content')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="flex-center gap-1">
    <a href="{{ route('admin.experiences.index') }}" class="btn btn-light">Annulla</a>
    <button class="btn btn-accent">Salva</button>
  </div>
</form>
