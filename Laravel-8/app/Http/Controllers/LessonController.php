<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function markAsDone($id)
    {
        $lesson = Lesson::with(['course.teacher'])->findOrFail($id);
        $lesson->completed = 1;
        $lesson->save();

        // Calculate progress
        $totalLessons = Lesson::where('course_id', $lesson->course_id)->count();
        $completedLessons = Lesson::where('course_id', $lesson->course_id)
                             ->where('completed', 1)
                             ->count();
    
        $progress = ($completedLessons / $totalLessons) * 100;

        // Update course progress
        $lesson->course->progress = $progress;
        $lesson->course->save();

        return response()->json([
            'success' => true,
            'progress' => $progress
        ]);
    }

    public function toggleLessonStatus(Lesson $lesson)
    {
        $lesson->completed = !$lesson->completed;
        $lesson->save();

        return redirect()->back();
    }
}