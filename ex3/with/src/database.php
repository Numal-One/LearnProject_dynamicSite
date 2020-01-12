<?php

echo '<br> incl database';

$database = array(
  'pages' => array(
    array(
      'url_key' => '/index.php',
      'tpl' => 'main.php',
      'title' => 'Главная страница',
      'text' => 'some text'
    ),
    array(
      'url_key' => '/contacts.php',
      'tpl' => 'contacts.php',
      'title' => 'Контакты',
      'text' => 'some text'
    ),
    array(
      'url_key' => '/catalog.php',
      'tpl' => 'catalog.php',
      'title' => 'Каталог',
      'text' => 'some text'
    ),
    array(
      'url_key' => '/bytovka.php',
      'tpl' => 'bytovka.php',
      'title' => 'Бытовка',
      'text' => 'some text'
    ),
    array(
      'url_key' => '/price.php',
      'tpl' => 'price.php',
      'title' => 'Цены',
      'text' => 'some text'
    ),
    array(
      'url_key' => '/delivery.php',
      'tpl' => 'delivery.php',
      'title' => 'Доставка',
      'text' => 'some text'
    ),
    array(
      'url_key' => '/photogallery.php',
      'tpl' => 'photogallery.php',
      'title' => 'Галерея',
      'text' => 'some text'
    ),
  ),

  'bytovkaPreviewData' => array(
    1 => array(
      'sliderImgs' => array(
        1 => array(
          'imgName' => 'preview1.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'preview2.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        3 => array(
          'imgName' => 'preview3.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        4 => array(
          'imgName' => 'preview4.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        5 => array(
          'imgName' => 'preview5.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        6 => array(
          'imgName' => 'preview6.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
      ),
      'href' => '#',
      'heading' => 'Бытовка склад',
      'gabarits' => '3000 x 6000',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
      'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
      'buyLocation' => 'Город-Н',
      'price' => array(
        'value' => 8000,
        'valuta' => 'руб.'
      ),
      'additionalEquipped' => array(
        1 => array(
          'imgName' => 'add-ic1.svg',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'add-ic2.svg',
          'title' => 'title2',
          'description' => 'alt2'
        ),
        3 => array(
          'imgName' => 'add-ic3.svg',
          'title' => 'title3',
          'description' => 'alt3'
        ),
        4 => array(
          'imgName' => 'add-ic4.png',
          'title' => 'title4',
          'description' => 'alt4'
        ),
        5 => array(
          'imgName' => 'add-ic5.svg',
          'title' => 'title5',
          'description' => 'alt5'
        ),
      )
    ),
    2 => array(
      'sliderImgs' => array(
        1 => array(
          'imgName' => 'preview1.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'preview2.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        3 => array(
          'imgName' => 'preview3.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        4 => array(
          'imgName' => 'preview4.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        5 => array(
          'imgName' => 'preview5.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        6 => array(
          'imgName' => 'preview6.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
      ),
      'href' => '#',
      'heading' => 'Бытовка склад',
      'gabarits' => '2400 x 6000',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
      'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
      'buyLocation' => 'Город-Н',
      'price' => array(
        'value' => 9000,
        'valuta' => 'руб.'
      ),
      'additionalEquipped' => array(
        1 => array(
          'imgName' => 'add-ic1.svg',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'add-ic2.svg',
          'title' => 'title2',
          'description' => 'alt2'
        ),
        3 => array(
          'imgName' => 'add-ic3.svg',
          'title' => 'title3',
          'description' => 'alt3'
        ),
        4 => array(
          'imgName' => 'add-ic4.png',
          'title' => 'title4',
          'description' => 'alt4'
        ),
        5 => array(
          'imgName' => 'add-ic5.svg',
          'title' => 'title5',
          'description' => 'alt5'
        ),
      )
    ),
    3 => array(
      'sliderImgs' => array(
        1 => array(
          'imgName' => 'preview1.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'preview2.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        3 => array(
          'imgName' => 'preview3.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        4 => array(
          'imgName' => 'preview4.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        5 => array(
          'imgName' => 'preview5.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        6 => array(
          'imgName' => 'preview6.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
      ),
      'href' => '#',
      'heading' => 'Бытовка склад',
      'gabarits' => '2000 x 5000',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
      'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
      'buyLocation' => 'Город-Н',
      'price' => array(
        'value' => 7000,
        'valuta' => 'руб.'
      ),
      'additionalEquipped' => array(
        1 => array(
          'imgName' => 'add-ic1.svg',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'add-ic2.svg',
          'title' => 'title2',
          'description' => 'alt2'
        ),
        3 => array(
          'imgName' => 'add-ic3.svg',
          'title' => 'title3',
          'description' => 'alt3'
        ),
        4 => array(
          'imgName' => 'add-ic4.png',
          'title' => 'title4',
          'description' => 'alt4'
        ),
        5 => array(
          'imgName' => 'add-ic5.svg',
          'title' => 'title5',
          'description' => 'alt5'
        ),
      )
    ),
    4 => array(
      'sliderImgs' => array(
        1 => array(
          'imgName' => 'preview1.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'preview2.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        3 => array(
          'imgName' => 'preview3.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        4 => array(
          'imgName' => 'preview4.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        5 => array(
          'imgName' => 'preview5.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        6 => array(
          'imgName' => 'preview6.png',
          'title' => 'title1',
          'description' => 'alt1'
        ),
      ),
      'href' => '#',
      'heading' => 'Бытовка склад',
      'gabarits' => '2400 x 5000',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
      'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
      'buyLocation' => 'Город-Н',
      'price' => array(
        'value' => 8500,
        'valuta' => 'руб.'
      ),
      'additionalEquipped' => array(
        1 => array(
          'imgName' => 'add-ic1.svg',
          'title' => 'title1',
          'description' => 'alt1'
        ),
        2 => array(
          'imgName' => 'add-ic2.svg',
          'title' => 'title2',
          'description' => 'alt2'
        ),
        3 => array(
          'imgName' => 'add-ic3.svg',
          'title' => 'title3',
          'description' => 'alt3'
        ),
        4 => array(
          'imgName' => 'add-ic4.png',
          'title' => 'title4',
          'description' => 'alt4'
        ),
        5 => array(
          'imgName' => 'add-ic5.svg',
          'title' => 'title5',
          'description' => 'alt5'
        ),
      )
    )
     
  ),

  'bytovkaCardData' => array(
    'sliderImgs' => array(
      1 => array(
        'imgName' => 'preview1.png',
        'title' => 'title1',
        'description' => 'alt1'
      ),
      2 => array(
        'imgName' => 'preview2.png',
        'title' => 'title1',
        'description' => 'alt1'
      ),
      3 => array(
        'imgName' => 'preview3.png',
        'title' => 'title1',
        'description' => 'alt1'
      ),
      4 => array(
        'imgName' => 'preview4.png',
        'title' => 'title1',
        'description' => 'alt1'
      ),
      5 => array(
        'imgName' => 'preview5.png',
        'title' => 'title1',
        'description' => 'alt1'
      ),
      6 => array(
        'imgName' => 'preview6.png',
        'title' => 'title1',
        'description' => 'alt1'
      ),
    ),
    'href' => '#',
    'heading' => 'Бытовка склад',
    'gabarits' => '3000 x 6000',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
    'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
    'buyLocation' => 'Город-Н',
    'price' => array(
      'value' => 8000,
      'valuta' => 'руб.'
    ),
    'additionalEquipped' => array(
      1 => array(
        'imgName' => 'add-ic1.svg',
        'title' => 'title1',
        'description' => 'alt1'
      ),
      2 => array(
        'imgName' => 'add-ic2.svg',
        'title' => 'title2',
        'description' => 'alt2'
      ),
      3 => array(
        'imgName' => 'add-ic3.svg',
        'title' => 'title3',
        'description' => 'alt3'
      ),
      4 => array(
        'imgName' => 'add-ic4.png',
        'title' => 'title4',
        'description' => 'alt4'
      ),
      5 => array(
        'imgName' => 'add-ic5.svg',
        'title' => 'title5',
        'description' => 'alt5'
      ),
    )
  ),

  'navMenuData' => array(
    1 => array(
      'name' => 'Аренда бытовок',
      'fileName' => 'catalog.php',
      'submenu' => array(
        1 => array(
          'name' => 'Аренда бытовок в Видном',
          'fileName' => 'catalog.php'
        ),
        2 => array(
          'name' => 'Аренда бытовок в Домодедово',
          'fileName' => 'catalog.php'
        ),
        3 => array(
          'name' => 'Аренда бытовок в Видном',
          'fileName' => 'catalog.php'
        ),
        4 => array(
          'name' => 'Аренда бытовок в Домодедово',
          'fileName' => 'catalog.php'
        ),
        5 => array(
          'name' => 'Аренда бытовок в Видном',
          'fileName' => 'catalog.php'
        ),
        6 => array(
          'name' => 'Аренда бытовок в Домодедово',
          'fileName' => 'catalog.php'
        ),
        7 => array(
          'name' => 'Аренда бытовок в Видном',
          'fileName' => 'catalog.php'
        ),
        8 => array(
          'name' => 'Аренда бытовок в Домодедово',
          'fileName' => 'catalog.php'
        ),
        
      )
    ),
    2 => array(
      'name' => 'Цены',
      'fileName' => 'price.php',
      'submenu' => array()
    ),
    3 => array(
      'name' => 'Доставка',
      'fileName' => 'delivery.php',
      'submenu' => array()
    ),
    4 => array(
      'name' => 'Фотогалерея',
      'fileName' => 'photogallery.php',
      'submenu' => array()
    ),
    5 => array(
      'name' => 'Контакты',
      'fileName' => 'contacts.php',
      'submenu' => array()
    ),
  ),

  'mapPointsData' => array(
    1 => array(
        'location' => 'Видном',
        'coords' => '55.5572, 37.7086',
        'locationUrl' => '/arenda-bytovok-v-vidnom/'
    ),
    2 => array(
        'location' => 'Бронницах',
        'coords' => '55.4255, 38.2641',
        'locationUrl' => '/arenda-bytovok-v-bronnicah/'
    ),
    3 => array(
        'location' => 'Дмитрове',
        'coords' => '56.3439, 37.5203',
        'locationUrl' => '/arenda-bytovok-v-dmitrove/'
    ),
    4 => array(
        'location' => 'Чехове',
        'coords' => '55.1499, 37.4670',
        'locationUrl' => '/arenda-bytovok-v-chekhove/'
    ),
    5 => array(
        'location' => 'Сергиев Посаде',
        'coords' => '56.3153, 38.1360',
        'locationUrl' => '/arenda-bytovok-v-sergiev-posade/'
    ),
    6 => array(
        'location' => 'Клину',
        'coords' => '56.3317, 36.7287',
        'locationUrl' => '/arenda-bytovok-v-klinu/'
    ),
    7 => array(
        'location' => 'Истре',
        'coords' => '55.9143, 36.8603',
        'locationUrl' => '/arenda-bytovok-v-istre/'
    ),
    8 => array(
        'location' => 'Подольске',
        'coords' => '55.4312, 37.5447',
        'locationUrl' => '/arenda-bytovok-v-podolske/'
    ),
    9 => array(
        'location' => 'Видном',
        'coords' => '55.4312, 37.5447',
        'locationUrl' => '/arenda-bytovok-v-vidnom/'
    ),
    10 => array(
        'location' => 'Волоколамске',
        'coords' => '55.4312, 37.5447',
        'locationUrl' => '/arenda-bytovok-v-volokolamske/'
    ),
    11 => array(
        'location' => 'Пушкино',
        'coords' => '56.0357, 35.9585',
        'locationUrl' => '/arenda-bytovok-v-pushkino/'
    ),
    12 => array(
        'location' => 'Зеленограде',
        'coords' => '56.0104, 37.8472',
        'locationUrl' => '/arenda-bytovok-v-zelenograde/'
    ),
    13 => array(
        'location' => 'Балашихе',
        'coords' => '55.9919, 37.2144',
        'locationUrl' => '/arenda-bytovok-v-balashihe/'
    ),
    14 => array(
        'location' => 'Щелково',
        'coords' => '55.7963, 37.9382',
        'locationUrl' => '/arenda-bytovok-v-shchelkovo/'
    ),
    15 => array(
        'location' => 'Ногинске',
        'coords' => '55.9202, 37.9915',
        'locationUrl' => '/arenda-bytovok-v-noginske/'
    ),
    16 => array(
        'location' => 'Раменском',
        'coords' => '55.8545, 38.4418',
        'locationUrl' => '/arenda-bytovok-v-ramenskom/'
    ),
  ),

  '$mainPhotogalleryData' => array(
    1 => array(
      'imgName' => 'gallery.jpg',
      'dataCaption' => 'Фото 1'
    ),
    2 => array(
      'imgName' => 'gallery.jpg',
      'dataCaption' => 'Фото 1'
    ),
    3 => array(
      'imgName' => 'gallery.jpg',
      'dataCaption' => 'Фото 1'
    ),
    4 => array(
      'imgName' => 'gallery.jpg',
      'dataCaption' => 'Фото 1'
    ),
    5 => array(
      'imgName' => 'gallery.jpg',
      'dataCaption' => 'Фото 1'
    ),
    6 => array(
      'imgName' => 'gallery.jpg',
      'dataCaption' => 'Фото 1'
    ),
    7 => array(
      'imgName' => 'gallery.jpg',
      'dataCaption' => 'Фото 1'
    ),
  ),

  'mainSliderData' => array(
    1 => array(
    'imgName' => 'bytovka1.png',
    'heading' => 'Строительные бытовки недорого!',
    'description' => ''
    ),
    2 => array(
    'imgName' => 'bytovka2.png',
    'heading' => 'Строительные недорого!',
    'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
    ),
    3 => array(
    'imgName' => 'bytovka3.png',
    'heading' => 'Строительные бытовки!',
    'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
    ),
    4 => array(
    'imgName' => 'bytovka4.png',
    'heading' => 'Строительные бытовки дорого!',
    'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
    ),
    5 => array(
    'imgName' => 'bytovka5.png',
    'heading' => 'Бытовки недорого!',
    'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
    ),
    6 => array(
    'imgName' => 'bytovka6.png',
    'heading' => 'Строительные не бытовки недорого!',
    'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
    )
  ),

  'questionsData' => array(
    1 => array(
    'question' => 'Сколько времени занимает доставка?',
    'answer' => 'Бытовку Вы получаете в день составления договора и оплаты заказа'
    ),
    2 => array(
    'question' => 'Возможно ли доукомплектовывать бытовку?',
    'answer' => 'Да, мы предоставляем разнообразный выбор комплектации на Ваш выбор. Вся возможная комплектация доступна на сайте или Вы можете получить консультацию у нашего менеджера.'
    ),
    3 => array(
    'question' => 'Возможна ли аренда бу бытовки без залога?',
    'answer' => 'Да, вариант аренды без залога возможен при условии аванса за 3 месяца.'
    ),
    4 => array(
    'question' => 'Как мне вернуть бытовку по истечении срока аренды?',
    'answer' => 'При приблежении окончания срока аренды, наши менеджеры сами свяжутся с Вами, для обсуждения процесса возврата удобным для Вас способом.'
    ),
    5 => array(
    'question' => 'Есть ли у Вас бытовки для проживания зимой?',
    'answer' => 'Да, наша компания предлагает бытовки, которые утеплены 100мм слоем утеплителя, на полу настелен линолеум, в них будет комфортно до -15 градусов. Так же возможна комплектация дополнительным электрооборудованием.'
    ),
    6 => array(
    'question' => 'Какие дополнительные расходы могут возникнуть при аренде вагончика?',
    'answer' => 'Кроме оплаты аренды Вам необходимо оплатить доставку, если у вас нет собственного транспорта.'
    ),
    7 => array(
    'question' => 'Нужен ли фундамент для установки или можно ставить на грунт?',
    'answer' => 'Мы рекомендуем устанавливать бытовку на фундаменте или на бетонных блоках. Однако, можно установить на ровную заасфальтированную площадку.'
    ),
    8 => array(
    'question' => 'Можно ли выкупить арендованную бытовку?',
    'answer' => 'Вопрос покупки обговаривается индивидуально.'
    )

  ),

  'ourAdvantagesData' => array(
    1=> array (
      'img' => 'ad1.png',
      'text' => 'Наша фирма занимается арендой бытовок с 2008 года, поэтому мы знаем что нужно нашему клиенту!'
    ),
    2=> array (
      'img' => 'ad2.png',
      'text' => 'Оплату за аренду и доставку бытовки можно производить по безналичному и наличному расчету.'
    ),
    3=> array (
      'img' => 'ad3.png',
      'text' => 'Для постоянных клиентов у нас действует гибкая система скидок как по аренде бытовки так и по доставке и вывоза её на склад.'
    ),
  ),

  'ourArticles' => array(
    1 => array(
      'href' => '/pokupka-ili-arenda-byitovok/',
      'title' => 'Покупка или аренда бытовок'
    ),
    2 => array(
      'href' => '/xarakteristiki-byitovok/',
      'title' => 'Характеристики бытовок'
    ),
    3 => array(
      'href' => '/naznachenie-byitovok/',
      'title' => 'Назначение бытовок'
    ),
    4 => array(
      'href' => '/ispolzovanie-krana-manipulyatora/',
      'title' => 'Использование крана-манипулятора'
    ),
    5 => array(
      'href' => '/kupit-byitovku-bu/',
      'title' => 'Кубить бытовку бу'
    ),
    6 => array(
      'href' => '/byitovka-sklad/',
      'title' => 'Бытовка - склад'
    ),
    7 => array(
      'href' => '/bytovka-prorabskaya-ofis/',
      'title' => 'Бытовка прорабская(офис)'
    ),
    8 => array(
      'href' => '/byitovka-zhilaya/',
      'title' => 'Бытовка жилая'
    ),
    9 => array(
      'href' => '/byitovka-stolovaya/',
      'title' => 'Бытовка столовая'
    ),
    10 => array(
      'href' => '/byitovka-razdevalka/',
      'title' => 'Бытовка раздевалка'
    ),
    11 => array(
      'href' => '/bytovka-post-oxrany/',
      'title' => 'Бытовка пост охраны'
    ),
  ),

  'photogalleryData' => array(
    1 =>array(
      'caption' => 'Бытовка-склад',
      'photoName' => 'photo1.jpg'
    ),
    2 =>array(
      'caption' => 'Фото 2',
      'photoName' => 'photo2.jpg'
    ),
    3 =>array(
      'caption' => 'Фото 3',
      'photoName' => 'photo3.jpg'
    ),
    4 =>array(
      'caption' => 'Фото 4',
      'photoName' => 'photo4.jpg'
    ),
    5 =>array(
      'caption' => 'Фото 5',
      'photoName' => 'photo5.jpg'
    ),
    6 =>array(
      'caption' => 'Фото 6',
      'photoName' => 'photo6.jpg'
    ),
    
  ),

  'priceData' => array(
    1 => array(
      "priceTitle" => "Блок контейнер 2,5 х 6 м",
      "priceImage" => "price.jpg",
      "priceTextOuter" => array('Наружная обшивка:','металлический каркас оцинкованный профнастил С-8'),
      "priceTextInner" => array('Внутренняя отделка:','ДВП утепление 50 мм электрика'),
      "priceSumm" => "7000Р/мес"
    ),
    2 => array(
      "priceTitle" => "Блок контейнер 2,5 х 6 м",
      "priceImage" => "price.jpg",
      "priceTextOuter" => array('Наружная обшивка:','металлический каркас оцинкованный профнастил С-8'),
      "priceTextInner" => array('Внутренняя отделка:','пластик, деревянная вагонка утепление 50 мм электрика'),
      "priceSumm" => "7000Р/мес"
    ),
    3 => array(
      "priceTitle" => "Блок контейнер 2400 x 6000 см",
      "priceImage" => "price.jpg",
      "priceTextOuter" => array('Наружная обшивка:','Металлический каркас Наружная обшивка оцинкованный профнастил'),
      "priceTextInner" => array('Внутренняя отделка:','Стенды ДВП, Электропроводка Освещение Выключатели Металлическая дверь На выходе автомат 16А Стальные решетки на окнах'),
      "priceSumm" => "6000Р/мес"
    ),
    4 => array(
      "priceTitle" => "Блок контейнер 2400 x 6000см",
      "priceImage" => "price.jpg",
      "priceTextOuter" => array('Наружная обшивка:','Металлический каркас Наружная обшивка оцинкованный профнастил Стенды ДВП Электропроводка Розетки'),
      "priceTextInner" => array('Внутренняя отделка:','Освещение Выключатели На выходе автомат 16А'),
      "priceSumm" => "7000Р/мес"
    ),
    5 => array(
      "priceTitle" => "Блок контейнер 2,5 х 6 м",
      "priceImage" => "price.jpg",
      "priceTextOuter" => array('Наружная обшивка:','металлический каркас оцинкованный профнастил С-8'),
      "priceTextInner" => array('Внутренняя отделка:','ДВП утепление 50 мм электрика'),
      "priceSumm" => "7000Р/мес"
    ),
  ),

  'bytovkaTechCharacteristics' => array(
    1 => array(
      "title" => "Стандартная бытовка",
      "charsTableHead" => "Характеристики стандартной строительной бытовки",
      "imageName" => "standartnaya-bytovka-texnicheskie-xarakteristiki.jpg",
      "characteristics" => array(
        "entry" => array("Тип" , "Вход с торца"),
        "profile" => array("Габариты" , "2,5 х 6 х 2,5 м"),
        "frame" => array("Каркас" , "Металлический"),
        "window" => array("Окно" , "Рама деревянная (двойное остекление)"),
        "exterior" => array("Внешняя отделка" , "Оцинкованный профлист"),
        "interior" => array("Внутренняя отделка" , "Деревянная, ПХВ вагонка, оргалит"),
        "flooring" => array("Напольное покрытие" , "Линолеум"),
        "outer door" => array("Дверь наружная" , "Деревянная (с замком, обитая жестью)"),
        "inner door" => array("Дверь межкомнатная" , "ДВП"),
        "insulation" => array("Утепление" , "Минеральная вата 50 мм."),
        "electrical wiring" => array("Электропроводка" , "Стандарт 5 КВт (2 лампы, 1 светильник, 3 розетки двойные, 2 выключателя)"),
        "window grill" => array("Решетка на окне" , "Есть")
      )
    ),
    2 => array(
      "title" => "Не стандартная бытовка",
      "charsTableHead" => "Характеристики не стандартной строительной бытовки",
      "imageName" => "standartnaya-bytovka-texnicheskie-xarakteristiki2.jpg",
      "characteristics" => array(
        "entry" => array("Тип" , "Неведомая 4х мерная хрень"),
        "profile" => array("Габариты" , "2 х 2 х 2 х 2 м"),
        "frame" => array("Каркас" , "Чугуниевый"),
        "window" => array("Окно" , "Отсутствует"),
        "exterior" => array("Внешняя отделка" , "Инкрустация беличьими черепами"),
        "interior" => array("Внутренняя отделка" , "Кожа с жопы дракона"),
        "flooring" => array("Напольное покрытие" , "Вязаный коврик"),
        "outer door" => array("Дверь наружная" , "Гермодверь"),
        "inner door" => array("Дверь межкомнатная" , "Занавеска"),
        "insulation" => array("Утепление" , "Чугунные батареи"),
        "electrical wiring" => array("Электропроводка" , "Отсутствует"),
        "window grill" => array("Решетка на окне" , "Нет")
      )
    ),
  )
);


// $bytovkaPreviewData = array(
//   1 => array(
//     'sliderImgs' => array(
//       1 => array(
//         'imgName' => 'preview1.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'preview2.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       3 => array(
//         'imgName' => 'preview3.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       4 => array(
//         'imgName' => 'preview4.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       5 => array(
//         'imgName' => 'preview5.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       6 => array(
//         'imgName' => 'preview6.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//     ),
//     'href' => '#',
//     'heading' => 'Бытовка склад',
//     'gabarits' => '3000 x 6000',
//     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
//     'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
//     'buyLocation' => 'Город-Н',
//     'price' => array(
//       'value' => 8000,
//       'valuta' => 'руб.'
//     ),
//     'additionalEquipped' => array(
//       1 => array(
//         'imgName' => 'add-ic1.svg',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'add-ic2.svg',
//         'title' => 'title2',
//         'description' => 'alt2'
//       ),
//       3 => array(
//         'imgName' => 'add-ic3.svg',
//         'title' => 'title3',
//         'description' => 'alt3'
//       ),
//       4 => array(
//         'imgName' => 'add-ic4.png',
//         'title' => 'title4',
//         'description' => 'alt4'
//       ),
//       5 => array(
//         'imgName' => 'add-ic5.svg',
//         'title' => 'title5',
//         'description' => 'alt5'
//       ),
//     )
//   ),
//   2 => array(
//     'sliderImgs' => array(
//       1 => array(
//         'imgName' => 'preview1.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'preview2.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       3 => array(
//         'imgName' => 'preview3.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       4 => array(
//         'imgName' => 'preview4.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       5 => array(
//         'imgName' => 'preview5.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       6 => array(
//         'imgName' => 'preview6.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//     ),
//     'href' => '#',
//     'heading' => 'Бытовка склад',
//     'gabarits' => '2400 x 6000',
//     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
//     'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
//     'buyLocation' => 'Город-Н',
//     'price' => array(
//       'value' => 9000,
//       'valuta' => 'руб.'
//     ),
//     'additionalEquipped' => array(
//       1 => array(
//         'imgName' => 'add-ic1.svg',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'add-ic2.svg',
//         'title' => 'title2',
//         'description' => 'alt2'
//       ),
//       3 => array(
//         'imgName' => 'add-ic3.svg',
//         'title' => 'title3',
//         'description' => 'alt3'
//       ),
//       4 => array(
//         'imgName' => 'add-ic4.png',
//         'title' => 'title4',
//         'description' => 'alt4'
//       ),
//       5 => array(
//         'imgName' => 'add-ic5.svg',
//         'title' => 'title5',
//         'description' => 'alt5'
//       ),
//     )
//   ),
//   3 => array(
//     'sliderImgs' => array(
//       1 => array(
//         'imgName' => 'preview1.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'preview2.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       3 => array(
//         'imgName' => 'preview3.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       4 => array(
//         'imgName' => 'preview4.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       5 => array(
//         'imgName' => 'preview5.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       6 => array(
//         'imgName' => 'preview6.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//     ),
//     'href' => '#',
//     'heading' => 'Бытовка склад',
//     'gabarits' => '2000 x 5000',
//     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
//     'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
//     'buyLocation' => 'Город-Н',
//     'price' => array(
//       'value' => 7000,
//       'valuta' => 'руб.'
//     ),
//     'additionalEquipped' => array(
//       1 => array(
//         'imgName' => 'add-ic1.svg',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'add-ic2.svg',
//         'title' => 'title2',
//         'description' => 'alt2'
//       ),
//       3 => array(
//         'imgName' => 'add-ic3.svg',
//         'title' => 'title3',
//         'description' => 'alt3'
//       ),
//       4 => array(
//         'imgName' => 'add-ic4.png',
//         'title' => 'title4',
//         'description' => 'alt4'
//       ),
//       5 => array(
//         'imgName' => 'add-ic5.svg',
//         'title' => 'title5',
//         'description' => 'alt5'
//       ),
//     )
//   ),
//   4 => array(
//     'sliderImgs' => array(
//       1 => array(
//         'imgName' => 'preview1.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'preview2.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       3 => array(
//         'imgName' => 'preview3.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       4 => array(
//         'imgName' => 'preview4.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       5 => array(
//         'imgName' => 'preview5.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       6 => array(
//         'imgName' => 'preview6.png',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//     ),
//     'href' => '#',
//     'heading' => 'Бытовка склад',
//     'gabarits' => '2400 x 5000',
//     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
//     'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
//     'buyLocation' => 'Город-Н',
//     'price' => array(
//       'value' => 8500,
//       'valuta' => 'руб.'
//     ),
//     'additionalEquipped' => array(
//       1 => array(
//         'imgName' => 'add-ic1.svg',
//         'title' => 'title1',
//         'description' => 'alt1'
//       ),
//       2 => array(
//         'imgName' => 'add-ic2.svg',
//         'title' => 'title2',
//         'description' => 'alt2'
//       ),
//       3 => array(
//         'imgName' => 'add-ic3.svg',
//         'title' => 'title3',
//         'description' => 'alt3'
//       ),
//       4 => array(
//         'imgName' => 'add-ic4.png',
//         'title' => 'title4',
//         'description' => 'alt4'
//       ),
//       5 => array(
//         'imgName' => 'add-ic5.svg',
//         'title' => 'title5',
//         'description' => 'alt5'
//       ),
//     )
//   )
   
// );


// $bytovkaCardData = array(
//   'sliderImgs' => array(
//     1 => array(
//       'imgName' => 'preview1.png',
//       'title' => 'title1',
//       'description' => 'alt1'
//     ),
//     2 => array(
//       'imgName' => 'preview2.png',
//       'title' => 'title1',
//       'description' => 'alt1'
//     ),
//     3 => array(
//       'imgName' => 'preview3.png',
//       'title' => 'title1',
//       'description' => 'alt1'
//     ),
//     4 => array(
//       'imgName' => 'preview4.png',
//       'title' => 'title1',
//       'description' => 'alt1'
//     ),
//     5 => array(
//       'imgName' => 'preview5.png',
//       'title' => 'title1',
//       'description' => 'alt1'
//     ),
//     6 => array(
//       'imgName' => 'preview6.png',
//       'title' => 'title1',
//       'description' => 'alt1'
//     ),
//   ),
//   'href' => '#',
//   'heading' => 'Бытовка склад',
//   'gabarits' => '3000 x 6000',
//   'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
//   'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
//   'buyLocation' => 'Город-Н',
//   'price' => array(
//     'value' => 8000,
//     'valuta' => 'руб.'
//   ),
//   'additionalEquipped' => array(
//     1 => array(
//       'imgName' => 'add-ic1.svg',
//       'title' => 'title1',
//       'description' => 'alt1'
//     ),
//     2 => array(
//       'imgName' => 'add-ic2.svg',
//       'title' => 'title2',
//       'description' => 'alt2'
//     ),
//     3 => array(
//       'imgName' => 'add-ic3.svg',
//       'title' => 'title3',
//       'description' => 'alt3'
//     ),
//     4 => array(
//       'imgName' => 'add-ic4.png',
//       'title' => 'title4',
//       'description' => 'alt4'
//     ),
//     5 => array(
//       'imgName' => 'add-ic5.svg',
//       'title' => 'title5',
//       'description' => 'alt5'
//     ),
//   )
// );

// $navMenuData = array(
//   1 => array(
//     'name' => 'Аренда бытовок',
//     'fileName' => 'catalog.php',
//     'submenu' => array(
//       1 => array(
//         'name' => 'Аренда бытовок в Видном',
//         'fileName' => 'catalog.php'
//       ),
//       2 => array(
//         'name' => 'Аренда бытовок в Домодедово',
//         'fileName' => 'catalog.php'
//       ),
//       3 => array(
//         'name' => 'Аренда бытовок в Видном',
//         'fileName' => 'catalog.php'
//       ),
//       4 => array(
//         'name' => 'Аренда бытовок в Домодедово',
//         'fileName' => 'catalog.php'
//       ),
//       5 => array(
//         'name' => 'Аренда бытовок в Видном',
//         'fileName' => 'catalog.php'
//       ),
//       6 => array(
//         'name' => 'Аренда бытовок в Домодедово',
//         'fileName' => 'catalog.php'
//       ),
//       7 => array(
//         'name' => 'Аренда бытовок в Видном',
//         'fileName' => 'catalog.php'
//       ),
//       8 => array(
//         'name' => 'Аренда бытовок в Домодедово',
//         'fileName' => 'catalog.php'
//       ),
      
//     )
//   ),
//   2 => array(
//     'name' => 'Цены',
//     'fileName' => 'price.php',
//     'submenu' => array()
//   ),
//   3 => array(
//     'name' => 'Доставка',
//     'fileName' => 'delivery.php',
//     'submenu' => array()
//   ),
//   4 => array(
//     'name' => 'Фотогалерея',
//     'fileName' => 'photogallery.php',
//     'submenu' => array()
//   ),
//   5 => array(
//     'name' => 'Контакты',
//     'fileName' => 'contacts.php',
//     'submenu' => array()
//   ),
// );

// $mapPointsData = array(
//     1 => array(
//         'location' => 'Видном',
//         'coords' => '55.5572, 37.7086',
//         'locationUrl' => '/arenda-bytovok-v-vidnom/'
//     ),
//     2 => array(
//         'location' => 'Бронницах',
//         'coords' => '55.4255, 38.2641',
//         'locationUrl' => '/arenda-bytovok-v-bronnicah/'
//     ),
//     3 => array(
//         'location' => 'Дмитрове',
//         'coords' => '56.3439, 37.5203',
//         'locationUrl' => '/arenda-bytovok-v-dmitrove/'
//     ),
//     4 => array(
//         'location' => 'Чехове',
//         'coords' => '55.1499, 37.4670',
//         'locationUrl' => '/arenda-bytovok-v-chekhove/'
//     ),
//     5 => array(
//         'location' => 'Сергиев Посаде',
//         'coords' => '56.3153, 38.1360',
//         'locationUrl' => '/arenda-bytovok-v-sergiev-posade/'
//     ),
//     6 => array(
//         'location' => 'Клину',
//         'coords' => '56.3317, 36.7287',
//         'locationUrl' => '/arenda-bytovok-v-klinu/'
//     ),
//     7 => array(
//         'location' => 'Истре',
//         'coords' => '55.9143, 36.8603',
//         'locationUrl' => '/arenda-bytovok-v-istre/'
//     ),
//     8 => array(
//         'location' => 'Подольске',
//         'coords' => '55.4312, 37.5447',
//         'locationUrl' => '/arenda-bytovok-v-podolske/'
//     ),
//     9 => array(
//         'location' => 'Видном',
//         'coords' => '55.4312, 37.5447',
//         'locationUrl' => '/arenda-bytovok-v-vidnom/'
//     ),
//     10 => array(
//         'location' => 'Волоколамске',
//         'coords' => '55.4312, 37.5447',
//         'locationUrl' => '/arenda-bytovok-v-volokolamske/'
//     ),
//     11 => array(
//         'location' => 'Пушкино',
//         'coords' => '56.0357, 35.9585',
//         'locationUrl' => '/arenda-bytovok-v-pushkino/'
//     ),
//     12 => array(
//         'location' => 'Зеленограде',
//         'coords' => '56.0104, 37.8472',
//         'locationUrl' => '/arenda-bytovok-v-zelenograde/'
//     ),
//     13 => array(
//         'location' => 'Балашихе',
//         'coords' => '55.9919, 37.2144',
//         'locationUrl' => '/arenda-bytovok-v-balashihe/'
//     ),
//     14 => array(
//         'location' => 'Щелково',
//         'coords' => '55.7963, 37.9382',
//         'locationUrl' => '/arenda-bytovok-v-shchelkovo/'
//     ),
//     15 => array(
//         'location' => 'Ногинске',
//         'coords' => '55.9202, 37.9915',
//         'locationUrl' => '/arenda-bytovok-v-noginske/'
//     ),
//     16 => array(
//         'location' => 'Раменском',
//         'coords' => '55.8545, 38.4418',
//         'locationUrl' => '/arenda-bytovok-v-ramenskom/'
//     ),
// );

// $mainPhotogalleryData = array(
//   1 => array(
//     'imgName' => 'gallery.jpg',
//     'dataCaption' => 'Фото 1'
//   ),
//   2 => array(
//     'imgName' => 'gallery.jpg',
//     'dataCaption' => 'Фото 1'
//   ),
//   3 => array(
//     'imgName' => 'gallery.jpg',
//     'dataCaption' => 'Фото 1'
//   ),
//   4 => array(
//     'imgName' => 'gallery.jpg',
//     'dataCaption' => 'Фото 1'
//   ),
//   5 => array(
//     'imgName' => 'gallery.jpg',
//     'dataCaption' => 'Фото 1'
//   ),
//   6 => array(
//     'imgName' => 'gallery.jpg',
//     'dataCaption' => 'Фото 1'
//   ),
//   7 => array(
//     'imgName' => 'gallery.jpg',
//     'dataCaption' => 'Фото 1'
//   ),
// );


// $mainSliderData = array(
//     1 => array(
//     'imgName' => 'bytovka1.png',
//     'heading' => 'Строительные бытовки недорого!',
//     'description' => ''
//     ),
//     2 => array(
//     'imgName' => 'bytovka2.png',
//     'heading' => 'Строительные недорого!',
//     'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
//     ),
//     3 => array(
//     'imgName' => 'bytovka3.png',
//     'heading' => 'Строительные бытовки!',
//     'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
//     ),
//     4 => array(
//     'imgName' => 'bytovka4.png',
//     'heading' => 'Строительные бытовки дорого!',
//     'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
//     ),
//     5 => array(
//     'imgName' => 'bytovka5.png',
//     'heading' => 'Бытовки недорого!',
//     'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
//     ),
//     6 => array(
//     'imgName' => 'bytovka6.png',
//     'heading' => 'Строительные не бытовки недорого!',
//     'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
//     )
// );

// $questionsData = array(
//     1 => array(
//     'question' => 'Сколько времени занимает доставка?',
//     'answer' => 'Бытовку Вы получаете в день составления договора и оплаты заказа'
//     ),
//     2 => array(
//     'question' => 'Возможно ли доукомплектовывать бытовку?',
//     'answer' => 'Да, мы предоставляем разнообразный выбор комплектации на Ваш выбор. Вся возможная комплектация доступна на сайте или Вы можете получить консультацию у нашего менеджера.'
//     ),
//     3 => array(
//     'question' => 'Возможна ли аренда бу бытовки без залога?',
//     'answer' => 'Да, вариант аренды без залога возможен при условии аванса за 3 месяца.'
//     ),
//     4 => array(
//     'question' => 'Как мне вернуть бытовку по истечении срока аренды?',
//     'answer' => 'При приблежении окончания срока аренды, наши менеджеры сами свяжутся с Вами, для обсуждения процесса возврата удобным для Вас способом.'
//     ),
//     5 => array(
//     'question' => 'Есть ли у Вас бытовки для проживания зимой?',
//     'answer' => 'Да, наша компания предлагает бытовки, которые утеплены 100мм слоем утеплителя, на полу настелен линолеум, в них будет комфортно до -15 градусов. Так же возможна комплектация дополнительным электрооборудованием.'
//     ),
//     6 => array(
//     'question' => 'Какие дополнительные расходы могут возникнуть при аренде вагончика?',
//     'answer' => 'Кроме оплаты аренды Вам необходимо оплатить доставку, если у вас нет собственного транспорта.'
//     ),
//     7 => array(
//     'question' => 'Нужен ли фундамент для установки или можно ставить на грунт?',
//     'answer' => 'Мы рекомендуем устанавливать бытовку на фундаменте или на бетонных блоках. Однако, можно установить на ровную заасфальтированную площадку.'
//     ),
//     8 => array(
//     'question' => 'Можно ли выкупить арендованную бытовку?',
//     'answer' => 'Вопрос покупки обговаривается индивидуально.'
//     )

// );

// $ourAdvantagesData = array(
//   1=> array (
//     'img' => 'ad1.png',
//     'text' => 'Наша фирма занимается арендой бытовок с 2008 года, поэтому мы знаем что нужно нашему клиенту!'
//   ),
//   2=> array (
//     'img' => 'ad2.png',
//     'text' => 'Оплату за аренду и доставку бытовки можно производить по безналичному и наличному расчету.'
//   ),
//   3=> array (
//     'img' => 'ad3.png',
//     'text' => 'Для постоянных клиентов у нас действует гибкая система скидок как по аренде бытовки так и по доставке и вывоза её на склад.'
//   ),
// );

// $ourArticles = array(
//   1 => array(
//     'href' => '/pokupka-ili-arenda-byitovok/',
//     'title' => 'Покупка или аренда бытовок'
//   ),
//   2 => array(
//     'href' => '/xarakteristiki-byitovok/',
//     'title' => 'Характеристики бытовок'
//   ),
//   3 => array(
//     'href' => '/naznachenie-byitovok/',
//     'title' => 'Назначение бытовок'
//   ),
//   4 => array(
//     'href' => '/ispolzovanie-krana-manipulyatora/',
//     'title' => 'Использование крана-манипулятора'
//   ),
//   5 => array(
//     'href' => '/kupit-byitovku-bu/',
//     'title' => 'Кубить бытовку бу'
//   ),
//   6 => array(
//     'href' => '/byitovka-sklad/',
//     'title' => 'Бытовка - склад'
//   ),
//   7 => array(
//     'href' => '/bytovka-prorabskaya-ofis/',
//     'title' => 'Бытовка прорабская(офис)'
//   ),
//   8 => array(
//     'href' => '/byitovka-zhilaya/',
//     'title' => 'Бытовка жилая'
//   ),
//   9 => array(
//     'href' => '/byitovka-stolovaya/',
//     'title' => 'Бытовка столовая'
//   ),
//   10 => array(
//     'href' => '/byitovka-razdevalka/',
//     'title' => 'Бытовка раздевалка'
//   ),
//   11 => array(
//     'href' => '/bytovka-post-oxrany/',
//     'title' => 'Бытовка пост охраны'
//   ),
// );

// $photogalleryData = array(
//   1 =>array(
//     'caption' => 'Бытовка-склад',
//     'photoName' => 'photo1.jpg'
//   ),
//   2 =>array(
//     'caption' => 'Фото 2',
//     'photoName' => 'photo2.jpg'
//   ),
//   3 =>array(
//     'caption' => 'Фото 3',
//     'photoName' => 'photo3.jpg'
//   ),
//   4 =>array(
//     'caption' => 'Фото 4',
//     'photoName' => 'photo4.jpg'
//   ),
//   5 =>array(
//     'caption' => 'Фото 5',
//     'photoName' => 'photo5.jpg'
//   ),
//   6 =>array(
//     'caption' => 'Фото 6',
//     'photoName' => 'photo6.jpg'
//   ),
  
// );

// $priceData = array(
//   1 => array(
//     "priceTitle" => "Блок контейнер 2,5 х 6 м",
//     "priceImage" => "price.jpg",
//     "priceTextOuter" => array('Наружная обшивка:','металлический каркас оцинкованный профнастил С-8'),
//     "priceTextInner" => array('Внутренняя отделка:','ДВП утепление 50 мм электрика'),
//     "priceSumm" => "7000Р/мес"
//   ),
//   2 => array(
//     "priceTitle" => "Блок контейнер 2,5 х 6 м",
//     "priceImage" => "price.jpg",
//     "priceTextOuter" => array('Наружная обшивка:','металлический каркас оцинкованный профнастил С-8'),
//     "priceTextInner" => array('Внутренняя отделка:','пластик, деревянная вагонка утепление 50 мм электрика'),
//     "priceSumm" => "7000Р/мес"
//   ),
//   3 => array(
//     "priceTitle" => "Блок контейнер 2400 x 6000 см",
//     "priceImage" => "price.jpg",
//     "priceTextOuter" => array('Наружная обшивка:','Металлический каркас Наружная обшивка оцинкованный профнастил'),
//     "priceTextInner" => array('Внутренняя отделка:','Стенды ДВП, Электропроводка Освещение Выключатели Металлическая дверь На выходе автомат 16А Стальные решетки на окнах'),
//     "priceSumm" => "6000Р/мес"
//   ),
//   4 => array(
//     "priceTitle" => "Блок контейнер 2400 x 6000см",
//     "priceImage" => "price.jpg",
//     "priceTextOuter" => array('Наружная обшивка:','Металлический каркас Наружная обшивка оцинкованный профнастил Стенды ДВП Электропроводка Розетки'),
//     "priceTextInner" => array('Внутренняя отделка:','Освещение Выключатели На выходе автомат 16А'),
//     "priceSumm" => "7000Р/мес"
//   ),
//   5 => array(
//     "priceTitle" => "Блок контейнер 2,5 х 6 м",
//     "priceImage" => "price.jpg",
//     "priceTextOuter" => array('Наружная обшивка:','металлический каркас оцинкованный профнастил С-8'),
//     "priceTextInner" => array('Внутренняя отделка:','ДВП утепление 50 мм электрика'),
//     "priceSumm" => "7000Р/мес"
//   ),
// );

// $bytovkaTechCharacteristics = array(
//   1 => array(
//     "title" => "Стандартная бытовка",
//     "charsTableHead" => "Характеристики стандартной строительной бытовки",
//     "imageName" => "standartnaya-bytovka-texnicheskie-xarakteristiki.jpg",
//     "characteristics" => array(
//       "entry" => array("Тип" , "Вход с торца"),
//       "profile" => array("Габариты" , "2,5 х 6 х 2,5 м"),
//       "frame" => array("Каркас" , "Металлический"),
//       "window" => array("Окно" , "Рама деревянная (двойное остекление)"),
//       "exterior" => array("Внешняя отделка" , "Оцинкованный профлист"),
//       "interior" => array("Внутренняя отделка" , "Деревянная, ПХВ вагонка, оргалит"),
//       "flooring" => array("Напольное покрытие" , "Линолеум"),
//       "outer door" => array("Дверь наружная" , "Деревянная (с замком, обитая жестью)"),
//       "inner door" => array("Дверь межкомнатная" , "ДВП"),
//       "insulation" => array("Утепление" , "Минеральная вата 50 мм."),
//       "electrical wiring" => array("Электропроводка" , "Стандарт 5 КВт (2 лампы, 1 светильник, 3 розетки двойные, 2 выключателя)"),
//       "window grill" => array("Решетка на окне" , "Есть")
//     )
//   ),
//   2 => array(
//     "title" => "Не стандартная бытовка",
//     "charsTableHead" => "Характеристики не стандартной строительной бытовки",
//     "imageName" => "standartnaya-bytovka-texnicheskie-xarakteristiki2.jpg",
//     "characteristics" => array(
//       "entry" => array("Тип" , "Неведомая 4х мерная хрень"),
//       "profile" => array("Габариты" , "2 х 2 х 2 х 2 м"),
//       "frame" => array("Каркас" , "Чугуниевый"),
//       "window" => array("Окно" , "Отсутствует"),
//       "exterior" => array("Внешняя отделка" , "Инкрустация беличьими черепами"),
//       "interior" => array("Внутренняя отделка" , "Кожа с жопы дракона"),
//       "flooring" => array("Напольное покрытие" , "Вязаный коврик"),
//       "outer door" => array("Дверь наружная" , "Гермодверь"),
//       "inner door" => array("Дверь межкомнатная" , "Занавеска"),
//       "insulation" => array("Утепление" , "Чугунные батареи"),
//       "electrical wiring" => array("Электропроводка" , "Отсутствует"),
//       "window grill" => array("Решетка на окне" , "Нет")
//     )
//   ),
// );
// ?>