<?php
/**
 * Template Name: Home
 * Description: A custom home page template for the website.
 */

get_header(); 
?>

<main id="main" class="site-main">
    <section class="section-hero">
        <div class="section-hero-image-1">
            <img class="d" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            <img class="m" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-1-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-image-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-image-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-image-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-wrapper">
            <div class="section-hero-top-wrapper">
                <div class="section-hero-box">
                    <div class="section-hero-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-hero-header-box">
                        <h1 class="section-hero-header">FLY HIGH<br>WITH ANGA</h1>
                    </div>
                    <div class="section-hero-paragraph-box">
                        <p class="section-hero-paragraph">Strategy That Leaves the Ground</p>
                    </div>
                    <div class="section-hero-form-wrapper">
                        <div class="section-hero-form-header-box">
                            <p class="section-hero-form-header">By invitation Only.<br class="m"> Register To Join Our Exclusive ANGA Event<br class="m"> And Gain Valuable Insights.</p>
                        </div>
                        <div class="form-container">
                            <h2>ลงทะเบียนเข้าร่วมงาน</h2>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                    portalId: "47478898",
                                    formId: "1dfcbf8d-e1aa-4234-a735-d95f0c9f8249",
                                    region: "na1"
                                });
                            </script>
                            
                        </div>
                        <!-- <div class="form-container">
                            <h2>ลงทะเบียนเข้าร่วมงาน</h2>
                            <form id="registerForm" class="form-wrapper">
                                <div class="form-group">
                                    <label for="name">ชื่อ-นามสกุล*</label>
                                    <input type="text" id="name" placeholder="กรอกชื่อ-นามสกุล" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">เบอร์โทร*</label>
                                    <input type="tel" id="phone" placeholder="กรอกเบอร์โทร" required>
                                </div>
                                <div class="form-group">
                                    <label for="position">ตำแหน่ง</label>
                                    <input type="text" id="position" placeholder="กรอกตำแหน่ง">
                                </div>
                                <div class="form-group">
                                    <label for="company">ชื่อบริษัท</label>
                                    <input type="text" id="company" placeholder="กรอกชื่อบริษัท">
                                </div>
                                <button type="submit" class="btn">ลงทะเบียน</button>
                            </form>
                            
                        </div> -->
                    </div>
                </div>

                <div class="swiper-container main-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/image-hero-slide-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box active">
                                <p class="section-top-image-silde-paragraph">Digital<br>Strategist</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/image-hero-slide-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">Social Media</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/image-hero-slide-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">Performance<br>Marketing</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/image-hero-slide-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">SEO</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/image-hero-slide-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">MarTech & AI</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/image-hero-slide-6.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">Branding</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-hero-bottom-container">
                <div class="section-hero-bottom-wrapper">
                    <div class="section-hero-bottom-header-box">
                        <h2 class="section-hero-bottom-header">DATE &<br><span>LOCATION</span></h2>
                    </div>
                    <div class="section-hero-bottom-detail-box">
                        <div class="section-hero-bottom-detail-date-box">
                            <div class="section-hero-bottom-detail-date-header-box">
                                <p class="section-hero-bottom-detail-date-header">Date</p>
                            </div>
                            <div class="section-hero-bottom-detail-date-paragraph-box">
                                <p class="section-hero-bottom-detail-date-paragraph">March 28th, 2025</p>
                            </div>
                        </div>
                        <div class="section-hero-bottom-detail-time-box">
                            <div class="section-hero-bottom-detail-time-header-box">
                                <p class="section-hero-bottom-detail-time-header">Time</p>
                            </div>
                            <div class="section-hero-bottom-detail-time-paragraph-box">
                                <p class="section-hero-bottom-detail-time-paragraph">09:00 AM - 04:00 PM</p>
                            </div>
                        </div>
                        <div class="section-hero-bottom-detail-location-box">
                            <div class="section-hero-bottom-detail-location-header-box">
                                <p class="section-hero-bottom-detail-location-header">Location</p>
                            </div>
                            <div class="section-hero-bottom-detail-location-bottom-box">
                                <div class="section-hero-bottom-detail-location-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/KIMPTON_LOGO_OPTION_2_BLACK.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-hero-bottom-detail-location-paragraph-bottom-box">
                                    <a href="https://maps.app.goo.gl/SoVCycP6Qf48VgM79" class="section-hero-bottom-detail-location-paragraph-1-box" target="_blank">
                                        <p class="section-hero-bottom-detail-location-paragraph-1">KIMPTON MAA-LAI BANGKOK</p>
                                        <div class="section-hero-bottom-detail-location-paragraph-1-image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/arrow_outward.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                        </div>
                                    </a>
                                    <div class="section-hero-bottom-detail-location-paragraph-2-box">
                                        <p class="section-hero-bottom-detail-location-paragraph-2">78 SOI TONSON LUMPINI PATHUMWAN BANGKOK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-speaker">
        <div class="section-speaker-wrapper">
            <div class="section-speaker-background-image-1">
                <img class="d" src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-background-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                <img class="m" src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-background-1-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-background-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-background-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-background-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-header-box">
                <h2 class="section-speaker-header">SPEAKER <br class="m"><span>ภายในงาน</span></h2>
            </div>
            <div class="section-speaker-detail-container">
                <div class="section-speaker-detail-wrapper">
                    <a href="https://angamastery.co.th/rachavit-whangpatanathon/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Rachavit<br>Whangpatanathon</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Managing Director of ANGA</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/kantika-waewsawang/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Kantika<br>Waewsawang</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Team Lead, Paid Media</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/tanin-chulasub/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Tanin<br>Chulasub</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Head of Performance Marketing</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/rynlita-yosvimonpat/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Rynlita<br>Yosvimonpat</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Head of SEO</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/pailin-pama/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Pailin<br>Pama</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Special Guest</p>
                        </div>
                    </a>
                    <div class="section-speaker-detail-box">
                        <div class="section-speaker-detail-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speaker/speaker-6.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Raziqaa<br>Paneewong</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Special Guest</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="section-agenda">
        <div class="section-agenda-wrapper">
            <div class="section-agenda-background-image-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-background-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-agenda-background-image-2">
                <img class="d" src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-background-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                <img class="m" src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-background-2-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-agenda-background-image-3">
                <img class="m" src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-background-3-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>

            <div class="section-agenda-header-box">
                <h2 class="section-agenda-header">AGENDA</h2>
            </div>
            <div class="section-agenda-detail-wrapper">
                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">09:30 - 10:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">ANGA's Agency Insights in <br class="m">2024</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Key takeaways from ANGA’s 2024 experiences— marketing insights, and lessons learned to shape winning strategies for 2025.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-image-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Rachavit<br>Whangpatanathon</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Managing Director of ANGA</p>
                        </div>
                    </div>

                    <div class="section-agenda-detail-background"></div>
                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">10:00 - 10:30</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Social Media Marketing in 2025</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Stay ahead with 2025’s social media trends, creatives guidelines that sells, and ANGA’s proven strategies to boost engagement, visibility, and conversions.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-image-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Kantika<br>Waewsawang</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Team Lead, Paid Media</p>
                        </div>
                    </div>

                    <!-- <div class="section-agenda-detail-background"></div> -->

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">10:45 - 11:15</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Google Ads in 2025</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Discover ANGA’s key success factors in Google Ads, including Google Ads Updates and Optimization Best Practices.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-image-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Tanin<br>Chulasub</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Head of Performance<br>Marketing</p>
                        </div>
                    </div>

                    <div class="section-agenda-detail-background"></div>

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">11:15 - 12:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">45 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">SEO in 2025</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Decode the One Year of SEO Audit Secrets with ANGA from 10,000 Keywords and 200+ Websites</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-image-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Rynlita<br>Yosvimonpat</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Head of SEO</p>
                        </div>
                    </div>

                    <!-- <div class="section-agenda-detail-background"></div> -->

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">13:00 - 13:30</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">MarTech Innovations & AI</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Discover how MarTech and AI are transforming marketing, from automation to data-driven personalization, enhancing efficiency and impact.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-image-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Pailin<br>Pama</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Special Guest</p>
                        </div>
                    </div>

                    <div class="section-agenda-detail-background"></div>

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">13:30 - 14:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Branding for Corporates</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Master corporate branding with powerful storytelling, strategic positioning, and digital touchpoints to build trust and long-term customer loyalty.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/agenda-image-6.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">RaziQaa<br>Paneewong</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Special Guest</p>
                        </div>
                    </div>

                    <!-- <div class="section-agenda-detail-background"></div> -->

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">14:00 - 15:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">60 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Optional - Workshop</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">A hands-on session of Secret SEO & Paid Media Chrome Extensions and tools from ANGA Mastery.</p>
                        </div>
                    </div>


                    <div class="section-agenda-detail-background"></div>

                </div>

                
            </div>
        </div>
    </section>

    <section class="section-slide-show">
        <div class="section-slide-show-wrapper">
            <div class="section-slide-show-background">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-show/slide-show-background.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>

            <!-- Swiper Container -->
            <div class="swiper-container section-slide-show-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-show/slide-show-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-show/slide-show-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-show/slide-show-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-show/slide-show-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-show/slide-show-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    <section class="section-footer">
        <div class="section-footer-wrapper">
            <div class="section-footer-background">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/footer-background.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>

            <div class="section-footer-header-wrapper">
                <div class="section-footer-header-box">
                    <h2 class="section-footer-header">FLY HIGH WITH<br class="d"> ANGA</h2>
                </div>
                <div class="section-footer-header-detail-box">
                    <p class="section-footer-header-detail">Strategy That Leaves the Ground</p>
                </div>
            </div>
            <div class="section-footer-detail-wrapper">
                <div class="section-footer-detail-header-box">
                    <p class="section-footer-detail-header">Register Now</p>
                </div>
                <div class="section-footer-detail-paragraph-box">
                    <p class="section-footer-detail-paragraph">By invitation only. Register to join our exclusive ANGA event and gain valuable insights.</p>
                </div>
                <!-- ปุ่มกดเพื่อเปิด Popup -->
                <a href="#" class="section-footer-detail-button" id="openPopup">
                    <p class="section-footer-detail-button-paragraph">ลงทะเบียน</p>
                    <div class="section-footer-detail-button-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/arrow_outward.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                </a>

                <!-- Popup เต็มหน้าจอ (เริ่มต้นซ่อน) -->
                <div id="popup" class="popup-overlay">
                    <div class="popup-content">
                        <span class="close-popup"></span> <!-- ปุ่มปิด -->
                        <div class="form-container">
                            <h2>ลงทะเบียนเข้าร่วมงาน</h2>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                    portalId: "47478898",
                                    formId: "1dfcbf8d-e1aa-4234-a735-d95f0c9f8249",
                                    region: "na1"
                                });
                            </script>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>

<?php
get_footer(); 
?>
