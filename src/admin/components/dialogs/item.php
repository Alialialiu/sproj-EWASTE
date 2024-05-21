 <div class="modal-box  w-11/12 max-w-5xl ">
     <form method="dialog">
         <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
     </form>
     <button class="btn btn-ghost btn-sm font-bold text-lg mb-2"><i class='bx bx-plus-circle'></i> Add new Item</button>
     <div class="flex flex-col w-full lg:flex-row">
         <div class="grid flex-grow h-auto card bg-base-300 rounded-box p-5 shadow-xl">
             <div class="card">

                 <form id="formSaveItem">
                     <input type="hidden" id="userId" name="user" value="" />
                     <input type="text" id="searchInput" class="select select-sm select-accent w-full mt-5" placeholder="Search User" />

                     <select class="select select-sm select-accent w-full mt-2" id="category" name="category">
                         <option disabled selected>Select Categories</option>
                         <?php
                            // Fetch items belonging to the current categoryx
                            $item_query = $conn->query("SELECT * FROM tbl_category");
                            while ($item_data = mysqli_fetch_array($item_query)) {
                            ?>
                             <option value=" <?php echo $item_data['cty_id'] ?>"> <?php echo $item_data['cty_name'] ?> </option>
                         <?php } ?>
                     </select>

                     <label class="input input-sm input-bordered flex items-center gap-2 mt-2">
                         <i class='bx bx-info-circle'></i>
                         <input type="text" name="info" class="grow" placeholder="Item Info" id="info" />
                     </label>

                     <select class="select select-sm select-accent w-full mt-2" name="condition" id="condition">
                         <option disabled selected>Select Condition</option>
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
                         <input type="text" class="grow" placeholder="Points" name="points" id="points" />
                     </label>
                     <div class="flex items-center">
                         <button type="submit" class="btn btn-sm mt-5 mb-3 bg-[#FDE5D4] shadow-md" disabled>Save</button>
                         <div class="mt-5 mb-3 ml-2 w-full" id="error">
                         </div>
                     </div>

                 </form>
             </div>
         </div>
         <div class="divider lg:divider-horizontal"></div>
         <div class="grid flex-grow h-auto shadow-xl card bg-base-300 rounded-box p-5">
             <div class="card">
                 <div class=" font-semibold font-popin">preview:</div>

                 <form id="formSaveItem">
                     <label class="input input-bordered input-sm flex items-center gap-2 mt-2">
                         User:
                         <input type="text" value="" class="input input-bordered input-xs w-full max-w-xs" disabled id="previewUser">
                     </label>

                     <label class="input input-bordered input-sm flex items-center gap-2 mt-2">
                         Category:
                         <input type="text" value="" class="input input-bordered input-xs w-full max-w-xs" disabled id="previewCategory">
                     </label>

                     <label class="input input-bordered input-sm flex items-center gap-2 mt-2">
                         Condition:
                         <input type="text" value="" class="input input-bordered input-xs w-full max-w-xs" disabled id="previewCondition">
                     </label>

                     <label class="input input-bordered input-sm flex items-center gap-2 mt-2">
                         Points:
                         <input type="text" value="" class="input input-bordered input-xs w-full max-w-xs" disabled id="previewPoints">
                     </label>

                     <label class="input input-bordered input-sm flex items-center gap-2 mt-2">
                         Item:
                         <input type="text" value="" class="input input-bordered input-xs w-full max-w-xs" disabled id="previewItem">
                     </label>

                 </form>
             </div>
         </div>
     </div>

 </div>