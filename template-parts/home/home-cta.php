<section class="cta py-10">
    <div class="container">

        <!-- row -->
        <div class="cta__row grid">
            <!-- container -->
            <div class="cta__row__container">
                <!-- header -->
                <header class="cta__row__container__header title mb-7">
                    <h2>Avaliação</h2>
                    <img src="<?= image('divider.svg'); ?>" alt="Clínica Luciana Sato" title="Clínica Luciana Sato" loading="lazy">
                    <p>Vamos agendar uma avaliação?</p>
                </header>
                <!-- end of header -->

                <!-- content -->
                <div class="cta__row__container__content">
                    <p class="mb-7">Nosso objetivo é entender o problema do paciente, sua rotina e estilo de vida, conciliando as melhores técnicas cirúrgicas para alcançar o seu objetivo, sempre trabalhando com total transparência, cumplicidade entre paciente e equipe para alinhar as expectativas com as possibilidades de cada técnica cirúrgica.</p>

                    <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["messageCTA"], 'Agendar avaliação', 'btn btn-black-500', 'Vamos agendar uma avaliação?'); ?>
                </div>
                <!-- end of content -->
            </div>
            <!-- end of container -->

            <!-- image -->
            <div class="cta__row__image">
                <?= picture('imagem-dra-lucina-sato', 'Vamos agendar uma avaliação?'); ?>
            </div>
            <!-- end of image -->
        </div>
        <!-- end of row -->

    </div>
</section>