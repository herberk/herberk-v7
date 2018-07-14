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
        $this->call(UserTableSeeder::class);
        $this->call(User_profilesTableSeeder::class);
        $this->call(TiposTableSeeder::class);
        $this->call(AtributosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(RegionesTableSeeder::class);
        $this->call(ComunasTableSeeder::class);
        $this->call(DesgirosTableSeeder::class);
        $this->call(GirosTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(JuradasTableSeeder::class);
        $this->call(SociosTableSeeder::class);
        $this->call(ContactosTableSeeder::class);
        $this->call(FilesTableSeeder::class);
       // $this->call(RolesAndPermissionsSeeder::class);
        $this->command->warn('All done = Todo bien :)');
    }
}
