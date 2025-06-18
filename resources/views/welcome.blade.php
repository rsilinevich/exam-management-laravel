@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h1 class="text-2xl font-bold mb-6 text-center">Spring Session 2025 Exam Schedule Manager</h1>

                    @auth
                        <div class="text-center mb-6">
                            <p class="mb-4">Welcome, {{ Auth::user()->name }}!</p>
                            <a href="{{ route('exams.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                View Exam Schedule
                            </a>
                        </div>
                    @else
                        <div class="text-center">
                            <p class="mb-4">Please login or register to manage the exam schedule.</p>
                            <div class="flex justify-center space-x-4">
                                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Login
                                </a>
                                <a href="{{ route('register') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                    Register
                                </a>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
