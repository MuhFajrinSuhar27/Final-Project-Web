<x-layout2>
    <x-slot:title>Tambah Course Baru</x-slot:title>
    

    
    
    <div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        {{-- <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]"> --}}
        <div class="max-w-2xl mx-auto">
            <!-- Card Container -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Header Section -->
                <div class="px-8 py-6 bg-gradient-to-r from-purple-600 to-blue-600">
                    <h2 class="text-2xl font-bold text-white">Tambah Course Baru</h2>
                    <p class="mt-1 text-purple-100">Lengkapi informasi course yang akan ditambahkan</p>
                </div>

                <!-- Form Section -->
                <div class="p-8">
                    <form action="{{ route('admin.courses.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Title Input -->
                        <div>
                            <label for="title" class="text-sm font-medium text-gray-700 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Judul Course
                            </label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150 ease-in-out sm:text-sm"
                                required
                                placeholder="Masukkan judul course"
                            >
                        </div>

                        <!-- Teacher Selection -->
                        <div>
                            <label for="teacher_id" class="text-sm font-medium text-gray-700 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Pengajar
                            </label>
                            <select 
                                name="teacher_id" 
                                id="teacher_id" 
                                class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150 ease-in-out sm:text-sm"
                                required
                            >
                                <option value="">Pilih pengajar</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.courses') }}" 
                               class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-150 ease-in-out">
                                Batal
                            </a>
                            <button 
                                type="submit" 
                                class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-lg hover:from-purple-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition duration-150 ease-in-out"
                            >
                                Tambah Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</x-layout2>