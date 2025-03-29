<x-guest-layout class="ProductsPage">
    <x-slot name="head">
        <meta name="description" content="Discover premium gold products at {{ config('globals.app_name') }}, including minted bars, cast bars, coin blanks, and gold nuggets.">
        <meta name="keywords" content="minted gold bars, cast gold bars, coin blanks, gold nuggets, bullion trading, gold refining {{ config('globals.app_location') }}, gold investment, precious metals market">
        <title>{{ config('globals.app_name') }} | Our Gold Products</title>

        {{-- Structured Data for SEO --}}
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Minted Bars",
            "brand": "{{ config('globals.app_name') }}",
            "description": "Premium-quality minted gold bars available in 10g, 50g, and 100g sizes.",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "USD",
                "availability": "https://schema.org/InStock"
            }
        }
        </script>
        
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Cast Bars",
            "brand": "{{ config('globals.app_name') }}",
            "description": "Internationally recognized Good Delivery cast gold bars in 100 oz and 400 oz sizes.",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "USD",
                "availability": "https://schema.org/InStock"
            }
        }
        </script>
        
    </x-slot>

    <section class="Hero">
        <div class="container">
            <h1>Premium Gold Products</h1>
            <p>Explore our high-quality range of gold investment products, including Minted Bars, Cast Bars, Coin Blanks, and Gold Nuggets.</p>
        </div>
    </section>

    <section class="Products">
        <div class="container">
            <div class="product" id="minted-bars">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="Minted Gold Bars">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Minted Bars</h2>
                    </div>
                    <p>Our **minted gold bars** are crafted with precision to ensure exceptional quality and purity. Available in **10g, 50g, and 100g gold** as well as **1oz silver**, these bars are an excellent investment for both individuals and businesses.</p>
                    <p>As an authorized agent for top gold producers, {{ config('globals.app_name') }} collaborates with LBMA-accredited refineries to ensure every bar meets international standards.</p>
                </div>
            </div>

            <div class="product" id="cast-bars">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="Cast Gold Bars">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Cast Bars</h2>
                    </div>
                    <p>Our **Good Delivery Cast Bars** are recognized globally by traders, banks, and investors. These bars come in **100 troy ounces and 400 troy ounces (LGD bars)**, meeting **London Good Delivery (LBMA) standards**.</p>
                    <p>{{ config('globals.app_name') }} has been a trusted supplier of **cast bars since 1974**, ensuring high purity and compliance with global trading platforms.</p>
                </div>
            </div>

            <div class="product" id="coin-blanks">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="Gold Coin Blanks">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Coin Blanks</h2>
                    </div>
                    <p>Our **gold coin blanks** are crafted with precision for mints worldwide. Each blank undergoes rigorous quality control to ensure accurate weight, size, and gold purity.</p>
                    <p>We supply **9ct, 14ct, 18ct, 22ct, and 24ct (9999)** gold blanks, as well as **999 silver blanks**, meeting the highest industry standards.</p>
                </div>
            </div>

            <div class="product" id="gold-nuggets">
                <div class="image">
                    <img src="{{ asset('assets/images/default_image.jpg') }}" alt="Gold Nuggets">
                </div>

                <div class="text">
                    <div class="header">
                        <h2>Gold Nuggets</h2>
                    </div>
                    <p>We provide **gold nuggets and granules** for investment and industrial applications. Our gold alloys, available in **sterling silver and various carat grades**, are trusted by jewelry manufacturers and refiners worldwide.</p>
                    <p>All our gold products are sourced from **responsible mining** and refined to **industry-leading standards**.</p>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
