<footer>
        <div class="container">
            <div class="display-flex content">
                <div class="logo-contactContent">
                    <div class="logoContent">
                        <a href="#">
                            <img src="wp-content/uploads/2024/03/WordPress-logotype-wmark-white.png" alt="">
                            <p>HirewpCoders</p>
                        </a>
                    </div>
                    <div class="contactContent">
                        <h3>Contact Us</h3>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: <a href="#">HirewpCoder@gmail.com</a></p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="#">123-456-7890</a></p>
                    </div>
                    <div class="socmedContent">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          </ul>
                    </div>
                </div>
                <div class="formContent">
                    <div>
                        <h2>Contact <span>Us</span></h2>
                        <div class="formcontentContainer">
                            <form target="#">
                                <input type="email" id="email-signup" placeholder="Enter your email here...." required="">
                                <input type="submit" value="Send Code!" id="btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Your Company. All Rights Reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
        freeMode: true,
        slidesPerView: 'auto',
        spaceBetween: 30,
        scrollbar: {
            el: '.js-swiper-scrollbar',
            draggable: true,
            snapOnRelease: false
        }
        });
    </script>
    <script>
    $(document).ready(function() {
        const hamburger = $('.hamburger');
        const nav = $('nav');

        hamburger.click(function() {
            nav.toggleClass('open');
        });

        // Close the navigation when a link is clicked
        nav.find('a').click(function() {
            nav.removeClass('open');
        });
    });

    $(document).ready(function () {
        
    $('header .headerContent .navContent nav ul > li:first-of-type > a').addClass('link-active');
    // Smooth scroll behavior for anchor links
    $('header .headerContent .navContent nav ul a').on('click', function (event) {
        event.preventDefault();

        // Remove the active class from all links
        $('header .headerContent .navContent nav ul a').removeClass('link-active');

        // Add the active class to the clicked link
        $(this).addClass('link-active');

        // Get the target section ID from the href attribute
        var targetId = $(this).attr('href');

        // Smooth scroll to the target section
        $('html, body').animate({
        scrollTop: $(targetId).offset().top
        }, 500, function () {
        // Remove smooth scroll behavior after animation is complete
        $('html, body').css('scroll-behavior', 'initial');
        });
    });
    
    $(window).on('scroll', function () {
        var scrollPosition = $(window).scrollTop();

        $('section').each(function () {
            var sectionId = $(this).attr('id');
            var sectionTop = $(this).offset().top;
            var sectionHeight = $(this).outerHeight();

            if (200 + scrollPosition >= sectionTop && 200 + scrollPosition < sectionTop + sectionHeight) {
            // Add active class to the corresponding anchor tag
            $('a[href="#' + sectionId + '"]').addClass('link-active');
            } else {
            // Remove active class if the section is not in view
            $('a[href="#' + sectionId + '"]').removeClass('link-active');
            }
        });
        });

    });
    $(".scroll-snapContainer button").click(function() {
        $("#what_wpdev_do").toggleClass("active");
    });

   // Function to check if an element is fully visible on the screen
    function isFullyVisible(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    // Function to check if the bottom of an element hits the top of the screen
    function isBottomHitTop(element) {
        var rect = element.getBoundingClientRect();
        return rect.bottom <= 0;
    }

    // Check if the last child's bottom hits the top of the screen and remove the active class
    document.addEventListener('scroll', function() {
        var lastChild = document.querySelector('section.contentContainer.contentContainer-scroller:last-child');
        var whatWpdevDo = document.querySelector('section#what_wpdev_do');
        
        if (lastChild && isBottomHitTop(lastChild)) {
            whatWpdevDo.classList.remove('active');
        }
    });
 
</script>

</body>
</html>