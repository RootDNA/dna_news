<header>
    <nav class="black white-text">
        <div class="nav-wrapper black white-text">
            <a href="{{ url('/') }}" class="brand-logo">DNA News</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                    class="material-icons white-text">menu</i></a>
            <ul class="right hide-on-med-and-down white-text">
                <li><a href="{{ url('category/general') }}">General</a></li>
                <li><a href="{{ url('category/business') }}">Business</a></li>
                <li><a href="{{ url('category/entertainment') }}">Entertainment</a></li>
                <li><a href="{{ url('category/health') }}">Health</a></li>
                <li><a href="{{ url('category/science') }}">Science</a></li>
                <li><a href="{{ url('category/sports') }}">Sports</a></li>
                <li><a href="{{ url('category/technology') }}">Technology</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="{{ url('category/general') }}">General</a></li>
        <li><a href="{{ url('category/business') }}">Business</a></li>
        <li><a href="{{ url('category/entertainment') }}">Entertainment</a></li>
        <li><a href="{{ url('category/health') }}">Health</a></li>
        <li><a href="{{ url('category/science') }}">Science</a></li>
        <li><a href="{{ url('category/sports') }}">Sports</a></li>
        <li><a href="{{ url('category/technology') }}">Technology</a></li>
    </ul>

</header>
