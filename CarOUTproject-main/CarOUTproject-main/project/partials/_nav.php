<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
  $loggedin = true;

}else{
    $loggedin = false;
}





echo '<nav class="navbar navbar-expand-lg navbar-light" style="background: #FDF1E5;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login-reg/welcome.php">Home</a>
                </li>';
                
                if(!$loggedin){
                     echo '<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login-reg/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login-reg/signup.php">Sign Up</a>
                </li>';
                }
                
                
              
if ($loggedin) {
   echo ' <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login-reg/logout.php">Log Out</a>
                </li>';
}


               
                
           echo '</ul>
            
        </div>
    </div>
</nav>';
                    
                    
                    
                    
                    
                    
                    ?>