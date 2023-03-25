<x-layout.app bgImage="img/home.jpg" :headerCondensed="true">
  <section>
    <div class="container text-center">
      <h1 class="mb-5 text-uppercase"><span class="small">Leica</span><br>Florian Robert</h1>

      <p class="lead mb-5">
        Ciao e benvenuto nel mio sito personale!<br><br>
        Sono felice che tu sia qui e spero che troverai qualcosa di interessante o utile durante la tua visita. Quì
        potrai trovare una raccolta dei miei lavori e delle mie esperienze professionali. Spero che questo sito ti dia
        un'idea di chi sono e del tipo di lavoro che faccio. Se hai domande o vorresti saperne di più, non esitare a
        contattarmi!
      </p>

      <div class="flex-center gap-1">
        <a href="#" class="btn btn-accent">Contattami</a>
        <div class="vr vr-large d-none d-md-block"></div>
        <a href="#" class="btn btn-light">Leggi altro...</a>
      </div>
    </div>
  </section>

  <section class="section-secondary section-fluid pt-0 pb-0 mt-5">
    <div class="container">
      <div class="panel panel-light offset-top-5 py-5">
        <div class="d-flex fill-childs" data-popover-parent>
          <div class="card-popover card-popover-small">
            <div class="card-body ">
              <div class="card-img">
                <img src="{{asset('/img/jumbo.png')}}" alt="">

                <div class="card-offcanvas">
                  Per essere presenti e farsi conoscere online, un sito web è d'obbligo. Che sia un sito vetrina,
                  multipagina, statico o eCommerce, usando le giuste tecnologie, tutto si può fare.
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
                <img src="{{asset('/img/jumbo.png')}}" alt="">

                <div class="card-offcanvas">
                  Per essere presenti e farsi conoscere online, un sito web è d'obbligo. Che sia un sito vetrina,
                  multipagina, statico o eCommerce, usando le giuste tecnologie, tutto si può fare.
                </div>
              </div>
              <div class="card-text">
                MOBILE DEVELOPER asdsdasda sdasdas dasdas
              </div>
            </div>
          </div>
          <div class="card-popover card-popover-small">
            <div class="card-body">
              <div class="card-img">
                <img src="{{asset('/img/jumbo.png')}}" alt="">

                <div class="card-offcanvas">
                  Per essere presenti e farsi conoscere online, un sito web è d'obbligo. Che sia un sito vetrina,
                  multipagina, statico o eCommerce, usando le giuste tecnologie, tutto si può fare.
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
