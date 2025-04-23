<footer>
    <div class="container">
        <section class="branding">
            <p class="title">{{ config('globals.app_name') }}</p>
            <p>{{ config('globals.app_slogan') }}</p>
            <p>{{ config('globals.app_address') }}</p>
        </section>

        <section class="site_map">
            <p class="title">Site Map</p>
            <div class="links">
                <a href="{{ Route::has('home-page') ? route('home-page') : '#' }}">Home</a>
                <a href="{{ Route::has('about-page') ? route('about-page') : '#' }}">About</a>
                <a href="{{ Route::has('services-page') ? route('services-page') : '#' }}">Services</a>
                <a href="{{ Route::has('products-page') ? route('products-page') : '#' }}">Products</a>
                <a href="{{ Route::has('contact-page') ? route('contact-page') : '#' }}">Contact</a>
            </div>
        </section>

        <section class="services">
            <p class="title">Our Services</p>
            <div class="links">
                <a href="{{ Route::has('services-page') ? route('services-page') . '#gold-refining' : '#' }}">Gold Refining</a>
                <a href="{{ Route::has('services-page') ? route('services-page') . '#assaying' : '#' }}">Assaying</a>
                <a href="{{ Route::has('services-page') ? route('services-page') . '#smelting' : '#' }}">Smelting</a>
                <a href="{{ Route::has('services-page') ? route('services-page') . '#bullion-trading' : '#' }}">Bullion Trading</a>
                <a href="{{ Route::has('services-page') ? route('services-page') . '#minting' : '#' }}">Minting</a>
                <a href="{{ Route::has('services-page') ? route('services-page') . '#transportation-and-logistics' : '#' }}">Transport & Logistics</a>
            </div>
        </section>

        <section class="contacts">
            <p class="title">Contact Info</p>
            <div class="contact_details">
                <div class="details">
                    <p>
                        {{ config('globals.app_phone_number') }}
                        @if(!empty(config('globals.app_phone_other')))
                            / {{ config('globals.app_phone_other') }}
                        @endif
                    </p>
                    <p>{{ config('globals.app_email') }}</p>
                </div>

                <div class="socials">
                    <a href="https://wa.me/{{ config('globals.app_whatsapp_number') }}">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-whatsapp.webp') }}" alt="{{ config('globals.app_name') }} Whatsapp" width="30px" height="30px">
                    </a>
                </div>
            </div>
        </section>
    </div>

    <p class="copyright">&copy; 2015 | {{ config('globals.app_name') }}</p>
</footer>
