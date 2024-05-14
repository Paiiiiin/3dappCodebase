<?php /* Smarty version 2.6.33, created on 2024-05-15 00:24:16
         compiled from index.tpl */ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Assignment</title>
   
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/layui/css/layui.css" rel="stylesheet">
    <script src="assets/layui/layui.js"></script>
    <link rel="stylesheet" href="assets/css/idangerous.swiper.css">
    <script src="assets/js/idangerous.swiper.min.js"></script>
    
</head>
 

<body>

    <div id="mainbody">
        <div class="header-view">
            <div class="logo-view">
                Assignment
            </div>

            <div class="menu-view">
                <div class="menu-list">
                    <div class="menu-item active">
                       <a href="index.php?action=index">index</a> 
                    </div>
                    
                    <div class="menu-item">
                        <a href="index.php?action=models">models</a> 
                        
                    </div>
                    <div class="menu-item" onclick="openContact()">
                        Contact

                    </div>

                </div>
            </div>

        </div>


        <div class="banner-view">
            <div class="swiper-container">
                <div class="swiper-wrapper" style="height:600px">
                    <div class="swiper-slide blue-slide">
                        <image src="./assets/img/b1.png" style="width:100%; " mode="aspectFill" >
                     </div>
                    <div class="swiper-slide red-slide"> 
                      <image src="./assets/img/b2.jpg" style="width:100%;; " mode="aspectFill" ></div>
                    <div class="swiper-slide orange-slide">
                      <image src="./assets/img/b3.jpg" style="width:100%; " mode="aspectFill" > </div>
                </div>
            </div>

        </div>

        <div class="product-view">
            <div class="product-list">
                <div class="product-item">
                    <div class="img-view">

                        <img src="./assets/img/p1.png" alt="">
                    </div>

                    <div class="content-view">
                        This is a bottle of Pepsi-Cola, a globally recognized carbonated soft drink that has been a favorite among soda enthusiasts since its inception in the late 19th century. Known for its bold, refreshing taste and its iconic deep blue branding, Pepsi-Cola offers a slightly sweeter and smoother experience compared to its rivals. This beverage stands out with its harmonious mix of caramel, citrus, and vanilla notes, making it a popular choice for those seeking a quick thirst quencher or a flavorful complement to a meal. Pepsi-Cola continues to hold a cherished place in the world of soft drinks, appealing to a diverse range of taste preferences and generations.
                        <div class="more-btn" onclick="showImg('./assets/img/p1.png')">show more</div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="img-view">

                        <img src="./assets/img/p2.png" alt="">
                    </div>

                    <div class="content-view">
                        This is a can of diet Pepsi, a popular zero-calorie carbonated soft drink that features a blend of sweet, light flavors without the added sugar found in regular Pepsi. It is designed to offer the same refreshing taste as its original counterpart but caters to those who prefer or require a low-sugar option. This beverage is often chosen by individuals looking to enjoy a soda while maintaining a lower-calorie diet.
                         <div class="more-btn" onclick="showImg('./assets/img/p2.png')">show more</div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="img-view">

                        <img src="./assets/img/p3.png" alt="">
                    </div>

                    <div class="content-view">
                        This is a bottle of zero sugar Pepsi, a variation of the classic Pepsi cola that is formulated without any sugar. It's tailored for consumers who are conscious about their sugar intake but still crave the familiar, bold taste of Pepsi. Zero sugar Pepsi offers a refreshing and crisp cola flavor, providing a guilt-free way to enjoy a fizzy drink. It's especially popular among those who are managing dietary restrictions or simply prefer to avoid sugar for health reasons, providing a satisfying alternative to traditional sugary soft drinks.
                        <div class="more-btn" onclick="showImg('./assets/img/p3.png')">show more</div>
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
  <script src="assets/css/index.js"></script> 