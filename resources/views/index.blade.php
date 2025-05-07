<x-guest-layout class="HomePage">
    <x-slot name="head">
        <meta name="description" content="Afriswiss Commodities - Kenya's trusted gold refinery and trading company. Professional gold refining, smelting, and bullion services in Nairobi. Licensed precious metals buyers and refiners.">
        <meta name="keywords" content="Afriswiss Commodities, gold refinery Kenya, gold buyers Nairobi, precious metals trading Kenya, gold refining services Kenya, gold smelting Nairobi, licensed gold buyers Kenya, bullion trading East Africa">
        <link rel="canonical" href="https://afriswisscommodities.co.ke">
        <title>Afriswiss Commodities | Gold Refinery Kenya</title>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Afriswiss Commodities",
            "alternateName": "Afriswiss Commodities Trading Limited",
            "url": "https://afriswisscommodities.co.ke",
            "logo": "{{ url('/assets/images/logo.png') }}",
            "description": "Kenya's premier gold refinery specializing in gold refining, trading, and precious metals services",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "Kenya",
                "addressLocality": "Nairobi",
                "addressRegion": "Nairobi"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ config('globals.app_phone_number') }}",
                "contactType": "customer service",
                "areaServed": ["Kenya", "East Africa"]
            },
            "sameAs": [
                "https://www.linkedin.com/company/afriswiss-commodities"
            ]
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
                <h1>Afriswiss Commodities</h1>
                <p>Kenyan's Premier Gold Refinery & Trading Company.</p>
            </div>
        </div>
    </section>

    <section class="About">
        <div class="container">
            <div class="content">
                <div class="section_header">
                    <h2>About Afriswiss Commodities</h2>
                    <p>Licensed Gold Refinery & Trading Company in Kenya</p>
                </div>

                <div class="text">
                    <p>Afriswiss Commodities is Kenya's premier gold refinery, offering comprehensive solutions across the precious metals value chain. Our state-of-the-art facility in Nairobi specializes in world-class smelting, refining, and recovery of responsibly sourced precious metals. We serve both local and international clients with professional gold buying, refining, and trading services.</p>
                    <p>As a licensed gold buyer and refiner in Kenya, our advanced smelting processes and cutting-edge technology enable us to recover and refine precious metals to the highest purity standards, providing superior solutions for mining companies, financial institutions, and private investors.</p>
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
                <h2>Gold Refinery Services in Kenya</h2>
                <p>Licensed Gold Refining, Trading, and Investment Solutions in East Africa</p>
            </div>

            <div class="content">
                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-gold-refining.webp') }}" alt="Afriswiss Commodities Gold Refining Process in Kenya">
                    </div>
                    <div class="card_content">
                        <p class="title">Professional Gold Refining in Kenya</p>
                        <p class="text">As Kenya's leading gold refinery, we specialize in refining gold, silver, platinum, and other precious metals to international standards. Our advanced refining technology and expert metallurgists ensure maximum metal recovery and purity up to 99.99%. We serve mining companies, financial institutions, and private investors across East Africa with professional refining solutions.</p>
                        <a href="{{ url('/services#gold-refining') }}" class="service-link">Learn more about our Gold Refining Services in Kenya</a>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-gold-smelting.webp') }}" alt="Afriswiss Commodities Gold Smelting Facility in Nairobi">
                    </div>
                    <div class="card_content">
                        <p class="title">Smelting & Metal Recovery</p>
                        <p class="text">As Africa's leading gold refinery, {{ config('globals.app_name') }} provides high-quality smelting services tailored to meet diverse client needs.</p>
                        <a href="{{ url('/services#smelting') }}">See our Smelting Process</a>
                    </div>
                </div>

                <div class="card">
                    <div class="image">
                        <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-assaying.webp') }}" alt="Afriswiss Commodities Gold Assaying and Testing Laboratory">
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
