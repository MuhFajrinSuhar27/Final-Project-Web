<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-black min-h-screen"> 
    <div class=pt-40 pb-20">
        <div class="container mx-auto px-4">

            <div class="flex justify-center items-center">
                <div class="grid grid-cols-3 gap-20 justify-center" id="courseGrid">
                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-1.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Aljabar Linear</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-2.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Pemrograman Web</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-3.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Sistem Basis Data</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-4.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Logika Komputer</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-5.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Matematika Dasar 2</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-6.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Pemrograman Berorientasi Objek</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-7.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Jaringan dan Komunikasi Data</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-8.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Pengantar Data Sains</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="block hover:transform hover:scale-105 transition-duration-300">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-[340px] h-[215px] relative">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-9.jpg');"></div>
                            <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">Baru</span>
                            <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                                <h3 class="font-semibold">Perkembangan Metahuman</h3>
                                <p class="text-gray-400 text-sm">Edusisfo</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    

    <script>
      function filterCourses(searchTerm) {
          searchTerm = searchTerm.toLowerCase();
          const courseCards = document.querySelectorAll('.block.hover\\:transform');
          let visibleCount = 0;
          
          courseCards.forEach(card => {
              const title = card.querySelector('h3').textContent.toLowerCase();
              const teacher = card.querySelector('p').textContent.toLowerCase();
              
              if (title.includes(searchTerm) || teacher.includes(searchTerm)) {
                  card.style.display = '';
                  visibleCount++;
              } else {
                  card.style.display = 'none';
              }
          });
          
          const existingNoResults = document.getElementById('noResults');
          if (existingNoResults) {
              existingNoResults.remove();
          }
          
          if (visibleCount === 0) {
              const grid = document.getElementById('courseGrid');
              const noResults = document.createElement('div');
              noResults.id = 'noResults';
              noResults.className = 'col-span-3 flex flex-col items-center justify-center py-20';
              noResults.innerHTML = `
                  <svg class="w-20 h-20 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                  </svg>
                  <h2 class="text-3xl font-bold text-white mb-2 font-sans tracking-wide">Mohon Maaf</h2>
                  <p class="text-gray-400 text-lg font-light">Kursus yang Anda cari tidak tersedia saat ini</p>
              `;
              grid.appendChild(noResults);
          }
      }
  </script>


</x-layout>