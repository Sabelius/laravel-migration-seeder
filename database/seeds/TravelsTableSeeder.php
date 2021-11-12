<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 20; $i++){
            $newTravel = new Travel();
            $newTravel->journey_name = $faker->words(3, true);
            $newTravel->description = $faker->text();
            $newTravel->departure_date = $faker->date();
            $newTravel->return_date = $faker->date();
            $newTravel->available_places = $faker->randomNumber(2, true);
            $newTravel->price = $faker->randomFloat(3, 1, 9);
            $newTravel->is_available = $faker->randomNumber(1, true);
            $newTravel->save();
        }




        // IMPLEMENTAZIONE SEEDER
        // $travels = [
        //     [
        //         "journey_name" => "Svalbard in motoslitta",
        //         "description" => "Torna il nostro viaggio di gruppo nelle Isole Svalbard. Ci sposteremo per quattro giorni a bordo di motoslitte. Di giorno cercheremo di avvistare la fauna locale ed il re dell'artico, l'orso polare. Di notte cercheremo di avvistare la meraviglia del cielo, l'aurora boreale.",
        //         "departure_date" => "2022-03-05",
        //         "return_date" => "2022-03-15",
        //         "available_places" => "25",
        //         "price" => "3.995",
        //         "is_available" => "3",
        //     ],
        // ];

        // foreach($travels as $travel){
        //     $newTravel = new Travel();

        //     // metodo manuale
        //     // $newTravel->journey_name = $travel("journey-name");
        //     // $newTravel->description = $travel("description");
        //     // $newTravel->departure_date = $travel("departure_date");
        //     // $newTravel->return_date = $travel("return_date");
        //     // $newTravel->available_places = $travel("available_places");
        //     // $newTravel->price = $travel("price");
        //     // $newTravel->is_available = $travel("is_available");

        //     // metodo con $fillable
        //     $newTravel->fill($travel);
        //     $newTravel->save();

        // }
    }
}
