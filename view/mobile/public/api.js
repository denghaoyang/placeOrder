var path = "/order/api/public/";
var result;

function getWindowList(){
    $.ajax({type:"get",url:path+"api/order/getWindowList",async: false,success:function(d){
            result = d;
    }});
    return result;
}

function getWindowSize(windowName){
    $.ajax({type:"get",url:path+"api/order/getWindowSize",data:{"windowName":windowName},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getWindowAttr(windowName){
    $.ajax({type:"get",url:path+"api/order/getWindowAttr",data:{"windowName":windowName},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getWindowCode(windowName,windowSize){
    $.ajax({type:"get",url:path+"api/order/getWindowCode",data:{name:windowName,size:windowSize},async: false,success:function(d){
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