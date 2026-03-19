# ЗАДАЧА: Добавяне на умна, двуцветна цена в продуктовите архиви (archive-produkt.php и taxonomy-produkt_kategoria.php)

Хей, искам да пренесем логиката за "умна цена" ( EUR / BGN ) от продуктовата страница в продуктовите карти на списъците. Целта е картите в `archive-produkt.php` (Всички продукти) и `taxonomy-produkt_kategoria.php` (Категории като Пелети) да показват цената точно както си я стилизирахме в `single-produkt.php`.

**Изисквания:**

1. Намери в **двата файла** (`archive-produkt.php` и `taxonomy-produkt_kategoria.php`) къде вътре в решетката (loop-а) се визуализира цената на тон (`cena_na_ton`).

2. Моля те, преработи HTML и PHP кода за цената, за да приложиш следната логика на разделяне и стилизиране. Стилизирането трябва да използва Tailwind класовете:

```php
<?php
$cena_na_ton = get_field('cena_na_ton');

if ($cena_na_ton): 
    // HTML контейнер за цената
    echo '<div class="mt-2 flex items-baseline flex-wrap gap-1">';
    
    // Ако в полето има наклонена черта '/' (напр. "366.00 EUR / 715.83 BGN")
    if (strpos($cena_na_ton, '/') !== false) {
        $parts = explode('/', $cena_na_ton);
        $main_price = trim($parts[0]); // Първата част (EUR)
        $bg_price = trim($parts[1]);   // Втората част (BGN)
        
        // Визуализация: Оранжева и голяма (EUR) / Сива и малка (BGN)
        echo '<span class="text-xl font-extrabold text-[#e85c0d]">' . esc_html($main_price) . '</span>';
        echo '<span class="text-xs font-bold text-gray-400 ml-1">/ ' . esc_html($bg_price) . '</span>';
        
    } else {
        // Ако няма наклонена черта, покажи цялата цена оранжева
        echo '<span class="text-xl font-extrabold text-[#e85c0d]">' . esc_html($cena_na_ton) . '</span>';
    }
    
    echo '</div>'; // Затваряме контейнера
endif;
?>