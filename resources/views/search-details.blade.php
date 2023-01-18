@extends('layouts.searchPage')
@section('index')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

<div class="card">
    <div class="card-body">
        <div class="row member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-6">
                <div class="pic">
                @if ($profile->photo == null)
                <img src="/SearchUi/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                    @else
                    <img src="{{ asset('/storage/Profile/' .$profile->photo) }}" class="img-fluid" alt="">                   
                @endif
                </div>

            </div>
            <div class="col-md-6">
                <div class="member-info">
                     <p>
                      <ul class="list-group">
                          <li class="list-group-item">Full Name :: {{ $profile->fullname }}</li>
                          <li class="list-group-item">Profession :: {{ $profile->profession }}</li>
                          <li class="list-group-item">Contact :: {{ $profile->contact_one }}</li>
                          <li class="list-group-item">Email :: {{ $profile->email }}</li>
                          <li class="list-group-item">Location :: {{ $profile->location }}, {{ $profile->state_origin }}</li>
                          <li class="list-group-item">Yrs Of Exp. :: {{ $profile->yrs_of_experience }} Yrs</li>
                      </ul>
                    </p>

                  </div>
            </div>
        </div>

    </div>
</div>
        </div>

      </div>
    </div>

  </section>
 <!-- ======= Team Section ======= -->
 <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Projects</h2>
          </div>


          <div class="row">
            @foreach ($projects as $item)
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
               <a href="{{ asset('/storage/Projects/' .$item->file) }}" target="_blanck" title="project Caption">
                <img src="{{ asset('/storage/Projects/' .$item->file) }}" class="img-thumbnail" height="200" width="" alt="">
            </a>
                
            </div>
            <div class="m-4">
                <h4>{{$item->title}}</h4>
                <p>{{$item->description}}</p>

            </div>
                
              
            </div>
            @endforeach

          </div>

    </div>
  </section><!-- End Team Section -->

@endsection
