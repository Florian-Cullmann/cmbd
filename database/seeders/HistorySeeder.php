<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\History;

class HistorySeeder extends Seeder {
    public function run() {
        History::insert([
            ['id' => 1, 'staffId' => 1, 'validFrom' => '2022-01-01', 'validTo' => '2022-06-30', 'changeDate' => '2021-12-15 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 2, 'staffId' => 1, 'validFrom' => '2022-07-01', 'validTo' => null, 'changeDate' => '2022-07-01 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 3, 'staffId' => 2, 'validFrom' => '2022-04-16', 'validTo' => '2022-04-30', 'changeDate' => '2022-04-14 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 4, 'staffId' => 2, 'validFrom' => '2022-05-01', 'validTo' => null, 'changeDate' => '2022-05-01 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 5, 'staffId' => 2, 'validFrom' => '2022-09-16', 'validTo' => null, 'changeDate' => '2022-09-16 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 6, 'staffId' => 4, 'validFrom' => '2023-01-01', 'validTo' => null, 'changeDate' => '2022-12-20 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 7, 'staffId' => 3, 'validFrom' => '2022-01-01', 'validTo' => null, 'changeDate' => '2021-12-01 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 8, 'staffId' => 3, 'validFrom' => '2022-04-01', 'validTo' => null, 'changeDate' => '2022-03-15 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 9, 'staffId' => 3, 'validFrom' => '2022-06-01', 'validTo' => null, 'changeDate' => '2022-05-05 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
            ['id' => 10, 'staffId' => 3, 'validFrom' => '2022-12-01', 'validTo' => null, 'changeDate' => '2022-12-01 00:00:00', 'changeUser' => 'system', 'changeName' => 'system'],
        ]);
    }
}
