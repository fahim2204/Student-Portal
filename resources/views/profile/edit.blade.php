@include('header')
@if (session()->get('uname') !== null)
    @yield('header-main-logged')
@else
    @yield('header-main')
@endif

<body class="bg-light">
    <div class="container edit-profile-container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-start my-4">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Basic Info</button>
                      <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                      <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Change Password</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                      <div class="tab-pane fade my-3 ms-2" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Full Name:</label>
                              <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address:</label>
                              <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Phone:</label>
                              <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Address:</label>
                              <input type="text" name="address" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>


                    </div>
                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">ghdfdfsd</div>
                      <div class="tab-pane fade ms-4 mt-4" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                           <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Old Password:</label>
                                <input type="password" name="oldpass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">New Password:</label>
                                <input type="password" name="newpass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Confirm Password:</label>
                                <input type="password" name="confirmpass" class="form-control">
                            </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    @include('footer')
