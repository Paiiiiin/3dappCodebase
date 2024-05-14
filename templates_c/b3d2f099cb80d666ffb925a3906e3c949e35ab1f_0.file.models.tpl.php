<?php
/* Smarty version 4.3.4, created on 2024-05-14 22:47:11
  from 'H:\xuanji\3dtest\templates\models.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6643796f687627_81023139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3d2f099cb80d666ffb925a3906e3c949e35ab1f' => 
    array (
      0 => 'H:\\xuanji\\3dtest\\templates\\models.tpl',
      1 => 1715698029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6643796f687627_81023139 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                       

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['models']->value, 'vo', false, 'k');
$_smarty_tpl->tpl_vars['vo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->do_else = false;
?>

                             <div class="p-item" onclick="showModel(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</div>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          
                        </div>
                    </div>
                    <iframe id="modelFrame" src=".<?php echo $_smarty_tpl->tpl_vars['models']->value[0]['url'];?>
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
<?php echo '<script'; ?>
 type="text/javascript">
 
    function openContact(){
        layer.open({
        title: 'Assignment Contact'
        ,content: ' Email：cf344@sussex.ac.uk',
         btn: ['Close' ]
        ,yes: function(index, layero){
            
            layer.closeAll();
        }
        
 
        });  
    }

    function showModel(index){
        console.log(index)
        let list = '<?php echo $_smarty_tpl->tpl_vars['js_models']->value;?>
';
        list = JSON.parse(list)

        console.log(list)
        // 获取iframe元素
        var iframe = document.getElementById('modelFrame');
        // 设置新的地址
        iframe.src = '.'+list[index].url

        document.getElementById('top-title').textContent = list[index].remark;
    }

    function showImg(){
        layer.photos({
        photos: {
          "title": "Photos Demo",
          "start": 0,
          "data": [
            {
              "alt": "layer",
              "pid": 1,
              "src": "./assets/img/p1.png",
            },
            
          ]
        }
      });
    }

<?php echo '</script'; ?>
><?php }
}
