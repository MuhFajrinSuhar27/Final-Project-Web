<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LessonController;

// Guest Route
Route::get('/', [UserController::class, 'home']);
  
Route::get('/dashboard', [HomeController::class, 'index'])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
Route::get('/tentang', function () {
    return view('tentang', ['title' => 'tentang']);
});



// Route Admin


Route::get('/course2', function () {
    return view('dashboard.admin.course2', [
        'title' => 'Course'
    ]);
})->middleware(['auth'])->name('course');


Route::get('/dAdmin', [AdminController::class, 'index'])->name('dashboard.admin.dashboard')->middleware('auth');
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users')->middleware('auth');


Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create')->middleware('auth');
Route::post('/admin/users', [AdminController::class, 'storeUser'])->name('admin.users.store')->middleware('auth');

Route::get('/admin/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit')->middleware('auth');
Route::put('/admin/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update')->middleware('auth');
Route::delete('/admin/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy')->middleware('auth');

Route::get('/details', [CourseController::class, 'details'])->name('details');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.details');


Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin.courses.index');
Route::get('/admin/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
Route::post('/admin/courses', [CourseController::class, 'store'])->name('admin.courses.store');
Route::get('/admin/courses/{id}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
Route::put('/admin/courses/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
Route::delete('/admin/courses/{id}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');


Route::middleware(['auth'])->group(function () {

    Route::get('/admin/kursus', [AdminController::class, 'showCourses'])->name('admin.kursus')->middleware('auth');


    Route::get('/admin/courses', [AdminController::class, 'showCourses'])->name('admin.courses');
    Route::get('/admin/courses/create', [AdminController::class, 'createCourse'])->name('admin.courses.create');
    Route::post('/admin/courses', [AdminController::class, 'storeCourse'])->name('admin.courses.store');
    Route::get('/admin/courses/{id}/edit', [AdminController::class, 'editCourse'])->name('admin.courses.edit');
    Route::put('/admin/courses/{id}', [AdminController::class, 'updateCourse'])->name('admin.courses.update');
    Route::delete('/admin/courses/{id}', [AdminController::class, 'destroyCourse'])->name('admin.courses.destroy');
});




//  Route Teacher
Route::middleware(['auth', 'role:teacher'])->group(function () {

    Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
    Route::post('/teacher/courses', [TeacherController::class, 'storeCourse'])->name('teacher.courses.store');
});

Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('dashboard.admin.home')->middleware('auth');
Route::get('/teacher/courses/{id}/edit', [TeacherController::class, 'editCourse'])->name('teacher.courses.edit');
Route::put('/teacher/courses/{id}', [TeacherController::class, 'updateCourse'])->name('teacher.courses.update');
Route::delete('/teacher/courses/{id}', [TeacherController::class, 'destroyCourse'])->name('teacher.courses.destroy');
Route::get('/teacher/courses', [TeacherController::class, 'index'])->name('teacher.courses');
Route::get('/teacher/courses/create', [TeacherController::class, 'createCourse'])->name('teacher.courses.create');
Route::post('/teacher/courses', [TeacherController::class, 'storeCourse'])->name('teacher.courses.store');
Route::get('/students/{id}', [TeacherController::class, 'show'])->name('student.details');





// Route  
Route::get('/courses', function () {
return view('dashboard.user.course', ['title' => 'Course'  ]);})->middleware(['auth'])->name('course');

Route::get('/details', [CourseController::class, 'details'])->name('details');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.details');
Route::post('/course/follow/{course}', [CourseController::class, 'follow'])->name('course.follow');
Route::get('/mengikuti', [CourseController::class, 'following'])->name('course.following');

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]); 
})->middleware(['auth'])->name('home');


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::post('/lessons/{lesson}/mark-as-done', [LessonController::class, 'markAsDone'])->name('lesson.markAsDone');
Route::post('/lessons/{lesson}/toggle', [LessonController::class, 'toggleLessonStatus'])->name('lessons.toggle');
Route::post('/lesson/toggleStatus/{id}', [LessonController::class, 'toggleStatus'])->name('lesson.toggleStatus');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
