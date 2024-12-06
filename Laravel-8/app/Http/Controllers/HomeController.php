<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $totalCourse = Course::count();
            $totalTeacher = User::where('role', 'teacher')->count();
            $totalUser = User::count();
            $users = User::count();

            switch (Auth::user()->role) {
                case 'admin':
                    return view('dashboard.admin.dAdmin', compact('totalCourse', 'totalTeacher', 'totalUser'));
                case 'student':
                    return view('dashboard.user.home-user');
                case 'teacher':
                    $users = User::where('role', 'student')->get();
                    // $courses = Course::where('teacher_id', auth()->$users()->id)->get();
                    return view('dashboard.teacher.home', compact('users'));
                default:
                    return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }
}