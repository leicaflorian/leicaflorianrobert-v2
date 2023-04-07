<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Tags\Url;

class Sitemap extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'app:sitemap';
  
  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create app sitemap';
  
  /**
   * Execute the console command.
   */
  public function handle(): void {
    $siteUrl = "https://leicaflorianrobert.dev";
    
    \Spatie\Sitemap\Sitemap::create()
      ->add(Url::create($siteUrl . "/")->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
      ->add(Url::create($siteUrl . "/about")->setPriority(.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
      ->add(Url::create($siteUrl . "/projects")->setPriority(.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
      ->writeToFile(public_path('sitemap.xml'));
    
  }
}
