@extends('layouts.app')

@section('title', 'Bubble Tea - Main Page')

@section('content')
    <div>
        <div class="container">
            <div class="flex justify-between items-center gap-56">
                <div class="flex items-start flex-col gap-12 w-1/2">
                    <div class="flex flex-col gap-7 text-rose-500">
                        <h1 class="text-5xl">Bubble Tea</h1>
                        <p>I had to drink a lot of tea, for without it I could not work. Tea unleashes the possibilities that lie dormant in the depths of my soul.</p>
                    </div>
                    <a class="button" href="#">Buy Right Now</a>
                </div>
                <div class="">
                    <img src="{{ asset('public/assets/images/bubble.png') }}" alt="Изображение" class="margin-left-auto w-64">
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=" py-24 bg-rose-50">
            <div class="flex justify-center items-center gap-7">
                <div class="flex items-start flex-col gap-12 w-8/12 ">
                    <div class="flex flex-col gap-12 text-left text-rose-500">
                        <h1 class="text-5xl">about us</h1>
                        <p class="text-xl text-left leading-relaxed">
                            Bubble tea, also bubble-tee, is a tea drink consisting of tea, milk or
                            fruit juice, sometimes coffee, with tapioca balls, jelly pieces and jelly
                            balls filled with juice. Served cold or at room temperature.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container py-24">
            <div class="flex justify-beetwen items-center gap-7">
                <div class="flex items-start flex-col gap-12 w-1/2">
                    <div class="flex flex-col gap-7 text-rose-500">
                        <h1 class="text-5xl">Contacts</h1>
                        <div class="flex flex-col gap-10">
                            <h3 class="text-2xl">Address:</h3>
                            <p class="text-lg">Baumana St, 24</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
