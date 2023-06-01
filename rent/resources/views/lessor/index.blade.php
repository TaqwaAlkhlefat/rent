@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ $lessor->name }}</h2>
                <p>Email: {{ $lessor->email }}</p>
                <!-- Add more fields as needed -->
                {{-- <a href="{{ route('lessor.edit') }}">Edit Profile</a> --}}
            </div>
            <div class="col-md-6">
                {{-- <a href="{{ route('property.create') }}">Add New Property</a> --}}

                <h3>Properties</h3>
                <ul>
                    @foreach($properties as $property)
                        <li>{{ $property->name }}</li>
                        <!-- Display more property details as needed -->
                    @endforeach
                </ul>
                @if ($properties->isEmpty())
                <p>You have no properties.</p>

            @endif
            </div>
        </div>
    </div>
@endsection





