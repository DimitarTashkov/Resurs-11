<?php
/* Template Name: Kontakti */
get_header();
?>
<!-- PAGE HERO -->
<section class="relative pt-32 pb-20 bg-[#2c3036] text-white overflow-hidden">
  <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg3.jpg" alt="Дърва и пелети" class="absolute inset-0 w-full h-full object-cover opacity-25" loading="eager"/>
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-brand-brown/40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Свържете се</span>
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5">Контакти</h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">Свържете се с нас по телефон, на имейл или ни посетете в нашия склад в София, Панчарево.</p>
  </div>
</section>


<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
      <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
      <span>/</span>
      <span class="text-brand-dark font-medium">Контакти</span>
    </nav>
  </div>
</div>


<!-- КОНТАКТНА СЕКЦИЯ -->
<section class="py-24 bg-brand-ltGray">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

      <!-- Контактна информация -->
      <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mb-8">Как да се свържете с нас</h2>

        <div class="space-y-6 mb-10">

          <!-- Телефони -->
          <div class="bg-white rounded-2xl p-6 border border-gray-100 flex gap-5 items-start">
            <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">📞</div>
            <div>
              <h3 class="font-bold text-lg text-brand-dark mb-2">Телефони</h3>
              <a href="tel:+359877300310" class="block text-brand-orange hover:text-brand-orangeHov font-semibold text-xl transition-colors">+359 877 300 310</a>
              <a href="tel:+359896300310" class="block text-brand-orange hover:text-brand-orangeHov font-semibold text-xl transition-colors mt-1">+359 896 300 310</a>
              <p class="text-gray-500 text-sm mt-2">Работим Пон – Съб, 08:00 – 18:00</p>
            </div>
          </div>

          <!-- Адрес -->
          <div class="bg-white rounded-2xl p-6 border border-gray-100 flex gap-5 items-start">
            <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">📍</div>
            <div>
              <h3 class="font-bold text-lg text-brand-dark mb-2">Адрес на склада</h3>
              <p class="text-gray-600 text-lg">район Панчерево, ул. Околовръстен път No 338</p>
              <p class="text-gray-500 text-sm mt-2">Лесен достъп с кола. Паркинг на място.</p>
            </div>
          </div>

          <!-- Работно време -->
          <div class="bg-white rounded-2xl p-6 border border-gray-100 flex gap-5 items-start">
            <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">⏰</div>
            <div>
              <h3 class="font-bold text-lg text-brand-dark mb-2">Работно време</h3>
              <div class="space-y-1 text-gray-600">
                <div class="flex justify-between gap-8"><span>Понеделник – Петък</span><span class="font-semibold">08:00 – 18:00</span></div>
                <div class="flex justify-between gap-8"><span>Събота</span><span class="font-semibold">09:00 – 15:00</span></div>
                <div class="flex justify-between gap-8"><span>Неделя</span><span class="text-gray-400">Затворено</span></div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Карта (на мястото на формата) -->
      <div>
        <div class="w-full h-full min-h-[400px] sm:min-h-[500px] rounded-2xl overflow-hidden shadow-lg border border-gray-100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2935.914498705325!2d23.432124299999995!3d42.62076929999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa874f7ab600cf%3A0x5344d7722eae925d!2z0KDQtdGB0YPRgNGBLTExINCV0J7QntCU!5e0!3m2!1sbg!2sbg!4v1773933619868!5m2!1sbg!2sbg" class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- FOOTER -->
<?php get_footer(); ?>
