<?php
include '../../database/conn.php';
session_start();
session_regenerate_id(true);
$ses_id = $_SESSION['usr_id'];
if (empty($ses_id)) {
    header('location: ../landing/index.php');
    exit();
}
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
    <title>admin</title>

</head>

<body>
    <div class="w-svw h-svh overflow-y-auto bg-[#FDE5D4] flex">
        <div class="lg:w-[18%] h-screen rounded-r-[20px] hidden bg-[#D6CC99] lg:flex flex-col p-2">
            <a href="" class="btn btn-ghost text-xl text-center mt-3 text-white font-semibold font-popin">E-WASTE</a>
            <ul class="flex flex-col mt-9">
                <label class="input input-bordered input-sm flex items-center gap-2">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label>
                <a href="index.php" id="btncstm1" class="btn mt-2 btn-active btn-neutral font-semibold font-popin">Home</a>
                <a href="donations.php" id="btncstm2" class="btn mt-2 font-semibold font-popin">Donations</a>
                <a href="redemption.php" id="btncstm2" class="btn mt-2 font-semibold font-popin">Redemption</a>
            </ul>
        </div>
        <div class="lg:w-[82%] w-full h-svh">
            <div class="w-auto bg-[#FDE5D4] sticky top-0 z-40">
                <div class="navbar bg-transparent flex justify-between">
                    <div class="">
                        <button class="btn btn-sm mx-2 text-sm btn-ghost font-semibold font-popin" id="ctyAdd"><i class='bx bxs-dashboard'></i>Dashboard</button>
                    </div>
                    <div class=" gap-2">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="badge badge-xs badge-primary indicator-item"></span>
                        </div>
                        <div class="dropdown dropdown-end px-0">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
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
                        <div class="max-lg:hidden flex">
                            <a class="btn btn-ghost text-sm p-1">Gorge Admin1</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start contents here total donations total redemption -->
            <div class="lg:h-[90%] w-full">
                <!-- right content -->
                <div class=" w-full flex-col lg:flex-row p-2 lg:flex gap-2">
                    <div class=" w-full">
                        <div class="stats stats-vertical lg:stats-horizontal shadow">

                            <div class="stat">
                                <div class="stat-figure text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <div class="stat-title">Total Donations</div>
                                <div class="stat-value text-primary">200</div>
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
                    <div class="w-full h-auto p-2">
                        <div class="w-full card flex justify-center bg-base-100 shadow-xl">
                            <div class="overflow-x-auto">
                                <table class="table block">
                                    <!-- head -->
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Date</th>
                                            <th>Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- row 1 -->
                                        <tr>
                                            <th>1</th>
                                            <td>Cy Ganderton</td>
                                            <td>Quality Control Specialist</td>
                                        </tr>
                                        <!-- row 2 -->
                                        <tr>
                                            <th>2</th>
                                            <td>Hart Hagerty</td>
                                            <td>Desktop Support Technician</td>
                                        </tr>
                                        <!-- row 3 -->
                                        <tr>
                                            <th>3</th>
                                            <td>Brice Swyre</td>
                                            <td>Tax Accountant</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="js/script.js"></script>