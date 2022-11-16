<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>






<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Cities</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">service</th>
                    <th scope="col">City</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('orders') ; $x=1;?>

                <?php foreach( $data as $row ){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['order_email']; ?>  </td> 
                    <td class="text-center"> <?php echo $row['order_mobile']; ?>  </td> 
                    <td class="text-center"> <?php echo getRow('services' , 'service_id' ,$row['order_service_id'])['service_name']; ?>  </td> 
                    <td class="text-center"> <?php echo getRow('cities' , 'city_id' ,$row['order_city_id'])['city_name']  ; ?>  </td> 
                    <td class="text-center"> <?php echo $row['order_notes']; ?>  </td> 
                    
                    <td class="text-center">        
                      <a href="<?php echo BURLA . 'orders/delete.php?id=' . $row['order_id'];  ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>

















<?php require BLA.'/inc/footer.php';  ?>