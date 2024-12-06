<x-layout2>
    <x-slot:title>Edit Pengguna</x-slot:title>

 <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">

    <div class="container mx-auto px-4 py-8 flex justify-center items-center">
        <div class="w-full max-w-md bg-white text-black rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Edit Pengguna</h2>

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama -->
             <div class="mb-4">
                <label for="name" class="block mb-2 font-medium">Nama:</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded" value="{{ old('name', $user->name) }}" required>
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block mb-2 font-medium">Email:</label>
                    <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded" value="{{ old('email', $user->email) }}" required>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block mb-2 font-medium">Password:</label>
                    <input type="password" 
                           name="password" 
                           id="password" 
                           class="w-full border border-gray-300 p-2 rounded" required>
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-2 font-medium">Konfirmasi Password:</label>
                    <input type="password" 
                           name="password_confirmation" 
                           id="password_confirmation" 
                           class="w-full border border-gray-300 p-2 rounded" required>
                    @error('password_confirmation')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <label for="role" class="block mb-2 font-medium">Role:</label>
                    <select name="role" id="role" class="w-full border border-gray-300 p-2 rounded" required>
                        <option value="" disabled selected>Pilih Role</option>
                        <option value="student" {{ old('role', $user->role) === 'student' ? 'selected' : '' }}>Student</option>
                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="teacher" {{ old('role', $user->role) === 'teacher' ? 'selected' : '' }}>Teacher</option>
                    </select>
                </div>

                <!-- Tombol -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('admin.users') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-layout2>
