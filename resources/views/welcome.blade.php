<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  @vite('resources/css/app.css')
</head>
<body>
<header class="relative">
  <img src="https://plus.unsplash.com/premium_photo-1661775632324-d4d95c0e0099?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Background Image" class="w-full h-full">
  <div class="absolute inset-0 bg-black opacity-60"></div>
  <div class="absolute inset-0">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="">
      </a>
    </div>
    <div class="flex sm:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden sm:flex sm:gap-x-12">
      <a href="#heading" class="text-sm font-semibold leading-6 text-white hover:underline underline-offset-1">About</a>
      <a href="#package" class="text-sm font-semibold leading-6 text-white hover:underline underline-offset-1">Package</a>
      <a href="#trainer" class="text-sm font-semibold leading-6 text-white hover:underline underline-offset-1">Trainer</a>
      <a href="#map" class="text-sm font-semibold leading-6 text-white hover:underline underline-offset-1">Location</a>
      <button class="rounded-full bg-orange-500 px-2 py-1">
        <a href="#footer" class="text-sm font-semibold leading-6 text-white hover:text-gray-900">Contact Us</a>
      </button>
    </div>
  </nav>
  <section id="heading">
  <div class="flex justify-center h-1/2 px-20 my-36 xs:my-px flex-col max-w-4xl">
    <h1 class="xl:text-7xl lg:text-6xl md:text-5xl sm:text-3xl xs:text-2xl font-bold text-white animate-slideInLeft">Learn, Drive, Succeed: Your Path to Safe and Skilled Driving</h1>
    <p class="xl:text-2xl lg:text-1xl md:text-lg sm:text-base xs:text-xs my-10 xs:my-5 text-white text-opacity-60 animate-slideInRight">Embark on your journey to safe and skilled driving. Our comprehensive program empowers you with essential knowledge and hands-on experience, guiding you towards success on the road. Learn, drive, and succeed with confidence.</p>
  </div>
  <div class="absolute inset-x-0 bottom-0 bg-gray-900 bg-opacity-80 rounded-t-large w-3/4 h-1/5 mx-auto flex">
    <div class="w-1/4 flex justify-center items-center">
      <div class="flex justify-center items-center">
        <h2 class="text-white xl:text-3xl lg:text-2xl md:text-xl sm:text-lg xs:text-xs underline decoration-orange-500 underline-offset-8 mr-2 font-semibold">3000+</h2>
        <div>
          <h2 class="text-xs text-white">Students</h1>
          <h2 class="xl:text-2xl lg:text-xl md:text-lg sm:text-md xs:text-xs text-white font-bold">Trained</h1>
        </div>
      </div>  
    </div>
    <div class="w-1/4 flex justify-center items-center bg-orange-500">
      <div class="flex justify-center items-center">
        <h2 class="text-white xl:text-3xl lg:text-2xl md:text-xl sm:text-lg xs:text-xs underline decoration-gray-900 underline-offset-8 mr-2 font-semibold">30+</h2>
        <div>
          <h2 class="text-xs text-white">Licensed</h1>
          <h2 class="xl:text-2xl lg:text-xl md:text-lg sm:text-md xs:text-xs text-white font-bold">Instructors</h1>
        </div>
      </div>  
    </div> 
    <div class="w-1/4 flex justify-center items-center">
      <div class="flex justify-center items-center">
        <h2 class="text-white xl:text-3xl lg:text-2xl md:text-xl sm:text-lg xs:text-xs underline decoration-orange-500 underline-offset-8 mr-2 font-semibold">8</h2>
        <div>
          <h2 class="text-xs text-white">Years</h1>
          <h2 class="xl:text-2xl lg:text-xl md:text-lg sm:text-md xs:text-xs text-white font-bold">Experience</h1>
        </div>
      </div>  
    </div> 
    <div class="w-1/4 flex justify-center items-center">
      <div class="flex justify-center items-center">
        <h2 class="text-white xl:text-3xl lg:text-2xl md:text-xl sm:text-lg xs:text-xs underline decoration-orange-500 underline-offset-8 mr-2 font-semibold">95%</h2>
        <div>
          <h2 class="text-xs text-white">Clients</h1>
          <h2 class="xl:text-xl lg:text-lg md:text-md sm:text-sm xs:text-xs text-white font-bold">Satisfication</h1>
        </div>
      </div>  
    </div>
  </div>
  </section>
