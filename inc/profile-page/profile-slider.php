  <?php

    include 'sliderpaneltext.php';
    include 'sliderButtons.php';

    $sliders = json_decode($sliderPanelText, true);

    //var_dump($sliders);
    $tabs = json_decode($sliderButtons, true);

  ?>
    <section id="prof_cont-a">

    <h1><?php _e('Web Development Courses', 'raythompsonwebdev-com'); ?></h1>

    <!-- #hero-slider -->
    <article class="hero-slider">

      <ul id="list">
        <?php foreach($tabs as $tab): ?>   
              
          <li>
              <a href="#" rel="#panel-<?= $tab['id'] ?>" class="hero-btn active" title="<?php esc_attr_e($tab['title'], 'raythompsonwebdev-com'); ?>" ><?php _e($tab['buttonname'], 'raythompsonwebdev-com'); ?></a>
          </li>             
              
        <?php endforeach;?>

      </ul>
      <!--mask-->
      <div class="mask">
          <!--slider body -->
          <div class="slider-body">

              <?php foreach($sliders as $slider): ?> 

                <article class="panel" id="panel-<?= $slider['id'] ?>">

                    <h2><?php _e($slider['title'], 'raythompsonwebdev-com'); ?> </h2>

                    <figure class="slider-panel">

                        <a 
                          href="<?= esc_url(home_url('/')); ?><?= $slider['bgimag'] ?>" 
                          class="fancybox" 
                          title="<?php esc_attr_e($slider['title'], 'raythompsonwebdev-com'); ?>">
                          <span></span>                                  
                        </a>

                        <figcaption>
                            <h3><?php _e($slider['header'], 'raythompsonwebdev-com'); ?></h3>
                            <h4><?php _e($slider['topics'], 'raythompsonwebdev-com'); ?></h4>

                            <ul>
                                <li><?php _e($slider['task1'], 'raythompsonwebdev-com'); ?></li>
                                <li><?php _e($slider['task2'], 'raythompsonwebdev-com'); ?></li>
                                <li><?php _e($slider['task3'], 'raythompsonwebdev-com'); ?></li>
                                <li><?php _e($slider['task4'], 'raythompsonwebdev-com'); ?></li>
                                <li><?php _e($slider['task5'], 'raythompsonwebdev-com'); ?></li>
                            </ul>

                            <div class="clearfix"></div>

                        </figcaption>

                    </figure>

                </article>
              <?php endforeach;?>

          </div>
          <!--slider body end-->
      </div>
      <!-- .mask end -->

    </article>
    <!-- hero-slider end -->

  </section>
<?php
   



