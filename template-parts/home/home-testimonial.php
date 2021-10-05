<section class="testimonial py-10">
    <div class="container">
        <!-- header -->
        <header class="testimonial__header title mb-7">
            <h2>Depoimentos</h2>
            <img src="<?= image('divider.svg'); ?>" alt="Clínica Luciana Sato" title="Clínica Luciana Sato" loading="lazy">
            <p>Vamos ver o que os nossos clientes dizem sobre nós</p>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="testimonial__row owl-carousel">
            <?php
            $jsonTestimonial = file_get_contents(__DIR__ . '/../../includes/testimonial.json');
            $testimonialList = json_decode($jsonTestimonial, true);

            foreach ($testimonialList['testimonial'] as $testimony):
                ?>

                <!-- card -->
                <div class="testimonial__row__card bg-light-gray-500 radius p-4">
                    <!-- header -->
                    <div class="testimonial__row__card__header mb-2">
                        <p><?= $testimony['name']; ?></p>
                        <small><?= $testimony['procedure']; ?></small>
                        <p>
                            <?php
                            for($rating = 0; $rating < $testimony['rating']; $rating++):
                                ?>
                                <i class="icon-star"></i>
                            <?php endfor; ?>
                        </p>
                    </div>
                    <!-- end of header -->

                    <?php foreach ($testimony['testimony'] as $textTestimony): ?>
                        <p><?= $textTestimony; ?></p>
                    <?php endforeach; ?>
                </div>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>