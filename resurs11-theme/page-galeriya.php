<?php
/* Template Name: Galeriya */
get_header();
?>
<!-- HERO -->
  <section class="relative pt-32 pb-16 bg-[#2c3036] text-white overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg5.jpg" alt="Фон"
      class="absolute inset-0 w-full h-full object-cover opacity-20" loading="eager" />
    <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-gray to-brand-orange/20"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <span
        class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Галерия</span>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-4">Нашите <span
          class="text-brand-orange">продукти</span></h1>
      <p class="text-xl text-gray-300 max-w-2xl mx-auto">Разгледайте пълната гама пелети, екобрикети и въглища</p>
    </div>
  </section>

  <!-- BREADCRUMB -->
  <div class="bg-brand-ltGray border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <nav class="flex items-center gap-2 text-sm text-gray-500"><a href="<?php echo home_url(); ?>"
          class="hover:text-brand-orange transition-colors">Начало</a><span>/</span><span
          class="text-brand-dark font-medium">Галерия</span></nav>
    </div>
  </div>

  <!-- FILTER & GALLERY -->
  <section class="py-16 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Filter Buttons -->
      <div class="flex flex-wrap gap-3 justify-center mb-12">
        <button class="filter-btn active px-5 py-2.5 rounded-full border-2 border-gray-200 font-semibold text-sm"
          data-filter="all">Всички</button>
        <button
          class="filter-btn px-5 py-2.5 rounded-full border-2 border-gray-200 font-semibold text-sm text-gray-600 hover:border-brand-orange hover:text-brand-orange"
          data-filter="sklad">📦 Склад и Доставка</button>
      </div>

      <!-- Gallery Grid -->
      <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

        <!-- Store -->
        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/store.jpg" alt="Склад с пелети и въглища"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-brand-orange text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Нашият склад</h3>
            <p class="text-gray-500 text-sm mb-3">Винаги наличности от всички продукти</p>
          </div>
        </div>

        <!-- === СКЛАД И ДОСТАВКА – real gallery photos === -->
        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/195077656_2214706161993152_5786488211580317019_n-225x300.jpg" alt="Склад с пелети"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Склад с пелети</h3>
            <p class="text-gray-500 text-sm">Складова база – Панчарево</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/20250712_152146-225x300.jpg" alt="Палети с пелети в склада"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Палети с пелети</h3>
            <p class="text-gray-500 text-sm">Готови за доставка</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/20250712_152157-225x300.jpg" alt="Опаковани пелети"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Опаковани пелети</h3>
            <p class="text-gray-500 text-sm">Подготовка за доставка</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/20250712_152230-225x300.jpg" alt="Складирани чували"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Складирани чували</h3>
            <p class="text-gray-500 text-sm">Организирано съхранение</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/8eeb77a7cd9510c1251430cb2143db9c.jpg" alt="Продукти в склада"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Продукти в склада</h3>
            <p class="text-gray-500 text-sm">Разнообразие от горива</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-5f3268b14d3674307d09306a2c5f274f-V-300x225.jpg" alt="Доставка на пелети"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Доставка на пелети</h3>
            <p class="text-gray-500 text-sm">До адрес в София и страната</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-6d5993f92ca6374a24cb2a1eca32673b-V-300x225.jpg" alt="Разтоварване с кран"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Разтоварване с кран</h3>
            <p class="text-gray-500 text-sm">Хидравличен кран за тежки палети</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-949f508e7d392dfd7e9fa1cd75c4bc93-V-300x225.jpg" alt="Камион с кран"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Камион с кран</h3>
            <p class="text-gray-500 text-sm">Собствен транспорт за доставки</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-ecbd8ac3454481711c3da97eb037dad5-V-300x225.jpg" alt="Камион самосвал"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Камион самосвал</h3>
            <p class="text-gray-500 text-sm">За насипна доставка на въглища</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-ecbd8ac3454481711c3da97eb037dad5-V-300x225 (1).jpg" alt="Натоварен камион"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Натоварен камион</h3>
            <p class="text-gray-500 text-sm">Готов за тръгване</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-fff372f3191b7b4b265079616c5b2a16-V-wm-128431.20000000007_watermarked-300x161.jpg"
              alt="Панорама на склада"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Панорама на склада</h3>
            <p class="text-gray-500 text-sm">Складова база – Панчарево</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/Resized_20201003_095513-300x142.jpeg" alt="Склад отвън"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Разтоварване с кран</h3>
            <p class="text-gray-500 text-sm">Хидравличен кран за тежки палети</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/e4066875dba7a57ef8f1fe424ea1940b.jpg" alt="Палети и стока"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Въглища</h3>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3060.jpg" alt="Камион Scania с кран на път"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Камион Resurs 11</h3>
            <p class="text-gray-500 text-sm">Scania с кран за доставки</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3061.jpg" alt="Iveco камион натоварен с пелети"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Доставка с Iveco</h3>
            <p class="text-gray-500 text-sm">Натоварен камион с чували пелети</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3062.jpg" alt="Кран разтоварва контейнер"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Разтоварване с кран</h3>
            <p class="text-gray-500 text-sm">Разтоварване на контейнер в склада</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3063.jpg" alt="Iveco камион натоварен с палети"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Натоварен Iveco</h3>
            <p class="text-gray-500 text-sm">Готов за доставка на пелети</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3064.jpg" alt="Камион пред офиса на Resurs 11"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Офис Resurs 11</h3>
            <p class="text-gray-500 text-sm">Камион пред нашия офис</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3065.jpg" alt="Scania камион в склада с палети"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Товарене в склада</h3>
            <p class="text-gray-500 text-sm">Scania натоварена с палети пелети</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3066.jpg" alt="Камион с палети пред офиса"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Натоварен камион</h3>
            <p class="text-gray-500 text-sm">Палети с пелети пред склада</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3067.jpg" alt="Scania камион натоварен пред офиса"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Камион с пелети</h3>
            <p class="text-gray-500 text-sm">Готов за доставка от склада</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3068.jpg" alt="Scania камион с кран през зимата"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Камион Scania P340</h3>
            <p class="text-gray-500 text-sm">Доставки целогодишно</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3069.jpg" alt="Доставка на пелети в планината"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Зимна доставка</h3>
            <p class="text-gray-500 text-sm">Доставка на пелети до врата</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3070.jpg" alt="Iveco камион с кран в склада"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Товарене с кран</h3>
            <p class="text-gray-500 text-sm">Товарене на палети с кран Palfinger</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3071.jpg" alt="Товарене на пелети в склада"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Склад с продукти</h3>
            <p class="text-gray-500 text-sm">Палети с пелети в склада</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3072.jpg" alt="Iveco камион с кран"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Камион с кран</h3>
            <p class="text-gray-500 text-sm">Iveco с хидравличен кран</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3073.jpg" alt="Доставка на пелети в снега"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Доставка в планината</h3>
            <p class="text-gray-500 text-sm">Достигаме навсякъде</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3074.jpg" alt="Iveco доставка при зимни условия"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Доставка</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Зимна доставка</h3>
            <p class="text-gray-500 text-sm">Доставяме при всякакви условия</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3075.jpg" alt="Iveco камион с флагове Resurs 11"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Камион Resurs 11</h3>
            <p class="text-gray-500 text-sm">Iveco с пелети и фирмени знамена</p>
          </div>
        </div>

        <div class="gallery-item rounded-2xl overflow-hidden bg-white border border-gray-100 cursor-pointer"
          data-category="sklad" onclick="openLightbox(this)">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3076.jpg" alt="Палетна количка"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            <span
              class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">Склад</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-brand-dark mb-1">Палетна количка</h3>
            <p class="text-gray-500 text-sm">Оборудване за обработка на стоки</p>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- LIGHTBOX -->
  <div id="lightbox" class="fixed inset-0 z-[100] bg-[#22252a]/90 hidden flex items-center justify-center p-4"
    onclick="closeLightbox(event)">
    <button onclick="closeLightbox(event)"
      class="absolute top-4 right-4 text-white hover:text-brand-orange text-4xl font-light transition-colors z-10"
      aria-label="Затвори">&times;</button>
    <button onclick="lightboxPrev(event)"
      class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-brand-orange text-4xl font-light transition-colors z-10"
      aria-label="Предишна">&#8249;</button>
    <button onclick="lightboxNext(event)"
      class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-brand-orange text-4xl font-light transition-colors z-10"
      aria-label="Следваща">&#8250;</button>
    <div class="max-w-4xl w-full text-center">
      <img id="lightbox-img" src="" alt="" class="lightbox-img max-h-[80vh] mx-auto rounded-xl shadow-2xl" />
      <p id="lightbox-caption" class="text-white text-lg font-semibold mt-4"></p>
    </div>
  </div>

  <!-- CTA -->
  <section class="py-16 bg-[#2c3036] text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Харесвате нещо?</h2>
      <p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto">Свържете се с нас за актуални цени, наличност и условия за
        доставка на всички продукти.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center"><a href="tel:+359877300310"
          class="bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">📞
          +359 877 300 310</a><a href="<?php echo home_url('/kontakti/'); ?>"
          class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Изпрати
          запитване</a></div>
    </div>
  </section>

  <!-- FOOTER -->
<?php get_footer(); ?>
