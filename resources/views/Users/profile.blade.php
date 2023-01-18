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
                @if (Auth::user()->profile->photo == null)
                <img class="profile-user-img img-fluid img-circle"
                     src="/AdminUi/dist/img/user4-128x128.jpg"
                     alt="User profile picture">
                @else
                <img class="profile-user-img img-fluid img-circle"
                src="{{ asset('/storage/Profile/' . Auth::user()->profile->photo) }}"
                alt="User profile picture">

                @endif
               </div>

               <h3 class="profile-username text-center">{{ Auth::user()->profile->fullname }}</h3>
               <p class="text-muted text-center">{{ Auth::user()->profile->profession }}</p>
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
               {{Auth::user()->profile->education}}
               </p>

               <hr>

               <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

               <p class="text-muted">{{ Auth::user()->profile->location }}</p>          <hr>

               <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

               <p class="text-muted"> {{Auth::user()->profile->notes}}</p>
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
                            <textarea type="text" value="{{ Auth::user()->profile->work_address }}" class="form-control" name="work_address" required placeholder="Address">{{ Auth::user()->profile->work_address }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">About Me</label>
                          <div class="col-sm-10">
                            <textarea type="text" value="{{ Auth::user()->profile->notes }}" class="form-control" name="notes" required placeholder="About Me">{{ Auth::user()->profile->notes }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">Education</label>
                          <div class="col-sm-10">
                                <select name="education" required class="form-control">
                                    <option value="{{ Auth::user()->profile->education }}">{{ Auth::user()->profile->education }}</option>
                                    <option value="B.Sc">B.Sc</option>
                                    <option value="M.Sc">M.Sc</option>
                                    <option value="Phd">Phd</option>
                                    <option value="SSCE">SSCE</option>
                                    <option value="HND">HND</option>
                                    <option value="OND">OND</option>
                                    <option value="NCE">NCE</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="RN">RN</option>
                                    <option value="Other">Other</option>
                                </select>
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
                          <label for="" class="col-sm-2 col-form-label">Country</label>
                          <div class="col-sm-10">
                            <select name="nationality" class="form-control bg_input" required>
                            <option value="{{ Auth::user()->profile->nationality }}">{{ Auth::user()->profile->nationality }}</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                            </option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean
                                Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic
                            </option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                            </option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The
                                Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands
                                (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern
                                Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and
                                Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican
                                City
                                State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                            </option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea,
                                Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's
                                Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                            </option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">
                                Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia,
                                Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands
                            </option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian
                                Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                            </option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                            </option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe
                            </option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South
                                Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                            </option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United
                                Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands
                            </option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States
                                Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British
                            </option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for=" " class="col-sm-2 col-form-label">State Of Origin</label>
                          <div class="col-sm-10">
                            <select name="state_of_origin" class="form-control">
                                <option value="{{ Auth::user()->profile->state_of_origin }}">{{ Auth::user()->profile->state_of_origin }}</option>
                                @foreach ($states as $state)
                                <option value="{{ $state->name }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <div class="text-center">
                                @if (Auth::user()->profile->photo == null)
                                <img class="profile-user-img img-fluid img-circle"
                                        src="/AdminUi/dist/img/user4-128x128.jpg"
                                        alt="User profile picture">
                                @else
                                <img class="profile-user-img img-fluid"
                                src="{{ asset('/storage/Profile/' . Auth::user()->profile->photo) }}"
                                alt="User profile picture">

                                @endif
                                </div>


                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                      </div>
                    <hr>

                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('artisan.profile.photo') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Profile Photo</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" placeholder="Name">
                            </div>
                          </div>
                        <hr>
                        {{-- <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Certification (if Any)</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" name="certification" placeholder="Name">
                            </div>
                          </div> --}}

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
