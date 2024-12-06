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
        <!-- Left Section: Logo and Menu -->
        <div class="flex items-center space-x-9">
            <!-- Logo -->
            <a href="/" class="text-white font-bold">
                <img src="img/logo-2.png" alt="Logo" width="140px" class="h-16 max-h-40" />
            </a>
            
            <!-- Menu Items -->
            <a href="/" class="flex items-center space-x-3 hover:text-purple-400 transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-gray-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span>Beranda</span>
            </a>

            <a href="/blog" class="flex items-center space-x-3 hover:text-purple-400 transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-gray-800">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 14l9-5-9-5-9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                </svg>
                <span>Course</span>
            </a>

            <a href="/tentang" class="flex items-center space-x-3 hover:text-purple-400 transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-gray-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>Tentang Kami</span>
            </a>
        </div>

        <!-- Right Section: Search and Auth -->
        <div class="flex items-center space-x-6">
            <!-- Search Bar -->
            <div class="relative">
                <input 
                    type="text" 
                    id="searchInput"
                    placeholder="🔍 Cari materi kamu disini" 
                    class="bg-gray-800 text-white rounded-full px-4 py-2 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 w-64"
                    oninput="filterCourses(this.value)"
                >
            </div>

            <!-- Login dan Register -->
            <a href="{{ route('login') }}" class="text-purple-400 hover:text-purple-500 transition-colors duration-200">Masuk</a>
            <a href="{{ route('register') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-full transition-colors duration-200">Daftar</a>
        </div>
    </nav>

    <main>
        <section class="py-0">
            <div class="container mx-auto">
            </div>
        </section>
    </main>
</body>
</html>