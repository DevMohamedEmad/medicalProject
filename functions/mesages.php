<?php if(isset($error_msg) && $error_msg !=''){  ?>
    <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
        <h3 class="alert alert-danger text-center"> <?php echo $error_msg; ?>  </h3>
    </div>
<?php }?>


<?php if(isset($success_msg) && $success_msg!=''){  ?>
    <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
        <h3 class="alert alert-success text-center"> <?php echo $success_msg; ?>  </h3>
    </div>
<?php }?>
