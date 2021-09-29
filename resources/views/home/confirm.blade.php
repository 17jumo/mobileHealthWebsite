@extends('layouts.app')
@section('content')

@if (Auth::check())
</div>
</div>
@endif

<!-- Page Content -->
<!-- Banner Starts Here -->

<!-- Featured Starts Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h2>Thank you for booking with Mobile Health.</h2>

            <p>You have booked for:</p>
            <p>Name</p>
            <p>Date</p>
            <p>Course</p>

            <p>The course will be held at xxxxxxxxxxxxx and will commence at 9am.</p>

            <p>If you have any questions, please feel free to contact us.</p>

            <p><a href="/home/terms" id="is_terms_agreed" target="_blank">Terms and conditions</a> are available.</p>
            </div>
        </div>

        </div>
    </div>
</div>
</div>


@endsection
