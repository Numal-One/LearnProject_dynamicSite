<?php
$mapPointsData = array(
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
);
?>

<div class="main_map">
        <div class="grid-container">
          <div class="main_map-heading heading">Мы работаем по Москве и Московской области</div>
          <div class="main_map-wrapper">
            <div class="main_map-body" id="map"></div>
            <script>
              var mapsPoints = [

                <?php
                    foreach ($mapPointsData as $mapPoint) {
                        echo '
                        {
                            coords: ['.$mapPoint['coords'].'],
                            locationUrl: "'.$mapPoint['locationUrl'].'",
                        },
                        ';
                    }
                ?>
                                        //   {
                                        //       coords: [55.5572, 37.7086],
                                        //       locationUrl: '/arenda-bytovok-v-vidnom/',
                                        //   },
                                        //   {
                                        //       coords: [55.4255, 38.2641],
                                        //       locationUrl: '/arenda-bytovok-v-bronnicah/',
                                        //   },
                                        //   {
                                        //       coords: [56.3439, 37.5203],
                                        //       locationUrl: '/arenda-bytovok-v-dmitrove/',
                                        //   },
                                        //   {
                                        //       coords: [55.5673, 38.2258],
                                        //       locationUrl: '/arenda-bytovok-v-ramenskom/',
                                        //   },
                                        //   {
                                        //       coords: [55.1499, 37.4670],
                                        //       locationUrl: '/arenda-bytovok-v-chekhove/',
                                        //   },
                                        //   {
                                        //       coords: [56.3153, 38.1360],
                                        //       locationUrl: '/arenda-bytovok-v-sergiev-posade/',
                                        //   },
                                        //   {
                                        //       coords: [56.3317, 36.7287],
                                        //       locationUrl: '/arenda-bytovok-v-klinu/',
                                        //   },
                                        //   {
                                        //       coords: [55.9143, 36.8603],
                                        //       locationUrl: '/arenda-bytovok-v-istre/',
                                        //   },
                                        //   {
                                        //       coords: [55.4312, 37.5447],
                                        //       locationUrl: '/arenda-bytovok-v-podolske/',
                                        //   },
                                        //   {
                                        //       coords: [55.4312, 37.5447],
                                        //       locationUrl: '/arenda-bytovok-v-vidnom/',
                                        //   },
                                        //   {
                                        //       coords: [56.0357, 35.9585],
                                        //       locationUrl: '/arenda-bytovok-v-volokolamske/',
                                        //   },
                                        //   {
                                        //       coords: [56.0104, 37.8472],
                                        //       locationUrl: '/arenda-bytovok-v-pushkino/',
                                        //   },
                                        //   {
                                        //       coords: [55.9919, 37.2144],
                                        //       locationUrl: '/arenda-bytovok-v-zelenograde/',
                                        //   },
                                        //   {
                                        //       coords: [55.7963, 37.9382],
                                        //       locationUrl: '/arenda-bytovok-v-balashihe/',
                                        //   },
                                        //   {
                                        //       coords: [55.9202, 37.9915],
                                        //       locationUrl: '/arenda-bytovok-v-shchelkovo/',
                                        //   },
                                        //   {
                                        //       coords: [55.8545, 38.4418],
                                        //       locationUrl: '/arenda-bytovok-v-noginske/',
                                        //   },
              
                                      ];
            </script>
            <div class="main_map-links">
              <div class="main_map-links-title">Аренда бытовок в: </div>

              <?php
                foreach ($mapPointsData as $mapPoint) {
                   
                    echo '
                    <a href="'.$mapPoint['locationUrl'].'">'.$mapPoint['location'].'</a>
                    ';
                }
              ?>
              
              <!-- <a href="/arenda-bytovok-v-vidnom/">Видном</a>
              <a href="/arenda-bytovok-v-bronnicah/">Бронницах</a>
              <a href="/arenda-bytovok-v-dmitrove/">Дмитрове</a>
              <a href="/arenda-bytovok-v-ramenskom/">Раменском</a>
              <a href="/arenda-bytovok-v-chekhove/">Чехове</a>
              <a href="/arenda-bytovok-v-sergiev-posade/">Сергиев Посаде</a>
              <a href="/arenda-bytovok-v-klinu/">Клину</a>
              <a href="/arenda-bytovok-v-istre/">Истре</a>
              <a href="/arenda-bytovok-v-podolske/">Подольске</a>
              <a href="/arenda-bytovok-v-vidnom/">Солнечногорске</a>
              <a href="/arenda-bytovok-v-volokolamske/">Волоколамске</a>
              <a href="/arenda-bytovok-v-pushkino/">Пушкино</a>
              <a href="/arenda-bytovok-v-zelenograde/">Зеленограде</a>
              <a href="/arenda-bytovok-v-balashihe/">Балашихе</a>
              <a href="/arenda-bytovok-v-shchelkovo/">Щелково</a>
              <a href="/arenda-bytovok-v-noginske/">Ногинске</a> -->
            </div>
          </div>
        </div>
      </div>