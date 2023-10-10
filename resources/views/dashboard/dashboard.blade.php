@extends('layout.layout')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('assets/css/dashboard.css') }}">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 h-36">

        <div class="br_15 blue_border shadow_container flex items-center">
            <div class="md:flex items-center w-full">
                <div class="md:w-2/6 mr-3 pl-2 text_right_webkit">
                    <img class=" h-auto max-w-full rounded-lg" src="/assets/icons/Orders.svg" alt="">
                </div>
                <div class="md:w-4/6 text_left_webkit">
                    <p class="font-bold text_size_23">23</p>
                    <p class="font-semibold text_size_17">Orders</p>
                    <p class="text_size_14">icon up or down</p>
                </div>
            </div>
        </div>

        <div class="br_15 blue_border shadow_container flex items-center">
            <div class="md:flex items-center w-full">
                <div class="md:w-2/6 mr-3 pl-2 text_right_webkit">
                    <img class=" h-auto max-w-full rounded-lg" src="/assets/icons/Delivered.svg" alt="">
                </div>
                <div class="md:w-4/6 text_left_webkit">
                    <p class="font-bold text_size_23">23</p>
                    <p class="font-semibold text_size_17">Delivered</p>
                    <p class="text_size_14">icon up or down</p>
                </div>
            </div>
        </div>
        <div class="br_15 blue_border shadow_container flex items-center">
            <div class="md:flex items-center w-full">
                <div class="md:w-2/6 mr-3 pl-2 text_right_webkit">
                    <img class=" h-auto max-w-full rounded-lg" src="/assets/icons/CanceledOrder.svg" alt="">
                </div>
                <div class="md:w-4/6 text_left_webkit">
                    <p class="font-bold text_size_23">23</p>
                    <p class="font-semibold text_size_17">Canceled</p>
                    <p class="text_size_14">icon up or down</p>
                </div>
            </div>
        </div>
        <div class="br_15 blue_border shadow_container flex items-center">
            <div class="md:flex items-center w-full">
                <div class="md:w-2/6 mr-3 pl-2 text_right_webkit">
                    <img class=" h-auto max-w-full rounded-lg" src="/assets/icons/Revenue.svg" alt="">
                </div>
                <div class="md:w-4/6 text_left_webkit">
                    <p class="font-bold text_size_23">23</p>
                    <p class="font-semibold text_size_17">Revenu</p>
                    <p class="text_size_14">icon up or down</p>
                </div>
            </div>
        </div>
    </div>

@stop
