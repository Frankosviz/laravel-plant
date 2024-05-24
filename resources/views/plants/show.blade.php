@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Plants</h1>
   
       <div>
        {{ $plantDetail-> common_name }}
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