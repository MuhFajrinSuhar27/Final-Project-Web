<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.teacher.home', ['title' => 'Teacher Dashboard']);
    }

    public function index()
    {
       $courses = Course::with('teacher')->get();
    $teacherCourses = Course::where('teacher_id', Auth::id())->pluck('id')->toArray();

    return view('dashboard.teacher.course', [
        'title' => 'Daftar Kursus',
        'courses' => $courses,
        'teacherCourses' => $teacherCourses // Pass the teacher's course IDs
    ]);
    }

    public function courses()
    {
        $courses = Course::where('teacher_id', Auth::user()->id)->get();
        return view('dashboard.teacher.courses', compact('courses'));
    }

    public function createCourse()
    {
        $teacher = Auth::user(); // Get current logged in teacher
        return view('dashboard.teacher.createCourse', compact('teacher'));
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Course::create([
            'title' => $request->title,
            'teacher_id' => Auth::id(),
            'completed' => 0,
            'total' => 0,
            'duration' => '0hr 0min'
        ]);

        return redirect()->route('teacher.courses')
            ->with('success', 'Course berhasil ditambahkan');
    }

    public function editCourse($id)
    {
        $course = Course::where('id', $id)
                       ->where('teacher_id', Auth::user()->id)
                       ->firstOrFail();
        
        return view('dashboard.teacher.editCourse', compact('course'));
    }

    public function updateCourse(Request $request, $id)
    {
        $course = Course::where('id', $id)
                       ->where('teacher_id', Auth::id())
                       ->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $course->update([
            'title' => $request->title
        ]);

        return redirect()->route('teacher.courses')->with('success', 'Course berhasil diupdate');
    }

    public function destroyCourse($id)
    {
        $course = Course::where('id', $id)
                       ->where('teacher_id', Auth::id())
                       ->firstOrFail();
                       
        $course->delete();

        return redirect()->route('teacher.courses')->with('success', 'Course berhasil dihapus');
    }
}