<?php include ('header.php'); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card ">
                    <div class="card-header bg-info ">All User</div>

                    <div class="card-body ">

                        <form action="action.php" method="POST">
                            <div class="input-group mb-4">
                                <input type="text" name="search" class="form-control" placeholder="Search Here..">
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </form>
                       <table class="table table-bordered table-hover">
                           <thead>
                           <tr>
                               <th>Name</th>
                               <th>Mobile</th>
                               <th>Email</th>
                               <th>Address</th>
                           </tr>

                           </thead>

                           <tbody>
                           <?php foreach($std as $single_std) { ?>

                               <tr>
                                   <td><?php echo $single_std['name'];?></td>
                                   <td><?php echo $single_std['mobile'];?></td>
                                   <td><?php echo $single_std['email'];?></td>
                                   <td><?php echo $single_std['address'];?></td>
                               </tr>
                           <?php  } ?>
                           </tbody>
                       </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('footer.php'); ?>
