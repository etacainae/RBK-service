<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet"> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=cyrillic');</style>
    <?php wp_head() ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>RBK service</title>
  </head>
  <body>
    <header id="header">
     <div class="container">
       <div class="row">
        <div class="mobil-link">
          <span></span>
        </div>
        
        <div class="mobil-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1'  ) ); ?>
        </div>
         <div class="col-xl-6 col-lg-6 col-12 logo">
           <?php 

           $image = get_field('логотип');

           if( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

           <?php endif; ?>
         </div>
         <div class="col-xl-4 col-lg-3 col-12 contacts">
           <div class="contacts-item">
             <div class="contacts-item-img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/metro.png" alt="">
             </div>
             <p>
               <?php the_field('багратионовская'); ?>
             </p>
           </div>
           <div class="contacts-item">
             <div class="contacts-item-img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/metro.png" alt="">
             </div>
             <p>
               <?php the_field('мякинино'); ?>
             </p>
           </div>
         </div>
         <div class="col-xl-2 col-lg-3 col-12 buttons">
           <div class="buttons-item">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icons/box.png" alt="">
             <p>
               Заказать<br> 
               курьера 
             </p>
           </div>
           <div class="buttons-item">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icons/konsult.png" alt="">
             <p>
               Бесплатная <br>
               консультация
             </p>
           </div>
         </div>
       </div>
     </div>
    </header>
    <div class="fixed-menu">
      <div class="container">
        <div class="row fixed-menu__wrapper">
          <div class="col-lg-1 menu-search">
            <a href="#" class="home">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/home.png" alt="">
            </a>
            <a href="#" class="search">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.png" alt="">
            </a>
          </div>
          <div class="col-lg-8 col-xl-7 navbar-wrapper">
            <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1'  ) ); ?>
          </div>
          <div class="col-lg-2 account">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/user.png" alt="Личный кабинет">
            <p>МОЙ КАБИНЕТ</p>
          </div>
          <div class="col-lg-1 col-xl-2 basket">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cart.png" alt="Корзина">
            <p>
              Корзина<br>
              0.00 руб.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="breadcrumb">
          <div class="crumb">
            <a href="#">Главная</a>
          </div>
          <div class="crumb">
            /
            <a href="#">Ремонт Apple</a>
          </div>
          <div class="crumb">
            /
            <a href="#">Ремонт Iphone 7</a>
          </div>
        </div>
        <div class="phone-infa row">
          <div class="mobil-phone-infa__title">
            <h1>ремонт Iphone 7</h1>
          </div>
          <div class="col-lg-4 col-12 phone-infa__img">
            <?php 

            $image = get_field('картинка_товара');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
          </div>
          <div class="col-lg-8 col-12 phone-infa__text">
            <div class="phone-infa__title">
              <h1><?php the_field('заголовок_товара'); ?></h1>
            </div>
            <div class="phone-infa__faults">
              <h3><?php the_field('частые_неисправности'); ?></h3>
              <?php the_field('список_неисправностей'); ?>
            </div>
          </div>
          <div class="col-xl-12 col-12 application-button phone-infa__application-button">
            <a href="#2">Онлайн заявка на ремонт 10% скидка </a>
          </div>
        </div>
        <div class="price">
          <h2><?php the_field('заголовок_прайса'); ?><!-- Цены на ремонт iphone 7 указанны с учетом запчастей --></h2>
          <div class="price-desc">
            <p>НАИМЕНОВАНИЕ РАБОТ</p>
            <p>ЦЕНА</p>
          </div>
          <?php the_field('прайс_неисправностей'); ?>
        </div>     
      </div>
     <!-- ----------------- container end ------------------ -->
      <div class="advantages">
        <h2>преимущества нашей компании</h2>
        <div class="advantages-wrapper">
          <div class="container">
            <ul>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/desc-1.png" alt="">
                <p>
                  Инженеры высокого уровня с <br>
                  высшим профильным образованием
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/desc-2.png" alt="">
                <p>
                  Оказываем бесплатную консультацию
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/desc-3.png" alt="">
                <p>
                  Ценим каждого клиента и экономим<br> ваше время, а значит и деньги
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/desc-4.png" alt="">
                <p>
                  Мы используем качественные и<br> оригинальные запчасти
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/desc-5.png" alt="">
                <p>
                  Гарантия на работу и индивидуальный<br> подход к каждому клиенту
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="process">
          <h2>как происходит процесс ремонта</h2>
          <div class="row">
            <div class="col-xl-five process-item">
              <div class="process-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/numbers/1.png" alt="">
              </div>
              <p>
                Принимая технику, <br>
                фиксируем все пожелания <br>
                и нюансы
              </p>
            </div>
            <div class="col-xl-five process-item">
              <div class="process-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/numbers/2.png" alt="">
              </div>
              <p>
                Осуществляем <br>
                быструю и тщательную <br>
                диагностику
              </p>
            </div>
            <div class="col-xl-five process-item">
              <div class="process-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/numbers/3.png" alt="">
              </div>
              <p>
                Выполнение всех <br>
                согласованных работ <br>
                качественно и в срок
              </p>
            </div>
            <div class="col-xl-five process-item">
              <div class="process-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/numbers/4.png" alt="">
              </div>
              <p>
                Держим клиента <br>
                в курсе хода ремонта <br>
                и всегда на связи
              </p>
            </div>
            <div class="col-xl-five process-item">
              <div class="process-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/numbers/5.png" alt="">
              </div>
              <p>
                Заключительный <br>
                анализ качества <br>
                выполненной работы
              </p>
            </div>
            <div class="col-12 application-button process__application-button">
              <a href="#2">Онлайн заявка на ремонт 10% скидка </a>
            </div>
          </div>
        </div>
        <div class="payment">
          <h2>Варианты оплаты</h2>
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-lg-6 col-12 payment-item">
              <div class="payment-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pay-1.png" alt="">
              </div>
              <h4>Наличный расчет</h4>
              <p>
                Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. In sagittis <br> quam neque. Pellentesque quis <br>convallis ante. Proin at <br>
                volutpat justo. 
              </p>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-6 col-12 payment-item">
              <div class="payment-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pay-2.png" alt="">
              </div>
              <h4>безналичный расчет</h4>
              <p>
                Вы можете оплатить  картами<br> Visa/MasterCard или в кассе<br> отделения любого банка (при<br> переводе необходимо будет <br>оплатить комиссию)
              </p>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-6 col-12 payment-item">
              <div class="payment-item__img">                
               <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pay-3.png" alt="">
              </div>
              <h4>оплата по счету</h4> 
              <p>
                Оплата может производиться с <br>помощью корпоративной <br>кредитной карты. Можно оплатить <br>в кассе отеделния любого банка<br>
                (взымается комиссия)
              </p>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-6 col-12 payment-item">
              <div class="payment-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pay-4.png" alt="">
              </div>
              <h4>в кредит или рассрочку</h4>
              <p>
                Оплата может производиться с <br>помощью корпоративной <br>кредитной карты. Можно оплатить <br>в кассе отеделния любого банка<br>
                (взымается комиссия)
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- ----------------- container end ------------------ -->
      <div class="reverse-form">
        <div class="reverse-form__wrapper">        
          <img class="tree-one" src="<?php echo get_template_directory_uri(); ?>/img/tree.png" alt="Ёлка">
          <img class="phone" src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="Телефон">
          <img class="skidka" src="<?php echo get_template_directory_uri(); ?>/img/skidka.png" alt="Скидка">
          <img class="tree-two" src="<?php echo get_template_directory_uri(); ?>/img/tree-2.png" alt="Ёлка">
          <h3>ЕСЛИ РЕМОНТ - ТО RBK Сервис</h3>
          <form action="">
            <label for="">
              только до конца января, скидка 10% на ремонт<br>
              любой техники Apple
            </label>
            <div class="input-wrapper">
              <input type="text" name="user_name" placeholder="Ваше Имя" required>
              <input type="tel" name="user_phone" placeholder="Номер телефона" required>
            </div>
            <button class="reverse-form__element-btn" type="submit">Отправить</button> 
          </form>
        </div>
      </div>
      <div class="fish">
        <div class="container">
          <p>
            <?php the_field('lorem-text'); ?>
          </p>
        </div>
      </div>
    </div>
   <!-- ------------------ content end ------------- -->
    <footer id="footer">
     <div class="container">
       <div class="row">
         <div class="col-lg-2 col-sm-4 col-12 footer-item">
           <h4>ИНФОРМАЦИЯ</h4>
           <a href="#">Новости</a>
           <a href="#">О компании</a>
           <a href="#">О нас и для Вас</a>
         </div>
         <div class="col-lg-2 col-sm-4 col-12 footer-item">
           <h4>СЕРВИСЫ</h4>
           <a href="#">текст</a>
           <a href="#">текст</a>
           <a href="#">текст</a>
         </div>
         <div class="col-lg-2 col-sm-4 col-12 footer-item">
           <h4>ЗАПЧАСТИ</h4>
           <a href="#">Для Apple</a>
           <a href="#">Для телефонов</a>
           <a href="#">Для планшетов</a>
           <a href="#">Для ноутбуков</a>
           <a href="#">Для фотоаппаратов</a>
         </div>
         <div class="col-lg-4 col-sm-6 col-12 footer-item">
           <h4>АКСЕССУАРЫ</h4>
           <a href="#">Чехлы</a>
           <a href="#">Кабели, переходники</a>
           <a href="#">Наушники, гарнитура</a>
           <a href="#">Защитные стекла</a>
           <a href="#">Держатели</a>
           <a href="#">Power bank</a>
           <a href="#">USB накопители, карты памяти</a>
           <a href="#">Док станции, селфи палки</a>
           <a href="#">Портативная акустика</a>
         </div>
         <div class="col-lg-2 col-sm-6 col-12 footer-item">
           <h4>КОНТАКТЫ</h4>
           <a href="#">
             м. Багратионовская, <br>
             ул. сеславинкская
           </a>
           <a href="#">
             м. Мякинино, <br>
             ул. Международная
           </a>
           <a href="#">
             +7(495)6707707<br>
             +7(495)6707707
           </a>
         </div>
       </div>
     </div>
    </footer>   
    <div class="modal-window">
      <h2>Заполните форму</h2>
      <div class="close">&times;</div>
      <div class="row">
        <?php echo do_shortcode('[contact-form-7 id="17" title="New form 2323"]');?>
      </div>
    </div>
    <div class="overlay"> 
    </div>
    <script>
      $(document).ready(function(){
        var link = $('.mobil-link');
        var link_active = $('.mobil-link_active');
        var menu = $('.mobil-menu');

        link.click(function(){
          link.toggleClass('mobil-link_active');
          menu.toggleClass('mobil-menu_active');
        });
      });        
    </script>
    <script>
      let btn = document.querySelector('.mobil-link');
        window.onscroll = button;
        function button() {
            if (window.pageYOffset > 60) {
            btn.style.opacity = '1';
          }else { btn.style.opacity = '0'; }
      } 
    </script>
    <script>
      $(document).ready(function(){
        var button = $('.application-button');
        var form = $('.modal-window');
        var overlay = $('.overlay');
        var close = $('.close');
        var body = $('body');

        button.click(function(){
          form.css("display", "block");
          overlay.css("display", "block");
          body.css("overflow", "hidden");
        });
        close.click(function(){
          form.css("display", "none");
          overlay.css("display", "none");
          body.css("overflow", "scroll");
        });
        overlay.click(function(){
          form.css("display", "none");
          overlay.css("display", "none");
          body.css("overflow", "scroll");
        });
      });
    </script>
    
    <!-- Optional JavaScript -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>