<x-guest-layout class="HomePage">
    <x-slot name="head">
        <meta name="description" content="{{ config('globals.app_name') }} is a gold refinery company based in {{ config('globals.app_address') }}. We're top rated for our specialization in gold refining, smelting, and bullion trading.">
        <meta name="keywords" content="afriswiss, afriswiss commodities, afriswiss gold refinery, {{ config('globals.app_name') }}, gold refining, precious metals, smelting, bullion trading, gold investment, metal recycling, gold assay">
        <title>{{ config('globals.app_name') }} | Premier Gold Refinery & Precious Metals Experts</title>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('globals.app_name') }}",
            "url": "{{ url('/') }}",
            "logo": "{{ url('/assets/images/logo.png') }}",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ config('globals.app_phone_number') }}",
                "contactType": "customer service"
            },
            // "sameAs": [
            //     "{{ config('globals.app_facebook') }}",
            //     "{{ config('globals.app_twitter') }}",
            //     "{{ config('globals.app_linkedin') }}"
            // ]
        }
        </script>
    </x-slot>

    <section class="Hero">
        <div class="container_fluid">
            <div class="illustration">
                <video autoplay muted loop playsinline preload="auto">
                    <source src="{{ asset('assets/images/afriswiss-commodities-trading-limited-hero-video.webm') }}" type="video/webm">
                        Your browser does not support the video tag.
                    </source>
                </video>
            </div>
            <div class="text">
                <h1>Welcome to {{ config('globals.app_name') }}</h1>
                <p>Your trusted partner in gold refining, smelting, and bullion trading.</p>
            </div>
        </div>
    </section>

    <section class="About">
        <div class="container">
            <div class="content">
                <div class="section_header">
                    <h2>Precious Metals Services</h2>
                    <p>Refining, Smelting, Evaluation, Investment</p>
                </div>

                <div class="text">
                    <p>At {{ config('globals.app_name') }}, we offer end-to-end solutions across the precious metals value chain. Our expertise includes world-class smelting, refining, and recovery of responsibly sourced metals. We fabricate investment-grade bullion and custom metal products for retail clients.</p>
                    <p>Utilizing advanced smelting processes, we recover low-grade precious metals and concentrates, providing superior refining solutions for primary and secondary depositors.</p>
                </div>
            </div>

            <div class="image">
                <p>The {{ config('globals.app_name') }} hallmark is recognized on cast and minted bars. We also offer customized legal tender coin minting upon request.</p>
                <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-gold-smelting.webp') }}" alt="About {{ config('globals.app_name') }}">
            </div>
        </div>
    </section>

    <section class="CTA">
        <div class="container">
            <div class="cta">
                <h2>Looking for Professional Precious Metal Services?</h2>
                <div class="content">
                    <div class="image">
                        <img src="{{ asset('assets/images/telephone.png') }}" alt="Call Us Icon" width="30" height="30">
                    </div>
                    <p>Contact Us Today: {{ config('globals.app_phone_number') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="Services">
        <div class="container">
            <div class="section_header">
                <h2>Our Core Services</h2>
                <p>Premium gold refining, smelting, assaying, and investment solutions</p>
            </div>

            <div class="content">
                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-gold-refining.webp') }}" alt="{{ config('globals.app_name') }} Gold Refining">
                    </div>
                    <div class="card_content">
                        <p class="title">Gold & Precious Metal Refining</p>
                        <p class="text">We specialize in refining gold, silver, platinum, and other precious metals using state-of-the-art technology to achieve the highest purity standards.</p>
                        <a href="{{ url('/services#gold-refining') }}">Learn more about our Refining Services</a>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-gold-smelting.webp') }}" alt="{{ config('globals.app_name') }} Smelting">
                    </div>
                    <div class="card_content">
                        <p class="title">Smelting & Metal Recovery</p>
                        <p class="text">As Africa's leading gold refinery, {{ config('globals.app_name') }} provides high-quality smelting services tailored to meet diverse client needs.</p>
                        <a href="{{ url('/services#smelting') }}">See our Smelting Process</a>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-assaying.webp') }}" alt="{{ config('globals.app_name') }} Assaying">
                    </div>
                    <div class="card_content">
                        <p class="title">Assaying & Metal Purity Testing</p>
                        <p class="text">We utilize the Fire Assay Method and advanced ICP technology to determine the precise purity of gold and other precious metals.</p>
                        <a href="{{ url('/services#assaying') }}">Assaying Methods We Use</a>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-bullion-trading.webp') }}" alt="{{ config('globals.app_name') }} Bullion Trading">
                    </div>
                    <div class="card_content">
                        <p class="title">Bullion Trading & Investment</p>
                        <p class="text">We actively trade refined and unrefined gold, offering competitive prices and secure transactions for investors and businesses.</p>
                        <a href="{{ url('/services#bullion-trading') }}">Bullion Trading</a>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-minting.webp') }}" alt="{{ config('globals.app_name') }} Minting">
                    </div>
                    <div class="card_content">
                        <p class="title">Custom Minting Services</p>
                        <p class="text">We create bespoke coins and bars using cutting-edge minting techniques to meet client specifications and investment needs.</p>
                        <a href="{{ url('/services#custom-mining') }}">Custom Mining</a>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-transport.webp') }}" alt="{{ config('globals.app_name') }} Logistics">
                    </div>
                    <div class="card_content">
                        <p class="title">Secure Transportation & Logistics</p>
                        <p class="text">{{ config('globals.app_name') }} provides reliable, secure, and cost-effective logistics for the transportation of precious metals.</p>
                        <a href="{{ url('/services#transportation-and-logistics') }}">Transportation & Logistics</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
