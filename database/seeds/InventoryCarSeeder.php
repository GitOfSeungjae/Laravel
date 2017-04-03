<?php

use Illuminate\Database\Seeder;

class InventoryCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventoryData = [
                            ['vin_no'=>'MNBUMF050FW496402 ','model'=>'320i','make'=>'BMW','year'=>2014,'mspr'=>147,000,'status'=>'ordered','booked'=>true,'listed'=>false],
                            ['vin_no'=>'4JDBLMF080FW468775','model'=>'Camry','make'=>'Toyota','year'=>2015,'mspr'=>120,000,'status'=>'in stock','booked'=>true,'listed'=>false],
                            ['vin_no'=>'TFBAXXMAWAFS71274','model'=>'Focus','make'=>'Ford','year'=>2016,'mspr'=>130,000,'status'=>'ordered','booked'=>false,'listed'=>true],
                            ['vin_no'=>'G3SBUMF080FW470449','model'=>'Civic','make'=>'Honda','year'=>2016,'mspr'=>140,000 ,'status'=>'sold','booked'=>false,'listed'=>false]
                           ];
        foreach($inventoryData as $data)
        {
        		DB::table('inventory_cars')->insert([
        				'vin_no' => $data['vin_no'],
        				'model' => $data['model'],
        				'make' => $data['make'],
        				'year' => $data['year'],
        				'mspr' => $data['mspr'],
        				'status' => $data['status'],
        				'booked' => $data['booked'],
        				'listed' => $data['listed'],   				
        				'created_at' => \Carbon\Carbon::now(),
        				'updated_at' => \Carbon\Carbon::now()
        			]);

        }
    }
}
