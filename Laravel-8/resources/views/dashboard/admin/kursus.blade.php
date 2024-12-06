<x-layout2>
    <x-slot:title>Kursus Management</x-slot:title>

    <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">
    
  
    <div class="container mx-auto px-4 py-8">
      <!-- Header Section with Add Button -->
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Kursus</h1>
        <a href="{{ route('admin.courses.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
          </svg>
          Tambah Kursus
        </a>
      </div>
  
      <!-- Course Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($courses as $course)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="relative h-48">
            <!-- Change this line to use public folder images -->
            <img src="{{ asset('img/teacher-' . $course->id . '.jpg') }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 flex gap-2">
              <!-- Edit Button -->
              <a href="{{ route('admin.courses.edit', $course->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
              </a>
              <!-- Delete Button -->
              <form action="{{ route('admin.courses.destroy', $course->id) }}" 
                    method="POST" 
                    class="inline"
                    x-data="{ showConfirm: false }"
                    @submit.prevent="showConfirm = true">
                @csrf
                @method('DELETE')
                
                <!-- Trigger Button -->
                <button type="button"
                        @click="showConfirm = true"
                        class="inline-flex items-center px-3 py-2 
                               bg-gradient-to-r from-red-400 to-red-500
                               hover:from-red-600 hover:to-red-700 
                               text-white rounded-lg shadow-sm
                               transform transition-all duration-200 
                               hover:shadow-md hover:-translate-y-0.5">
                    <svg class="w-5 h-5 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"/>
                    </svg>
                    Hapus
                </button>
            
                <!-- Confirmation Dialog -->
                <div x-show="showConfirm"
                     class="fixed inset-0 z-50 overflow-y-auto"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0">
                    
                    <!-- Overlay -->
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            
                    <!-- Dialog -->
                    <div class="flex min-h-screen items-center justify-center">
                        <div class="relative bg-white rounded-lg max-w-md w-full mx-4 p-6 shadow-xl transform transition-all">
                            <div class="text-center">
                                <!-- Warning Icon -->
                                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                </div>
                                
                                <h3 class="text-lg font-medium text-gray-900 mb-2">Konfirmasi Penghapusan</h3>
                                <p class="text-sm text-gray-500 mb-6">
                                    Apakah Anda yakin ingin menghapus kursus ini?
                                </p>
                                
                                <!-- Action Buttons -->
                                <div class="flex justify-center gap-3">
                                    <button type="button"
                                            @click="showConfirm = false"
                                            class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-lg transition-colors">
                                        Batal
                                    </button>
                                    <button type="submit"
                                            @click="$el.closest('form').submit()"
                                            class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg transition-colors">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">{{ $course->title }}</h3>
            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($course->description, 100) }}</p>
            <div class="flex items-center justify-between">
              <span class="text-gray-500 text-sm">Pengajar: {{ $course->teacher->name }}</span>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  
    <!-- Flash Message -->
    @if(session('success'))
    <div id="flash-message" class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
      {{ session('success') }}
    </div>
    <script>
      setTimeout(() => {
        document.getElementById('flash-message').style.display = 'none';
      }, 3000);
    </script>
    @endif

</div>

  
  </x-layout2>