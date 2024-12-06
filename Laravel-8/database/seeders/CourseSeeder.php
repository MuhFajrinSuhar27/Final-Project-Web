<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [

            [
                'title' => 'Pemrograman Web',
                'completed' => 1,
                'total' => 10,
                'duration' => '18min',
                'teacher_id' => 1,
                'lessons' => [
                    [
                        'title' => 'HTML Dasar',
                        'completed' => 1,
                        'total' => 10,
                        'duration' => '18min',
                        'lessons' => [
                            [
                                'title' => 'Apa itu HTML',
                                'duration' => '15:00',
                                'videoId' => 'wriGST3vp5M'
                            ],
                           
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Aljabar Linear',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 20min',
                'teacher_id' => 2,
                'lessons' => [
                    [
                        'title' => 'Pengantar Aljabar Linear',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 30min', 
                        'lessons' => [
                            [
                                'title' => 'Apa itu Aljabar Linear',
                                'duration' => '25:00',
                                'videoId' => 'W3o9-8vCdsc'
                            ]
                        ]
                    ],
                    
                ]
            ],
            [
                'title' => 'Sistem Basis Data',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 20min',
                'teacher_id' => 3,
                'lessons' => [
                    [
                        'title' => 'Pengantar Basis Data',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 30min',
                        'lessons' => [
                            [
                                'title' => 'Konsep Dasar Basis Data',
                                'duration' => '25:00',
                                'videoId' => 'S4igMZFCvh8'
                            ]
                        
                        ]
                    ],
                    
                ]
            ],
            [
                'title' => 'Logika Komputer',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 30min',
                'teacher_id' => 5,
                'lessons' => [
                    [
                        'title' => 'Dasar Logika Digital',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 45min',
                        'lessons' => [
                            [
                                'title' => 'Sistem Bilangan ',
                                'duration' => '30:00',
                                'videoId' => 'qMLzcPiTUvI'
                            ]
                           
                        ]
                    ],
                ]
            ],
            [
                'title' => 'Matematika Dasar 2',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 30min',
                'teacher_id' => 1,
                'lessons' => [
                    [
                        'title' => 'Kalkulus Integral',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 45min',
                        'lessons' => [
                            [
                                'title' => 'Integral Tak Tentu',
                                'duration' => '30:00',
                                'videoId' => '8794NWo48p4'
                            ]
                           
                        ]
                    ],
                    
                ]
            ],
            [
                'title' => 'Pemrograman Berorientasi Objek',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 45min',
                'teacher_id' => 1,
                'lessons' => [
                    [
                        'title' => 'Konsep Dasar OOP',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 45min',
                        'lessons' => [
                            [
                                'title' => 'Class dan Object',
                                'duration' => '35:00',
                                'videoId' => 'aQRemTq6Two'
                            ]
                        
                        ]
                    ],
                ]
            ],
            [
                'title' => 'Jaringan Komunikasi Data',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 30min',
                'teacher_id' => 1,
                'lessons' => [
                    [
                        'title' => 'Dasar Jaringan',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 45min',
                        'lessons' => [
                            [
                                'title' => 'Model OSI',
                                'duration' => '35:00',
                                'videoId' => '0N34ZHgrAvY'
                            ],
                        ]
                    ],
                   
                ]
            ],
            [
                'title' => 'Pengantar Data Sains',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 45min',
                'teacher_id' => 1,
                'lessons' => [
                    [
                        'title' => 'Dasar Analisis Data',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 45min',
                        'lessons' => [
                            [
                                'title' => 'Pengenalan Data Science',
                                'duration' => '35:00',
                                'videoId' => 'ds101'
                            ]
                        ]
                    ],
                   
                ]
            ],
            [
                'title' => 'Perkembangan Metahuman',
                'completed' => 0,
                'total' => 12,
                'duration' => '3hr 30min',
                'teacher_id' => 1,
                'lessons' => [
                    [
                        'title' => 'Konsep Dasar Metahuman',
                        'completed' => 0,
                        'total' => 4,
                        'duration' => '1hr 45min',
                        'lessons' => [
                            [
                                'title' => 'Teknologi Metahuman',
                                'duration' => '35:00',
                                'videoId' => 'meta101'
                            ]
                        ]
                    ],
                ]
            ]
        ];

        foreach ($courses as $courseData) {
            $course = Course::create([
                'title' => $courseData['title'],
                'completed' => $courseData['completed'],
                'total' => $courseData['total'],
                'duration' => $courseData['duration'],
                'teacher_id' => $courseData['teacher_id'],
            ]);

            foreach ($courseData['lessons'] as $lessonData) {
                foreach ($lessonData['lessons'] as $lesson) {
                    Lesson::create([
                        'course_id' =>$course->id,
                        'title' => $lesson['title'],
                        'completed' => $lessonData['completed'],
                        'total' => $lessonData['total'],
                        'duration' => $lesson['duration'],
                        'videoId' => $lesson['videoId'],
                    ]);
                }
            }
        }
    }
}
