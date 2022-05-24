<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

include('C:\Users\misul\Desktop\ui42\project\assignment\simple_html_dom.php');

class DataImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse data for all cities in Nitra region and insert into database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $html = file_get_html('https://www.e-obce.sk/kraj/NR.html');
//        $districts = $html->find('div[class="okres"]', 0)->find('table', 0)->find('td', 1);
        $districts_array = $html->find('div[class="okres"]', 0)->find('table', 0)->find('td', 1)->find('a');

        for ($i = 0; $i < sizeof($districts_array); $i++) {
            $district_url = file_get_html($districts_array[$i]->href);
            $cities_array = $district_url->find('div[class="telo"]', 0)->find('table[width="100%"]', 4)->find('a');
            for ($j = 0; $j < sizeof($cities_array); $j++) {
                $city_url = file_get_html($cities_array[$j]->href);
                
            }
        }

        return 0;
    }
}
