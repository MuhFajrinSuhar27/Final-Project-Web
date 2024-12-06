<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $totalUser = User::where('role', '!=', 'admin')->count();
        $totalCourse = Course::count();
        $totalTeacher = User::where('role', 'teacher')->count();
        $artikelTerbaru = Course::with('teacher')->latest()->take(5)->get();

        return view('dashboard.admin.dAdmin', compact('totalUser', 'totalCourse', 'totalTeacher',));
    }

    public function showUsers()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('dashboard.admin.users', compact('users'));
    }

    public function createUser()
    {
        return view('dashboard.admin.createUser');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role ?? 'student',
        ]);

        return redirect()->route('admin.users')->with('success', 'User berhasil ditambahkan');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.admin.editUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $rules = [
            'name' => 'required|string|max:255|unique:users,name,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:student,teacher,admin',
        ];
    
        // Hanya validasi password jika password diisi
        if ($request->filled('password')) {
            $rules['password'] = 'required|min:8|confirmed';
        }

        $messages = [
            'name.unique' => 'Username sudah dimiliki oleh pengguna lain.',
        ];

    
        $validated = $request->validate($rules,$messages);
    
        // Update data user
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];
    
        // Update password hanya jika password baru diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect()->route('admin.users')->with('success', 'User berhasil diupdate');
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User berhasil dihapus');
    }

    public function showCourses()
    {
        $courses = Course::with('teacher')->get();
        return view('dashboard.admin.kursus', compact('courses'));
    }
    public function createCourse()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('dashboard.admin.createCourse', compact('teachers'));
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teacher_id' => 'required|exists:users,id',
        ]);

        Course::create([
            'title' => $request->title,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('admin.courses')->with('success', 'Course berhasil ditambahkan');
    }

    public function editCourse($id)
    {
        $course = Course::findOrFail($id);
        $teachers = User::where('role', 'teacher')->get();
        return view('dashboard.admin.editCourse', compact('course', 'teachers'));
    }

    public function updateCourse(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teacher_id' => 'required|exists:users,id',
        ]);

        $course = Course::findOrFail($id);

        $course->update([
            'title' => $request->title,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('admin.courses')->with('success', 'Course berhasil diupdate');
    }

    public function destroyCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses')->with('success', 'Course berhasil dihapus');
    }
}
