var retMessage = document.getElementById("return_message");
var submitBtn = document.getElementById("submit");
var form = document.getElementById("form");
var x  = document.getElementById("x");
var y  = document.getElementById("y");
submitBtn.onclick = function () {
    this.disabled = true;
    var xmlhttp = getXmlHttpObject();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4) document.getElementById("return_message").innerHTML = this.responseText;
    };
    console.log("http://bulletin.any.com.vn/test.php?x="+x.value +
        "&y=" + y.value);
    xmlhttp.open("GET", "http://bulletin.any.com.vn/test.php?x="+x.value +
        "&y=" + y.value, true);
    xmlhttp.send(null)
};

//Lay doi tuong Ajax Engine
function getXmlHttpObject() {
    var xmlHttp = null;
    try {
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        try  {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                return null;
            }
        }
    }
    return xmlHttp;
}
