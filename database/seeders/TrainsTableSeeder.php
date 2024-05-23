<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $path = __DIR__ . "/trains.csv";
        $trains_csv = fopen($path, "r");
        if ($trains_csv === false) {
            exit("Cannot open $path");
        }


        $data = [];
        while ($row = fgetcsv($trains_csv)) {
            $data[] = $row;
        }

        foreach ($data as $index => $train) {
            if($index !== 0) {

                $new_train = new Train();
                $new_train->azienda = $train[0];
                $new_train->stazione_di_partenza = $train[1];
                $new_train->stazione_di_arrivo = $train[2];
                $new_train->ora_di_partenza = $train[3];
                $new_train->ora_di_arrivo = $train[4];
                $new_train->codice_treno = $train[5];
                $new_train->numero_carrozze = $train[6];
                $new_train->in_orario = $train[7];
                $new_train->cancellato = $train[8];
                $new_train->save();


            }



        }
    }
}
