<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            [
                "name" => "Poleras",
                "slug" => "poleras",
                "description" => "Las mejores poleras para el gimnasio",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Hoddies",
                "slug" => "joggers",
                "description" => "Mejora tu vestuario deportivo con nuestra colección de sudaderas con capucha para hombre. Estas sudaderas con capucha están diseñadas para ofrecer rendimiento y estilo, lo que garantiza que te sentirás cómodo y a la moda durante cada sesión de ejercicio. Ya sea que estés levantando pesas, corriendo por el pavimento o disfrutando de un día de descanso, nuestras sudaderas con capucha para entrenar son tus compañeras de confianza para un rendimiento máximo y un estilo elegante.",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Joggers",
                "slug" => "joggers",
                "description" => "Sumérgete en un mundo en el que la comodidad se fusiona con lo cool y redefine tu estilo relajado con pantalones deportivos que te mantendrán relajado y a la moda. Ya sea que estés haciendo un entrenamiento intenso o simplemente pasando el rato con amigos, y ya sea que los prefieras livianos y sueltos o ajustados y con soporte, nuestra colección de pantalones deportivos para el gimnasio tiene lo que buscas. Echa un vistazo a nuestra gama completa de colores, cortes y estilos a continuación.",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
