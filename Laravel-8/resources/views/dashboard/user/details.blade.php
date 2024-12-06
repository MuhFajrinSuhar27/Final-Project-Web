<x-layout1>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="flex mt-20" x-data="{ 
        openSection: null, 
        currentVideo: null,
        currentTitle: 'Select a video to view details', 
        currentDescription: 'Video description will appear here',
        doneLessons: [],
        markAsDone(lessonId) {
            if (!this.doneLessons.includes(lessonId)) {
                this.doneLessons.push(lessonId);
            }
        }
    }">

        <div class="w-3/4">
            <div class="bg-black">
                <div class="relative pt-[30%]">
                    <div 
                        x-show="!currentVideo"
                        class="absolute inset-0 flex items-center justify-center"
                    >
                    <img 
                    src="{{ asset('img/details-2.png') }}" 
                    alt="Start Learning" 
                    class="w-full h-full  hover:opacity-75 transition-opacity cursor-pointer"
                    >

                    </div>
                    <!-- Video iframe -->
                    <iframe
                        x-show="currentVideo"
                        :src="currentVideo ? `https://www.youtube.com/embed/${currentVideo}` : ''"
                        class="absolute inset-0 w-full h-full"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>

            <!-- Video Description -->
            <div class="bg-white p-4">
                <h2 
                    x-text="currentTitle" 
                    class="text-2xl font-bold mb-4 text-white-900"
                >Select a video to view details</h2>
                <p 
                    x-text="currentDescription"
                    class="text-white-700"
                >Video description will appear here</p>
            </div>
        </div>

        <!-- Course Content Sidebar -->
        <div class="w-1/4 bg-white border-l">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-4">Course Content</h2>
                @foreach($course->lessons as $index => $section)
                <div class="border rounded-lg mb-2">
                    <button 
                        class="w-full p-2" 
                        @click="openSection = openSection === {{ $index }} ? null : {{ $index }}"
                    >
                        <div class="flex justify-between items-center">
                            <div class="text-left">
                                <h3 class="font-semibold">Section {{ $loop->iteration }}: {{ $section->title }}</h3>
                                <p class="">
                                    {{ $section->completed }} / {{ $section->total }} | {{ $section->duration }}
                                </p>
                            </div>
                            <svg 
                                class="w-5 h-5 transform transition-transform" 
                                :class="{ 'rotate-180': openSection === {{ $index }} }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>

                    <!-- Lessons -->
                    <div 
                        x-show="openSection === {{ $index }}"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        class="bg-gray-50"
                    >
                        @foreach($course->lessons as $lesson)
                        <div class="flex justify-between items-center p-4 hover:bg-gray-100">
                            <button 
                                @click="currentVideo = '{{ $lesson->videoId }}';
                                        currentTitle = '{{ $lesson->title }}';
                                        currentDescription = 'Video pembelajaran {{ $lesson->title }}'"
                                class="flex items-center space-x-3 text-sm"
                            >
                                <span>{{ $lesson->title }}</span>
                                <span class="ml-auto text-gray-500">{{ $lesson->duration }}</span>
                            </button>
                            <form action="{{ route('lesson.markAsDone', $lesson->id) }}" method="POST" @submit.prevent="markAsDone({{ $lesson->id }})">
                                @csrf
                                <button type="submit" class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded" x-text="doneLessons.includes({{ $lesson->id }}) ? 'Done' : 'Mark as Done'"></button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('lessonHandler', () => ({
                    doneLessons: [],
                    markAsDone(lessonId, element) {
                        fetch(`/lessons/${lessonId}/mark-as-done`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Accept': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Update checkmark status
                                element.classList.remove('text-gray-400');
                                element.classList.add('text-green-500');
                                
                                // Update progress bar
                                const progressBar = document.querySelector(`#progress-${courseId}`);
                                const progressText = document.querySelector(`#progress-text-${courseId}`);
                                
                                if (progressBar && progressText) {
                                    progressBar.style.width = `${data.progress}%`;
                                    progressText.textContent = `${Math.round(data.progress)}%`;
                                }
                                
                                // Add completed animation
                                element.classList.add('animate-bounce');
                                setTimeout(() => {
                                    element.classList.remove('animate-bounce');
                                }, 1000);

                        
                                this.doneLessons.push(lessonId);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                    }
                }));
            });
        </script>
    </div>
</x-layout1>