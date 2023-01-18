@extends('layouts.landingPage')
@section('index')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h2>Welcome to <span>Luper Artisan Hub</span></h2>
            <form action="{{ route('search') }}" method="GET" class="form-horizontal">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" id="search" name="artisan" placeholder="Who Are You Looking For?" class="form-control" />
                               </div>

                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" id="location" name="location" placeholder="Where?" class="form-control" />
                             </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                             <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
                </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(/LandingPage/assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/LandingPage/assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/LandingPage/assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/LandingPage/assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/LandingPage/assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

  <script type="text/javascript">
      var route = "{{ url('query-search') }}";
      $('#search').typeahead({
          source: function (query, process) {
              return $.get(route, {
                  term: query
              }, function (data) {
                  return process(data);
              });
          }
      });
  </script>
  <script type="text/javascript">
      var direction = "{{ url('query-location') }}";
      $('#location').typeahead({
          source: function (query, process) {
              return $.get(direction, {
                  term: query
              }, function (data) {
                  return process(data);
              });
          }
      });
  </script>
@endsection
