 <div class="modal-box">
     <form method="dialog">
         <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
     </form>
     <button class="btn btn-ghost btn-sm font-bold text-lg"><i class='bx bx-plus-circle'></i> Add new Item</button>
     <div class="card">
         <form id="formSaveItem">
             <select class="select select-sm select-accent w-full mt-5" name="user">
                 <option disabled selected>Select User</option>
                 <?php
                    // Fetch items belonging to the current category
                    $item_query = $conn->query("SELECT * FROM tbl_user");
                    while ($item_data = mysqli_fetch_array($item_query)) {
                        if ($item_data['usr_typ'] == 2) {
                    ?>
                         <option value=" <?php echo $item_data['usr_id'] ?>"> <?php echo $item_data['usr_fname'] ?> <?php echo $item_data['usr_lname'] ?> </option>
                 <?php
                        }
                    }
                    ?>
             </select>

             <select class="select select-sm select-accent w-full mt-2" name="category">
                 <option disabled selected>Categories</option>
                 <?php
                    // Fetch items belonging to the current category
                    $item_query = $conn->query("SELECT * FROM tbl_category");
                    while ($item_data = mysqli_fetch_array($item_query)) {

                    ?>
                     <option value=" <?php echo $item_data['cty_id'] ?>"> <?php echo $item_data['cty_name'] ?> </option>
                 <?php } ?>
             </select>

             <label class="input input-sm input-bordered flex items-center gap-2 mt-2">
                 <i class='bx bx-info-circle'></i>
                 <input type="text" name="info" class="grow" placeholder="Item Info" />
             </label>

             <select class="select select-sm select-accent w-full mt-2" name="condition">
                 <option disabled selected>Condition</option>
                 <?php
                    // Fetch items belonging to the current category
                    $item_query = $conn->query("SELECT * FROM tbl_cdtn");
                    while ($item_data = mysqli_fetch_array($item_query)) {

                    ?>
                     <option value=" <?php echo $item_data['cdtn_id'] ?>"> <?php echo $item_data['cdtn_type'] ?> </option>
                 <?php } ?>
             </select>

             <label class="input input-sm input-bordered flex items-center gap-2 mt-2">
                 <i class='bx bx-coin'></i>
                 <input type="text" class="grow" placeholder="Points" name="points" />
             </label>
             <button class="btn btn-sm mt-5 bg-[#FDE5D4]">Save</button>
         </form>
     </div>
 </div>
 <!-- jq script -->