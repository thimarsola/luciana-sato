<!-- card -->
<article class="blog__row__card">
    <!-- image -->
    <div class="blog__row__card__image mb-2 radius">
        <a href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" loading="lazy">
        </a>
    </div>
    <!-- end of image -->

    <!-- body -->
    <div class="blog__row__card__body">
        <p><small>Publicado em <?= get_the_date('j \d\e F \d\e Y'); ?></small></p>

        <!-- header -->
        <header class="blog__row__card__body__header my-2">
            <h3>
                <a href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">
                    <?= get_the_title(); ?>
                </a>
            </h3>
        </header>
        <!-- end of header -->

        <a href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">Leia mais</a>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->