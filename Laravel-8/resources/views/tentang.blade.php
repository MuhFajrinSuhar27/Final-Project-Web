<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <!-- Hero Section -->
  <div class="bg-black min-h-screen">
      <div class="container mx-auto px-4 pt-40">
          <div class="max-w-4xl mx-auto text-center mb-20">
              <h1 class="text-5xl font-bold text-white mb-6 leading-tight">
                  Membangun Masa Depan Digital Indonesia
              </h1>
              <p class="text-xl text-gray-400 leading-relaxed">
                  EduSisfo adalah platform pembelajaran teknologi terdepan yang berkomitmen untuk mengembangkan talenta digital berkualitas melalui pembelajaran yang inovatif dan terstruktur.
              </p>
          </div>

          <!-- Stats Section -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-20">
              <div class="bg-gray-800 rounded-lg p-8 text-center">
                  <h3 class="text-4xl font-bold text-purple-400 mb-2">50+</h3>
                  <p class="text-gray-400">Kursus Aktif</p>
              </div>
              <div class="bg-gray-800 rounded-lg p-8 text-center">
                  <h3 class="text-4xl font-bold text-purple-400 mb-2">1000+</h3>
                  <p class="text-gray-400">Siswa Aktif</p>
              </div>
              <div class="bg-gray-800 rounded-lg p-8 text-center">
                  <h3 class="text-4xl font-bold text-purple-400 mb-2">25+</h3>
                  <p class="text-gray-400">Instruktur Expert</p>
              </div>
          </div>

          <!-- Features Section -->
          <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 mb-20">
              <div class="bg-gray-800 p-8 rounded-lg">
                  <div class="w-16 h-16 bg-purple-500 rounded-lg flex items-center justify-center mb-6">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                      </svg>
                  </div>
                  <h3 class="text-xl font-bold text-white mb-4">Pembelajaran Inovatif</h3>
                  <p class="text-gray-400">Materi pembelajaran yang didesain dengan metode terkini dan interaktif untuk memaksimalkan pemahaman siswa.</p>
              </div>

              <div class="bg-gray-800 p-8 rounded-lg">
                  <div class="w-16 h-16 bg-purple-500 rounded-lg flex items-center justify-center mb-6">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                      </svg>
                  </div>
                  <h3 class="text-xl font-bold text-white mb-4">Kurikulum Terstruktur</h3>
                  <p class="text-gray-400">Materi disusun secara sistematis dengan fokus pada penguasaan konsep dan praktik langsung.</p>
              </div>

              <div class="bg-gray-800 p-8 rounded-lg">
                  <div class="w-16 h-16 bg-purple-500 rounded-lg flex items-center justify-center mb-6">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                  </div>
                  <h3 class="text-xl font-bold text-white mb-4">Komunitas Aktif</h3>
                  <p class="text-gray-400">Bergabung dengan komunitas pembelajar untuk berbagi pengetahuan dan pengalaman.</p>
              </div>
          </div>

          <!-- Mission Section -->
          <div class="max-w-4xl mx-auto text-center mb-20">
              <h2 class="text-3xl font-bold text-white mb-8">Visi & Misi</h2>
              <div class="bg-gray-800 p-8 rounded-lg">
                  <p class="text-gray-400 mb-6">
                      Menjadi platform pembelajaran teknologi terdepan di Indonesia yang berkontribusi dalam menciptakan talenta digital berkualitas dan berdaya saing global.
                  </p>
                  <ul class="text-gray-400 text-left space-y-4">
                      <li class="flex items-center">
                          <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                          </svg>
                          Menyediakan pembelajaran berkualitas yang relevan dengan kebutuhan industri
                      </li>
                      <li class="flex items-center">
                          <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                          </svg>
                          Membangun ekosistem pembelajaran yang mendukung perkembangan talenta digital
                      </li>
                      <li class="flex items-center">
                          <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                          </svg>
                          Berkontribusi dalam percepatan transformasi digital Indonesia
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>

  
</x-layout>