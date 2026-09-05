<?php
$pageTitle = 'Pricing Plans - Cleva';
$metaDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$metaKeywords = 'Web Hosting, Domain Registration, Reseller Hosting, Cloud Hosting, VPS';
$canonical = 'pricing.php';
$ogTitle = 'Pricing Plans - Cleva';
$ogDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$ogUrl = 'https://clevahost.com/pricing.php';
$twitterTitle = 'Pricing Plans - Cleva';
$twitterDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$bodyClass = 'page-template template-pricing';
?>
<?php include 'components/header.php'; ?>

    <!-- HEADER AREA -->
    <?php include 'components/navbar.php'; ?>
    <!-- HEADER AREA END -->

    <!-- shared hosting banner -->
    <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-area">
                        <div class="rts-hosting-banner rts-hosting-banner__content pricing__banner">
                            <span class="starting__price" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Comparison Pricing</span>
                            <h1 class="banner-title" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                                Compare Cleva
                                Hosting Plans
                            </h1>
                            <div class="feature mb-0" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                                <ul class="feature__list">
                                    <li class="feature__item">24/7 Customer Support</li>
                                    <li class="feature__item">Free Domain</li>
                                    <li class="feature__item">Free Website Migration</li>
                                </ul>
                            </div>
                        </div>
                        <div class="rts-hosting-banner__image pricing-compare">
                            <img src="assets/images/banner/pricing/banner__pricing__image.svg" alt="">
                            <div class="shape__image">
                                <img src="assets/images/banner/pricing/shape__star.svg" alt="" class="shape__image--one show-hide">
                                <img src="assets/images/banner/pricing/shape__dollar.svg" alt="" class="shape__image--two top-bottom">
                                <img src="assets/images/banner/pricing/shape__dollar-2.svg" alt="" class="shape__image--three">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan pricing-comparison alice__blue section__padding">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center">
                    <h4 class="title fw-bold mb--25">Feature</h4>
                    <div class="rts-pricing-plan__tab pricing__tab">
                        <div class="tab__button">
                            <div class="tab__button__item">
                                <button class="active tab__btn" data-tab="monthly">monthly</button>
                                <button class="tab__btn" data-tab="yearly">yearly</button>
                            </div>
                        </div>
                        <div class="discount">
                            <p>20% save</p>
                        </div>
                    </div>
                </div>

                <!-- PRICING PLAN -->
                <div class="col-lg-12">
                    <div class="tab__content  open" id="monthly">
                        <table class="table table-hover table-responsive">
                            <thead class="heading__bg">
                                <tr>
                                    <th class="cell">Value</th>
                                    <th class="cell">Core</th>
                                    <th class="cell">RAM</th>
                                    <th class="cell">Storage</th>
                                    <th class="cell">Monthly Price</th>
                                    <th class="cell"></th>
                                </tr>
                            </thead>
                            <tbody class="table__content">
                                <tr>
                                    <td class="package">Standard 4</td>
                                    <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                    <td class="ram">4 GB</td>
                                    <td class="storage">1 TB HDD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>99.00</span> /mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">Standard 4</td>
                                    <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                    <td class="ram">8 GB</td>
                                    <td class="storage">1 TB HDD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>199.00</span>/mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">Standard 8</td>
                                    <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                    <td class="ram">16 GB</td>
                                    <td class="storage">1 TB HDD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>299.00</span>/mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">Standard 16</td>
                                    <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                    <td class="ram">16 GB</td>
                                    <td class="storage">2 TB HDD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>399.00</span>/mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">Enhanced 32</td>
                                    <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                    <td class="ram">32 GB</td>
                                    <td class="storage">2 TB HDD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>499.00</span>/mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">Enhanced 64</td>
                                    <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                    <td class="ram">64 GB</td>
                                    <td class="storage">2 TB HDD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>599.00</span>/mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">Enhanced SSD 16</td>
                                    <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                    <td class="ram">16 GB</td>
                                    <td class="storage">240 GB SSD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>299.00</span>/mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">Enhanced SSD 64</td>
                                    <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                    <td class="ram">64 GB</td>
                                    <td class="storage">240 GB SSD</td>
                                    <td class="price"><span rt-currency-symbol>$</span><span rt-price>399.00</span>/mo</td>
                                    <td>
                                        <div class="btn__two primary__btn">sign up</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="additional-content">
                            <div class="plan-extra">
                                <p class="text-capitalize text-center font-small">all plan come with</p>
                            </div>
                        </div>
                        <table class="table table-hover table-responsive table-bottom">
                            <tbody class="table__content">
                                <tr>
                                    <td class="package">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> 300 Websites</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs.">
                                                <i class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="process">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Bandwidth</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="ram">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Bandwidth</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="storage">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Bandwidth</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="package">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Free Domain ($9.99 value)</span>
                                        </span>
                                    </td>
                                    <td class="process">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="ram">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="storage">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="process">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> 250 GB NVMe Storage</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="ram">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> 250 GB NVMe Storage</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="storage">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> 250 GB NVMe Storage</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="package">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="process">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="ram">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="storage">
                                        <span class="content">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                        <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                class="fa-light fa-circle-question"></i>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- PRICING PLAN -->
                <div class="tab__content" id="yearly">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">Value</th>
                                <th class="cell">Core</th>
                                <th class="cell">RAM</th>
                                <th class="cell">Storage</th>
                                <th class="cell">Monthly Price</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">Standard 4</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">4 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$367.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 4</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">8 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$499.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 8</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$599.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 16</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$499.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced 32</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">32 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$699.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced 64</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">64 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$899.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced SSD 16</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">240 GB SSD</td>
                                <td class="price">$499.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced SSD 64</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">64 GB</td>
                                <td class="storage">240 GB SSD</td>
                                <td class="price">$599.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="additional-content">
                        <div class="plan-extra">
                            <p class="text-capitalize text-center font-small">all plan come with</p>
                        </div>
                    </div>
                    <table class="table table-hover table-responsive table-bottom">
                        <tbody class="table__content">
                            <tr>
                                <td class="package">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> 300 Websites</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs.">
                                            <i class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="process">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Bandwidth</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                        class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="ram">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Bandwidth</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                        class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="storage">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Bandwidth</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                        class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>

                            </tr>
                            <tr>
                                <td class="package">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Free Domain ($9.99 value)</span>
                                    </span>
                                </td>
                                <td class="process">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="ram">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="storage">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="process">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> 250 GB NVMe Storage</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="ram">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> 250 GB NVMe Storage</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="storage">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> 250 GB NVMe Storage</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="process">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="ram">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                                <td class="storage">
                                    <span class="content">
                                        <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                    <span class="tolltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unlock superior online experiences with our Unlimited Free SSL solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                            class="fa-light fa-circle-question"></i>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- PRICING PLAN START END -->

    <!-- SHARED HOSTING FAQ -->
    <div class="rts-hosting-faq section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title mb-0" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Frequently asked questions</h2>
                    </div>
                    <div class="rts-faq__accordion" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                        <div class="accordion accordion-flush" id="rts-accordion">
                            <div class="accordion-item active">
                                <div class="accordion-header" id="first">
                                    <h4 class="accordion-button collapse show" data-bs-toggle="collapse" data-bs-target="#item__one" aria-expanded="false" aria-controls="item__one">
                                        How do I choose the right hosting plan?
                                    </h4>
                                </div>
                                <div id="item__one" class="accordion-collapse collapse collapse show" aria-labelledby="first" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Start with what you are building: shared hosting suits most small sites, WordPress hosting is tuned for WordPress, and VPS or dedicated servers suit high-traffic or custom workloads.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="two">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__two" aria-expanded="false" aria-controls="item__two">
                                        Can I switch plans later?
                                    </h4>
                                </div>
                                <div id="item__two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Yes, you can upgrade or downgrade at any time from your account panel, and we will prorate the difference.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="three">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__three" aria-expanded="false" aria-controls="item__three">
                                        Are there any hidden fees?
                                    </h4>
                                </div>
                                <div id="item__three" class="accordion-collapse collapse" aria-labelledby="three" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        No. The price you see is the price you pay — renewal rates are shown upfront on every plan, with no surprise charges.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="four">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__four" aria-expanded="false" aria-controls="item__four">
                                        Do you offer a money-back guarantee?
                                    </h4>
                                </div>
                                <div id="item__four" class="accordion-collapse collapse" aria-labelledby="four" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Yes, every plan includes a 30-day money-back guarantee, no questions asked.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="five">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__five" aria-expanded="false" aria-controls="item__four">
                                        What payment methods do you accept?
                                    </h4>
                                </div>
                                <div id="item__five" class="accordion-collapse collapse" aria-labelledby="five" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        We accept all major cards plus a range of local and regional payment methods, shown at checkout.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SHARED HOSTING FAQ END -->


    <!-- CLEVA CTA -->
    <div class="rts-cta-two shared-page-bg">
        <div class="container">
            <div class="row">
                <div class="rts-cta-two__wrapper">
                    <div class="cta__shape"></div>
                    <div class="cta-content">
                        <span data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Need help choosing a plan?</span>
                        <h4 data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">Need help?
                            We're always here for you.</h4>
                    </div>
                    <div class="cta-btn">
                        <a href="support.php" class="contact__us primary__btn btn__two secondary__bg secondary__color">Go to Live chat Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CLEVA CTA END -->


    <!-- FOOTER AREA -->
    <?php include 'components/footer.php'; ?>
