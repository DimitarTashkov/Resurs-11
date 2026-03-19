<?php
/* Template Name: Ekobriket Slunshogled */
get_header();
?>
<!-- HERO -->
<section class="relative pt-32 pb-16 bg-[#2c3036] text-white overflow-hidden">
  <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg4.jpg" alt="" class="absolute inset-0 w-full h-full object-cover opacity-20" loading="eager"/>
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-yellow-700/20"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="inline-block bg-yellow-600/20 border border-yellow-600 text-yellow-400 text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Екобрикети</span>
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-4">Екобрикет <span class="text-yellow-400">Слънчогледова люспа</span></h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">Висока плътност, дълго горене, минимална пепел</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4"><nav class="flex items-center gap-2 text-sm text-gray-500"><a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a><span>/</span><a href="<?php echo home_url('/produkti/'); ?>" class="hover:text-brand-orange transition-colors">Продукти</a><span>/</span><a href="<?php echo home_url('/ekobriketi/'); ?>" class="hover:text-brand-orange transition-colors">Екобрикети</a><span>/</span><span class="text-brand-dark font-medium">Слънчогледова люспа</span></nav></div></div>

<!-- LAYOUT CONTAINER -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="flex flex-col lg:flex-row gap-10">

    <!-- SIDEBAR -->
                                                          <aside class="w-full lg:w-1/4 flex-shrink-0">
        <div class="sticky top-28 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm max-h-[calc(100vh-8rem)] overflow-y-auto">
          <h3 class="text-xl font-bold text-brand-dark mb-4 pb-2 border-b border-gray-100">Продукти</h3>
          <h4 class="font-bold text-brand-orange mb-2 mt-4 text-sm uppercase tracking-wider">Екобрикети</h4>
          <nav class="flex flex-col gap-1 mb-4">
            <a href="<?php echo home_url('/ekobriket-slunshogled/'); ?>" class="px-3 py-2 rounded-lg text-brand-orange bg-brand-ltGray font-bold text-sm transition-colors">Екобрикет слънчогледова люспа</a>
            <a href="<?php echo home_url('/ekobriket-ruf/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Дървесен екобрикет RUF</a>
            <a href="<?php echo home_url('/ekobriket-resurs/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Екобрикет Ресурс</a>
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/products/3100.jpg" alt="Екобрикет от слънчогледова люспа" class="w-full h-[400px] lg:h-[500px] object-contain bg-white" />
      </div>
      <div>
        <span class="inline-block bg-yellow-600 text-white text-xs font-bold px-3 py-1.5 rounded-full mb-4"><svg class="w-4 h-4 inline-block -mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg> Екобрикети – Слънчогледова люспа</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mb-4">Екобрикет от слънчогледова люспа</h2>

        <div class="bg-white rounded-xl border border-gray-100 p-6 mb-6">
          <h3 class="font-bold text-lg text-brand-dark mb-4">Технически характеристики</h3>
          <table class="w-full text-sm">
            <tbody>
              <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Материал</td><td class="py-3 text-brand-dark font-semibold text-right">Слънчогледова люспа</td></tr>
              <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Плътност</td><td class="py-3 text-brand-dark font-semibold text-right">1100+ кг/м³</td></tr>
              <tr class="border-b border-gray-100"><td class="py-3 text-gray-500 font-medium">Време на горене</td><td class="py-3 text-brand-dark font-semibold text-right">2-3 часа</td></tr>
              <tr><td class="py-3 text-gray-500 font-medium">Пепел</td><td class="py-3 text-brand-dark font-semibold text-right">Минимална</td></tr>
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
          <button disabled class="bg-gray-300 text-gray-500 font-bold px-6 py-3 rounded-xl text-base cursor-not-allowed text-center">Изчерпано</button>
          <a href="tel:+359877300310" class="bg-white hover:bg-brand-ltGray border-2 border-gray-300 text-gray-600 font-bold px-6 py-3 rounded-xl text-base transition-colors text-center">📞 Запитай за наличност</a>
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
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100"><div class="relative overflow-hidden h-48"><img src="<?php echo get_template_directory_uri(); ?>/images/products/ekobriketi ruf.png" alt="Дървесен екобрикет RUF" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500" loading="lazy"/><span class="absolute top-3 left-3 bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full">Дървесен</span></div><div class="p-5"><h3 class="font-bold text-lg text-brand-dark mb-2">Дървесен екобрикет RUF</h3><p class="text-gray-500 text-sm mb-4">100% натурална дървесина, правоъгълна форма.</p><a href="<?php echo home_url('/ekobriket-ruf/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече →</a></div></article>
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100"><div class="relative overflow-hidden h-48"><img src="<?php echo get_template_directory_uri(); ?>/images/products/brevis.png" alt="Пелети BREVIS" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500" loading="lazy"/><span class="absolute top-3 left-3 bg-brand-orange text-white text-xs font-bold px-3 py-1.5 rounded-full">Слънчогледови</span></div><div class="p-5"><h3 class="font-bold text-lg text-brand-dark mb-2">Пелети BREVIS</h3><p class="text-gray-500 text-sm mb-4">Икономично решение с висока енергийна стойност.</p><a href="<?php echo home_url('/peleti-brevis/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече →</a></div></article>
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100"><div class="relative overflow-hidden h-48"><img src="<?php echo get_template_directory_uri(); ?>/images/products/coal2.png" alt="Въглища Донбас" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500" loading="lazy"/><span class="absolute top-3 left-3 bg-gray-700 text-white text-xs font-bold px-3 py-1.5 rounded-full">Въглища</span></div><div class="p-5"><h3 class="font-bold text-lg text-brand-dark mb-2">Въглища Донбас</h3><p class="text-gray-500 text-sm mb-4">Висококачествени въглища в удобни чували.</p><a href="<?php echo home_url('/vaglishta-donbas/'); ?>" class="inline-flex items-center gap-2 text-brand-orange hover:text-brand-orangeHov font-semibold text-sm transition-colors">Виж повече →</a></div></article>
    </div>
    <div class="mt-8 text-center"><a href="<?php echo home_url('/peleti/'); ?>" class="inline-flex items-center gap-2 bg-white hover:bg-brand-ltGray border-2 border-gray-200 text-brand-dark font-semibold px-6 py-3 rounded-xl transition-colors">← Обратно към всички продукти</a></div>
        </div>
      </section>

    </main>
  </div>
</div>

<!-- CTA -->
<section class="py-16 bg-[#2c3036] text-white"><div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center"><h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Заинтересовани ли сте от тези екобрикети?</h2><p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto">Свържете се с нас за актуални цени, наличност и условия за доставка.</p><div class="flex flex-col sm:flex-row gap-4 justify-center"><a href="tel:+359877300310" class="bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-6 py-3 rounded-xl text-base transition-colors">📞 +359 877 300 310</a><a href="<?php echo home_url('/kontakti/'); ?>" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold px-6 py-3 rounded-xl text-base transition-colors">Изпрати запитване</a></div></div></section>

<!-- FOOTER -->
<?php get_footer(); ?>
