<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content2560 = Storage::json('2560.json');
        $content2565 = Storage::json('2565.json');
        $this->addCourse($content2560, 2560);
        $this->addCourse($content2565, 2565);

    }

    public static function addCourse(array $content, int $year)
    {
        foreach ($content as $course) {
            $temp = [
                'curriculum' => $year,                                  // หมายเลขหลักสูตร
                'code' => $course['code'] ?? null,                      // รหัสวิชา
                'thai_name' => $course['thai_name'] ?? null,            // ชื่อวิชาภาษาไทย
                'eng_name' => $course['eng_name'] ?? null,              // ชื่อวิชาภาษาอังกฤษ
                'thai_description' => isset($course['thai_description'])
                    ? trim($course['thai_description'], '()')
                    : null,                                             // คำอธิบายรายวิชาภาษาไทย
                'eng_description' => isset($course['eng_description'])
                    ? trim($course['eng_description'], '()')
                    : null,                                              // คำอธิบายรายวิชาภาษาอังกฤษ
                'credit' => $course['credit'] ?? 0,                      // จำนวนหน่วยกิต
                'lecture_hours' => $course['lecture_hours'] ?? 0,        // จำนวนชั่วโมงบรรยาย
                'practice_hours' => $course['practice_hours'] ?? 0,      // จำนวนชั่วโมงปฏิบัติการ
                'self_study_hours' => $course['self_study_hours'] ?? 0,  // จำนวนชั่วโมงเรียนรู้ด้วยตนเอง
                'condition' => $course['condition'] ?? null,             // เงื่อนไขวิชาบังคับก่อน
            ];

            Course::create($temp);
        }
    }
}
