@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Edit booking</h2>
                    <hr>
                </div>


                <div class="form-content">
                    <form method="POST" action="/bookings/{{$booking->id}}">
                        @method('PUT')
                        @csrf

                        <div class="row">

                            <h4>Course Details</h4>
                            <div class="col-md-6">
                                <label for="invoice_total">Course total *</label>
                                <input type="number" class="form-control @error('invoice_total') is-invalid @enderror"
                                       name="invoice_total" id="invoice_total" value="" required>
                            </div>
                        </div>
                            <h4>Attendee Details</h4>

                            <div class="form-group col-12">
                                <label for="id">ID</label>
                                <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                                       name="id" value="{{$booking->id}}" readonly>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name">First Name *</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" id="first_name" value="{{$booking->first_name}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name">Last Name *</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                           id="last_name" name="last_name" value="{{$booking->last_name}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email*</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                           value="{{$booking->email}}" required/>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone">Phone number (mobile preferred)*</label>
                                    <input class="form-control" type="text" name="phone" value="{{$booking->phone}}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="actName" class="form-control-label">Date of birth*</label>
                                    <input class="form-control"
                                           type="date" id="dob" name="dob"
                                           min="1920-01-01" max="2021-01-01"
                                           pattern="\d{4}-\d{2}-\d{2}"
                                           value="{{$booking->dob}}"
                                           required>
                                </div>

                                <div class="col-md-6">
                                    <label for="gender" class="form-control-label">Gender*</label>
                                    <select name="gender" id="gender" class="form-control"
                                            value="{{$booking->gender}}" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="company_name">Company Name *</label>
                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                           name="company_name" id="company_name" value="{{$booking->company_name}}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="add_street">Street Address *</label>
                                    <input type="text" class="form-control @error('add_street') is-invalid @enderror"
                                           name="add_street" id="add_street" value="{{$booking->add_street}}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="add_suburb">Suburb *</label>
                                    <input type="text" class="form-control @error('add_suburb') is-invalid @enderror"
                                           name="add_suburb" id="add_suburb" value="{{$booking->add_suburb}}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="add_city">City*</label>
                                    <input type="text" class="form-control @error('add_city') is-invalid @enderror"
                                           name="add_city" id="add_city" value="{{$booking->add_city}}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="add_postcode">Postcode *</label>
                                    <input type="text" class="form-control @error('add_postcode') is-invalid @enderror"
                                           name="add_postcode" id="add_postcode" value="{{$booking->add_postcode}}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="add_country">Country *</label>
                                    <input type="text" class="form-control @error('add_country') is-invalid @enderror"
                                           name="add_country" id="add_country" value="{{$booking->add_country}}" required>
                                </div>


                                <div class="form-button mt-3">
                                    <input class="btn btn-primary" type="submit" value="Save">
                                    <a class="btn btn-warning" href="/bookings/">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


