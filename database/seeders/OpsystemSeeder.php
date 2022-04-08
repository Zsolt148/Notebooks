<?php

namespace Database\Seeders;

use App\Models\Opsystem;
use Illuminate\Database\Seeder;

class OpsystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/opsystem.json');

        if(!file_exists($file)) {
            return null;
        }

        foreach(json_decode(file_get_contents($file)) as $data) {
            Opsystem::updateOrCreate([
                'id' => $data->id,
                'os_name' => $data->name,
            ]);
        }
    }
}
