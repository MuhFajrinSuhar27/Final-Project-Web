<x-layout2>
    <x-slot:title>Daftar Pengguna</x-slot:title>

    <main class="flex-1 ml-0 lg:ml-64 mt-[-38rem]">     

            <div class="container mx-auto px-4 py-8 bg-gray-50 rounded-md shadow-lg">
                <!-- Header Section -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-xl font-bold text-gray-800">Daftar Pengguna</h1>
                    <div class="flex space-x-4">
                        <a href="{{ route('admin.users.create') }}" class="bg-purple-600 text-white px-4 py-2 rounded shadow hover:bg-purple-700 transition">
                            + Tambah Pengguna Baru
                        </a>
                        <input type="text" placeholder="Search for User" class="px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-purple-200">
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="mb-4">
                    <button class="bg-gray-200 text-gray-600 px-3 py-1 rounded-full shadow hover:bg-gray-300 transition">
                        Active
                    </button>
                </div>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Table Section -->
                <div class="overflow-hidden rounded-lg shadow-lg bg-white">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Nama</th>
                                <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Email</th>
                                <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Role</th>
                                <th class="py-3 px-6 text-left text-sm font-medium text-gray-600 uppercase tracking-wider">Date Added</th>
                                <th class="py-3 px-6 text-center text-sm font-medium text-gray-600 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-6">{{ $user->name }}</td>
                                    <td class="py-4 px-6">{{ $user->email }}</td>
                                    <td class="py-4 px-6">
                                        <span class="text-blue-800 bg-blue-100 px-2 py-1 rounded-full text-xs font-semibold">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="py-4 px-6 text-center">
                                        <div class="flex justify-center items-center space-x-2">
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded shadow hover:bg-blue-600 transition">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded shadow hover:bg-red-600 transition">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout2>
