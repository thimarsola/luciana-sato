<section class="transplant py-10">
    <div class="container">

        <!-- header -->
         <header class="transplant__header title mb-10">
             <h2>Transplante Capilar</h2>
             <img src="<?= image('divider.svg'); ?>" alt="Clínica Luciana Sato" title="Clínica Luciana Sato" loading="lazy">
             <p>Etapas do procedimento</p>
         </header>
        <!-- end of header -->

        <!-- image -->
        <div class="transplant__image mb-4">
            <?= picture('imagem-transplante-capilar', 'Conheaça as etapas do procedimento de Transplante Capilar'); ?>
        </div>
        <!-- end of image -->

        <!-- row -->
        <div class="transplant__row grid">
            <?php
            $jsonTransplant = file_get_contents(__DIR__ . '/../../includes/transplant.json');
            $transplantList = json_decode($jsonTransplant, true);

            foreach ($transplantList['transplant'] as $item):
            ?>

            <!-- card -->
            <article class="transplant__row__card">
                <!-- step -->
                <div class="transplant__row__card__step">
                    <p><span><?= $item['step'] ?></span></p>
                </div>
                <!-- end of step -->

                <!-- body -->
                <div class="transplant__row__card__body">
                    <!-- header -->
                    <header class="transplant__row__card__body__header mb-1">
                        <h3><?= $item['title']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <p><?= $item['description']; ?></p>
                </div>
                <!-- end of body -->
            </article>
            <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>