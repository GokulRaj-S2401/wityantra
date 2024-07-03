<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wityantra_Fintech_Pvt_ltd
 */

get_header();
$active_id = get_the_ID();
$option = get_option( 'page_on_front' );
?>

	<!-- main-area -->
    <main class="fix">
        <!-- breadcrumb-area -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- breadcrumb-area-end -->
        <!-- services-details-area -->
    <section class="services__details-area product_1" id="chitto-id">
         <div class="container">
            <!-- Chitto ID -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about__content-two" data-aos="fade-right">
                        <div class="section-title mb-20 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">Chitto ID</h2>
                        </div>
                        <p class="Product_details_Content">
                            Chitto ID, brought to you by Wityantra Fintech, is a user-friendly, safe, and secure identification and authentication solution. It uniquely verifies and authenticates users, guaranteeing identity protection across various sectors, including financial services, insurance, healthcare, government programs, and transportation. Chitto ID enables consumers to securely and anonymously access their accounts,
                            ensuring peace of mind and convenience in the digital realm.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="services__img-wrap-two " data-aos="fade-down">
                     <img src="/wityantra/wp-content/uploads/2024/mascot/chitto.png"  class="prblm_statement_mascot" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- Surakhsuit card -->
    <section class="services__details-area product_2" id="surakhshit-card">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="about__img-wrap-two" data-aos="zoom-in">
                        <img src="/wityantra/wp-content/uploads/2024/mascot/surakshit.png"  alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-two" data-aos="fade-left">
                    <div class="section-title mb-20 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">Surakhshit Card</h2>
                        </div>
                        <p class="Product_details_Content">
                        Surakhshit Card, offered by Wityantra, is a revolutionary solution designed to mitigate payment fraud risks by eliminating confidential consumer credit/debit card data from the payment network. By replacing original sensitive card numbers with Surakhshit Card numbers, unauthorized access is thwarted, preventing thieves from making fraudulent transactions. Utilizing a patented algorithm, the Surakhshit Card generates unique and untraceable numbers, ensuring enhanced security. With the original card number retained by the bank and inaccessible to external systems, Surakhshit Card provides unparalleled protection against fraud, safeguarding consumers’ financial assets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

            <!-- Offline OTP -->
    <section class="services__details-area product_3" id="offline-otp">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about__content-two" data-aos="fade-right">
                        <div class="section-title mb-20 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">Offline OTP</h2>
                        </div>
                        <p class="Product_details_Content">
                             OffLine OTP, provided by Wityantra, empowers institutions to implement an enterprise-wide authentication policy safeguarding their critical applications, resources, and information. Utilizing advanced patented ‘dynamic’ single-use number technology, OffLine OTP ensures the authenticity of users while monitoring and protecting the flow of sensitive data and intellectual property. The platform offers customizable app pages, allowing institutions to personalize their apps with text, images, and graphics, enhancing user experience and security.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="services__img-wrap-two" data-aos="fade-left">
                        <img src="/wityantra/wp-content/uploads/2024/mascot/otp_copy.png"  alt="">
                    </div>
                </div>
            </div>
        </div>
     </section>
        <!-- services-details-area-end -->
        <!-- brand-area -->
        <?php
            //partner section 
            // get_template_part( 'template-parts/front/partner' );
        ?>
        <!-- brand-area -->
    </main>
    <!-- main-area-end -->

    <script>
        window.addEventListener('load', function() {
            const path = window.location.pathname;
            const pathSegments = path.split('/');
            const targetId = pathSegments[pathSegments.length -2 ];
            if (targetId) {
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    </script>

<?php
get_footer();
