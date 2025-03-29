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

    <section class="Hero">
        <div class="container">
            <div class="content">
                <div class="header">
                    <h1>Contact Us</h1>
                    <p>We value your inquiries and feedback. Whether you have questions about our services, need support, or want to explore business opportunities, we are here to help.</p>
                </div>

                <div class="contact_details">
                    <p class="contacts">
                        <strong>Phone:</strong> <span>{{ config('globals.app_phone_number') }}</span><br>
                        <strong>Email:</strong> <span>{{ config('globals.app_email') }}</span>
                    </p>
                    <p class="address">
                        <strong>Address:</strong> <span>{{ config('globals.app_address') }}, {{ config('globals.app_pobox') }}</span>
                    </p>
                </div>
            </div>

            <div class="custom_form">
                <form action="{{ route('messages.store') }}" method="post">
                    @csrf
                    
                    <div class="inputs">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your full name" value="{{ old('name') }}">
                        <x-input-error field="name" />
                    </div>

                    <div class="inputs">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                        <x-input-error field="email" />
                    </div>

                    <div class="inputs">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                        <x-input-error field="phone_number" />
                    </div>

                    <div class="inputs">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" cols="30" rows="7" placeholder="Type your message here">{{ session('success') ? '' : request('message', old('message')) }}</textarea>
                        <x-input-error field="message" />
                    </div>

                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
