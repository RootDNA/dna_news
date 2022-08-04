
<footer>
    <div class="center">
        <p>&copy;2021 Deffo Aubin full stack web developer</p>
    </div>
    <div class="container foot-flex">
        <a href="#"><i class="material-icons">facebook</i></a>
        <a href="#"><i class="material-icons">leak_add</i></a>
        <a href="#"><i class="material-icons">near_me</i></a>
        <a href="#"><i class="material-icons">rss_feed</i></a>
    </div>
</footer>
<script src="{{ url('assets/javascript/mains.js') }}" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });
</script>
