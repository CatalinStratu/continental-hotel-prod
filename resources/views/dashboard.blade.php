<x-dashboard-layout>
    <x-slot name="content">
        <div class="reservations">
            <div class="header">
                <div class="label">MY BOOKINGS</div>
                <hr>
                <div class="table-header">
                    <div class="parameter center">PDF</div>
                    <div class="parameter">ROOM</div>
                    <div class="parameter">TYPE</div>
                    <div class="parameter">PRICE</div>
                    <div class="parameter">DATE</div>
                </div>
            </div>
            <hr>

            <div class="table-row">
                <div class="value center"><a href="" class="fas fa-file-alt user"></a></div>
                <div class="value name">Room 0.1</div>
                <div class="value">Single</div>
                <div class="value">€150</div>
                <div class="value short">01.05.2021 - 02.05.2021</div>
                <div class="parameter cancel-booking"><a href="">CANCEL</a></div>
            </div>

            <div class="table-row">
                <div class="value center"><a href="" class="fas fa-file-alt user"></a></div>
                <div class="value name">Room 0.1</div>
                <div class="value">Single</div>
                <div class="value">€150</div>
                <div class="value short">01.05.2021 - 02.05.2021</div>
                <div class="parameter cancel-booking"><a href="">CANCEL</a></div>
            </div>
            <hr>

        </div>
    </x-slot>
</x-dashboard-layout>
