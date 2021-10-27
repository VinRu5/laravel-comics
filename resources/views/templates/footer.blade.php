<section class="footer-content">
    <div class="container footer-inner">
        <div class="footer-list">
            @php
            $footerList = config('footerList');
            @endphp

            @foreach ($footerList as $nameSection => $footerSections)
            <ul>

                <li>
                    <a href="#">{{ $nameSection }}</a>
                </li>

                @foreach ($footerSections as $footerItem)
                <li>
                    <a href="#">{{ $footerItem }}</a>
                </li>
                @endforeach

            </ul>
            @endforeach
        </div>
        <div class="footer-img">
            <!-- <img src="/images/dc-logo-bg.png" alt="logo dc"> -->
        </div>
    </div>
</section>
