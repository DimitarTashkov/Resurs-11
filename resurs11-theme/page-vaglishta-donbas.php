<?php
/* Template Name: Vaglishta Donbas */
get_header();
?>
<!-- HERO -->
<section class="relative pt-32 pb-16 bg-[#2c3036] text-white overflow-hidden">
  <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg1.jpg" alt="" class="absolute inset-0 w-full h-full object-cover opacity-20" loading="eager"/>
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-gray-600/30"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="inline-block bg-gray-600/30 border border-gray-500 text-gray-300 text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Въглища</span>
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-4">Въглища <span class="text-gray-400">Донбас</span></h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">Висококачествени въглища в удобни чували</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4"><nav class="flex items-center gap-2 text-sm text-gray-500"><a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a><span>/</span><a href="<?php echo home_url('/produkti/'); ?>" class="hover:text-brand-orange transition-colors">Продукти</a><span>/</span><a href="<?php echo home_url('/vaglishta/'); ?>" class="hover:text-brand-orange transition-colors">Въглища</a><span>/</span><span class="text-brand-dark font-medium">Донбас в чували</span></nav></div></div>

<!-- LAYOUT CONTAINER -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <!-- SIDEBAR -->
                                              <aside class="w-full lg:w-1/4 flex-shrink-0">
        <div class="sticky top-28 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm max-h-[calc(100vh-8rem)] overflow-y-auto">
          <h3 class="text-xl font-bold text-brand-dark mb-4 pb-2 border-b border-gray-100">Продукти</h3>
          <h4 class="font-bold text-brand-orange mb-2 mt-4 text-sm uppercase tracking-wider">Въглища</h4>
          <nav class="flex flex-col gap-1">
            <a href="<?php echo home_url('/vaglishta-donbas/'); ?>" class="px-3 py-2 rounded-lg text-brand-orange bg-brand-ltGray font-bold text-sm transition-colors">Въглища Донбас</a>
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/products/coal2.png" alt="Въглища Донбас в чували" class="w-full h-[400px] lg:h-[500px] object-contain bg-white" />
      </div>
      <div>
        <span class="inline-block bg-gray-700 text-white text-xs font-bold px-3 py-1.5 rounded-full mb-4"><svg class="w-4 h-4 inline-block -mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 7.1 10c0-2 1.5-4 4.5-4 1.5 2 1.5 4 0 6-1-1.5-1.5-1.5-2.5 0-1 1.5.5 3.5 2 3.5 1.5 0 2-1 2-1z"/></svg> Въглища – Висококачествени</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mb-4">Въглища Донбас в чували</h2>

        <div class="bg-white rounded-xl border border-gray-100 p-6 mb-6">
          <h3 class="font-bold text-lg text-brand-dark mb-4">Технически характеристики</h3>
          <table class="w-full text-sm">
            <tbody>
              <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Произход</td><td class="py-3 text-brand-dark font-semibold text-right">Донбас</td></tr>
              <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Калоричност</td><td class="py-3 text-brand-dark font-semibold text-right">7000+ kcal</td></tr>
              <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Опаковка</td><td class="py-3 text-brand-dark font-semibold text-right">Удобни чували</td></tr>
              <tr><td class="py-3 text-gray-500 font-medium">Пепел</td><td class="py-3 text-brand-dark font-semibold text-right">Минимална</td></tr>
            </tbody>
          </table>
        </div>


        <div class="bg-gray-100 border border-gray-300 rounded-xl p-5 mb-6">
          <div class="flex flex-col gap-1">
              <div class="flex items-baseline gap-2">
                <span class="text-gray-500 font-medium">Цена на тон:</span>
                <span class="text-3xl font-extrabold text-brand-orange">310.00 EUR</span>
                <span class="text-gray-400 text-lg font-semibold">/ 606.27 лв.</span>
              </div>
              <div class="flex items-baseline gap-2">
                <span class="text-gray-500 font-medium">Цена на брой:</span>
                <span class="text-2xl font-bold text-gray-700">9.50 EUR</span>
                <span class="text-gray-400 text-base font-semibold">/ 18.58 лв.</span>
              </div>
            </div>
          
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="<?php echo home_url('/kontakti/'); ?>" class="bg-gray-700 hover:bg-gray-800 text-white font-bold px-6 py-3 rounded-xl text-base transition-colors text-center">Поръчай сега</a>
          <a href="tel:+359877300310" class="bg-white hover:bg-brand-ltGray border-2 border-gray-700 text-gray-700 font-bold px-6 py-3 rounded-xl text-base transition-colors text-center">📞 Обади се</a>
        </div>
      </div>
    </div>
        </div>
      </section>

      <!-- RELATED -->
      <section class="py-16 bg-brand-ltGray rounded-2xl">
        <div class="px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-dark mb-8">Вижте също</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100"><div class="relative overflow-hidden h-48"><img src="<?php echo get_template_directory_uri(); ?>/images/products/ekobriketi slunchogled.png" alt="Екобрикет слънчогледова люспа" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500" loading="lazy"/><span class="absolute top-3 left-3 bg-yellow-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Екобрикет</span></div><div class="p-5"><h3 class="font-bold text-lg text-brand-dark mb-2">Екобрикет слънчогледова люспа</h3><p class="text-gray-500 text-sm mb-4">Висока плътност, дълго горене, минимална пепел.</p><a href="<?php echo home_url('/ekobriket-slunshogled/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече →</a></div></article>
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100"><div class="relative overflow-hidden h-48"><img src="<?php echo get_template_directory_uri(); ?>/images/products/ekobriketi ruf.png" alt="Дървесен екобрикет RUF" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500" loading="lazy"/><span class="absolute top-3 left-3 bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full">Дървесен</span></div><div class="p-5"><h3 class="font-bold text-lg text-brand-dark mb-2">Дървесен екобрикет RUF</h3><p class="text-gray-500 text-sm mb-4">100% натурална дървесина, правоъгълна форма RUF.</p><a href="<?php echo home_url('/ekobriket-ruf/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече →</a></div></article>
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100"><div class="relative overflow-hidden h-48"><img src="<?php echo get_template_directory_uri(); ?>/images/products/schneider.png" alt="Пелети SCHNIDER" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500" loading="lazy"/><span class="absolute top-3 left-3 bg-green-700 text-white text-xs font-bold px-3 py-1.5 rounded-full">Дървесни</span></div><div class="p-5"><h3 class="font-bold text-lg text-brand-dark mb-2">Пелети SCHNIDER</h3><p class="text-gray-500 text-sm mb-4">Висококачествени дървесни пелети с отлична калоричност.</p><a href="<?php echo home_url('/peleti-schnider/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече →</a></div></article>
    </div>
    <div class="mt-8 text-center"><a href="<?php echo home_url('/peleti/'); ?>" class="inline-flex items-center gap-2 bg-white hover:bg-brand-ltGray border-2 border-gray-200 text-brand-dark font-semibold px-6 py-3 rounded-xl transition-colors">← Обратно към всички продукти</a></div>
        </div>
      </section>

    </main>
  </div>
</div>

<!-- CTA -->
<section class="py-16 bg-[#2c3036] text-white"><div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center"><h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Заинтересовани ли сте от въглища Донбас?</h2><p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto">Свържете се с нас за актуални цени, наличност и условия за доставка.</p><div class="flex flex-col sm:flex-row gap-4 justify-center"><a href="tel:+359877300310" class="bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">📞 +359 877 300 310</a><a href="<?php echo home_url('/kontakti/'); ?>" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Изпрати запитване</a></div></div></section>

<!-- FOOTER -->
<?php get_footer(); ?>
