<?php
/* Template Name: Vaglishta */
get_header();
?>
<!-- PAGE HERO -->
<section class="relative pt-32 pb-20 bg-[#2c3036] text-white overflow-hidden">
  <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg2.jpg" alt="Дървесни пелети пред камина" class="absolute inset-0 w-full h-full object-cover opacity-25" loading="eager"/>
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-brand-brown/40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Каталог</span>
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5">Висококачествени <span class="text-brand-orange">въглища</span></h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">Висококалорични антрацитни въглища (Донбас) в чували. Идеални за вашето отопление.</p>
  </div>
</section>


<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
      <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
      <span>/</span>
      <span class="text-brand-dark font-medium">Въглища</span>
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
          <h4 class="font-bold text-brand-orange mb-2 mt-4 text-sm uppercase tracking-wider">Въглища</h4>
          <nav class="flex flex-col gap-1">
            <a href="<?php echo home_url('/vaglishta-donbas/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Въглища Донбас</a>
          </nav>
        </div>
      </aside>

    <!-- CONTENT -->
    <main class="w-full lg:w-3/4 flex flex-col gap-16 pb-20">

      <!-- ВЪГЛИЩА -->
      <section id="vaglishta" class="scroll-mt-28">
        <h2 class="flex items-center gap-3 text-3xl sm:text-4xl font-extrabold text-brand-brown mb-4 pb-4 border-b-2 border-brand-orange/30">
          <span class="text-4xl"><svg class="w-10 h-10 inline-block -mt-1 text-brand-orange" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 7.1 10c0-2 1.5-4 4.5-4 1.5 2 1.5 4 0 6-1-1.5-1.5-1.5-2.5 0-1 1.5.5 3.5 2 3.5 1.5 0 2-1 2-1z"/></svg></span> Въглища
        </h2>
        <p class="text-gray-500 text-lg mb-10 max-w-3xl">Висококалорични антрацитни въглища. Чудесно решение за ефективно отопление през целия зимен сезон.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6">

      <!-- Донбас -->
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100">
        <a href="<?php echo home_url('/vaglishta-donbas/'); ?>" class="relative overflow-hidden h-56 block">
          <img src="<?php echo get_template_directory_uri(); ?>/images/products/uhlishte.png" alt="Въглища Донбас" class="w-full h-full object-contain bg-white hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.src="<?php echo get_template_directory_uri(); ?>/images/products/kerpi.png'" />
          <span class="absolute top-3 left-3 bg-[#2c3036] text-white text-xs font-bold px-3 py-1.5 rounded-full">Антрацитни</span>
        </a>
        <div class="p-6">
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-xl text-brand-dark">Въглища Донбас</h3>
            <span class="text-brand-orange font-extrabold text-lg">310.00 EUR<span class="text-gray-400 text-sm font-semibold ml-1">/ 606.27 лв.</span></span>
          </div>
          <p class="text-gray-500 text-base leading-relaxed mb-4">Селектирани висококалорични въглища от басейна Донбас. Опаковани в удобни за пренасяне и съхранение чували от 25 кг.</p>
          <ul class="space-y-2 mb-5">
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Висока калоричност</li>
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Дълготрайно горене</li>
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Чували по 25 кг</li>
          </ul>
          <a href="<?php echo home_url('/vaglishta-donbas/'); ?>" class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-6 py-3 rounded-lg transition-colors">Виж повече <span>→</span></a>
        </div>
      </article>

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


<!-- FOOTER -->
<?php get_footer(); ?>
