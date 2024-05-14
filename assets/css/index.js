
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
    let list = [
        {name:'1_prpsi' , remark:'1_pepsiMax X3D Model' , url:'/assets/models/1_pepsi/index.html'},
        {name:'1_pepsiMax' , remark:'1_pepsiMax X3D Model' , url:'/assets/models/1_pepsiMax/index.html'}
    ]
    

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
 