@include('admin.dashboard.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="page-heading">
    <h3>Website Statistics</h3>
</div>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-lg-4">
            <!-- Moderators List -->
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="card-title">Moderators</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>
                            List Of All Admins of the website
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item active">Abtahi Tajwar</li>
                            <li class="list-group-item">Fahim Faisal</li>
                            <li class="list-group-item">Md. Atik</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">chocolate cheesecake candy</li>
                            <li class="list-group-item">Oat cake icing pastry pie carrot</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <h2>Search User</h2>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Categories..">
                <ul id="myUL">
                    <li><a href="#">Adele</a></li>
                    <li><a href="#">Agnes</a></li>

                    <li><a href="#">Billy</a></li>
                    <li><a href="#">Bob</a></li>

                    <li><a href="#">Calvin</a></li>
                    <li><a href="#">Christina</a></li>
                    <li><a href="#">Cindy</a></li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-8">
            <div class="container">
                <div class="avatar avatar-xl">
                    <img src="{{ asset('img/admin/5.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.dashboard.footer')