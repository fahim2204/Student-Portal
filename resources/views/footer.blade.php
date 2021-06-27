<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
            href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
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
