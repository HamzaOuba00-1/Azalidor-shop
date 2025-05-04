@extends('layouts.app')
@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="terms-conditions container">
        <div class="mw-930">
            <h2 class="page-title">Terms & Conditions</h2>
        </div>

        <div class="terms-conditions__content pb-5 mb-5">
            <div class="mw-930">
                <h3 class="mb-4">Introduction</h3>
                <p class="fs-6 fw-medium mb-4">
                    Welcome to Azalidor! These Terms & Conditions govern your use of our website and services. By accessing or using our website, you agree to comply with these terms. If you do not agree, please refrain from using our site.
                </p>

                <h3 class="mb-4">Eligibility</h3>
                <p class="mb-4">
                    To use our services, you must be at least 18 years old or have the consent of a legal guardian. By using our website, you confirm that you meet these requirements.
                </p>

                <h3 class="mb-4">Orders and Payments</h3>
                <p class="mb-4">
                    When you place an order on Azalidor, you agree to provide accurate and complete information. We reserve the right to cancel or refuse any order at our discretion.
                </p>
                <ul class="mb-4">
                    <li>All payments are processed securely through our payment gateway.</li>
                    <li>Prices are subject to change without notice.</li>
                    <li>Taxes and shipping fees will be calculated at checkout.</li>
                </ul>

                <h3 class="mb-4">Shipping and Delivery</h3>
                <p class="mb-4">
                    We strive to deliver your orders promptly. However, delivery times may vary depending on your location and product availability.
                </p>
                <ul class="mb-4">
                    <li>Shipping costs are the responsibility of the customer.</li>
                    <li>Risk of loss or damage passes to you upon delivery.</li>
                </ul>

                <h3 class="mb-4">Returns and Refunds</h3>
                <p class="mb-4">
                    If you are not satisfied with your purchase, you may return it within 30 days of delivery for a refund or exchange. Please review our <a href="{{ route('privacy.policy') }}">Return Policy</a> for more details.
                </p>

                <h3 class="mb-4">Intellectual Property</h3>
                <p class="mb-4">
                    All content on this website, including text, images, logos, and designs, is the property of Azalidor and is protected by intellectual property laws. Unauthorized use is strictly prohibited.
                </p>

                <h3 class="mb-4">Limitation of Liability</h3>
                <p class="mb-4">
                    Azalidor is not liable for any indirect, incidental, or consequential damages arising from your use of our website or services.
                </p>

                <h3 class="mb-4">Governing Law</h3>
                <p class="mb-4">
                    These Terms & Conditions are governed by the laws of Morocco. Any disputes will be resolved in the courts of Tinghir.
                </p>

                <h3 class="mb-4">Changes to These Terms</h3>
                <p class="mb-4">
                    We may update these Terms & Conditions from time to time. Any changes will be posted on this page, and your continued use of our website constitutes acceptance of the updated terms.
                </p>

                <h3 class="mb-4">Contact Us</h3>
                <p class="mb-4">
                    If you have any questions about these Terms & Conditions, please contact us at:
                </p>
                <p>
                    <strong>Email:</strong> support@azalidor.com<br>
                    <strong>Phone:</strong> +212 6 66 41 57 24<br>
                    <strong>Address:</strong> Tinghir, Morocco
                </p>
            </div>
        </div>
    </section>
</main>
@endsection
