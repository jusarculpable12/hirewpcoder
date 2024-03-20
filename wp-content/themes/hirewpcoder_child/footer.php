<footer>
        <div class="container">
            <div class="display-flex content">
                <div class="logo-contactContent">
                    <div class="logoContent">
                        <a href="#">
                            <img src="wp-content/uploads/2024/03/WordPress-logotype-wmark-white.png)" alt="">
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
</body>
</html>