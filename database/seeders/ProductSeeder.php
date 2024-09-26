<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table("categories")->get();

        DB::table("products")->insert([
            [
                "name" => "Power T-Shirt",
                "image" => "https://cdn.shopify.com/s/files/1/1367/5207/files/PowerT-Shirt-GSNavy-A4A9Q-UB9P-0480_c7a809ee-152c-4f05-bbb4-ba55348cec9a_1920x.jpg",
                "price" => 40,
                "stock" => 20,
                "description" => "El Power T-Shirt está diseñado para ofrecerte comodidad y estilo durante tus entrenamientos. Confeccionado con una mezcla de algodón y poliéster de alta calidad, este t-shirt es suave al tacto y resistente al desgaste. Su ajuste atlético realza tu figura, mientras que su tejido transpirable te mantiene fresco en cada repetición.",
                "slug" => "producto-1",
                "category_id" => $categories[1]->id,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Varsity Jersey",
                "image" => "https://cdn.shopify.com/s/files/1/1367/5207/files/VarsityJerseyGSBlackA1B5H-BB2Jmike0182_c13f1c7d-b92f-413b-b42e-260be6d052fc_640x.jpg",
                "stock" => 20,
                "price" => 58,
                "description" => "El Varsity Jersey combina lo mejor del estilo retro con la funcionalidad moderna. Perfecto para tus sesiones de entrenamiento o para un look casual, este jersey presenta un diseño clásico con detalles de inspiración universitaria. Fabricado con materiales de alto rendimiento que absorben la humedad, te mantendrá seco y cómodo durante todo el día.",
                "category_id" => $categories[1]->id,
                "slug" => "producto-2",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Heritage Washed Hoodie",
                "image" => "https://cdn.shopify.com/s/files/1/1367/5207/files/HeritageWashedHoodieGSTitaniumBlue-ACIDWASHSMALLBALLA4A7J-UCMS1579_9c6fb682-7b5c-4e26-9476-9d590fb2ea93_3840x.jpg",
                "price" => 80,
                "stock" => 20,
                "description" => "La Heritage Washed Hoodie es la prenda esencial para los días fríos. Esta sudadera con capucha, teñida con un acabado envejecido, ofrece una apariencia única y auténtica. Hecha de una mezcla de algodón premium, proporciona una sensación acogedora y cálida, ideal tanto para el gimnasio como para el uso diario. Además, su capucha ajustable y su bolsillo canguro ofrecen funcionalidad adicional.",
                "slug" => "producto-3",
                "category_id" => $categories[1]->id,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Cargo Pants",
                "image" => "https://cdn.shopify.com/s/files/1/1367/5207/files/RestDayCargoPant-Black-A3A9O-BBBB-0851_eed18fbb-c915-40f7-85af-9b8e61a9d3cc_640x.jpg",
                "price" => 45,
                "stock" => 20,
                "description" => "Los Cargo Pants son la opción perfecta para un look versátil y funcional. Con múltiples bolsillos, estos pantalones te ofrecen todo el espacio que necesitas para llevar tus pertenencias esenciales. Fabricados con una mezcla de materiales duraderos y elásticos, son ideales tanto para aventuras al aire libre como para un estilo urbano relajado. Su diseño moderno se adapta a cualquier ocasión.",
                "slug" => "producto-4",
                "category_id" => $categories[1]->id,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "T-Shirt",
                "image" => "https://cdn.shopify.com/s/files/1/1367/5207/files/GFXSpartanManRDET-ShirtGSBlackA5A5N-BB2J1_e0d636b1-960e-4ff1-8b7b-c11e57dbe0f3_640x.jpg",
                "price" => 40,
                "stock" => 20,
                "description" => "El Power T-Shirt vuelve con un nuevo diseño gráfico que rinde homenaje a la fuerza y la determinación. Fabricado con los mismos estándares de calidad que esperas, este t-shirt ofrece un ajuste cómodo y un estilo audaz. Perfecto para tus entrenamientos más intensos o para un look casual y moderno.",
                "slug" => "producto-5",
                "category_id" => $categories[1]->id,

                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Global Lifting Oversized Joggers",
                "image" => "https://cdn.shopify.com/s/files/1/1367/5207/files/GlobalLiftingOversizedEssentialPantLightGreyCoreMarlA5A8K-GBCN_a0363ad1-fc52-4b87-8561-8ee27c5dc364_640x.jpg",
                "price" => 70,
                "stock" => 20,
                "description" => "Los Global Lifting Oversized Joggers son la combinación perfecta de comodidad y estilo. Con un ajuste holgado, estos joggers te permiten moverte con libertad mientras entrenas o descansas. Fabricados con una suave mezcla de algodón, te mantienen cálido y cómodo en cualquier situación. Los detalles de diseño, como los bolsillos y la cintura ajustable, añaden un toque de funcionalidad adicional.",
                "slug" => "producto-6",
                "category_id" => $categories[1]->id,

                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Lifting Club Hoodie",
                "stock" => 20,
                "image" => "https://cdn.shopify.com/s/files/1/1367/5207/files/LiftingClubHoodieGSBlackA5A4E-BB2J5754_640x.jpg",
                "price" => 55,
                "description" => "La Lifting Club Hoodie es más que una simple sudadera; es una declaración de tu dedicación al entrenamiento. Con un ajuste perfecto y detalles gráficos que representan la cultura del levantamiento de pesas, esta sudadera es ideal tanto dentro como fuera del gimnasio. Hecha de materiales de alta calidad, es suave, cálida y duradera, acompañándote en cada levantamiento.",
                "category_id" => $categories[1]->id,

                "slug" => "producto-7",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
