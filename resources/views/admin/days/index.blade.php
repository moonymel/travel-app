@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row my-4 justify-content-center">
        
        {{-- TITOLO  --}}
        <div class="col-12 d-flex justify-content-between align-items-center my-3">
            <div class="index-title">
                Days of my Zakynthos trip
            </div>
            <div>
                <a href="{{ route('admin.days.create') }}" class="btn btn-sm new-button">Add Day</a>
            </div>
        </div>
        
        {{-- SINGOLA CARD DA CICLARE --}}
        @foreach ($days as $day)
            <div class="col-3 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/storage/' . $day->preview_image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Day {{ $day->id }}</h5>
                      <p class="card-text">{{ \Carbon\Carbon::parse($day->date)->format('F j, Y') }}</p>
                      <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection