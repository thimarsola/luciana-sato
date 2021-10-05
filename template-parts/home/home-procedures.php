<section id="procedimentos" class="procedures bg-gray-500 py-10">
    <div class="container">
        <!-- header -->
        <header class="procedures__header title mb-7">
            <h2>Principais Procedimentos</h2>
            <img src="<?= image('divider.svg'); ?>" alt="Clínica Luciana Sato" title="Clínica Luciana Sato" loading="lazy">
            <p>Conheça os principais procedimentos que realizamos na clínica</p>
        </header>
        <!-- end of header -->

            <!-- row -->
            <div class="procedures__row grid">
                <?php
                    $jsonProcedures = file_get_contents(__DIR__ . "/../../includes/procedures.json");
                    $proceduresList = json_decode($jsonProcedures, true);

                    foreach ($proceduresList['procedures'] as $procedure):
                ?>
                <!-- card -->
                <article class="procedures__row__card">
                    <!-- image -->
                    <div class="procedures__row__card__image">
                        <?= picture($procedure['image'],"Conheça o procedimento {$procedure['name']}"); ?>
                    </div>
                    <!-- end of image -->

                    <!-- body -->
                    <div class="procedures__row__card__body mt-2">
                        <!-- header -->
                        <header class="procedures__row__card__body__header mb-2">
                            <h3><?= $procedure['name']; ?></h3>
                        </header>
                        <!-- end of header -->

                        <!-- content -->
                         <div class="procedures__row__card__body__content">
                             <p class="mb-5">
                                 <small>Conheça um pouco mais sobre esse procedimento</small>
                             </p>

                             <a href="<?= get_permalink(get_page_by_title($procedure['name'])); ?>" class="btn btn-black-500" title="Conheça mais sobre o procedimento: <?= $procedure['name']; ?>" target="_blank">Saiba mais</a>
                         </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of card -->
                <?php endforeach; ?>
            </div>
            <!-- end of row -->
    </div>
</section>