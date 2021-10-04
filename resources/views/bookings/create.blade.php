@extends('layouts.app')
@section('content')

    @if (Auth::check())
    @else
    <link rel="stylesheet" href="css/global.css">
        <div class="container">
            @endif

            <div class="row col-md-12 section-heading">
                <h2>Create booking</h2>
                <hr>
            </div>

            <div class="row col-md-12">
                <p>Please complete the form below and make a payment to secure your place on a course.</p>
            </div>

            <form method="POST" action="/bookings">
                @csrf
                <div class="row">
                    <h4>Course Details</h4>

                    <div class="col-md-12">
                        <label for="course_id">Course</label>
                        <select id="course_id" name="course_id" class="form-control"
                                @error('course_id') is-invalid @enderror required onchange="this.form.submit()">
                            @foreach ($courses as $course)
                                <option {{ $course->id == $old_id ? 'selected' : '' }}  value="{{$course->id}}" >{{$course->course_name}} {{$course->price}}  </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="coursedate_id" class="form-control-label">Select course date*</label>
                        <select name="coursedate_id" id="coursedate_id"
                                class="form-control @error('coursedate_id') is-invalid @enderror"
                                required>
                            <!-- {{--                            @if(course_name =)--}} -->
                            @foreach ($coursedates as $coursedate)
                                <!-- {{--                                @if()--}} -->
                                <option value="{{$coursedate->id}}">
                                    <!-- {{--@php echo ({{$coursedate->scheduled_date}})->format('d-mmm-Y') @endphp--}} -->
                                    {{$coursedate->scheduled_date}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label for="course_total">Course Total</label>
                        
                        <input type="number" class="form-control @error('course_total') is-invalid @enderror"
                               name="course_total" id="course_total" value="1111" readonly>

                    </div>
                </div>

                <div class="row">
                    <h4>Attendee Details</h4>

                    <div class="col-md-6 col-sm-12">
                        <label for="first_name">First Name *</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                               name="first_name" id="first_name" value="{{ @old('first_name') }}" required>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="last_name">Last Name *</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                               id="last_name" name="last_name" value="{{ @old('last_name') }}" required>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="email">Email*</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{ @old('email') }}"
                               required/>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="phone">Phone number (mobile preferred)*</label>
                        <input class="form-control" type="text" name="phone" value="{{ @old('phone') }}" >
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="dob" class="form-control-label">Date of birth*</label>
                        <input class="form-control"
                               type="date" id="dob" name="dob"
                               min="1920-01-01" max="2021-01-01"
                               pattern="\d{4}-\d{2}-\d{2}"
                               value="{{ @old('dob') }}"
                               required>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="gender" class="form-control-label">Gender*</label>
                        <select name="gender" id="gender" class="form-control"
                                required>
                            <option value="Not specified"></option>
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                               name="company_name" id="company_name" value="{{ @old('company_name') }}" >
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="street">Street*</label>
                        <input type="text" class="form-control @error('street') is-invalid @enderror"
                               name="street" id="street" value="{{ @old('street') }}" required>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="suburb">Suburb*</label>
                        <input type="text" class="form-control @error('suburb') is-invalid @enderror"
                               name="suburb" id="suburb" value="{{ @old('suburb') }}" required>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="city">City*</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                               name="city" id="city" value="{{ @old('city') }}" required>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="postcode">Postcode*</label>
                        <input type="text" class="form-control @error('postcode') is-invalid @enderror"
                               name="postcode" id="postcode" value="{{ @old('postcode') }}" required>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="country">Country*</label>
                        <input type="text" class="form-control @error('country') is-invalid @enderror"
                               name="country" id="country" value="{{ @old('country') }}" required>
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <input id="card-holder-name" type="text">


                          <div class="w-1/ form-row"id="card-element"></div>

                    </div>

                    <div class="col-md-12">
                        <input type="checkbox" id="is_terms_agreed" name="is_terms_agreed" value="0">
                        <label for="is_terms_agreed">&nbspI have read and agree to the
                            <a href="/home/terms"
                               id="is_terms_agreed"
                               target="_blank" value="{{ @old('is_terms_agreed') }}" >Terms and Conditions</a></label><br>
                    </div>


                    <div class="form-button mt-3">
                        @if (Auth::check())
                            <input class="btn btn-primary" type="submit" value="Submit Booking">
                            <a class="btn btn-outline-dark" href="/bookings">Cancel</a>
                        @else
                            <input class="btn btn-info" type="submit" value="Proceed to payment">
                            <a class="btn btn-outline-dark" href="/">Cancel</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

        <script src="https://js.stripe.com/v3/"></script>

        <script>


        const stripe = Stripe('{{ env("STRIPE_KEY") }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
        const cardHolderName = document.getElementById('card-holder-name');
        const form = document.getElementById('stripe');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: { name: cardHolderName.value }
                }
            );
            if (error) {
                // Display "error.message" to the user...
            } else {
                console.log('Card verified successfully');
                console.log(paymentMethod.id);
                document.getElementById('pmethod').setAttribute('value', paymentMethod.id);
                form.submit();
            }
        });


        </script>
@endsection
