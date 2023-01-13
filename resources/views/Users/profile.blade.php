 @extends('layouts.Artisan.app')
 @section('content')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Profile</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{ route('artisan') }}">Home</a></li>
             <li class="breadcrumb-item active">User Profile</li>
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

               <h3 class="profile-username text-center">{{ Auth::user()->profile->fullname }}</h3>

               <p class="text-muted text-center">{{ Auth::user()->profile->profession }}</p>

               {{-- <ul class="list-group list-group-unbordered mb-3">
                 <li class="list-group-item">
                   <b>Followers</b> <a class="float-right">1,322</a>
                 </li>
                 <li class="list-group-item">
                   <b>Following</b> <a class="float-right">543</a>
                 </li>
                 <li class="list-group-item">
                   <b>Friends</b> <a class="float-right">13,287</a>
                 </li>
               </ul> --}}


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
                 B.S. in Computer Science from the University of Tennessee at Knoxville
               </p>

               <hr>

               <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

               <p class="text-muted">{{ Auth::user()->profile->location }}</p>

               <hr>

               <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

               <p class="text-muted">
                 <span class="tag tag-danger">UI Design</span>
                 <span class="tag tag-success">Coding</span>
                 <span class="tag tag-info">Javascript</span>
                 <span class="tag tag-warning">PHP</span>
                 <span class="tag tag-primary">Node.js</span>
               </p>

               <hr>

               <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

               <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /.col -->
         <div class="col-md-9">
           <div class="card">
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show px-3" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show px-3 py-3" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
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
                            <input type="text" required value="{{ Auth::user()->profile->fullname }}" class="form-control" name="fullname" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" required value="{{ Auth::user()->profile->email }}" class="form-control" name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Contact 1</label>
                          <div class="col-sm-10">
                            <input type="number" required class="form-control" value="{{ Auth::user()->profile->contact_one }}" name="contact_one" placeholder="Contact One">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Contact 2</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ Auth::user()->profile->contact_two }}" name="contact_two" placeholder="Contact 2">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Gender</label>
                          <div class="col-sm-10">
                         <select name="gender" required class="form-control">
                            <option value="{{ Auth::user()->profile->gender }}">{{ Auth::user()->profile->gender }}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                         </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Work Address</label>
                          <div class="col-sm-10">
                            <textarea type="text" value="{{ Auth::user()->profile->work_address }}" class="form-control" name="work_address" required placeholder="Address"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Marital Status</label>
                          <div class="col-sm-10">
                        <select name="marital_status" required class="form-control">
                            <option value="{{ Auth::user()->profile->marital_status }}">{{ Auth::user()->profile->marital_status }}</option>
                            <option value="Single">Single</option>
                            <option value="Engaged">Engaged</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Date Of Birth</label>
                          <div class="col-sm-10">
                            <input class="form-control" value="{{ Auth::user()->profile->birth_date }}" required type="date" name="birth_date" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="" class="col-sm-2 col-form-label">Years Of Experience</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{ Auth::user()->profile->yrs_of_experience }}" required name="yrs_of_experience" placeholder="Years Of Experience"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Location</label>
                          <div class="col-sm-10">
                            <select name="location" class="form-control">
                                <option value="{{ Auth::user()->profile->location }}">{{ Auth::user()->profile->location }}</option>
                                @foreach ($locations as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                              </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">State</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"  name="state_of_origin" placeholder="Skills">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Profession</label>
                          <div class="col-sm-10">
                            <select name="profession" class="form-control">
                                <option value="{{ Auth::user()->profile->profession }}">{{ Auth::user()->profile->profession }}</option>

                                @foreach ($professions as $item)
                                <option value="{{ $item->title }}">{{ $item->title }}</option>

                                @endforeach
                            </select>
                              </div>
                        </div>



                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
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
                    <form class="form-horizontal" method="POST" action="{{ route('artisan.details') }}">
                        @csrf
                     <div class="form-group row">
                       <label for="inputName" class="col-sm-2 col-form-label">User Name</label>
                       <div class="col-sm-10">
                         <input type="text" value="{{ Auth::user()->name }}" class="form-control" name="name" placeholder="Name">
                       </div>
                     </div>
                     <div class="form-group row">
                       <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                         <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Email">
                       </div>
                     </div>


                     <div class="form-group row">
                       <div class="offset-sm-2 col-sm-10">
                         <button type="submit" class="btn btn-danger">Submit</button>
                       </div>
                     </div>
                   </form>
                 </div>
                 <div class="tab-pane" id="password">
                   <form class="form-horizontal" method="POST" action="{{ route('artisan.password') }}">
                    @csrf
                     <div class="form-group row">
                       <label for="inputName" class="col-sm-2 col-form-label">Current Password</label>
                       <div class="col-sm-10">
                         <input type="password" value="" class="form-control" name="oldpassword" placeholder="**********">
                       </div>
                     </div>
                     <div class="form-group row">
                       <label for="" class="col-sm-2 col-form-label">New Password</label>
                       <div class="col-sm-10">
                         <input type="password" class="form-control"  name="new_password" placeholder="**********">
                       </div>
                     </div>
                     <div class="form-group row">
                       <label for="" class="col-sm-2 col-form-label">Confirm Password</label>
                       <div class="col-sm-10">
                         <input type="password" class="form-control"  name="confirm_password" placeholder="**********">
                       </div>
                     </div>


                     <div class="form-group row">
                       <div class="offset-sm-2 col-sm-10">
                         <button type="submit" class="btn btn-danger">Submit</button>
                       </div>
                     </div>
                   </form>
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
