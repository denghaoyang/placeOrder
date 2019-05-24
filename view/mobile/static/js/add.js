$(function () {
    var windowArray = [];
    //ul-li 数据初始化
    var windowList = getWindowList();
    $.each(windowList,function (i,val) {
        var imgPath = (val.src)?val.src:'/img/pic.png';
        var windowHtml = '<li><div class="menu-img"><img src="./static'+imgPath+'" width="55" height="55"></div><div class="menu-txt"><h4 data-icon="00" value="'+val.value+'">'+val.title+'</h4>' +
            '<div class="btn"><button class="minus"><strong></strong></button><i>0</i><button class="add"><strong></strong></button></div></div></li>';
        $(".window-con"+val.type+" ul").append(windowHtml);
    });

    //加的效果
    $("#left li:first-child").addClass("active");
    var e;

    //绑定添加按钮时间
    $(".add").click(function(){
        //清除尺寸与属性信息
        $(".size-chose dd").remove();
        $(".attr-chose dd").remove();

        var parent = $(this).parent();
        var name= parent.parent().children("h4").text()
        var src = $(this).parent().parent().prev().children()[0].src;
        var n = $(this).prev().text();
        var alias = parent.parent().children("h4").attr("value");

        //添加尺寸与属性信息
        var windowSizeList = getWindowSize(name);
        var windowAttrList = getWindowAttr(name);
        $.each(windowSizeList,function (i,val) {
            $(".size-chose").append("<dd value='"+val.value+"'>"+val.title+"</dd>");
        });
        $.each(windowAttrList,function (i,val) {
            $(".attr-chose").append("<dd value='"+val.value+"'>"+val.title+"</dd>");
        });

        //动态追加绑定事件
        $(".subChose").on("click","dd",function(){
            $(this).addClass("m-active").siblings().removeClass("m-active");
            $(".choseValue").text($(".subChose .m-active").text());
        })

        $(".subFly").show();
        var num;
        if(n==0){
            num =1
        }else{
            num = parseFloat(n);
        }
        $(".weui-count__number").val(num);
        e = $(this).prev();

        $(".subName dd p:nth-child(1)").html(name);
        $(".subName dd p:nth-child(1)").attr("value",alias);
        $(".imgPhoto").attr('src',src);
        var dataIcon=$(this).parent().parent().children("h4").attr("data-icon");
        $(".subName dd p:first-child").attr("data-icon",dataIcon)

        //判断是否有缓存历史数据
        var windowItem;
        if (windowArray.some(function(item){windowItem = item;return item.name==name;})){
            //设置购买数量
            $(".weui-count__number").val(windowItem.num);
            //设置选中属性
            $(".choseValue").text(windowItem.size);
            $(".size-chose dd[value='"+windowItem.sizeAlias+"']").addClass("m-active");
            $(".attr-chose dd[value='"+windowItem.attribute+"']").addClass("m-active");
        }

        //设置已选属性与尺寸
        $(".choseValue").text($(".size-chose .m-active").text()+$(".attr-chose .m-active").text());
    });

    $(".minus").click(function (){
        $('.shopcart-list').show();

    });
    $("#btnselect").click(function (){
        if($(this).hasClass("disable")){
            return;
        }else{
            location.href="./identify.html";
        }
    });
    $(".ad").click(function () {
        var n = parseFloat($(this).prev().text())+1;
           if (n == 0) { return; }
        $(this).prev().text(n);
        var nm = $("#totalcountshow").html();//获取数量
	
        $("#totalcountshow").html(nm*1+1);
    });

    $(".up").click(function(){
        $(".subFly").hide();
    });

    //加入购物车事件绑定
    $(".foot").click(function () {
        var n = $('.subCount .weui-count__number').val();
        console.log(n);
        var name = $(".subName dd:nth-child(2) p:nth-child(1)").text();//窗户名称
        var nameAlias = $(".subName dd:nth-child(2) p:nth-child(1)").attr("value")//名字简称
        var sizeAias = $(".subChose .m-active").attr("value");//尺寸简称
        var size = $(".size-chose .m-active").html();//尺寸
        var attribute = $(".attr-chose .m-active").html();//属性
        //判断是否勾选尺寸与属性
        if(!$(".subChose dd").hasClass("m-active")){
            $.toptip('请选择尺寸','error');
            return;
        }
        var nm = $("#totalcountshow").html();//获取数量
        $(".subFly").hide();
        e.text(n);
        if(n!=0){
            e.css("display","inline-block");
            // e.prev().css("display","inline-block")
        }

        // var sum = parseFloat($(".subName dd p:nth-child(2) span:nth-child(2)").text())*acount;
        // var dataIconN = $(this).parent().children(".subName").children("dd").children("p:first-child").attr("data-icon")
        // add(data);

        //插入缓存数据
        //判断是新增还是更新
        var key = 0;
        if(windowArray.some(function (item,index) {
            key=index;
            return (item.name == name)&&(item.size==size)&&(item.attribute==attribute);
        })){
            if (windowArray.length>1){
                windowArray = windowArray.splice(key,1);
            } else{
                windowArray = [];
            }
            windowArray.push({"name":name,"alias":nameAlias,"size":size,"sizeAlias":sizeAias,"num":n,"attribute":attribute});
            //如果同一名称下的产品调转数组顺序
            windowArray.reverse();
        }else{
            windowArray.push({"name":name,"alias":nameAlias,"size":size,"sizeAlias":sizeAias,"num":n,"attribute":attribute});
            $("#totalcountshow").html(nm*1+1);
            windowArray.reverse();
        }
        jss();//  改变按钮样式
    });

    function jss() {
        var m = $("#totalcountshow").text();
        if (m > 0) {
            $(".right").find("a").removeClass("disable");
        } else {
            $(".right").find("a").addClass("disable");
        }
    };

    //选项卡
    $(".con>div").hide();
    $(".con>div:eq(0)").show();
    $(".left-menu li").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        var n = $(".left-menu li").index(this);
        console.log(n);
        $(".left-menu li").index(this);
        $(".con>div").hide();
        $(".con>div:eq("+n+")").show();
    });
    $(".subFly").hide();
    $(".close").click(function(){
        $(".subFly").hide();
    });

    $(".footer>.left").click(function(){
        $(".list-content>ul").empty();
        var num = $("#totalcountshow").text();
        if(num>0){
            $(".up1").toggle();
            $(".shopcart-list.fold-transition").toggle();
            $.each(windowArray,function(k,i){
                $(".list-content>ul").append( '<li class="food"><div><span class="nameAlias" >'+i.alias+'</span><span class="sizeAlias">'+i.sizeAlias+'</span><span class="attrAlias">'+i.attribute+'</span></div>' +
                    '<div class="btn weui-count"><a class="weui-count__btn weui-count__decrease decrease" style="margin-right: 10px"></a> <input class="number weui-count__number" type="number" value="'+i.num+'"> <a class="weui-count__btn weui-count__increase increase" style="margin-left: 10px"></a> </div>');
            });
            //重新绑定事件
            var MIN = 1;

            //加减按钮的事件绑定
            $('.decrease').on("click",function (e) {
                var $input = $(e.currentTarget).parent().find('.number');
                var nameAlias = $(e.currentTarget).parent().parent().find('.nameAlias').text();
                var sizeAlias = $(e.currentTarget).parent().parent().find('.sizeAlias').text();
                var number = parseInt($input.val() || "0") - 1;

                if (number < MIN){
                    number = MIN;
                }
                $input.val(number);

                //修改缓存中的数据
                freshWindowArray(nameAlias,sizeAlias,number);
            });
            $('.increase').on("click",function (e) {
                var $input = $(e.currentTarget).parent().find('.number');
                var nameAlias = $(e.currentTarget).parent().parent().find('.nameAlias').text();
                var sizeAlias = $(e.currentTarget).parent().parent().find('.sizeAlias').text();
                var number = parseInt($input.val() || "0") + 1;
                $input.val(number);

                //修改缓存中的数据
                freshWindowArray(nameAlias,sizeAlias,number);
            })

            var key;
            function freshWindowArray(nameAlias,sizeAlias,value){
                //修改列表面板的数值
                $("h4[value='"+nameAlias+"']").next().find("i").text(value);
                if(windowArray.some(function (item,index) {
                    key=index;
                    return (item.alias == nameAlias)&&(item.sizeAlias==sizeAlias);
                })){
                    windowArray[key].num = value;
                }
            }
        }
    });
	/*  wk ADD  */
	$(".chg-shopcart-head .ydmenu").click(function(){
        var content = $(".list-content>ul").html();
        if(content!=""){
            $(".shopcart-list.fold-transition").toggle();
            $(".up1").toggle();
        }
    });
	/*  wk ADD  */
    $(".up1").click(function(){
        $(".up1").hide();
        $(".shopcart-list.fold-transition").hide();
    })
    $(".empty").click(function(){
        $(".list-content>ul").html("");
        $("#totalcountshow").text("0");
        $("#totalpriceshow").text("0");
        $(".minus").next().text("0");
        $(".minus").hide();
        $(".minus").next().hide();
        $(".shopcart-list").hide();
        $(".up1").hide();
        jss();//改变按钮样式
    });

    var MIN = 1;
    //加减按钮的事件绑定
    $('.weui-count__decrease').click(function (e) {
        var $input = $(e.currentTarget).parent().find('.weui-count__number');
        var number = parseInt($input.val() || "0") - 1;
        if (number < MIN){
            number = MIN;
        }
        $input.val(number)
    })
    $('.weui-count__increase').click(function (e) {
        var $input = $(e.currentTarget).parent().find('.weui-count__number');
        var number = parseInt($input.val() || "0") + 1;
        $input.val(number)
    })
});
