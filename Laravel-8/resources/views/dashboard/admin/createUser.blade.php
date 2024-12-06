<x-layout2>
    <x-slot:title>Tambah Pengguna Baru</x-slot:title>

    <div class="pt-20 pb-10">
        <div class="container mx-auto px-4">
            <div class="container mx-auto px-4 py-8 flex justify-center items-center">
                <div class="w-full max-w-md bg-white text-black rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-center mb-6">Tambah Pengguna Baru</h2>

                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf

                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="name" class="block mb-2 font-medium">Nama:</label>
                            <input type="text" name="name" id="name" 
                                class="w-full border border-gray-300 p-2 rounded" 
                                value="{{ old('name') }}" required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block mb-2 font-medium">Email:</label>
                            <input type="email" name="email" id="email" 
                                class="w-full border border-gray-300 p-2 rounded" 
                                value="{{ old('email') }}" required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block mb-2 font-medium">Password:</label>
                            <input type="password" name="password" id="password" 
                                class="w-full border border-gray-300 p-2 rounded" required>
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Konfirmasi Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="block mb-2 font-medium">Konfirmasi Password:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" 
                                class="w-full border border-gray-300 p-2 rounded" required>
                        </div>

                        <!-- Role -->
                        <div class="mb-4">
                            <label for="role" class="block mb-2 font-medium">Role:</label>
                            <select name="role" id="role" class="w-full border border-gray-300 p-2 rounded" required>
                                <option value="" disabled selected>Pilih Role</option>
                                <option value="student" {{ old('role') === 'student' ? 'selected' : '' }}>👨‍🎓 Student</option>
                                <option value="teacher" {{ old('role') === 'teacher' ? 'selected' : '' }}>👨‍🏫 Teacher</option>
                                <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>👨‍💼 Admin</option>
                            </select>
                            @error('role')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol with Enhanced Styling -->
                        <div class="flex justify-between items-center mt-8 space-x-4">
                            <!-- Back Button -->
                            <a href="{{ route('admin.users') }}" 
                                class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:-translate-x-1 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                <span>Kembali</span>
                            </a>

                            <!-- Submit Button -->
                            <button type="submit" 
                                class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                <span>Tambah</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout2>