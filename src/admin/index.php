<?php
// Temporary commenting out because there's no database included in the repo
// include '../../database/conn.php';
// session_start();
// session_regenerate_id(true);
// $ses_id = $_SESSION['usr_id'];
// if (empty($ses_id)) {
//     header('location: ../landing/index.php');
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../output.css" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="css/costum.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="../../plugin/jquery.js"></script>
    <title>Dashboard</title>

</head>


<!-- 
    - Removed the initial <div> wrapper to body instead
    - Changed the background color to zinc-100 because the current one is out of place
-->

<body class="w-svw h-svh overflow-y-auto bg-zinc-100 flex">

    <!-- 
        - Changed the right roundiness of the sidebar. Too much roundiness.
        - Changed the tag from <div> to <aside>. Use semantic tags as much as possible to dictate how your layout is gonna be
    -->
    <aside class="lg:w-1/5 h-screen rounded-r-2xl hidden bg-green-500 lg:flex flex-col p-2">


        <a href="" class="btn btn-ghost text-xl text-center mt-3 text-white font-semibold font-popin">

            <!-- 
                - Removed the unnecessary color styling to icons
                - Changed absolute font sizing to pre-defined tailwind standard sizing
            -->
            <i class='bx bx-recycle bx-flashing text-2xl'></i>E-WASTE<i class='bx bx-recycle bx-flashing text-2xl'></i>


        </a>

        <ul class="menu flex flex-col mt-9">

            <!--
                - Added vertical padding due to it being smaller and incomprehensible
                - Why the fuck do you have a gap-2 class in this label?
            -->
            <label class="input input-bordered input-sm flex items-center py-5">


                <input type="text" class="grow" placeholder="Search" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                    <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                </svg>
            </label>

            <!--
                - Changed the flex justify to between instead of absolutely trying to assign margins
                - Why the fuck do you have a gap-2 class in this label?
                - Removed gap and changed the gap to 0 and set it as !important to overwrite default styling
            -->
            <li>
                <a href="index.php" id="btncstm1" class="btn justify-start !gap-0 mt-2 btn-active btn-neutral font-semibold font-popin">
                    <i class='bx bx-home-alt text-xl me-8'></i>
                    Home
                </a>
            </li>

            <li>
                <span class="menu-dropdown-toggle btn justify-between mt-2 font-semibold font-popin ">
                    <div class="flex items-center">
                        <i class='bx bx-recycle text-xl me-8'></i>
                        E-waste
                    </div>
                </span>
                <ul class="menu-dropdown">
                    <li class="mt-2">
                        <a href="donations.php" id="btncstm2" calss="btn justify-start font-semibold font-popin">
                            <i class='bx bx-category-alt mr-5 font-bold text-lg'></i>
                            Categories</a>
                    </li>
                    <li class="">
                        <a id="btnAddItem" calss=" btn justify-start font-semibold font-popin" onclick="addItemModal.showModal()">
                            <i class='bx bx-list-plus mr-5 font-bold text-lg'></i>
                            Add Items</a>
                    </li>
                </ul>
            </li>

            <li>
                <span class="menu-dropdown-toggle btn justify-between mt-2 font-semibold font-popin">
                    <div class="flex items-center">
                        <i class='bx bx-gift text-xl me-8'></i>
                        Rewards
                    </div>
                </span>
                <ul class="menu-dropdown">
                    <li class="mt-2">
                        <a href="redemption.php" id="btncstm2" calss="btn justify-start font-semibold font-popin">
                            <i class='bx bx-category-alt mr-5 font-bold text-lg'></i>
                            Redemption items</a>
                    </li>
                    <li class="">
                        <a id="btnAddItem" calss=" btn justify-start font-semibold font-popin" onclick="addItemModal.showModal()">
                            <i class='bx bx-gift mr-5 font-bold text-lg'></i>
                            Add Items</a>
                    </li>
                </ul>
            </li>

        </ul>
    </aside>


    <main class="lg:w-4/5 w-full h-svh">
        <nav class="navbar bg-zinc-50 flex justify-between sticky z-40 border-b-2 border-zinc-200">
            <button class="btn mx-2 btn-ghost font-semibold font-popin" id="ctyAdd"><i class='bx bxs-dashboard'></i>Dashboard</button>

            <div class="flex gap-6">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="badge badge-xs badge-primary indicator-item"></span>
                </div>

                <details class="dropdown dropdown-bottom dropdown-end">
                    <summary class="btn m-1 flex items-center gap-4">
                        <div class="w-8 rounded-full ring ring-zinc-200">
                            <img alt="Tailwind CSS Navbar component" src="../img/gift.png" />
                        </div>
                        <span class="text-sm">Gorge Admin1</span>
                    </summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-lg z-[1] w-52 p-2 shadow-lg">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a href="php/logout.php">Logout</a></li>
                    </ul>
                </details>

                <!-- <div class="dropdown dropdown-end px-0">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">


                    </div>
                    <ul tabindex="1" class="mt-3 z-10 p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a href="php/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div> -->
        </nav>

        <!-- start contents here total donations total redemption -->
        <section class="w-full p-3 flex flex-col">

            <div class="w-full flex-col lg:flex-row lg:flex gap-3">

                <!-- right content -->
                <div class=" w-full">
                    <div class="stats stats-vertical lg:stats-horizontal ring-2 ring-zinc-200 bg-zinc-50">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class='bx bxs-component text-[40px]'></i>
                            </div>
                            <div class="stat-title">Total Donations</div>
                            <div class="stat-value text-primary">90</div>
                            <div class="stat-desc">21% more than last month</div>
                        </div>

                        <div class="stat">
                            <div class="stat-figure text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="stat-title">Redeemable Items</div>
                            <div class="stat-value text-secondary">20</div>
                            <div class="stat-desc">21% more than last month</div>
                        </div>

                        <div class="stat">
                            <div class="stat-figure text-secondary">
                                <div class="avatar online">
                                    <div class="w-16 rounded-full">
                                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                    </div>
                                </div>
                            </div>
                            <div class="stat-value">0</div>
                            <div class="stat-title">Register User</div>
                            <div class="stat-desc text-secondary">0 Active</div>
                        </div>

                    </div>
                </div>

                <!-- left content -->
                <div class="w-full">
                    <div class="w-full card flex justify-center bg-zinc-50 ring-2 ring-zinc-200">
                        <div class="overflow-x-auto">
                            <table class="table block">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Timestamp</th>
                                        <th>Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- row 1 -->
                                    <tr>
                                        <th>1</th>
                                        <td>04/20/24 12:00</td>
                                        <td>juan donated</td>
                                    </tr>
                                    <!-- row 2 -->
                                    <tr>
                                        <th>2</th>
                                        <td>04/20/24 12:00</td>
                                        <td>juan registered</td>
                                    </tr>
                                    <!-- row 3 -->
                                    <tr>
                                        <th>3</th>
                                        <td>04/20/24 12:00</td>
                                        <td>juan Redeemed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <dialog id="addItemModal" class="modal">
        <?php include 'components/dialogs/item.php' ?>
    </dialog>
</body>

</html>
<script src="js/script.js"></script>