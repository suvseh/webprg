<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rbctpnr.org | <?php echo $__env->yieldContent('title'); ?> </title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="">
<!---Top nav bar-->

      <div class="bg-blue-900 flex justify-between">  
        <ul class="flex items-right">
            <i class="fas fa-phone-square-alt text-white p-3">+91-7224050903</i> <i class="fas fa-envelope text-white p-3"> ramshanticollege@rediffmail.com</i>
        </ul>
         <ul class="flex items-left">
         <a href="http://"><i class="fab fa-twitter-square text-white p-3"></i></a><a href="http://"> <i class="fab fa-facebook-square text-white p-3"></i></a>
         </ul>
      </div>

  <div class="flex justify-between"> 
  <div class="bg-white flex justify-center">
      <img class="w-16 md:w-32 lg:w-48"src="images/logo.png">
  </div>
    <nav class="bg-white flex justify-center">
    <div class="flex justify-between items-center py-4 ">
        <i class="fas fa-bars fa-2x visible md:invisible mr-10 md:mr-0 text-blue-200 cursor-pointer"></i>
        <ul class="hidden md:flex overflow-x-hidden mr-10 font-semibold">
          <li class="mr-6 p-1 border-b-2 border-orange-500">
            <a class="text-blue-900 cursor-default" href="#"><i class="fas fa-home"> Home</i></a>
          </li>
          <li class="mr-6 p-1">
            <a class="text-blue-900 hover:text-blue-300" href="#">About</a>
          </li>
          <li class="mr-6 p-1">
            <a class="text-blue-900 hover:text-blue-300" href="#">Gallery</a>
          </li>
          <li class="mr-6 p-1">
            <a class="text-blue-900 hover:text-blue-300" href="#">Acadmic</a>
          </li>
          
          <li class="mr-6 p-1">
            <a class="text-blue-800 hover:text-blue-300" href="#">Contacts</a>
          </li>
        </ul>
      </div>
</nav>
</div>
<div class="flex justify-center bg-blue-900"> 
 
  <div class="flex justify-center bg-blue-900">
      <h4 class="text-white text-1xl">RAMSHANTI COLLEGE OF HIGHER EDUCATION D.El.Ed AFFLIATED BY MPBSE BHOPAL & NCTE</h4>
  </div>
</div>
    <div class="container mx-auto bg-blue-100">
        <?php echo $__env->yieldContent('contents'); ?>
    </div>
<!-- Footer section -->
<div class="" style="background-color: #013069;">
        <div class="container mx-auto px-6 lg:px-20 py-12">
            <div class="lg:flex">
                <div class="w-full lg:w-2/3">
                    <div class="lg:flex">
                        <div class="w-full mb-12 lg:mb-0 lg:w-1/2">
                            <h2 style="font-family: 'Baloo Tamma 2', cursive;"
                                class="font-bold text-xl text-gray-100 mb-4">Web2tailwind</h2>
                            <p class="text-gray-400">
                                Web2tailwind.com is a site for developer, student and learner,
                                where they can grab
                                hundreds of various html component code and try online as fast as posible without...</p>
                            <div class="flex mt-6">
                                <i style="background-color: #3B5998;"
                                    class="flex items-center justify-center h-12 w-12 mr-1 rounded-full fab fill-current text-white text-xl fa-facebook-f"></i>
                                <i style="background-color:#dd4b39"
                                    class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fas fill-current text-white text-xl fa-envelope"></i>
                                <i style="background-color:#125688;"
                                    class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-instagram"></i>
                                <i style="background-color:#55ACEE;"
                                    class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-twitter"></i>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 lg:flex lg:px-6 ">
                            <div class="w-full mb-6 lg:mb-0 lg:w-1/2">
                                <h2 style="font-family: 'Baloo Tamma 2', cursive;" class="font-bold text-gray-100 mb-4">
                                    Useful Links</h2>
                                <ul class="text-gray-500 text-sm">
                                    <li class="pt-1 pb-2">Home</li>
                                    <li class="pt-1 pb-2">About us</li>
                                    <li class="pt-1 pb-2">Services</li>
                                    <li class="pt-1 pb-2">Terms of Services</li>
                                    <li class="pt-1 pb-2">Privacy Policy</li>
                                </ul>
                            </div>
                            <div class="w-full mb-6 lg:mb-0 lg:w-1/2">
                                <h2 style="font-family: 'Baloo Tamma 2', cursive;" class="font-bold text-gray-100 mb-4">
                                    Our sevices</h2>
                                <ul class="text-gray-500 text-sm">
                                    <li class="pt-1 pb-2">Web Design</li>
                                    <li class="pt-1 pb-2">Web Development</li>
                                    <li class="pt-1 pb-2">Product Management</li>
                                    <li class="pt-1 pb-2">Marketing</li>
                                    <li class="pt-1 pb-2">Graphics Design</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3">
                    <h2 style="font-family: 'Baloo Tamma 2', cursive;" class=" font-bold text-gray-100 mb-4">
                        Our Newsletter
                    </h2>
                    <div class="text-gray-300 mb-8">
                        Subscribe our weely Newsletter to get regular updates about our blogs.
                    </div>
                    <div class="flex">
                        <input type="text" class="rounded-l px-2 focus:outline-none">
                        <button class="text-gray-200 rounded-r hover:bg-blue-500 px-4 py-2 focus:outline-none"
                            style="background-color: #dc0900;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer bottom -->
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/9bcfe7dcec.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
</body>
</html><?php /**PATH E:\laraprg\webprg\resources\views/layouts/apps.blade.php ENDPATH**/ ?>