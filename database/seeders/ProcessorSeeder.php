<?php

namespace Database\Seeders;

use App\Models\Processor;
use Illuminate\Database\Seeder;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/processor.json');

        if(!file_exists($file)) {
            return null;
        }

        foreach(json_decode(file_get_contents($file)) as $data) {
            Processor::updateOrCreate([
                'id' => $data->id,
                'manufacturer' => $data->manufacturer,
                'type' => $data->type,
            ]);
        }
    }
}
