<!DOCTYPE html>
<html lang="bg">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Ресурс 11 – Доставка на пелети, екобрикети и въглища в София и страната. Собствен транспорт с кран." />
  <title>Ресурс 11 – Твърдо гориво | Пелети, Екобрикети, Въглища</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Config: Custom brand colors -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              orange: '#E8620A',
              orangeHov: '#C9520A',
              dark: '#1C1C1C',
              gray: '#2D2D2D',
              brown: '#6B3E26',
              brownLt: '#A0522D',
              cream: '#FDF6EE',
              ltGray: '#F4F0EB',
            }
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
            nav: ['Poppins', 'Inter', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Google Font: Inter + Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap"
    rel="stylesheet" />

  <style>
    /* Smooth scroll */
    html {
      scroll-behavior: smooth;
    }

    /* Hero gradient overlay */
    .hero-overlay {
      background: linear-gradient(135deg, rgba(28, 28, 28, 0.82) 0%, rgba(107, 62, 38, 0.55) 100%);
    }

    /* Dropdown appear animation */
    .dropdown-menu {
      transition: opacity 0.18s ease, transform 0.18s ease;
    }

    /* Active nav link */
    .nav-link:hover {
      color: #E8620A;
    }

    /* Card hover lift */
    .product-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.14);
    }

    .product-card {
      transition: transform 0.22s ease, box-shadow 0.22s ease;
    }

    /* Mobile menu */
    #mobile-menu {
      display: none;
    }

    #mobile-menu.open {
      display: block;
    }

    /* Sticky header shadow on scroll (JS-driven class) */
    .header-scrolled {
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    /* Scroll reveal */
    @keyframes revealUp {
      from {
        opacity: 0;
        transform: translateY(32px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .reveal {
      opacity: 0;
    }

    .reveal.visible {
      animation: revealUp 0.7s cubic-bezier(0.5, 0, 0, 1) forwards;
    }

    /* Hero entrance */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero-fade {
      animation: fadeInUp 0.9s cubic-bezier(0.5, 0, 0, 1) forwards;
    }

    .hero-fade-d1 {
      animation: fadeInUp 0.9s cubic-bezier(0.5, 0, 0, 1) 0.15s forwards;
      opacity: 0;
    }

    .hero-fade-d2 {
      animation: fadeInUp 0.9s cubic-bezier(0.5, 0, 0, 1) 0.3s forwards;
      opacity: 0;
    }

    .hero-fade-d3 {
      animation: fadeInUp 0.9s cubic-bezier(0.5, 0, 0, 1) 0.5s forwards;
      opacity: 0;
    }

    /* Enhanced card spring */
    .product-card {
      transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.35s ease;
    }

    .product-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 40px rgba(0, 0, 0, 0.15);
    }

    /* CTA glow on hover */
    .cta-glow {
      transition: box-shadow 0.3s ease, transform 0.2s ease;
    }

    .cta-glow:hover {
      box-shadow: 0 0 30px rgba(232, 98, 10, 0.35);
      transform: translateY(-2px);
    }
  </style>
<?php wp_head(); ?>
</head>

<body class="bg-brand-cream text-brand-dark font-sans">

  <!-- ============================================================
     HEADER / НАВИГАЦИЯ
     WordPress: header.php + nav-menus.php
     ============================================================ -->
  <header id="site-header"
    class="fixed top-0 left-0 w-full z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 transition-shadow duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16 md:h-20">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-3 flex-shrink-0">
          <img src="<?php echo get_template_directory_uri(); ?>/images/products/Resurs11-logo.png" alt="Ресурс 11 лого" class="h-14 md:h-16 w-auto"
            style="mix-blend-mode:multiply" />
        </a>
        <nav class="hidden md:flex items-center gap-2 font-nav">
          <a href="<?php echo home_url(); ?>"
            class="nav-link px-4 py-2 text-brand-orange font-semibold text-base transition-colors">Начало</a>
          <div class="relative group">
          <a href="<?php echo home_url('/produkti/'); ?>"
              class="nav-link flex items-center gap-1 px-4 py-2 text-gray-600 hover:text-brand-orange font-semibold text-base transition-colors">Продукти
              <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg></a>
            <div
              class="dropdown-menu absolute top-full left-0 mt-1 w-52 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible pointer-events-none group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto translate-y-2 group-hover:translate-y-0 z-50">
              <div class="py-2 px-1">
                <a href="<?php echo home_url('/katalog/peleti/'); ?>"
                  class="flex items-center gap-2 px-4 py-2.5 text-brand-dark hover:bg-brand-ltGray hover:text-brand-orange rounded-lg text-sm font-medium transition-colors">🌲
                  Пелети</a>
                <a href="<?php echo home_url('/katalog/ekobriketi/'); ?>"
                  class="flex items-center gap-2 px-4 py-2.5 text-brand-dark hover:bg-brand-ltGray hover:text-brand-orange rounded-lg text-sm font-medium transition-colors"><svg
                    class="w-4 h-4 inline-block -mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg> Екобрикети</a>
                <a href="<?php echo home_url('/katalog/vaglishta/'); ?>"
                  class="flex items-center gap-2 px-4 py-2.5 text-brand-dark hover:bg-brand-ltGray hover:text-brand-orange rounded-lg text-sm font-medium transition-colors"><svg
                    class="w-4 h-4 inline-block -mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.657 18.657A8 8 0 016.343 7.343S7 9 7.1 10c0-2 1.5-4 4.5-4 1.5 2 1.5 4 0 6-1-1.5-1.5-1.5-2.5 0-1 1.5.5 3.5 2 3.5 1.5 0 2-1 2-1z" />
                  </svg> Въглища</a>
              </div>
            </div>
          </div>
          <a href="<?php echo home_url('/dostavka/'); ?>"
            class="nav-link px-4 py-2 text-gray-600 hover:text-brand-orange font-semibold text-base transition-colors">Доставка</a>
          <a href="<?php echo home_url('/za-nas/'); ?>"
            class="nav-link px-4 py-2 text-gray-600 hover:text-brand-orange font-semibold text-base transition-colors">За
            нас</a>
          <a href="<?php echo home_url('/kontakti/'); ?>"
            class="nav-link px-4 py-2 text-gray-600 hover:text-brand-orange font-semibold text-base transition-colors">Контакти</a>
          <a href="<?php echo home_url('/galeriya/'); ?>"
            class="nav-link px-4 py-2 text-gray-600 hover:text-brand-orange font-semibold text-base transition-colors">📸
            Галерия</a>
        </nav>
        <div class="hidden md:flex items-center gap-3">
          <a href="tel:+359877300310"
            class="text-gray-600 hover:text-brand-orange text-sm font-medium transition-colors">+359 877 300 310</a>
          <a href="<?php echo home_url('/kontakti/'); ?>"
            class="bg-brand-orange hover:bg-brand-orangeHov text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors">Поръчай
            сега</a>
        </div>
        <button id="mobile-toggle" aria-label="Отвори меню" aria-expanded="false"
          class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 rounded-lg hover:bg-gray-100 transition-colors">
          <span class="block w-6 h-0.5 bg-[#2c3036] transition-all duration-300" id="ham1"></span>
          <span class="block w-6 h-0.5 bg-[#2c3036] transition-all duration-300" id="ham2"></span>
          <span class="block w-6 h-0.5 bg-[#2c3036] transition-all duration-300" id="ham3"></span>
        </button>
      </div>
    </div>
    <div id="mobile-menu" class="md:hidden bg-white border-t border-gray-100">
      <nav class="flex flex-col px-4 py-4 gap-1 font-nav">
        <a href="<?php echo home_url(); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()">Начало</a>
        <a href="<?php echo home_url('/katalog/peleti/'); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()">🌲 Пелети</a>
        <a href="<?php echo home_url('/katalog/ekobriketi/'); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()"><svg class="w-4 h-4 inline-block -mt-0.5" fill="none" stroke="currentColor"
            stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg> Екобрикети</a>
        <a href="<?php echo home_url('/katalog/vaglishta/'); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()"><svg class="w-4 h-4 inline-block -mt-0.5" fill="none" stroke="currentColor"
            stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M17.657 18.657A8 8 0 016.343 7.343S7 9 7.1 10c0-2 1.5-4 4.5-4 1.5 2 1.5 4 0 6-1-1.5-1.5-1.5-2.5 0-1 1.5.5 3.5 2 3.5 1.5 0 2-1 2-1z" />
          </svg> Въглища</a>
        <a href="<?php echo home_url('/galeriya/'); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()">📸 Галерия</a>
        <a href="<?php echo home_url('/dostavka/'); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()">Доставка</a>
        <a href="<?php echo home_url('/za-nas/'); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()">За нас</a>
        <a href="<?php echo home_url('/kontakti/'); ?>"
          class="px-4 py-3 text-gray-700 hover:text-brand-orange font-semibold rounded-lg hover:bg-brand-ltGray transition-colors"
          onclick="closeMobileMenu()">Контакти</a>
        <div class="mt-2 pt-2 border-t border-gray-100">
          <a href="tel:+359877300310" class="block px-4 py-3 text-brand-orange font-semibold">📞 +359 877 300 310</a>
          <a href="tel:+359896300310" class="block px-4 py-3 text-brand-orange font-semibold">📞 +359 896 300 310</a>
        </div>
      </nav>
    </div>
  </header>