<?php
/**
 * The template for displaying all single produkt posts
 */

get_header(); ?>

<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
      <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
      <span>/</span>
      <a href="<?php echo home_url('/produkti/'); ?>" class="hover:text-brand-orange transition-colors">Продукти</a>
      <span>/</span>
      <span class="text-brand-dark font-medium"><?php the_title(); ?></span>
    </nav>
  </div>
</div>

<!-- LAYOUT CONTAINER -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <main class="w-full flex flex-col gap-16 pb-20">

      <?php
      while ( have_posts() ) :
          the_post();
          $nalichnost = get_field('nalichnost');
          $snimka_url = get_field('snimka') ? get_field('snimka') : get_template_directory_uri() . '/images/placeholder.png';
      ?>

      <!-- PRODUCT DETAIL -->
      <section class="bg-brand-cream rounded-2xl py-8">
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            <!-- Image -->
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100">
              <img src="<?php echo esc_url($snimka_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-[400px] lg:h-[500px] object-contain bg-white" />
            </div>
            
            <!-- Details -->
            <div>
              <?php if($nalichnost): ?>
              <?php $nalichnost_class = ($nalichnost === 'Изчерпано') ? 'bg-red-500 text-white' : 'bg-brand-brown text-white'; ?>
              <span class="inline-block text-xs font-bold px-3 py-1.5 rounded-full mb-4 <?php echo esc_attr($nalichnost_class); ?>">
                <?php echo esc_html($nalichnost); ?>
              </span>
              <?php endif; ?>
              
              <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mb-4"><?php the_title(); ?></h1>

              <div class="bg-white rounded-xl border border-gray-100 p-6 mb-6">
                <!-- Characteristics / Table -->
                <h3 class="font-bold text-lg text-brand-dark mb-4">Технически характеристики</h3>
                <div class="prose max-w-none w-full text-sm">
                  <?php echo get_field('harakteristiki'); ?>
                </div>
              </div>

              <!-- Prices -->
              <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="bg-brand-orange/5 rounded-xl p-4 border border-brand-orange/20">
                  <p class="text-sm text-gray-500 mb-1">Цена на тон</p>
                  <div class="flex items-baseline gap-1">
                    <span class="text-2xl font-bold text-brand-orange"><?php echo esc_html(get_field('cena_na_ton')); ?></span>
                  </div>
                </div>
                <div class="bg-brand-orange/5 rounded-xl p-4 border border-brand-orange/20">
                  <p class="text-sm text-gray-500 mb-1">Цена на чувал</p>
                  <div class="flex items-baseline gap-1">
                    <span class="text-2xl font-bold text-brand-orange"><?php echo esc_html(get_field('cena_na_chuval')); ?></span>
                  </div>
                </div>
              </div>

              <!-- Buttons -->
              <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo home_url('/kontakti/'); ?>" class="bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-6 py-3 rounded-xl text-base transition-colors text-center">Поръчай сега</a>
                <a href="tel:+359877300310" class="bg-white hover:bg-brand-ltGray border-2 border-brand-orange text-brand-orange font-bold px-6 py-3 rounded-xl text-base transition-colors text-center">📞 Обади се</a>
              </div>

            </div>
          </div>
        </div>
      </section>

      <!-- Bottom Description -->
      <section class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <h3 class="font-bold text-2xl text-brand-dark mb-4">Описание на продукта</h3>
        <div class="prose max-w-none text-gray-600">
          <?php the_content(); ?>
        </div>
      </section>

      <?php endwhile; ?>

    </main>
  </div>
</div>

<?php get_footer(); ?>