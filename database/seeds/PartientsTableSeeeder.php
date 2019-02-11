<?php
// định nghĩa một seeder
use Illuminate\Database\Seeder;

class PartientsTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reference to model and create 50 records in database
        factory(App\Patient::class, 50)->create(); 
    }
}
