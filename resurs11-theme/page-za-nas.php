<?php
/* Template Name: Za Nas */
get_header();
?>
<!-- PAGE HERO -->
<section class="relative pt-32 pb-20 bg-[#2c3036] text-white overflow-hidden">
  <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg5.jpg" alt="Дървени трупи" class="absolute inset-0 w-full h-full object-cover opacity-25" loading="eager"/>
  <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/80 to-brand-brown/40"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">За нас</span>
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5">Ресурс – 11</h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">Надежден партньор за отопление на вашия дом и бизнес с качествени твърди горива.</p>
  </div>
</section>


<!-- BREADCRUMB -->
<div class="bg-brand-ltGray border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
      <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
      <span>/</span>
      <span class="text-brand-dark font-medium">За нас</span>
    </nav>
  </div>
</div>


<!-- НАШАТА МИСИЯ -->
<section class="py-24 bg-brand-ltGray">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <!-- Изображение -->
      <div class="relative rounded-2xl overflow-hidden shadow-xl">
        <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/store.jpg" alt="Склад за твърдо гориво на Ресурс 11" class="w-full h-[400px] object-cover" />
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-8">
          <p class="text-white text-lg font-semibold">Нашият склад в Панчарево, София</p>
        </div>
      </div>

      <!-- Текст -->
      <div>
        <span class="text-brand-orange text-sm font-bold uppercase tracking-widest">Кои сме ние</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mt-3 mb-6">Качество и доверие в основата на нашия бизнес</h2>
        <p class="text-gray-600 text-lg leading-relaxed mb-5">
          <strong class="text-brand-dark">Ресурс – 11</strong> е утвърден доставчик на твърдо гориво в София и региона. Нашата мисия е да осигурим топлина и комфорт за вашия дом чрез висококачествени пелети, екобрикети и въглища на достъпни цени.
        </p>
        <p class="text-gray-600 text-lg leading-relaxed mb-5">
          Работим с проверени европейски и български производители, за да ви предложим горива с висока калоричност, ниска пепелност и минимална влажност. Всеки продукт в нашия каталог е внимателно подбран и тестван.
        </p>
        <p class="text-gray-600 text-lg leading-relaxed">
          С нашия собствен транспорт – камиони с кран, самосвали и палетни колички – осигуряваме бърза и удобна доставка директно до вашия адрес в София и околността.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ЗАЩО ДА ИЗБЕРЕТЕ НАС -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center mb-16">
      <span class="text-brand-orange text-sm font-bold uppercase tracking-widest">Предимства</span>
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-brand-dark mt-3 mb-5">Защо да изберете нас</h2>
      <p class="text-gray-500 text-lg max-w-2xl mx-auto">Доверието на стотици клиенти се гради с качество, коректност и грижа.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Предимство 1 -->
      <div class="bg-brand-ltGray rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl mx-auto mb-5">✅</div>
        <h3 class="text-xl font-bold text-brand-dark mb-3">Гарантирано качество</h3>
        <p class="text-gray-600 text-base leading-relaxed">Всички наши продукти са сертифицирани и отговарят на европейските стандарти за качество и безопасност.</p>
      </div>

      <!-- Предимство 2 -->
      <div class="bg-brand-ltGray rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl mx-auto mb-5">🚛</div>
        <h3 class="text-xl font-bold text-brand-dark mb-3">Собствен транспорт</h3>
        <p class="text-gray-600 text-base leading-relaxed">Разполагаме с камиони с кран, самосвали и палетни колички за удобна и бърза доставка до вашия адрес.</p>
      </div>

      <!-- Предимство 3 -->
      <div class="bg-brand-ltGray rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl mx-auto mb-5">💰</div>
        <h3 class="text-xl font-bold text-brand-dark mb-3">Конкурентни цени</h3>
        <p class="text-gray-600 text-base leading-relaxed">Предлагаме изгодни цени без компромис с качеството. Специални отстъпки при по-големи количества.</p>
      </div>

      <!-- Предимство 4 -->
      <div class="bg-brand-ltGray rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl mx-auto mb-5">🤝</div>
        <h3 class="text-xl font-bold text-brand-dark mb-3">Лично обслужване</h3>
        <p class="text-gray-600 text-base leading-relaxed">Всяка поръчка е за нас важна. Консултираме клиентите при избора на подходящо гориво за техните нужди.</p>
      </div>

      <!-- Предимство 5 -->
      <div class="bg-brand-ltGray rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl mx-auto mb-5">📦</div>
        <h3 class="text-xl font-bold text-brand-dark mb-3">Богат асортимент</h3>
        <p class="text-gray-600 text-base leading-relaxed">Над 10 вида продукти от водещи марки – пелети, екобрикети и въглища за всякакъв тип отопление.</p>
      </div>

      <!-- Предимство 6 -->
      <div class="bg-brand-ltGray rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl mx-auto mb-5">⚡</div>
        <h3 class="text-xl font-bold text-brand-dark mb-3">Бърза доставка</h3>
        <p class="text-gray-600 text-base leading-relaxed">Доставяме в рамките на 1–2 работни дни след потвърждение на поръчката. Винаги навреме.</p>
      </div>

    </div>
  </div>
