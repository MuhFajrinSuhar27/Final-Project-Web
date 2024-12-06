<x-layout2>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="bg-black pt-40 pb-20">
      <div class="container mx-auto px-4">
          <div class="flex justify-center items-center">
              <div class="grid grid-cols-3 gap-20 justify-center">
                  {{-- Loop melalui data courses --}}
                  @foreach ($courses as $course)
                      <a href="{{ route('course.details', $course->id) }}" class="block hover:transform hover:scale-105 transition-duration-300">
                          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                              {{-- Gambar --}}
                              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/teacher-' . $course->id . '.jpg') }}');"></div>
                              
                              {{-- Label Baru --}}
                              <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                              
                              {{-- Informasi Kursus --}}
                              <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                  <h3 class="font-semibold">{{ $course->title }}</h3>
                                  <p class="text-gray-400 text-sm">{{ $course->teacher->name }}</p>
                              </div>
                          </div>
                      </a>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</x-layout2>