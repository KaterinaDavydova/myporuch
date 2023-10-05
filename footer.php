

<footer class="footer" id="footer">
                <div class="container">
                    <a class="up" href="#up" id="upBtn"></a>
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/main-logo.svg" alt="logo">
                    </div>
                    <div class="content">
                        <p>COPYRIGHT © 2023 MYPORUCH.<br> ALL RIGHTS RESERVED.</p>
                        <?php 
                                wp_nav_menu( array(
                                    'menu_class'=>'nav',
                                    'theme_location'=>'footer_menu'
                                ) );
                            ?>
                        
                        <div class="social">
                            <a href="https://t.me/+p12XGL9izsJlZTYy"><img src="<?php echo get_template_directory_uri();?>/assets/images/telegram.svg" alt="telegram icon"></a>
                            <a href="https://www.instagram.com/myporuch/?igshid=YmMyMTA2M2Y%3D"><img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.svg" alt="instagram icon"></a>
                            <!-- <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.svg" alt="twitter icon"></a> -->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <?php wp_footer();?>
    
</body>
</html>
