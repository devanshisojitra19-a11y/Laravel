<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                'name' => 'Dr. Jennifer Morgan',
                'specialty' => 'Senior Cardiologist',
                'credentials' => 'MD, FACC',
                'experience' => '18 years',
                'rating' => 4.9,
                'patients_count' => 142,
                'image' => 'assets/img/health/staff-1.webp',
                'status' => 'active',
            ],
            [
                'name' => 'Dr. Robert Kim',
                'specialty' => 'Neurosurgeon',
                'credentials' => 'MD, PhD',
                'experience' => '24 years',
                'rating' => 4.8,
                'patients_count' => 98,
                'image' => 'assets/img/health/staff-3.webp',
                'status' => 'busy',
            ],
            [
                'name' => 'Dr. Sarah Thompson',
                'specialty' => 'Pediatric Specialist',
                'credentials' => 'MD, FAAP',
                'experience' => '12 years',
                'rating' => 5.0,
                'patients_count' => 156,
                'image' => 'assets/img/health/staff-5.webp',
                'status' => 'active',
            ],
            [
                'name' => 'Dr. Michael Rivera',
                'specialty' => 'Orthopedic Surgeon',
                'credentials' => 'MD, FAAOS',
                'experience' => '20 years',
                'rating' => 4.7,
                'patients_count' => 134,
                'image' => 'assets/img/health/staff-7.webp',
                'status' => 'offline',
            ],
            [
                'name' => 'Dr. Lisa Garcia',
                'specialty' => 'Dermatologist',
                'credentials' => 'MD, FAAD',
                'experience' => '15 years',
                'rating' => 4.6,
                'patients_count' => 89,
                'image' => 'assets/img/health/staff-9.webp',
                'status' => 'active',
            ],
            [
                'name' => 'Dr. Daniel Wong',
                'specialty' => 'Oncology Expert',
                'credentials' => 'MD, FASCO',
                'experience' => '21 years',
                'rating' => 4.9,
                'patients_count' => 211,
                'image' => 'assets/img/health/staff-12.webp',
                'status' => 'active',
            ],
        ];

        foreach ($doctors as $doctor) {
            \App\Models\Doctor::create($doctor);
        }
    }
}
