<?php

namespace Database\Seeders;

use App\Models\Notebook;
use Illuminate\Database\Seeder;

class NotebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/notebook.json');

        if(!file_exists($file)) {
            return null;
        }

        foreach(json_decode(file_get_contents($file)) as $data) {
            Notebook::updateOrCreate([
                'manufacturer' => $data->manufacturer,
                'type' => $data->type,
                'display' => $data->display,
                'memory' => $data->memory,
                'harddisk' => $data->harddisk,
                'videocontroller' => $data->videocontroller,
                'price' => $data->price,
                'processor_id' => $data->processorid,
                'opsystem_id' => $data->opsystemid,
                'pieces' => $data->pieces,
            ]);
        }
    }
}
