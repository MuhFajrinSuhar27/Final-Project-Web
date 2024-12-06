<x-layout1>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-black pt-40 pb-20">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-3 gap-20 justify-center">
                    @foreach ($courses as $course)
                        <a href="{{ route('course.details', $course->id) }}" class="block hover:transform hover:scale-105 transition-duration-300">
                            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/teacher-' . $course->id . '.jpg') }}');"></div>
                                
                                <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                                
                                <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10 flex justify-between items-center">
                                    <div>
                                        <h3 class="font-semibold">{{ $course->title }}</h3>
                                        <p class="text-gray-400 text-sm">{{ $course->teacher->name }}</p>
                                    </div>
                                    <button 
                                        class="group flex items-center space-x-1 bg-purple-500 hover:bg-purple-600 text-white px-3 py-1.5 rounded-full transform transition-all duration-200 hover:shadow-md active:scale-95 text-sm"
                                        onclick="event.preventDefault(); followCourse({{ $course->id }}, this)"
                                        data-followed="false">
                                        <span class="follow-text">Mengikuti</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                             class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" 
                                             fill="none" 
                                             viewBox="0 0 24 24" 
                                             stroke="currentColor">
                                            <path stroke-linecap="round" 
                                                  stroke-linejoin="round" 
                                                  stroke-width="2" 
                                                  d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        function followCourse(courseId, button) {
            event.preventDefault();
            
            fetch(`/course/follow/${courseId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.following) {
                    button.classList.remove('bg-purple-500', 'hover:bg-purple-600');
                    button.classList.add('bg-green-500', 'hover:bg-green-600');
                    button.querySelector('.follow-text').textContent = 'Diikuti';
                    button.setAttribute('data-followed', 'true');
                } else {
                    button.classList.remove('bg-green-500', 'hover:bg-green-600');
                    button.classList.add('bg-purple-500', 'hover:bg-purple-600');
                    button.querySelector('.follow-text').textContent = 'Mengikuti';
                    button.setAttribute('data-followed', 'false');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</x-layout1>