<x-guest-layout class="AboutPage">
    <x-slot name="head">
        <meta name="description" content="Discover {{ config('globals.app_name') }}, a leading gold refinery in East Africa. We specialize in gold refining, smelting, and bullion trading, delivering high-quality precious metal products to the global market.">
        <meta name="keywords" content="afriswiss, afriswiss commodities, afriswiss gold refinery, gold refining {{ config('globals.app_location') }}, gold refinery {{ config('globals.app_location') }}, smelting, bullion trading, gold investment, metal recycling, gold assay, precious metals">
        <title>About {{ config('globals.app_name') }} | Leading Gold Refinery in {{ config('globals.app_location') }}</title>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('globals.app_name') }}",
            "url": "{{ url('/about') }}",
            "logo": "{{ url('/assets/images/logo.png') }}",
            "description": "A leading gold refinery in {{ config('globals.app_location') }}, specializing in refining, smelting, and bullion trading.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ config('globals.app_address') }}",
                "addressLocality": "Kampala",
                "addressCountry": "UG"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ config('globals.app_phone_number') }}",
                "contactType": "customer service"
            }
        }
        </script>
    </x-slot>

    <section class="Hero page_hero">
        <div class="container">
            <h1>About {{ config('globals.app_name') }}</h1>
        </div>
    </section>

    <section class="About">
        <div class="container">
            <div class="image">
                <img src="{{ asset('assets/images/afriswiss-commodities-trading-limited-gold-smelting.webp') }}" alt="{{ config('globals.app_name') }} - Leading Gold Refinery in Africa">
            </div>

            <div class="content">
                <div class="section_header">
                    <h2>Who we are</h2>
                    <p>Welcome to {{ config('globals.app_name') }}</p>
                </div>
                <div class="text">
                    <p>{{ config('globals.app_name') }} is a leading <strong>gold refining</strong> company based in {{ config('globals.app_location') }}. We specialize in <a href="{{ route('services-page') . '#bullion-trading' }}">bullion trading</a>, <a href="{{ route('services-page') . '#smelting' }}">smelting</a>, and other <a href="{{ route('services-page') }}">precious metal services</a>.</p>
                    <p>One of the key features that set {{ config('globals.app_name') }} apart from other refineries is our commitment to providing exceptional customer service.</p>
                    <p>We have a team of highly skilled and experienced professionals who are always ready to assist clients with their refining needs. We ensure that each client is provided with personalized attention and that their needs are met to the highest standards.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="History">
        <div class="container">
            <div class="history">
                <div class="header">
                    <h2>Our Journey</h2>
                    <p>From Gold Refining to Global Excellence</p>
                </div>
                <p>We commit to constantly pursue valuable change in everything we do, from helping young and talented jewelers realize their potential. We continue to grow {{ config('globals.app_name') }}, while doing our part to decrease Africa’s high unemployment rates.</p>
            </div>

            <div class="history">
                <div class="header">
                    <h2>Our People</h2>
                    <p>The Strength Behind Our Success</p>
                </div>
                <p>Integral to driving our pursuit of excellence and constantly refining our offering are the people of {{ config('globals.app_name') }}. We enjoy exceptional long-term loyalty matched with talent and immense experience. And as a result, we have built long-term customer relationships in the process.</p>
            </div>

            <div class="history">
                <div class="header">
                    <h2>Our Values</h2>
                    <p>What Drives Us</p>
                </div>
                <p>To create value change, we first have to instill a set of shared beliefs within our organization. Our values have been developed in consultation with our employees.</p>
            </div>

            <div class="history">
                <div class="header">
                    <h2>Company Policies</h2>
                    <p>Our Commitment to Integrity</p>
                </div>
                <p>{{ config('globals.app_name') }} values provide the framework for the development, implementation, maintenance, monitoring, and review of company policies and procedures.</p>
            </div>

            <div class="history">
                <div class="header">
                    <h2>Sustainability</h2>
                    <p>Making a Positive Impact</p>
                </div>
                <p>{{ config('globals.app_name') }} is passionate about improving the lives of people and our communities by making a positive difference and contributing towards the well-being of those around us.</p>
            </div>
        </div>
    </section>
</x-guest-layout>
