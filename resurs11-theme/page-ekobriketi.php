<?php
/* Template Name: Ekobriketi */
get_header();
?>
<!-- PAGE HERO -->
<section class="relative pt-32 pb-20 bg-[#2c3036] text-white overflow-hidden">
  <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg2.jpg" alt="Дървесни пелети пред камина" class="absolute inset-0 w-full h-full object-cover opacity-25" loading="eager"/>
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-brand-brown/40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Каталог</span>
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5">Висококачествени <span class="text-brand-orange">екобрикети</span></h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">Дървесни и слънчогледови екобрикети от доказани производители. Идеални за вашия комфорт.</p>
  </div>
</section>


<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
      <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
      <span>/</span>
      <span class="text-brand-dark font-medium">Екобрикети</span>
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
          <h4 class="font-bold text-brand-orange mb-2 mt-4 text-sm uppercase tracking-wider">Екобрикети</h4>
          <nav class="flex flex-col gap-1 mb-4">
            <a href="<?php echo home_url('/ekobriket-slunshogled/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Екобрикет слънчогледова люспа</a>
            <a href="<?php echo home_url('/ekobriket-ruf/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Дървесен екобрикет RUF</a>
            <a href="<?php echo home_url('/ekobriket-resurs/'); ?>" class="px-3 py-2 rounded-lg text-gray-600 hover:text-brand-orange hover:bg-brand-ltGray text-sm font-medium transition-colors">Екобрикет Ресурс</a>
          </nav>
        </div>
      </aside>

    <!-- CONTENT -->
    <main class="w-full lg:w-3/4 flex flex-col gap-16 pb-20">

      <!-- ЕКОБРИКЕТИ -->
      <section id="ekobriketi" class="scroll-mt-28">
        <h2 class="flex items-center gap-3 text-3xl sm:text-4xl font-extrabold text-brand-brown mb-4 pb-4 border-b-2 border-brand-orange/30">
          <span class="text-4xl"><svg class="w-10 h-10 inline-block -mt-1 text-brand-orange" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></span> Екобрикети
        </h2>
        <p class="text-gray-500 text-lg mb-10 max-w-3xl">Пресовани брикети за камини, печки и котли на твърдо гориво. Дълго и равномерно горене с минимална пепел.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6">

      <!-- Слънчогледова люспа -->
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100">
        <a href="<?php echo home_url('/ekobriket-slunshogled/'); ?>" class="relative overflow-hidden h-56 block">
          <img src="<?php echo get_template_directory_uri(); ?>/images/products/3100.jpg" alt="Екобрикет от слънчогледова люспа" class="w-full h-full object-contain bg-white hover:scale-105 transition-transform duration-500" loading="lazy"/>
          <span class="absolute top-3 left-3 bg-yellow-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Слънчогледова люспа</span>
        </a>
        <div class="p-6">
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-xl text-brand-dark">Екобрикет слънчогледова люспа</h3>
            <span class="bg-gray-100 text-red-600 font-bold px-3 py-1 rounded-lg text-sm uppercase tracking-wide">Изчерпан</span>
          </div>
          <p class="text-gray-500 text-base leading-relaxed mb-4">Произведен от компресирана слънчогледова люспа. Висока плътност, дълго горене, минимално количество пепел. Отличен за котли на твърдо гориво.</p>
          <ul class="space-y-2 mb-5">
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Висока плътност (1100+ кг/м³)</li>
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Дълго горене (2-3 часа)</li>
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Минимална пепел</li>
          </ul>
          <a href="<?php echo home_url('/ekobriket-slunshogled/'); ?>" class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-6 py-3 rounded-lg transition-colors">Виж повече <span>→</span></a>
        </div>
      </article>

      <!-- RUF -->
      <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100">
        <a href="<?php echo home_url('/ekobriket-ruf/'); ?>" class="relative overflow-hidden h-56 block">
          <img src="<?php echo get_template_directory_uri(); ?>/images/products/ekobriketi ruf.png" alt="Дървесен екобрикет RUF" class="w-full h-full object-contain bg-white hover:scale-105 transition-transform duration-500" loading="lazy"/>
          <span class="absolute top-3 left-3 bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full">Дървесен</span>
        </a>
        <div class="p-6">
          <div class="flex items-center justify-between mb-2">
            <h3 class="font-bold text-xl text-brand-dark">Дървесен екобрикет RUF</h3>
              <span class="bg-gray-100 text-red-600 font-bold px-3 py-1 rounded-lg text-sm uppercase tracking-wide">Изчерпана наличност!</span>
          </div>
          <p class="text-gray-500 text-base leading-relaxed mb-4">Пресован правоъгълен брикет от дървесни стърготини. Горят като дърва – подходящи за камини, печки и котли на твърдо гориво.</p>
          <ul class="space-y-2 mb-5">
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>100% натурална дървесина</li>
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Правоъгълна форма (RUF)</li>
            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Удобни за съхранение</li>
          </ul>
          <a href="<?php echo home_url('/ekobriket-ruf/'); ?>" class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-6 py-3 rounded-lg transition-colors">Виж повече <span>→</span></a>
        </div>
      </article>

              <!-- Дървесен екобрикет Ресурс -->
        <article class="product-card bg-white rounded-2xl overflow-hidden border border-gray-100">
          <a href="<?php echo home_url('/ekobriket-resurs/'); ?>" class="relative overflow-hidden h-56 block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/products/ekobriketi-resurs.png" alt="Дървесен екобрикет Ресурс" class="w-full h-full object-contain bg-white hover:scale-105 transition-transform duration-500" loading="lazy"/>
            <span class="absolute top-3 left-3 bg-brand-brown text-white text-xs font-bold px-3 py-1.5 rounded-full">Дървесни</span>
          </a>
          <div class="p-6">
            <div class="flex items-center justify-between mb-2">
              <h3 class="font-bold text-xl text-brand-dark">Екобрикет Ресурс</h3>
              <span class="text-brand-orange font-extrabold text-lg">210.00 EUR<span class="text-gray-400 text-sm font-semibold ml-1">/ 410.68 лв.</span></span>
            </div>
            <p class="text-gray-500 text-base leading-relaxed mb-4">Екобрикети от дървесни стърготини – продължително горене, висока калоричност и минимално количество пепел. Идеални за котли и камини.</p>
            <ul class="space-y-2 mb-5">
              <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Лесно съхранение</li>
              <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Без вредни емисии</li>
            </ul>
            <a href="<?php echo home_url('/ekobriket-resurs/'); ?>" class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-6 py-3 rounded-lg transition-colors">Виж повече <span>→</span></a>
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
