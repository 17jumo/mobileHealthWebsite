@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>View Bookings</h2>
                    <hr>
                </div>

                <p>
                    <a class="btn btn-outline-primary mx-1 "
                       href="/bookings/create">Create new booking</a>
                </p>

                <div class="table-responsive">
                <table class="table table-striped" id="book-table">
                    <thead>
                    <tr>
                        <th scope="col" onclick="sortTable(0)">ID</th>
                        <th scope="col" onclick="sortTable(1)">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
{{--                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>--}}
                        <th scope="col">Phone Number</th>
                        <th scope="col">Company Name</th>
{{--                        <th scope="col">Street</th>
                        <th scope="col">Suburb</th>
                        <th scope="col">City</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Country</th>--}}
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Date</th>
                        <th scope="col">Course Total</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <th scope="row">{{$booking->id}}</th>
                            <td>{{$booking->first_name}} </td>
                            <td>{{$booking->last_name}}</td>
                            <td>{{$booking->email}}</td>
{{--                            <td>{{$booking->dob}}</td>
                            <td>{{$booking->gender}}</td>--}}
                            <td>{{$booking->phone}}</td>
                            <td>{{$booking->company_name}}</td>
    {{--                        <td>{{$booking->add_street}}</td>
                            <td>{{$booking->add_suburb}}</td>
                            <td>{{$booking->add_city}}</td>
                            <td>{{$booking->add_postcode}}</td>
                            <td>{{$booking->add_country}}</td>--}}
                            <td>{{$booking->course_name}} </td>
                            <td>{{$booking->course_date}} </td>
                            <td>${{$booking->course_total}} </td>
                            <td>
{{--                                <form action="/bookings/{{$booking->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-primary mx-1"
                                           href="/bookings/{{$booking->id}}">Show More</a>
                                        <a class="btn btn-success mx-1" href="/bookings/{{$booking->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-danger mx-1">Delete</button>
                                    @endauth
                                </form>--}}

                                <form action="/bookings/{{$booking->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    @auth
                                        <a class="btn btn-outline-primary mx-1 " href="/bookings/{{$booking->id}}">Show</a>
                                        <a class="btn btn-outline-success mx-1"
                                           href="/bookings/{{$booking->id}}/edit">Edit</a>
                                        <button type="submit" title="delete" class="btn btn-outline-secondary mx-1">
                                            Delete
                                        </button>
                                    @endauth
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

        <script>
            function sortTable(n) {
                var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                table = document.getElementById("book-table");
                switching = true;
                // Set the sorting direction to ascending:
                dir = "asc";
                /* Make a loop that will continue until
                no switching has been done: */
                while (switching) {
                    // Start by saying: no switching is done:
                    switching = false;
                    rows = table.rows;
                    /* Loop through all table rows (except the
                    first, which contains table headers): */
                    for (i = 1; i < (rows.length - 1); i++) {
                        // Start by saying there should be no switching:
                        shouldSwitch = false;
                        /* Get the two elements you want to compare,
                        one from current row and one from the next: */
                        x = rows[i].getElementsByTagName("TD")[n];
                        y = rows[i + 1].getElementsByTagName("TD")[n];
                        /* Check if the two rows should switch place,
                        based on the direction, asc or desc: */
                        if (dir == "asc") {
                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                // If so, mark as a switch and break the loop:
                                shouldSwitch = true;
                                break;
                            }
                        } else if (dir == "desc") {
                            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                // If so, mark as a switch and break the loop:
                                shouldSwitch = true;
                                break;
                            }
                        }
                    }
                    if (shouldSwitch) {
                        /* If a switch has been marked, make the switch
                        and mark that a switch has been done: */
                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                        switching = true;
                        // Each time a switch is done, increase this count by 1:
                        switchcount ++;
                    } else {
                        /* If no switching has been done AND the direction is "asc",
                        set the direction to "desc" and run the while loop again. */
                        if (switchcount == 0 && dir == "asc") {
                            dir = "desc";
                            switching = true;
                        }
                    }
                }
            }
        </script>
@endsection
