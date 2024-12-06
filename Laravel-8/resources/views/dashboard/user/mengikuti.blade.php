<x-layout1>
    <x-slot:title>Kursus Yang Diikuti</x-slot:title>
    <div class="bg-black min-h-screen">
        <div class="pt-40 pb-20">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-3 gap-20 justify-center">
                    @forelse ($followedCourses as $course)
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/teacher-' . $course->id . '.jpg') }}');"></div>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10 flex justify-between items-center">
                                <div>
                                    <h3 class="font-semibold">{{ $course->title }}</h3>
                                    <p class="text-gray-400 text-sm">{{ $course->teacher->name }}</p>
                                </div>
                                <button 
                                    class="group flex items-center space-x-1 bg-green-500 hover:bg-green-600 text-white px-3 py-1.5 rounded-full transform transition-all duration-200 hover:shadow-md active:scale-95 text-sm"
                                    onclick="event.preventDefault(); followCourse({{ $course->id }}, this)"
                                    data-followed="true">
                                    <span class="follow-text">Diikuti</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-3 text-center py-20">
                            <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <h2 class="text-3xl font-bold text-white mb-2 font-sans tracking-wide">Belum Ada Kursus</h2>
                            <p class="text-gray-400 text-lg font-light">Mulai ikuti kursus untuk melihat daftar kursus yang Anda ikuti</p>
                        </div>
                    @endforelse
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
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                const isFollowed = data.following;
                if (!isFollowed) {
                    // Remove the course card from mengikuti page
                    button.closest('.bg-gray-800').remove();
                    
                    // Check if there are no more courses
                    if (document.querySelectorAll('.bg-gray-800').length === 0) {
                        location.reload(); // Reload to show empty state
                    }
                }
            });
        }
    </script>
</x-layout1>