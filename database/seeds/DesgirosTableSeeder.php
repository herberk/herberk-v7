<?php


use Illuminate\Database\Seeder;


class DesgirosTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('desgiros')->delete();

        \DB::table('desgiros')->insert(array(
            array('id' => '1','name' => 'Agricultura Ganaderia Caza y Silvicultura','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '2','name' => 'Pesca','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '3','name' => 'Explotacion de Minas y Canteras','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '4','name' => 'Industrias Manufactureras No Metalicas','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '5','name' => 'Industrias Manufactureras Metálicas','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '6','name' => 'Suministro de Electricidad Gas y Agua','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '7','name' => 'Construcción','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '8','name' => 'Comercio al Por Mayor y Menor; Rep. Vehículos Automotores/Enseres Domésticos','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '9','name' => 'Hoteles y Restaurantes','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '10','name' => 'Transporte Almacenamiento y Comunicaciones','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '11','name' => 'Intermediación Financiera','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '12','name' => 'Actividades Inmobiliarias Empresariales y de Alquiler','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '13','name' => 'Adm. Pública y Defensa; Planes de Seg. Social Afiliación Obligatoria','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '14','name' => 'Enseñanza','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '15','name' => 'Servicios Sociales y de Salud','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '16','name' => 'Otras Actividades de Servicios Comunitarias Sociales y Personales','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '17','name' => 'Consejo de Administracion de Edificios y Condominios','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '18','name' => 'Organizaciones y Órganos Extraterritoriales','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39')

        ));
    }

}