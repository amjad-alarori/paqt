@extends('layouts.default')
@section('title', 'FizzBuzz')
@section('content')
    <div class="bg-gray-100 p-4 rounded-lg text-center">
        <table class="mx-auto border-collapse border border-gray-300">
            <thead>
            <tr class="bg-gray-200">
                <th class="p-3 text-left">Number</th>
                <th class="p-3 text-left">Result</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr class="hover:bg-gray-200 transition duration-300 ease-in-out">
                    <td class="p-3">{{ $loop->iteration }}</td>
                    <td class="p-3">
                        @if ($item == 'Fizz')
                            <span class="px-2 py-1 bg-blue-500 text-white rounded-full">Fizz</span>
                        @endif
                        @if ($item == 'Buzz')
                            <span class="px-2 py-1 bg-green-500 text-white rounded-full">Buzz</span>
                        @endif
                        @if ($item == 'FizzBuzz')
                            <span class="px-2 py-1 bg-yellow-500 text-gray-800 rounded-full">FizzBuzz</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
