<section class="blog bg-gray-500 py-10">
    <div class="container">
        <!-- header -->
        <header class="blog__header mb-7">
            <p>Artigos mais recentes</p>
            <h2>Blog da Sato</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="blog__row grid mb-10">
            <?php
            $args = [
                'post_type' => 'post',
                'post__not_in' => get_option('sticky_posts'),
                'posts_per_page' => 3,
                "order" => 'DESC',
            ];

            $theQueryLast = new WP_Query($args);

            if($theQueryLast->have_posts()){
                while ($theQueryLast->have_posts()){
                    $theQueryLast->the_post();
                    get_template_part('template-parts/home/content', 'blog');
                }
            }else{
                echo '<p>' . _e('Não existem artigos cadastrados no momento.') . '</p>';
            }
            wp_reset_postdata();
            ?>
        </div>
        <!-- end of row -->

        <a href="<?= get_permalink(get_page_by_title('Blog')); ?>" title="Conheça os nossos artigos mais recentes!" target="_blank">Ver mais artigos <i class="icon-arrow-right"></i></a>
    </div>
</section>