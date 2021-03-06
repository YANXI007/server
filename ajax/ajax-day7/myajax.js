(function() {
    var myajax = window.myajax = {};
   
    // 假如是get请求    {"age":18,"name":"zs"}
    myajax.get = function(URL,queryJSON,callback) {
          
        var xhr = null;
        if(window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4) {
                if(xhr.status>=200 && xhr.status<300 || xhr.status==304) {
                    callback(null,xhr.responseText);
                } else {
                    callback(new Error("请求失败"),undefined);
                }
            }
        }
        // json格式转成"k=v&k=v"
        var querystring = myajax.queryjson2querystring(queryJSON);
        xhr.open("get",URL+"?"+querystring,true);
        xhr.send(null);
    }

    // 
    myajax.post = function(URL,queryJSON,callback) {
        // 创建xhr对象 解决兼容问题
        var xhr = null;
        if(window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4) {
                if(xhr.status>=200 && xhr.status<300 || xhr.status==304) {
                    callback(null,xhr.responseText);
                } else {
                    callback(new Error("请求失败"),undefined);
                }
            }
        }
        // 把json格式的数据变成字符串
        var querystring = myajax.queryjson2querystring(queryJSON);
        // 配置
        xhr.open("post",URL,true);
        // 发送
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send(querystring);
    }
    
    // 函数功能 json格式转成"k=v&k=v"
    myajax.queryjson2querystring = function(json) {
         var str = "";
         for(var k in json) {
             str+=(k+"="+json[k]+"&");
         }
         // 去掉字符串最后一个&符号
         
         str = str.substr(0,str.length-1);
         return str;
         //console.log(typeof str);
    }
})();