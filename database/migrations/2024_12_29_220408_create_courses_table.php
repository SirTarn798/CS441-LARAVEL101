<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('curriculum'); // หมายเลขหลักสูตร
            $table->string('code'); // รหัสวิชา
            $table->string('thai_name'); // ชื่อวิชาภาษาไทย
            $table->string('eng_name'); // ชื่อวิชาภาษาอังกฤษ
            $table->text('thai_description')->nullable(); // คำอธิบายรายวิชาภาษาไทย (NULL ได้)
            $table->text('eng_description')->nullable(); // คำอธิบายรายวิชาภาษาอังกฤษ (NULL ได้)
            $table->unsignedTinyInteger('credit'); // จำนวนหน่วยกิต
            $table->unsignedTinyInteger('lecture_hours'); // จำนวนชั่วโมงบรรยาย
            $table->unsignedTinyInteger('practice_hours'); // จำนวนชั่วโมงปฏิบัติการ
            $table->unsignedTinyInteger('self_study_hours'); // จำนวนชั่วโมงเรียนรู้ด้วยตนเอง
            $table->string('condition')->nullable(); // เงื่อนไขวิชาบังคับก่อน (NULL ได้)
            $table->timestamps();
        });

        // Add the check constraint
        DB::statement("ALTER TABLE courses ADD CONSTRAINT check_curriculum CHECK (curriculum IN (2560, 2565))");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the table and the constraint
        Schema::dropIfExists('courses');
    }
};
