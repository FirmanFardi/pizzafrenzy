<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
$this->layout = false;
?>

<?= $this->Html->css('material-compiled.css') ?>
<?= $this->Html->css('all.css') ?>
<style type="text/css">
	

</style>

<html>
<body style="background-image: url('http://localhost/pizza/webroot/img/fast1.jpg');background-size: 1400px 700px;">

			      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
               <h5 class="mb-1">          <?php echo $this->Html->link(
              'RETURN TO HOME PAGE',
              ['controller' => 'Pages', 'action' => 'index', '_full' => true]
               ); ?>
</h5>
        </li>
      </ul>

      <center><!--Medium red-->
<div class="preloader-wrapper big active">
  <div class="spinner-layer spinner-red-only">
    <div class="circle-clipper left">
      <div class="circle"></div>
    </div>
    <div class="gap-patch">
      <div class="circle"></div>
    </div>
    <div class="circle-clipper right">
      <div class="circle"></div>
    </div>
  </div>
</div></center>
      	<br>
      	<br>
      	<p style="color: white;" class="h3">YOUR DELIVERY GUY IN HIS WAY. ETA 30 MINS</p>
        <center>
 		<?php echo $this->Html->image('biker.jpg', ['alt' => 'CakePHP',
 		'width'=>'500px']);
 		?>
 </center>
 
 
<div class="preloader-wrapper big active">
  <div class="spinner-layer spinner-blue">
  



</body>
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