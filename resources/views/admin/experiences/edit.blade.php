<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">
    #{{ $experience->id }}
  </x-slot>

  <section class="pt-10">
    <div class="container">
      <div class="toolbar mb-2">
        <a href="{{ route('admin.experiences.index') }}" class="toolbar-link">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em">
            <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
          </svg>
        </a>

        <div class="toolbar-static-text">
          Modifica esperienza #{{ $experience->id }}
        </div>

        <div class="spacer"></div>
      </div>

      <x-forms.experience-upsert :experience="$experience" :update="true"></x-forms.experience-upsert>
    </div>
  </section>

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: '#input_content',
    });
  </script>
</x-layout.app>