</section>




<!-- НАШИЯТ ЕКИП / СКЛАД -->
<section class="py-24 bg-brand-ltGray">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center mb-16">
      <span class="text-brand-orange text-sm font-bold uppercase tracking-widest">Зад кулисите</span>
      <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mt-3 mb-5">Нашият склад и доставка</h2>
      <p class="text-gray-500 text-lg max-w-2xl mx-auto">Разполагаме с модерен склад и собствен транспорт за безпроблемна доставка.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="rounded-2xl overflow-hidden shadow-md">
        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-6d5993f92ca6374a24cb2a1eca32673b-V-300x225.jpg" alt="Пелети в склад" class="w-full h-64 object-cover" />
        <div class="bg-white p-5">
          <h3 class="font-bold text-lg text-brand-dark">Складова база</h3>
          <p class="text-gray-500 text-sm mt-1">Съхранение в сухи условия за запазване на качеството.</p>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden shadow-md">
        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-ecbd8ac3454481711c3da97eb037dad5-V-300x225.jpg" alt="Камион за доставка на твърдо гориво" class="w-full h-64 object-cover" />
        <div class="bg-white p-5">
          <h3 class="font-bold text-lg text-brand-dark">Нашите камиони</h3>
          <p class="text-gray-500 text-sm mt-1">Камиони с кран и самосвали за всякакви поръчки.</p>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden shadow-md">
        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-949f508e7d392dfd7e9fa1cd75c4bc93-V-300x225.jpg" alt="Готова доставка на пелети" class="w-full h-64 object-cover" />
        <div class="bg-white p-5">
          <h3 class="font-bold text-lg text-brand-dark">Подготовка на поръчки</h3>
          <p class="text-gray-500 text-sm mt-1">Внимателно пакетиране и подготовка преди доставка.</p>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-brand-orange to-brand-orangeHov text-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h3 class="text-3xl sm:text-4xl font-extrabold mb-4">Готови ли сте да поръчате?</h3>
    <p class="text-xl text-white/80 mb-8">Свържете се с нас за цени и налични количества.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="<?php echo home_url('/kontakti/'); ?>" class="bg-white text-brand-orange font-bold text-lg px-10 py-4 rounded-xl hover:bg-brand-cream transition-colors shadow-lg">Изпратете запитване</a>
      <a href="tel:+359877300310" class="bg-white/20 border-2 border-white text-white font-bold text-lg px-10 py-4 rounded-xl hover:bg-white/30 transition-colors">📞 Обадете се</a>
    </div>
  </div>
</section>


<!-- FOOTER -->
<?php get_footer(); ?>
