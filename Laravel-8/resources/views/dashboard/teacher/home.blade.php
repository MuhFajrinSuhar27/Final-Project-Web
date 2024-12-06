<x-layout3>
    <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">
        <div class="container mx-auto px-4 py-6">
            <!-- Dashboard Heading -->
            <h1 class="text-3xl font-semibold text-gray-800">Teacher Dashboard</h1>

            <!-- Statistik Overview -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
                <!-- Total Courses Card -->
                <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-lg">
                     {{-- <h2 class="text-2xl font-bold">Total Courses</h2> --}}
                    {{-- <p class="text-4xl font-semibold mt-4">{{ $courses->count() }}</p> --}}
                </div>

                <!-- Total Students Card -->
                <div class="bg-green-600 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold">Total Students</h2>
                    <p class="text-4xl font-semibold mt-4">{{ $users->count() }}</p>
                </div>

                <!-- Upcoming Classes -->
                <div class="bg-yellow-600 text-white p-6 rounded-lg shadow-lg">
                    {{-- <h2 class="text-2xl font-bold">Upcoming Classes</h2> --}}
                    {{-- <p class="text-4xl font-semibold mt-4">3</p> --}}
                </div>
            </div>

            <!-- Student Progress -->
            <div class="mt-8 max-w-3xl mx-auto"> <!-- Added max-width and center alignment -->
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Student Progress</h2>
                <div class="space-y-4"> <!-- Changed from grid to space-y for vertical spacing -->
                    @forelse($users as $user)
                        <div class="bg-white rounded-lg shadow-lg p-4 hover:shadow-xl transition-shadow duration-200">
                            <div class="flex items-center space-x-4">
                                <!-- User Avatar/Icon -->
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center"> <!-- Made avatar smaller -->
                                        <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- User Info and Progress -->
                                <div class="flex-grow">
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <h3 class="text-md font-semibold text-gray-800">{{ $user->name }}</h3>
                                            <p class="text-xs text-gray-500">{{ $user->email }}</p>
                                        </div>
                                        <span class="text-sm font-medium text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full">
                                            {{ $user->progress ?? 0 }}%
                                        </span>
                                    </div>
                                    
                                    <!-- Progress Bar -->
                                    <div class="w-full bg-gray-100 rounded-full h-2">
                                        <div class="bg-indigo-600 h-2 rounded-full transition-all duration-300" 
                                             style="width: {{ $user->progress ?? 0 }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <p class="text-gray-500">No students found.</p>
                        </div>
                    @endforelse
                </div>
            </div>

      
           
        </div>
    </main>
</x-layout3>
