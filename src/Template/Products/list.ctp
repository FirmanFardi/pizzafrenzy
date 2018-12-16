<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
//important to disable cakephp bootstrap so that u can apply md bootstrap
/*<?= $this->Form->create($user) ?>*/
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
        <!--<li class="nav-item">
          <a href="" class="nav-link" ><i ></i> <span class="clearfix d-none d-sm-inline-block">Sign up
                        <?php
            echo $this->Html->image(('profile.png'),array('width'=>'15px','height'=>'15px'));
            ?>
          </span></a>

        </li>-->
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

          <a href="" class="nav-link"><i ></i> <span class="clearfix d-none d-sm-inline-block"> Start order
          	                        <?php
            echo $this->Html->image(('haha.png'),array('width'=>'25px','height'=>'25px'));
            ?>
            </span></a>
            
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
    <!-- /.Navbar -->
  </header>
  <!--/.Double navigation-->

  <!--Main Layout-->
  <main>
    <div class="container-fluid mt-5">

      
    </div>
  </main>

  <!--Main Layout-->
 <div class="container">
 	<!--<hr style="width:500px;border-color:#2E2E2E;size:50px;" noshade>-->
 	<h1 class="pink-text pb-2 pt-1"><center>Pizza</center></h1>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<!--<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('pid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pprice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdescribe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ptopping') ?></th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->pid) ?></td>
                <td><?= h($product->pname) ?></td>
                <td><?= $this->Number->format($product->pprice) ?></td>
                <td><?= h($product->pdescribe) ?></td>
                <td><?= h($product->ptopping) ?></td>
                <td class="actions">
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>-->
<h2><span class="badge badge-primary">THIS MONTH SPECIAL ! <i class="fa fa-thumbs-up" aria-hidden="true"></i></span></h2>
<!-- Card Narrower -->
<div class="container">
<div class="row">
<?php foreach ($products as $product): ?>
<div class="col-md-3">
	<div class="card-wrapper">
	<div id="card-<?= $product->pid ?>" class="card card-rotating card-cascade narrower">

	  <!-- Card image -->
	   <div class="face front">
	  <div class="card-up" >
	
	    <?php
            echo $this->Html->image(('illu.png'),array('class'=>'card-img-top'));
          ?>
	    <a>
	      <div class="mask rgba-white-slight"></div>
	    </a>
	  </div>


	  <!-- Card content -->
	  <div class="card-body card-body-cascade">

	    <!-- Label -->
	    <h5 class="pink-text pb-2 pt-1"><i ></i><?= h($product->pname) ?></h5>
	    <h4 class="font-weight-bold card-title"><i class="fa fa-tags" aria-hidden="true"></i>RM  <?= $this->Number->format($product->pprice) ?></h4>
	    <p class="card-text">description // <?= h($product->pdescribe) ?></p>
	 	<p class="card-text">topping // <?= h($product->ptopping) ?></p>
	 	<a class="rotate-btn btn btn-unique"  data-card="card-<?= $product->pid ?>" >Order Me</a>
	  </div>
	</div>

	<div class="face back card" >
      <div class="card-body" >

        <!-- Content -->
        <h5 class="pink-text pb-2 pt-1"><i ></i><?= h($product->pname) ?></h5>
        <hr style="border-color: black; " noshade>

        


<?= $this->Form->create(null,['type'=>'POST','url'=> ['controller'=>'Products','action'=>'temp'],'class'=>'']) ?>
<?= $this->Form->hidden('pid',['value'=>$product->pid]) ?>
<?= $this->Form->hidden('pprice',['value'=>$product->pprice])?>
<?= $this->Form->hidden('pname',['value'=>$product->pname])?>

<select name = "crust" class="browser-default custom-select">
  <option selected>Select Your Crust</option>
  <option value="Hand Tossed Crust">Hand Tossed Crust</option>
  <option value="New York Crust">New York Crust</option>
  <option value="Crunchy Thin Crust">Crunchy Thin Crust</option>
</select>

        <hr >
        
        <select name="quantity" class="browser-default custom-select">
  <option selected>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<hr >

        <!-- Triggering button -->
        <?= $this->Form->button(('Checkout<i class="fa fa-shopping-cart"></i>'),['class'=>'rotate-btn btn btn-elegant '
        ,'aria-hidden'=>'true'],
    ['escape' => false]) ?>

        
<?= $this->Form->end() ?>
                <a class="rotate-btn btn btn-elegant" data-card="card-<?= $product->pid ?>">Flip <i class="fa fa-undo" aria-hidden="true"></i></a>

      </div>
    </div>
</div>


</div>
  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
    </ul>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>
<!-- Card Narrower -->

</div>


  </div>
</div>



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


<?= $this->Html->script('material-compiled.js') ?>
<script type="text/javascript">


   $(document).ready(function() {
            $('.mdb-select').material_select();
                // SideNav Button Initialization
        })
</script>