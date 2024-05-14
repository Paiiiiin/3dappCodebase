<?php /* Smarty version 2.6.33, created on 2024-05-14 23:54:20
         compiled from models.tpl */ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Assignment</title>
    <link href="assets/css/index.css" rel="stylesheet">
     <script src="assets/css/index.js"></script>
    <link href="assets/layui/css/layui.css" rel="stylesheet">
    <script src="assets/layui/layui.js"></script>
    <link rel="stylesheet" href="assets/css/idangerous.swiper.css">
    <script src="assets/js/idangerous.swiper.min.js"></script>
</head>
<style>
    

</style>

<body>

    <div id="mainbody">
        <div class="header-view">
            <div class="logo-view">
                Assignment
            </div>

            <div class="menu-view">
                <div class="menu-list">
                    <div class="menu-item ">
                       <a href="index.php?action=index">index</a> 
                    </div>
                    
                    <div class="menu-item active">
                        <a href="index.php?ID=models">models</a> 
                        
                    </div>
                    <div class="menu-item" onclick="openContact()">
                        Contact

                    </div>

                </div>
            </div>

        </div>

        <div class="models-content-view">

            <div class="models-view">
                <div class="models-header">
                    <div class="header-title">
                        X3D Models
                    </div>
                </div>
                <div style="position: relative;">
                    <div class="frame-top">
                        <div class="top-title" id="top-title">Pepsimax X3D Model</div>
                        <div class="p-list">
                       
         
                        <?php $_from = $this->_tpl_vars['models']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['vo']):
?>

                             <div class="p-item" onclick="showModel(<?php echo $this->_tpl_vars['k']; ?>
)"><?php echo $this->_tpl_vars['vo']['name']; ?>
</div>

                        <?php endforeach; endif; unset($_from); ?>
                          
                        </div>
                    </div>
                    <iframe id="modelFrame" src=".<?php echo $this->_tpl_vars['models'][0]['url']; ?>
" frameborder="0" style="width: 100%;height: 600px;"></iframe>
                </div>

               
    
             </div>

             <div class="models-img-view">
                <div class="models-header">
                    <div class="header-title">
                       Gallery
                    </div>
                </div>
                <div class="img-title">
                    3D Images
                </div>
                <div class="img-list">
                    <div class="img-item">

                        <image src="./assets/img/p1.png" mode="aspectFill" alt="" onclick="showImg()"></image>
                    </div>
                    <div class="img-item">

                        <image src="./assets/img/p1.png" mode="aspectFill" alt="" onclick="showImg()"></image>
                    </div>
                    <div class="img-item">

                        <image src="./assets/img/p1.png" mode="aspectFill" alt="" onclick="showImg()"></image>
                    </div>
                    <div class="img-item">

                        <image src="./assets/img/p1.png" mode="aspectFill" alt="" onclick="showImg()"></image>
                    </div>
                    

                </div>




                </div>

             </div>
        </div>

        <div class="card-view">
            <div class="card-list">
                <div class="card-item">
                    <div class="card-header">
                        <div class="card-title">Cammers</div>
                    </div>
                    <div class="card-info">
                        <div class="info-title">
                            Camera Views
                        </div>

                        <div class="info-btn-list">
                            <div class="btn-item btn-s"  id="AutoRotate" >default</div>
                            <div class="btn-item btn-p"  id="Camera_Front" >font</div>
                            <div class="btn-item btn-i"  id="Camera_Left" >left</div>
                            <div class="btn-item btn-i"  id="Camera_Top" >top</div>
                            
                        </div>

                        <div class="info-remark">
                            These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views
                        </div>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-header">
                        <div class="card-title">Cammers</div>
                    </div>
                    <div class="card-info">
                        <div class="info-title">
                            Camera Views
                        </div>

                        <div class="info-btn-list">
                            <div class="btn-item btn-s">default</div>
                            <div class="btn-item btn-p">font</div>
                            <div class="btn-item btn-i">left</div>
                            <div class="btn-item btn-i">top</div>
                            
                        </div>

                        <div class="info-remark">
                            These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views
                        </div>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-header">
                        <div class="card-title">Cammers</div>
                    </div>
                    <div class="card-info">
                        <div class="info-title">
                            Camera Views
                        </div>

                        <div class="info-btn-list">
                            <div class="btn-item btn-s">default</div>
                            <div class="btn-item btn-p">font</div>
                            <div class="btn-item btn-i">left</div>
                            <div class="btn-item btn-i">top</div>
                            
                        </div>

                        <div class="info-remark">
                            These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views
                        </div>
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
<script>
</script>