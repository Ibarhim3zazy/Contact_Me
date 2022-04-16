function success() {
	document.getElementById('success-msg').style.display = "none";
}
function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function sending_message(){
  if (document.getElementById('name').value.trim() != "" &&
      document.getElementById('phone').value.trim() != "" &&
      document.getElementById('mail').value.trim() != "" &&
      document.getElementById('message').value.trim() != ""
      ){
      let name = document.getElementById("name").value.trim();
      let mail = document.getElementById("mail").value.trim();
      let phone = document.getElementById("phone").value.trim();
			let message = document.getElementById("message").value.trim();
      url="sending_message_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
          if (xmlhttp.responseText.trim() == "message successfully sent") {
            document.getElementById('success-msg').style.display = "block";
            setTimeout(function(){
              window.location.href = "../Contact_Me/index.php";
            }
            , 3000);
          }else {
          	alert(xmlhttp.responseText.trim());
          }
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.setRequestHeader("Connection", "close");
      xmlhttp.send("name="+name+"&mail="+mail+"&phone="+phone+"&message="+message);
  };
};
