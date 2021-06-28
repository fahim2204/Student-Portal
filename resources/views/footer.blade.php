

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Student Portal is an initiative  to help Students with the answer. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="{{ route('posts.view.cat', 'math') }}">Math</a></li>
                <li><a href="{{ route('posts.view.cat', 'physics') }}">Physics</a></li>
                <li><a href="{{ route('posts.view.cat', 'chemistry') }}">Chemistry</a></li>
                <li><a href="{{ route('posts.view.cat', 'biology') }}">Biology</a></li>
                <li><a href="{{ route('posts.view.cat', 'progamming') }}">Progamming</a></li>
                <li><a href="{{ route('posts.view.cat', 'gk') }}">General Knowledge</a></li>
                <li><a href="{{ route('posts.view.cat', 'economics') }}">Economics</a></li>
                <li><a href="{{ route('posts.view.cat', 'exam-prep') }}">Exam Preperation</a></li>
              </ul>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/about/">About Us</a></li>
                <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                    <a href="{{route('home')}}">Student Portal</a>.
              </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="text-right d-flex align-self-end justify-content-end">
                    <a class="text-white" href="#">Back to top</a>
                </div>
            </div>
          </div>
        </div>

</footer>

<script src="{{ URL::asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="{{ asset('js/profile/edit.js') }}"></script>
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
        var prof = document.getElementById("profile-sec");
        if (prof.style.display == "none") {
            prof.style.display = "block"
        } else {
            prof.style.display = "none"
        }
    }

    function HidePopup() {

        var prof = document.getElementById("profile-sec");
        var notif = document.getElementById("notification-sec");

        notif.style.display = "none";
        prof.style.display = "none";

    }
</script>
</body>

</html>
