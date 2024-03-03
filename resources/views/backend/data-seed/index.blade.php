@extends('backend.layouts.app')

@section('content')
<form method="POST" id="upload_company_information" action="{{ route('admin.data-seed.upload') }}" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">

        <div class="col-md-6">
            <input id="file" type="file" class="form-control @error('file') is-invalid @enderror"
                name="file" value="{{ old('file') }}" required autocomplete="host">
            @error('file')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Upload"/>
        </div>
    </div>
</form>
@endsection
