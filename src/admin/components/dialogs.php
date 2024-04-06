 <!-- adding category -->
 <dialog id="ctyAddModal" class="modal">
     <div class="modal-box">
         <form method="dialog">
             <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
         </form>
         <h3 class="font-bold text-lg">Add Category</h3>
         <form class="mt-2" action="" id="ctyform">
             <label class="input input-bordered flex items-center gap-2">
                 Category Name:
                 <input type="text" name="ctyname" class="grow" placeholder="text input" />
             </label>
             <button type="submit" class="btn btn-primary btn-sm mt-2">add</button>
         </form>
     </div>
 </dialog>
 <!-- items info -->
 <dialog id="infoItemModal" class="modal">
     <div class="modal-box">
         <form method="dialog">
             <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
         </form>
         <h3 class="font-bold text-sm">Item Info</h3>
         <div class="flex flex-col items-center w-full lg:flex-row">
             <div class="card lg:w-56 w-full bg-base-100 shadow-xl">
                 <figure class="p-5">
                     <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl" />
                 </figure>
             </div>
             <div class="divider lg:divider-horizontal"></div>
             <div class="card w-56 bg-base-100 shadow-xl p-2 gap-1 bg-transparent">
                 <label class="input input-bordered input-sm flex items-center gap-2">
                     Id:
                     <input type="text" value="2802" class="input input-bordered input-xs w-full max-w-xs" disabled />
                 </label>
                 <label class="input input-bordered input-sm flex items-center gap-2">
                     Name:
                     <input type="text" value="George smith" class="input input-bordered input-xs w-full max-w-xs" disabled />
                 </label>
                 <label class="input input-bordered input-sm flex items-center gap-2">
                     Condition:
                     <input type="text" value="damage" class="input input-bordered input-xs w-full max-w-xs" disabled />
                 </label>
                 <label class="input input-bordered input-sm flex items-center gap-2">
                     Points:
                     <input type="text" value="10 pts" class="input input-bordered input-xs w-full max-w-xs" disabled />
                 </label>
                 <label class="input input-bordered input-sm flex items-center gap-2">
                     Item:
                     <input type="text" value="Keyboard" class="input input-bordered input-xs w-full max-w-xs" disabled />
                 </label>
             </div>
         </div>
 </dialog>