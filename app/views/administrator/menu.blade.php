
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
    <!-- Search form -->
    <form class="navbar-form" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
        <!-- Main menu with font awesome icon -->
        <li><a href="{{ url("/dashboard") }}" class="open"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="has_sub"><a href="#"><i class="fa fa-list-alt"></i> <span>Staff members</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
                <li><a href="{{ url("/admin/users") }}">System users</a></li>
                <li><a href="{{ url("/admin/management") }}">Management Team</a></li>
                <li><a href="{{ url("/admin/othermembers") }}">Others members</a></li>
            </ul>
        </li>
        <li><a href="{{ url("users") }}"><i class="fa fa-user"></i> <span>Users</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> <span>Mail</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a></li>
        <li class="has_sub"><a href="#"><i class="fa fa-list-alt"></i> <span>Staff members</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
                <li><a href="{{ url("/admin/users") }}">System users</a></li>
                <li><a href="{{ url("/admin/management") }}">Management Team</a></li>
                <li><a href="{{ url("/admin/othermembers") }}">Others members</a></li>
            </ul>
        </li>
        <li class="has_sub"><a href="#"><i class="fa fa-sitemap"></i> <span>Pages Management</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
                <li><a href="{{ url("/admin/homepage") }}">Home</a></li>
                <li><a href="{{ url("/admin/history") }}">History</a></li>
                <li><a href="{{ url("/admin/services") }}"">Services</a></li>
                <li><a href="{{ url("/admin/us") }}"">Who we are</a></li>
                <li><a href="{{ url("/admin/projects") }}"">Projects</a></li>
                <li><a href="{{ url("/admin/opportunity") }}"">Opportunities</a></li>
                <li><a href="{{ url("/admin/contact") }}"">Contacts</a></li>
            </ul>
        </li>
    </ul>
</div>

