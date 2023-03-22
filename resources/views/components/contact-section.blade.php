<section {{ $attributes->merge([]) }} >
  <div class="container container-small text-center">
    <h3 class="section-title" id="contacts">
      <span class="subtitle">{{$subtitle}}</span>
      <span class="title">{{$title}}</span>
    </h3>

    {!! $text !!}

    <form action="{{route('contacts.store')}}" method="POST" id="contact-form">
      <fieldset class="form-group-row">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nome e Cognome" name="name" required>
          <label>Nome e Cognome</label>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <label>Email</label>
        </div>
      </fieldset>

      <div class="form-group mb-5">
        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Messaggio" required></textarea>
        <label>Messaggio</label>
      </div>

      <div class="flex-center gap-1">
        <button class="btn btn-light" type="reset">Annulla</button>
        <button class="btn btn-accent" type="submit">Invia</button>
      </div>
    </form>
  </div>
</section>
