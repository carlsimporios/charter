

@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <!-- Events Title -->
        <h1 class="text-2xl font-bold text-center flex-1">
            EVENTS
        </h1>


        <button href="#" class="bg-green-700 text-white py-2 px-4 rounded-lg hover:bg-green-800">
            Add Event
        </button>

    </div>

    <hr class="mb-6 border-2 border-gray-300">

    <!-- Cards for Events for You -->
    
    <div>
    <h3 class="mb-4 text-[2rem] font-extrabold">Events for you</h3>

    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/ticket.jpg" alt="Event Image" class="w-full h-32 sm:h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Buy your tickets for Miss Bohol 2024!</h2>
            </div>
        </div>



        <a href="{{ route('events.page') }}" class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/2.jpg" alt="Event Image" class="w-full h-32 sm:h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Tubigon's representative for the Mister Bohol 2024 competition</h2>
            </div>
</a>
    </div>

    <!-- Cards for Activities for You -->
    <div>
    <h3 class="mb-4 text-[2rem] font-extrabold">Activities for you</h3>

    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
    <a href="{{ route('events.page') }}" class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/3.jpg" alt="Activity Image" class="w-full h-32 sm:h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">TERSSU personnel at your service!</h2>
            </div>
    </a>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/4.jpg" alt="Activity Image" class="w-full h-32 sm:h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">First day of competition in the Bohol Sandugo National...</h2>
            </div>
        </div>
    </div>

    <!-- Cards for Programs for You -->
    <div>
    <h3 class="mb-4 text-[2rem] font-extrabold">Programs for you</h3>

    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/5.jpg" alt="Program Image" class="w-full h-32 sm:h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">GET SKILLED AFTER 40 DAYS ON COOKERY NC II.</h2>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/6.jpg" alt="Program Image" class="w-full h-32 sm:h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">TESDA Provincial Training Center Tubigon offers scholarship</h2>
            </div>
        </div>
    </div>
@endsection
