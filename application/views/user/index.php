<?php $this->load->view('includes/header');?>
<!-- content -->
<div class="card text-center" >
    <div class="card-body">
    <h5 class="card-title">SAMPLE CRUD TABLE</h5>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

    <?php $i=1; foreach($item as $row) ?>
    <tr>
      <th><?=$i++;?></th>
          <td> <?= $row['ItemName']?></td>
          <td> <?= $row['ItemDetails']?></td>
         <td>
            <a href="<?=base_url()?>user/edit/<?=$row['id']?>" class="btn btn-primary">Edit</a>
            <a href="<?=base_url()?>user/delete/<?=$row['id']?>" class="btn btn-danger" onclick=" return confirm('Are you sure want to delete this user?')">Delete</a>
          </td>
    </tr>
 
  </tbody>
</table>
  </div>
</div>



<?php $this->load->view('includes/footer');?>