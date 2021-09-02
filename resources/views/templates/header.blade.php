<div class="container top-bar">
    <div class="logo">
        <img src="/images/dc-logo.png" alt="logo dc comics">
    </div>

    <nav>
        <ul>
            @foreach ($navList as $navItem)
      
            <li><a href="#">{{ $navItem }}</a></li> <!--da sistemare-->
            @endforeach
        </ul>
    </nav>
    <div class="search">
        <input type="text" placeholder="Search">
        <i class="fas fa-search"></i>
    </div>
</div>
<div class="jumbotron">
    <img src="/images/jumbotron.jpg" alt="jumbotron">
</div>