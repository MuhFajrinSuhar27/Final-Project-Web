<x-layout2>
    <x-slot:title>Edit Course</x-slot:title>
    <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">

    <div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-xl">
            <!-- Header Section -->
            <div class="px-8 py-6 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-gray-900">Edit Course</h1>
                <p class="mt-2 text-sm text-gray-600">Update your course information below</p>
            </div>

            <!-- Form Section -->
            <div class="px-8 py-6">
                <form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <!-- Course Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">
                            Course Title
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                value="{{ old('title', $course->title) }}"
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out sm:text-sm"
                                required
                                placeholder="Enter course title"
                            >
                        </div>
                    </div>

                    <!-- Teacher Selection -->
                    <div>
                        <label for="teacher_id" class="block text-sm font-medium text-gray-700">
                            Select Teacher
                        </label>
                        <div class="mt-1 relative">
                            <select 
                                name="teacher_id" 
                                id="teacher_id" 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out sm:text-sm appearance-none"
                                required
                            >
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ $course->teacher_id == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Custom Select Arrow -->
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6">
                        <a href="{{ route('admin.courses') }}" 
                           class="px-6 py-3 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                            Cancel
                        </a>
                        <button 
                            type="submit" 
                            class="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg text-sm font-medium text-white hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                        >
                            Update Course
                        </button>
                    </div>
                </form>
            </div>
            </div>
    </div>  
        </div>
    </div>
</x-layout2>