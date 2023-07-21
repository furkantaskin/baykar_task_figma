<footer class="bg-mf-dark">
    <div class="cm-container">
        <div class="upper d-flex flex-column flex-md-row gap-12 py-12">
            <div class="text-white footer-nav text-center text-md-start">
                <span class="py-3 d-block">Product</span>
                <ul>
                    <li>
                        <a href="" title="Pricing" class="py-3 d-inline-block text-white">Pricing</a>
                    </li>
                    <li>
                        <a href="" title="Overview" class="py-3 d-inline-block text-white">Overview</a>
                    </li>
                    <li>
                        <a href="" title="Browse" class="py-3 d-inline-block text-white">Browse</a>
                    </li>
                    <li>
                        <a href="" title="Accessibility" class="py-3 d-inline-block text-white">Accessibility</a>
                    </li>
                    <li>
                        <a href="" title="Five" class="py-3 d-inline-block text-white">Five</a>
                    </li>
                </ul>
            </div>
            <div class="text-white footer-nav text-center text-md-start">
                <span class="py-3 d-block">Solutions</span>
                <ul>
                    <li>
                        <a href="" title="Brainstorming" class="py-3 d-inline-block text-white">Brainstorming</a>
                    </li>
                    <li>
                        <a href="" title="Ideation" class="py-3 d-inline-block text-white">Ideation</a>
                    </li>
                    <li>
                        <a href="" title="Wireframing" class="py-3 d-inline-block text-white">Wireframing</a>
                    </li>
                    <li>
                        <a href="" title="Research" class="py-3 d-inline-block text-white">Research</a>
                    </li>
                    <li>
                        <a href="" title="Design" class="py-3 d-inline-block text-white">Design</a>
                    </li>
                </ul>
            </div>
            <div class="text-white footer-nav text-center text-md-start">
                <span class="py-3 d-block">Support</span>
                <ul>
                    <li>
                        <a href="" title="Contact Us" class="py-3 d-inline-block text-white">Contact Us</a>
                    </li>
                    <li>
                        <a href="" title="Developers" class="py-3 d-inline-block text-white">Developers</a>
                    </li>
                    <li>
                        <a href="" title="Documentation" class="py-3 d-inline-block text-white">Documentation</a>
                    </li>
                    <li>
                        <a href="" title="Integrations" class="py-3 d-inline-block text-white">Integrations</a>
                    </li>
                    <li>
                        <a href="" title="Reports" class="py-3 d-inline-block text-white">Reports</a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-white d-flex flex-column align-items-center gap-2">
                <span class="d-block py-3">Get the App</span>
                <a href="" target="_blank" class="d-block" title="Download on the apple store">
                    <img src="<?= domain ?>assets/img/svg/apple_store.svg" alt="Apple store" loading="lazy" class="w-100">
                </a>
                <a href="" target="_blank" class="d-block" title="Get it on google play">
                    <img src="<?= domain ?>assets/img/svg/play_store.svg" alt="Play store" loading="lazy" class="w-100">
                </a>
                <span class="d-block pt-12 pb-3">Follow Us</span>
                <ul class="social d-flex gap-4">
                    <?php
                    $social = ["youtube", "facebook", "twitter", "instagram", "linkedin"];
                    for ($i = 1; $i <= 5; $i++): ?>
                        <li>
                            <a href="" title="<?=$social[$i-1]?>" target="_blank" rel="me">
                                <!-- Intentional single line img usage -->
                                <img src="<?= domain ?>assets/img/svg/<?= $social[$i - 1] ?>.svg"
                                    alt="<?= $social[$i - 1] ?> icon" loading="lazy">
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <div class="copy d-flex flex-column flex-md-row align-items-center justify-content-md-between py-12 gap-6">
            <span class="text-white text-center">Collers &copy; 2023. All rights reserved.</span>
            <ul class="d-flex items-center justify-content-center gap-8">
                <li>
                    <a href="" title="Terms" class="text-white py-3 d-flex">Terms</a>
                </li>
                <li>
                    <a href="" title="Privacy" class="text-white py-3 d-flex">Privacy</a>
                </li>
                <li>
                    <a href="" title="Contact" class="text-white py-3 d-flex">Contact</a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="lang text-white py-3 d-flex align-items-center gap-2">
                        <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.752 10.204a8.047 8.047 0 0 0 0 4H7.6a19.83 19.83 0 0 1 0-4H4.752Zm.818-2h2.346c.266-1.217.65-2.307 1.121-3.214A8.035 8.035 0 0 0 5.57 8.204Zm14.678 2H17.4c.135 1.33.135 2.67 0 4h2.848a8.046 8.046 0 0 0 0-4Zm-.818-2a8.035 8.035 0 0 0-3.467-3.214c.472.907.855 1.997 1.121 3.214h2.346Zm-9.818 2a17.763 17.763 0 0 0 0 4h5.776c.15-1.33.15-2.671 0-4H9.612Zm.358-2h5.06a10.759 10.759 0 0 0-.783-2.177c-.628-1.255-1.3-1.823-1.747-1.823-.448 0-1.119.568-1.747 1.823-.315.632-.58 1.367-.783 2.177Zm-4.4 8a8.035 8.035 0 0 0 3.467 3.214c-.472-.907-.855-1.997-1.121-3.214H5.57Zm13.86 0h-2.346c-.266 1.217-.65 2.307-1.121 3.214a8.035 8.035 0 0 0 3.467-3.214Zm-9.46 0c.203.81.468 1.545.783 2.177.628 1.255 1.3 1.823 1.747 1.823.448 0 1.119-.568 1.747-1.823.315-.632.58-1.367.783-2.177H9.97Zm2.53 6c-5.523 0-10-4.477-10-10s4.477-10 10-10 10 4.477 10 10-4.477 10-10 10Z" />
                        </svg>
                        <span>EN</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script src="<?= domain ?>assets/js/<?= $call_js != "" ? $call_js : $call_css ?>.js?v=<?= rand() ?>"></script>
</body>

</html>