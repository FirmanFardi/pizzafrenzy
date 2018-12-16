<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
$this->layout = false;
?>

<?= $this->Html->css('material-compiled.css') ?>
<?= $this->Html->css('all.css') ?>



<html>
    <div   style="margin-top:75px" style="width:100%;">
  <div class="row" style="height: 30px" style="width:100%;">
    <div class="col-12 col-sm-1 col-md-8" style="background:#304ffe ;" style="width:100%;">
      
    </div>
    <div class="col-6 col-md-4" style="background:#d50000 ;">
      .
    </div>
  </div>
</div>
<body class="hidden-sn mdb-skin" >
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


<br>
<br>

<div class="container">
    	<!-- Section: Blog v.1 -->
<section class="my-5">

  <!-- Section heading -->
  <center><h2><span class="badge badge-primary">APPLICATION PROGRAMMING INTERFACE  <i class="fa fa-desktop" aria-hidden="true"></i></span></h2></center>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto mb-5"></p>

  <br>
  <br>
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <?php echo $this->Html->image('users.jpg', ['alt' => 'CakePHP',
 		'width'=>'300px','height'=>'230px']);
 		?>
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="green-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-users" aria-hidden="true"></i>  USERS</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>SUMMARY</strong></h3>
      <!-- Excerpt -->
      <p>
      Our table consist of 9 columns. 
  User table have 2 roles. Each roles assign 1 if the user is an Admin and 2 if the user is the customer. Others details such as phone, email and address also included. Of course Username and Password needed for user login.</p>
      <!-- Post data -->
      
      <!-- Read more button -->
      <p class="green-text">localhost:3030/users</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-tag" aria-hidden="true"></i>   PRODUCTS</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>SUMMARY</strong></h3>
      <!-- Excerpt -->
      <p>Table products consist of 5 column. This is where admin add their new pizza menu. The pizza will included name, price, description and topping</p>
      <!-- Post data -->
      
      <!-- Read more button -->
      <p class="pink-text">localhost:3030/products</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <?php echo $this->Html->image('pizza.png', ['alt' => 'CakePHP',
 		'width'=>'500x','height'=>'230px','margin-left'=>'10px']);
 		?>
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <?php echo $this->Html->image('card.jpg', ['alt' => 'CakePHP',
 		'width'=>'500px','height'=>'230px']);
 		?>
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="indigo-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-money" aria-hidden="true"></i> PAYMENTS</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>SUMMARY</strong></h3>
      <!-- Excerpt -->
      <p>Table Payments consist of 2 column. Customers will decide to Pay with Cash or Card in paymethod column </p>
      <!-- Post data -->
      
      <p class="blue-text">localhost:3030/payments</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

 <hr class="my-5">
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-motorcycle" aria-hidden="true"></i> ORDERS</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>SUMMARY</strong></h3>
      <!-- Excerpt -->
      <p>Table orders consist of 8 columns. The table hold 3 foreign key from users, products and payments. Table order also hold the information where customer pick their quantity and crust type and address for delivery. Lastly total price where it will calculate price accordin to its quantity   </p>
      <!-- Post data -->
      
      <!-- Read more button -->
     <p class="pink-text">localhost:3030/orders</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <?php echo $this->Html->image('order.jpg', ['alt' => 'CakePHP',
 		'width'=>'300px','height'=>'230px']);
 		?>
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>



</section>
<!-- Section: Blog v.1 -->
    </div>




</html>



<?= $this->Html->css('material-compiled.css') ?>
<?= $this->Html->css('all.css') ?>