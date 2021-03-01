<?php 

	session_start();

?>





<html>
<form method="POST" 
action="loginpage.php">
  <head>
     <h1> Log in form</h1>
  </head>  
<body>
<form>	
    <fieldset>
        <legend>Log in:</legend>
    
      
     <table>		
           <tr>		
               	
               <td>				
                  Enter your userId:			
               </td>			
                <td>				
                <input type="text" name="userId">	 
                </td>		
           </tr>



           <tr>		
               	
                   <td>				
                      Enter your password:			
                   </td>			
                    <td>				
                    <input type="password" name="password">	  		
                    </td>		
               </tr>

            <tr>



            <table>

<tr>		
     <button type="Login">Log In</button>	
                  


</tr>

<tr>		
     <button type="Logout">Log Out</button>	
                  


</tr>


            <?php 

		$_SESSION['userId'] = '';
		$_SESSION['password'] = "";

		echo "User Id is: " . $_SESSION['userId'];
		echo "<br>";
		echo "Password is: " . $_SESSION['password'];

		session_unset();
		session_destroy();

		/*echo "User Id is: " . $_SESSION['userId'];
		echo "<br>";
		echo "Password is: " . $_SESSION['password'];*/
	?>
</form>
</body>
</html>