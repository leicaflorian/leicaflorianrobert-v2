<section {{ $attributes->merge([]) }} >
  <div class="container container-small text-center">
    <h3 class="section-title" id="contacts">
      <span class="subtitle">{{$subtitle}}</span>
      <span class="title">{{$title}}</span>
    </h3>

    @if(!empty($text))
      <div class="section-text">
        {!! $text !!}
      </div>
    @else
      <div class="section-text">
        <p class="lead mb-5">Sia che tu stia cercando di creare un sito web aziendale, un e-commerce, un blog o
          qualsiasi altra soluzione
          web, sono qui per aiutarti. Contattami oggi stesso per scoprire come possiamo collaborare e creare un sito web
          straordinario insieme!
        </p>
      </div>
    @endif


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

      <div class="form-group ">
        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Messaggio" required></textarea>
        <label>Messaggio</label>
      </div>

      <p class="mb-5">
        Questo site è protetto da reCAPTCHA e si applica la
        <a href="https://policies.google.com/privacy?hl=it">Privacy</a> ed i
        <a href="https://policies.google.com/terms?hl=it">Termini</a> di Google.
      </p>

      <div class="flex-center gap-1">
        <button class="btn btn-light" type="reset">Annulla</button>
        <button class="btn btn-accent" type="submit">Invia</button>
      </div>
    </form>
  </div>
</section>
