@extends('layouts.default')

@section('title', 'Welcome PAQT')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="text-center mt-12">
            <h1 class="text-3xl font-semibold mb-8">Welcome to PAQT</h1>
            <div class="space-y-6">
                <a href="{{ route('fizzbuzz') }}" class="btn bg-blue-500 rounded-lg text-white px-8 py-4">FizzBuzz</a>
                <a href="{{ route('divide') }}" class="btn bg-green-500 rounded-lg text-white px-8 py-4">Divide</a>
                <a href="{{ route('mondays') }}" class="btn bg-yellow-500 rounded-lg text-white px-8 py-4">Mondays</a>
                <a href="api/documentation" class="btn bg-purple-500 rounded-lg text-white px-8 py-4">API Documentation</a>
            </div>
        </div>
    </div>
@endsection
