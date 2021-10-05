<section class="results bg-gray-500 py-10">
    <div class="container">
        <!-- header -->
        <header class="results__header d-none">
            <h2>Resultados</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="results__row grid">
            <?php
            $jsonResults = file_get_contents(__DIR__ . '/../../includes/results.json');
            $resultsList = json_decode($jsonResults, true);

            foreach ($resultsList['results'] as $result):
                ?>

                <!-- card -->
                <article class="results__row__card">
                    <!-- header -->
                    <header class="results__row__card__header mb-3">
                        <h3><?= $result['title']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <p><?= $result['description']; ?></p>
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
            <!-- end of row -->
        </div>
    </div>
</section>