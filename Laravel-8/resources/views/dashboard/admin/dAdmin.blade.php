<x-layout2>
  <x-slot:title>Admin Dashboard</x-slot:title>

  <div x-data="{ sidebarOpen: false }" class="flex h-screen">
    <!-- Sidebar -->
    <aside class="sidebar-transition fixed left-0 top-16 h-full bg-white border-r border-gray-200 w-64 transform -translate-x-full lg:translate-x-0 z-30 shadow-lg"
           :class="{'translate-x-0': sidebarOpen}">
        <nav class="p-4 space-y-2">
            <a href="/dashboard" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 transition-colors text-gray-700 hover:text-indigo-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                <span class="font-medium">Dashboard Admin</span>
            </a>

            <a href="/" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 transition-colors text-gray-700 hover:text-indigo-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                <span class="font-medium">Course</span>
            </a>

           
        </nav>
    </aside>

    <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">
      <div class="container mx-auto px-4">
          <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
          <!-- Stat Cards -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
              <!-- Total Course -->
              <div class="bg-white shadow-lg rounded-lg p-5 text-center">
                  <h2 class="text-lg font-semibold">Total Course</h2>
                  <a href="{{ route('admin.kursus') }}" class="text-4xl font-bold text-blue-600">{{ $totalCourse }}</a>
              </div>
              <!-- Total Kategori -->
              <div class="bg-white shadow-lg rounded-lg p-5 text-center">
                  {{-- <h2 class="text-lg font-semibold">Total Kategori</h2> --}}
                  {{-- <p class="text-4xl font-bold text-green-600">{{ $totalTeacher }}</p> --}}
              </div>
              <!-- Total User -->
              <div class="bg-white shadow-lg rounded-lg p-5 text-center">
                  <h2 class="text-lg font-semibold">Total User</h2>
                  <a href="{{ route('admin.users') }}" class="text-4xl font-bold text-red-600">{{ $totalUser }}</a>
              </div>
          </div>
      </div>
  </main>
</div>
</x-layout2>