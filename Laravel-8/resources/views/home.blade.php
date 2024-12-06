<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <div class="bg-cover bg-center min-h-screen flex items-center justify-center text-white py-10  overflow-x-hidden" style="background-image: linear-gradient(rgba(4, 2, 4, 0.4), rgba(0, 3, 0, 0.1)), url('{{ asset('img/top-slider.jpg') }}');">
      
      <!-- Konten Utama -->
      <style>
        .marquee {
          overflow: hidden;
          position: relative;
        }
        .marquee .marquee-content {
          display: flex;
          width: 100%; /* Konten diduplikasi dua kali */
          animation: marquee 5s linear infinite;
        }
        .marquee .marquee-content:hover {
          animation-play-state: paused; 
        }
        @keyframes marquee {
          0% {
            transform: translateX(0);
          }
          100% {
            transform: translateX(-66.66%); 
          }
        }
      </style>
  
      <div class="py-32 mt-[45rem] ">
        <!-- Container untuk Card -->
        <div class="container mx-auto px-4">
          <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-[25px]">
            
            <!-- Kartu 1 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-64 relative border">
              <!-- Background gambar -->
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-3.jpg');"></div>
              <span class="absolute top-2 left-2 bg-yellow-300 text-black text-xs font-semibold px-2 py-1 rounded-full">Bestseller</span>
              <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                <h3 class="font-semibold text-md">Sistem Basis Data</h3>
                <p class="text-gray-400 text-sm">Edusisfo</p>
              </div>
            </div>
  
          
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-64 relative border">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-8.jpg');"></div>
              <span class="absolute top-2 left-2 bg-yellow-300 text-black text-xs font-semibold px-2 py-1 rounded-full">Bestseller</span>
              <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                <h3 class="font-semibold text-md">Pengantar Data Sains</h3>
                <p class="text-gray-400 text-sm">Edusisfo</p>
              </div>
            </div>
  
         
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-64 relative border">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-9.jpg');"></div>
              <span class="absolute top-2 left-2 bg-yellow-300 text-black text-xs font-semibold px-2 py-1 rounded-full">Bestseller</span>
              <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                <h3 class="font-semibold text-md">Perkembangan metahuman</h3>
                <p class="text-gray-400 text-sm">Edusisfo</p>
              </div>
            </div>
  
      
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg w-64 relative border">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-7.jpg');"></div>
              <span class="absolute top-2 left-2 bg-yellow-300 text-black text-xs font-semibold px-2 py-1 rounded-full">Bestseller</span>
              <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                <h3 class="font-semibold text-md">Jaringan dan Komunikasi Data</h3>
                <p class="text-gray-400 text-sm">Edusisfo</p>
              </div>
            </div>
  
            <!-- Kartu 5 -->
            <div class="rounded-lg overflow-hidden shadow-lg w-64 relative border">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/teacher-1.jpg');"></div>
              <div class="p-28">
                <span class="absolute top-2 left-2 bg-yellow-300 text-black text-xs font-semibold px-2 py-1 rounded-full">Bestseller</span>
                <div class="absolute bottom-0 left-0 w-full p-4 bg-gray-800 bg-opacity-80 text-white z-10">
                  <h3 class="font-semibold text-md">Aljabar Linear</h3>
                  <p class="text-gray-400 text-sm">Edusisfo</p>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Tombol Lihat Semua -->
          <div class="flex justify-center mt-8">
            <a href="/blog" class="bg-green-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-green-600">
              Lihat Semua
            </a>
          </div>
  
          <!-- Bagian Carousel -->
          <div class="py-32 mt-[5rem] overflow-hidden">
            <div class="relative">
              <div class="marquee">
                <div class="marquee-content items-center gap-6">
                  <!-- Testimonial 1 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=2" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Dietrich</h4>
                        <p class="text-sm">SMKN 58 Jakarta</p>
                      </div>
                    </div>
                    <p>Materi di EduSisfo berorientasi ke konsep disertai visualisasi yang membantu. Semoga EduSisfo terus berkembang!</p>
                  </div>
  
                  <!-- Testimonial 2 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=3" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Musthofa</h4>
                        <p class="text-sm">Institut Teknologi Bandung</p>
                      </div>
                    </div>
                    <p>Materi di EduSisfo sangat relevan dan mudah dimengerti. Pengajar memiliki skill yang berkelas! Pokoknya sangat worth it!</p>
                  </div>
  
                  <!-- Testimonial 3 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=4" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Melya</h4>
                        <p class="text-sm">UPN Veteran Jawa Timur</p>
                      </div>
                    </div>
                    <p>EduSisfo benar-benar membantu saya memahami kalkulus dengan penjelasan yang lengkap dan jelas. Overall keren banget!</p>
                  </div>
  
                  <!-- Duplikasi Testimonial (Set 1) -->
                 
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=2" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Dietrich</h4>
                        <p class="text-sm">SMKN 58 Jakarta</p>
                      </div>
                    </div>
                    <p>Materi di EduSisfo berorientasi ke konsep disertai visualisasi yang membantu. Semoga EduSisfo terus berkembang!</p>
                  </div>
  
                  <!-- Testimonial 2 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=3" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Musthofa</h4>
                        <p class="text-sm">Institut Teknologi Bandung</p>
                      </div>
                    </div>
                    <p>Materi di EduSisfo sangat relevan dan mudah dimengerti. Pengajar memiliki skill yang berkelas! Pokoknya sangat worth it!</p>
                  </div>
  
                  <!-- Testimonial 3 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=4" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Melya</h4>
                        <p class="text-sm">UPN Veteran Jawa Timur</p>
                      </div>
                    </div>
                    <p>EduSisfo benar-benar membantu saya memahami kalkulus dengan penjelasan yang lengkap dan jelas. Overall keren banget!</p>
                  </div>
  
                  <!-- Duplikasi Testimonial (Set 2) -->
                  <!-- Testimonial 1 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=2" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Dietrich</h4>
                        <p class="text-sm">SMKN 58 Jakarta</p>
                      </div>
                    </div>
                    <p>Materi di EduSisfo berorientasi ke konsep disertai visualisasi yang membantu. Semoga EduSisfo terus berkembang!</p>
                  </div>
  
                  <!-- Testimonial 2 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=3" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Musthofa</h4>
                        <p class="text-sm">Institut Teknologi Bandung</p>
                      </div>
                    </div>
                    <p>Materi di EduSisfo sangat relevan dan mudah dimengerti. Pengajar memiliki skill yang berkelas! Pokoknya sangat worth it!</p>
                  </div>
  
                  <!-- Testimonial 3 -->
                  <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80">
                    <div class="flex items-center space-x-4 mb-4">
                      <img src="https://i.pravatar.cc/50?img=4" class="w-12 h-12 rounded-full" alt="avatar">
                      <div>
                        <h4 class="font-bold">Melya</h4>
                        <p class="text-sm">UPN Veteran Jawa Timur</p>
                      </div>
                    </div>
                    <p>EduSisfo benar-benar membantu saya memahami kalkulus dengan penjelasan yang lengkap dan jelas. Overall keren banget!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Bagian Carousel -->
  
        </div>
      </div> 
    </div>


    <footer class="bg-gray-900 text-white">
      <div class="container mx-auto px-4 py-12">
          <!-- Grid Container -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              <!-- About Section -->
              <div class="space-y-4">
                  <h3 class="text-xl font-bold text-purple-400">EduSisfo</h3>
                  <p class="text-gray-400 text-sm">
                      Platform pembelajaran teknologi terdepan yang menyediakan kursus berkualitas untuk mengembangkan skill digital Anda.
                  </p>
                  <div class="flex space-x-4">
                      <a href="#" class="text-gray-400 hover:text-purple-400">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                          </svg>
                      </a>
                      <a href="#" class="text-gray-400 hover:text-purple-400">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                          </svg>
                      </a>
                      <a href="#" class="text-gray-400 hover:text-purple-400">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 15.274c-.236 1.561-1.139 2.961-3.008 3.037-1.791.074-3.234-.434-4.479-1.061-1.288-.648-2.456-1.532-3.639-2.305-.036-.024-.072-.048-.108-.073-.108.145-.216.288-.324.433-1.344 1.82-2.7 3.63-4.02 5.465-.119.166-.241.172-.373.033-.117-.122-.225-.254-.339-.379-.166-.181-.158-.343.029-.512.864-.783 1.736-1.559 2.598-2.344.682-.619 1.359-1.244 2.039-1.866.108-.099.118-.174.029-.294-.506-.691-1.027-1.369-1.521-2.066-.524-.738-1.018-1.497-1.506-2.264-.137-.215-.074-.325.159-.397.649-.201.863-.171 1.297.324.854.977 1.67 1.987 2.516 2.97.141.163.249.149.415.024 1.011-.771 2.039-1.52 3.068-2.269 1.725-1.255 3.518-2.209 5.626-2.415 1.424-.138 2.677.269 3.615 1.404.887 1.074 1.463 2.318 1.659 3.73.055.392.079.791.118 1.188v.147c-.003.049-.006.098-.009.147z"/>
                          </svg>
                      </a>
                  </div>
              </div>
  
              <!-- Quick Links -->
              <div class="space-y-4">
                  <h3 class="text-lg font-semibold">Link Cepat</h3>
                  <ul class="space-y-2 text-gray-400">
                      <li><a href="#" class="hover:text-purple-400">Beranda</a></li>
                      <li><a href="#" class="hover:text-purple-400">Kursus</a></li>
                      <li><a href="#" class="hover:text-purple-400">Tentang Kami</a></li>
                      <li><a href="#" class="hover:text-purple-400">Kontak</a></li>
                  </ul>
              </div>
  
              <!-- Popular Courses -->
              <div class="space-y-4">
                  <h3 class="text-lg font-semibold">Kursus Populer</h3>
                  <ul class="space-y-2 text-gray-400">
                      <li><a href="#" class="hover:text-purple-400">Data Science</a></li>
                      <li><a href="#" class="hover:text-purple-400">Web Development</a></li>
                      <li><a href="#" class="hover:text-purple-400">Machine Learning</a></li>
                      <li><a href="#" class="hover:text-purple-400">Cloud Computing</a></li>
                  </ul>
              </div>
  
              <!-- Contact Info -->
              <div class="space-y-4">
                  <h3 class="text-lg font-semibold">Hubungi Kami</h3>
                  <div class="space-y-2 text-gray-400">
                      <p class="flex items-center">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                          </svg>
                          Jakarta, Indonesia
                      </p>
                      <p class="flex items-center">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                          </svg>
                          info@edusisfo.com
                      </p>
                      <p class="flex items-center">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                          </svg>
                          (021) 1234-5678
                      </p>
                  </div>
              </div>
          </div>
  
          <!-- Bottom Bar -->
          <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400 text-sm">
              <p>&copy; 2024 EduSisfo. All rights reserved.</p>
          </div>
      </div>
  </footer>

</x-layout>
  