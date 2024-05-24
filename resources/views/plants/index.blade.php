@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Plants</h1>
    <div class="d-flex flex-wrap ms-3 me-3">
        @foreach ($plants as $plant)
        <div class="card" style="width: 18rem;">
            <img src="{{ $plant-> img }}" class="card-img-top" alt="{{ $plant-> common_name }}">
            <div class="card-body">
            <h5 class="card-title">{{ $plant-> common_name }} ({{ $plant-> scientific_name }})</h5>
            <p class="card-text">{{ $plant-> family }}</p>
            <a href="{{route('plants.show', $plant->id)}}" class="btn btn-primary">Details</a>
            </div>
        </div>
        @endforeach
    </div>




    {{-- <ul>
        <li>{{ $plant-> class }}</li>
        <li>{{ $plant-> species }}</li>
        <li>{{ $plant-> width }}</li>
        <li>{{ $plant-> height }}</li>
        <li>{{ $plant-> habitat }}</li>
        <li>{{ $plant-> leaf_type }}</li>
        <li>{{ $plant-> leaf_color }}</li>
        <li>{{ $plant-> flower_color }}</li>
        <li>{{ $plant-> date_spotted }}</li>
        <li>{{ $plant-> place_spotted }}</li>
        <li>{{ $plant-> notes }}</li>
    </ul> --}}

</main>

@endsection