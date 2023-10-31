@extends('layouts.default')

@section('title', 'Division')

@section('content')
    <div class="flex justify-center">
        @foreach ($result as $chunk)
            <div class="mr-10">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Chunk
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($chunk as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                {{ $item }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection
