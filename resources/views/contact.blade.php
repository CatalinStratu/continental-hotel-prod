<x-app-layout>
    <x-slot name="content">
        <div id="contact_image_container">
            <h3>Contact Us</h3>
            <p>We keep people together and things simple.</p>
        </div>
        <section id="overall_contact_details">
            <div class="text_container">
                <div class="col">
                    <div class="col_row">
                        <h5 class="fa fa-location-arrow"> Adress</h5>
                        <p> Mihai Viteazul 4, Suceava, Romania.</p>
                    </div>
                    <div class="col_row">
                        <h5 class="fa fa-phone"> Telephone</h5>
                        <p> +(40)799387932</p>
                    </div>
                </div>
                <div class="col_2">
                    <div class="col_row">
                        <h5 class="fa fa-fax"> Fax</h5>
                        <p> +90 212 809 00 99</p>
                    </div>
                    <div class="col_row">
                        <h5 class="fa fa-envelope-o"> E-mail</h5>
                        <p> booking@continental.com</p>
                    </div>
                </div>
            </div>
            <div class="big_container">
                <div class="quickmessage_container">
                    <form action="{{route('contact.post')}}" method="POST" id="mail">
                        @csrf
                        @method('POST')
                        <h5>Get in touch with us</h5>
                        <input type="text" id="myName" name="name" placeholder="Your full name." required>
                        <input type="text" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email adress." required>
                        <textarea id="subject" name="message" placeholder="Write a message." required></textarea>
                        <div class="submit-button">
                            <input type="submit" value="Send your message">
                        </div>
                    </form>
                </div>
                <div class="frequently_container">
                    <h5>Frequently Asked Questions</h5>
                    <p>Below, you will find a list of the questions most frequently asked by our guests.</p>
                    <a class="fa fa-plus-square collaps"><span> Check-in time?</span></a>
                    <div class="answer">
                        <p>As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we‘ll do our best to have your room available.</p>
                    </div>
                    <a class="fa fa-plus-square collaps"><span> Check-out time?</span></a>
                    <div class="answer">
                        <p>As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we’ll our best to satisfy your needs.</p>
                    </div>
                    <a class="fa fa-plus-square collaps"><span> Is Reception open 24 hours?</span></a>
                    <div class="answer">
                        <p>Yes, Reception service is available 24 hours.</p>
                    </div>
                    <a class="fa fa-plus-square collaps"><span> Can I leave my luggage?</span></a>
                    <div class="answer">
                        <p>Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.</p>
                    </div>
                    <a class="fa fa-plus-square collaps"><span> Internet connection?</span></a>
                    <div class="answer">
                        <p>A wireless internet connection is available throughout the hotel.  The guest rooms feature hi-speed web connectivity (both wireless and cabled).</p>
                    </div>
                    <a class="fa fa-plus-square collaps"><span> Can I pay by credit card?</span></a>
                    <div class="answer">
                        <p>Yes, we accept Visa, MasterCard, JCB, American Express and Diners Club cards.</p>
                    </div>
                    <a class="fa fa-plus-square collaps"><span> Do you have smoking and non-smoking rooms?</span></a>
                    <div class="answer">
                        <p>You can choice Smoking or Non-Smoking room as You prefer.</p>
                    </div>
                    <a class="fa fa-plus-square collaps"><span> Are pets allowed to stay at the hotel?</span></a>
                    <div class="answer">
                        <p>Yes, pets are most welcome. There is a daily charge of € 10</p>
                    </div>
                </div>
            </div>
            <div class="bloop_maps">
                <p>GET IN TOUCH</p>
                <h5>Feel free to contact us for any questions and doubts</h5>
            </div>
            <div class="maps_container">
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Suceava%20,%20continental&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
