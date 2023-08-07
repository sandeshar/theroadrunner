@extends('admin.layout')

@section('content')
        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-semibold mb-4">Trash</h1>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-y-10">
                @foreach ($deletedImages as $image)
                <div class="relative w-full h-72 flex items-center justify-center mx-auto">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="object-cover w-full h-full rounded">
                    <form action="{{ route('image.restore', $image->id) }}" method="POST" class="mt-2">
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded absolute bottom-0 left-0">
                        Restore
                        </button>
                    </form>
                    <form action="{{ route('image.delete-permanently', $image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded absolute bottom-0 right-0">
                        Delete
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
@endsection