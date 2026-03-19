<?php get_header(); ?>
<!-- ============================================================
     HERO СЕКЦИЯ – Главен банер
     WordPress: front-page.php / page-home.php (hero block/ACF)
     ============================================================ -->
  <section id="hero" class="relative min-h-[50vh] md:min-h-[60vh] py-20 flex items-center justify-center overflow-hidden"
    aria-label="Начален банер">

    <!-- Background image (замени с реална снимка на склада / продуктите) -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg2.jpg" alt="Склад с твърдо гориво – пелети и въглища"
      class="absolute inset-0 w-full h-full object-cover" loading="eager" />
    <!-- Тъмен overlay (по-лек) -->
    <div class="absolute inset-0 bg-[#22252a]/20"></div>

    <!-- Съдържание -->
    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto pt-20">
      <!-- Badge -->
      <span
        class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-8 hero-fade">
        София • Доставка до адрес
      </span>

      <h1
        class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold leading-[1.05] mb-8 drop-shadow-lg hero-fade-d1">
        Топлина за вашия<br />
        <span class="text-brand-orange">дом и бизнес</span>
      </h1>



      <!-- CTA бутони -->
      <div class="flex flex-col sm:flex-row gap-5 justify-center hero-fade-d3">
        <a href="<?php echo home_url('/peleti/'); ?>"
          class="cta-glow bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-10 py-5 rounded-xl text-xl transition-colors duration-200 shadow-lg shadow-brand-orange/30">
          Разгледай продуктите
        </a>
        <a href="tel:+359877300310"
          class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold px-10 py-5 rounded-xl text-xl transition-colors duration-200 backdrop-blur-sm">
          📞 Обади се сега
        </a>
      </div>



    <!-- Scroll arrow -->
    <a href="#products"
      class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/60 hover:text-white transition-colors animate-bounce"
      aria-label="Превъртете надолу">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </a>
  </section>


  <!-- ============================================================
     СЕКЦИЯ: НАШИТЕ ПРОДУКТИ
     WordPress: archive-product.php или custom post type "Products"
     ============================================================ -->
  <section id="products" class="py-24 sm:py-32 bg-brand-ltGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section header -->
      <div class="text-center mb-16">
        <span class="text-brand-orange font-semibold text-sm uppercase tracking-widest">Асортимент</span>
        <h2 class="text-4xl sm:text-5xl font-extrabold text-brand-dark mt-3">Нашите продукти</h2>
        <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-lg">Предлагаме широка гама от висококачествено твърдо гориво
          за отопление на домове, офиси и производствени обекти.</p>
      </div>

      <!-- КАТЕГОРИИ -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Категория: Пелети -->
        <a href="<?php echo home_url('/peleti/'); ?>"
          class="group relative rounded-2xl overflow-hidden h-80 block shadow-lg hover:shadow-2xl transition-shadow duration-300">
          <img src="<?php echo get_template_directory_uri(); ?>/images/products/3078.jpg" alt="Пелети"
            class="w-full h-full object-cover bg-white group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <div class="flex items-center gap-2 mb-2">
              <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0h4" />
              </svg>
              <h3 class="text-2xl font-extrabold">Пелети</h3>
            </div>
            <p class="text-gray-200 text-sm mb-3">Дървесни и слънчогледови пелети от водещи марки</p>
            <span
              class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors">Разгледай
              продуктите →</span>
          </div>
        </a>

        <!-- Категория: Екобрикети -->
        <a href="<?php echo home_url('/ekobriketi/'); ?>"
          class="group relative rounded-2xl overflow-hidden h-80 block shadow-lg hover:shadow-2xl transition-shadow duration-300">
          <img src="<?php echo get_template_directory_uri(); ?>/images/products/3102.jpg" alt="Екобрикети"
            class="w-full h-full object-cover bg-white group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <div class="flex items-center gap-2 mb-2">
              <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              <h3 class="text-2xl font-extrabold">Екобрикети</h3>
            </div>
            <p class="text-gray-200 text-sm mb-3">Дървесни и слънчогледови екобрикети за камини и котли</p>
            <span
              class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors">Разгледай
              продуктите →</span>
          </div>
        </a>

        <!-- Категория: Въглища -->
        <a href="<?php echo home_url('/vaglishta/'); ?>"
          class="group relative rounded-2xl overflow-hidden h-80 block shadow-lg hover:shadow-2xl transition-shadow duration-300">
          <img src="<?php echo get_template_directory_uri(); ?>/images/products/3079.jpg" alt="Въглища"
            class="w-full h-full object-cover bg-white group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <div class="flex items-center gap-2 mb-2">
              <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
              </svg>
              <h3 class="text-2xl font-extrabold">Въглища</h3>
            </div>
            <p class="text-gray-200 text-sm mb-3">Висококачествени въглища Донбас в удобни чували</p>
            <span
              class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors">Разгледай
              продуктите →</span>
          </div>
        </a>

      </div> <!-- Виж всички бутон -->
      <div class="text-center mt-14">
        <a href="<?php echo home_url('/peleti/'); ?>"
          class="inline-flex items-center gap-2 bg-[#2c3036] hover:bg-brand-gray text-white font-bold text-lg px-10 py-4 rounded-xl transition-colors">
          Виж всички пелети
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

    </div>
  </section>


  <!-- ============================================================
     СЕКЦИЯ: ДОСТАВКА
     WordPress: page-dostavka.php или ACF section в front-page
     ============================================================ -->
  <section id="dostavka" class="py-24 sm:py-32 bg-[#2c3036] text-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section header -->
      <div class="text-center mb-16">
        <span class="text-brand-orange font-semibold text-sm uppercase tracking-widest">Логистика</span>
        <h2 class="text-4xl sm:text-5xl font-extrabold mt-3">Доставка до вашия адрес</h2>
        <p class="text-gray-400 mt-4 max-w-2xl mx-auto text-lg">Разполагаме с <strong class="text-white">собствен
            транспорт</strong> – без посредници, без чакане. Доставяме бързо и удобно.</p>
      </div>

      <!-- Transport cards grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Камион с кран -->
        <div class="bg-brand-gray rounded-2xl overflow-hidden group">
          <div class="relative h-52 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3067.jpg"
              alt="Камион с кран за разтоварване на пелети и брикети"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <span class="bg-brand-orange text-white text-xs font-bold px-3 py-1.5 rounded-full">Препоръчан</span>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <span class="text-3xl">🏗️</span>
              <h3 class="text-xl sm:text-2xl font-bold">Камион с кран</h3>
            </div>
            <p class="text-gray-400 text-base leading-relaxed">Хидравличният кран позволява прецизно разтоварване на
              палети директно на желаното място. Услугата е идеална за тесни улици, труднодостъпни дворове и обекти,
              където стандартното разтоварване е затруднено.</p>
          </div>
        </div>

        <!-- Камион самосвал -->
        <div class="bg-brand-gray rounded-2xl overflow-hidden group">
          <div class="relative h-52 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3075.jpg"
              alt="Камион самосвал за насипна доставка на въглища"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <span class="text-3xl">🚛</span>
              <h3 class="text-xl sm:text-2xl font-bold">Камион самосвал</h3>
            </div>
            <p class="text-gray-400 text-base leading-relaxed">Идеален за насипни товари. Самосвалът осигурява бърза и
              ефективна доставка до вашия склад или двор.</p>
          </div>
        </div>

        <!-- Палетна количка -->
        <div class="bg-brand-gray rounded-2xl overflow-hidden group">
          <div class="relative h-52 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3076.jpg"
              alt="Палетна количка за подреждане на стока"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <span class="text-3xl">🔧</span>
              <h3 class="text-xl sm:text-2xl font-bold">Палетна количка</h3>
            </div>
            <p class="text-gray-400 text-base leading-relaxed">При заявка осигуряваме палетна количка.</p>
          </div>
        </div>

      </div>

      <!-- Info bar -->
      <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-brand-orange/10 border border-brand-orange/30 rounded-xl px-6 py-5 flex items-center gap-4">
          <span class="text-3xl flex-shrink-0">📍</span>
          <div>
            <div class="font-semibold text-sm">Склад / Адрес</div>
            <div class="text-gray-400 text-xs mt-0.5">район Панчерево, ул. Околовръстен път No 338</div>
          </div>
        </div>
        <div class="bg-brand-orange/10 border border-brand-orange/30 rounded-xl px-6 py-5 flex items-center gap-4">
          <span class="text-3xl flex-shrink-0">📞</span>
          <div>
            <div class="font-semibold text-sm">Обадете се</div>
            <div class="text-gray-400 text-xs mt-0.5">
              <a href="tel:+359877300310" class="hover:text-brand-orange transition-colors">+359 877 300 310</a><br />
              <a href="tel:+359896300310" class="hover:text-brand-orange transition-colors">+359 896 300 310</a>
            </div>
          </div>
        </div>
        <div class="bg-brand-orange/10 border border-brand-orange/30 rounded-xl px-6 py-5 flex items-center gap-4">
          <span class="text-3xl flex-shrink-0">⚡</span>
          <div>
            <div class="font-semibold text-sm">Бърза доставка</div>
            <div class="text-gray-400 text-xs mt-0.5">Доставяме в рамките на<br />работния ден при наличен запас</div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
     СЕКЦИЯ: ПРЕДИМСТВА (Защо да изберете нас?)
     WordPress: ACF repeater field или static section
     ============================================================ -->
  <section id="predimstva" class="py-24 sm:py-32 bg-brand-cream scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section header & Image -->
      <div class="flex flex-col lg:flex-row gap-12 mb-16 items-center">
        <div class="lg:w-1/2">
          <span class="text-brand-orange font-semibold text-sm uppercase tracking-widest">Защо ние?</span>
          <h2 class="text-4xl sm:text-5xl font-extrabold text-brand-dark mt-3">Предимства на Ресурс – 11</h2>
          <p class="text-gray-500 mt-4 text-lg">Изберете сигурността и качеството със собствената ни база и автопарк.
          </p>
        </div>
        <div class="lg:w-1/2 rounded-3xl overflow-hidden shadow-xl h-64 sm:h-80 w-full relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/store.jpg" alt="Склад на Ресурс 11"
            class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" loading="lazy" />
        </div>
      </div>

      <!-- Features grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- Feature 1 -->
        <div class="flex gap-5">
          <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">
            🏭
          </div>
          <div>
            <h3 class="font-bold text-brand-dark text-lg mb-2">Голям складов запас</h3>
            <p class="text-gray-500 text-base leading-relaxed">Разполагаме с просторен склад в Панчарево, гарантиращ
              наличност дори в пиков сезон на отопление.</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex gap-5">
          <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">
            🚚
          </div>
          <div>
            <h3 class="font-bold text-brand-dark text-lg mb-2">Собствен транспорт</h3>
            <p class="text-gray-500 text-base leading-relaxed">Без наемен превозвач – контролираме всяка доставка от
              началото до края. По-бързо, по-надеждно.</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="flex gap-5">
          <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">
            🏗️
          </div>
          <div>
            <h3 class="font-bold text-brand-dark text-lg mb-2">Разтоварване с кран</h3>
            <p class="text-gray-500 text-base leading-relaxed">Камионът с кран улеснява разтоварването дори на места с
              труден достъп. Вие само покажете къде.</p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="flex gap-5">
          <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">
            🌟
          </div>
          <div>
            <h3 class="font-bold text-brand-dark text-lg mb-2">Проверени марки</h3>
            <p class="text-gray-500 text-base leading-relaxed">Предлагаме само утвърдени марки пелети и брикети – без
              неизвестни производители и фалшиви сертификати.</p>
          </div>
        </div>

        <!-- Feature 5 -->
        <div class="flex gap-5">
          <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">
            💬
          </div>
          <div>
            <h3 class="font-bold text-brand-dark text-lg mb-2">Лично обслужване</h3>
            <p class="text-gray-500 text-base leading-relaxed">Реален телефон, реален човек. Ще ви помогнем да изберете
              правилния продукт за вашия котел или камина.</p>
          </div>
        </div>

        <!-- Feature 6 -->
        <div class="flex gap-5">
          <div class="flex-shrink-0 w-14 h-14 bg-brand-orange/15 rounded-xl flex items-center justify-center text-3xl">
            💰
          </div>
          <div>
            <h3 class="font-bold text-brand-dark text-lg mb-2">Конкурентни цени</h3>
            <p class="text-gray-500 text-base leading-relaxed">Директни доставки от производители ни позволяват да
              предложим отлично качество на справедлива цена.</p>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ============================================================
     СЕКЦИЯ: ОТЗИВИ ОТ КЛИЕНТИ
     WordPress: ACF repeater field или Reviews CPT
     ============================================================ -->
  <section id="otzyvi" class="py-24 sm:py-32 bg-brand-ltGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="text-brand-orange font-semibold text-sm uppercase tracking-widest">Доверие</span>
        <h2 class="text-4xl sm:text-5xl font-extrabold text-brand-dark mt-3">Какво казват нашите клиенти</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Отзив 1 -->
        <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
          <div class="flex gap-1 mb-4">
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
          </div>
          <p class="text-gray-600 text-base leading-relaxed mb-6">"Доставиха пелетите с камион с кран директно до
            мазето. Много бързо и професионално обслужване. Пелетите SCHNIDER горят отлично!"</p>
          <div class="flex items-center gap-3">
            <div
              class="w-10 h-10 rounded-full bg-brand-orange/20 flex items-center justify-center text-brand-orange font-bold">
              И</div>
            <div>
              <div class="font-semibold text-brand-dark">Иван Петров</div>
              <div class="text-sm text-gray-400">София, кв. Бояна</div>
            </div>
          </div>
        </div>

        <!-- Отзив 2 -->
        <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
          <div class="flex gap-1 mb-4">
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
          </div>
          <p class="text-gray-600 text-base leading-relaxed mb-6">"Вече трета година поръчвам от Ресурс 11. Цените са
            коректни, а качеството на екобрикетите RUF е винаги на ниво. Препоръчвам!"</p>
          <div class="flex items-center gap-3">
            <div
              class="w-10 h-10 rounded-full bg-brand-brown/20 flex items-center justify-center text-brand-brown font-bold">
              М</div>
            <div>
              <div class="font-semibold text-brand-dark">Мария Георгиева</div>
              <div class="text-sm text-gray-400">София, кв. Драгалевци</div>
            </div>
          </div>
        </div>

        <!-- Отзив 3 -->
        <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
          <div class="flex gap-1 mb-4">
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
            <span class="text-brand-orange text-xl">★</span>
          </div>
          <p class="text-gray-600 text-base leading-relaxed mb-6">"Когато имахме авария с отоплението, те реагираха в
            същия ден и ни доставиха въглища. Камионът със самосвала беше перфектно решение."</p>
          <div class="flex items-center gap-3">
            <div
              class="w-10 h-10 rounded-full bg-brand-orange/20 flex items-center justify-center text-brand-orange font-bold">
              С</div>
            <div>
              <div class="font-semibold text-brand-dark">Стефан Николов</div>
              <div class="text-sm text-gray-400">с. Бистрица</div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ============================================================
     СЕКЦИЯ: CTA БАНЕР
     WordPress: Reusable block или ACF field
     ============================================================ -->
  <section class="relative py-20 bg-brand-cream overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div
        class="relative bg-[#2c3036] rounded-2xl p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8 text-white overflow-hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/images/background essentials/bg1.jpg" alt=""
          class="absolute inset-0 w-full h-full object-cover opacity-20" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-r from-brand-brown/90 to-brand-dark/90"></div>
        <div class="relative z-10">
          <h3 class="text-3xl md:text-4xl font-extrabold mb-3">Готови за поръчка?</h3>
          <p class="text-gray-300 max-w-md text-lg">Свържете се с нас сега и получете оферта за вашата нужда. Доставяме
            в София и цялата страна.</p>
        </div>
        <div class="relative z-10 flex flex-col sm:flex-row gap-4 flex-shrink-0">
          <a href="tel:+359877300310"
            class="bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl transition-colors text-center text-lg">
            📞 Обади се
          </a>
          <a href="<?php echo home_url('/kontakti/'); ?>"
            class="bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold px-8 py-4 rounded-xl transition-colors text-center text-lg">
            Изпрати запитване
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
     FOOTER / ДОЛНА ЛЕНТА
     WordPress: footer.php
     ============================================================ -->
<?php get_footer(); ?>
