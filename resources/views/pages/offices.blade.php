@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <!-- Feedback Button -->
        <a href="#" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
            Feedback
        </a>

        <!-- List of Offices Title -->
        <h1 class="text-2xl font-bold text-center flex-1">
            List of Offices
        </h1>
    </div>

    <hr class="mb-6 border-2 border-gray-300">

    <!-- Cards for Offices -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Example Office Card -->
        <a href="{{ route('offices.page') }}" class="bg-[#ccd8fe] p-4 rounded-lg shadow-md hover:shadow-lg transition duration-200 ease-in-out">
            <h2 class="text-xl font-semibold text-center">Accounting</h2>
            {{-- <p class="mt-2 text-gray-600">Description of the office...</p> --}}
        </a>

        <!-- Repeat this structure for other office cards -->
        <div class="bg-[#ccd8fe] p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-center">Office Name</h2>
            {{-- <p class="mt-2 text-gray-600">Description of the office...</p> --}}
        </div>

        <div class="bg-[#ccd8fe] p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-center">Office Name</h2>
            {{-- <p class="mt-2 text-gray-600">Description of the office...</p> --}}
        </div>

        <!-- Add more cards as needed -->
    </div>
@endsection
