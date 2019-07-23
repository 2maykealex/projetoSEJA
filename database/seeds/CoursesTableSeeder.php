<?php

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\CourseItem;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'person_id' => 1,
            'name' => 'Astrologia básica',
            'summary' => 'Lorem ipsum dolorut labore et dolore magna aliqua. ',
            'image' => 'course0001.jpg',
        ]);

        Course::create([
            'person_id' => 1,
            'name' => 'Cosmologia básica',
            'summary' => 'Sed ut perspiciatis doloremque laudantium,',
            'image' => 'course0002.jpg',
        ]);

        CourseItem::create([
            'course_id' => 1,
            'summary'=> 'Aula 01',
            'file'=> 'https://www.youtube.com/embed/4d74o8mq5Qc',
        ]);

        CourseItem::create([
            'course_id' => 1,
            'summary'=> 'Aula 02',
            'file'=> 'https://www.youtube.com/embed/4suqyZXb9Hw',
        ]);

        CourseItem::create([
            'course_id' => 1,
            'summary'=> 'Aula 03',
            'file'=> 'https://www.youtube.com/embed/Cu8wWmkmyYw',
        ]);

        CourseItem::create([
            'course_id' => 2,
            'summary'=> 'Aula 01',
            'file'=> 'https://www.youtube.com/embed/BECI2LvMZbk',
        ]);

        CourseItem::create([
            'course_id' => 2,
            'summary'=> 'Aula 02',
            'file'=> 'https://www.youtube.com/embed/B4zovIybu00',
        ]);

        CourseItem::create([
            'course_id' => 2,
            'summary'=> 'Aula 03',
            'file'=> 'https://www.youtube.com/embed/qLmKboPhKrQ',
        ]);
    }
}
