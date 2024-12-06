<x-layout1>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="flex mt-20" x-data="{ 
        openSection: null, 
        currentVideo: null,
        currentTitle: null, 
        currentDescription: null 
    }">
        <!-- Video Player Section -->
        <div class="w-3/4">
            <div class="bg-black">
                <div class="relative pt-[30%]">
                    <div 
                        x-show="!currentVideo"
                        class="absolute inset-0 flex items-center justify-center"
                    >
                    <img 
                    src="{{ asset('img/details-3.png') }}" 
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

            <!-- Video Description - Now outside the black background -->
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
                @foreach($course as $index => $section)
                <div class="border rounded-lg mb-2">
                    <button 
                        class="w-full p-2" 
                        @click="openSection = openSection === {{ $index }} ? null : {{ $index }}"
                    >
                        <div class="flex justify-between items-center">
                            <div class="text-left">
                                <h3 class="font-semibold">Section Section {{ $loop->iteration }}: {{ $section['title'] ?? '' }}</h3>
                                <p class="">
                                    {{ $section['completed'] ?? 0 }} / {{ $section['total'] ?? 0 }} | {{ $section['duration'] ?? '0h 0m' }}
                                </p>
                            </div>
                            <svg 
                                class="w-5 h-5 transform transition-transform" 
                                :class="{ 'rotate-180': openSection === {{ $index }} }"
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24"
                            >
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
                        @foreach($section['lessons'] ?? [] as $lesson)
                        <button 
                            @click="currentVideo = '{{ $lesson['videoId'] ?? '' }}';
                                    currentTitle = '{{ $lesson['title'] ?? '' }}';
                                    currentDescription = 'Video pembelajaran {{ $lesson['title'] ?? '' }}'"
                            class="w-full p-4 hover:bg-gray-100 flex items-center space-x-3 text-sm"
                          >
                            <span>{{ $lesson['title'] }}</span>
                            <span class="ml-auto text-gray-500">{{ $lesson['duration'] }}</span>
                        </button>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout1>