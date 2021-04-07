<x-dashboard-layout>
    <x-slot name="content">
        <div class="settings_forms">
            <h1 class="edit_employee_header">SETTINGS</h1>
            <hr>
            <form method="POST" action="{{ route('user.profile.update') }}" id="settings_form_1">
                @csrf
                @method('PUT')
                <div class="subtitle1">Change Details</div>
                <div class="element">
                    @error('name', 'updateProfileInformation')
                        <div class="warning">{{ $message }}</div>
                    @enderror
                <!-- <label for="names">Name</label> -->
                    <input type="text" value="{{old("name",Auth::user()->name)}}" name="name" spellcheck="false"
                           placeholder="Name" id="names" required>
                </div>
                <div class="element">
                    <!-- <label for="emails">Email</label> -->
                    <input type="email" value="{{old("email",Auth::user()->email)}}" name="email" spellcheck="false"
                           placeholder="Email" id="emails" required>
                </div>

                <div class="edit_employee_footer">
                    <!-- <button class="cancelBtn2" form="">Cancel</button> -->
                    <button type="update" form="settings_form_1" value="Submit">Update</button>
                </div>
            </form>
            <form action="{{route('user.password.update')}}" method="POST" id="settings_form_2">
                @csrf
                @method('POST')
                <div class="subtitle1">Change Password</div>
                <div class="element">
                    <!-- <label for="passwords">Password</label> -->
                    <input type="password" name="old_password" spellcheck="false" placeholder="Old Password" id="passwords" required>
                </div>
                <div class="element">
                    <!-- <label for="passwords">Password</label> -->
                    <input type="password" name="new_password" spellcheck="false" placeholder="New Password" id="passwords" required>
                </div>
                <div class="element">
                    <!-- <label for="passwords">Password</label> -->
                    <input type="password" name="new_password_confirmation" spellcheck="false" placeholder="Confirm New Password" id="passwords"
                           required>
                </div>

                <div class="edit_employee_footer">
                    <!-- <button class="cancelBtn2" form="">Cancel</button> -->
                    <button type="submit" form="settings_form_2" value="Submit">Update</button>
                </div>
            </form>
            <!-- <hr> -->
        </div>
    </x-slot>
</x-dashboard-layout>
