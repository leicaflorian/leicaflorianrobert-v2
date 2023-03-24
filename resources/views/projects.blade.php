<x-layout.app :headerCondensed="true">
  <x-slot name="pageTitle">Progetti</x-slot>

  <section class="pt-10">
    <div class="container text-center">
      <h1 class="mb-5 text-uppercase"><span class="small">Endless</span><br>Possibilities</h1>

      <x-projects-list></x-projects-list>
    </div>
  </section>

  <x-contact-section class="section-secondary" subtitle="Ora sai qualcosa in più," title="Scrivimi">
    <x-slot name="text">
      <div class="multi-column-text multi-column-break-sm mb-5">
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
