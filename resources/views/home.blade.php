<x-layout.app bgImage="img/home.jpg" :headerCondensed="true">
  <x-slot name="headerBgAlign">align-center</x-slot>

  <section>
    <div class="container text-center">
      <h1 class="mb-5 text-uppercase"><span class="small">Leica</span><br>Florian Robert</h1>

      <p class="lead mb-1">
        Ciao e benvenuto nel mio sito personale!<br><br>
        Sono entusiasta che tu sia qui e spero che possa trovare qualcosa di interessante o utile durante la tua visita.
        Qui, potrai trovare una raccolta dei miei lavori e delle mie esperienze professionali, con l'obiettivo di darti
        un'idea di chi sono e del tipo di lavoro che svolgo.
      </p>
      <p class="lead mb-5">
        Spero che attraverso la navigazione del mio sito, tu possa apprezzare la mia passione per il mio lavoro e il mio
        impegno nel fornire un servizio di qualità. Se hai domande o vuoi saperne di più, non esitare a contattarmi,
        sarò felice di rispondere alle tue richieste.
      </p>

      <div class="flex-center gap-1">
        <a href="#contacts" class="btn btn-accent route-link">Contattami</a>
        <div class="vr vr-large d-none d-md-block"></div>
        <a href="{{route('about')}}" class="btn btn-light route-link">Leggi altro...</a>
      </div>
    </div>
  </section>

  <section class="section-secondary section-fluid pt-0 pb-0 mt-5">
    <div class="container">
      <div class="panel panel-light offset-top-5 py-5 text-center">
        <h2 class="section-title">
          <span class="subtitle">Cosa posso</span>
          <span class="title">fare per te?</span>
        </h2>

        <p class="lead mb-5">
          Come Web Developer, mi piace creare soluzioni web personalizzate che soddisfino le esigenze
          specifiche dei miei clienti e che ne semplifichi il lavoro e le operazioni quotidiane.
          <br>
          Ecco alcune cose che ti potrebbero interessare!
        </p>

        <div class="d-flex fill-childs" data-popover-parent>
          <div class="card-popover card-popover-small">
            <div class="card-body ">
              <div class="card-img">
                <img src="{{asset('/img/web_developer.webp')}}" alt="">

                <div class="card-offcanvas">
                  <div class="mb-1">
                    Se sei alla ricerca di un professionista che possa aiutarti a creare il tuo sito web o la tua
                    applicazione web, sei nel posto giusto!
                  </div>

                  <a class="route-link d-inline-block text-underline" href="#contacts">Scrivimi!</a>
                </div>
              </div>

              <div class="card-text">
                WEB DEVELOPER
              </div>

            </div>
          </div>
          <div class="card-popover card-popover-small">
            <div class="card-body">
              <div class="card-img">
                <img src="{{asset('/img/mobile_developer.webp')}}" alt="">

                <div class="card-offcanvas">
                  <div class="mb-1">
                    Hai bisogno di un app per promuovere la tua attività e non sai da dove iniziare?
                    Fatti sentire e non ti dovrai preoccupare più di nulla.
                  </div>

                  <a class="route-link d-inline-block text-underline" href="#contacts">Scrivimi!</a>
                </div>
              </div>
              <div class="card-text">
                MOBILE DEVELOPER
              </div>
            </div>
          </div>
          <div class="card-popover card-popover-small">
            <div class="card-body">
              <div class="card-img">
                <img src="{{asset('/img/uiux_designer.webp')}}" alt="">

                <div class="card-offcanvas">
                  <div class="mb-1">
                    Si sa, anche l'occhio vuole la sua parte. Hai un idea in mente e vuoi che attiri l'attenzione dei
                    tuoi clienti? Sicuramente la possiamo rendere accattivante!
                  </div>

                  <a class="route-link d-inline-block text-underline" href="#contacts">Scrivimi!</a>
                </div>
              </div>
              <div class="card-text">
                UI / UX DESIGNER
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-contact-section></x-contact-section>
</x-layout.app>
