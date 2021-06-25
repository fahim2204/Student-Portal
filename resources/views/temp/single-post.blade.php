<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>

.card {
    background-color: #fff;
    border: none
}

.form-color {
    background-color: #fafafa
}

.card .form-control {
    height: 48px;
    border-radius: 25px
}

.card .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #35b69f;
    outline: 0;
    box-shadow: none;
    text-indent: 10px
}

.c-badge {
    background-color: #35b69f;
    color: white;
    height: 20px;
    font-size: 11px;
    width: 92px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2px
}

.comment-text {
    font-size: 13px
}

.wish {
    color: #35b69f
}

.user-feed {
    font-size: 14px;
    margin-top: 12px
}
    </style>
</head>

<body style="background-color: rgb(216, 219, 221);">
    <!-- Header Part -->
    @include('header')

    <!-- Main Body Construction -->
    <div class="container mt-2">
        <div class="row">
            <!-- Left Main body Section -->
            <div class="col-md-9 col-sm-12">
                <!-- All Posts Section -->
                <div class="row border bg-light rounded-1 py-1">
                    <div class="row g-0">
                        <!-- POst info section -->
                        <div class="col-12 col-lg-8 d-flex align-items-center ms-2 mb-1">
                            <div class="text-primary">Category Name</div>
                            <div class="mx-1">|</div>
                            <div class="lh-sm text-muted align-self-end me-1">Posted By</div>
                            <a href="#user-profile" class="fs-6 text-success me-1 text-decoration-none">User Name</a
                                href="#user-profile">
                            <div class="lh-sm text-danger align-self-end">3 hours ago</div>
                        </div>
                        <!-- Post header section  -->
                        <div class="col-12 ps-2 border-top">
                            <div class="fs-4 fw-bold my-1">Lorem ipsum dolor sit amet consectetur.</div>
                        </div>
                        <div class="ms-3 pe-3 col-12 mb-2">
                            <div class="lh-sm text-dark text-wrap"><a class="text-decoration-none text-dark"
                                    href="/post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus,
                                    tenetur facilis. Animi mollitia dolorum tenetur, voluptas nesciunt similique a ab
                                    dignissimos, architecto omnis nobis. Tenetur rerum nobis explicabo corporis ex quae
                                    esse recusandae obcaecati dolorem perferendis, incidunt expedita provident aliquid
                                    distinctio in, eos facilis voluptate doloribus similique? Sed sunt alias dolores
                                    adipisci, nobis ratione soluta quibusdam molestias quam iste labore ipsa ducimus
                                    saepe totam omnis cupiditate accusantium a est similique! Ratione impedit rem quasi
                                    hic officiis quidem obcaecati explicabo quis alias dicta officia saepe natus
                                    numquam, optio accusamus voluptatibus deserunt dolores. Sit tenetur exercitationem
                                    voluptate illo dolores ullam aspernatur tempora, quaerat molestias reiciendis, ea
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
                <div class="row border bg-light rounded-1 mt-2 d-flex justify-content-center align-items-center">
                   {{-- //////////////// --}}

                            <div class="card">
                                <div class="p-3">
                                    <h6>Comments</h6>
                                </div>
                                <div class="mt-1 d-flex flex-row align-items-center p-3 form-color"> <img src="https://picsum.photos/id/100/50" width="50" class="rounded-circle me-2"> <input type="text" class="form-control" placeholder="Enter your comment..."> </div>
                                <div class="mt-2">
                                    <div class="d-flex flex-row p-3 me-2"> <img src="https://picsum.photos/id/180/40" width="40" height="40" class="rounded-circle me-3">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-row align-items-center"> <span class="me-2">Brian selter</span> <small class="c-badge">Top Comment</small> </div> <small>12h ago</small>
                                            </div>
                                            <p class="text-justify comment-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat me-2"></i>24</span> <span class="ms-3"><i class="fa fa-comments-o me-2"></i>Reply</span> </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row p-3"> <img src="https://picsum.photos/id/200/40" width="40" height="40" class="rounded-circle me-3">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-row align-items-center"> <span class="me-2">Seltos Majito</span> <small class="c-badge">Top Comment</small> </div> <small>2h ago</small>
                                            </div>
                                            <p class="text-justify comment-text mb-0">Tellus in hac habitasse platea dictumst vestibulum. Lectus nulla at volutpat diam ut venenatis tellus. Aliquam etiam erat velit scelerisque in dictum non consectetur. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Aliquam faucibus purus in massa.</p>
                                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat me-2"></i>14</span> <span class="ms-3"><i class="fa fa-comments-o me-2"></i>Reply</span> </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row p-3"> <img src="https://picsum.photos/id/300/40" width="40" height="40" class="rounded-circle me-3">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-row align-items-center"> <span class="me-2">Maria Santola</span> <small class="c-badge">Top Comment</small> </div> <small>12h ago</small>
                                            </div>
                                            <p class="text-justify comment-text mb-0"> Id eu nisl nunc mi ipsum faucibus. Massa massa ultricies mi quis hendrerit dolor. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Habitasse platea dictumst quisque sagittis purus sit amet volutpat. Urna condimentum mattis pellentesque id.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            <div class="d-flex flex-row user-feed"> <span class="wish"><i class="fa fa-heartbeat me-2"></i>54</span> <span class="ms-3"><i class="fa fa-comments-o me-2"></i>Reply</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                   {{-- //////////////// --}}
                </div>


            </div>

            <!-- Right Aside Section -->
            <div class="col-md-3 col-sm-12 ps-2 g-0">
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
            </div>




        </div>
    </div>

</body>

</html>
