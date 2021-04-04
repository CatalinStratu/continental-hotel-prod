<x-app-layout>
    <x-slot name="content">
        <section id="hero_content">
            <div id="hero">
                <h1>ENJOY A LUXURY</h1>
                <h1> EXPERIENCE.</h1>
                <div class="view_rooms">
                    <a href="#">View Rooms</a>
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
        <section id="rent_room">
            <div class="room_background">
                <div class="content_container_before">
                    <h1>Holiday</h1>
                    <h1>Enjoy</h1>
                    <h5>X</h5>
                    <p>The perfect couple’s staycation awaits
                        those looking for the quintessential luxury
                        experience. Surrounded by uncompromising
                        comfort and world-class amenities, you may
                        indulge in flavorful cuisine, seasonal
                        cocktails.</p>
                </div>
                <div class="content_container">
                    <div class="rent_room_container">
                        <div class="upper_content">
                            <h4>Search Rooms</h4>
                            <p>START BOOKING NOW</p>
                        </div>
                        <div class="lower_content">
                            <div class="checkin_out">
                                <p>CHECK-IN</p>
                                <p>CHECK-OUT</p>
                            </div>
                            <hr>
                            <div class="date_picker">

                            </div>
                            <hr>
                            <div class="guests">
                                <div class="number-input">
                                    <a class="fa fa-minus-square-o" onclick="upDown(1)"></a>
                                    <input class="quantity" min="0" max="8" name="quantity" value="1" type="number">
                                    <p>guest</p>
                                    <a class="fa fa-plus-square-o" onclick="upDown(2)"></a>
                                </div>
                            </div>
                            <div class="book_button">
                                <a href="#">CHECK AVAILABILITY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_container_after">
                    <h3>Best Season </h3>
                    <h3>Price</h3>
                    <h5>X</h5>
                    <p>10 April to 15 April</p>
                    <h4>230$ / <span> two persons </span></h4>
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
                    <a href="/page/about.html">About Us</a>
                </div>
            </div>
            <div class="content_container_after">
                <div class="image1">
                    <img src="assets/images/resort1.jpg" alt="resort1">
                </div>
                <div class="image2">
                    <img src="assets/images/resort2.jpg" alt="resort2">
                </div>
                <div class="image3">
                    <img src="assets/images/resort3.jpg" alt="resort3">
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
                        <img src="assets/images/room_small.jpeg" alt="room1">
                        <p>HOTEL CONTINENTAL <i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i></p>
                    </div>
                    <div class="lower_content">
                        <div class="content_alignment">
                            <h4>Small Room</h4>
                            <a class="fa fa-user-circle"> <span>1 GUEST</span></a>
                            <a class="fa fa-hotel"> <span>32m<sup>2</sup></span></a>
                            <p> All Small Rooms  are located on the ground floor of the hotel. Luxuriously
                                appointed with Pillowtop King Beds, mini bar, large screen HD TV and solid
                                timber furniture with marble tops, your stay in Continental will be more than
                                comfortable when you choose to stay with us.</p>
                            <div class="button">
                                <a href="/page/rentroom.html">BOOK NOW FROM 50$</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four_rooms">
                    <div class="square">
                        <img src="assets/images/room1.jpg" alt="room1">
                        <p>FAMILY ROOM <a class="#">BOOK FROM 120$ </a></p>
                    </div>
                    <div class="square">
                        <img src="assets/images/room2.jpg" alt="room1">
                        <p>DOUBLE ROOM <a class="#">BOOK FROM 130$ </a></p>
                    </div>
                    <div class="square">
                        <img src="assets/images/room3.jpg" alt="room1">
                        <p>LUXURY ROOM <a class="#">BOOK FROM 150$ </a></p>
                    </div>
                    <div class="square">
                        <img src="assets/images/room4.jpg" alt="room1">
                        <p>APARTMENT <a class="#">BOOK FROM 130$ </a></p>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
