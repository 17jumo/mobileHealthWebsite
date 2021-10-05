home.show.blade



<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <h6>title</h6>
        </div>
        <div class="col-md-4 col-sm-12">
            <h6>title</h6>
        </div>
        <div class="col-md-4 col-sm-12">
            <h6>title</h6>
        </div>
        <div class="col-md-4 col-sm-12">
            <h6>title</h6>
        </div>
        <div class="col-md-4 col-sm-12">
            <h6>title</h6>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="col-md-4 col-sm-12">
                <p>title</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p>title</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p>title</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p>title</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <p>field</p>
            </div>
        </div>
    </div>


<div class="row">
    @foreach($courses as $course)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">

            <div class="card card-body card-index">
                <img src="/images/heart.png"
                     alt="picture of course being held">
                <h5>{{$course->course_name}}</h5>
                <h6>Duration: {{$course->duration}}
                    @if($course->duration > 1)
                        days
                    @else
                        day
                    @endif
                </h6>
                <h6>Cost: ${{$course->price}}</h6>
                <p>{{$course->course_desc_short}}</p>
                <p><a href="/courses/1"><sub id="readmore">Read more</sub></a></p>

                <a href="/bookings/create" class="btn btn-info">Book now</a>

            </div>
        </div>
    @endforeach
</div>
</div>

