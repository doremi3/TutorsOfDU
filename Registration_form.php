<?php

	session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form onsubmit = "check_validity()" action="registered.php">
       
            Userame:<br>
            <input type="text" name="username" id="username" required ><br>
			<p id="username_validity"></p>
            Email:<br>
            <input type="email" name="email" id="email" required><br>
			<p id="email_validity"></p>
            Name:<br>
            <input type="text" name="name" id = "name" required><br>
            <p id="name_validity"></p>
            Password:<br>
            <input type="password" name="password" id="password" required><br>
            <p id="password_validity"></p>
            Phone:<br>
            <input type="tel" name="phone" id = "phone">
            <select name = "phone_privacy">
				<!--<option value=""></option>-->
                <option value=0 selected="selected">Only me</option>
                <option value=1 >Everyone</option>
            </select><br>
            
            Do you want to join as a tutor?<br>
            <input type ="radio" name="user_type" value=1>Yes<br>
            <input type ="radio" name="user_type" value=0 checked="true">No<br>
            <input type="file" name="photo" accept="image/*">
            <input type="submit" value="Submit">
  
		</form>
		<script type ="text/javascript">
		
                
                function check_validity()
                {
                    var error=false;
                    var username = document.getElementById("username");
                    var email = document.getElementById("email");
                    var name = document.getElementById("name");
                    var password = document.getElementById("password");
                    var phone = document.getElementById("phone");
                    if(username.value.length > 15){
                        error=true;
                        document.getElementById("username_validity").innerHTML = "Length of username cannot be greater than 15 ";
                    }
                    if(email.value.length>50){
                        error=true;
                        document.getElementById("email_validity").innerHTML = "Email is too long.";
                    }
                   
                    if(password.value.length > 20){
                        error=true;
                        document.getElementById("password_validity").innerHTML = "Length of password cannot be greater than 20 ";
                    }
                     if(name.value.length >50){
                        error=true;
                        document.getElementById("name_validity").innerHTML = "Length of name cannot be greater than 50 ";
                    }
                    
                       
                    if(error==false)
                    {
                        if(check_unique()==true)
                            window.location.href = "registered.php";
                    }
                }
		function check_unique() 
		{		
		
			var username_response = username_validate();
			var email_response = email_validate();
			
			if(username_response == "" && email_response =="")	
			{
				register_user();
				return true;				
			}
			else
				return false;
					
			
		}

		function register_user()
		{
			var username = document.getElementById("username");
			var email = document.getElementById("email");
			var name = document.getElementById("name");
			var password = document.getElementById("password");
			var phone = document.getElementById("phone");
			var xhttp = new XMLHttpRequest();
			var url="do_register.php";
			var params = "username="+username.value+"&email="+email.value+"&name="+name.value+"&password="+password.value+"&phone="+phone.value;
			xhttp.open("POST",url,false);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.setRequestHeader("Content-length", params.length);
			xhttp.setRequestHeader("Connection", "close");
			xhttp.onreadystatechange = function()
			{
				if(this.readyState==4 && this.status ==200)
				{					
					response =xhttp.responseText;
				}
			}
			
			
			xhttp.send(params);											
			
		}
		
		function username_validate() 
		{
			
			var inpObj = document.getElementById("username");
			var xhttp = new XMLHttpRequest();
			var response;
			var url="username_validation.php";
			var params = "username="+inpObj.value;
			xhttp.open("POST",url,false);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.setRequestHeader("Content-length", params.length);
			xhttp.setRequestHeader("Connection", "close");
			xhttp.onreadystatechange = function()
			{
				if(this.readyState==4 && this.status ==200)
				{					
					response =xhttp.responseText;
					document.getElementById("username_validity").innerHTML = response;	
					
				}
			}
			
			
			xhttp.send(params);											
			return response;
		} 
		
		function email_validate() 
		{
			
			var inpObj = document.getElementById("email");
			var xhttp = new XMLHttpRequest();
			var response;
			var url="email_validation.php";
			var params = "email="+inpObj.value;
			xhttp.open("POST",url,false);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.setRequestHeader("Content-length", params.length);
			xhttp.setRequestHeader("Connection", "close");
			xhttp.onreadystatechange = function()
			{
				if(this.readyState==4 && this.status ==200)
				{					
					response =xhttp.responseText;
					document.getElementById("email_validity").innerHTML = response;	
					
				}
			}
			
			
			xhttp.send(params);											
			return response;
		} 
		
		

		</script>
		
    </body>
</html>

