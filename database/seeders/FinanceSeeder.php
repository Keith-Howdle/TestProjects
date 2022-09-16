<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Finance;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Finance::truncate();

            $report = fopen(base_path("database\\seeds\\finance.csv"), "r");

            $dataRow = true;
            while (($data = fgetcsv($report, 4000, ",")) !== FALSE) {
                if (!$dataRow) {
                    Finance::create([
                        "period" => $data['0'],
                        "data_value" => $data['1'],
                        "suppressed" => $data['2'],
                        "status" => $data['3'],
                        "units" => $data['3']
                    ]);
                }
                $dataRow = false;
            }

        fclose($report);
    }
}
