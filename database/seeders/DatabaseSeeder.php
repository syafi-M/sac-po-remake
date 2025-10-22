<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\InfoLoker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $vacancies = [
            // Ponorogo
            [
                'city' => 'Ponorogo',
                'province' => 'Jawa Timur',
                'position' => 'Cleaning Service',
                'count' => 20,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Department',
                'contact_phone' => '0812-3456-7890',
                'contact_email' => 'hr@ponorogo.sac-po.com',
            ],
            [
                'city' => 'Ponorogo',
                'province' => 'Jawa Timur',
                'position' => 'Security',
                'count' => 15,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Department',
                'contact_phone' => '0812-3456-7890',
                'contact_email' => 'hr@ponorogo.sac-po.com',
            ],
            [
                'city' => 'Ponorogo',
                'province' => 'Jawa Timur',
                'position' => 'Teknisi',
                'count' => 8,
                'expiry_date' => now()->addMonths(2),
                'contact_person' => 'HR Department',
                'contact_phone' => '0812-3456-7890',
                'contact_email' => 'hr@ponorogo.sac-po.com',
            ],
            [
                'city' => 'Ponorogo',
                'province' => 'Jawa Timur',
                'position' => 'Leader',
                'count' => 12,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Department',
                'contact_phone' => '0812-3456-7890',
                'contact_email' => 'hr@ponorogo.sac-po.com',
            ],

            // Madiun
            [
                'city' => 'Madiun',
                'province' => 'Jawa Timur',
                'position' => 'Cleaning Service',
                'count' => 20,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Madiun',
                'contact_phone' => '0813-4567-8901',
                'contact_email' => 'hr@madiun.sac-po.com',
            ],
            [
                'city' => 'Madiun',
                'province' => 'Jawa Timur',
                'position' => 'Teknisi',
                'count' => 8,
                'expiry_date' => now()->addMonths(2),
                'contact_person' => 'HR Madiun',
                'contact_phone' => '0813-4567-8901',
                'contact_email' => 'hr@madiun.sac-po.com',
            ],

            // Surabaya
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'position' => 'Cleaning Service',
                'count' => 30,
                'expiry_date' => now()->addMonths(4),
                'contact_person' => 'HR Surabaya',
                'contact_phone' => '0814-5678-9012',
                'contact_email' => 'hr@surabaya.sac-po.com',
            ],
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'position' => 'Security',
                'count' => 25,
                'expiry_date' => now()->addMonths(4),
                'contact_person' => 'HR Surabaya',
                'contact_phone' => '0814-5678-9012',
                'contact_email' => 'hr@surabaya.sac-po.com',
            ],
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'position' => 'Teknisi',
                'count' => 10,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Surabaya',
                'contact_phone' => '0814-5678-9012',
                'contact_email' => 'hr@surabaya.sac-po.com',
            ],
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'position' => 'Leader',
                'count' => 15,
                'expiry_date' => now()->addMonths(4),
                'contact_person' => 'HR Surabaya',
                'contact_phone' => '0814-5678-9012',
                'contact_email' => 'hr@surabaya.sac-po.com',
            ],
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'position' => 'Parking',
                'count' => 8,
                'expiry_date' => now()->addMonths(2),
                'contact_person' => 'HR Surabaya',
                'contact_phone' => '0814-5678-9012',
                'contact_email' => 'hr@surabaya.sac-po.com',
            ],
            [
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'position' => 'Catering',
                'count' => 12,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Surabaya',
                'contact_phone' => '0814-5678-9012',
                'contact_email' => 'hr@surabaya.sac-po.com',
            ],

            // Malang
            [
                'city' => 'Malang',
                'province' => 'Jawa Timur',
                'position' => 'Cleaning Service',
                'count' => 25,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Malang',
                'contact_phone' => '0815-6789-0123',
                'contact_email' => 'hr@malang.sac-po.com',
            ],
            [
                'city' => 'Malang',
                'province' => 'Jawa Timur',
                'position' => 'Security',
                'count' => 20,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Malang',
                'contact_phone' => '0815-6789-0123',
                'contact_email' => 'hr@malang.sac-po.com',
            ],
            [
                'city' => 'Malang',
                'province' => 'Jawa Timur',
                'position' => 'Teknisi',
                'count' => 8,
                'expiry_date' => now()->addMonths(2),
                'contact_person' => 'HR Malang',
                'contact_phone' => '0815-6789-0123',
                'contact_email' => 'hr@malang.sac-po.com',
            ],
            [
                'city' => 'Malang',
                'province' => 'Jawa Timur',
                'position' => 'Leader',
                'count' => 12,
                'expiry_date' => now()->addMonths(3),
                'contact_person' => 'HR Malang',
                'contact_phone' => '0815-6789-0123',
                'contact_email' => 'hr@malang.sac-po.com',
            ],
            [
                'city' => 'Malang',
                'province' => 'Jawa Timur',
                'position' => 'Gardener',
                'count' => 6,
                'expiry_date' => now()->addMonths(2),
                'contact_person' => 'HR Malang',
                'contact_phone' => '0815-6789-0123',
                'contact_email' => 'hr@malang.sac-po.com',
            ],
        ];

        foreach ($vacancies as $vacancy) {
            InfoLoker::create($vacancy);
        }
    }
}
