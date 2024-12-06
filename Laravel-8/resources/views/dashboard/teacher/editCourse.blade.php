<x-layout3>
    <x-slot:title>Edit Course</x-slot:title>
    <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <!-- Header Section -->
                <div class="relative h-32 bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center px-8">
                    <!-- Decorative circles -->
                    <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 rounded-full bg-indigo-500 opacity-10"></div>
                    <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 rounded-full bg-purple-500 opacity-10"></div>
                    
                    <div class="flex items-center space-x-4 relative z-10">
                        <div class="p-3 bg-white/10 rounded-lg backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-white">Edit Course</h2>
                            <p class="text-indigo-100 text-sm">Perbarui informasi course Anda</p>
                        </div>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="p-6 space-y-6">
                    @if ($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg">
                            <div class="flex items-center space-x-2 text-red-600 mb-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="font-medium text-sm">Mohon perbaiki kesalahan berikut:</span>
                            </div>
                            <ul class="list-disc list-inside text-sm text-red-600 ml-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('teacher.courses.update', $course->id) }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')
                        
                        <!-- Course Title -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Course</label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title"
                                value="{{ old('title', $course->title) }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm"
                                placeholder="Masukkan judul course"
                                required
                            >
                        </div>

                        <!-- Teacher Info (Read-only) -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pengajar</label>
                            <div class="flex items-center space-x-3 bg-white p-3 rounded-lg border border-gray-200">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center text-white font-semibold text-sm">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <div class="text-sm">
                                    <div class="font-medium text-gray-900">{{ Auth::user()->name }}</div>
                                    <div class="text-gray-500 text-xs">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex justify-end space-x-3 pt-2">
                            <a href="{{ route('teacher.courses') }}" 
                               class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Batal
                            </a>
                            <button 
                                type="submit" 
                                class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Perbarui Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout3>