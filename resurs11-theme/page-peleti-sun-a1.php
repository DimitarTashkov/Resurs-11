<?php
/* Template Name: Peleti Sun A1 */
get_header();
?>
<!-- HERO -->
  <section class="relative pt-32 pb-16 bg-[#2c3036] text-white overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg6.jpg" alt=""
      class="absolute inset-0 w-full h-full object-cover opacity-20" loading="eager" />
    <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-brand-brown/40"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <span
        class="inline-block bg-brand-brown/30 border border-brand-brown text-brand-brownLt text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Дървесни
        пелети</span>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-4">Пелети <span
          class="text-brand-orange">SUN Class A1</span></h1>
      <p class="text-xl text-gray-300 max-w-2xl mx-auto">Висококачествени дървесни пелети с ниска влажност и висока
        калоричност</p>
    </div>
  </section>

  <!-- BREADCRUMB -->
  <div class="bg-brand-ltGray border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <nav class="flex items-center gap-2 text-sm text-gray-500">
        <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
        <span>/</span>
        <a href="<?php echo home_url('/produkti/'); ?>" class="hover:text-brand-orange transition-colors">Продукти</a>
        <span>/</span>
        <span class="text-brand-dark font-medium">Пелети SUN Class A1</span>
      </nav>
    </div>
  </div>
<!-- LAYOUT CONTAINER -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <!-- SIDEBAR -->
                                                                <aside class="w-full lg:w-1/4 flex-shrink-0">
        <div class="sticky top-28 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm max-h-[calc(100vh-8rem)] overflow-y-auto">
          <h3 class="text-xl font-bold text-brand-dark mb-4 pb-2 border-b border-gray-100">Продукти</h3>
          <h4 class="font-bold text-brand-orange mb-2 mt-4 text-sm uppercase tracking-wider">Пелети</h4>
          <nav class="flex flex-col gap-1 mb-4">
            <a href="<?php echo home_url('/peleti-schnider/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети SCHNIDER</a>
            <a href="<?php echo home_url('/peleti-holz/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети Holz</a>
            <a href="<?php echo home_url('/peleti-ahira/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети AHIRA</a>
            <a href="<?php echo home_url('/peleti-wolf/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети WOLF</a>
            <a href="<?php echo home_url('/peleti-tron/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети TRON</a>
            <a href="<?php echo home_url('/peleti-sun-a1/'); ?>" class="px-3 py-2 rounded-lg text-brand-orange bg-brand-ltGray font-bold text-sm transition-colors">Пелети SUN class A1</a>
            <a href="<?php echo home_url('/peleti-sun-a2/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети SUN class A2</a>
            <a href="<?php echo home_url('/peleti-pjs/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети PJS</a>
            <a href="<?php echo home_url('/peleti-kerpi/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети Kerpi</a>
            <a href="<?php echo home_url('/peleti-brevis/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети Brevis</a>
            <a href="<?php echo home_url('/peleti-eco/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Пелети ECO</a>
          </nav>
        </div>
      </aside>

    <!-- CONTENT -->
    <main class="w-full lg:w-3/4 flex flex-col gap-16 pb-20">

      <!-- PRODUCT DETAIL -->
      <section class="bg-brand-cream rounded-2xl py-8">
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100">
              <img src="<?php echo get_template_directory_uri(); ?>/images/products/sun-a1.png" alt="Пелети SUN Class A1" onerror="this.src="<?php echo get_template_directory_uri(); ?>/images/products/schneider.png'" class="w-full h-[400px] lg:h-[500px] object-contain bg-white" />
            </div>
            <div>
              <span class="inline-block bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full mb-4">🌲 Дървесни пелети</span>
              <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mb-4">Пелети SUN Class A1</h2>

              <div class="bg-white rounded-xl border border-gray-100 p-6 mb-6">
                <h3 class="font-bold text-lg text-brand-dark mb-4">Технически характеристики</h3>
                <table class="w-full text-sm">
                  <tbody>
                    <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Калоричност</td><td class="py-3 text-brand-dark font-semibold text-right">4,7 – 5,0 kWh/kg</td></tr>
                    <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Влажност</td><td class="py-3 text-brand-dark font-semibold text-right">под 8%</td></tr>
                    <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Диаметър</td><td class="py-3 text-brand-dark font-semibold text-right">6 мм</td></tr>
                    <tr><td class="py-3 text-gray-500 font-medium">Материал</td><td class="py-3 text-brand-dark font-semibold text-right">100% дървесина</td></tr>
                  </tbody>
                </table>
              </div>


