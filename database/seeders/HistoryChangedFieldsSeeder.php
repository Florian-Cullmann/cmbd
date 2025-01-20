<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryChangedFieldsSeeder extends Seeder
{
    public function run()
    {
        DB::table('history_changed_fields')->insert([
            ['historyId' => 1, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '40', 'newValue' => '30'],
            ['historyId' => 1, 'subId' => 2, 'fieldName' => 'salary', 'oldValue' => '3000', 'newValue' => '2500'],
            ['historyId' => 2, 'subId' => 1, 'fieldName' => 'salary', 'oldValue' => '2500', 'newValue' => '3000'],
            ['historyId' => 2, 'subId' => 2, 'fieldName' => 'weeklyHours', 'oldValue' => '30', 'newValue' => '40'],
            ['historyId' => 3, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '40', 'newValue' => '30'],
            ['historyId' => 4, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '30', 'newValue' => '40'],
            ['historyId' => 5, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '40', 'newValue' => '25'],
            ['historyId' => 6, 'subId' => 1, 'fieldName' => 'weeklyDays', 'oldValue' => '4', 'newValue' => '5'],
            ['historyId' => 6, 'subId' => 2, 'fieldName' => 'weeklyHours', 'oldValue' => '32', 'newValue' => '40'],
            ['historyId' => 6, 'subId' => 3, 'fieldName' => 'salary', 'oldValue' => '2800', 'newValue' => '3250'],
            ['historyId' => 7, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '35', 'newValue' => '40'],
            ['historyId' => 8, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '40', 'newValue' => '35'],
            ['historyId' => 9, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '35', 'newValue' => '20'],
            ['historyId' => 10, 'subId' => 1, 'fieldName' => 'weeklyHours', 'oldValue' => '20', 'newValue' => '35'],
        ]);
    }
}
