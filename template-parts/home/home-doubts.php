<section id="duvidas" class="doubts bg-gray-500 py-10">
    <div class="container">

        <!-- container -->
         <div class="doubts__container">

             <!-- header -->
             <header class="doubts__container__header title mb-7">
                 <h2>Dúvidas Frequentes</h2>
             </header>
             <!-- end of header -->

             <!-- content -->
             <div class="doubts__container__content">
                 <?php
                 $jsonDoubts = file_get_contents(__DIR__ . '/../../includes/doubts.json');
                 $doubtsList = json_decode($jsonDoubts, true);

                 foreach ($doubtsList['doubts'] as $doubt):
                     ?>

                     <!-- card -->
                     <article class="doubts__container__content__card py-3">
                         <!-- header -->
                         <header class="doubts__container__content__card__header">
                             <h3><?= $doubt['title']; ?></h3>
                             <span>+</span>
                         </header>
                         <!-- end of header -->

                         <!-- body -->
                         <div class="doubts__container__content__card__body">
                             <p><?= $doubt['description']; ?></p>
                         </div>
                         <!-- end of body -->
                     </article>
                     <!-- end of card -->

                 <?php endforeach; ?>
             </div>
             <!-- end of content -->

         </div>
        <!-- end of container -->

    </div>
</section>