</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <!-- content -->
    <div class="footer__content py-10">
        <div class="container">
            <!-- brand -->
            <i class="icon-logo"></i>
            <!-- end of brand -->

            <!-- nav -->
            <nav class="footer__content__nav my-5">
                <h2 class="d-none">Menu de Navegação</h2>
                <?php
                if(is_home()){
                    wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                }else {
                    wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                }
                ?>
            </nav>
            <!-- end of nav -->

            <!-- social -->
            <div class="footer__content__social mb-5">
                <ul>
                    <li>
                        <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" title="Conheça o nosso instagram" target="_blank"><i class="icon-instagram"></i></a>
                    </li>
                    <li>
                        <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" title="Conheça o nosso facebook" target="_blank"><i class="icon-facebook"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end of social -->

            <!-- copyright -->
            <div class="footer__content__copyright">
                <small><?= date('Y') . " - " . SITE['name'] ?> &COPY; - Todos os direitos reservados</small>
            </div>
            <!-- end of copyright -->
        </div>
    </div>
    <!-- end of content -->

    <!-- developer -->
     <div class="footer__developer py-2">
         <div class="container">

             <!-- row -->
             <div class="footer__developer__row">

                 <!-- agency -->
                 <div class="footer__developer__row__agency">
                     <p>Desenvolvido por <b><a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b></p>
                 </div>
                 <!-- end of agency -->

                 <!-- validator -->
                 <?php if(!is_404()): ?>
                     <div class="footer__developer__row__validator">
                         <?php
                         $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                         if (is_home()) {
                             $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                         }elseif(is_single()){
                             $urlBase = str_replace($protocols, "", get_the_permalink());
                         }
                         else {
                             $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                         }
                         ?>

                         <a rel="nofollow noreferrer noopener" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C">
                             <i class="icon-w3c"></i>
                             W3C Validator
                         </a>
                     </div>
                 <?php endif; ?>
                 <!-- end of validator -->
             </div>
             <!-- end of row -->

         </div>
     </div>
    <!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>

</body>

</html>