<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>button</title>
</head>
<body>
<button id="btn1" onclick="btnclick()"> show password</button>

 <b><p>Click on the button to hide the password: </p></b>
  
 <b>Password</b>: <input type="text" id="typepass"> 
  
 <button id="btn2" onclick="alert()">show password</button> 
<div id="txt1">
	
</div>
		</body>
            <script type="text/javascript">
            function btnclick(){
                var div1=document.getElementById("txt1");
                div1.innerHTML="buttonclicked";
                div1.style.color="red";
                }


                    // Change the type of input to password or text
        function alert() {
            var temp = document.getElementById("typepass");
            if (temp.type === "password") {
                temp.type = "text";
                btn2.textContent="hide password"
                
            }
            else {
                temp.type = "password";
                 btn2.textContent="show password"

            }
        }
            </script>
		</html>
























