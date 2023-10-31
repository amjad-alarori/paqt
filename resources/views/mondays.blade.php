@extends('layouts.default')
@section('title', 'Mondays')
@section('content')
    <div class="p-8 text-center">
        <h1 class="text-3xl font-bold mb-4">Calculate Full Weeks with Mondays in a Period</h1>
        <form action="{{ route('mondays') }}" method="GET">
            @csrf
            <div class="mb-4">
                <label for="start_date" class="block">Start Date:</label>
                <input type="date" name="start_date" required class="w-1/8 p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="end_date" class="block">End Date:</label>
                <input type="date" name="end_date" required class="w-1/8 p-2 border rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Calculate Full Weeks with Mondays</button>
        </form>

        @if(isset($mondays))
            <h2 class="text-2xl font-semibold mt-8">Full Weeks with Mondays:</h2>
            <table class="mx-auto border-collapse border border-gray-300 mt-4 w-3/4">
                <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Date</th>
                    <th class="border border-gray-300 p-2">Week Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($mondays as $monday)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $monday['date'] }}</td>
                        <td class="border border-gray-300 p-2">{{ $monday['week_number'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
