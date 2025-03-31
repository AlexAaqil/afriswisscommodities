<x-guest-layout class="ContactPage">
    <x-slot name="head">
        <meta name="description" content="Contact {{ config('globals.app_name') }} for inquiries, support, and business collaborations. Reach us via phone, email, or visit our office.">
        <meta name="keywords" content="contact {{ config('globals.app_name') }}, customer support, business inquiries, reach us">
        <title>Contact {{ config('globals.app_name') }} | Get in Touch</title>
        
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ContactPage",
            "name": "Contact {{ config('globals.app_name') }}",
            "url": "{{ url('/contact') }}",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ config('globals.app_phone_number') }}",
                "email": "{{ config('globals.app_email') }}",
                "contactType": "customer service"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ config('globals.app_address') }}",
                "postalCode": "{{ config('globals.app_pobox') }}"
            }
        }
        </script>
    </x-slot>

    <section class="Contact">
        <div class="container">
            <div class="contact_details">
                <div class="header">
                    <h1>Contact Us</h1>
                    <p>We value your inquiries and feedback. Whether you have questions about our services, need support, or want to explore business opportunities, we are here to help.</p>
                </div>

                <div class="contact">
                    <div class="details">
                        <div class="detail">
                            <img src="{{ asset('assets/images/email.png') }}" alt="Email" width="30" height="30">
                            <p>alexaaqil.se@gmail.com</p>
                        </div>

                        <div class="detail">
                            <img src="{{ asset('assets/images/telephone.png') }}" alt="Telephone" width="30" height="30">
                            <p>
                                <span>+254 746 055 487</span>
                            </p>
                        </div>

                        <div class="detail">
                            <img src="{{ asset('assets/images/clock.png') }}" alt="Clock" width="30" height="30">
                            <p>
                                <span>Mon to Fri</span>
                                <span>08:00 A.M - 05:00 P.M</span>
                            </p>
                        </div>

                        <div class="detail">
                            <img src="{{ asset('assets/images/location.png') }}" alt="Clock" width="30" height="30">
                            <p>
                                <span>Wilson Airport</span>
                                <span>{{ config('globals.app_location') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact_form">
                <form action="{{ route('messages.store') }}" method="post">
                    @csrf

                    <div class="inputs">
                        <input type="text" name="name" id="name" placeholder="" value="{{ old('name') }}">
                        <label for="name">Full Name</label>
                        <x-input-error field="name" />
                    </div>

                    <div class="inputs">
                        <input type="email" name="email" id="email" placeholder="" value="{{ old('email') }}">
                        <label for="email">Email Address</label>
                        <x-input-error field="email" />
                    </div>

                    <div class="inputs">
                        <input type="text" name="phone_number" id="phone_number" placeholder="" value="{{ old('phone_number') }}">
                        <label for="phone_number">Phone Number</label>
                        <x-input-error field="phone_number" />
                    </div>

                    <div class="inputs">
                        <textarea name="message" id="message" cols="30" rows="7" placeholder="">{{ session('success') ? '' : request('message', old('message')) }}</textarea>
                        <label for="message">Your message</label>
                        <x-input-error field="message" />
                    </div>

                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>

