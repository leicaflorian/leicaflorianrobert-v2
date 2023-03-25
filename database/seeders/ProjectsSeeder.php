<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    $initialData = [
      [
        "title"       => 'Biologica Disinfestazioni',
        "description" => 'Official site for the company Biologica Disinfestazioni',
        "image"       => 'projects/biologica.png',
        "link"        => 'https://biologicadisinfestazioni.it',
        "date"        => "2022-03-01"
      ],
      [
        "title"       => 'Global Group Consulting',
        "description" => 'Main web application and all the infrastructure for the company Global Group Consulting',
        "image"       => 'projects/globalgroup.png',
        "link"        => 'https://private.globalgroup.consulting/',
        "date"        => "2020-09-01"
      ],
      [
        "title"       => 'Global Club App',
        "description" => 'Web application and Android and iOS mobile application for the company Global Club',
        "image"       => 'projects/global_club.webp',
        "link"        => 'https://globalgroup.consulting/club/',
        "date"        => "2021-09-01"
      ],
      [
        "title"       => 'My website V1',
        "description" => 'My old personal website. Nothing too fancy, just a simple portfolio site.',
        "image"       => 'projects/leicaflorian.v1.png',
        "github"      => 'https://github.com/leicaflorian/slides.com_downloader',
        "link"        => 'https://v1.leicaflorianrobert.dev',
        "date"        => "2021-04-01"
      ],
      [
        "title"       => 'My website V2',
        "description" => 'The site you are currently on. Build with love and passion, using vanilla JS, Sass, PHP and Laravel',
        "image"       => 'projects/leicaflorian.v2.png',
        "github"      => 'https://github.com/leicaflorian/slides.com_downloader',
        "link"        => 'https://leicaflorianrobert.dev',
        "date"        => "2023-03-01"
      ],
      [
        "title"       => 'Slides.com downloader',
        "description" => 'Chrome/Edge extension that allows you to download slides.com presentations',
        "image"       => 'projects/slides.com.jpeg',
        "link"        => 'https://chrome.google.com/webstore/detail/slidescom-downloader/bciknjamldhnbbckmgbchmkdcalngnco?hl=it',
        "github"      => 'https://github.com/leicaflorian/leicaflorianrobert',
        "date"        => "2022-08-01"
      ],
      [
        "title"       => 'Fold my paper',
        "description" => 'Simple app that allows you to mock the folding of a single sheet of paper more that 7 times... Try it and see how far you can go!',
        "image"       => 'projects/fold_my_paper.png',
        "link"        => 'https://leicaflorian.github.io/fold_my_paper',
        "github"      => 'https://github.com/leicaflorian/fold_my_paper',
        "date"        => "2021-12-01"
      ],
      [
        "title"       => 'Enigma',
        "description" => 'A simple app that encrypts and decrypts messages using the Enigma machine',
        "image"       => 'projects/enigma.png',
        "link"        => 'https://leicaflorian.github.io/enigma_machine',
        "github"      => 'https://github.com/leicaflorian/enigma_machine',
        "date"        => "2021-12-01"
      ],
      [
        "title"       => 'TvIt',
        "description" => 'App that allows you to view italian iptv channels and exposes an API to get the channels list as well as the EPG guide',
        "image"       => 'projects/tvit.png',
        "link"        => 'https://tvit.leicaflorianrobert.dev/channels',
        "github"      => 'https://github.com/leicaflorian/tvit',
        "date"        => "2022-06-01"
      ], [
        "title"       => 'Fibonacci Counter',
        "description" => 'App that show how to generate the Fibonacci sequence using different methods',
        "image"       => 'projects/fibonacci_counter.png',
        "link"        => 'https://leicaflorian.github.io/fibonacci_counter/',
        "github"      => 'https://github.com/leicaflorian/fibonacci_counter',
        "date"        => "2020-07-01"
      ]
    ];
    
    foreach ($initialData as $project) {
      Project::updateOrInsert([
        "title" => $project["title"]
      ], $project);
    }
  }
}
