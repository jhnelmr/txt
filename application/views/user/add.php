<?php $this->load->view('includes/header');?>
<!-- content -->
<div class="card text-center" >
    <div class="card-body">
    <h5 class="card-title">SAMPLE CRUD</h5>
    <form method="POST" action="<?=base_url('user/add') ?>">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="ItemName"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="ItemDetails"> <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php 
if ($this->session->flashdata('success')) { // Note the corrected method name flashdata()
?>
<div class="alert alert-success">
    Added!
</div>
<?php
}
?>

         <?php 
if ($this->session->flashdata('error')) { // Note the corrected method name flashdata()
?>
<div class="alert alert-warning">
    Error!
</div>
<?php
}
?>


  </div>
</div>



<?php $this->load->view('includes/footer');?>