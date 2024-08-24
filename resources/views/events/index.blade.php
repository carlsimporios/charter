@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
            Back
        </a>

        <!-- Page Title -->
        <h1 class="text-2xl font-bold text-center flex-1">
            EVENTS
        </h1>
    </div>

    <hr class="mb-6 border-2 border-gray-300">

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Tubigon's representative for the Mister Bohol 2024 competition</h2>

        <img src="{{ asset('images/tubigon-representative.jpg') }}" alt="Tubigon Representative" class="w-full rounded-md mb-4">

        <p class="text-gray-700 mb-4">
            Mayor William R. Jao led the weekly Executive Committee Meeting which was attended by the different section and department heads of LGU-Tubigon. 
        </p>

        <p class="text-gray-700 mb-4">
            Tubigon's representative for the Mister Bohol 2024 competition, Lembert Neil Logroño Ayta, also paid courtesy during the Execom meeting.
        </p>

        <p class="text-gray-700 mb-4">
            Mister Bohol 2024 Preliminary competition will be held on July 21 while the Coronation Night will be witnessed on July 24, 2024.
        </p>

        <p class="text-gray-700 mb-4">
            #LGUTubigonCares #LGUTubigon #TubigONE #JustAsOneTubigon #OnwardEverBackwardNever
        </p>
    </div>
@endsection