<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      //settings
      DB::table('settings')->insert([
        'direction' => 'Caracas, Venezuela, Estado Miranda',
        'title' => '--- Pildora Creativa ---',
        'phone' => '0414-316-56-36',
        'fax' => '555-55-55',
        'country' => 'Venezuela',
        ]);
      // usuarios administrador

      DB::table('admins')->insert([
                  'name' => "Mauricio",
                  'last_name' => "Medel",
                  'email' => 'mmedel@prosoft.cl',
                  'password' => bcrypt('20002000'),
              ]);
      DB::table('admins')->insert([
                  'name' => "Xavier",
                  'last_name' => "Gonzalez",
                  'email' => 'zechomaru@gmail.com',
                  'password' => bcrypt('secret'),
              ]);
      // categorias
      $categorias = ['Baño y cocina','Pinturas y similares','Construcción','Gasfitería','Elecricidad',
       'Ferretería','Máquinas y Herramientas','Todo hogar'];
       for ($i=0; $i < count($categorias) ; $i++) { 
          DB::table('categories')->insert([
              'name' => $categorias[$i],
            ]);
       }
       // grupos categoria 1
       $grupos = ['Griferia', 'Sanitarios, tinas y calefones', 'Muebles cocina y lavaplatos',
       'Varios baño y cocina'];
       for ($i=0; $i < count($grupos); $i++) { 
         DB::table('groups')->insert([
                  'name' => $grupos[$i],
                  'category_id' => 1,
              ]);
       }
       // sub grupos 1 categoria 1
       $subgrupos = ['Grifería Fas','Grifería Gri-Lef', 'Grifería Latina GL', 'Grifería Stretto',
       'Grifería Nibsa', 'Grifería China', 'Accesorios Grifería Duschy'];
       for ($i=0; $i < count($subgrupos) ; $i++) { 
         DB::table('subgroups')->insert([
                     'name' => $subgrupos[$i],
                     'category_id' => 1,
                     'group_id' => 1,
                 ]);
       }

       $subgrupos1 = ['Calefones','Sanitarios', 'Tinas y receptáculos'];
       for ($i=0; $i < count($subgrupos1) ; $i++) { 
         DB::table('subgroups')->insert([
                     'name' => $subgrupos1[$i],
                     'category_id' => 1,
                     'group_id' => 2,
                 ]);
       }

       $subgrupos2 = ['Muebles y cubiertas lavaplato'];
       for ($i=0; $i < count($subgrupos2) ; $i++) { 
         DB::table('subgroups')->insert([
                     'name' => $subgrupos2[$i],
                     'category_id' => 1,
                     'group_id' => 3,
                 ]);
       }

       $subgrupos3 = ['Fitting Br baño y cocina'];
       for ($i=0; $i <count($subgrupos3) ; $i++) { 
         DB::table('subgroups')->insert([
                     'name' => $subgrupos3[$i],
                     'category_id' => 1,
                     'group_id' => 4,
                 ]);
       }

       // grupos 2 categoria 2

       $grupo1 = ['Arículos pintar', 'Barnices'];
       for ($i=0; $i < count($grupo1); $i++) { 
         DB::table('groups')->insert([
                  'name' => $grupo1[$i],
                  'category_id' => 2,
              ]);
       }
       // sub grupos 1 categoria 2
       $subgrupos11 = ['Brochas y pinceles' , 'Rodillos' , 'Solventes y similares' , 'Varios artículos pintar'];
       for ($i=0; $i < count($subgrupos11); $i++) { 
         DB::table('subgroups')->insert([
                     'name' => $subgrupos11[$i],
                     'category_id' => 2,
                     'group_id' => 5,
                 ]);
       }

       $subgrupos12 = ['Barniz Iris' , 'Barniz Tricolor' , 'Barniz Ceresita' , 'Barniz Dynal' , 'Barniz Petrilac ', 'Barniz Chilcorrofin'];
       for ($i=0; $i < count($subgrupos12); $i++) { 
         DB::table('subgroups')->insert([
                     'name' => $subgrupos12[$i],
                     'category_id' => 2,
                     'group_id' => 6,
                 ]);
       }

       // products
       $products = ['Combinación Lavatorio Fas   CC3-1001',
'Combinación lavaplato FAS   CC7-1001',
'zzz Fas',
'Combinación Ducha Fas CD-1001',
'Combinación tina ducha Fas CBE1-1001',
'Combinación tina-ducha Fas 8" c/ducha Movil  CC-1-1001 - REMATE',
'Flexible Ducha 1.75 Mt  Fas  LL5B',
'Llave lavatorio crane Fas LC1-1001',
'zzzLl ave l avatorio c rane FA S LC1-6001 Cromolux',
'Llave al muro FAS LC4 - 1001  p/ lavadero',
'Llave al muro FAS LC7 - 1001  1/2*3/4 he p/ lavadero',
'Llave al muro FAS LC26 - 1001',
'Llave paso campana br so 1/2"  FAS  LC17-1001',
'Llave paso Angular LC9J-1001 FAS 1/2*15/16 c/Flexible',
'Monomando lavaplato Fas LLCC Manilla 1 Agua Cuello Cisne',
'Monomando lavaplato Fas  MCPOR - Orión',
'Monomando Lavaplato FAS MCP-OP - Omega Plus',
'Monomando lavatorio Fas MCLOR - Orion',
'Monomando lavatorio Fas MCLOP - Omega Plus',
'Monomando Lavatorio Fas MCLNAP - Nápoli',
'Monomando tina-ducha Fas MCT1OR - Orión',
'Monomando tina-ducha Fas MCT1OP - Omega Plus',
'Monomando ducha Fas  MCDOR - Orión',
'Monomando ducha Fas  MCDOP - Omega Plus',
'Monomando Bidet Siena Fas MCB cromo ¡¡OFERTA - REMATE !!',
'zzz Fas'];
      $important = 0;
       for ($i=0; $i <  count($products); $i++) { 
         if ($important < 9 ) {
           DB::table('products')->insert([
              'name' => $products[$i],
              'sku' => $i . '23' . $i . '2' . $i,
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, asperiores.',
              'important' => 1,
              'price' => '100',
              'category_id' => 1,
              'group_id' => 1,
              'subgroup_id' => 1,
            ]);
           $important++;
         }else{
            DB::table('products')->insert([
               'name' => $products[$i],
               'sku' => $i . '23' . $i . '2' . $i,
               'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, asperiores.',
               'price' => '100',
               'category_id' => 1,
               'group_id' => 1,
               'subgroup_id' => 1,
             ]);
         }
       }


       $products2 = ['Llave Lavatorio GRILEF   L-502  Manilla metálica',
'Combinación lavaplato GRILEF   CLE-C450',
'Combinación ducha GRILEF  CLE-C404',
'Combinación tina-ducha GRILEF   CLE-C402',
'Ducha teléfono M/Cromado GRILEF    SDT-50C',
'Ducha teléfono M/Blanco GRILEF     SDT-50RB',
'Ducha pared movil ABS cromada GRILEF   BDM-G',
'Llave jardín Br Cromada 1/2*3/4 GRILEF   L-530 c/Acople',
'Llave lavatorio-lavaplato GRILEF   L-506 Cuello cisne',
'Llave paso campana GRILEF  L-517',
'Llave paso angular L-510 GRILEF  1/2*15/16 Sin flexible',
'Llave paso angular LF-625 GRILEF  1/2*15/16 c/flexible 25 cm',
'Monomando lavaplato GRILEF  CLE-M306',
'Monoblock Lavaplato GRILEF   CLE-C408',
'Monomando lavatorio GRILEF   CLE-M300',
'Monomando tina-ducha GRILEF   CLE-M302',
'Monomando ducha GRILEF   CLE-M304',
'Mango ducha Cromado GRILEF  MDT-C    MDT101',
'Soporte ducha teléfono Cromo  GRILEF  SDT-C',
'Soporte ducha teléfono Blanco  GRILEF  SDT-B    SDT-BBP',
'Flexible ducha 1.5 Mt GRILEF  FDT-150',
'Flexible ducha 2.0 Mt GRILEF  FDT-200',
'Flexible WC hi hi 1/2*15/16 - 25 cm GRILEF  FX-2516'];

for ($i=0; $i <  count($products2); $i++) { 
  DB::table('products')->insert([
     'name' => $products2[$i],
     'sku' => $i . '23' . $i . '2' . $i,
     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, asperiores.',
     'price' => '100',
     'category_id' => 1,
     'group_id' => 1,
     'subgroup_id' => 1,
   ]);
}
// sliders y imagenes
// DB::table('sliders')->insert([
//             'name' => "Mi Primer Slider",
//         ]);
// $sliderImage = ['1.jpg', '2.jpg', '3.jpg'];
// for ($i=0; $i < count($sliderImage) ; $i++) { 
//   DB::table('image_sliders')->insert([
//               'url' => $sliderImage[$i],
//               'slider_id' => 1,
//           ]);
// }










echo "LISTO LA MIGRACION";
    }
}

