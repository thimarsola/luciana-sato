<section class="gallery bg-gray-500 py-10">
    <div class="container">
        <!-- header -->
        <header class="gallery__header title mb-8">
            <h2>Conheça nossa clínica</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="gallery__row grid">
            <?php for ($i = 1; $i < 7; $i++):  ?>
                <!-- image -->
                <a href="<?= image('imagem-clinica-' . str_pad($i, 2, 0, STR_PAD_LEFT) . '.jpg'); ?>" title="Conheça um pouco mais do nosso consultório" class="gallery__row__card">
                    <?= picture('imagem-clinica-'. str_pad($i, 2, 0, STR_PAD_LEFT), 'Conheça um pouco mais do nosso consultório'); ?>
                </a>
                <!-- end of image -->
            <?php endfor; ?>
        </div>
        <!-- end of row -->
    </div>
</section>