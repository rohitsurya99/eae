
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
              <div class="site-logo">
		
			<img src="images/headerlogo.png" height="100px">
               
            </div>
        
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="profile.php" class="nav-link active">Home</a></li>
                  <li><a href="promote.php" class="nav-link">Promotion</a></li>
				     <li><a href="Logout.php" > <?php echo $_SESSION['email'];?>-Logout </a></li>
                  <li><a href="editpost.php" class="btn btn-sm btn-warning"> &nbsp; My Post  &nbsp;</a></li>
               
                 </ul>
              </nav>
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    <!-- heading -->  
    </header>