<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classe::factory()
            ->count(5)
            ->sequence(fn($sequence) => ['class_name' => 'Class ' . $sequence->index + 1])
            ->has(
                Section::factory()
                    ->count(3)
                    ->state(
                        new Sequence(
                            ['section_name' => 'Section Informatique'],
                            ['section_name' => 'Section Mécanique'],
                            ['section_name' => 'Section Electricité'],
                        )
                    )
                    ->has(
                        Student::factory()
                            ->count(10)
                            ->state(
                                function (array $atttibutes, Section $section) {
                                    return ['class_id' => $section->class_id];
                                }
                            )
                    )
            )
            ->create();

    }
}