<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
$this->layout = false;
?>
<style type="text/css">
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
<?= $this->Html->css('material-compiled.css') ?>
<?= $this->Html->css('all.css') ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<!--header-->
    <div   style="margin-top:75px" style="width:100%;">
  <div class="row" style="height: 30px" style="width:100%;">
    <div class="col-12 col-sm-1 col-md-8" style="background:#304ffe ;" style="width:100%;">
      
    </div>
    <div class="col-6 col-md-4" style="background:#d50000 ;">
      .
    </div>
  </div>
</div>
<body class="hidden-sn mdb-skin">
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
      <div class="breadcrumb-dn mr-auto" >
        <h4 style="color:white;">Pizza Frenzy</h4>
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
       
                <li class="nav-item">
          <?php if($session_user != null){ ?>
            <div class = "nav-link" ><?=$session_user['username'];?><?php
            echo $this->Html->image(('profile.png'),array('width'=>'15px','height'=>'15px'));
            ?> </div>
           <?php } else { ?>
           
                  <a href="users/add" class="nav-link" ><i ></i> <span class="clearfix d-none d-sm-inline-block">Sign up
                          <?php
            echo $this->Html->image(('profile.png'),array('width'=>'15px','height'=>'15px'));
            ?>
          </span></a>

           <?php } ?>
       

        </li>
        <li class="" style="color: black;">
            
        </li>
        <li class="nav-item">


        </li>

                <li class="nav-item">

        <?php echo 
        $this->Html->link('Logout',['controller'=>'Users','action'=>'logout'],['class'=>'nav-link']
      )
        ?>


        </li>
      </ul>
    </nav>
    <!--header-->

    <!-- /.Navbar -->
  <!--form-->
  <div class="container" style="margin-top:50px">
                        <center>
 <h2><span class="badge badge-primary">CONFIRM ORDER <i class="fa fa-dollar" aria-hidden="true"></i></span></h2>
                    </center>

    <div class="row" style="margin-top:30px;">

        <div class="col-md-6 "  style="background-color:#263238;">

            <div style="margin-left:20px;">
             <h3 style="margin-top:50px;color:white;">
             <small >PAY</small>
            </h3>
         
            <br>
            <h5 style="color:white;">
            <?php
       echo "Pizza       : ".$_SESSION['pname'];
       echo "<br>";
       echo 'Crust       : '.$_SESSION['crust'];
       echo "<br>";
       echo "Price       : RM".$_SESSION['pprice'];
       echo "<br>";
       echo "Quantity    : ".$_SESSION['quantity'];
       echo "<br>";
       echo "<br>";?>
       <hr style="border-color:white;">
       <?php echo "Grand Total : RM".($_SESSION['quantity']*$_SESSION['pprice']);
       echo "<br>"; ?>
       <br>

</h5>
        </div>
           

        </div>
        
        <div class="col-md-6" style="background-color:#f5f5f5;">

            <div style="margin-left:20px;">
             <h3 style="margin-top:50px;">
             <small class="text-muted">PAYMENT METHOD</small>
            </h3>
            <br>
            <h3><?php echo $_SESSION['paymethod']?></h3>
                    
        </div>

        </div>
    </div>
    <?= $this->Form->create($order) ?>
    <div class="row" style="margin-top:30px;">
        <div class="col-md-6"  style="background-color:#f5f5f5;">

            <div style="margin-left:20px;">
             <h3 style="margin-top:50px;">
             <small  class="text-muted">ORDER ADDRESS</small>
            </h3>
            <?php echo $this->Form->control('oaddress',array("placeholder"=>"Address",'label'=>'')); ?>
        </div>

        </div>
        <div class="col-md-6" style="background-color:#f5f5f5;">

            <div style="margin-left:20px;">
             <h3 style="margin-top:50px";>
             <small class="text-muted">CONFIRM ORDER</small>
            </h3>

        </div>
                <?= $this->Form->button(__('Confirm')) ?>
    <?= $this->Form->end() ?>

        </div>
    </div>
        
</div>

</body>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4" style="margin-top:200px;">

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

   $('#input_starttime').pickatime({
    // Light or Dark theme
    twelvehour: true,
    darktheme: true
});

   $(document).ready(function() {
            $('.mdb-select').material_select();
                // SideNav Button Initialization
        })



   
</script>