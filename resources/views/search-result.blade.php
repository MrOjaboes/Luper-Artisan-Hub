@extends('layouts.searchPage')
@section('index')
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
        <a href="">Learn More</a>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="/SearchUi/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>
                <ul class="list-group">
                    <li class="list-group-item">Contact ::</li>
                    <li class="list-group-item">Email ::</li>
                    <li class="list-group-item">Location ::</li>
                    <li class="list-group-item">Yrs Of Exp. ::</li>
                </ul>
              </p>
                  <a href=""> learn More</a>


            </div>
          </div>
        </div> --}}

      </div>

    </div>
  </section><!-- End Team Section -->

@endsection