</header>
<section class="bg-white px-28 py-16 flex" id="package">
  <div>
    <h1 class="font-bold text-orange-500">Our Exciting Packages</h1>
    <h1 class="font-semibold text-4xl max-w-lg text-secondary tracking-wide mt-2">Unlock Your Driving Potential with Our Comprehensive Packages</h1>
    <h1 class="text-sm max-w-xs text-secondary opacity-60 mt-2">Discover our comprehensive driving packages designed to empower learners of all levels. From beginner courses to advanced training, our expert instructors ensure a safe and confident driving experience. Choose the package that suits your goals and embark on a journey towards mastery on the road.</h1>
  </div>
  <div class="bg-primary-gray flex w-full p rounded-xl">
    <div class="w-1/4 py-2 my-auto flex flex-col items-center">
      <img src="https://img.freepik.com/free-vector/hand-drawn-starting-line-business-illustration_23-2149540609.jpg?w=1060&t=st=1686039187~exp=1686039787~hmac=e0503b50c50d5f901fa52166a9788830caa26ca9c2258775d83d4d4a4daf48e7" alt="Background Image" class="w-28 h-28 rounded-full">
      <h1 class="font-semibold text-secondary mt-2">Beginner</h1>
    </div>
    <div class="w-1/4 py-2 my-auto flex flex-col items-center">
      <img src="https://img.freepik.com/free-vector/product-quality-concept-illustration_114360-7301.jpg?w=1060&t=st=1686040081~exp=1686040681~hmac=6b0d7cce26e311c94df7adeaf1c66f2bae0dd96171cb0a3a5abec62e6e945761" alt="Background Image" class="w-28 h-28 rounded-full">
      <h1 class="font-semibold text-secondary mt-2">Advanced</h1>
    </div>
    <div class="w-1/4 py-2 my-auto flex flex-col items-center">
      <img src="https://img.freepik.com/free-vector/woman-shield-virus-care-concept_23-2148486059.jpg?w=1060&t=st=1686040127~exp=1686040727~hmac=352e750d9b73dd1fc962bc7cc78d463e938203e39328006cf62704e120b1d00d" alt="Background Image" class="w-28 h-28 rounded-full">
      <h1 class="font-semibold text-secondary mt-2">Defensive Driving</h1>
    </div>
    <div class="w-1/4 py-2 my-auto flex flex-col items-center">
      <img src="https://img.freepik.com/free-vector/driving-school-isometric-composition-with-images-instructor-learner-car-surrounded-by-safety-cones-illustration_1284-27267.jpg?w=1380&t=st=1686040158~exp=1686040758~hmac=9d166c7512e48a2420327c69299d08b4ff8143c98c9e63120c0df55f1a227a49" alt="Background Image" class="w-28 h-28 rounded-full">
      <h1 class="font-semibold text-secondary mt-2">Road Test Preparation</h1>
    </div>
</div>
</section>
<section class="bg-primary-gray px-28 py-16 px-auto items-center flex flex-col" id="trainer">
  <h1 class="text-center text-4xl font-bold text-secondary pb-2">Meet Our Top Trainer This Month</h1>
  <h2 class="text-center text-sm opacity-70 max-w-lg items-center pb-6">Get ready to be inspired by our exceptional trainer of the month, who is leading the way with their expertise, dedication, and remarkable results. Meet our top trainer and embark on a transformative journey towards your fitness goals.</h2>
  <div class="flex">
    <div class="group shadow-lg bg-white hover:bg-orange-500 w-1/3 mx-10 card-trainee">
      <img src="https://images.unsplash.com/photo-1629425733761-caae3b5f2e50?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Background Image" class="w-full h-5/6 rounded-t-3xl object-cover">
      <div class="mt-2 mx-2 flex ml-6">
        <div class="h-14 bg-orange-500 group-hover:bg-white w-1 rounded-full mr-2"></div>
        <div class="flex flex-col">
          <span class="text-2xl font-medium">Theo Lim</span>
          <span class="text-sm opacity-50">5 Years Experience</span>
        </div>
      </div>
    </div>
    <div class="group shadow-lg bg-white w-1/3 mx-10 card-trainee hover:bg-orange-500">
      <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Background Image" class="w-full h-5/6 rounded-t-3xl object-cover ">
      <div class="mt-2 mx-2 flex ml-6">
        <div class="h-14 bg-orange-500 group-hover:bg-white w-1 rounded-full mr-2"></div>
        <div class="flex flex-col">
        <span class="text-2xl font-medium">Lucas Trauman</span>
          <span class="text-sm opacity-50">8 Years Experience</span>
        </div>
      </div>
    </div>
    <div class="group shadow-lg bg-white w-1/3 mx-10 card-trainee hover:bg-orange-500">
      <img src="https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1234&q=80" alt="Background Image" class="w-full h-5/6 rounded-t-3xl object-cover">
      <div class="mt-2 mx-2 flex ml-6">
        <div class="h-14 bg-orange-500 group-hover:bg-white w-1 rounded-full mr-2"></div>
        <div class="flex flex-col">
          <span class="text-2xl font-medium">George Gian</span>
          <span class="text-sm opacity-50">7 Years Experience</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-white px-28 py-16 px-auto items-center flex flex-col" id="car">
  <h1 class="text-center text-4xl font-bold text-secondary pb-2">Our Best Car</h1>
  <div class="flex justify-between">
    <div class="flex flex-col w-1/2 mr-2">
      <div class="shadow-lg w-full h-1/3 mb-6 rounded-xl">
        <img src="https://awsimages.detik.net.id/visual/2022/01/21/toyota-all-new-avanza-2015-tangkapan-layar_169.jpeg?w=650" alt="Background Image" class="w-full h-full rounded-xl object-contain">
      </div>
      <div class="shadow-lg w-full h-2/3 rounded-xl">
        <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/beyond%20exterior%20800x800.jpeg" alt="Background Image" class="w-full h-full rounded-t-xl object-contain">
      </div>
    </div>
    <div class="flex flex-col w-1/2">
      <div class="flex mb-6 h-2/3 ">
        <div class="shadow-lg w-1/2 h-full mr-2 rounded-xl">
          <img src="https://asset.kompas.com/crops/VUh4ESZ7uhCemJ9YcWCgjIwQJfw=/0x95:1600x1162/1200x800/data/photo/2023/03/13/640ee19e2a052.jpeg" alt="Background Image" class="w-full h-full rounded-xl object-contain">
        </div>
        <div class="shadow-lg w-1/2 h-full rounded-xl">
          <img src="https://imgcdn.oto.com/medium/gallery/exterior/14/1995/honda-brio-18235.jpg" alt="Background Image" class="w-full h-full rounded-xl object-contain">
        </div>
      </div>
      <div class="shadow-lg bg-white hover:bg-orange-500 w-full h-1/3 rounded-xl">
        <img src="https://admin-blog.caroline.id/uploads/large_kelebihan_dan_kekurangan_mobil_sigra_dan_calya_d2cf1b9d4d.webp" alt="Background Image" class="w-full h-full rounded-t-xl ">
      </div>
    </div>
  </div>
