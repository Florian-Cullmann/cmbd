<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder {
    public function run() {
        Staff::insert([
            [
                'staffId' => 1, 'birthday' => '1980-04-03', 'birthPlace' => null, 'birthName' => 'Muster',
                'gender' => 'm', 'firstName' => 'Max', 'lastName' => 'Muster', 'steuerId' => null,
                'startDate' => '2021-04-01', 'endDate' => null, 'endReason' => null, 'weeklyHours' => 40,
                'insertedBy' => 'system', 'insertDate' => '2023-06-06 12:31:33', 'updatedBy' => null, 'updateDate' => '2023-06-06 12:32:37'
            ],
            [
                'staffId' => 2, 'birthday' => '1985-03-02', 'birthPlace' => null, 'birthName' => 'Test',
                'gender' => 'w', 'firstName' => 'Gerda', 'lastName' => 'Test', 'steuerId' => null,
                'startDate' => '2022-01-01', 'endDate' => null, 'endReason' => null, 'weeklyHours' => 25,
                'insertedBy' => 'system', 'insertDate' => '2023-06-06 12:32:29', 'updatedBy' => null, 'updateDate' => '2023-06-06 12:41:41'
            ],
            [
                'staffId' => 3, 'birthday' => '1977-09-15', 'birthPlace' => null, 'birthName' => 'Maier',
                'gender' => 'm', 'firstName' => 'Max', 'lastName' => 'Maier', 'steuerId' => null,
                'startDate' => '2021-08-16', 'endDate' => '2023-08-31', 'endReason' => 'Kündigung', 'weeklyHours' => 35,
                'insertedBy' => 'system', 'insertDate' => '2023-06-06 12:33:37', 'updatedBy' => null, 'updateDate' => '2024-02-09 22:22:45'
            ],
            [
                'staffId' => 4, 'birthday' => '1990-05-22', 'birthPlace' => null, 'birthName' => 'Schulz',
                'gender' => 'w', 'firstName' => 'Marie', 'lastName' => 'Schulz', 'steuerId' => null,
                'startDate' => '2022-05-16', 'endDate' => null, 'endReason' => null, 'weeklyHours' => 40,
                'insertedBy' => 'system', 'insertDate' => '2023-06-06 12:34:55', 'updatedBy' => null, 'updateDate' => '2023-06-06 12:42:04'
            ],
            [
                'staffId' => 5, 'birthday' => '2000-07-13', 'birthPlace' => null, 'birthName' => 'Müller',
                'gender' => 'm', 'firstName' => 'Egon', 'lastName' => 'Müller', 'steuerId' => null,
                'startDate' => '2023-04-01', 'endDate' => null, 'endReason' => null, 'weeklyHours' => 10,
                'insertedBy' => 'system', 'insertDate' => '2023-06-06 12:35:50', 'updatedBy' => null, 'updateDate' => '2023-06-06 12:42:12'
            ]
        ]);
    }
}
