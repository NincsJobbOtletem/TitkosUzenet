<html>

<head>
    <title>Webfejlesztés beadandó Szabó Patrik</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>

<?php

include 'hasher.php'; //includáljuk a BexBack.php-t
    

        if(isset($_GET["username"])&&isset($_GET["password"])){//GET el átadjuk a fn és a jelszót a változónak.
            $username=$_GET["username"];
            $password=$_GET["password"];
            $expireklick=$_GET["expireklick"];   
            echo hash('ripemd160',$username);
        }

    ?>  
    <h2>Please Log in</h2>
        <div class="loginform">
            
		<form  action="index.php" method="GET">
                <label>
                <b>secret:
                </label>
                </b> 
				<input type="text" name="username" placeholder="irj be az üzenetet"/>	
                <br></br> 
                <label><b>expireAfterViews:     
                </b>    
                </label>
                <input type="text" name="password" placeholder="ird be a katintást utáni lejárást"/>
                <br></br>
                <label><b>expireAfter:</label>
                <input type="text" name="expireklick" placeholder="ird be a mikor jar le IDő"/>
                <br></br> 
			    <input type="submit" type="submit" value="Get" id="submit"/>

		
        </div>
            

   
</body>

</html>
