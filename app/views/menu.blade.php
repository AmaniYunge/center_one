<div class="navbar">
    <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
        NAVIGATION <span class="icon-chevron-down icon-white"></span>
    </button>
    <div class="nav-collapse collapse">
        <ul class="nav nav-pills ddmenu">
            <li class="dropdown active" id="home"><a href="{{ url("/") }}">Home</a></li>
            <li class="dropdown" id="who_we">
                <a class="dropdown-toggle" href="#">Who we are<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li id="history"><a href="{{ url("/who/history") }}">History</a></li>
                    <li id="leadership"><a href="{{ url("/who/leadership") }}">Leadership & Governance</a></li>
                    <li id="staff"><a href="{{ url("/who/staff") }}">Staff</a></li>
                </ul>
            </li>
            <li class="dropdown" id="what"><a href="{{ url("/what") }}">What we do</a></li>
            <li class="dropdown" id="work"><a href="{{ url("/work") }}">Where we work</a></li>
            <li class="dropdown" id="project"><a href="{{ url("/project") }}">Projects</a></li>
            <li class="dropdown" id="donation"><a href="{{ url("/donation") }}">Support</a></li>
            <li class="dropdown" id="contact"><a href="{{ url("/contact") }}">Contact us</a></li>

        </ul>
    </div>
</div>

