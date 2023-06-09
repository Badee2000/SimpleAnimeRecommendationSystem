<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = base_path('app/cleaned_anime.csv');
        $fileHandle = fopen($csvFile, 'r');
        $header = fgetcsv($fileHandle);
        while (!feof($fileHandle)) {
            $row = fgetcsv($fileHandle);

            if (!$row || count($row) !== count($header)) {
                continue;
            }

            $data = array_combine($header, $row);

            // Use the Eloquent model to create a new record
            // with the values from the CSV file
            Anime::create($data);
        }

        fclose($fileHandle);
    }
}
