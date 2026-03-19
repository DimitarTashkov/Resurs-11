<?php
/* Template Name: Produkti */
get_header();
?>
<!-- PAGE HERO -->
<section class="relative pt-32 pb-20 bg-[#2c3036] text-white overflow-hidden">
  <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg2.jpg" alt="Дървесни пелети пред камина" class="absolute inset-0 w-full h-full object-cover opacity-25" loading="eager"/>
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-brand-brown/40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Каталог</span>
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5">Нашите <span class="text-brand-orange">продукти</span></h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">Пълен каталог на пелети, екобрикети и въглища. Изберете подходящия продукт за вашето отопление.</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
      <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
      <span>/</span>
      <span class="text-brand-dark font-medium">Продукти</span>
    </nav>
  </div>
</div>

<!-- LAYOUT CONTAINER -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <!-- CONTENT -->
    <main class="w-full flex flex-col gap-16 pb-20">
      <section id="all-pellets" class="scroll-mt-28">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

          <?php
          $args = array(
              'post_type'      => 'produkt',
              'posts_per_page' => -1,
          );
          $produkt_query = new WP_Query( $args );

          if ( $produkt_query->have_posts() ) :
              while ( $produkt_query->have_posts() ) : $produkt_query->the_post();
                  $snimka_url = get_field('snimka');
                  if (!$snimka_url) {
                      $snimka_url = get_template_directory_uri() . '/images/placeholder.png';
                  }
                  $cena_na_ton = get_field('cena_na_ton');
                  $nalichnost = get_field('nalichnost');
          ?>
          
          <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100 flex flex-col">
            <a href="<?php the_permalink(); ?>" class="relative overflow-hidden h-56 block">
              <img src="<?php echo esc_url($snimka_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-contain bg-white hover:scale-105 transition-transform duration-500" loading="lazy"/>
              <?php if($nalichnost === 'Изчерпано'): ?>
                  <span class="absolute top-3 left-3 bg-red-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Изчерпано</span>
              <?php else: ?>
                  <span class="absolute top-3 left-3 bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full">В наличност</span>
              <?php endif; ?>
            </a>
            <div class="p-6 flex flex-col flex-grow">
              <div class="flex items-center justify-between mb-4 flex-wrap gap-2">
                <h3 class="font-bold text-xl text-brand-dark w-full"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php if($cena_na_ton): ?>
                <span class="text-brand-orange font-extrabold text-lg mt-2"><?php echo esc_html($cena_na_ton); ?></span>
                <?php endif; ?>
              </div>
              <div class="flex-grow mt-auto pt-4">
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-6 py-3 rounded-lg transition-colors w-full justify-center">Виж повече <span>→</span></a>
              </div>
            </div>
          </article>

          <?php
              endwhile;
              wp_reset_postdata();
          else :
              echo '<p>Няма намерени продукти.</p>';
          endif;
          ?>

        </div>
      </section>
    </main>
  </div>
</div>

<!-- CTA -->
<section class="py-20 bg-[#2c3036] text-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Не намирате това, което търсите?</h2>
    <p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto">Свържете се с нас и ще ви помогнем да изберете най-подходящия продукт за вашия тип отопление и бюджет.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="tel:+359877300310" class="bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">📞 +359 877 300 310</a>
      <a href="<?php echo home_url('/kontakti/'); ?>" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Изпрати запитване</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>