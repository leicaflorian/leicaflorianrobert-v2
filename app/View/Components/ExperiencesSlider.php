<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ExperiencesSlider extends Component {
  public Collection $workExperiences;
  public array $years;
  
  /**
   * Create a new component instance.
   */
  public function __construct() {
    $experiences           = collect([
      [
        "year"        => "2009",
        "period"      => "2009",
        "title"       => "Sviluppo software gestionale",
        "company"     => 'Tecnobit s.r.l.',
        "companyLink" => "https://www.tecnobit.shop/it/sketchup-e-plugin",
        "companyLogo" => "jumbo.png",
        "content"     => 'Sono stato incaricato di sviluppare un software gestionale per <strong>"L’ordine degli Ingegneri della Provincia di Potenza"</strong> utilizzando <strong>Visual Basic</strong> e MySql.
      <br>
      Grazie a questo lavoro, ho iniziato a coltivare vera passione per il mondo dell’informatica ed in particolare della programmazione approfondendo le mie conoscenze e ad allargando le mie vedute.'
      ],
      [
        "year"        => "2009",
        "period"      => "2009",
        "title"       => "Sviluppatore Full Stack",
        "company"     => "Mediamotion s.r.l.",
        "companyLink" => "",
        "companyLogo" => "jumbo.png",
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
        "companyLogo" => "jumbo.png",
        "content"     => 'Ho sviluppato diverse applicazioni desktop di tipo gestionale usando linguaggi come <strong>Visual Basic</strong>, <strong>Adobe Flex</strong> (AIR), <strong>Action Script 3</strong> e <strong>Google Chrome Apps</strong> ed <strong>Extensions</strong> (HTML, CSS e Javascript). Ho poi sviluppato vari siti usando <strong>PHP</strong>, <strong>HTML5</strong>, <strong>CSS3</strong>, <strong>MySql</strong>, <strong>JavaScript</strong> e <strong>jQuery</strong>, facendo interagire il tutto con le API di Google per accedere a Google Drive, Maps e Google Signin.'
      ],
      [
        "year"        => "2018",
        "period"      => "2018-2020",
        "title"       => "Svilupatore Front-End Senior",
        "company"     => 'Zucchetti Software Giuridico s.r.l.',
        "companyLink" => "http://www.zucchettisoftwaregiuridico.it",
        "companyLogo" => "jumbo.png",
        "content"     => 'Ho lavorato sulle web applications dell\'azienda utilizzando le ultime tecnologie come <strong>JavaScript ES6</strong>, <strong>Webpack</strong>, <strong>Node.js</strong>, <strong>SASS</strong>, <strong>Bootstrap</strong> nonchè creato sezioni degli applicativi in <strong>Vue.js</strong>. Ho inoltre sviluppato, documentato e mantenuto molteplici librerie interne, sfruttando gli ultimi standard ES6 con un occhio di riguardo alla parametrizzazione, modularizzazione e performance di queste ultime.'
      ],
      [
        "year"        => "2020",
        "period"      => "2020 - 2021",
        "title"       => "Sviluppatore Full Stack Senior",
        "company"     => 'Develon s.r.l.',
        "companyLink" => "https://www.develon.com",
        "companyLogo" => "jumbo.png",
        "content"     => 'Usando le tecnologie più moderne in campo web, ho sfruttato al massimo la potenza di <strong>JavaScript</strong> e <strong>TypeScript</strong>, lavorando con <strong>Vue.js</strong> ed il framework <strong>Nuxt</strong> lato front end, mentre come backend ho usato vari framework <strong>Node.js</strong>, come <strong>Express</strong>, <strong>AdonisJs</strong>, <strong>NestJS</strong>. Tutto questo, sfruttando <strong>Mongo</strong> come database, oltre che a <strong>Redis</strong> (per la gestione di code di lavorazione) ed <strong>Elastic Search</strong>.'
      ],
      [
        "year"        => "2017",
        "period"      => "2017-oggi",
        "title"       => "Sviluppatore Full Stack e Grafico Web",
        "company"     => "Freelance",
        "companyLink" => "",
        "companyLogo" => "jumbo.png",
        "content"     => 'Sviluppo siti web utilizzando i classici strumenti web come <strong>JavaScript/TypeScript</strong>, <strong>jQuery</strong>, <strong>CSS/SASS</strong>, <strong>HTML5</strong> oltre a framework come <strong>Vue.js</strong> ed <strong>Angular</strong>. Per la comunicazione con i server, a seconda del bisogno utilizzo <strong>Node.js</strong> o <strong>PHP</strong>, sfruttando poi framework come <strong>Nuxt</strong>, <strong>AdonisJS</strong>, <strong>NestJs</strong> e <strong>Laravel</strong>. Completano il tutto lo sviluppo mobile con <strong>NativeScript</strong>.'
      ],
      [
        "year"        => "2021",
        "period"      => "2021-oggi",
        "title"       => "Insegnante programmazione Full Stack",
        "company"     => 'Boolean Careers',
        "companyLink" => "https://www.boolean.careers",
        "companyLogo" => "jumbo.png",
        "content"     => 'Usando il metodo <a href="https://www.boolean.careers/" target="_blank">Boolean</a>, aiuto giovani e meno giovani a diventare Sviluppatori Full Stack. Durante il percorso insegno tutto quello che riguarda <strong>HTML</strong> e <strong>CSS/SASS</strong>, le due pietre miliari del mondo del web.
      Inoltre non mancano <strong>JavaScript</strong> e <strong>Vue.js</strong>. Passando al BackEnd, <strong>PHP</strong> è un "must" come anche la programmazione orientata ad oggetti, MySQL e Laravel. <br>
      In tutto il percorso, oltre alle informazioni tecniche è indispensabile trasmettere la logica e l\'approccio giusto per affrontare qualsiasi linguaggio e diventare bravi nel problem solving.'
      ],
    ]);
    $this->workExperiences = $experiences->groupBy('year');
    
    $years    = $this->workExperiences->keys()->sort();
    $allYears = [];
    
    for ($i = intval($years->first()); $i <= now()->year; $i++) {
      $allYears[] = [
        "num"   => $i,
        "empty" => !$this->workExperiences->get($i),
        "last"  => $years->last() == $i,
      ];
    }
    
    $this->years = $allYears;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.experiences-slider');
  }
}
