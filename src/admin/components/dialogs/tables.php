 <?php include '../../../../database/conn.php' ?>
 <div class="modal-box w-11/12 max-w-5xl">
     <form method="dialog">
         <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
     </form>
     <button class="btn btn-ghost btn-sm font-bold text-lg"><i class='bx bx-plus-circle'></i>Electronics</button>
     <div class="card mt-4">

         <div class="overflow-x-auto">
             <table class="table">
                 <!-- head -->
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Job</th>
                         <th>Favorite Color</th>
                     </tr>
                 </thead>
                 <tbody>
                     <!-- getting id from jquery shet -->
                     <?php
                        $id = $_POST['getId'];
                        $query = $conn->query("SELECT * FROM tbl_ewst WHERE ewst_ctyfk = '$id'");
                        while ($data = mysqli_fetch_array($query)) {
                            $itemName = $data['ewst_name'];
                            $itemId = $data['ewst_id'];
                        ?>
                         <tr class="hover">
                             <th><?php echo $itemId ?></th>
                             <td><?php echo $itemName ?></td>
                             <td>Desktop Support Technician</td>
                             <td>Purple</td>
                         </tr>
                     <?php } ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 </div>