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
        2
    </div>
    <div class="section" data-anchor="block3">
        3
    </div>
    <div class="section" data-anchor="block4">
        4
    </div>
    <div class="section" data-anchor="block4">
        4
    </div>
     
</div>

<script src="{{ asset('assets/js/fullPage.min.js') }}" defer></script>
<script>jQuery.noConflict();</script>
<script type="text/javascript">
var $ = jQuery;
jQuery(document).ready(function($) {
    $('#fullpage').fullpage({
        anchors: ['block1', 'block2', 'block3', 'block4', 'block5'],
        menu: '#menu',
        css3: true,
        scrollingSpeed: 1000,

    });
});
</script>

@endsection
