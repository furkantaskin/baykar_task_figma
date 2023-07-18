<?php
$call_css = "index";
$call_js = "";
include "header.php";
?>
<main>
    <section class="banner p-rel">
        <div class="banner_upper p-rel">
            <h1>Collectible Sneakers</h1>
            <p>Sit elit feugiat turpis sed integer integer accumsan turpis. Sed suspendisse nec lorem mauris. Pharetra,
                eu imperdiet ipsum ultrices amet.</p>
            <div class="banner_nav d-flex j-c a-c">
                <a href="" class="btn btn-primary" title="Sign up now">Sign up now</a>
                <a href="<?= domain ?>assets/video/dummyvideo_1.mp4" class="glightbox d-flex a-c" title="Demo video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                        <path
                            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10Zm0-2a8 8 0 1 0 0-16.001A8 8 0 0 0 12 20Zm4.126-6.254-4.055 2.898c-.905.646-2.13.389-2.737-.576A2.201 2.201 0 0 1 9 14.898V9.102C9 7.942 9.883 7 10.972 7c.391 0 .774.124 1.099.356l4.055 2.898c.905.647 1.146 1.952.54 2.917-.14.225-.324.42-.54.575Zm-5.154-4.644v5.796L15.027 12l-4.055-2.898Z"
                            fill="#78350F" />
                    </svg>
                    <span>Watch demo</span>
                </a>
            </div>
            <div class="img_wrapper p-rel">
                <picture>
                    <source srcset="<?= domain ?>assets/img/webp/banner_img.webp" type="image/webp">
                    <source srcset="<?= domain ?>assets/img/png/banner_img.png" type="image/png">
                    <img src="<?= domain ?>assets/img/png/banner_img.png" alt="Green sport shoe with Nike brand">
                </picture>
            </div>
        </div>
        <div class="banner_lower d-flex a-s j-c f-c">
            <div class="banner_card p-rel">
                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="39" fill="none" class="abs_elem">
                    <path opacity=".5"
                        d="M3.071 17.7C-3.229 11.402 1.233.63 10.142.63h36.569C55.62.63 60.08 11.4 53.78 17.7L35.499 35.985c-3.906 3.906-10.237 3.906-14.143 0L3.071 17.701Z"
                        fill="#0369A1" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="none">
                    <path
                        d="M18.654 10.87h28.181s-2.348 35.352-14.09 35.352c-5.736 0-9.23-8.436-11.305-17.066-2.171-9.037-2.786-18.286-2.786-18.286Z"
                        stroke="#78350F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M46.835 10.87s2.457-2.62 4.498-2.667c4-.09 4.74 2.667 4.74 2.667.783 1.626 1.409 5.851-2.349 9.752-3.757 3.901-7.963 7.315-9.675 8.534M18.654 10.87S16.094 8.22 14 8.204c-4-.031-4.74 2.666-4.74 2.666-.782 1.626-1.409 5.852 2.349 9.753 3.757 3.9 8.12 7.314 9.831 8.533M23.351 53.537c0-4.876 9.394-7.314 9.394-7.314s9.393 2.438 9.393 7.314H23.351Z"
                        stroke="#78350F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h2>Nibh viverra</h2>
                <p>Sit bibendum donec dolor fames neque vulputate non sit aliquam. Consequat turpis natoque leo, massa.
                </p>
            </div>

            <div class="banner_card p-rel">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="40" fill="none" class="abs_elem">
                    <path opacity=".5"
                        d="M21.929 3.275C28.229-3.025 39 1.437 39 10.345v18.859c0 5.523-4.477 10-10 10H10.142c-8.909 0-13.37-10.772-7.07-17.072L21.928 3.276Z"
                        fill="#15803D" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                    <path
                        d="M54 53.5368L11.3334 40.2034M54 53.5368H11.3334V40.2034L54 53.5368ZM54 53.5368V32.2034C54 20.4214 44.4488 10.8701 32.6667 10.8701C30.5486 10.8701 28.5027 11.1788 26.5715 11.7536C17.7593 14.3762 11.3334 22.5394 11.3334 32.2034V40.2034L54 53.5368Z"
                        stroke="#78350F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M43.3334 24.2036V26.8703" stroke="#78350F" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M32.6667 21.5371V24.2038" stroke="#78350F" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M22 18.8701V21.5368" stroke="#78350F" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <h2>Cursus amet</h2>
                <p>Sit bibendum donec dolor fames neque vulputate non sit aliquam. Consequat turpis natoque leo, massa.
                </p>
            </div>

            <div class="banner_card p-rel">
                <svg width="45" height="46" fill="none" xmlns="http://www.w3.org/2000/svg" class="abs_elem">
                    <rect opacity=".5" y=".204" width="45" height="45" rx="20" fill="#A21CAF" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                    <path
                        d="M6 53.5368V24.2035C6 21.2579 8.38781 18.8701 11.3333 18.8701H54C56.9456 18.8701 59.3333 21.2579 59.3333 24.2035V53.5368C59.3333 56.4824 56.9456 58.8701 54 58.8701H11.3333C8.38781 58.8701 6 56.4824 6 53.5368Z"
                        stroke="#78350F" stroke-width="1.5" />
                    <path d="M23.3334 6.87012L32.6667 16.2035L42 6.87012" stroke="#78350F" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h2>Ipsum fermentum</h2>
                <p>Sit bibendum donec dolor fames neque vulputate non sit aliquam. Consequat turpis natoque leo, massa.
                </p>
            </div>
        </div>
    </section>
    <section class="prods d-flex f-c">
        <div class="prods_heading d-flex f-c a-c">
            <span>The best of the best</span>
            <a href="" class="btn btn-dark" title="Sign up now">Sign up now</a>
        </div>
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="p-rel card_wrapper">
                <?php if ($i == 1): ?>
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="rect rect-1">
                        <rect opacity=".75" rx="50" fill="#BE185D" />
                    </svg>
                <?php elseif ($i == 2): ?>
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="rect rect-2">
                        <rect opacity=".75" rx="50" fill="#0369A1" />
                    </svg>
                    <svg width="130" height="130" fill="none" xmlns="http://www.w3.org/2000/svg" class="rect rect-3">
                        <rect opacity=".75" rx="30" fill="#B45309" />
                    </svg>
                <?php else: ?>
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="rect rect-4">
                        <rect opacity=".75" rx="50" fill="#15803D" />
                    </svg>
                    <svg viewBox="0 0 202 202" fill="none" xmlns="http://www.w3.org/2000/svg" class="rect rect-5">
                        <rect opacity="0.75" rx="30" fill="#A21CAF" />
                    </svg>

                <?php endif; ?>
                <div class=" prods_card p-rel">
                    <picture>
                        <source srcset="<?= domain ?>assets/img/webp/prod_<?= $i ?>.webp" type="image/webp">
                        <source srcset="<?= domain ?>assets/img/png/prod_<?= $i ?>.png" type="image/png">
                        <img src="<?= domain ?>assets/img/png/prod_<?= $i ?>.png" alt="Shoes with different colors"
                            loading="lazy">
                    </picture>
                    <div class="title">Title</div>
                    <p>Egestas elit dui scelerisque ut eu purus aliquam vitae habitasse.</p>
                    <a href="" class="btn btn-dark" title="Show now">
                        <img src="<?= domain ?>assets/img/svg/shopping-cart.svg" alt="Add to cart icon" loading="lazy">
                        <span>Buy Now</span>
                    </a>
                </div>
            </div>
        <?php endfor; ?>
    </section>
    <section class="join">
        <div class="wrapper">
            <div class="left d-flex f-c a-c p-rel">
                <span>Why join us</span>
                <ul class="d-flex f-c">
                    <li class="d-flex a-s">
                        <picture>
                            <source srcset="<?= domain ?>assets/img/svg/checkmark.svg" type="image/svg+xml">
                            <source srcset="<?= domain ?>assets/img/png/checkmark.png" type="image/png">
                            <img src="<?= domain ?>assets/img/png/checkmark.png" alt="Checkmark" loading="lazy">
                        </picture>
                        <p>Est et in pharetra magna adipiscing ornare aliquam.</p>
                    </li>
                    <li class="d-flex a-s">
                        <picture>
                            <source srcset="<?= domain ?>assets/img/svg/checkmark.svg" type="image/svg+xml">
                            <source srcset="<?= domain ?>assets/img/png/checkmark.png" type="image/png">
                            <img src="<?= domain ?>assets/img/png/checkmark.png" alt="Checkmark" loading="lazy">
                        </picture>
                        <p>
                            Tellus arcu sed consequat ac velit ut eu blandit.
                        </p>
                    </li>
                    <li class="d-flex a-s">
                        <picture>
                            <source srcset="<?= domain ?>assets/img/svg/checkmark.svg" type="image/svg+xml">
                            <source srcset="<?= domain ?>assets/img/png/checkmark.png" type="image/png">
                            <img src="<?= domain ?>assets/img/png/checkmark.png" alt="Checkmark" loading="lazy">
                        </picture>
                        <p>Ullamcorper ornare in et egestas dolor orci.</p>
                    </li>
                </ul>
                <a href="" class="btn btn-primary" title="Sign up now">Sign up now</a>
            </div>
            <div class="right p-rel">
                <div class="shapes">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 411 134" class="shape-1">
                        <path fill="#fde68a" d="M0 0h411v134H0z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 135 135" width="135" height="135"
                        class="shape-2">
                        <rect width="135" height="135" rx="50" fill="rgba(190,24,93,0.75)" />
                    </svg>
                    <?php for ($i = 3; $i <= 6; $i++):
                        $class_name = "shape-" . $i;
                        echo getSprite("circle-shape", $class_name);
                    endfor; ?>

                </div>
                <div class="video_wrapper p-rel">


                    <div class="top_bar d-flex a-c">
                        <?= getSprite("frame_button", "red") ?>
                        <?= getSprite("frame_button", "yellow") ?>
                        <?= getSprite("frame_button", "green") ?>
                    </div>
                    <div class="screen p-rel">
                        <picture>
                            <source srcset="<?= domain ?>assets/img/webp/thumbnail.webp" type="image/webp">
                            <source srcset="<?= domain ?>assets/img/png/thumbnail.png" type="image/png">
                            <img src="<?= domain ?>assets/img/png/thumbnail.png" alt="Video thumbnail" loading="lazy">
                        </picture>
                        <a class="play glightbox p-abs d-flex a-c j-c"
                            href="<?= domain ?>assets/video/dummyvideo_2.mp4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" fill="none">
                                <path
                                    d="M71.78 50.796a3.903 3.903 0 0 0-1.296-5.452L30.796 21.216a4.124 4.124 0 0 0-2.14-.596c-2.24 0-4.052 1.772-4.052 3.96v48.244c0 .74.212 1.464.612 2.092 1.184 1.856 3.68 2.424 5.58 1.268L70.484 52.06c.524-.32.972-.756 1.3-1.268l-.004.004Zm2.984 7.988L35.08 82.908c-5.7 3.468-13.2 1.76-16.744-3.804a11.672 11.672 0 0 1-1.836-6.28v-48.24c0-6.564 5.44-11.88 12.16-11.88 2.268 0 4.492.62 6.42 1.792l39.684 24.128c5.7 3.464 7.448 10.784 3.9 16.352a12.028 12.028 0 0 1-3.9 3.808Z"
                                    fill="#fff" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="testimonials_heading d-flex j-b a-c">
            <span>Because they love us</span>
            <div class="testimonials_nav">

            </div>
        </div>
        <div class="testimonials-swiper p-rel">
            <div class="swiper-wrapper">
                <?php
                $users = ["Hellen Jummy", "Hellena John", "David Oshodi", "Alexandra Doe"];
                $titles = ["Team Lead", "Co-Founder", "Manager", "Engineer"];
                $content = [
                    "Non risus viverra enim, quis. Eget vitae arcu vivamus sit tellus, viverra turpis lorem. Varius a turpis urna id porttitor.",
                    "Aliquet ridiculus mi porta habitant vulputate rhoncus, mattis amet enim. Sit purus venenatis velit semper lectus sed ornare quam nulla.",
                    "A eget sed posuere dui risus habitasse mauris. Venenatis aliquet id ultrices a lacus. Pretium vehicula pretium posuere justo sed.",
                    "Magna egestas aliquet ut integer non. Sed diam enim nibh sit. Aliquam laoreet aenean metus nibh eu scelerisque."
                ];

                for ($i = 1; $i <= 10; $i++):
                    
                    $get_index = rand(0, 3);
                    ?>
                    <div class="swiper-slide">
                        <div class="testimonial d-flex f-c j-b">
                            <div class="icon">
                                <picture>
                                    <source srcset="<?= domain ?>assets/img/webp/logo_<?= $get_index + 1 ?>.webp"
                                        type="image/webp">
                                    <source srcset="<?= domain ?>assets/img/png/logo_<?= $get_index + 1 ?>.png"
                                        type="image/png">
                                    <img src="<?= domain ?>assets/img/png/logo_<?= $get_index + 1 ?>.png"
                                        alt="Company logo">
                                </picture>
                            </div>
                            <div class="content">
                                <?= $content[$get_index] ?>
                            </div>
                            <div class="author d-flex a-c">
                                <div>
                                    <picture>
                                        <source srcset="<?= domain ?>assets/img/webp/user_<?= $get_index + 1 ?>.webp"
                                            type="image/webp">
                                        <source srcset="<?= domain ?>assets/img/png/user_<?= $get_index + 1 ?>.png"
                                            type="image/png">
                                        <img src="<?= domain ?>assets/img/png/user_<?= $get_index + 1 ?>.png"
                                            alt="<?= $users[$get_index] ?>">
                                    </picture>
                                </div>
                                <div class="h-100 d-flex f-c j-c">
                                    <span>
                                        <?= $users[$get_index] ?>
                                    </span>
                                    <p>
                                        <?= $titles[$get_index] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>