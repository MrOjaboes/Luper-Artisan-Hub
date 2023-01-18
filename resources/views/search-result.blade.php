@extends('layouts.searchPage')
@section('index')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-5">
                <input type="text" name="artisan" value="{{ request()->get('artisan') }}" class="form-control" placeholder="Who are you looking For?" id="name" required>
              </div>
              <div class="form-group col-md-5">
                <input type="email" class="form-control" placeholder="Where?" name="email" id="email" required>
              </div>
              <div class="form-group col-md-2">
                <button type="submit" class="btn btn-danger">Search</button>
             </div>
            </div>


          </form>

        </div>

      </div>
    </div>

  </section>
 <!-- ======= Team Section ======= -->
 <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Search Result(s)</h2>
          </div>

      <div class="row">
        @foreach ($result as $item)

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="/SearchUi/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$item->fullname}}</h4>
              <span>{{ $item->profession }}</span>
              <p>
                <ul class="list-group">
                    <li class="list-group-item">Contact :: {{ $item->contact_one }}</li>
                    <li class="list-group-item">Email :: {{ $item->email }}</li>
                    <li class="list-group-item">Location :: {{ $item->location }}, {{ $item->state_origin }}</li>
                    <li class="list-group-item">Yrs Of Exp. :: {{ $item->yrs_of_experience }} Yrs</li>
                </ul>
              </p>
        <a href="{{ route('search.details',$item->id) }}">Learn More</a>
            </div>
          </div>
        </div>
        @endforeach
 
      </div>

    </div>
  </section><!-- End Team Section -->

@endsection
