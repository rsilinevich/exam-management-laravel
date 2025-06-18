@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h1 class="text-2xl font-bold mb-6 text-center">Spring Session 2025 Exam Schedule Manager</h1>

                    <ul class="list-disc list-inside mb-4 text-gray-700">
                        <li>2 lomas: “Admins” un parastais “Lietotājs”.</li>
                        <li>Abi var pievienot un rediģēt eksāmenus.</li>
                        <li>Tikai admins var arī dzēst eksāmenus.</li>
                        <li>Lai sāktu, izmantojiet nav bar augšā. &#x2B06;</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
