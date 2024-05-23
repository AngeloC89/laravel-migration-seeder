<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new Train();
        $new_train->azienda = 'Trenitalia';
        $new_train->stazione_di_partenza = 'Napoli';
        $new_train->stazione_di_arrivo = 'Milano';
        $new_train->ora_di_partenza = '08:30:00';
        $new_train->ora_di_arrivo = '10:30:00';
        $new_train->codice_treno = 'TRE123';
        $new_train->numero_carrozze = 100;
        $new_train->in_orario = true;
        $new_train->cancellato = false;
        $new_train->save();
    }
}
