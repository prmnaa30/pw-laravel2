@extends('components.layout')

@section('title', 'Schedule')
@section('content')
    @php
        $headerTitle = 'College Schedule';
    @endphp

    <section class="h-screen">
        <div class="bg-gray-50 mx-5 my-2 p-6 rounded-xl ">
            <table class="w-full">
                <thead class="border-b text-left bg-gray-200">
                    <th class="px-4 py-2 w-24 border">Day</th>
                    <th class="px-4 py-2 border">Subject</th>
                    <th class="px-4 py-2 border">Time</th>
                    <th class="px-4 py-2 border">Lecturer</th>
                </thead>
                <tbody>
                    @php
                        $previousDay = null;
                    @endphp
                    @foreach ($collegeSchedule as $day => $classes)
                        @foreach ($classes as $class)
                            @if ($day !== $previousDay)
                                <tr>
                                    <td class="px-4 py-2 {{ count($classes) < 2 ? 'border-b border-l' : 'border-l' }}">
                                        {{ $day }}
                                    </td>
                                    <td class="px-4 py-2 border">{{ $class['subject'] }}</td>
                                    <td class="px-4 py-2 w-36 border">{{ $class['start_time'] }} - {{ $class['end_time'] }}</td>
                                    <td class="px-4 py-2 border">{{ $class['lecturer'] }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td class="px-4 py-2 {{ count($classes) < 2 ? 'border' : 'border-l border-b' }}"></td>
                                    <td class="px-4 py-2 border">{{ $class['subject'] }}</td>
                                    <td class="px-4 py-2 w-36 border">{{ $class['start_time'] }} - {{ $class['end_time'] }}</td>
                                    <td class="px-4 py-2 border">{{ $class['lecturer'] }}</td>
                                </tr>
                            @endif
                            @php
                                $previousDay = $day;
                            @endphp
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
