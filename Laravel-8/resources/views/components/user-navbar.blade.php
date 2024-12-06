<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .navbar-transparent {
      background-color: rgba(17, 24, 39, 0.7); 
    }
  </style>
</head>

<body>
  <nav class="navbar-transparent bg-gray-900 text-white fixed top-0 left-0 w-full px-4 py-2 flex items-center justify-between z-50">
  
    <div class="flex items-center space-x-9">
    
      <a href="/dashboard" class="text-white font-bold">
          <img src="img/logo-2.png" alt="Logo" width="140px" class="h-16 max-h-40" />
      </a>

     
      <a href="/courses" class="flex items-center space-x-3 hover:text-purple-400 transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
          <span class="font-medium">Courses</span>
      </a>
      
      <a href="/mengikuti" class="flex items-center space-x-3 hover:text-purple-400 transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
          </svg>
          <span class="font-medium">Mengikuti</span>
      </a>
      
      <a href="#" class="flex items-center space-x-3 hover:text-purple-400 transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span class="font-medium">Tentang Kami</span>
      </a>
    </div>

   
    <div class="flex items-center space-x-8">
      <!-- Search Bar -->
      <div class="relative">
          <input type="text" placeholder="🔍 Cari materi kamu disini" class="bg-gray-800 text-white rounded-full px-4 py-2 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 w-64">
      </div>

      
      <div class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="flex items-center space-x-2 text-white focus:outline-none">
              <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-purple-400">Student {{ Auth::user()->name }}</span>
              <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
          </button>
          <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg py-1 z-50">
              <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-purple-400 hover:bg-gray-700">Profile</a>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-purple-400 hover:bg-gray-700">Logout</button>
              </form>
          </div>
      </div>
    </div>
  </nav>



<main>
    <section class="py-0">
      <div class="container mx-auto">
   

      </div>
    </section>
  </main>


</main>

  
</body>
</html>