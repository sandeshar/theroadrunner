@extends('admin.layout')

@section('content')
<div>
<div class="bg-slate-200 p-6">
	<h1 class="text-2xl font-semibold mb-4">Image Upload</h1>
	<div class="mb-4 sm:px-24 text-center">
		<form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data" class="flex-grow sm:-space-x-4">
			@csrf
			<input
			class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
			type="file"
			name="image" id="image"  accept="image/png, image/gif, image/jpeg"/>
			<input type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mt-2" value="Upload" />
		</form>
	</div>
</div>
<div class="mt-6 p-6">
	<h2 class="text-lg font-semibold mb-7">Uploaded Images</h2>
	<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-2 sm:gap-y-10">
		@foreach ($images as $image)
		<div class="relative w-48 h-48 flex items-center justify-center mx-auto">
			<img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="object-contain w-full h-full rounded">
			<form action="{{ route('image.delete', $image->id) }}" method="POST">
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
</div>

@endsection