</section>
<section class="bg-primary-gray px-28 py-16 px-auto items-center flex flex-col" id="car">
  <h1 class="text-center text-4xl font-bold text-secondary pb-2">Our Schedule</h1>
  <img src="{{ asset('schedule.jpg') }}" alt="Background Image" class="w-full h-full rounded-xl object-contain">
</section>
<section id="map">
    <iframe width="100%" height="510" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6313531018645!2d106.8587280748223!3d-6.180072860555469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f45426159947%3A0x37030f8c39e228bc!2sAyam%20Bahagia!5e0!3m2!1sen!2sid!4v1686320400822!5m2!1sen!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</section>
<footer id="footer">
  <div class="bg-secondary flex ">
    <div class="mx-20 mt-6 mb-6">
      <div>
        <h1 class="font-regular text-white">School Driving,</h1>
        <h1 class="font-regular text-white mb-4">Drive. Learn. Succeed.</h1>
      </div>
      <div class="flex">
        <a href="https://twitter.com/OGesports" target="_">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Background Image" class="w-6 h-6 mr-4">
        </a>
        <a href="https://gmail.com" target="_">
          <img src="https://cdn-icons-png.flaticon.com/512/281/281769.png" alt="Background Image" class="w-6 h-6 mr-4">
        </a>
        <a href="https://wa.me/OGesports" target="_">
          <img src="https://cdn-icons-png.flaticon.com/512/5323/5323651.png" alt="Background Image" class="w-6 h-6 mr-4">
        </a>
      </div>
    </div>
    <div class="mx-20 mt-6 mb-6">
        <h1 class="font-bold text-white mb-2">Office</h1>
        <div class="flex">
          <img src="https://www.capitaland.com/content/dam/capitaland-media-library/businesspark-industrial-logistics/singapore/singapore/cintech-ii/02-VVS-AscendasReit_Cintech2-31906(MED).jpg.transform/cap-midres/image.jpg" alt="Background Image" class="w-28 h-32 mr-4 rounded-3xl object-cover">
          <div>
          <h1 class="max-w-xs font-normal text-white">Jl. Cemp. I No.8, RT.11/RW.2, Cemp. Putih Bar., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10520</h1>
          </div>
        </div>
    </div>
    <div class="mx-20 mt-6 mb-6">
        <h1 class="font-bold text-white mb-2">Contact Info</h1>
        <div>
          <div class="flex">
            <h1 class="max-w-xs font-normal text-white opacity-70 mr-2">Phone:</h1>
            <h1 class="max-w-xs font-normal text-white">+6565088686</h1>
          </div>
          <div class="flex">
            <h1 class="max-w-xs font-normal text-white opacity-70 mr-2">Email:</h1>
            <h1 class="max-w-xs font-normal text-white">schooldriving@gmail.com</h1>
          </div>
          <div class="flex">
            <h1 class="max-w-xs font-normal text-white opacity-70 mr-2">Phone:</h1>
            <h1 class="max-w-xs font-normal text-white">schooldriving.com</h1>
          </div>
        </div>
    </div>
  </div>
  <div class="bg-secondary flex justify-center">
    <h1 class="font-normal text-white opacity-70 mt-4 mb-4">Made with <span class="heart">❤</span> by Hamal Saefudin</h1>
  </div>
</footer>


</body>
</html>