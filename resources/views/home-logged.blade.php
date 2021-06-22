<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-color: rgb(216, 219, 221);">
    <!-- Header Part -->
    {{-- @include('header-logged') --}}
    <div class="container bg-light rounded-4 px-4 fixed-top">
        <div class="row h-100 align-items-center">
            <div class="col-1">
                <span class="fa fa-hamburger fa-2x"></span>
            </div>
            <div class="col-3">
                <span class="fas fa-user-graduate fa-2x"></span>
                <h6 class="d-inline fw-bolder fs-4"><a class="text-decoration-none text-dark" href="/">Student Forum</a>
                </h6>
            </div>
            <div class="col-4">
                <input class="w-100 form-control" type="text" name="search" id="search">
            </div>
            <div class="col-2 text-center p-3">
                <button class="bg-transparent border-0" onclick="return ShowNotification()">
                    <span class="far fa-bell fa-2x"></span>
                </button>
            </div>
            <div class="col-2 border border-info rounded-1 p-1 d-flex m-0" onclick="return ShowProfileSec()">
                <div class="col-3 text-left align-self-center"><span class="fas fa-user-alt fa-2x"></span></div>
                <div class="col-8">
                    <div>Fahim Faisal</div>
                    <div class="text-muted" style="font-size: 14px">Admin</div>
                </div>
                <div class="col-1 align-self-center pe-1">
                    <div><i class="fas fa-sort-down"></i></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Profile Pop up Section --}}
    <div class="container shadow-lg bg-light rounded-1 fixed-top" id="profile-sec"
        style="width: 190px; top: 66px; left:68vw;display: none;">

        <div class="d-flex m-1 hover-overlay">
            <div class="col-2 text-left align-self-center">
                <i class="far fa-user-circle"></i>
            </div>
            <div class="col-10">
                <div>
                   Profile
                </div>
            </div>
        </div>
        <hr class="m-1 p-0">

        <div class="d-flex m-0 hover">
            <div class="col-2 text-left align-self-center">
                <i class="fas fa-cogs"></i>
            </div>
            <div class="col-10">
                <div>
                   User Setting
                </div>
            </div>
        </div>
        <hr class="m-1 p-0">

        <div class="d-flex m-0 hover">
            <div class="col-2 text-left align-self-center">
                <i class="far fa-question-circle"></i>
            </div>
            <div class="col-10">
                <div>
                   Help Center
                </div>
            </div>
        </div>
        <hr class="m-1 p-0">

        <div class="d-flex m-0 hover">
            <div class="col-2 text-left align-self-center">
                <i class="fas fa-sign-out-alt"></i>
            </div>
            <div class="col-10">
                <div>
                   Logout
                </div>
            </div>
        </div>

    </div>




    {{-- Notification Container --}}
    <div class="container shadow-lg bg-light rounded-3 fixed-top" id="notification-sec"
        style="width: 320px; top: 70px; left:50vw;display: none;">
        <h4 class="text-center">Notification</h4>
        <hr class="m-0 p-0">

        @for ($i = 0; $i < 6; $i++)
            {{-- Single notification Items --}}
            <div class="d-flex m-0 hover">
                <div class="col-2 text-left align-self-center"><img class="rounded-circle"
                        src="https://picsum.photos/id/{{ $i * 100 }}/40" /></div>
                <div class="col-10">
                    <div>
                        <span class="fw-bold">Fahim Faisal</span>
                        <span>reacted to your post</span>
                    </div>
                    <div class="text-muted" style="font-size: 14px">10 mins ago</div>
                </div>
            </div>
            <hr class="m-0 p-0">
        @endfor

        <div class="text-center w-25 mx-auto">View All</div>

    </div>


    <!-- Main Body Construction -->
    <div class="container" style="margin-top: 75px">
        <div class="row">
            <!-- Left Main body Section -->
            <div class="col-md-9 col-sm-12">
                <!-- Quetion Posting section -->
                <div class="row border bg-light rounded-1">
                    <div class="row align-items-center g-0">
                        <div class="col-1 text-center">
                            <!-- Will change this picture dynamically -->
                            <a class="text-dark" href="#profile"><span class="fas fa-user-circle fa-2x"></span></a>
                        </div>
                        <div class="col-9 pe-5">
                            <input class="form-control fs-6 my-2" type="text" name="postBox" id="postBox"
                                placeholder="What is your question ?">
                        </div>
                        <div class="col-2"></div>
                    </div>

                </div>
                <!-- Filter Section -->
                <div class="row border bg-light rounded-1 mt-2 py-1">
                    <div class="col-3 text-center">
                        <button type="button" class="btn-sm btn-outline-dark border-0 rounded-3 active"><i
                                class="far fa-clock me-2"></i>New</button>
                    </div>
                    <div class="col-3 text-center">
                        <button type="button" class="btn-sm btn-outline-dark border-0 rounded-3"><i
                                class="fas fa-fire-alt me-2"></i>Hot</button>
                    </div>
                    <div class="col-3 text-center">
                        <button type="button" class="btn-sm btn-outline-dark border-0 rounded-3"><i
                                class="fas fa-comment-alt me-2"></i>Comment</button>
                    </div>
                    <div class="col-3 text-center">
                        <button type="button" class="btn-sm btn-outline-dark border-0 rounded-3"><i
                                class="fas fa-bacon me-2"></i>Trending</button>
                    </div>
                </div>

                <!-- All Posts Section -->
                @for ($i = 0; $i < 6; $i++)
                    <div class="row border bg-light rounded-1 mt-2 py-1">
                        <div class="row g-0">
                            <!-- POst info section -->
                            <div class="col-12 col-lg-8 d-flex align-items-center ms-2 mb-1">
                                <div class="text-primary">Category Name</div>
                                <div class="mx-1">|</div>
                                <div class="lh-sm text-muted align-self-end me-1">Posted By</div>
                                <a href="/profile" class="fs-6 text-success me-1 text-decoration-none">User Name</a>
                                <div class="lh-sm text-danger align-self-end">3 hours ago</div>
                            </div>
                            <!-- Post header section  -->
                            <div class="col-12 ps-2 border-top">
                                <div class="fs-4 fw-bold my-1">Lorem ipsum dolor sit amet consectetur.</div>
                            </div>
                            <div class="ms-3 pe-3 col-12 mb-2">
                                <div class="lh-sm text-dark text-wrap"><a class="text-decoration-none text-dark"
                                        href="/post">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Repellendus,
                                        tenetur facilis. Animi mollitia dolorum tenetur, voluptas nesciunt similique a
                                        ab
                                        dignissimos, architecto omnis nobis. Tenetur rerum nobis explicabo corporis ex
                                        quae
                                        esse recusandae obcaecati dolorem perferendis, incidunt expedita provident
                                        aliquid
                                        distinctio in, eos facilis voluptate doloribus similique? Sed sunt alias dolores
                                        adipisci, nobis ratione soluta quibusdam molestias quam iste labore ipsa ducimus
                                        saepe totam milique! Ratione impedit rem quasi
                                        hic officiis quidem obcaecati explicabo quis alias dicta officia saepe natus
                                        numquam, optio accusamus voluptatibus deserunt dolores. Sit tenetur
                                        exercitationem
                                        voluptate illo dolores ullam aspernatur tempora, quaerat molestias reiciendis,
                                        ea
                                        provident sint suscipit in asperiores id modi accusamus error sed soluta. Hic
                                        asperiores odio mollitia iste?</a></div>
                            </div>
                            <div class="col-8 d-flex align-items-center border-top p-1 ">
                                <div class="border border-0 bg-info px-2" style="border-radius: 30px;"><i
                                        class="fas fa-arrow-alt-circle-up me-1"></i>3.5K <i class="text-muted">|</i><i
                                        class="fas fa-arrow-alt-circle-down ms-1"></i></div>
                                <div class="mx-3"><i class="fas fa-comment-dots me-1"></i>741 Comments</div>
                                <div class="me-3"><i class="fas fa-eye me-1"></i>741 Views</div>
                            </div>
                            <div class="col-4 justify-content-end d-flex align-items-center border-top p-1 ">
                                <div class="mx-3"><i class="far fa-heart me-1"></i></i>Favourite</div>
                                <div class="me-3"><i class="fas fa-share me-1"></i>Share</div>
                                <div class="me-3"><i class="fas fa-ellipsis-h me-1"></i></div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Right Aside Section -->
            <div class="col-md-3 col-sm-12 ps-2 g-0">

                @for ($i = 0; $i < 4; $i++)
                    <div class="ca rd border rounded-1 mb-2">
                        <h6 class="card-header bg-info">Top-Contributor</h6>
                        <div class="card-body p-0">
                            <table class="table table-sm table-primary table-striped table-hover mb-0">
                                <caption class="py-0"><a
                                        class="btn-info d-block text-center text-white text-decoration-none rounded-1"
                                        href="#">View All</a> </caption>
                                <tbody>
                                    <tr class="align-items-center">
                                        <th scope="row">1</th>
                                        <td style="width:35px;">
                                            <div class="rounded-4 bg-info">
                                                <span class="fas fa-user-circle fa-2x"></span>
                                            </div>

                                        </td>
                                        <td>Fahim Faisal <span class="badge bg-secondary text-danger ms-2">^</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td style="width:35px;">
                                            <div class="rounded-4 bg-info">
                                                <span class="fas fa-user-circle fa-2x"></span>
                                            </div>
                                        </td>
                                        <td>Thornton <span class="badge bg-secondary text-danger ms-2">^</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td style="width:35px;">
                                            <div class="rounded-4 bg-info">
                                                <span class="fas fa-user-circle fa-2x"></span>
                                            </div>
                                        </td>
                                        <td>Thornton <span class="badge bg-secondary text-danger ms-2">^</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                @endfor

            </div>

        </div>
    </div>

















    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js "
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js "
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous ">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js "
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT " crossorigin="anonymous ">
    </script>

    <script>
        function ShowNotification() {
            //alert("helooo");
            var notif = document.getElementById("notification-sec");
            if (notif.style.display == "none") {
                notif.style.display = "block"
            } else {
                notif.style.display = "none"
            }
        }

        function ShowProfileSec() {
            //alert("helooo");
            var notif = document.getElementById("profile-sec");
            if (notif.style.display == "none") {
                notif.style.display = "block"
            } else {
                notif.style.display = "none"
            }
        }
    </script>


</body>

</html>
