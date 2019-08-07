@extends('layouts.master')

@section('content')

		
<div id="fullpage">
    <div class="section" data-anchor="block1">
      <div class="main_img" style="background-image:url(assets/img/Rectangle123.png);">
        <div class="container">
        <div class="row">
          <div class="col l8">
          <p>
            <span class="stages_progres_info"><i class="fas fa-map-marker-alt"></i>Международный</span>
            <span class="stages_info"><i class="fas fa-star"></i>ИДЁТ ЭКСПЕРТНАЯ ОЦЕНКА</span>
          </p>
          <a href="/contest" class="main_text_1">SOCIAL IDEA 2019</a>
          <p class="main_text_2">Конкурс проектов, направленных на решение важных социальных проблем, с применением цифровых технологий</p>
          <div class="img_part">
            <img src="assets/img/Layer5.png" alt="">
          </div>
          </div>
          <div class="col l4">
          <a href="/contest" class="waves-effect waves-light btn btn_main">ПОЛУФИНАЛИСТЫ <i class="fas fa-arrow-right"></i></a>
          </div>
          
        </div>
        </div>
      </div>
    </div>
    <div class="section" data-anchor="block2">
      <div class="container">
      <div class="row">
      <div class="crd_mero">
      <div class="owl-carousel">
        <div class="item">
        <a href="/contest">
        <div class="card">
        <div class="card-image">
          <div class="img_mero_crop">
          <img src="assets/img/Rectangle123.png" class="img_mero">
          </div>
          <span class="card-title title_mero">SOCIAL IDEA 2019</span>
          <span class="card-title pre_title_mero">Конкурс проектов, направленных на решение важных социальных проблем, с применением цифровых технологий</span>
        </div>
        </div>
        </a>
        </div> 
      </div>
      </div>
      </div>
      </div>
    </div>
    <div class="section" data-anchor="block3">
    <div class="container">
      <div class="row">
      <div class="crd_mero_news">
      <div class="owl-carousel">
        <div class="item">
        <a href="/contest">
        <div class="card">
        <div class="card-image crd_img_news" style="background-image: url(assets/img/Rectangle123.png);">
          
        </div>
        <div class="card-content">
          <p class="mews_date">
            12.12.34
          </p>
          <p class="news_title">Конкурс проектов, направленных на решение важных социальных проблем, с применением цифровых технологий</p>
        </div>
      </div>
        </a>
        </div>
      </div>
      </div>
      </div>
      </div>
    </div>
    <div class="section" data-anchor="block4" style="background-color:#dd414a;">
        <div class="container">
          <div class="row">
            <div class="filo">
            <div class="col xl12">
              <p class="text_filo_zag">«Телеком Идея» - ускоритель проектов. Это программа для поиска и отбора инновационных проектов молодежи в сфере информационных технологий и телекоммуникаций. </p>
              </div>
              <div class="col xl12">
              <div class="col xl4">
              <p class="text_filo_1">Конкурс «Телеком Идея» впервые запущен в 2011 году в России, а с 2014-го он проводится на международном уровне - в Индии и Беларуси. В рамках федерального конкурса, региональных и международных конкурсов и хакатонов мы ищем инновационные проекты и оказываем поддержку талантливой молодёжи.</p>
              </div>
              <div class="col xl4">
                <p class="text_filo_2">«Телеком Идея» даст новые возможности для развития вашего проекта: участники получат экспертную оценку своих идей, повысят качество проектов и их инвестиционную привлекательность. Лучшие команды будут приглашены в инновационный образовательный тур, где компании-партнеры «Телеком Идеи» поделятся опытом с молодыми инноваторами.</p>
              </div>
              <div class="col xl4">
                <p class="text_filo_3">Победители представят свои проекты на рассмотрение профессионалов в сфере телекоммуникаций, инноваций и венчурного рынка и партнеров ПАО «МТС» и получат возможность пройти стажировку с последующим трудоустройством в компании.</p>
              </div>
              
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="section" data-anchor="block5">
       <div class="container">
         <div class="row">
           <div class="contact_header">
           <div class="col xl4"></div>
           <div class="col xl8">
            <a href="mailto:info@rusinnovations.com" class="mail_contact">info@rusinnovations.com</a>
           </div>
           </div>
           <div class="col xl12">
             <div class="col s12 xl4">
              <p class="contact_zag">
                Актуальная информация
              </p>
              <p class="contact_title">
                О всех конкурсах читайте на наших страницах в социальных сетях
              </p>
             </div>
             <div class="col s12 xl4">
             <p class="contact_zag">
                Для партнеров
              </p>
              <p class="contact_title">
                Елена Фролова <br>
                <a href="tel:+79165140140">+7 (916) 514 01 40</a><br>
                <a href="mailto:fev@mts.ru">fev@mts.ru</a>
              </p>
             </div>
             <div class="col s12 xl4">
             <p class="contact_zag">
                Для участников
              </p>
              <p class="contact_title">
                Владимир Шульгин <br>
                <a href="tel:+79165140140">+7 (916) 514 01 40</a><br>
                <a href="mailto:info@rusinnovations.com">info@rusinnovations.com</a>
              </p>
             </div>
           </div>
         </div>
       </div>
    </div>
     
</div>

<script src="{{ asset('assets/js/fullPage.min.js') }}" defer></script>


@endsection
