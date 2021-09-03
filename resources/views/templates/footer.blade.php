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

<section class="footer-topbar">
    <div class="buy container">
        <div class="buy-item">
            <div class="img-container">
                <img src="/images/buy-comics-digital-comics.png" alt="digital comics">
            </div>

            <div class="buy-text">DIGITAL COMICS</div>
        </div>
        <div class="buy-item">
            <div class="img-container">
                <img src="/images/buy-comics-merchandise.png" alt="merchandise">
            </div>

            <div class="buy-text">DC MERCHANDISE</div>
        </div>
        <div class="buy-item">
            <div class="img-container">
                <img src="/images/buy-comics-shop-locator.png" alt="subscription">
            </div>

            <div class="buy-text">SUBSCRIPTION</div>
        </div>
        <div class="buy-item">
            <div class="img-container">
                <img src="/images/buy-comics-subscriptions.png" alt="shop locator">
            </div>

            <div class="buy-text">COMIC SHOP LOCATOR</div>
        </div>
        <div class="buy-item">
            <div class="img-container">
                <img src="/images/buy-dc-power-visa.svg" alt="dc power visa">
            </div>

            <div class="buy-text">DC POWER VISA</div>
        </div>
    </div>
</section>