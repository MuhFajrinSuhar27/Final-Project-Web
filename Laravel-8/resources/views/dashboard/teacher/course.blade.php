
<x-layout3>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-3 gap-20 justify-center">
                    @foreach ($courses as $course)
                        <div class="block hover:transform hover:scale-105 transition-duration-300">
                            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                                {{-- Gambar --}}
                                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/teacher-' . $course->id . '.jpg') }}');"></div>
                                
                                {{-- Label Baru --}}
                                <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                                
                                {{-- Informasi Kursus --}}
                                <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                    <div>
                                        <h3 class="font-semibold">{{ $course->title }}</h3>
                                        <p class="text-gray-400 text-sm">{{ $course->teacher->name }}</p>
                                    </div>

                                    {{-- Show Edit/Delete buttons only for teacher's own courses --}}
                                    @if(in_array($course->id, $teacherCourses))
                                        <div class="absolute top-2 right-2 flex space-x-2">
                                            <a href="{{ route('teacher.courses.edit', $course->id) }}" 
                                               class="p-2 bg-blue-500 rounded-full hover:bg-blue-600 transition-colors">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            
                                            <form action="{{ route('teacher.courses.destroy', $course->id) }}" 
                                                  method="POST" 
                                                  class="inline"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus kursus ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="p-2 bg-red-500 rounded-full hover:bg-red-600 transition-colors">
                                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</x-layout3>