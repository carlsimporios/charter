{{-- resources/views/accounting.blade.php --}}

@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
            Back
        </a>

        <!-- Page Title -->
        <h1 class="text-2xl font-bold text-center flex-1">
            Accounting Office
        </h1>
    </div>

    <hr class="mb-6 border-2 border-gray-300">

    <div class="p-4 bg-white rounded-lg shadow-md">
        <h1 class=" font-bold">PROCESSING OF CLAIMS (MUNICIPAL TRANSACTIONS)</h1>
        <p class="text-gray-700">
        To safeguard the use and disposition of the Municipal Government's assets and to determine its liabilities from claims, pre-audit is undertaken by the Municipal Accountant to determine that all necessary supporting documents of vouchers/ claims are submitted.
        </p>
    </div>

    <div class="p-4 bg-white rounded-lg shadow-md mt-4">
        <h1 class=" font-bold">ISSUANCE OF CERTIFICATE OF INCOME TAX WITHHELD FROM EMPLOYEES</h1>
        <p class="text-gray-700">
        Government employees' income taxes are withheld pursuant to the National Internal Revenue Code. The Certificate of Compensation Payment/Tax withheld is annually given to show proof that tax due to employees had been paid.
        </p>
    </div>

    <div class="p-4 bg-white rounded-lg shadow-md mt-4">
        <h1 class=" font-bold">ISSUANCE OF CERTIFICATE OF NET TAKE HOME PAY</h1>
        <p class="text-gray-700">
        Employees shall secure from the Municipal Accounting Office the certificate of net take home pay for whatever purpose it may serve them
        </p>
    </div>
@endsection