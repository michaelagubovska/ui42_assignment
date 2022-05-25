<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\City;

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
        $districts_array = $html->find('div[class="okres"]', 0)->find('table', 0)->find('td', 1)->find('a');

        for ($i = 0; $i < sizeof($districts_array); $i++) {
            $district_url = file_get_html($districts_array[$i]->href);
            $cities_array = $district_url->find('div[class="telo"]', 0)->find('table[width="100%"]', 4)->find('a');
            array_pop($cities_array);               // last row in table contains advertisement, therefore i removed it from the array
            for ($j = 0; $j < sizeof($cities_array); $j++) {
                $existing_city = City::where('name', $cities_array[$j]->plaintext)->first();

                if (!$existing_city) {
                    $city_url = file_get_html($cities_array[$j]->href);
                    $city_info_body = $city_url->find('div[class="telo"]', 0)->find('table', 0)->find('table', 0)->find('td[height="29"]', 0);
                    $city_info_1 = $city_info_body->find('table', 0);
                    $city_info_2 = $city_info_body->find('table', 3);

                    $city = new City();
                    $city->name = $cities_array[$j]->plaintext;
                    $city->mayor = $city_info_2->children(7)->children(1)->plaintext;
                    $city->city_hall_address = $city_info_1->children(4)->children(0)->plaintext . ', ' . $city_info_1->children(5)->children(0)->plaintext;
                    $city->phone = $city_info_1->children(2)->find('table', 0)->find('td', 0)->plaintext;
                    $city->fax = $city_info_1->children(3)->children(2)->plaintext;
                    $city->email = $city_info_1->children(4)->find('a', 0)->plaintext;
                    $city->web_address = $city_info_1->children(5)->children(2)->plaintext;

                    $info = pathinfo($city_info_1->children(2)->find('img', 0)->src);
                    $image = file_get_contents($city_info_body->find('table', 0)->children(2)->find('img', 0)->src);
                    $file = public_path("images\\") . $cities_array[$j]->plaintext . $info['basename'];
                    file_put_contents($file, $image);
                    $city->coat_of_arms_path = $file;

                    $city->save();
                }
            }
        }

        return 0;
    }
}
