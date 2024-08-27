@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row my-4 justify-content-center">
        
        {{-- TITOLO  --}}
        <div class="col-12 d-flex justify-content-between align-items-center my-3">
            <div class="index-title">
                Add a day
            </div>
        </div>

        {{-- SEZIONE RECAP ERRORI --}}
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        
        {{-- FORM --}}
        <div class="col-12">
            <form action="{{ route('admin.days.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    {{-- FORM - COLONNA UNO --}}
                    <div class="col-6">
                        <div class="form-group my-3">
                            <label for="title">Date</label>
                            <input class="form-control @error('date') is-invalid @enderror" type="date" name="date" id="title" value="{{ old('date') }}">
                            @error('date')
                                <div class="text-danger"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- FORM - COLONNA DUE --}}
                    <div class="col-6">
                        <div class="form-group my-3">
                            <label for="preview_image">Preview image</label>
                            <input class="form-control @error('preview_image') is-invalid @enderror" type="file" name="preview_image" id="preview_image" value="{{ old('preview_image') }}">
                            @error('preview_image')
                                <div class="text-danger"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- BOTTONE --}}
                <div class="form-group my-3">
                    <button type="submit" class="btn btn-sm new-button">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection