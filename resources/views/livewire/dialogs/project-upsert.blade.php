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
