<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/students/create', function() {
    $student = new Student();
    $student->first_name = 'John Michael';
    $student->last_name = 'Monteza';
    $student->email = 'johnmichaeadadlmonteza@gmail.com';
    $student->age = 20;
    $student-> save();
    return 'Student Created!';
});

Route::get('/students', function(){
    $students = Student::all();
    return $students;
});

Route::get('/students/update', function(){
    $student = Student::where('email', 'johndadaoe@example.com')->first();
    $student->email = 'john.doe@newmail.com';
    $student->save();
    return 'Student Updated!';
});

Route::get('/students/delete', function (){
    $student = Student::where('email', 'johasdan.doade@newmail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});

Route::get('/courses/create', function(){
    $course = new Courses();
    $course->course_name = 'Inttroduction to Databse';
    $course->save();
    return 'Course Created!';
});

Route::get('/course/{id}/students', function ($id) {
    $course = Course::find($id);
    return $course->students;
})
?>