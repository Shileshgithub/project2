<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <title></title>
        </head>
    <body>

         <div class="container">
            <table class="table table-bordered">
                 <tr class="bg-info ">
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Language</th>
                    <th>Gender</th>
                    <th>Quali</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Added On</th>
                 </tr>
                <?php if(!empty($arr)){
                    foreach ($arr as $key => $value){
                        if($value->status == 1){
                            $status = '<span class="badge bg-success">Active</span>';
                            }else{
                                $status = '<span class="badge bg-success">Deactive</span>';
                            }
                    ?>
                <tr>
                    <td><?=++$key?></td>
                    <td><?=$value->name?></td>
                    <td><?=$value->email?></td>
                    <td><?=$value->phone?></td>
                    <td><?=$value->language?></td>
                    <td><?=$value->gender?></td>
                    <td><?=$value->qualification?></td>
                    <td><img src="<?=base_url()?>/uploads/<?=$value->image?>" width="50px" alt=""></td>
                    <td><?=$status?></td>
                    <td><?=$value->added_on?></td>
                    
                </tr>
                <?php  } }else{?>
                <tr>
                    <td>NO Record found</td>
                </tr>
                <?php } ?>
            </table>
  
         </div>

    </body>
</html>