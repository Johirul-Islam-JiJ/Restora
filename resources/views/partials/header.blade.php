<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">Resort Booking</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('resorts.index') }}">Resort</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Package</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Swimming</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Divisions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Travel Advisory</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Promotions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </li>
            <li class="nav-item">
                <form class="form-inline">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>




        </ul>

    </div>

</nav>
<!-- Navbar -->
