@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="f-d-card-bg">
    

    <div class="d-flex flex-wrap mx-3">
        @foreach ($plants as $plant)
        <div class="card f-d-card">
            <img src="{{ $plant-> img }}" class="f-d-card-img img-fluid" alt="{{ $plant-> common_name }}">
            <div class="f-d-card-body">
            <h5 class="f-d-card-title">{{ $plant-> common_name }} ({{ $plant-> scientific_name }})</h5>
            <p class="f-d-card-text">{{ $plant-> family }}</p>
            <a href="#" class="btn f-d-button">Details</a>
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