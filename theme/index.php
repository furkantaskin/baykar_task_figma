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
                <a href="<?= domain ?>assets/video/dummyvideo_1.mp4" class="glightbox" title="Demo video">
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
                    <source src="<?= domain ?>assets/img/banner_img.webp" type="image/webp">
                    <source src="<?= domain ?>assets/img/banner_img.png" type="image/png">
                    <img src="<?= domain ?>assets/img/banner_img.webp" alt="Green sport shoe with Nike brand">
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
                        <source src="assets/img/prod_<?= $i ?>.webp" type="image/webp">
                        <source src="assets/img/prod_<?= $i ?>.png" type="image/png">
                        <img src="<?= domain ?>assets/img/prod_<?= $i ?>.webp" alt="Shoes with different colors">
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
        <div class="wrapper d-flex f-c a-c">
            <div>
                <span>Why join us</span>
                <ul>
                    <li>Est et in pharetra magna adipiscing ornare aliquam.</li>
                    <li>Tellus arcu sed consequat ac velit ut eu blandit.</li>
                    <li>Ullamcorper ornare in et egestas dolor orci.</li>
                </ul>
            </div>
            <div></div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>