@extends('layout.master')

@section('content')
<style>
    .profile {
        margin-top: 20px;
    }

    .profile h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .profile p {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .properties {
        margin-top: 20px;
    }

    .properties h3 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .properties ul {
        list-style-type: none;
        padding-left: 0;
    }

    .properties li {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .no-properties {
        color: #999;
        font-style: italic;
    }

    .row{margin-top: 10px}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 profile">
            <h2>{{ $lessor->name }}</h2>
            <p>Email: {{ $lessor->email }}</p>
            <!-- Add more fields as needed -->
            {{-- <a href="{{ route('lessor.edit') }}">Edit Profile</a> --}}
        </div>
        <div class="col-md-6 properties">
            {{-- <a href="{{ route('property.create') }}">Add New Property</a> --}}

            <h3>Properties</h3>
            @if ($properties->isEmpty())
            <p class="no-properties">You have no properties.</p>
            @else
            <ul>
                @foreach($properties as $property)
                <li>{{ $property->product_name }}</li>
                <!-- Display more property details as needed -->
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
@endsection
