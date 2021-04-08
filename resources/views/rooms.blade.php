<x-app-layout>
    <x-slot name="content">
        <section id="best_rooms">
            <div class="title_container">
                <p>CONTINENTAL HOTEL</p>
                <hr>
                <h2>ROOMS TYPES</h2>
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
