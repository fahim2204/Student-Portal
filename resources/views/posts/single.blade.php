@include('header')
@if (session()->get('uname')!==null)
@yield('header-main-logged')
@else
@yield('header-main')
@endif

<div class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Trending Questions
      </h3>

      <div class="posts mb-3">
          <!-- Single Post -->
        <div class="index-single-post row border bg-light rounded-1 mb-2 py-1 p-3">
            <div class="row g-0">
                <!-- Post info section -->
                <div class="col-12 col-lg-8 d-flex align-items-center ms-2 mb-1">
                    <div class="text-primary">{{$post->category->name}}</div>
                    <div class="mx-1">|</div>
                    <div class="lh-sm text-muted align-self-end me-1">Posted By</div>
                    <a href="#user-profile" class="fs-6 text-success me-1 text-decoration-none">{{$post->user->uname}}</a href="#user-profile">
                    <div class="lh-sm text-danger align-self-end">{{$post->created_at->diffForHumans()}}</div>
                </div>
                <!-- Post header section  -->
                <div class="col-12 ps-2 border-top">
                    <div class="fs-4 fw-bold my-2">{{$post->title}}</div>
                </div>
                <div class="ms-3 pe-3 col-12 mb-4">
                    <div class="lh-sm text-dark text-wrap">{{$post->pbody}}</div>
                </div>
                <div class="col-8 d-flex align-items-center border-top p-1 ">
                    <div class="border border-0 bg-info px-2" style="border-radius: 30px;"><a href=""><i class="fas fa-arrow-alt-circle-up me-1"></i>{{$count}} <i class="text-muted"></a>|<a href=""></i><i class="fas fa-arrow-alt-circle-down ms-1"></i></a></div>
                    <div class="mx-3"><i class="fas fa-comment-dots me-1"></i><a href="">741 Comments</a></div>
                    <div class="me-3"><i class="fas fa-eye me-1"></i>{{$post->views}}</div>
                </div>
                <div class="col-4 justify-content-end d-flex align-items-center border-top p-1 ">
                    <div class="mx-3"><i class="far fa-heart me-1"></i></i><a href="">Favourite</a></div>
                    <div class="me-3"><i class="fas fa-share me-1"></i><a href="">Share</a></div>
                    <div class="me-3"><i class="fas fa-ellipsis-h me-1"></i></div>
                </div>
            </div>
        </div>
      </div>
      <!-- Comment Section -->
      <div class="mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="d-flex flex-column col-12 p-0">

                <div class="coment-bottom bg-white p-2 px-4">
                    <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid img-responsive rounded-circle mr-2 m-2" src="{{asset('img/admin/2.jpg')}}" width="38">

                            </div>
                            <div class="col-9">
                                <form action="" method='post'>
                                    <div class='w-100'> <input type="text" name="ctext" class="form-control mr-3 " placeholder="Add comment"></div>
                                     <input type="hidden" name="postId" value="{{$post->id}}">
                                     <button class="btn btn-primary" type="submit">Comment</button>
                                 </form>
                            </div>
                        </div>

                    </div>
                    @foreach ($comments as $comment)
                    <div class="commented-section mt-3">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">{{$comment->user->uname}}</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">{{$comment->created_at->diffForHumans()}}</span>
                        </div>
                        <div class="comment-text-sm my-2"><span>{{$comment->ctext}}</span></div>

                    </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
    <!-- Comment section end -->

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
            <h4 class="fst-italic">Subcategories</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Quantam Mechanics</a></li>
              <li><a href="#">Neclear Science</a></li>
              <li><a href="#">Modern Physics</a></li>
              <li><a href="#">Theory</a></li>
              <li><a href="#">Traditional Physics</a></li>
              <li><a href="#">History of Physics</a></li>
            </ol>
          </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
</div>
 @include('footer')
