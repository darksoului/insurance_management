<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
		<link href = "../style.css" type = "text/css" rel = "stylesheet" />
        <style>body {  
  color: Black;  
  font-size: 20px;  
  font-family: Verdana, Arial, Helvetica, monospace;  
  background: #88ABFF;
} </style>
		<ul>
			<li style="float:right;"><a href="../insurance.php"> Back to homepage</a></li>
		</ul>
		<h2>Customer</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
                <div class = "form_group">    
                    <label>First Name:</label>   <input type = "text" name = "First_Name" value = "" required />       
                </div>     
                <div class = "form_group">    
                    <label>Last Name:</label>    <input type = "text" name = "Last_Name" value = "" required />  
                </div>  
		    <div class = "form_group">    
                    <label>Gender:	</label><input type = "radio" name = "Gender" value = "M" required />Male<input type = "radio" name = "Gender" value = "F" required />Female
                </div>
		    <div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value = "" required />
                </div>
		    <div class = "form_group">    
                    <label>Father Name: </label>    <input type = "textbox" name = "Father_Name" value = ""  required />     
                </div>
		    <div class = "form_group">    
                    <label>Mother Name: </label>   <input type = "text" name = "Mother_Name" value = ""  required /> 
                </div>
		     <div class = "form_group">    
                    <label>Address:</label>    <input type = "text" name = "Address" value = "" required />    
                </div>
		    <div class = "form_group">    
                    <label>Contact Number: </label>    <input type = "text" name = "Contact_Number" value = ""  required pattern="[0-9]{10}" />   
                </div>
		    <div class = "form_group">    
                    <label>Marital Status: </label>   <input type = "radio" name = "Marital_Status" value = "S" required />Single	  
                     <input type = "radio" name = "Marital_Status" value = "M" required/>Married    
                </div>
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
            </div>    
        </form>    
    </body>    
</html>    