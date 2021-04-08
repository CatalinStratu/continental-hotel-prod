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
            @foreach ($appointments as $appointment)
                <div class="table-row">
                    <div class="value center"><a href="" class="fas fa-file-alt user"></a></div>
                    <div class="value">{{$appointment->room->name}}</div>
                    <div class="value">{{$appointment->type->name}}</div>
                    <div class="value">{{$appointment->type->price}} $</div>
                    <div class="value short"> {{ \Carbon\Carbon::parse($appointment->start)->format('d/m/Y')}} - {{ \Carbon\Carbon::parse($appointment->end)->format('d/m/Y')}}</div>
                    <div class="parameter cancel-booking"><a href="">CANCEL</a></div>
                </div>
            @endforeach
            <hr>
        </div>
    </x-slot>
</x-dashboard-layout>
