var path;
var viewPath;
var result;
$.ajax({
    async: false,
    url: "./public/config.json",
    type: 'GET',
    dataType: 'json',
}).done(function(data) {
    path = data.url;
    viewPath = data.viewUrl;
});

function getDepartmentList(){
    $.ajax({type:"get",url:path+"customer/index/getDepartmentList",async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getUserList(departmentId){
    $.ajax({type:"get",url:path+"customer/index/getUserList",data:{"departmentId":departmentId},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getUserInfo(userId){
    $.ajax({type:"get",url:path+"customer/index/getUserInfo",data:{"userId":userId},async: false,success:function(d){
            result = d;
        }});
    return result;
}

function updateUser(data){
    $.ajax({type:"post",url:path+"customer/index/updateUser",data:data,async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getTrainList(){
    $.ajax({type:"get",url:path+"customer/index/getTrainList",async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getMailList(){
    $.ajax({type:"get",url:path+"customer/index/getMailList",async: false,success:function(d){
            result = d;
        }});
    return result;
}

function addTrain(data){
    $.ajax({type:"post",url:path+"customer/index/addTrain",data:data,async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getTrainInfo(trainId){
    $.ajax({type:"get",url:path+"customer/index/getTrain?trainId="+trainId,async: false,success:function(d){
            result = d;
        }});
    return result;
}

function getTrainListByUserId(userId){
    $.ajax({type:"get",url:path+"customer/index/getTrainListByUserId?userId="+userId,async: false,success:function(d){
            result = d;
        }});
    return result;
}