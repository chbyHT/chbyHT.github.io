<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>嘉祥首頁</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
    *{ padding:0px; margin:0px}
      body{ background-color: #999;}
      .clearLeft{ clear:left}
      .floatLeft{ float: left}
      body{ background-color:#87ceeb;} /*背景天空藍*/
      #box{ width:1300px; height:800px; overflow:hidden; margin:auto; padding-top:30px; border:5px #fff solid;text-align:center;border-radius:10px;}/*畫布大小*/
      #plant1{ width:120px; height:80px;
        background-image:url(images/plant.png);background-size:contain;
        position:relative;
        top:20px;
        left:-500px;
        -webkit-animation-delay: 1s;
        -webkit-animation-duration: 30s;
        -webkit-animation-iteration-count: infinite;}
      #cloud1{ width:130px; height:100px;
        background-image:url(images/cloud1.png);background-size:contain;
        position:relative;
        left:-230px;
        -webkit-animation-duration: 20s;
        -webkit-animation-iteration-count: infinite;}
      #cloud2{ width:150px; height:120px;
        background-image:url(images/cloud1.png);background-size:contain;/*背景圖片與填滿*/
        position:relative;
        left:-400px;
        top:100px;                                    /*頂100px*/
        -webkit-animation-delay: 2s;                  /*頁面載入2秒後做特效*/
        -webkit-animation-duration: 25s;              /*特效過程長20秒*/
        -webkit-animation-iteration-count: infinite;}/*特效次數無限。*/

      #star1{ width:45px; height:42px;
        background-image:url(images/star1.png);background-size:contain;
        position:relative;
        left:50px;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count:infinite;}
      #star2{ width:45px; height:42px;
        background-image:url(images/star1.png);background-size:contain;
        position:relative;
        left:300px;
        top:80px;
        -webkit-animation-iteration-count:infinite;}
      #star3{ width:45px; height:42px;
          background-image:url(images/star1.png);background-size:contain;
          position:relative;
          left:900px;
          top:-40px;
          -webkit-animation-duration: 1.3s;
          -webkit-animation-iteration-count:infinite;}

      #ball1{ width:78px; height:120px;
        background-image: url(images/ball.png);background-size:contain;
        position:relative;
        top:500px;
        left:100px;
        -webkit-animation-delay:8.5s;
        -webkit-animation-duration: 30s; }
      #ball2{ width:78px; height:120px;
        background-image: url(images/ball.png);background-size:contain;
        position:relative;
        top:500px;
        left:500px;
        -webkit-animation-delay:7.8s;
        -webkit-animation-duration: 30s; }
      #mountain1{width:1400px; height:160px;
        background-image: url(images/mountain.png);background-size:contain;
        position:relative;
        top:500px;
      }
      #road{width:1400px; height:100px;
        background-color: #696969;
        position:relative;
        top:500px;
      }
      #car1{ width:120px; height:78px;
        background-image:url(images/car1.png);background-size:contain;
        position:relative;
        left:-350px;
        top:100px;
        -webkit-animation-duration: 20s;
        -webkit-animation-iteration-count: infinite;}
      #car2{ width:150px; height:90px;
        background-image:url(images/car2.png);background-size:contain;
        position:relative;
        right:-1500px;
        top:130px;
        -webkit-animation-delay: 1.5s;
        -webkit-animation-duration: 16s;
        -webkit-animation-iteration-count: infinite;}
      #house1{width:100px; height:144px;
        background-image:url(images/house1.png);background-size:contain;
        position:relative;
        top:200px;
        left:100px;
        -webkit-animation-delay: 1s
        }
      #house2{width:148px; height:91px;
        background-image:url(images/house2.png);background-size:contain;
        position:relative;
        top:110px;
        left:400px;
        -webkit-animation-delay: 1.3s
        }
      #house3{width:109px; height:120px;
        background-image:url(images/house3.png);background-size:contain;
        position:relative;
        top:-5px;
        left:1000px;
        -webkit-animation-delay: 0.5s
        }
      #my{width:400px; height:350px;
        /*background-color: #fff;*/
        position:relative;
        top: -70%;
        left:0%;
        border-radius:30px;
        border:2px #ffffff solid;
        }
    </style>
  </head>
  <body>
    <div class="" id="box">
      <div id="plant1" class=" animated fadeInRightBig floatLeft"></div>
      <div id="cloud1" class=" animated fadeInRightBig floatLeft"></div><!-- 使用fadeInRightBig是會從視窗外由右向左飛進來的效果-->
      <div id="cloud2" class=" animated fadeInRightBig floatLeft"></div><!-- 使用fadeInRightBig是會從視窗外由右向左飛進來的效果-->
      <div id="star1"class=" animated flash clearLeft floatLeft"></div>
      <div id="star2"class=" animated flash clearLeft floatLeft"></div>
      <div id="star3"class=" animated flash clearLeft floatLeft"></div>
      <div id="ball1"class=" animated fadeOutUpBig floatLeft"></div><!--fadeOutUpBig 氣球往上飛效果-->
      <div id="ball2"class=" animated fadeOutUpBig floatLeft"></div>
      <div id="mountain1"></div>
      <div id="road"></div>

      <div id="house1"class=" animated bounceInUp clearLeft floatLeft"></div> <!-- 房子上彈 -->
      <div id="house2"class=" animated bounceInUp clearLeft floatLeft"></div>
      <div id="house3"class=" animated bounceInUp clearLeft floatLeft"></div>

      <div id="car1" class=" animated fadeInRightBig floatLeft"></div>
      <div id="car2" class=" animated fadeInLeftBig floatLeft"></div>

      <div id="my"  style="margin: 0px auto;" class="animated zoomIn clearLeft">
        <img src="images/head.jpg" alt="" style="height:50%;border:2px #00F0F0 solid;border-radius:20px;">
        <b>
          <h2>資工二乙</h2>
          <h2>陳嘉祥 </h2>
          <h2>40418208</h2>
        </b>



      </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
