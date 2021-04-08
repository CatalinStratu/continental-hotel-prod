<x-app-layout>
    <x-slot name="content">
        <section id="hero_content">
            <div id="hero">
                <h1>ENJOY A LUXURY</h1>
                <h1> EXPERIENCE.</h1>
                <div class="view_rooms">
                    <a href="rentroom.html">View Rooms</a>
                </div>
                <hr>
                <p>CONTINENTAL  LUXURY  HOTEL  &  BEST  RESORT</p>
            </div>
            <div id="lower_content">
                <div class="adress">
                    <p><span>ADDRESS</span> : Mihai Viteazul 4, Suceava, Romania.</p>
                </div>
                <div class="scroll_down">
                    <a href="#rent_room" class="fa fa-long-arrow-down"></a>
                </div>
                <div class="email">
                    <p><span>EMAIL</span> : booking@continentalhotel.com</p>
                </div>
            </div>
        </section>
        <section id="relax_resort">
            <div class="content_container_before">
                <p>CONTINENTAL HOTEL</p>
                <hr>
                <h1>Relax in our</h1>
                <h1>Resort</h1>
                <p>With wireless internet access, LED Flat screen TVs and 7-day room
                    service, our accommodation combines classic elegance with the
                    latest technology, to keep you comfortable and connected while travelling.</p>
                <div class="button">
                    <a href="{{ route('about') }}">About Us</a>
                </div>
            </div>
            <div class="content_container_after">
                <div class="image1">
                    <img src="assets/images/home/resort1.jpg" alt="resort1">
                </div>
                <div class="image2">
                    <img src="assets/images/home/resort2.jpg" alt="resort2">
                </div>
                <div class="image3">
                    <img src="assets/images/home/resort3.jpg" alt="resort3">
                </div>
            </div>
        </section>

        <section id="best_rooms">
            <div class="title_container">
                <p>CONTINENTAL HOTEL</p>
                <hr>
                <h2>BEST ROOMS</h2>
            </div>
            <div class="rooms_container">

                <div class="small_room">
                    <div class="upper_content">
                        <img src="assets/images/home/room_small.jpeg" alt="room1">
                        <p>HOTEL CONTINENTAL <i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i></p>
                    </div>
                    <div class="lower_content">
                        <div class="content_alignment">
                            <h4> {{ $RoomType->name  }}</h4>
                            <a class="fa fa-user-circle"> <span>{{ $RoomType->guests }} GUEST(s)</span></a>
                            <a class="fa fa-hotel"> <span>{{ $RoomType->size }}m<sup>2</sup></span></a>
                            <p> {{ $RoomType->small_description }}</p>
                            <div class="button">
                                <a href="{{route('room_view', $RoomType->slug)}}">BOOK NOW FROM {{ intval($RoomType->price) }}$</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="four_rooms">
                    @foreach ($RoomTypes as $type)
                        <div class="square">
                            <img src="{{ asset($type->img) }}" alt="room1">
                            <p>{{$type->name}} <a href="{{route('room_view', $type->slug)}}">BOOK FROM  {{intval($type->price)}}$ </a></p>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </x-slot>
</x-app-layout>
