<?php
/* Template Name: Dostavka */
get_header();
?>
<!-- PAGE HERO -->
  <section class="relative pt-32 pb-20 bg-[#2c3036] text-white overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG-949f508e7d392dfd7e9fa1cd75c4bc93-V-300x225.jpg"
      alt="Камион с кран за доставка на пелети" class="absolute inset-0 w-full h-full object-cover opacity-30"
      loading="eager" />
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/80 to-brand-dark/40"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <span
        class="inline-block bg-brand-orange/20 border border-brand-orange text-brand-orange text-sm font-semibold uppercase tracking-widest px-5 py-2 rounded-full mb-6">Логистика</span>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5">Доставка с <span
          class="text-brand-orange">наш транспорт</span></h1>
      <p class="text-xl text-gray-300 max-w-2xl">Без посредници, без чакане. Разполагаме със собствен автопарк за бърза
        и удобна доставка в София и региона.</p>
    </div>
  </section>


  <!-- BREADCRUMB -->
  <div class="bg-brand-ltGray border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <nav class="flex items-center gap-2 text-sm text-gray-500">
        <a href="<?php echo home_url(); ?>" class="hover:text-brand-orange transition-colors">Начало</a>
        <span>/</span>
        <span class="text-brand-dark font-medium">Доставка</span>
      </nav>
    </div>
  </div>


  <!-- ТРАНСПОРТНИ СРЕДСТВА -->
  <section class="py-24 bg-brand-ltGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark">Нашият автопарк</h2>
        <p class="text-gray-500 text-lg mt-4 max-w-2xl mx-auto">Три вида транспорт за всяка ситуация – от палети с
          пелети до насипни количества въглища.</p>
      </div>

      <div class="space-y-16">

        <!-- Камион с кран – подробна секция -->
        <div class="flex flex-col lg:flex-row gap-10 items-center">
          <div class="lg:w-1/2">
            <div class="rounded-2xl overflow-hidden shadow-xl">
              <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3067.jpg"
                alt="Камион с хидравличен кран – разтоварване на пелети" class="w-full h-72 lg:h-96 object-cover"
                loading="lazy" />
            </div>
          </div>
          <div class="lg:w-1/2">
            <span class="inline-block bg-brand-orange text-white text-xs font-bold px-4 py-1.5 rounded-full mb-4">⭐
              Най-популярен</span>
            <h3 class="text-3xl font-extrabold text-brand-dark mb-4">Камион с кран</h3>
            <p class="text-gray-500 text-lg leading-relaxed mb-6">Хидравличният кран позволява прецизно разтоварване на
              палети директно на желаното място. Услугата е идеална за тесни улици, труднодостъпни дворове и обекти,
              където стандартното разтоварване е затруднено.</p>
            <ul class="space-y-3 mb-8">
              <li class="flex items-center gap-3 text-base text-gray-600"><svg
                  class="w-5 h-5 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>Разтоварване без физическо усилие</li>
              <li class="flex items-center gap-3 text-base text-gray-600"><svg
                  class="w-5 h-5 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>Достъп до труднодостъпни места</li>
              <li class="flex items-center gap-3 text-base text-gray-600"><svg
                  class="w-5 h-5 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>Идеален за палети с пелети и брикети</li>
              <li class="flex items-center gap-3 text-base text-gray-600"><svg
                  class="w-5 h-5 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>Безопасно и бързо</li>
            </ul>
            <a href="<?php echo home_url('/kontakti/'); ?>"
              class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Заяви
              доставка →</a>
          </div>
        </div>

        <!-- Камион самосвал -->
        <div class="flex flex-col lg:flex-row-reverse gap-10 items-center">
          <div class="lg:w-1/2">
            <div class="rounded-2xl overflow-hidden shadow-xl">
              <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3075.jpg"
                alt="Камион самосвал за доставка на въглища" class="w-full h-72 lg:h-96 object-cover" loading="lazy" />
            </div>
          </div>
          <div class="lg:w-1/2">
            <h3 class="text-3xl font-extrabold text-brand-dark mb-4">Камион самосвал</h3>
            <p class="text-gray-500 text-lg leading-relaxed mb-6">За насипни количества въглища или голям обем пелети.
              Самосвалът осигурява бързо разтоварване директно в склад, двор или определена площ.</p>
            <ul class="space-y-3 mb-8">
              <li class="flex items-center gap-3 text-base text-gray-600"><svg
                  class="w-5 h-5 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>За големи количества</li>
              <li class="flex items-center gap-3 text-base text-gray-600"><svg
                  class="w-5 h-5 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>Бързо разтоварване</li>
              <li class="flex items-center gap-3 text-base text-gray-600"><svg
                  class="w-5 h-5 text-brand-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
                </svg>Идеален за насипни товари</li>
            </ul>
            <a href="<?php echo home_url('/kontakti/'); ?>"
              class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Заяви
              доставка →</a>
          </div>
        </div>

        <!-- Палетна количка -->
        <div class="flex flex-col lg:flex-row gap-10 items-center">
          <div class="lg:w-1/2">
            <div class="rounded-2xl overflow-hidden shadow-xl">
              <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3076.jpg"
                alt="Палетна количка за подреждане" class="w-full h-72 lg:h-96 object-cover" loading="lazy" />
            </div>
          </div>
          <div class="lg:w-1/2">
            <h3 class="text-3xl font-extrabold text-brand-dark mb-4">Палетна количка</h3>
            <p class="text-gray-500 text-lg leading-relaxed mb-6">При заявка осигуряваме палетна количка.</p>

            <a href="<?php echo home_url('/kontakti/'); ?>"
              class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Заяви
              доставка →</a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- КАК РАБОТИ ПРОЦЕСЪТ -->
  <section class="py-24 bg-[#2c3036] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-extrabold">Как протича доставката?</h2>
        <p class="text-gray-400 text-lg mt-3">Четири прости стъпки от поръчка до доставка.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <div class="text-center">
          <div
            class="w-16 h-16 bg-brand-orange rounded-2xl flex items-center justify-center text-3xl font-extrabold text-white mx-auto mb-5">
            1</div>
          <h3 class="font-bold text-xl mb-2">Обаждане</h3>
          <p class="text-gray-400 text-base">Обадете се на нашия телефон или ни пишете за запитване и ще ви изготвим
            оферта.</p>
        </div>

        <div class="text-center">
          <div
            class="w-16 h-16 bg-brand-orange rounded-2xl flex items-center justify-center text-3xl font-extrabold text-white mx-auto mb-5">
            2</div>
          <h3 class="font-bold text-xl mb-2">Избор на продукт</h3>
          <p class="text-gray-400 text-base">Помагаме ви да изберете правилния тип гориво и количество за вашите нужди.
          </p>
        </div>

        <div class="text-center">
          <div
            class="w-16 h-16 bg-brand-orange rounded-2xl flex items-center justify-center text-3xl font-extrabold text-white mx-auto mb-5">
            3</div>
          <h3 class="font-bold text-xl mb-2">Подготовка</h3>
          <p class="text-gray-400 text-base">Натоварваме избраната стока и организираме подходящия транспорт.</p>
        </div>

        <div class="text-center">
          <div
            class="w-16 h-16 bg-brand-orange rounded-2xl flex items-center justify-center text-3xl font-extrabold text-white mx-auto mb-5">
            4</div>
          <h3 class="font-bold text-xl mb-2">Доставка</h3>
          <p class="text-gray-400 text-base">Доставяме бързо до вашия адрес с избрания транспорт и разтоварваме на
            място.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- ИНФОРМАЦИЯ ЗА ЗОНА -->
  <section class="py-24 bg-brand-ltGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="flex flex-col lg:flex-row gap-12 items-center">
        <div class="lg:w-1/2">
          <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mb-6">Зона на доставка</h2>
          <p class="text-gray-500 text-lg leading-relaxed mb-6">Основно доставяме в София и прилежащите райони –
            Панчарево, Бистрица, Драгалевци, Бояна, Симеоново, Горубляне и околностите. При заявка доставяме и в цялата
            страна.</p>

          <div class="space-y-4 mb-8">
            <div class="flex items-center gap-4 bg-white rounded-xl p-4 border border-gray-100">
              <span class="text-2xl">📍</span>
              <div>
                <div class="font-bold text-brand-dark">Склад</div>
                <div class="text-gray-500 text-sm">район Панчерево, ул. Околовръстен път No 338</div>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white rounded-xl p-4 border border-gray-100">
              <span class="text-2xl">⏰</span>
              <div>
                <div class="font-bold text-brand-dark">Работно време</div>
                <div class="text-gray-500 text-sm">Понеделник – Събота: 08:00 – 18:00</div>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white rounded-xl p-4 border border-gray-100">
              <span class="text-2xl">🚛</span>
              <div>
                <div class="font-bold text-brand-dark">Доставка в рамките на деня</div>
                <div class="text-gray-500 text-sm">При наличност и за район София – доставка в същия ден</div>
              </div>
            </div>
          </div>

          <a href="<?php echo home_url('/kontakti/'); ?>"
            class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orangeHov text-white font-bold px-8 py-4 rounded-xl text-lg transition-colors">Заяви
            доставка →</a>
        </div>
        <div class="lg:w-1/2">
          <!-- Google Maps placeholder -->
          <div
            class="rounded-2xl overflow-hidden border border-gray-200 bg-white h-80 lg:h-[450px] flex items-center justify-center text-gray-400 text-center p-8">
            <div>
              <span class="text-5xl block mb-4">📍</span>
              <p class="text-lg font-semibold text-brand-dark mb-2">Google Maps</p>
              <p class="text-sm">Тук ще бъде вграден Google Maps iframe<br />при финализиране на WordPress темата</p>
              <p class="text-sm mt-2 text-brand-orange font-medium">район Панчерево, ул. Околовръстен път No 338</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- FOOTER -->
<?php get_footer(); ?>
