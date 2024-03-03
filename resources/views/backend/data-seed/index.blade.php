@extends('backend.layouts.app')

@section('content')
<form action="{{ route('admin.data-seed.upload') }}" class="relative w-4/5 h-32 max-w-xs mb-10 bg-white bg-gray-100 rounded-lg shadow-inner d-flex"
    enctype="multipart/form-data" method="post">
    @csrf
    <input type="file" id="file-upload" class="hidden" name="file"
        @error('file') is-invalid @enderror required value="{{ old('file') }}">
    <label for="file-upload" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">
        <p class="z-10 text-xs font-light text-center text-gray-500">Upload PDF</p>
        <svg class="z-10 w-8 h-8 text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
        </svg>
    </label>
    @error('file')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4" value="Upload"/>
</form>
@endsection

