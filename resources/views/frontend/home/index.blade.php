@include('frontend-layouts.main')

<div class="rev-slider">
    <!-- START REVOLUTION SLIDER 4.5.9 fullwidth mode -->

<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:450px;">
    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:450px;height:450px;">
<ul>    
<!-- SLIDE  -->
<?php $array = ['boxslide','random,slideup','slidevertical,scaledownfromright','random']; ?>

 @foreach($slideBars as $key =>  $slideBarImage)
 
    <li data-transition="{{isset($array[$key]) ? $array[$key] : ''}}" data-slotamount="7" data-masterspeed="300"  data-fstransition="slideleft" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        {{-- <img src="http://lisnagda.org/wp-content/uploads/2017/03/LIS-BANNER-03-1.jpg"  alt="LIS-BANNER-03-1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> --}}
         <img src="{{asset('storage/'.$slideBarImage->slidebar_image)}}"  alt="LIS-BANNER-03-1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
    </li>
    <!-- SLIDE  -->
   {{--  <li data-transition="random,slideup" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="http://lisnagda.org/wp-content/uploads/2020/01/LIS-BANNER-02-1024x375.jpg"  alt="LIS-BANNER-02-1024x375"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
    </li>
    <!-- SLIDE  -->
    <li data-transition="slidevertical,scaledownfromright" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        MAIN IMAGE
        <img src="http://lisnagda.org/wp-content/uploads/2020/01/sd1.png"  alt="sd1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
    </li>
    <!-- SLIDE  -->
    <li data-transition="random" data-slotamount="7"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="http://lisnagda.org/wp-content/uploads/2020/01/fdf.png"  alt="fdf"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
    </li> --}}
    {{-- <div class="tp-bullets simplebullets round hidebullets" style="bottom: 20px; left: 50%; margin-left: -48px;"><div class="bullet first"></div><div class="bullet"></div><div class="bullet"></div><div class="bullet last selected"></div><div class="tpclear"></div></div> --}}
@endforeach
</ul>

<div class="tp-bannertimer"></div>  </div>
</div>
<script type="text/javascript">

    /******************************************
        -   PREPARE PLACEHOLDER FOR SLIDER  -
    ******************************************/
    

    var setREVStartSize = function() {
        var tpopt = new Object();
            tpopt.startwidth = 960;
            tpopt.startheight = 450;
            tpopt.container = jQuery('#rev_slider_1_1');
            tpopt.fullScreen = "off";
            tpopt.forceFullWidth="off";

        tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
    };

    /* CALL PLACEHOLDER */
    setREVStartSize();


    var tpj=jQuery;
    tpj.noConflict();
    var revapi1;

    tpj(document).ready(function() {

    if(tpj('#rev_slider_1_1').revolution == undefined)
        revslider_showDoubleJqueryError('#rev_slider_1_1');
    else
       revapi1 = tpj('#rev_slider_1_1').show().revolution(
        {
            dottedOverlay:"none",
            delay:9000,
            startwidth:960,
            startheight:450,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:4,

            navigationType:"bullet",
            navigationArrows:"solo",
            navigationStyle:"round",

            touchenabled:"on",
            onHoverStop:"on",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            
            
            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner3",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",
            
            
            
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

                                    hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0                    
        });



        
    }); /*ready*/

</script>


<style type="text/css">
    #rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #FFFFFF !important; }
</style>
<style type="text/css">
    .rev-slider {
        margin-top: 49px;
    }
</style>
<!-- END REVOLUTION SLIDER --> 
</div>
  <div id="content" class="site-content">
    <div class="container">
        <div class="inner-wrapper">    
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <article id="post-5" class="post-5 page type-page status-publish hentry"></header><!-- .entry-header -->
                        <div class="entry-content">
                            <div class="row">
                                @foreach($homeContents as $key =>  $homeContent)

                                @if($key < 3)
                                <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12"><span style="color: #333399;"><br>
                                </span><p></p>
                                <h1 style="text-align: left;"><strong>{{$homeContent->content_title}}</strong></h1>
                                <div class="thumbnail-hidden">
                                    
                                    <img src="{{'storage/'.$homeContent->content_image}}" class="img-responsive oscitas-res-image" alt="">
                                </div>
                                <p>{!!$homeContent->content_des!!}</p></div>
                                @endif
                                @endforeach
                                <img src="http://lis.laxyo.org/frontend-home/saparator.png"></p>
                                @foreach($homeContents as $key =>  $homeContent)

                                @if($key == 3)
                                <div class="row"><div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"><span style="color: #333399;"><br>
                                </span><p></p>
                                <h2 style="text-align: center;"><strong>{{$homeContent->content_title}}</strong></h2>
                                <p>{!!$homeContent->content_des!!}</p></div>
                                </div><p></p>
                                <p>
                                    
                                <img src="{{'storage/'.$homeContent->content_icon}}"></p>
                                @if(count($homeContents)-1 == $key)
                                    <img src="{{'storage/'.$homeContent->content_image}}" alt="">
                                @endif
                                @endif
                                @endforeach    
                              {{-- <img src="http://lis.laxyo.org/frontend-home/saparator.png"></p> --}}
                                @foreach($homeContents as $key =>  $homeContent)

                                @if($key == 4)
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">

                                <img src="{{'storage/'.$homeContent->content_image}}" class="img-responsive oscitas-res-image" alt="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                                    {!!$homeContent->content_des!!}</div>
                                </div>
                                <img src="{{'storage/'.$homeContent->content_icon}}"></p>

                                <br>
                                @endif
                                @endforeach      
                            </div>
                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .inner-wrapper -->
    </div><!-- .container -->
</div><!-- #content -->

@include('frontend-layouts.footer')
    