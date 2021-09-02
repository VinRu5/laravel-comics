<div class="container">
    <div class="logo">
        <img src="/images/dc-logo.png" alt="logo dc comics">
    </div>

    <nav>
        <ul>
            @foreach ($navList as $navItem)
            <!-- {{ route(strtolower($navItem)) }} -->
            <li><a href="#">{{ $navItem }}</a></li> <!--da sistemare-->
            @endforeach
        </ul>
    </nav>
    <div>
        <input type="text" placeholder="Search">
    </div>
</div>