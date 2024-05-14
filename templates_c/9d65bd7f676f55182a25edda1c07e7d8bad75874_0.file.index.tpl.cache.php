<?php
/* Smarty version 4.3.4, created on 2024-05-14 21:52:55
  from 'H:\xuanji\3dtest\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66436cb71c4cd1_47310042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d65bd7f676f55182a25edda1c07e7d8bad75874' => 
    array (
      0 => 'H:\\xuanji\\3dtest\\templates\\index.tpl',
      1 => 1715694773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436cb71c4cd1_47310042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '145739360466436cb71a5ee1_11493036';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Assignment</title>
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/layui/css/layui.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="assets/layui/layui.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="assets/css/idangerous.swiper.css">
    <?php echo '<script'; ?>
 src="assets/js/idangerous.swiper.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .blue-slide {
        /* background: #4390EE;*/
        background-image: url("/assets/img/b1.png");
    }

    .red-slide {
       /* background: #CA4040;*/
        background-image: url("/assets/img/b2.jpg");
    }

    .orange-slide {
        /*background: #FF8604;*/
        background-image: url("/assets/img/b3.jpg");
    }

    .swiper-slide {
        height: 700px;
        color: #fff;
        font-size: 36px;
        text-align: center;
        background-repeat: no-repeat;
        background-size: 100%;
    }
     
</style>

<body>

    <div id="mainbody">
        <div class="header-view">
            <div class="logo-view">
                Assignment
            </div>

            <div class="menu-view">
                <div class="menu-list">
                    <div class="menu-item active">
                       <a href="index.php?ID=index">models</a> 
                    </div>
                    
                    <div class="menu-item">
                        <a href="index.php?ID=models">models</a> 
                        
                    </div>
                    <div class="menu-item" onclick="openContact()">
                        Contact

                    </div>

                </div>
            </div>

        </div>


        <div class="banner-view">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide blue-slide"> </div>
                    <div class="swiper-slide red-slide"> </div>
                    <div class="swiper-slide orange-slide"> </div>
                </div>
            </div>

        </div>

        <div class="product-view">
            <div class="product-list">
                <div class="product-item">
                    <div class="img-view">

                        <img src="/assets/img/p1.png" alt="">
                    </div>

                    <div class="content-view">
                        This is a bottle of Pepsi-Cola, a globally recognized carbonated soft drink that has been a favorite among soda enthusiasts since its inception in the late 19th century. Known for its bold, refreshing taste and its iconic deep blue branding, Pepsi-Cola offers a slightly sweeter and smoother experience compared to its rivals. This beverage stands out with its harmonious mix of caramel, citrus, and vanilla notes, making it a popular choice for those seeking a quick thirst quencher or a flavorful complement to a meal. Pepsi-Cola continues to hold a cherished place in the world of soft drinks, appealing to a diverse range of taste preferences and generations.
                        <div class="more-btn" onclick="showImg('/assets/img/p1.png')">show more</div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="img-view">

                        <img src="/assets/img/p2.png" alt="">
                    </div>

                    <div class="content-view">
                        This is a can of diet Pepsi, a popular zero-calorie carbonated soft drink that features a blend of sweet, light flavors without the added sugar found in regular Pepsi. It is designed to offer the same refreshing taste as its original counterpart but caters to those who prefer or require a low-sugar option. This beverage is often chosen by individuals looking to enjoy a soda while maintaining a lower-calorie diet.
                         <div class="more-btn" onclick="showImg('/assets/img/p2.png')">show more</div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="img-view">

                        <img src="/assets/img/p3.png" alt="">
                    </div>

                    <div class="content-view">
                        This is a bottle of zero sugar Pepsi, a variation of the classic Pepsi cola that is formulated without any sugar. It's tailored for consumers who are conscious about their sugar intake but still crave the familiar, bold taste of Pepsi. Zero sugar Pepsi offers a refreshing and crisp cola flavor, providing a guilt-free way to enjoy a fizzy drink. It's especially popular among those who are managing dietary restrictions or simply prefer to avoid sugar for health reasons, providing a satisfying alternative to traditional sugary soft drinks.
                        <div class="more-btn" onclick="showImg('/assets/img/p3.png')">show more</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <p>Copyright @ Assignment</p>
            </div>
        </div>
    </div>
</body>

</html>
<?php echo '<script'; ?>
 type="text/javascript">
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: 3000,
    });

    setInterval("mySwiper.swipePrev()", 3000);


    function openContact(){
        layer.open({
        title: 'Assignment Contact'
        ,content: ' Email：cf344@sussex.ac.uk',
         btn: ['Close' ]
  ,yes: function(index, layero){
    //按钮【按钮一】的回调
    layer.closeAll();
  }
 
  ,cancel: function(){ 
    //右上角关闭回调
    
    //return false 开启该代码可禁止点击该按钮关闭
  }
        });  
    }


   function showImg(url){
        layer.photos({
        photos: {
          "title": "Photos",
          "start": 0,
          "data": [
            {
              "alt": "layer",
              "pid": 1,
              "src": url,
            },
            
          ]
        }
      });
    }
<?php echo '</script'; ?>
><?php }
}
