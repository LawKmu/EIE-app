@extends('layouts.user_type.auth')

@section('content')
<div class="page-center mt-4" style="width: 90vw">
    <!--  event cover start -->
    <div class="event-cover light-cover">
        <div class="event-img bg-size blur-up lazyloaded" style="background-image: url(https://www.cmc.ac.ma/sites/default/files/2022-12/kv-aboutlaayoune.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
            <div class="event-content">
                <h1>Co working space</h1>
            </div>
            <div class="cover-img-detail">
                <h3>Reservation du sale</h3>
            </div>
        </div>
    </div>
    <!--  event cover end -->

    <!-- Reservation form -->
    <div class="event-category music-slider-section section-t-space d-block">
        @unless(session()->has('foundRes'))
        <form class="mb-3" action={{Route('find-reservation')}} method="post" >
            @csrf
            <label for="coworking-space" class="input-label">Space:</label>
            <select name="space" id="coworking-space" class="form-select" style="padding: 8px;">
                <option value="coworking-space">CoWorking Space</option>
                
            </select>

            <label for="start-date" class="input-label">Date:</label>
            <input type="date" name="date" id="start-date" class="form-control" aria-label="Date" min="{{ now()->addDay()->format('Y-m-d') }}" style="padding: 8px;">

            <div class="d-flex">
                <div class="w-50">
                    <label for="start-time" class="input-label">Start Time:</label>
                    <input type="time" name="start-time" id="start-time" class="form-control" aria-label="Start Time" style="padding: 8px;">
                </div>
                <div class="w-50">
                    <label for="end-time" class="input-label">End Time:</label>
                    <input type="time" name="end-time" id="end-time" class="form-control" aria-label="End Time" style="padding: 8px;">
                </div>
            </div>

            
            
            <button type="submit" class="btn btn-primary mt-2">Search</button>
        </form>
        @endunless
        @if(session()->has('foundRes'))
    @if(session('message') === 'Reservation found')
        <div class="alert alert-danger" role="alert">
            The Sale is already reserved. You cannot make another reservation.
        </div>
    @elseif(session('message') === 'No reservation found' || session()->has('users'))
        <h3 class="mt-2">List Presence</h3>
        <form action="{{ route('users.search') }}" method="GET" class="d-flex mb-4">
            @csrf
            <input class="form-control" type="text" name="search" placeholder="Search...">
            <button class="btn btn-primary mb-0" type="submit">Search</button>
        </form>
        @if(session()->has('users'))
            <table id="usersTable" class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Pole</th>
                        <th>Groupe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('users') as $user)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{ $user->nom }}</td>
                            <td>{{ $user->prenom }}</td>
                            <td>{{ $user->pole }}</td>
                            <td>{{ $user->groupe }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" style="float: right;">Submit</button>
        @endif
    @endif
@endif


            
    

        
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const startDateInput = document.getElementById('start-date');

        // Function to check if a given date is a weekend (Saturday or Sunday)
        function isWeekend(date) {
            const day = date.getDay();
            return day === 0 || day === 6;
        }

        // Disable weekends in the date picker
        function disableWeekends() {
            const currentDate = new Date(startDateInput.value);
            if (isWeekend(currentDate)) {
                // If the selected date is a weekend, clear the input value
                startDateInput.value = '';
            }
        }

        // Event listener for input change
        startDateInput.addEventListener('input', function() {
            disableWeekends();
        });

        // Call disableWeekends initially
        disableWeekends();
    });

    function addUser() {
        // Clone the first user input fields
        const userInputs = document.querySelectorAll('.mb-3 .col-lg-6');
        const newUserInputs = userInputs[0].cloneNode(true);

        // Append the cloned inputs after the existing inputs
        document.querySelector('.mb-3 .row').appendChild(newUserInputs);
    }
</script>

@endsection
