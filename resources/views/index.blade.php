@include('header')

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded" style="background: linear-gradient(rgba(50, 50, 50, 0.7), rgba(50, 50, 50, 0.7)), url({{asset('img/posts/featured-1.jpg')}})">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">How can be laravel workflow make 5.0x faster</h1>
      <p class="lead my-3">So we know MVC approach is meant to take work faster and it perfectly works then any other frameworks. Yet it becomes very much cumbersome sometimes..</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="featured2-card row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Physics</strong>
          <h3 class="mb-0">Quantam Mechanics can explain blackhole</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block w-200 index-featured2-cover-photo" style="background-image: url({{asset('img/posts/featured-2.jpg')}})">
            <img src="{{asset('img/posts/featured-2.jpg')}}" width="200" alt="" style="opacity: 0">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="featured2-card row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Polythene & Environment</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block bg-white index-featured2-cover-photo" style="background-image: url({{asset('img/posts/featured-3.jpg')}})">
            <img src="{{asset('img/posts/featured-2.jpg')}}" width="200" alt="" style="opacity: 0">
        </div>
      </div>
    </div>
  </div>

  <!-- For selecting post types -->
  <div class="btn-group mb-3">
    <a href="#" class="btn btn-primary active" aria-current="page">Question</a>
    <a href="#" class="btn btn-primary">Articles</a>
  </div>
    <div class="tags mb-3">
        <div class="chip">
            <img src="{{asset('img/posts/featured-2.jpg')}}" alt="Person" width="96" height="96">
            Physics
        </div>
        <div class="chip">
            <img src="{{asset('img/posts/featured-3.jpg')}}" alt="Person" width="96" height="96">
            Chemistry
        </div>
    </div>
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
                    <div class="text-primary">Category Name</div>
                    <div class="mx-1">|</div>
                    <div class="lh-sm text-muted align-self-end me-1">Posted By</div>
                    <a href="#user-profile" class="fs-6 text-success me-1 text-decoration-none">User Name</a href="#user-profile">
                    <div class="lh-sm text-danger align-self-end">3 hours ago</div>
                </div>
                <!-- Post header section  -->
                <div class="col-12 ps-2 border-top">
                    <div class="fs-4 fw-bold my-1"><a href="">How to know which method is best for dynamic speed calculation</a></div>
                </div>
                <div class="ms-3 pe-3 col-12 mb-2">
                    <div class="lh-sm text-dark text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus dignissimos et ipsam dolorem modi nesciunt eius cumque. Maxime natus quas earum magni, modi esse tempore iusto? Nisi, ipsam at? Debitis at, veniam iste tempore molestiae in maxime inventore dolor quam facere. Magni maiores explicabo, doloremque magnam laboriosam placeat distinctio reiciendis unde! In quo odio fuga soluta cupiditate voluptatum qui iusto impedit dicta odit, adipisci assumenda saepe minus iste distinctio itaque dolores dignissimos quod quis eveniet delectus ullam obcaecati temporibus. Dicta impedit explicabo quibusdam labore unde. Enim quo odio reprehenderit possimus ipsum deleniti, repudiandae quas similique, tempore praesentium cupiditate saepe dolore?</div>
                </div>
                <div class="col-8 d-flex align-items-center border-top p-1 ">
                    <div class="border border-0 bg-info px-2" style="border-radius: 30px;"><a href=""><i class="fas fa-arrow-alt-circle-up me-1"></i>3.5K <i class="text-muted"></a>|<a href=""></i><i class="fas fa-arrow-alt-circle-down ms-1"></i></a></div>
                    <div class="mx-3"><i class="fas fa-comment-dots me-1"></i><a href="">741 Comments</a></div>
                    <div class="me-3"><i class="fas fa-eye me-1"></i>741 Views</div>
                </div>
                <div class="col-4 justify-content-end d-flex align-items-center border-top p-1 ">
                    <div class="mx-3"><i class="far fa-heart me-1"></i></i><a href="">Favourite</a></div>
                    <div class="me-3"><i class="fas fa-share me-1"></i><a href="">Share</a></div>
                    <div class="me-3"><i class="fas fa-ellipsis-h me-1"></i></div>
                </div>
            </div>
        </div>
        <div class="index-single-post row border bg-light rounded-1 mb-2 py-1 p-3">
            <div class="row g-0">
                <!-- Post info section -->
                <div class="col-12 col-lg-8 d-flex align-items-center ms-2 mb-1">
                    <div class="text-primary">Category Name</div>
                    <div class="mx-1">|</div>
                    <div class="lh-sm text-muted align-self-end me-1">Posted By</div>
                    <a href="#user-profile" class="fs-6 text-success me-1 text-decoration-none">User Name</a href="#user-profile">
                    <div class="lh-sm text-danger align-self-end">3 hours ago</div>
                </div>
                <!-- Post header section  -->
                <div class="col-12 ps-2 border-top">
                    <div class="fs-4 fw-bold my-1"><a href="">How to know which method is best for dynamic speed calculation</a></div>
                </div>
                <div class="ms-3 pe-3 col-12 mb-2">
                    <div class="lh-sm text-dark text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus dignissimos et ipsam dolorem modi nesciunt eius cumque. Maxime natus quas earum magni, modi esse tempore iusto? Nisi, ipsam at? Debitis at, veniam iste tempore molestiae in maxime inventore dolor quam facere. Magni maiores explicabo, doloremque magnam laboriosam placeat distinctio reiciendis unde! In quo odio fuga soluta cupiditate voluptatum qui iusto impedit dicta odit, adipisci assumenda saepe minus iste distinctio itaque dolores dignissimos quod quis eveniet delectus ullam obcaecati temporibus. Dicta impedit explicabo quibusdam labore unde. Enim quo odio reprehenderit possimus ipsum deleniti, repudiandae quas similique, tempore praesentium cupiditate saepe dolore?</div>
                </div>
                <div class="col-8 d-flex align-items-center border-top p-1 ">
                    <div class="border border-0 bg-info px-2" style="border-radius: 30px;"><a href=""><i class="fas fa-arrow-alt-circle-up me-1"></i>3.5K <i class="text-muted"></a>|<a href=""></i><i class="fas fa-arrow-alt-circle-down ms-1"></i></a></div>
                    <div class="mx-3"><i class="fas fa-comment-dots me-1"></i><a href="">741 Comments</a></div>
                    <div class="me-3"><i class="fas fa-eye me-1"></i>741 Views</div>
                </div>
                <div class="col-4 justify-content-end d-flex align-items-center border-top p-1 ">
                    <div class="mx-3"><i class="far fa-heart me-1"></i></i><a href="">Favourite</a></div>
                    <div class="me-3"><i class="fas fa-share me-1"></i><a href="">Share</a></div>
                    <div class="me-3"><i class="fas fa-ellipsis-h me-1"></i></div>
                </div>
            </div>
        </div>
        <div class="index-single-post row border bg-light rounded-1 mb-2 py-1 p-3">
            <div class="row g-0">
                <!-- Post info section -->
                <div class="col-12 col-lg-8 d-flex align-items-center ms-2 mb-1">
                    <div class="text-primary">Category Name</div>
                    <div class="mx-1">|</div>
                    <div class="lh-sm text-muted align-self-end me-1">Posted By</div>
                    <a href="#user-profile" class="fs-6 text-success me-1 text-decoration-none">User Name</a href="#user-profile">
                    <div class="lh-sm text-danger align-self-end">3 hours ago</div>
                </div>
                <!-- Post header section  -->
                <div class="col-12 ps-2 border-top">
                    <div class="fs-4 fw-bold my-1"><a href="">How to know which method is best for dynamic speed calculation</a></div>
                </div>
                <div class="ms-3 pe-3 col-12 mb-2">
                    <div class="lh-sm text-dark text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus dignissimos et ipsam dolorem modi nesciunt eius cumque. Maxime natus quas earum magni, modi esse tempore iusto? Nisi, ipsam at? Debitis at, veniam iste tempore molestiae in maxime inventore dolor quam facere. Magni maiores explicabo, doloremque magnam laboriosam placeat distinctio reiciendis unde! In quo odio fuga soluta cupiditate voluptatum qui iusto impedit dicta odit, adipisci assumenda saepe minus iste distinctio itaque dolores dignissimos quod quis eveniet delectus ullam obcaecati temporibus. Dicta impedit explicabo quibusdam labore unde. Enim quo odio reprehenderit possimus ipsum deleniti, repudiandae quas similique, tempore praesentium cupiditate saepe dolore?</div>
                </div>
                <div class="col-8 d-flex align-items-center border-top p-1 ">
                    <div class="border border-0 bg-info px-2" style="border-radius: 30px;"><a href=""><i class="fas fa-arrow-alt-circle-up me-1"></i>3.5K <i class="text-muted"></a>|<a href=""></i><i class="fas fa-arrow-alt-circle-down ms-1"></i></a></div>
                    <div class="mx-3"><i class="fas fa-comment-dots me-1"></i><a href="">741 Comments</a></div>
                    <div class="me-3"><i class="fas fa-eye me-1"></i>741 Views</div>
                </div>
                <div class="col-4 justify-content-end d-flex align-items-center border-top p-1 ">
                    <div class="mx-3"><i class="far fa-heart me-1"></i></i><a href="">Favourite</a></div>
                    <div class="me-3"><i class="fas fa-share me-1"></i><a href="">Share</a></div>
                    <div class="me-3"><i class="fas fa-ellipsis-h me-1"></i></div>
                </div>
            </div>
        </div>
        </div>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

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
 @include('footer')
