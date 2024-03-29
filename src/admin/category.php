<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../output.css" rel="stylesheet">
    <link rel="stylesheet" href="css/costum.css">
    <link rel="stylesheet" href="../../node_modules/boxicons/css/boxicons.min.css">
    <script src="../../plugin/jquery.js"></script>
    <title>admin</title>
</head>

<body>
    <div class="w-svw h-svh bg-[#FDE5D4] flex">
        <div class="lg:w-[18%] h-screen rounded-r-[20px] hidden bg-[#D6CC99] lg:flex flex-col p-2">
            <a href="" class="btn btn-ghost text-xl text-center mt-3 text-white">E-WASTE</a>
            <ul class="flex flex-col mt-9">
                <label class="input input-bordered input-sm flex items-center gap-2">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label>
                <a href="index.php" id="btncstm1" class="btn mt-2 ">Home</a>
                <a href="category.php" id="btncstm2" class="btn mt-2 btn-active btn-neutral">Categories</a>
            </ul>
        </div>
        <div class="lg:w-[82%] w-full h-svh">
            <div class="w-auto bg-[#FDE5D4]">
                <div class="navbar bg-transparent flex justify-between">
                    <div class="">
                        <button class="btn btn-sm mx-2 text-sm" id="ctyAdd" onclick="ctyAddModal.showModal()"><i class='bx bx-category-alt'></i></i>Add Category</button>
                    </div>
                    <div class=" gap-2">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="badge badge-xs badge-primary indicator-item"></span>
                        </div>
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
                            </div>
                            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                                <li>
                                    <a class="justify-between">
                                        Profile
                                        <span class="badge">New</span>
                                    </a>
                                </li>
                                <li><a>Settings</a></li>
                                <li><a>Logout</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <a class="btn btn-ghost text-sm">Gorge Admin1</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full contLstOvrf h-[90%] overflow-y-auto">
                <div class="flex flex-col">
                    <button class="btn ml-2 btn-ghost float-left btn-sm w-32">keyboard >></button>
                    <div class="carousel carousel-center  max-w-full p-4  bg-neutral h-52 bg-transparent rounded-box">
                        <div class=" flex space-x-4 overflow-x-auto cursor-pointer carOverf max-w-full hover:overflow-x-auto pb-2">
                            <div id="slide1" class="card carousel-item w-auto bg-base-100 shadow-xl">
                                <figure class="px-2 pt-5 w-36">
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-box" />
                                </figure>
                                <button class="btn mx-2 bg-[#FDE5D4] btn-sm mt-4 flex items-center justify-center"><i class='bx bx-info-circle text-lg' style='color:#001524'></i>
                                    <p>info</p>
                                </button>
                            </div>
                            <div id="slide2" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg" class="rounded-box" />
                            </div>
                            <div id="slide3" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.jpg" class="rounded-box" />
                            </div>
                            <div id="slide4" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg" class="rounded-box" />
                            </div>
                            <div id="slide5" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" class="rounded-box" />
                            </div>
                            <div id="slide6" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                            </div>
                            <div id="slide7" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                            </div>
                            <div id="slide8" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                            </div>
                            <div id="slide6" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                            </div>
                            <div id="slide7" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                            </div>
                            <div id="slide8" class="carousel-item">
                                <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel carousel-center relative max-w-full p-4  bg-neutral h-52 bg-transparent rounded-box">
                    <div class=" flex space-x-4 overflow-x-auto carOverf max-w-full hover:overflow-x-auto pb-2">
                        <div id="slide1" class="card carousel-item w-auto bg-base-100 shadow-xl">
                            <figure class="px-2 pt-5 w-36">
                                <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-box" />
                            </figure>

                        </div>
                        <div id="slide2" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide3" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.jpg" class="rounded-box" />
                        </div>
                        <div id="slide4" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide5" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" class="rounded-box" />
                        </div>
                        <div id="slide6" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide7" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide8" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide6" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide7" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide8" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                    </div>
                </div>
                <div class="carousel carousel-center relative max-w-full p-4  bg-neutral h-52 bg-transparent rounded-box">
                    <div class=" flex space-x-4 overflow-x-auto carOverf max-w-full hover:overflow-x-auto pb-2">
                        <div id="slide1" class="card carousel-item w-auto bg-base-100 shadow-xl">
                            <figure class="px-2 pt-5 w-36">
                                <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-box" />
                            </figure>

                        </div>
                        <div id="slide2" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide3" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.jpg" class="rounded-box" />
                        </div>
                        <div id="slide4" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide5" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" class="rounded-box" />
                        </div>
                        <div id="slide6" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide7" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide8" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide6" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide7" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide8" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                    </div>
                </div>
                <div class="carousel carousel-center relative max-w-full p-4  bg-neutral h-52 bg-transparent rounded-box">
                    <div class=" flex space-x-4 overflow-x-auto carOverf max-w-full hover:overflow-x-auto pb-2">
                        <div id="slide1" class="card carousel-item w-auto bg-base-100 shadow-xl">
                            <figure class="px-2 pt-5 w-36">
                                <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-box" />
                            </figure>

                        </div>
                        <div id="slide2" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide3" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.jpg" class="rounded-box" />
                        </div>
                        <div id="slide4" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide5" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" class="rounded-box" />
                        </div>
                        <div id="slide6" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide7" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide8" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide6" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" class="rounded-box" />
                        </div>
                        <div id="slide7" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                        <div id="slide8" class="carousel-item">
                            <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" class="rounded-box" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/dialogs.php' ?>
</body>

</html>
<script src="js/script.js"></script>