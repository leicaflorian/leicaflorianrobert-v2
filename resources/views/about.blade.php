<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">Su di me</x-slot>

  <section class="pt-10">
    <div class="container text-center">
      <h1 class="mb-5 text-uppercase"><span class="small">Leica</span><br>Florian Robert</h1>

      <div class="multi-column-text mb-5">
        <p>
          Ciao, sono Florian Leica,
          sviluppatore Web Full Stack, UI e UX Designer, sviluppatore Mobile e molto altro.
        </p>
        <p>
          Prima di essere tutto questo, sono una persona, molto appassionato di tutto quello che riguarda l'informatica
          in quanto offre opportunità uniche e per questo motivo credo fortemente nel suo potenziale e cerco di
          trasmettere la mia convinzione / passione anche ad altri.
        </p>
        <p>
          In particolare adoro il mondo della programmazione in quanto è lo strumento che ci permette di creare questo
          mondo virtuale, dove l'unico limite è l'immaginazione!
        </p>

        <p>
          Questa è stata la convinzione che dall'inizio della mia carriera professionale mi ha spinto a voler imparare e
          così ho iniziato a programmare da autodidatta.
        </p>
        <p>
          Giorno dopo giorno, tassello dopo tassello, ho imparato cose nuove, mi sono costantemente messo alla prova,
          allargando i miei limiti, a volte anche fallendo, ma tutto questo mi ha fatto crescere professionalmente e
          acquisire le capacità necessarie per rendere questa passione un lavoro.
        </p>

        <p>
          Attualmente ho la splendida opportunità di trasmettere anche ad altri la mia passione, la mia esperienza e le
          conoscenze acquisite, formando programmatori Full Stack ed insegnando loro tutto il necessario per poter
          contribuire attivamente al mondo della programmazione!
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
    <div class="container container-fluid">

      <h2 class="section-title text-center">
        <span class="subtitle">Ecco alcune</span>
        <span class="title">Esperienze</span>
      </h2>

      <x-experiences-slider></x-experiences-slider>

      <div class="mb-4"></div>

      <div class="container px-0">
        <div class="d-flex justify-center align-center align-md-stretch gap-1 flex-column flex-md-row">
          <h4 class="text-uppercase text-center color-primary text-md-right">Tecnologie e<br>linguaggi</h4>

          <div>
            <div class="vr vr-fluid"></div>
          </div>

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
      <div class="multi-column-text mb-5">
        <p>
          Se hai bisogno di un sito web, di un'applicazione mobile, di un logo o di un'identità visiva, o se hai
          semplicemente bisogno di un consiglio, non esitare a contattarmi!
        </p>
        <p>
          Sono sempre alla ricerca di nuove sfide, nuovi entusiasmanti progetti e nuove opportunità per migliorare come
          persona e come professionista.
        </p>
      </div>
    </x-slot>
  </x-contact-section>
</x-layout.app>
