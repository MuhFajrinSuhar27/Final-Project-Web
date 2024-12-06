<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Database\Seeders\CourseSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // Mengambil semua data kursus
        $courses = Course::with('teacher')->get();
        
        return view('dashboard.user.course', [
            'title' => 'Daftar Kursus',
            'courses' => $courses
        ]);
    }
    
    public function show($id)
    {
        // Mengambil data kursus beserta relasi lessons
        $course = Course::with('lessons.lessons', 'teacher')->findOrFail($id);
        
        return view('dashboard.user.details', [
            'title' => $course->title,
            'course' => $course
        ]);
    }
    
    
   

    public function follow(Course $course)
    {
        $user = Auth::user();
        $isFollowing = $user->followedCourses()->toggle($course->id);
        
        return response()->json([
            'following' => !empty($isFollowing['attached'])
        ]);
    }

        public function following()
        {
            $followedCourses = \Illuminate\Support\Facades\Auth::user()->followedCourses;
            return view('dashboard.user.mengikuti', compact('followedCourses'));
        }

}