<x-layout.app :headerCondensed="true" bgImage="img/about.jpg">
  <x-slot name="pageTitle">Su di me</x-slot>

  <section class="pt-10">
    <div class="container text-center">
      <h1 class="mb-5 text-uppercase"><span class="small">Ciao,</span><br>benvenuto/a</h1>

      <div class="multi-column-text multi-column-break-sm mb-5">
        <p>
          Sono <strong>Leica Florian Robert</strong>,
          sviluppatore Web Full Stack, UI e UX Designer, sviluppatore Mobile, insegnante tecnologie web, grande
          appassionato d'informatica e ti tecnologia.
        </p>
        <p>
          Adoro questi settori in quanto offrono opportunità uniche e (a volte) semplificano di molto la vita o comunque
          la
          migliorano e questa mia passione cerco di trasmetterla anche ad altri.
        </p>
        <p>
          Dall'inizio della mia carriera professionale questa passione mi ha spinto a voler imparare il più possibile
          come funziona il web, come funziona l'informatica e come posso a mia volta farne parte anche io.
        </p>
        <p>
          Ho iniziato a programmare da autodidatta.
          Giorno dopo giorno, tassello dopo tassello, ho imparato cose nuove, mi sono costantemente messo alla prova,
          allargando i miei limiti, a volte anche fallendo, ma tutto questo mi ha fatto crescere professionalmente e
          acquisire le capacità necessarie per rendere questa passione un lavoro.
        </p>
        <p>
          Attualmente ho la splendida opportunità di trasmettere anche ad altri la mia passione, la mia esperienza e le
          conoscenze acquisite, formando programmatori Full Stack ed insegnando loro tutto il necessario per poter
          contribuire attivamente al mondo della programmazione!
          <br>
          Oltre ad insegnare, continuo a lavorare come sviluppatore e mi diletto nello sperimentare nuove tecnologie e
          continuare ad imparare cose nuove.
        </p>
      </div>

      <div class="flex-center lead gap-md-1 color-light">
        <span>Anni di esperienza</span>
        <div class="vr "></div>
        <span class="fs-large ff-titles">{{ (now()->year) - 2009 }}</span>
      </div>
    </div>
  </section>

  <section class="section-secondary">
    <div class="container container-fluid text-center">
      <h2 class="section-title text-center">
        <span class="subtitle">Ecco alcune</span>
        <span class="title">Esperienze</span>
      </h2>

      <div class="container text-center">
        <p class="lead mb-5">
          Queste sono alcune delle esperienze più significative che ho avuto nel corso della mia carriera. Ci sono stati
          molti altri progetti e collaborazioni, e tutte queste esperienze mi hanno permesso di
          crescere professionalmente, ma sicuramente queste sono le più importanti.
        </p>

        <p class="lead mb-5">
          Se vuoi sapere qualcosa di pi non esitare a contattarmi!

          <br>

          <a href="#contacts" class="route-link btn btn-accent mt-3">Contattami</a>
        </p>
      </div>

      <x-experiences-slider></x-experiences-slider>

      <div class="mb-4"></div>

      <div class="container px-0">
        <div class="d-flex justify-center align-center align-md-stretch gap-1 flex-column flex-md-row">
          <h4 class="text-uppercase text-center color-primary text-md-right">Tecnologie e<br>linguaggi</h4>

          <div class="vr vr-fluid vr-md-down-hr mt-0"></div>

          <ul class="unstyled-list multi-column-text multi-column-gap-1 color-dark no-rule">
            @foreach($technologies as $tech)
              <li>{{ $tech }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

  </section>

  <x-contact-section subtitle="Ora sai qualcosa in più," title="Scrivimi">
    <x-slot name="text">
      <div class="lead mb-5">
        <p>
          Se hai bisogno di un sito web, di un'applicazione mobile, di un logo o di un'identità visiva, o se hai
          semplicemente bisogno di un consiglio, non esitare a contattarmi!
          Sono sempre alla ricerca di nuove sfide, nuovi entusiasmanti progetti e nuove opportunità per migliorare come
          persona e come professionista.
        </p>
      </div>
    </x-slot>
  </x-contact-section>
</x-layout.app>
