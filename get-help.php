<?php get_header();
// Template Name: get help
?>

            
            <!-- <div class="breadcrumb container">
                <ul> 
                    <li class="breadcrumb-item" id="breadcrumb-0"><a href="http://www.example.com/wordpress_test" title="Home">Головна</a></li> 
                    <li class="breadcrumb-item" id="breadcrumb-174"> <a href="http://www.example.com/wordpress_test/level-1" title="Level 1">Інформаційна підтримка</a></li> 
                    <li class="breadcrumb-item" id="breadcrumb-172"> Документи для отримання грошової допомоги</li> 
                    </ul>
            </div>  -->

            <div class="page container">
                <div class="form">
                    <h1 class="title">
                        Вам потрібна допомога?
                    </h1>
                    <p class="sub-title">Матеріальна чи консультаційна допомога? Будь ласка, заповніть форму для того, щоб ми могли зв’язатися з вами протягом 1-2 днів.</p>
                    <div class="content">
                        <?php the_content();?>
                    </div>
                    <div class="cover">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/form-image.png" alt="">
                    </div>
                </div>
            </div>

        

<?php get_footer();?>