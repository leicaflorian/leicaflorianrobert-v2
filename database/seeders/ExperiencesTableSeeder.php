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
        "content"     => '<p>Ho sviluppato un software gestionale per "<strong>L\'Ordine degli Ingegneri della Provincia di Potenza</strong>" utilizzando <strong>Visual Basic</strong> e <strong>MySql</strong>.</p>
<p>Ho curato personalmente il progetto sia dal punto di vista grafico e dell\'interfaccia utente, che da quello dell\'architettura e dell\'implementazione.</p>
<p>Il software &egrave; stato distribuito tramite CD-ROM agli iscritti all\'Ordine, come opera di consultazione.</p>'
      ],
      [
        "year"        => "2009",
        "period"      => "2009",
        "title"       => "Junior Full Stack Developer",
        "company"     => "Mediamotion s.r.l.",
        "companyLink" => "",
        "companyLogo" => "",
        "content"     => '<p>Ho creato diversi siti web utilizzando <strong>Adobe Flex</strong> (Action Script 3) per la parte front-end, insieme ad <strong>HTML</strong> e <strong>CSS</strong>. Per quanto riguarda il back-end, ho utilizzato sia <strong>Ruby on Rails</strong> che <strong>PHP</strong>.</p>
<p>Mi sono occupato personalmente del design dei siti, assicurandomi che fossero esteticamente gradevoli e funzionali, oltre che della loro effettiva realizzazione, inclusa la gestione del database <strong>MySql</strong>.</p>
<p>Inoltre, mi sono concentrato anche sulla parte SEO, per garantire un buon posizionamento sui motori di ricerca.</p>
<p>Infine, ho gestito e mantenuto il server su cui erano attivi i vari siti.</p>'
      ],
      [
        "year"        => "2010",
        "period"      => "2010-2017",
        "title"       => "Desktop & Web Developer",
        "company"     => "Organizzazione no-profit",
        "companyLink" => "",
        "companyLogo" => "",
        "content"     => '<p>Ho sviluppato diverse <strong>applicazioni desktop gestionali</strong> utilizzando diversi linguaggi di programmazione, tra cui <strong>Visual Basic</strong>, <strong>Adobe Flex (AIR)</strong>, <strong>Action Script 3 </strong>e <strong>Google Chrome Apps</strong> ed <strong>Extensions</strong> (basati su HTML, CSS e Javascript).</p>
<p>Inoltre, ho sviluppato varie web app utilizzando principalmente <strong>PHP</strong>, <strong>HTML5</strong>, <strong>CSS3</strong> e <strong>MySql</strong>, e ho fatto interagire il tutto con alcuni servizi di Google come Google Drive, Maps e Google Signin.</p>
<p>In ogni progetto, mi sono concentrato sulla creazione di soluzioni funzionali e ben progettate, con una particolare attenzione all\'usabilit&agrave; e all\'esperienza dell\'utente.</p>'
      ],
      [
        "year"        => "2018",
        "period"      => "2018-2020",
        "title"       => "Senior Front-End Developer",
        "company"     => 'Zucchetti Software Giuridico s.r.l.',
        "companyLink" => "http://www.zucchettisoftwaregiuridico.it",
        "companyLogo" => "experiences/zucchetti.png",
        "content"     => '<p>Durante il mio impiego, ho gestito ed implementato i siti e le web app dell\'azienda, utilizzando varie tecnologie, tra cui <strong>JavaScript ES6</strong>, <strong>Webpack</strong>, <strong>Node.js</strong>, <strong>SASS</strong> e <strong>Bootstrap </strong>e&nbsp;<strong>Vue.js</strong>.</p>
<p>Ho avuto la responsabilit&agrave; di ideare, sviluppare, documentare e mantenere diverse librerie interne, facendo leva sugli ultimi standard ES6 e prestando particolare attenzione alla parametrizzazione, modularizzazione e performance di tali librerie.</p>'
      ],
      [
        "year"        => "2020",
        "period"      => "2020 - 2021",
        "title"       => "Senior Full Stack Developer",
        "company"     => 'Develon s.r.l.',
        "companyLink" => "https://www.develon.com",
        "companyLogo" => "experiences/develon.jpeg",
        "content"     => '<p>Nei vari progetti svolti, ho potuto lavorare su progetti in <strong>JavaScript</strong> e <strong>TypeScript</strong> usando framework come <strong>Vue.js</strong> e <strong>Nuxt</strong> per quanto concerne il front-end.</p>
<p>Lato back-end ho utilizzato vari framework <strong>Node.js</strong>, tra cui <strong>Express</strong>, <strong>AdonisJS</strong> e <strong>NestJS</strong> per la creazioni di API utilizzabili da vari servizi, oltre a collaborare all\'ideazione dell\'infrastruttura di un sistema di ticketing dell\'azienda.</p>
<p>Tutti i dati sono stati gestiti tramite <strong>MongoDB</strong>, <strong>Redis</strong> ed <strong>Elastic Search</strong>.</p>'
      ],
      [
        "year"        => "2017",
        "period"      => "2017 - oggi",
        "title"       => "Full Stack Developer, Web Designer, Mobile Developer",
        "company"     => "Self-employed",
        "companyLink" => "",
        "companyLogo" => "experiences/leicaflorian.png",
        "content"     => '<p>Ho sviluppato <strong>aplicazioni web</strong> utilizzando i classici strumenti web come <strong>JavaScript</strong> / <strong>TypeScript</strong>, <strong>jQuery</strong>, <strong>CSS/SASS</strong>, <strong>HTML5</strong>, oltre a framework come <strong>Vue.js</strong> ed <strong>Angular</strong>.</p>
<p>Per la parde backend, a seconda del bisogno, ho utilizzato <strong>Node.js</strong>&nbsp;e <strong>PHP</strong>, sfruttando poi framework come <strong>Nuxt.js</strong>&nbsp; <strong>AdonisJS</strong>, <strong>NestJs</strong> e <strong>Laravel</strong>.</p>
<p>Mi sono occupato anche di sviluppo e pubblicazione <strong>app mobile</strong> Android e iOS tramite <strong>Ionic Framework.</strong></p>'
      ],
      [
        "year"        => "2021",
        "period"      => "2021 - oggi",
        "title"       => "Main Teacher nel corso di Full-Stack Web Development",
        "company"     => 'Boolean Careers',
        "companyLink" => "https://www.boolean.careers",
        "companyLogo" => "experiences/boolean.png",
        "content"     => '<p>Utilizzando il metodo Boolean, ho aiutato giovani e meno giovani a diventare <strong>Sviluppatori Full Stack </strong>insegnando tutto ci&ograve; che riguarda i pilastri del mondo web, HTML e CSS/SASS, ed ho fornito competenze in <strong>JavaScript</strong> e <strong>Vue.js</strong> per il front-end.</p>
<p>Lato back-end, ho insegnato <strong>PHP</strong> come linguaggio base e la programmazione orientata agli oggetti, <strong>Laravel</strong> come framework PHP e <strong>MySQL</strong> come database.</p>
<p>Durante il corso, non ho trascurato l\'importanza di trasmettere la passione, la logica e l\'approccio corretto per affrontare qualsiasi linguaggio e diventare abili nel problem solving.</p>'
      ],
      [
        "year"        => "2023",
        "period"      => "2023 - oggi",
        "title"       => "Co-founder & CTO",
        "company"     => 'Web Artisan Bros',
        "companyLink" => "https://webartisanbros.com",
        "companyLogo" => "experiences/wab.png",
        "content"     => '<p>Grazie all\'esperienza maturata negli anni, ho collaborato alla nascita di <strong>Web Artisan Web</strong>, una <strong>Software House</strong> / <strong>Web Boutique</strong> orientata a creare software di qualsiasi genere, di altissima qualit&agrave;, <strong>user-centric</strong>, dove tutto ruota intorno al cliente ed ai suoi bisogni, e dove il software creato deve semplificare la vita e "calzare a pennello".</p>
<p>Gestisco la progettazione e lo stack di tecnologie da usare per ogni progetto, scrittura e controllo del codice, oltre a curare personalmente i clienti e le loro richieste.</p>'
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
