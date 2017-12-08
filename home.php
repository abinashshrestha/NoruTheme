<?php
/**
 * Template Name: Home Page
 * Description: Landing page of the website
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="swiper-slide__content"
                 style="background-image: url(<?php echo get_template_directory_uri() . "/images/dubai.jpg" ?>);">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="swiper-slide__box d-flex align-items-center">
                        <div class="w-100">
                            <h3 class="swiper-slide__heading font-italic font-weight-light text-white mb-0">Its
                                about</h3>
                            <h1 class="swiper-slide__heading swiper-slide__heading--border-bottom text-center text-white text-uppercase">
                                Discovery</h1>
                            <p class="text-white font-italic text-center mt-5">Even the best products in pharmacy, will
                                die a slow natural death, if no one knows about them!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-slide__content"
                 style="background-image: url(<?php echo get_template_directory_uri() . "/images/HongKong.jpg" ?>);">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="swiper-slide__box d-flex align-items-center">
                        <div class="w-100">
                            <h3 class="swiper-slide__heading font-italic font-weight-light text-white mb-0">Its
                                about</h3>
                            <h1 class="swiper-slide__heading swiper-slide__heading--border-bottom text-center text-white text-uppercase">
                                Discovery</h1>
                            <p class="text-white font-italic text-center mt-5">Even the best products in pharmacy, will
                                die a slow natural death, if no one knows about them!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<article class="container py-5">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <h1 class="stroke-header stroke-header--top text-uppercase">About</h1>
            <p>Noru Pharma is a pharmaceutical company which works with pharmacy and personal health chains in
                Australia, New Zealand, Singapore, Hong Kong and the UK.</p>
            <p>Noru provides best in class product solutions for disease categories which remain under satisfied.</p>
        </div>
        <div class="col-sm-12 col-md-7 ml-md-auto mt-sm-3 mt-md-5">
            <h5 class="font-italic font-weight-bold">“Noru is committed to working with our partners to deliver
                extraordinary sales results through superior
                sales execution and innovative DTC advertising.”</h5>
            <div class="my-5">
                <span class="align-middle mr-4"
                      style="display: inline-block; width: 78px; height:78px">
                    <svg title="globe" class="svg-icon svg-icon--fluid svg-icon--green" role="img">
                        <use xlink:href="#globe"/>
                    </svg>
                </span>

                <span style="display: inline-block;" class="align-middle w-50 text-muted">Our chains are in Australia, New Zealand, Singapore, Hong Kong and UK</span>
            </div>
            <p class="text-muted">Noru is focused on ENT, Dermatology and Personal Health.</p>
            <p class="text-muted">The Management Team has built successful brands in OTC pharma in Australia, New
                Zealand and Singapore.</p>
        </div>
    </div>
</article>
<section class="bg-light py-5">
    <div class="container">
        <h1 class="text-center text-uppercase stroke-header stroke-header--bottom">Our Brands</h1>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                <a href="<?php echo get_permalink(1); ?>" class="card card--float">
                    <span class="card-body">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri() . "/images/wartfree.png" ?>"
                             alt="">
                        <span class="card-text mt-3 w-100">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</span>
                    </span>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                <a href="" class="card card--float">
                    <div class="card-body">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/audisol.png" ?>"
                             alt="">
                        <span class="card-text mt-3 w-100">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                <a href="" class="card card--float">
                    <div class="card-body">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/snorel.png" ?>"
                             alt="">
                        <span class="card-text mt-3 w-100">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                <a href="" class="card card--float">
                    <span class="card-body">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/klear.png" ?>"
                             alt="">
                        <span class="card-text mt-3 w-100">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</span>
                    </span>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                <a href="" class="card card--float">
                    <span class="card-body">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/pronail.png" ?>"
                             alt="">
                        <span class="card-text mt-3 w-100">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-fluid">
        <div class="row align-items-center position-relative">
            <div class="container">
                <div class="col-sm-12 col-md-7 ml-md-auto mt-6">
                    <h1 class="stroke-header stroke-header--top text-uppercase">Our Approach</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div>
                                <svg title="globe" class="svg-icon svg-icon--size-md svg-icon--green" role="img">
                                    <use xlink:href="#globe-2"/>
                                </svg>
                            </div>
                            <h4 class="mt-3">Global Growth Platform</h4>
                            <p class="text-muted">Management of trade, especially key retail chain partners</p>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div>
                                <svg title="shop" class="svg-icon svg-icon--size-md svg-icon--green" role="img">
                                    <use xlink:href="#shop"/>
                                </svg>
                            </div>
                            <h4 class="mt-3">Partnership with Retail Chains</h4>
                            <p class="text-muted">On brands in categories where we can make a unique pitch to consumers
                                with large payoffs in sales</p>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div>
                                <svg title="megaphone" class="svg-icon svg-icon--size-md svg-icon--green" role="img">
                                    <use xlink:href="#megaphone"/>
                                </svg>
                            </div>
                            <h4 class="mt-3">Innovative OTC Brands</h4>
                            <p class="text-muted">Our brands use state of the art technology. We are focused on long
                                term brand recognition</p>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div>
                                <svg title="chart" class="svg-icon svg-icon--size-md svg-icon--green" role="img">
                                    <use xlink:href="#chart"/>
                                </svg>
                            </div>
                            <h4 class="mt-3">Growth</h4>
                            <p class="text-muted">Organic and acquisition</p>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div>
                                <svg title="sound wave" class="svg-icon svg-icon--size-md svg-icon--green" role="img">
                                    <use xlink:href="#sound-wave"/>
                                </svg>
                            </div>
                            <h4 class="mt-3">Marketing Buzz</h4>
                            <p class="text-muted">[Text Here]</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-4 our-approach-img"
                 style="background-image: url(<?php echo get_template_directory_uri() . "/images/approach.jpg" ?>)"></div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <h1 class="stroke-header stroke-header--top text-uppercase">Our Credibility</h1>
        <div class="row">
            <div class="col-12 order-2 order-lg-1 col-lg-7">
                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-4">
                        <div class="media align-items-center">
                            <svg title="History" class="svg-icon svg-icon--size-md svg-icon--green mr-4 mb-2"
                                 role="img">
                                <use xlink:href="#history"/>
                            </svg>
                            <div class="media-body">
                                <h4 class="mt-0">History</h4>
                            </div>
                        </div>
                        <p class="text-muted mt-3">The team has successfully built brands in various markets. As part of
                            this
                            process, we have demonstrated sales and marketing capabilities.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-4">
                        <div class="media align-items-center">
                            <svg title="Capital" class="svg-icon svg-icon--size-md svg-icon--green mr-4 mb-2"
                                 role="img">
                                <use xlink:href="#dollar"/>
                            </svg>
                            <div class="media-body">
                                <h4 class="mt-0">Capital</h4>
                            </div>
                        </div>
                        <p class="text-muted mt-3">The team has committed capital resources to implement a 3 year plan.
                            Previous
                            commitments included all large pharmacy retail markets.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-4">
                        <div class="media align-items-center">
                            <svg title="Logistics" class="svg-icon svg-icon--size-md svg-icon--green mr-4 mb-2"
                                 role="img">
                                <use xlink:href="#logistics"/>
                            </svg>
                            <div class="media-body">
                                <h4 class="mt-0">Logistics</h4>
                            </div>
                        </div>
                        <p class="text-muted mt-3">Noru has partnered with recognised service providers to ensure supply
                            chain
                            conforms to the highest standards expected by our retail partners.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-4">
                        <div class="media align-items-center">
                            <svg title="Supply" class="svg-icon svg-icon--size-md svg-icon--green mr-4 mb-2" role="img">
                                <use xlink:href="#supply"/>
                            </svg>
                            <div class="media-body">
                                <h4 class="mt-0">Supply</h4>
                            </div>
                        </div>
                        <p class="text-muted mt-3">Noru only works with best in class European suppliers ensuring
                            protection
                            against quality issues and stock outs due to supply disruption.</p>
                    </div>
                </div>
            </div>
            <div class="offset-md-1 col-8 col-md-5 col-lg-3 mx-auto mb-4 order-1 order-lg-2 align-self-center">
                <svg class="svg-icon svg-icon--fluid" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 1591.94 1591.94">
                    <defs>
                        <style>.cls-1 {
                                isolation: isolate;
                            }

                            .cls-2 {
                                fill: #b3b3b3;
                            }

                            .cls-10, .cls-3, .cls-6, .cls-8 {
                                mix-blend-mode: multiply;
                            }

                            .cls-3 {
                                fill: url(#radial-gradient);
                            }

                            .cls-4 {
                                fill: #fff;
                            }

                            .cls-5 {
                                fill: #0bb26c;
                            }

                            .cls-6 {
                                fill: url(#radial-gradient-2);
                            }

                            .cls-7 {
                                fill: #0058a0;
                            }

                            .cls-8 {
                                fill: url(#radial-gradient-3);
                            }

                            .cls-9 {
                                fill: #df2935;
                            }

                            .cls-10 {
                                fill: url(#radial-gradient-4);
                            }

                            .cls-11 {
                                fill: #212922;
                            }</style>
                        <radialGradient id="radial-gradient" cx="1084.73" cy="432.26" r="301.94"
                                        gradientTransform="translate(-288.48 -130.32)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#b3b3b3"/>
                            <stop offset="0.27" stop-color="#b6b6b6"/>
                            <stop offset="0.48" stop-color="silver"/>
                            <stop offset="0.68" stop-color="#d1d1d1"/>
                            <stop offset="0.87" stop-color="#e9e9e9"/>
                            <stop offset="1" stop-color="#fff"/>
                        </radialGradient>
                        <radialGradient id="radial-gradient-2" cx="751.02" cy="277.26" r="301.94"
                                        gradientTransform="translate(24.68 1547.26) rotate(-90)"
                                        xlink:href="#radial-gradient"/>
                        <radialGradient id="radial-gradient-3" cx="906.02" cy="454.85" r="301.94"
                                        gradientTransform="translate(1701.7 1744.85) rotate(180)"
                                        xlink:href="#radial-gradient"/>
                        <radialGradient id="radial-gradient-4" cx="1239.24" cy="609.35" r="301.94"
                                        gradientTransform="translate(1899.35 -443.53) rotate(90)"
                                        xlink:href="#radial-gradient"/>
                    </defs>
                    <title>Asset 5@4x supply</title>
                    <g class="cls-1">
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-2"
                                      d="M413,413c-211.5,211.5-211.5,554.42,0,765.93s554.42,211.5,765.93,0,211.5-554.42,0-765.93S624.51,201.5,413,413Zm722.69,722.69c-187.62,187.62-491.82,187.62-679.45,0s-187.62-491.82,0-679.45,491.82-187.62,679.45,0S1323.32,948.07,1135.69,1135.69Z"/>
                                <circle class="cls-3" cx="796.24" cy="301.93" r="301.93"
                                        transform="translate(19.72 651.46) rotate(-45)"/>
                                <circle class="cls-4" cx="796.24" cy="301.93" r="267.09"/>
                                <circle class="cls-5" cx="796.24" cy="301.93" r="239.21"
                                        transform="translate(19.72 651.46) rotate(-45)"/>
                                <circle class="cls-6" cx="301.93" cy="796.24" r="301.93"
                                        transform="translate(-474.6 446.71) rotate(-45)"/>
                                <circle class="cls-4" cx="301.93" cy="796.24" r="267.09"/>
                                <circle class="cls-7" cx="301.93" cy="796.24" r="239.21"
                                        transform="translate(-474.6 446.71) rotate(-45)"/>
                                <circle class="cls-8" cx="795.69" cy="1290.01" r="301.93"
                                        transform="translate(-679.12 940.47) rotate(-45)"/>
                                <circle class="cls-4" cx="797.64" cy="1290.01" r="267.09"/>
                                <circle class="cls-9" cx="797.64" cy="1290.01" r="239.21"
                                        transform="translate(-678.55 941.85) rotate(-45)"/>
                                <circle class="cls-10" cx="1290.01" cy="795.69" r="301.93"
                                        transform="translate(-184.81 1145.23) rotate(-45)"/>
                                <circle class="cls-4" cx="1290.01" cy="795.69" r="267.09"/>
                                <circle class="cls-11" cx="1290.01" cy="795.69" r="239.21"
                                        transform="translate(-184.81 1145.23) rotate(-45)"/>
                                <path class="cls-4"
                                      d="M259.42,852.25,208.7,712.91H187.35a10.42,10.42,0,1,1,0-20.83h35.94l57,156.51a36.4,36.4,0,0,1,22.28,11.33l117.27-42.68,7.12,19.57L311.84,878.7a36.46,36.46,0,1,1-52.42-26.45Zm16.47,18.86a13.67,13.67,0,1,1-13.68,13.67A13.67,13.67,0,0,1,275.89,871.12Zm60.41-128L386,725l28.5,78.3L295.64,846.58l-28.5-78.31,49.57-18,13.8,37.91L350.09,781ZM341.89,730l-78.31,28.5L242.2,699.74l78.31-28.5Z"/>
                                <path class="cls-4"
                                      d="M820.42,1415H680.81V1185.84h31.25c12.82,0,22.72-11.29,31.25-20.83h83.33c8.55,9.54,18.46,20.83,31.25,20.83h31.25v95.31a78.86,78.86,0,0,0-15.63-1.56l-5.21.17v-73.08H826.64l-20.83,20.83H765.21l-21.91-20.83H701.64v187.5H804.41A78.42,78.42,0,0,0,820.42,1415Zm53.09-114.58a57.29,57.29,0,1,0,57.29,57.29A57.31,57.31,0,0,0,873.51,1300.42Zm0,93.75A36.46,36.46,0,1,1,910,1357.71,36.47,36.47,0,0,1,873.51,1394.17Zm26-31.25H868.31v-31.25h10.42v20.83h20.83Zm-157.82-42.21-10.93-10.25-8.33,8.57,19.42,18.5,32.67-33.25-8.49-8.42Zm64.07,11H785v-10.42h20.83Zm20.83-20.83H785v-10.42h41.67Zm-84.91-41.93-10.93-10.24-8.33,8.57,19.42,18.5,32.67-33.25-8.49-8.42Zm84.91,10.68H785v-10.42h41.67Zm0-20.83H785v-10.42h41.67Zm-52.08-62.5A10.42,10.42,0,1,0,785,1185.84,10.43,10.43,0,0,0,774.56,1196.26Z"/>
                                <path class="cls-4"
                                      d="M1290,691.53a104.17,104.17,0,1,1-104.17,104.17A104.28,104.28,0,0,1,1290,691.53Zm0-20.83a125,125,0,1,0,125,125A125,125,0,0,0,1290,670.69Zm41.67,146.7c0-22.34-23.25-28.56-41.07-36.94-10.82-5.62-9.46-19.05,6.05-20,8.6-.52,17.45,2,25.45,4.84l3.77-17.16a96,96,0,0,0-25.45-4.39v-10.6H1290v11.11c-20.26,2.78-31.08,15.49-31.08,29.69,0,25.4,29.66,29.27,39.35,33.78,13.23,5.92,10.78,18.23-1.19,20.95-10.39,2.35-23.64-1.75-33.59-5.62l-4.74,17.13A72.24,72.24,0,0,0,1290,847.8v10.4h10.42v-11C1317.68,844.81,1331.69,835.29,1331.67,817.39Z"/>
                                <path class="cls-4"
                                      d="M921.24,301.93a125,125,0,1,1-250,0h20.83a104.52,104.52,0,1,0,30.22-73.16l21.47,21.47-72.52,14.1,13.59-73.05L707.53,214a124.9,124.9,0,0,1,213.71,87.93Zm-135.42-62.5v83.33h72.92V301.93H806.66v-62.5Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container-fluid">
        <h1 class="stroke-header stroke-header--bottom text-uppercase text-center">Our Global Retail Partners</h1>
        <div class="row align-items-center">
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/cincottadiscountchemist.png" ?>"
                     class="img-fluid" alt="Cincotta Discount Chemist">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/costco.png" ?>" class="img-fluid"
                     alt="Costco">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/watsons.jpg" ?>" class="img-fluid"
                     alt="Watsons">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/Guardian.jpg" ?>" class="img-fluid"
                     alt="Guardian">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/mannings.jpg" ?>" class="img-fluid"
                     alt="Manning">
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/national-pharmacies.jpg" ?>"
                     class="img-fluid" alt="National Pharmacies">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/Pharmacy.jpg" ?>" class="img-fluid"
                     alt="Pharmacy">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/priceline.png" ?>" class="img-fluid"
                     alt="Priceline">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/superchem.jpg" ?>" class="img-fluid"
                     alt="Superchem">
            </div>
            <div class="col-6 col-md mt-4 px-4">
                <img src="<?php echo get_template_directory_uri() . "/images/unichem.png" ?>" class="img-fluid"
                     alt="Unichem">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <h1 class="stroke-header stroke-header--top">Our Global Market</h1>
        <div class="row">
            <div class="col">
                <img src="<?php echo get_template_directory_uri() . "/images/Global_Market.png" ?>" class="img-fluid"
                     alt="Noru Pharma Global Market">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
