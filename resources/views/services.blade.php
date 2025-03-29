<x-guest-layout class="ServicesPage">
    <x-slot name="head">
        <meta name="description" content="At {{ config('globals.app_name') }}, we offer a wide range of services with a specialization in gold refining, smelting, and bullion trading.">
        <meta name="keywords" content="gold refining {{ config('globals.app_location') }}, gold refinery {{ config('globals.app_location') }}, smelting, bullion trading, gold investment, metal recycling, gold assay, precious metals">
        <title>{{ config('globals.app_name') }} | Services We Provide</title>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Gold Refining",
            "provider": {
                "@type": "Organization",
                "name": "{{ config('globals.app_name') }}",
                "url": "{{ url('/') }}",
                "logo": "{{ url('/images/logo.png') }}"
            },
            "description": "{{ config('globals.app_name') }} provides professional gold refining services, ensuring the highest purity standards.",
            "areaServed": {
                "@type": "Country",
                "name": "{{ config('globals.app_location') }}"
            }
        }
        </script>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Assaying",
            "provider": {
                "@type": "Organization",
                "name": "{{ config('globals.app_name') }}",
                "url": "{{ url('/') }}",
                "logo": "{{ url('/images/logo.png') }}"
            },
            "description": "{{ config('globals.app_name') }} specializes in fire assay and ICP testing to determine the purity of gold and other precious metals.",
            "areaServed": {
                "@type": "Country",
                "name": "{{ config('globals.app_location') }}"
            }
        }
        </script>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Smelting",
            "provider": {
                "@type": "Organization",
                "name": "{{ config('globals.app_name') }}",
                "url": "{{ url('/') }}",
                "logo": "{{ url('/images/logo.png') }}"
            },
            "description": "As a leading gold refinery, {{ config('globals.app_name') }} offers high-quality smelting and metal recovery services.",
            "areaServed": {
                "@type": "Country",
                "name": "{{ config('globals.app_location') }}"
            }
        }
        </script>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Bullion Trading",
            "provider": {
                "@type": "Organization",
                "name": "{{ config('globals.app_name') }}",
                "url": "{{ url('/') }}",
                "logo": "{{ url('/images/logo.png') }}"
            },
            "description": "{{ config('globals.app_name') }} buys and sells gold, silver, and other precious metals at competitive market rates.",
            "areaServed": {
                "@type": "Country",
                "name": "{{ config('globals.app_location') }}"
            }
        }
        </script>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Minting",
            "provider": {
                "@type": "Organization",
                "name": "{{ config('globals.app_name') }}",
                "url": "{{ url('/') }}",
                "logo": "{{ url('/images/logo.png') }}"
            },
            "description": "{{ config('globals.app_name') }} provides custom minting services for coins, bars, and medals.",
            "areaServed": {
                "@type": "Country",
                "name": "{{ config('globals.app_location') }}"
            }
        }
        </script>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Transportation & Logistics",
            "provider": {
                "@type": "Organization",
                "name": "{{ config('globals.app_name') }}",
                "url": "{{ url('/') }}",
                "logo": "{{ url('/images/logo.png') }}"
            },
            "description": "{{ config('globals.app_name') }} provides secure and efficient logistics solutions for transporting precious metals.",
            "areaServed": {
                "@type": "Country",
                "name": "{{ config('globals.app_location') }}"
            }
        }
        </script>
    </x-slot>

    <section class="Hero">
        <div class="container">
            <h1>Our Services</h1>
            <p>Explore our Gold Refining, Smelting and Bullion Trading Services</p>
        </div>
    </section>

    <section class="Services">
        <div class="container">
            <div class="service" id="gold-refining">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Expert Gold Refining Service</h2>
                    </div>
                    <p>{{ config('globals.app_name') }} offers top-notch refining services for precious metals such as gold, silver, platinum, and diamond. Our refining process is designed to transform raw or scrap metal into high-quality, pure, and valuable metals.</p>
                    <p>We use the latest technology and equipment to refine metals to the highest level of purity, ensuring that the metals meet the required standards.</p>
                    <p>Our expertise in refining precious metals has made us a trusted partner for individuals and businesses in the precious metals industry.</p>
                </div>
            </div>

            <div class="service" id="assaying">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Cutting-Edge Assaying</h2>
                    </div>
                    <p>We specialise in the traditional Fire Assay Method, also known as the Cupellation Method, to determine the concentration of Gold. The technique uses Titration and Inductive Coupled Plasma or ICP to determine the purity of metals with very high precision.</p>
                    <p>X-ray Fluorescence is used to determine the elements present inside the alloys. ICP is also used to verify the purity of scrap gold that cannot be detected by fire assay due to the influence of contamination group elements. It is also used to cross-check the final product and results to determine the chemical concentration and company waste chemical specifications for disposal or reuse.</p>
                </div>
            </div>

            <div class="service" id="smelting">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Smelting and Metal Scraping</h2>
                    </div>
                    <p>As the leading gold refinery in Uganda, {{ config('globals.app_name') }} offers a full spectrum of smelting services to suit our client's requirements. Our state-of-the-art facilities coupled with our team of experts enable us to simultaneously process huge lots of gold while ensuring the highest quality standards and the shortest turnaround times at a very competitive premium to internationally accepted quality standards.</p>
                </div>
            </div>

            <div class="service" id="bullion-trading">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Bullion Trading</h2>
                    </div>
                    <p>{{ config('globals.app_name') }} offers bullion trading services to our clients. We buy and sell precious metals, including gold, silver, platinum, and other precious metal, at competitive prices.</p>
                </div>
            </div>

            <div class="service" id="minting">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Minting</h2>
                    </div>
                    <p>{{ config('globals.app_name') }} provides minting services to clients who want to create custom coins, bars, medals or other customized products. We use the latest technology and techniques to create high-quality products that meet our client's specifications.</p>
                </div>
            </div>

            <div class="service" id="transportation-and-logistics">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Secure Transportation & Logistics</h2>
                    </div>
                    <p>At {{ config('globals.app_name') }} we provide our clients with competitive, secure and first-class transportation and logistics solutions. Our team of experts provide you with the best services with complete, comprehensive and optimal logistics service solutions.</p>
                    <p>With a lot of experience in customs services, we can advise customers in detail on what documents to be prepared and ensure on schedule and cost-effective for each shipment. We track and provide customers with accurate information about their shipments' status!</p>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
