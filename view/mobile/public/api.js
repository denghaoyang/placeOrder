var path;
var result;
$.ajax({
    async: false,
    url: "./public/config.json",
    type: 'GET',
    dataType: 'json',
}).done(function(data) {
    path = data.url;
});

function getWindowList(){
    $.ajax({type:"get",url:path+"api/order/getWindowList",async: false,success:function(d){
            result = d;
    }});
    return result;
}

function getWindowSize(windowId){
    $.ajax({type:"get",url:path+"api/order/getWindowSize",data:{"windowId":windowId},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getWindowAttr(windowId){
    $.ajax({type:"get",url:path+"api/order/getWindowAttr",data:{"windowId":windowId},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getWindowBoard(windowId){
    $.ajax({type:"get",url:path+"api/order/getWindowBoard",data:{"windowId":windowId},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getWindowCode(windowId,windowSize){
    $.ajax({type:"get",url:path+"api/order/getWindowCode",data:{type:windowId,size:windowSize},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function placeOrder(data){
    $.showLoading();
    $.post(path+"api/order/placeOrder",data,function(d){
        $.hideLoading();
        $.toast();
    });
}