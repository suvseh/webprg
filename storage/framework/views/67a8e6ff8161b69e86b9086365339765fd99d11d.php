
<?php $__env->startSection('title'); ?>
    Home Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>

<div class="flex justify-center mx-auto  bg-white ">
        <div id="slider" class="swiper-container w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-cover bg-center shadow-lg" style="background-image: url('images/building.jpg');">
                    <div class="container mx-auto px-6 md:px-20 py-6">
                        <div class="w-full md:w-1/2">
                            <div class="md:border border-gray-100 md:p-10 ">
                                <h3 class="text-5xl leading-tight text-white " style="font-family: Niconne, cursive; ">Vision To </h3>
                                <h2 class="font-bold leading-tight text-white">Ramshanti College of Higher Education Pandhurna</h2>
                                <p class="text-xl mt-10 font-light text-white">click here to get admission information
                                </p>
                            </div>
                            <div class="my-10 md:mx-10 md:-mt-2"><a href="#appointment"
                                    class="bg-blue-500  ease-linear hover:bg-pink-600 text-white px-6 py-4 rounded-full">Adminssion</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex swiper-button-prev bg-white w-16 h-16 text-xs rounded-full text-blue-500"></div>
            <div class="hidden md:flex swiper-button-next bg-white w-16 h-16 text-xs rounded-full text-blue-500"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
	<script>
		var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
	</script>
    
  <div class="flex justify-between bg-white">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-3xl">
           <h1 class="flex justify-center text-blue-900 text-2xl">Ramshanti College Of Higher Education</h1>
           <p><h5> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta quod voluptas tenetur, maiores iure distinctio inventore sit, incidunt officiis explicabo quae excepturi nihil recusandae quibusdam voluptatum cum ad minus ducimus?</h5></p>
        </div>
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-1xl border-1">
           <div class="max-w-md mx-auto bg-blue-900 rounded-xl shadow-md overflow-hidden md:max-w-3xl">
           menu
           </div>
        </div>
  </div>
 
  <!-- Display Container (not part of component) END -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laraprg\webprg\resources\views/webpages/index.blade.php ENDPATH**/ ?>