<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<style type="text/css">

    *{
      margin: 0;
      padding: 0;

    }
    #map {
      height: 400px;
      width: 70%;
    }
    .view {
    background: url("https://mdbootstrap.com/img/Photos/Others/img (42).jpg")no-repeat center center;
    background-size: cover;
}
@media (min-width: 768px) {
    .view {
        overflow: visible;
        margin-top: -56px;
    }
}
.navbar {
    z-index: 1;
}
.navbar {
    background-color: transparent;
}
.top-nav-collapse {
    background-color: #4285F4;
}
@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #4285F4;
    }
}

html,
body,
header,
.view {
  height: 100%;
}


</style>
<?= $this->Html->css('all.css') ?>
<!DOCTYPE html>
<html  class="full-height">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>


    <?= $this->Html->css('material-compiled.css') ?>

    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>



  <!--Double navigation-->
  <header>
    <!-- Sidebar navigation -->

    <!--Carousel Wrapper-->
    <div style="background-color: white;">
    <div class="container" >
<div  id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel"
style="margin-top:75px;">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="webroot/img/pizza3.png" alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="webroot/img/pizza1.png" alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="webroot/img/pizza2.png" alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>
</div>
<!--/.Carousel Wrapper-->
<body style="background-color:#f5f5f5;" class="hidden-sn mdb-skin">
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav   class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background-color:  #2E2E2E;">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        
            <?php
            echo $this->Html->link(
            $this->Html->image(('dominoo.png'),array('width'=>'50px')),
           ['controller' => 'Pages', 'action' => 'index', '_full' => true],
           ['escape' => false])


            ?>
        
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <h4 style="color:white;">Pizza Frenzy</h4>
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <?php if($session_user != null){ ?>
            <div class = "nav-link" ><?=$session_user['username'];?><img src="webroot/img/profile.png"  style="width:15px;" style="height:15px;"/> </div>
           <?php } else { ?>
           
                  <a href="users/add" class="nav-link" ><i ></i> <span class="clearfix d-none d-sm-inline-block">Sign up
            <img src="webroot/img/profile.png" style="width:15px;" style="height:15px;"/>
          </span></a>

           <?php } ?>
       

        </li>
                <li class="nav-item">
          <?php if($session_user == null){ ?>


        <?php echo 
        $this->Html->link('Sign in',['controller'=>'Users','action'=>'login'],['class'=>'nav-link']
      )
        ?>


        <?php } ?>
        </li>

        <li class="nav-item">

          <?php if($session_user != null){ ?>
          <a href="products/list" class="nav-link"><i ></i> <span class="clearfix d-none d-sm-inline-block">Start order
            <img src="webroot/img/haha.png" style="width:25px;" style="height:25px;"</span></a>
          <?php } ?>
        </li>
        <li class="nav-item">


        </li>

        <li class="nav-item">
          <?php if($session_user != null){ ?>


        <?php echo 
        $this->Html->link('Logout',['controller'=>'Users','action'=>'logout'],['class'=>'nav-link']
      )
        ?>


        <?php } ?>
        </li>
        <li class="nav-item">


        </li>
      </ul>
    </nav>
    <!-- /.Navbar -->
  </header>
  <!--/.Double navigation-->

  <!--Main Layout-->

  <!--Main Layout-->
        <!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




</body>
<!--picture-->
  <div class="container" style="margin-bottom: 100px;">
      <div class="row justify-content-center">
        <div class="col-5">
            <h4 bold  class="text-muted">OUR RECOMMENDATIONS</h4>
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="webroot/img/r1.jpg" alt="First slide"
                    style="height:250px;width:300px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="webroot/img/r2.jpg" alt="Second slide"
                    style="height:250px;width:300px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="webroot/img/r3.jpg" alt="Third slide"
                    style="height:250px;width:300px;">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

        </div>
        <div class="col-5">
          <h4 bold class="text-muted">OUR NEW STORES</h4>
                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="webroot/img/s1.jpg" alt="First slide"
                    style="height:250px;width:300px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="webroot/img/s2.jpg" alt="Second slide"
                    style="height:250px;width:300px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="webroot/img/s3.jpg" alt="Third slide"
                    style="height:250px;width:300px;">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

        </div>
      </div>
      <br>
      <div class="row" style="margin-left:250px;">
          <div id="map" >
          </div>
      </div>
  </div>
<!--picture-->
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
               <h5 class="mb-1">          <?php echo $this->Html->link(
              'Sign up',
              ['controller' => 'Users', 'action' => 'add', '_full' => true]
               ); ?>
                         <?php echo
        $this->Html->link('API',['controller'=>'Api','action'=>'index'],['class'=>'nav-link']
      )
        ?>
</h5>
        </li>
      </ul>
      <!-- Call to action -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/">For Study Purpose Only</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</html>
<?= $this->Html->script('material-compiled.js') ?>
<script type="text/javascript">


   $(document).ready(function() {
            $('.mdb-select').material_select();
                // SideNav Button Initialization
$(".button-collapse").sideNav();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);
        })
      </script>
<script>
   function initMap()
   {
    var location ={lat: 5.939022, lng: 116.100953};
    var map = new google.maps.Map(document.getElementById("map"),{
      zoom: 12,
      center: location
    });
    var marker = new google.maps.Marker({
      position: location,
      map: map
   });
  }
   

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSUcDK6YrLH2d3OFdFEQk4QfpYPOIxLy4&callback=initMap">

</script>

