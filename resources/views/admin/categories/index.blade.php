@include('layouts.adminfrontend')

<div class="min-h-screen bg-gray-900 text-white p-8">
    <h1 class="text-3xl font-bold mb-6">Categories</h1>

    <div class="mb-6">
        <a href="{{ route('admin.categories.create') }}" class="bg-[#F7941D] text-white py-2 px-4 rounded-lg hover:bg-orange-500">Add Category</a>
    </div>

    <table class="w-full text-left bg-gray-800 rounded-lg">
        <thead>
            <tr class="border-b border-gray-700">
                <th class="py-2 px-4">#</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr class="border-b border-gray-700">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $category->name }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-blue-600 text-white py-1 px-3 rounded hover:bg-blue-700">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white py-1 px-3 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

