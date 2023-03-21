<section {{ $attributes->merge([]) }}>
  <div class="container container-small text-center">
    <h3 class="section-title">
      <span class="subtitle">{{$subtitle}}</span>
      <span class="title">{{$title}}</span>
    </h3>

    {!! $text !!}

    <form action="">
      <fieldset class="form-group-row">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nome e Cognome">
          <label for="">Nome e Cognome</label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email">
          <label for="">Email</label>
        </div>
      </fieldset>

      <div class="form-group mb-5">
        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Messaggio"></textarea>
        <label for="">Messaggio</label>
      </div>

      <div class="flex-center gap-1">
        <button class="btn btn-light" type="reset">Annulla</button>
        <button class="btn btn-accent" type="submit">Invia</button>
      </div>
    </form>
  </div>
</section>
