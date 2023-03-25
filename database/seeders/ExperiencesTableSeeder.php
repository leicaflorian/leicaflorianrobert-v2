<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    $experiences = [
      [
        "year"        => "2009",
        "period"      => "2009",
        "title"       => "Sviluppo software gestionale",
        "company"     => 'Tecnobit s.r.l.',
        "companyLink" => "https://www.tecnobit.it/",
        "companyLogo" => "experiences/tecnobit.png",
        "content"     => 'Sviluppato software gestionale per <strong>"L’ordine degli Ingegneri della Provincia di Potenza"</strong> utilizzando <strong>Visual Basic</strong> e <strong>MySql</strong>.
Il software e stato poi distribuito tramite CD-ROM come opera di consultazione per gli iscritti all\'ordine.'
      ],
      [
        "year"        => "2009",
        "period"      => "2009",
        "title"       => "Sviluppatore Full Stack",
        "company"     => "Mediamotion s.r.l.",
        "companyLink" => "",
        "companyLogo" => "",
        "content"     => 'Ho creato diversi siti utilizzando <strong>Adobe Flex</strong> (Action Script 3), <strong>HTML</strong> e <strong>CSS</strong> come front-end e <strong>Ruby on Rails</strong> e <strong>PHP</strong> come back-end.
      <br>
      Ho curato il lato grafico dei siti, il loro effettivo funzionamento con relativa gestione di un database <strong>MySql</strong> ed ho curato anche la parte <strong>SEO</strong> dei siti creati.
      Inoltre mi sono occupato anche della gestione e manutenzione del server sul quale erano attivi i vari siti.'
      ],
      [
        "year"        => "2010",
        "period"      => "2010-2017",
        "title"       => "Sviluppatore Full Stack Desktop e Web",
        "company"     => "Organizzazione no-profit",
        "companyLink" => "",
        "companyLogo" => "",
        "content"     => 'Ho sviluppato diverse applicazioni desktop di tipo gestionale usando linguaggi come <strong>Visual Basic</strong>, <strong>Adobe Flex</strong> (AIR), <strong>Action Script 3</strong> e <strong>Google Chrome Apps</strong> ed <strong>Extensions</strong> (HTML, CSS e Javascript). Ho poi sviluppato vari siti usando <strong>PHP</strong>, <strong>HTML5</strong>, <strong>CSS3</strong>, <strong>MySql</strong>, <strong>JavaScript</strong> e <strong>jQuery</strong>, facendo interagire il tutto con le API di Google per accedere a Google Drive, Maps e Google Signin.'
      ],
      [
        "year"        => "2018",
        "period"      => "2018-2020",
        "title"       => "Svilupatore Front-End Senior",
        "company"     => 'Zucchetti Software Giuridico s.r.l.',
        "companyLink" => "http://www.zucchettisoftwaregiuridico.it",
        "companyLogo" => "experiences/zucchetti.png",
        "content"     => 'Ho lavorato sulle web applications dell\'azienda utilizzando le ultime tecnologie come <strong>JavaScript ES6</strong>, <strong>Webpack</strong>, <strong>Node.js</strong>, <strong>SASS</strong>, <strong>Bootstrap</strong> nonchè creato sezioni degli applicativi in <strong>Vue.js</strong>. Ho inoltre sviluppato, documentato e mantenuto molteplici librerie interne, sfruttando gli ultimi standard ES6 con un occhio di riguardo alla parametrizzazione, modularizzazione e performance di queste ultime.'
      ],
      [
        "year"        => "2020",
        "period"      => "2020 - 2021",
        "title"       => "Sviluppatore Full Stack Senior",
        "company"     => 'Develon s.r.l.',
        "companyLink" => "https://www.develon.com",
        "companyLogo" => "experiences/develon.jpeg",
        "content"     => 'Usando le tecnologie più moderne in campo web, ho sfruttato al massimo la potenza di <strong>JavaScript</strong> e <strong>TypeScript</strong>, lavorando con <strong>Vue.js</strong> ed il framework <strong>Nuxt</strong> lato front end, mentre come backend ho usato vari framework <strong>Node.js</strong>, come <strong>Express</strong>, <strong>AdonisJs</strong>, <strong>NestJS</strong>. Tutto questo, sfruttando <strong>Mongo</strong> come database, oltre che a <strong>Redis</strong> (per la gestione di code di lavorazione) ed <strong>Elastic Search</strong>.'
      ],
      [
        "year"        => "2017",
        "period"      => "2017 - oggi",
        "title"       => "Sviluppatore Full Stack e Grafico Web",
        "company"     => "Libero professionista",
        "companyLink" => "",
        "companyLogo" => "experiences/leicaflorian.png",
        "content"     => 'Sviluppo siti web utilizzando i classici strumenti web come <strong>JavaScript/TypeScript</strong>, <strong>jQuery</strong>, <strong>CSS/SASS</strong>, <strong>HTML5</strong> oltre a framework come <strong>Vue.js</strong> ed <strong>Angular</strong>. Per la comunicazione con i server, a seconda del bisogno utilizzo <strong>Node.js</strong> o <strong>PHP</strong>, sfruttando poi framework come <strong>Nuxt</strong>, <strong>AdonisJS</strong>, <strong>NestJs</strong> e <strong>Laravel</strong>. Completano il tutto lo sviluppo mobile con <strong>NativeScript</strong>.'
      ],
      [
        "year"        => "2021",
        "period"      => "2021 - oggi",
        "title"       => "Insegnante programmazione Full Stack",
        "company"     => 'Boolean Careers',
        "companyLink" => "https://www.boolean.careers",
        "companyLogo" => "experiences/boolean.png",
        "content"     => 'Usando il metodo <a href="https://www.boolean.careers/" target="_blank">Boolean</a>, aiuto giovani e meno giovani a diventare Sviluppatori Full Stack. Durante il percorso insegno tutto quello che riguarda <strong>HTML</strong> e <strong>CSS/SASS</strong>, le due pietre miliari del mondo del web.
      Inoltre non mancano <strong>JavaScript</strong> e <strong>Vue.js</strong>. Passando al BackEnd, <strong>PHP</strong> è un "must" come anche la programmazione orientata ad oggetti, MySQL e Laravel. <br>
      In tutto il percorso, oltre alle informazioni tecniche è indispensabile trasmettere la logica e l\'approccio giusto per affrontare qualsiasi linguaggio e diventare bravi nel problem solving.'
      ],
      [
        "year"        => "2023",
        "period"      => "2023 - oggi",
        "title"       => "Co-founder e CTO",
        "company"     => 'Web Artisan Bros',
        "companyLink" => "https://webartisanbros.com",
        "companyLogo" => "experiences/wab.png",
        "content"     => 'Usando il metodo <a href="https://www.boolean.careers/" target="_blank">Boolean</a>, aiuto giovani e meno giovani a diventare Sviluppatori Full Stack. Durante il percorso insegno tutto quello che riguarda <strong>HTML</strong> e <strong>CSS/SASS</strong>, le due pietre miliari del mondo del web.
      Inoltre non mancano <strong>JavaScript</strong> e <strong>Vue.js</strong>. Passando al BackEnd, <strong>PHP</strong> è un "must" come anche la programmazione orientata ad oggetti, MySQL e Laravel. <br>
      In tutto il percorso, oltre alle informazioni tecniche è indispensabile trasmettere la logica e l\'approccio giusto per affrontare qualsiasi linguaggio e diventare bravi nel problem solving.'
      ],
    ];
    
    foreach ($experiences as $experience) {
      Experience::updateOrInsert([
        'year'  => intval($experience['year']),
        'title' => $experience['title'],
      ], $experience);
    }
  }
}