<div class="bg-red-50 border border-red-200 rounded-xl p-5 mb-6">
                  <div class="flex items-baseline gap-2 text-red-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    <span class="text-xl font-bold">Изчерпана наличност!</span>
                  </div>
                  <p class="text-red-500 text-sm mt-2">В момента този продукт не е наличен. Очакваме нови доставки скоро.</p>
              </div>

              <div class="flex flex-col sm:flex-row gap-4">
                <span class="bg-gray-300 text-gray-500 font-bold px-6 py-3 rounded-xl text-base cursor-not-allowed text-center inline-block w-full sm:w-auto">Изчерпан</span>
                <a href="tel:+359877300310" class="bg-white hover:bg-brand-ltGray border-2 border-gray-300 text-gray-600 font-bold px-6 py-3 rounded-xl text-base transition-colors text-center">📞 Запитай за наличност</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- RELATED PRODUCTS -->
      <section class="py-16 bg-brand-ltGray rounded-2xl">
        <div class="px-4 sm:px-6 lg:px-8">
          <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-dark mb-8">Други дървесни пелети</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100">
              <div class="relative overflow-hidden h-48">
                <img src="<?php echo get_template_directory_uri(); ?>/images/products/schneider.png" alt="Пелети SCHNIDER" class="w-full h-full object-contain bg-white hover:scale-105 transition-transform duration-500" loading="lazy"/>
                <span class="absolute top-3 left-3 bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full">Дървесни</span>
              </div>
              <div class="p-5">
                <h3 class="font-bold text-lg text-brand-dark mb-2">Пелети SCHNIDER</h3>
                <p class="text-gray-500 text-sm mb-4">Висококачествени с ниска влажност и висока калоричност.</p>
                <a href="<?php echo home_url('/peleti-schnider/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече <span>→</span></a>
              </div>
            </article>
            <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100">
              <div class="relative overflow-hidden h-48">
                <img src="<?php echo get_template_directory_uri(); ?>/images/products/wolf.png" alt="Пелети WOLF" class="w-full h-full object-contain bg-white hover:scale-105 transition-transform duration-500" loading="lazy"/>
                <span class="absolute top-3 left-3 bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full">Дървесни</span>
              </div>
              <div class="p-5">
                <h3 class="font-bold text-lg text-brand-dark mb-2">Пелети WOLF</h3>
                <p class="text-gray-500 text-sm mb-4">ENplus сертифицирани. Минимална пепел и равномерно горене.</p>
                <a href="<?php echo home_url('/peleti-wolf/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече <span>→</span></a>
              </div>
            </article>
          </div>
          <div class="mt-8 text-center">
            <a href="<?php echo home_url('/peleti/'); ?>" class="inline-flex items-center gap-2 bg-white hover:bg-brand-ltGray border-2 border-gray-200 text-brand-dark font-semibold px-6 py-3 rounded-xl transition-colors">← Обратно към всички продукти</a>
          </div>
        </div>
      </section>

    </main>
  </div>
</div>

<!-- CTA -->
<section class="py-16 bg-[#2c3036] text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Заинтересовани ли сте от пелети SUN Class A1?</h2>
      <p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto">Свържете се с нас за актуални цени, наличност и условия за
        доставка.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="tel:+359877300310"
          class="bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">📞
          +359 877 300 310</a>
        <a href="<?php echo home_url('/kontakti/'); ?>"
          class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Изпрати
          запитване</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
<?php get_footer(); ?>
