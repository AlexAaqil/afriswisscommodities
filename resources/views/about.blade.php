<x-guest-layout class="AboutPage">
    <x-slot name="head">
        <meta name="description" content="Discover {{ config('globals.app_name') }}, a leading gold refinery in East Africa. We specialize in gold refining, smelting, and bullion trading, delivering high-quality precious metal products to the global market.">
        <meta name="keywords" content="gold refining {{ config('globals.app_location') }}, gold refinery {{ config('globals.app_location') }}, smelting, bullion trading, gold investment, metal recycling, gold assay, precious metals">
        <title>About {{ config('globals.app_name') }} | Leading Gold Refinery in {{ config('globals.app_location') }}</title>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('globals.app_name') }}",
            "url": "{{ url('/') }}",
            "logo": "{{ url('/images/logo.png') }}",
            "description": "A leading gold refinery in Uganda, specializing in refining, smelting, and bullion trading.",
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

    <section class="Hero">
        <div class="container">
            <h1>About {{ config('globals.app_name') }} - Your Trusted Gold Refinery</h1>
        </div>
    </section>

    <section class="About">
        <div class="container">
            <div class="image">
                <img src="/images/about.jpg" alt="{{ config('globals.app_name') }} - Leading Gold Refinery in East Africa">
            </div>

            <div class="content">
                <div class="header">
                    <p>Who we are</p>
                    <h2>Welcome to {{ config('globals.app_name') }}</h2>
                </div>
                <div class="text">
                    <p><a href="{{ url('/services#refining') }}">Afriswiss Gold Refinery</a> is a leading <strong>gold refining</strong> company based in Kampala, Uganda. We specialize in <a href="{{ url('/services#bullion-trading') }}">bullion trading</a>, <a href="{{ url('/services#smelting') }}">smelting</a>, and other <a href="{{ url('/services/') }}">precious metal services</a>.</p>
                    <p>One of the key features that set Afriswiss Gold Refinery apart from other refineries is our commitment to providing exceptional customer service. We have a team of highly skilled and experienced professionals who are always ready to assist clients with their refining needs. We ensure that each client is provided with personalized attention and that their needs are met to the highest standards.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="History">
        <div class="container">
            <div class="history">
                <h2>Our Journey: From Gold Refining to Global Excellence</h2>
                <p>We commit to constantly pursue valuable change in everything we do, from helping young and talented jewelers realize their potential. We continue to grow Afriswiss Refinery, while doing our part to decrease Africa’s high unemployment rates.</p>
            </div>
            <div class="history">
                <h2>Our People: The Strength Behind Our Success</h2>
                <p>Integral to driving our pursuit of excellence and constantly refining our offering are the people of Afriswiss Refinery. We enjoy exceptional long-term loyalty matched with talent and immense experience. And as a result, we have built long-term customer relationships in the process.</p>
            </div>
            <div class="history">
                <h2>Our Values: What Drives Us</h2>
                <p>To create value change, we first have to instill a set of shared beliefs within our organization. Our values have been developed in consultation with our employees.</p>
            </div>
            <div class="history">
                <h2>Company Policies: Our Commitment to Integrity</h2>
                <p>Afriswiss Gold Refinery’s values provide the framework for the development, implementation, maintenance, monitoring, and review of company policies and procedures.</p>
            </div>
            <div class="history">
                <h2>Sustainability: Making a Positive Impact</h2>
                <p>Afriswiss Gold Refinery is passionate about improving the lives of people and our communities by making a positive difference and contributing towards the well-being of those around us.</p>
            </div>
        </div>
    </section>
</x-guest-layout>
