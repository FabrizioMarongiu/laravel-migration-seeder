<?php

use App\Box;

use Illuminate\Database\Seeder;

class BoxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 30; $i++){
        //Creazione record

        $new_box = new Box();

        //Popolazione colonne
        $new_box->Location = 'Via XXX N°'. rand(1, 100);
        $new_box->Description = 'Mare / Montagna - Avventura / Relax / Esperienza';
        $new_box->Duration = 'La vacanza ha una durata di '.rand(1, 30).' giorni';
        $new_box->Price = rand(100, 10000);
        $new_box->Vote = rand(1, 5);

         //Salvare record
         $new_box->save();
        }

    }
}
