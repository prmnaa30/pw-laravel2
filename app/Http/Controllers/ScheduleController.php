<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() 
    {
        $collegeSchedule = [
            'Senin' => [
                [
                    'subject' => 'Jaringan Komputer Lanjut',
                    'start_time' => '12:20',
                    'end_time' => '14:50',
                    'lecturer' => 'I Kadek Juni Arta, S.Kom., M.Kom.',
                ],
                [
                    'subject' => 'Tata Kelola dan Audit Sistem Informasi',
                    'start_time' => '14:50',
                    'end_time' => '17:20',
                    'lecturer' => 'Yuri Prima Fittryani, S.T., M.T.',
                ],
            ],
            'Selasa' => [
                [
                    'subject' => 'Data Integration',
                    'start_time' => '10:00',
                    'end_time' => '12:20',
                    'lecturer' => 'Ir. I Made Dwi Putra Asana, S.Kom., M.Kom.',
                ],
                [
                    'subject' => 'Pemrograman Web Framework',
                    'start_time' => '14:50',
                    'end_time' => '17:20',
                    'lecturer' => 'Ir. I Komang Arya Ganda Wiguna, S.Kom., M.Cs.',
                ],
            ],
            'Rabu' => [
                [
                    'subject' => 'Object Oriented Analysis and Design',
                    'start_time' => '14:50',
                    'end_time' => '17:20',
                    'lecturer' => 'Ir. I Made Dwi Putra Asana, S.Kom., M.Kom.',
                ],
                [
                    'subject' => 'Sistem Informasi Geografis',
                    'start_time' => '19:50',
                    'end_time' => '22:00',
                    'lecturer' => 'Pande Gede Angga Priardhi Putra S.Ti., M.MT.',
                ],
            ],
            'Kamis' => [
                [
                    'subject' => 'Bisnis Berbasis Teknologi',
                    'start_time' => '13:10',
                    'end_time' => '15:40',
                    'lecturer' => 'Dewa Ayu Putri Wulandari, S.Kom., M.T.',
                ],
            ],
            'Jumat' => [
                [
                    'subject' => 'Pengantar Akuntansi',
                    'start_time' => '14:50',
                    'end_time' => '17:20',
                    'lecturer' => 'I Gusti Ayu Anom, S.E., M.Sos.',
                ],
            ],
        ];

        return view('profiles.schedule', compact('collegeSchedule'));
    }
}
