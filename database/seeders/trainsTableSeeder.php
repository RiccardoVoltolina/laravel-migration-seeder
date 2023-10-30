<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = config('trains.trains');

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->Azienda = $train['Azienda'];
            $new_train->Stazione_di_partenza = $train['Stazione_di_partenza'];
            $new_train->Stazione_di_arrivo = $train['Stazione_di_arrivo'];
            $new_train->Orario_di_partenza = $train['Orario_di_partenza'];
            $new_train->Orario_di_arrivo = $train['Orario_di_arrivo'];
            $new_train->Codice_Treno = $train['Codice_Treno'];
            $new_train->Numero_Carrozze = $train['Numero_Carrozze'];
            $new_train->In_orario = $train['In_orario'];
            $new_train->Cancellato = $train['Cancellato'];
      
            $new_train->save();
            
        }
    }
}
