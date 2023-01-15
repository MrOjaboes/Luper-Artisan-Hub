@extends('layouts.Admin.app')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Artisan Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Artisan Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/AdminUi/dist/img/user4-128x128.jpg"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $profile->fullname }}</h3>

              <p class="text-muted text-center">{{ $profile->profession }}</p>



            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Education</strong>

              <p class="text-muted">
              {{$profile->education}}
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

              <p class="text-muted">{{ $profile->location }}</p>

              <hr>


              <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

              <p class="text-muted">
               {{$profile->notes}}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
             <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#photo" data-toggle="tab">Photos</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Password</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="profile">
                   <form class="form-horizontal" method="POST" action="{{ route('artisan.profile') }}">
                       @csrf
                       <div class="form-group row">
                         <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                         <div class="col-sm-10">
                           <input type="text" required readonly value="{{ $profile->fullname }}" class="form-control" name="fullname" placeholder="Name">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">Email</label>
                         <div class="col-sm-10">
                           <input type="email" required readonly value="{{ $profile->email }}" class="form-control" name="email" placeholder="Email">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">Contact 1</label>
                         <div class="col-sm-10">
                           <input type="number" required class="form-control" readonly value="{{ $profile->contact_one }}" name="contact_one" placeholder="Contact One">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">Contact 2</label>
                         <div class="col-sm-10">
                           <input type="number" class="form-control" readonly value="{{ $profile->contact_two }}" name="contact_two" placeholder="Contact 2">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="inputName2" class="col-sm-2 col-form-label">Gender</label>
                         <div class="col-sm-10">
                        <select name="gender" required class="form-control">
                           <option readonly value="{{ $profile->gender }}">{{ $profile->gender }}</option>
                           <option readonly value="Male">Male</option>
                           <option readonly value="Female">Female</option>
                        </select>
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">Work Address</label>
                         <div class="col-sm-10">
                           <textarea type="text" readonly value="{{ $profile->work_address }}" class="form-control" name="work_address" required placeholder="Address">{{ $profile->work_address }}</textarea>
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">Marital Status</label>
                         <div class="col-sm-10">
                       <select name="marital_status" readonly class="form-control">
                           <option value="{{ $profile->marital_status }}">{{ $profile->marital_status }}</option>

                       </select>
                         </div>
                       </div>


                       <div class="form-group row">
                         <label for="inputExperience" class="col-sm-2 col-form-label">Date Of Birth</label>
                         <div class="col-sm-10">
                           <input class="form-control" readonly value="{{ $profile->birth_date }}" required type="date" name="birth_date" />
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="" class="col-sm-2 col-form-label">Years Of Experience</label>
                         <div class="col-sm-10">
                           <input class="form-control" type="text" readonly value="{{ $profile->yrs_of_experience }} Yrs" required name="yrs_of_experience" placeholder="Years Of Experience"/>
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">Location</label>
                         <div class="col-sm-10">
                           <select name="location" readonly class="form-control">
                               <option readonly value="{{ $profile->location }}">{{ $profile->location }}</option>

                           </select>
                             </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">State</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="{{ $profile->state_of_origin }}"  name="state_of_origin" placeholder="Skills">
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for=" " class="col-sm-2 col-form-label">Profession</label>
                         <div class="col-sm-10">
                           <select name="profession" readonly class="form-control">
                               <option readonly value="{{ $profile->profession }}">{{ $profile->profession }}</option>

                           </select>
                             </div>
                       </div>
                     </form>



                </div>
                <div class="tab-pane" id="photo">
                   <form class="form-horizontal">

                       <div class="form-group row">
                           <label for="inputName2" class="col-sm-2 col-form-label">Profile Photo</label>
                           <div class="col-sm-10">
                             <input type="file" class="form-control" name="photo" placeholder="Name">
                           </div>
                         </div>
                       <hr>
                       <div class="form-group row">
                           <label for="inputName2" class="col-sm-2 col-form-label">Certification (if Any)</label>
                           <div class="col-sm-10">
                             <input type="file" class="form-control" name="certification" placeholder="Name">
                           </div>
                         </div>

                       <div class="form-group row">
                         <div class="offset-sm-2 col-sm-10">
                           <button type="submit" class="btn btn-danger">Submit</button>
                         </div>
                       </div>
                     </form>



                </div>

                <div class="tab-pane" id="settings">

                </div>
                <div class="tab-pane" id="password">

                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
