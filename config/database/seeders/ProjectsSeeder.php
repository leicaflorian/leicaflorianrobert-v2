<?php

namespace config\database\seeders;

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
        "image"       => 'https://uploads-ssl.webflow.com/61af21b02799774300900f28/624709bdd1cbf50f2ace0042_logo%20wide.jpg',
        "link"        => 'https://biologicadisinfestazioni.it',
        "date"        => "2022-03-01"
      ],
      [
        "title"       => 'Global Group Consulting',
        "description" => 'Android and iOS application for the company Global Club',
        "image"       => '/global club.webp',
        "link"        => 'https://globalgroup.consulting',
        "date"        => "2020-09-01"
      ],
      [
        "title"       => 'Global Club App',
        "description" => 'Android and iOS application for the company Global Club',
        "image"       => '/global club.webp',
        "link"        => 'https://apps.apple.com/it/app/global-club/id1603085370',
        "date"        => "2021-09-01"
      ],
      [
        "title"       => 'My website V1',
        "description" => 'The site you are currently on. Nothing too fancy, just a simple portfolio site.',
        "image"       => '/banner.jpg',
        "github"      => 'https://github.com/leicaflorian/slides.com_downloader',
        "date"        => "2021-04-01"
      ],
      [
        "title"       => 'My website V2',
        "description" => 'The site you are currently on. Nothing too fancy, just a simple portfolio site.',
        "image"       => '/banner.jpg',
        "github"      => 'https://github.com/leicaflorian/slides.com_downloader',
        "date"        => "2023-03-01"
      ],
      [
        "title"       => 'Slides.com downloader',
        "description" => 'Chrome/Edge extension that allows you to download slides.com presentations',
        "image"       => 'https://lh3.googleusercontent.com/L9a8S1WWEnY_mAuOurVqI81zIH_N0hAzPGADDKtwEY_OBFr0hiRrEY7Rbu6icKy4Pw1QKAYKCjQSvbwD_atVPUA4ng=w640-h400-e365-rj-sc0x00ffffff',
        "link"        => 'https://chrome.google.com/webstore/detail/slidescom-downloader/bciknjamldhnbbckmgbchmkdcalngnco?hl=it',
        "github"      => 'https://github.com/leicaflorian/leicaflorianrobert',
        "date"        => "2022-08-01"
      ],
      [
        "title"       => 'Fold my paper',
        "description" => 'Simple app that allows you to mock the folding of a single sheet of paper more that 7 times... Try it and see how far you can go!',
        "link"        => 'https://leicaflorian.github.io/fold_my_paper',
        "github"      => 'https://github.com/leicaflorian/fold_my_paper',
        "date"        => "2021-12-01"
      ],
      [
        "title"       => 'Enigma',
        "description" => 'A simple app that encrypts and decrypts messages using the Enigma machine',
        "link"        => 'https://leicaflorian.github.io/enigma_machine',
        "github"      => 'https://github.com/leicaflorian/enigma_machine',
        "date"        => "2021-12-01"
      ],
      [
        "title"       => 'TvIt',
        "description" => 'App that allows you to view italian iptv channels',
        "link"        => 'https://hometv.herokuapp.com/',
        "github"      => 'https://github.com/leicaflorian/hometv',
        "date"        => "2022-06-01"
      ], [
        "title"       => 'Fibonacci Counter',
        "description" => 'App that show how to generate the Fibonacci sequence using different methods',
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
