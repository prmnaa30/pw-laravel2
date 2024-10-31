@extends('components.layout')

@section('title', 'Profile')
@section('content')
    @php
        $headerTitle = 'Profile';
    @endphp

    <section class="h-screen">
        <div class="bg-gray-50 mx-5 my-2 p-6 rounded-xl">
            <div class="flex mb-3">
                <img src="{{ asset('assets/images/profileimg.png') }}" alt="" class="w-40">
                <div class="px-6 py-4 flex flex-col justify-center">
                    <h2 class="text-2xl">Pramana</h2>
                    <p class="text-black/60">pramanakadek335@gmail.com</p>
                </div>
            </div>
            <div class="py-4 grid gap-6 grid-cols-2">
                @foreach ($identityValues as $identity => $value)
                    @if ($identity == 'Address')
                        <div class="col-span-2">
                            <h4 class="font-semibold mb-2">{{ $identity }}</h4>
                            <p class="bg-gray-200 px-4 py-3 rounded-md">{{ $value }}</p>
                        </div>
                    @else
                        <div>
                            <h4 class="font-semibold mb-2">{{ $identity }}</h4>
                            <p class="bg-gray-200 px-4 py-3 rounded-md">{{ $value }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
