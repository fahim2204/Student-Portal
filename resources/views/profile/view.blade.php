@include('header')
@if (session()->get('uname')!==null)
@yield('header-main-logged')
@else
@yield('header-main')
@endif

    <div class="container">
        <div class="main-body">
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile</li>
                  <li class="breadcrumb-item active" aria-current="page">{{$user->uname}}</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->

              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="StudentProfilePic" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>{{'@'.$user->uname}}</h4>
                          <p class="text-secondary mb-1">{{$user->type}}</p>
                          <button class="btn btn-primary">Follow</button>
                          <button class="btn btn-outline-primary">Message</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                        <span class="text-secondary">https://bootdey.com</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$user->$type->name}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$user->$type->email}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$user->$type->contact}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$user->$type->address}}
                        </div>
                      </div>

                      {{-- xyz will replace session uanme --}}
                      @if ($user->uname == session()->get('uname'))
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info " target="__blank" href="{{route('profile.edit')}}">Edit</a>
                        </div>
                      </div>
                      @endif

                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="container posts">
                      <!-- Single Post -->
                      <div class="row post mb-2">
                        <div class="col-4 col-lg-4">
                          <div class="row post-attr text-center">
                            <div class="col-4">
                              0<br />
                              <b>Likes</b>
                            </div>
                            <div class="col-4">
                              0<br />
                              <b>Answers</b>
                            </div>
                            <div class="col-4">
                              0<br />
                              <b>Views</b>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="container">
                            <h5><a href="">This is a question</a></h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam neque accusantium culpa,?</p>
                          </div>
                        </div>
                      </div>
                      <!-- Single Post end -->
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
@include('footer')
