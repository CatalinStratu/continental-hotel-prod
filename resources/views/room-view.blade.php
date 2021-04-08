<x-app-layout>
    <x-slot name="content">
        <div id="rentroom_image_container">
            <h3>Rooms offers</h3>
            <p>We keep people together and things simple.</p>
            <div class="sub_navigation">
                <a href="#overall_room">DESCRIPTION</a>
                <a href="#similar_rooms">SIMILAR ROOMS</a>
            </div>
            <div class="price_start">
                <p><span>{{ $RoomType->price }}$ </span>/ PER NIGHT</p>
            </div>

        </div>
        <section id="overall_room">
            <div class="effective_room">
                <div class="header_container">
                    <h4>{{ $RoomType->name  }}</h4>
                    <p>HOTEL CONTINENTAL <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                </div>
                <div class="gallery_book_now_container">
                    <div class="gallery_container">
                        <img class="gallery-hightlight" src="{{ asset($RoomType->img) }}" alt="room1" />
                        <div class="room-preview">
                            <img src="{{ asset('assets/images/rentroom/firstroom/room1-small.jpeg') }}" class="room-active" alt="" />
                            <img src="{{ asset('assets/images/rentroom/firstroom/room2-small.jpeg') }}" alt="" />
                            <img src="{{ asset('assets/images/rentroom/firstroom/room3-small.jpeg') }}" alt="" />
                        </div>
                    </div>
                    <div class="book_now_rooms">
                        <x-jet-validation-errors />
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="{{route('Appointment')}}" method="POST" id="settings_form_2">
                                @csrf
                                @method('POST')
                            <div class="book_now_information">
                                <div class="book_now_alignment">
                                    <div class="book_now_info_container">
                                        <h5>Check-In</h5>
                                        <input type="date" name="start" min="2021-04-01" max="2021-12-31"  required >
                                    </div>
                                    <div class="book_now_info_container">
                                        <h5>Check-Out</h5>
                                        <input type="date" name="end" min="2021-04-01" max="2021-12-31"  required>
                                    </div>
                                </div>
                                <div class="book_now_alignment">
                                    <div class="book_now_info_container_big">
                                        <h5 class="night_rentroom">Payment Method</h5>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" id="option1" checked> Paypal
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" id="option2"> Stripe
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button">BOOK NOW</button>
                        </form>
                    </div>
                </div>
                <div class="room_description_best_rooms">
                    <div class="room_description">
                        <h5>General information</h5>
                        <div class="benefits_container">
                            <div class="benefit_container">
                                <a class="fa fa-user-circle fa-2x"></a>
                                <p> {{ $RoomType->guests }} GUEST(s)</p>
                            </div>
                            <div class="benefit_container">
                                <a class="fa fa-building fa-2x"></a>
                                <p> {{ $RoomType->size }}m<sup>2</sup></p>
                            </div>
                            <div class="benefit_container">
                                <a class="fa fa-bed fa-2x"></a>
                                <p>{{ $RoomType->price }} $ / PER NIGHT</p>
                            </div>
                        </div>
                        <div class="text_description">
                            <h5>About the room</h5>
                            <p>
                                All Small Rooms  are located on the ground floor of the hotel. Luxuriously appointed with Pillowtop King Beds, mini bar, large screen HD TV and solid timber furniture with marble tops, your stay in Continental will be more than comfortable when you choose to stay with us.
                            </p>
                            <p>
                                To view our current rates and availability please click the book now button. If you have any other enquiries please contact us on
                            </p>
                        </div>
                        <hr>
                        <div id="room_services">
                            <h5> Room Services </h5>
                            <div class="services_container">
                                <a class="fa fa-bath"> Private Bathroom</a>
                                <a class="fa fa-level-up">Lift Acces</a>
                                <a class="fa fa-television">Television and Netflix</a>
                                <a class="fa fa-wifi">Free Internet (wi-fi and cable)</a>
                                <a class="fa fa-check">Air Conditioner</a>
                            </div>
                        </div>
                    </div>
                    <div class="recommended_rooms">
                        <h4>Best Rooms</h4>
                        <div class="alignment_container">
                            <div class="block_of_room">
                                <div class="image_container">
                                    <img src="assets/images/rentroom/oneroom/head1.jpg"/>
                                </div>
                                <div class="details_container">
                                    <h5>One bed Room</h5>
                                    <p>from 40 $ / night</p>
                                    <div class="button">
                                        <a href="/booking.html">BOOK NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="block_of_room">
                                <div class="image_container">
                                    <img src="assets/images/rentroom/oneroom/head2.jpg"/>
                                </div>
                                <div class="details_container">
                                    <h5>Two beds Room</h5>
                                    <p>from 65 $ / night</p>
                                    <div class="button">
                                        <a href="/booking.html">BOOK NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="block_of_room">
                                <div class="image_container">
                                    <img src="assets/images/rentroom/oneroom/head3.jpg"/>
                                </div>
                                <div class="details_container">
                                    <h5>Couple's Room</h5>
                                    <p>from 55 $ / night</p>
                                    <div class="button">
                                        <a href="/booking.html">BOOK NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div id="similar_rooms">
            <div class="blocks_container">
                <div class="header_container">
                    <h4>Similar Rooms</h4>
                    <p>HOTEL CONTINENTAL <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                </div>
                <div class="blocks_alignment">
                    @foreach ($similars as $type)
                        @php
                              $img_url = 'assets/images/rentroom/'. $type->img_category.'/head.jpg';
                        @endphp
                    <div class="block_content">
                        <div class="headofblock">
                            <img src="{{ asset($img_url) }}"/>
                            <p>HOTEL CONTINENTAL <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        </div>
                        <div class="content_container">
                            <h5>{{$type->name}}</h5>
                            <div class="benefits_container">
                                <div class="benefit_container">
                                    <a class="fa fa-user-circle fa-2x"></a>
                                    <p> up to {{$type->guests}} GUESTS</p>
                                </div>
                                <div class="benefit_container">
                                    <a class="fa fa-building fa-2x"></a>
                                    <p> {{$type->size}}m<sup>2</sup></p>
                                </div>

                            </div>
                            <p>
                                {{$type->small_description}}
                            </p>
                            <div class="button">
                                <a href="{{route('room_view', $type->slug)}}">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
