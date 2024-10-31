@extends('components.layout')

@section('title', 'Dashboard')
@section('content')
    @php
        $headerTitle = 'Overview';
    @endphp

    <section class="h-screen">
        <div class="flex">
            {{-- Dashboard Left --}}
            <div class="flex flex-col w-4/6">
                {{-- Welcome Message --}}
                <div class="bg-gray-50 mx-5 my-2 px-4 py-2 rounded-xl h-16 flex items-center justify-center">
                    <p class="tracking-wide">Welcome to dashboard, Creez!</p>
                </div>
                {{-- Dashboard Main Content --}}
                <div class="mx-5 my-2 grid grid-cols-6 grid-rows-14 gap-4">
                    <div class="bg-gray-50 col-span-2 row-span-2 rounded-xl h-40 px-4 py-2">
                        <h3 class="font-semibold">Semester</h3>
                        <p class="text-5xl flex items-center h-28 ml-4">3</p>
                    </div>
                    <div class="bg-gray-50 col-span-2 row-span-2 rounded-xl px-4 py-2">
                        <h3 class="font-semibold">Jumlah SKS Diambil</h3>
                        <p class="text-5xl flex items-center h-28 ml-4">22</p>
                    </div>
                    <div class="bg-gray-50 col-span-2 row-span-2 rounded-xl px-4 py-2">
                        <h3 class="font-semibold">Jumlah Mata Kuliah</h3>
                        <p class="text-5xl flex items-center h-28 ml-4">8</p>
                    </div>
                    <div class="bg-gray-50 col-span-3 row-span-2 rounded-xl h-40 px-4 py-2">
                        <h3 class="font-semibold">SKS Lulus Wajib</h3>
                        <p class="text-5xl flex items-center h-28 ml-4"><span class="font-semibold">46&nbsp;</span>/ 135</p>
                    </div>
                    <div class="bg-gray-50 col-span-3 row-span-2 rounded-xl px-4 py-2">
                        <h3 class="font-semibold">SKS Lulus Pilihan</h3>
                        <p class="text-5xl flex items-center h-28 ml-4"><span class="font-semibold">0&nbsp;</span>/ 9</p>
                    </div>
                    <div class="bg-gray-50 col-span-6 row-span-4 rounded-xl h-52 px-4 py-2">
                        <h3 class="font-semibold">Lorem Ipsum</h3>
                        <p class="flex items-center h-36 px-4 mt-2 text-justify">
                            Suspendisse lobortis faucibus ipsum sed malesuada. Maecenas vel venenatis risus. Duis in sem
                            eros.
                            Maecenas at elit ex. Sed arcu dolor, faucibus id facilisis id, efficitur non nulla. Duis vel
                            mauris
                            non magna lobortis vestibulum non id lacus. Duis ac magna pretium lorem volutpat dictum eu ut
                            sapien. Fusce vel fermentum erat, quis vulputate ipsum. Nam sed felis nisl. Aenean viverra
                            facilisis
                            augue, eget aliquet neque semper eu. Curabitur et tellus libero. Duis ac nulla iaculis ligula
                            venenatis tristique. Mauris non velit sed ante blandit finibus.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Dashboard Right --}}
            <div class="bg-gray-50 mr-5 my-2 px-4 py-2 rounded-xl w-2/6 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis massa leo, ac commodo lorem interdum ac.
                Curabitur ornare elit libero, a venenatis libero sagittis sit amet. Phasellus nulla elit, pellentesque quis
                dapibus id, consequat et orci. Donec consectetur, sapien sit amet efficitur molestie, ante elit malesuada
                nulla,
                vel varius elit nisi vitae nibh. In eu velit egestas lacus aliquet dapibus et nec lectus. Nullam pharetra
                tellus
                ut enim tincidunt, eget facilisis neque placerat. Vivamus rhoncus ante eget risus semper, non dignissim
                purus
                ornare. Aliquam convallis eu urna eget finibus. Sed posuere maximus auctor. Praesent dignissim risus in
                condimentum efficitur. Integer quis volutpat velit, eget aliquam tellus. Proin vitae est ac tellus tempor
                tincidunt. Integer accumsan, libero ut rhoncus scelerisque, nulla ipsum ultrices elit, non bibendum elit
                lorem
                tempor odio. Nam luctus metus sed iaculis interdum.
            </div>
        </div>
    </section>
@endsection
