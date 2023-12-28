<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <?php include"header-new.php" ?>
  <style>
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        display: none;
      }
    </style>


<div class="max-h-screen" >
   <!--Hero Section-->
  

<div id="default-carousel" class="relative w-full h-screen  overflow-hidden" data-carousel="slide">
    <!-- Carousel wrapper -->
    
    <div class="relative w-full h-full overflow-hidden  ">

          <div class="flex flex-col justify-center items-center gap-7  h-full   ">
            <h1 class="z-30 text-[#E1E1E1] lg:text-[2rem] text-[1.5rem] font-sans tracking-wider" >Suivi de votre expédition</h1>
            <div class=" z-30 lg:w-[35%] w-[80%] flex flex-row justify-center items-center bg-gray-400 rounded-full relative ">
                <label for="date_charg">
                <iconify-icon icon="material-symbols-light:search" class="text-[#E92C24] absolute font-bold text-[2rem] cursor-pointer right-4 top-1/2 transform -translate-y-1/2 hover:text-[#2B2E86] hover:scale-125 transition-all hover:bg-gray-300 hover:rounded-full hover:p-1 duration-500 " ></iconify-icon>
                </label>
                <input type="number" placeholder="Saisissez votre numéro de suivi" class="w-full bg-gray-200 shadow-inner rounded-full md:p-4 p-2 text-purple-800 after:font-extrabold border-gray-300 focus:ring-2 focus:ring-purple-500  transition-all duration-500"  required>
            </div>
            <p class="z-30 text-[#E1E1E1] font-light tracking-wide lg:text-[1rem]  " >Plusieurs numéros de suivi Besoin d'aide ?</p>
            <button  type="submit" id="loginButton" class="  z-30 bg-red-600 md:p-3 p-2 md:px-8 px-3 flex flex-row justify-center items-center lg:text-[1rem] text-[1rem] gap-4 rounded-full before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500" >
              <p class="text-white" >Envoyer un colis</p>
              <iconify-icon icon="carbon:delivery" class="text-white text-[2rem]" ></iconify-icon>
            </button>
          </div>
          
         <!-- Item 1 -->
        <div class=" hidden duration-700 ease-in-out bg-[url('./newdesign/images/slider/2.jpg')] bg-cover bg-no-repeat w-full z-10" data-carousel-item>
          <div class=" w-full h-screen bg-black/[.5]" ></div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out bg-[url('./newdesign/images/slider/3.jpg')] bg-cover bg-no-repeat w-full" data-carousel-item>
        <div class=" w-full h-screen bg-black/[.5]" ></div>
        </div>
        
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out bg-[url('./newdesign/images/slider/5.jpg')] bg-cover bg-no-repeat w-full" data-carousel-item>
        <div class=" w-full h-screen bg-black/[.5]" ></div>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out bg-[url('./newdesign/images/slider/6.jpg')] bg-cover bg-no-repeat w-full" data-carousel-item>
        <div class=" w-full h-screen bg-black/[.5]" ></div>
        </div>
    </div>
   
   
</div>
<!--end Hero section-->

  
<!--"A propos" Section-->
<div class="bg-[#F6F6F6] flex lg:flex-row flex-col lg:justify-between">
    <div id="content" class="flex flex-col justify-center items-start">
        <div class="lg:w-[70%] flex flex-col lg:justify-start justify-center  max-lg:text-center max-lg:items-center gap-6 mx-5 rounded-3xl p-2 animate__animated" id="animatedContent">
            <h1 class="lg:text-[2rem] text-[2rem] text-[#E3514B]">À PROPOS</h1>
            <p class="tracking-wider leading-9 lg:text-[1rem] text-[1rem]">
                <span class="text-[#E92C24] font-bold">Telemex</span>, développée par la START-UP <span class="text-[#404292] font-bold">TELEFRET</span> SAS, est une solution innovante de livraison de dernier kilomètre spécialisée dans la distribution de colis, de courriers et de repas. Elle se base sur une solution informatique pour la prise de commande, la simulation de prix instantanés, et le suivi en temps réel
            </p>
        </div>
    </div>
    <div>
        <img src="./newdesign/images/design/Apropos.png" class="lg:block hidden animate__animated animate__fadeIn" alt="TELEMEX">
    </div>
</div>

<script>
    // Get the element to animate
    const animatedContent = document.getElementById('animatedContent');

    // Options for the IntersectionObserver
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Adjust the threshold based on your needs
    };

    // Callback function to handle intersection changes
    const handleIntersection = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInLeft');
                observer.unobserve(entry.target);
            }

        });
    };

    // Create the IntersectionObserver
    const observer = new IntersectionObserver(handleIntersection, options);

    // Observe the target element
    observer.observe(animatedContent);
</script>

<!-- end of "A propos" Section-->

<!--avantages Section-->
<div class="flex flex-col gap-12 p-9 bg-[#F6F6F6]/[.3] shadow-md" >
<div class="flex lg:flex-row flex-col gap-8 text-center mt-5" >

  <div class=" flex flex-col justify-center items-center gap-3 hover:shadow-xl transition-all duration-700 rounded-md animate__animated" id="animatedAvantage" >
  <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[120px] w-[100px] md:h-[120px] h-[100px]" viewBox="0 0 99 99" fill="none">
      <circle cx="49.5" cy="49.5" r="49.5" fill="#404292"/>
      <path d="M49.5 73.26C55.8016 73.26 61.845 70.7568 66.3009 66.3009C70.7568 61.845 73.2601 55.8016 73.2601 49.5C73.2601 43.1985 70.7568 37.1551 66.3009 32.6992C61.845 28.2433 55.8016 25.74 49.5 25.74C43.1985 25.74 37.1551 28.2433 32.6992 32.6992C28.2433 37.1551 25.74 43.1985 25.74 49.5C25.74 55.8016 28.2433 61.845 32.6992 66.3009C37.1551 70.7568 43.1985 73.26 49.5 73.26ZM49.5 19.8C53.4003 19.8 57.2624 20.5683 60.8657 22.0608C64.4691 23.5534 67.7432 25.7411 70.5011 28.499C73.259 31.2569 75.4467 34.531 76.9393 38.1343C78.4318 41.7377 79.2 45.5998 79.2 49.5C79.2 57.377 76.0709 64.9313 70.5011 70.5011C64.9313 76.0709 57.377 79.2 49.5 79.2C33.0759 79.2 19.8 65.835 19.8 49.5C19.8 41.6231 22.9291 34.0688 28.499 28.499C34.0688 22.9291 41.6231 19.8 49.5 19.8ZM50.985 34.65V50.2425L64.35 58.1724L62.1226 61.8255L46.5301 52.47V34.65H50.985Z" fill="#F8F8F8"/>
</svg>
<h1 class="text-[#2B2E86] lg:text-[1.3rem] text-[1.3rem] font-semibold" >Prise de commande
 en temps réel</h1>
 <p class="text-[#505050] font-normal lg:w-[60%] w-[70%] lg:text-[1rem] text-[1.1rem] leading-7" >Grâce à Telemex, commandez en temps réel pour une réactivité optimale.</p>
  </div>

  <div class=" flex flex-col justify-center items-center gap-3 hover:shadow-xl transition-all duration-700 rounded-md animate__animated" id="animatedAvantage2" >
  <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[120px] w-[100px] md:h-[120px] h-[100px]" viewBox="0 0 99 99" fill="none">
<circle cx="49.5" cy="49.5" r="49.5" fill="#404292"/>
<path d="M50.5001 63.3699V67.9777M50.5001 40.5132V44.8017M50.5001 79.2008C67.8251 79.2008 80.2001 73.5436 80.2001 60.9519C80.2001 47.2653 72.7751 38.1409 57.9251 31.2976L63.7661 24.363C64.0628 23.908 64.2237 23.3888 64.2326 22.858C64.2414 22.3272 64.0979 21.8037 63.8165 21.3405C63.535 20.8773 63.1257 20.491 62.6301 20.2206C62.1344 19.9502 61.57 19.8053 60.9941 19.8008H40.0061C39.4301 19.8053 38.8657 19.9502 38.37 20.2206C37.8744 20.491 37.4651 20.8773 37.1836 21.3405C36.9022 21.8037 36.7587 22.3272 36.7675 22.858C36.7764 23.3888 36.9373 23.908 37.2341 24.363L43.0751 31.3432C28.225 38.2321 20.8 47.3565 20.8 61.0432C20.8 73.5436 33.175 79.2008 50.5001 79.2008Z" stroke="#F8F8F8" stroke-width="3.07143" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M45.5502 61.2717C46.1542 61.9324 46.9144 62.4569 47.7724 62.8049C48.6305 63.1528 49.5636 63.315 50.5002 63.279C51.9318 63.369 53.3455 62.9439 54.444 62.0931C55.5425 61.2422 56.2403 60.032 56.3907 58.7168C56.2403 57.4016 55.5425 56.1914 54.444 55.3406C53.3455 54.4898 51.9318 54.0647 50.5002 54.1546C49.0687 54.2446 47.655 53.8194 46.5565 52.9686C45.458 52.1178 44.7602 50.9076 44.6097 49.5924C44.7481 48.2726 45.4425 47.0554 46.5439 46.2024C47.6453 45.3494 49.0658 44.9285 50.5002 45.0302C51.4204 44.9783 52.3415 45.1151 53.1975 45.4306C54.0534 45.7462 54.8228 46.2326 55.4502 46.8551" stroke="#F8F8F8" stroke-width="3.07143" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<h1 class="text-[#2B2E86] lg:text-[1.3rem] text-[1.3rem] font-semibold">Simulation instantanée des prix</h1>
<p class="text-[#505050] font-normal lg:w-[60%] w-[70%] lg:text-[1rem] text-[1.1rem] leading-7">Obtenez des tarifs instantanés avec la simulation des prix offerte par Telemex.</p>
  </div>

  <div class=" flex flex-col justify-center items-center gap-3 hover:shadow-xl transition-all duration-700 rounded-md animate__animated" id="animatedAvantage3" >
  <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[120px] w-[100px] md:h-[120px] h-[100px]" viewBox="0 0 99 99" fill="none">
<circle cx="49.5" cy="49.5" r="49.5" fill="#404292"/>
<path d="M57.1093 29.7001C58.4221 29.7001 59.6812 30.2216 60.6095 31.1499C61.5378 32.0782 62.0593 33.3373 62.0593 34.6501V37.1251H65.8213C66.5632 37.1252 67.2957 37.292 67.9644 37.6133C68.6331 37.9346 69.2211 38.4022 69.6848 38.9813L73.3478 43.5625C74.0509 44.4404 74.4342 45.5316 74.4343 46.6563V56.9251C74.4343 58.2379 73.9128 59.4969 72.9845 60.4253C72.0562 61.3536 70.7971 61.8751 69.4843 61.8751C69.4843 63.8443 68.702 65.7329 67.3096 67.1253C65.9171 68.5178 64.0286 69.3001 62.0593 69.3001C60.0901 69.3001 58.2015 68.5178 56.8091 67.1253C55.4166 65.7329 54.6343 63.8443 54.6343 61.8751H44.7343C44.7343 62.8501 44.5423 63.8157 44.1691 64.7165C43.796 65.6173 43.2491 66.4359 42.5596 67.1253C41.8701 67.8148 41.0516 68.3617 40.1508 68.7349C39.2499 69.108 38.2844 69.3001 37.3093 69.3001C36.3343 69.3001 35.3687 69.108 34.4679 68.7349C33.5671 68.3617 32.7485 67.8148 32.0591 67.1253C31.3696 66.4359 30.8227 65.6173 30.4495 64.7165C30.0764 63.8157 29.8843 62.8501 29.8843 61.8751C28.5715 61.8751 27.3125 61.3536 26.3841 60.4253C25.4558 59.4969 24.9343 58.2379 24.9343 56.9251V34.6501C24.9343 33.3373 25.4558 32.0782 26.3841 31.1499C27.3125 30.2216 28.5715 29.7001 29.8843 29.7001H57.1093ZM37.3093 59.4001C36.6529 59.4001 36.0234 59.6608 35.5592 60.125C35.0951 60.5891 34.8343 61.2187 34.8343 61.8751C34.8343 62.5315 35.0951 63.161 35.5592 63.6252C36.0234 64.0893 36.6529 64.3501 37.3093 64.3501C37.9657 64.3501 38.5953 64.0893 39.0594 63.6252C39.5236 63.161 39.7843 62.5315 39.7843 61.8751C39.7843 61.2187 39.5236 60.5891 39.0594 60.125C38.5953 59.6608 37.9657 59.4001 37.3093 59.4001ZM62.0593 59.4001C61.4029 59.4001 60.7734 59.6608 60.3092 60.125C59.8451 60.5891 59.5843 61.2187 59.5843 61.8751C59.5843 62.5315 59.8451 63.161 60.3092 63.6252C60.7734 64.0893 61.4029 64.3501 62.0593 64.3501C62.7157 64.3501 63.3453 64.0893 63.8094 63.6252C64.2736 63.161 64.5343 62.5315 64.5343 61.8751C64.5343 61.2187 64.2736 60.5891 63.8094 60.125C63.3453 59.6608 62.7157 59.4001 62.0593 59.4001ZM57.1093 34.6501H29.8843V56.9251H31.7752C32.4446 56.175 33.2595 55.5687 34.1704 55.1432C35.0812 54.7178 36.0691 54.4819 37.074 54.4499C38.0788 54.418 39.0797 54.5907 40.0157 54.9574C40.9518 55.3242 41.8035 55.8774 42.5192 56.5835L42.8434 56.9251H56.5252L56.8098 56.6256L57.1093 56.341V34.6501ZM65.8213 42.0751H62.0593V54.4501C64.0888 54.4501 65.9277 55.2668 67.2692 56.5835L67.5934 56.9251H69.4843V46.6538L65.8213 42.0751Z" fill="#F8F8F8"/>
</svg>
<h1 class="text-[#2B2E86] lg:text-[1.3rem] text-[1.3rem] font-semibold">Suivi des livraisons</h1>
<p class="text-[#505050] font-normal lg:w-[60%] w-[70%] lg:text-[1rem] text-[1.1rem] leading-7">Suivez vos livraisons en temps réel avec notre service de
suivi intégré.

</p>
  </div>
</div>
<button  type="submit" id="loginButton" class="  z-30 bg-red-600 md:p-3 p-2 lg:text-[1rem] text-[1.2rem] md:px-8 px-4 m-auto flex flex-row justify-center items-center  gap-4  before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500" >
              <p class="text-white" >Envoyer un colis</p>
              <iconify-icon icon="carbon:delivery" class="text-white lg:text-[2rem] text-[2rem]" ></iconify-icon>
            </button>
</div>
<script>
    // Get the element to animate
    const animatedAvantage = document.querySelector('#animatedAvantage');
    const animatedAvantage2 = document.querySelector('#animatedAvantage2');
    const animatedAvantage3 = document.querySelector('#animatedAvantage3');

    // Options for the IntersectionObserver
    const optionsAvantage = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Adjust the threshold based on your needs
    };

    // Callback function to handle intersection changes
    const handleIntersectionAvantage = (entries, observerAvantage) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInUp');
                // Use the correct observer variable name
                observerAvantage.unobserve(entry.target);
            }
        });
    };

    // Create the IntersectionObserver
    const observerAvantage = new IntersectionObserver(handleIntersectionAvantage, optionsAvantage);
    const observerAvantage2 = new IntersectionObserver(handleIntersectionAvantage, optionsAvantage);
    const observerAvantage3 = new IntersectionObserver(handleIntersectionAvantage, optionsAvantage);

    // Observe the target element
    observerAvantage.observe(animatedAvantage);
    observerAvantage2.observe(animatedAvantage2)
    observerAvantage2.observe(animatedAvantage3)
</script>

<!--end of avantages Section-->

<!--services section-->
<div class="bg-[#F6F6F6] p-8 space-y-12" >
  <h1 class="text-center text-[#2B2E86] lg:text-[2rem] text-[2rem]" >Nos services de <span class="text-[#E92C24]" > livraison</span></h1>
  <div class="flex lg:flex-row flex-col justify-center items-center gap-8 " >

  <div class=" border-b-4 border-red-600 bg-[#FFFFFF] hover:scale-105 hover:shadow-xl lg:w-[30%] w-[80%] p-3 flex flex-col justify-center items-center gap-4 transition-all duration-700 animate__animated " id="animatedService"  >
    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[99px] w-[70px] md:h-[99px] h-[70px]" viewBox="0 0 50 51" fill="none">
      <path d="M37.625 48.3791H41.0834C42.8334 48.3791 44.2709 47.0249 44.4792 45.3166L47.9167 10.9833H37.5V2.54578H33.3959V10.9833H23.0417L23.6667 15.8583C27.2292 16.8374 30.5625 18.6083 32.5625 20.5666C35.5625 23.5249 37.625 26.5874 37.625 31.5874V48.3791ZM2.08337 46.2958V44.2124H33.3959V46.2958C33.3959 47.4208 32.4584 48.3791 31.25 48.3791H4.16671C3.02087 48.3791 2.08337 47.4208 2.08337 46.2958ZM33.3959 31.7124C33.3959 15.0458 2.08337 15.0458 2.08337 31.7124H33.3959ZM2.08337 35.8791H33.3334V40.0458H2.08337V35.8791Z" fill="#2B2E86"/>
    </svg>
    <h1 class="text-[#2B2E86] lg:text-[1.3rem] text-[1.5rem] font-semibold" >Repas et Boissons</h1>
    <p  class="text-[#505050] font-normal w-[80%] lg:w-[60%] lg:text-[1rem] text-[1.1rem] leading-7 text-center " >Commandez vos repas et contactez-nous pour assurer la livraison. Que vous soyez à la maison ou au bureau.</p>
  </div>

  <div class=" border-b-4 border-red-600 bg-[#FFFFFF] hover:scale-105 hover:shadow-xl lg:w-[30%] w-[80%] p-3 flex flex-col justify-center items-center gap-4 transition-all duration-700 animate__animated " id="animatedService2">
    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[99px] w-[70px] md:h-[99px] h-[70px]" viewBox="0 0 50 51" fill="none">
      <path d="M19.925 18.3886L20.9979 22.2698C22.0083 25.9261 22.5125 27.7553 23.9979 28.5865C25.4833 29.4198 27.3687 28.9282 31.1396 27.949L35.1396 26.9073C38.9104 25.9282 40.7958 25.4386 41.6541 23.999C42.5125 22.5573 42.0083 20.7282 40.9958 17.0719L39.925 13.1928C38.9146 9.53442 38.4083 7.70525 36.925 6.874C35.4375 6.04067 33.5521 6.53234 29.7812 7.51359L25.7812 8.55109C22.0104 9.53025 20.125 10.0219 19.2687 11.4636C18.4104 12.9032 18.9146 14.7323 19.925 18.3886Z" fill="#2B2E86"/>
      <path d="M4.74378 11.1324C4.79866 10.9345 4.89202 10.7494 5.01849 10.5876C5.14497 10.4259 5.30209 10.2906 5.48087 10.1896C5.65965 10.0886 5.85658 10.0239 6.06041 9.99902C6.26424 9.97418 6.47097 9.98977 6.66878 10.0449L10.2167 11.0282C11.157 11.2836 12.0151 11.7782 12.7073 12.4639C13.3996 13.1496 13.9024 14.0029 14.1667 14.9407L18.6479 31.1615L18.9771 32.299C20.2959 32.7928 21.4292 33.7157 22.1479 34.9407L22.7938 34.7407L41.2729 29.9386C41.4716 29.8869 41.6784 29.8748 41.8817 29.9031C42.085 29.9313 42.2808 29.9993 42.4578 30.1032C42.6348 30.2071 42.7896 30.3448 42.9134 30.5085C43.0372 30.6723 43.1275 30.8588 43.1792 31.0574C43.2309 31.256 43.243 31.4629 43.2147 31.6662C43.1865 31.8695 43.1185 32.0652 43.0146 32.2422C42.9107 32.4192 42.773 32.574 42.6093 32.6978C42.4456 32.8216 42.2591 32.9119 42.0604 32.9636L23.6479 37.747L22.9646 37.9595C22.95 40.6053 21.1229 43.024 18.3604 43.7428C15.0459 44.6053 11.6396 42.697 10.7521 39.4845C9.86461 36.2699 11.8313 32.9657 15.1438 32.1053C15.307 32.0632 15.4717 32.0271 15.6375 31.997L11.1542 15.772C11.0335 15.3551 10.807 14.9766 10.4967 14.6732C10.1864 14.3698 9.80283 14.1519 9.38336 14.0407L5.83336 13.0553C5.63553 13.0006 5.45042 12.9075 5.28859 12.7813C5.12676 12.655 4.99139 12.4981 4.8902 12.3196C4.78902 12.141 4.72401 11.9442 4.69889 11.7405C4.67376 11.5368 4.68901 11.3302 4.74378 11.1324Z" fill="#2B2E86"/>
      </svg>
    <h1 class="text-[#2B2E86] lg:text-[1.3rem] text-[1.5rem] font-semibold" >Colis et Courrier</h1>
    <p class="text-[#505050] font-normal w-[80%] lg:w-[60%] lg:text-[1rem] text-[1.1rem] leading-7 text-center ">Confiez-nous vos livraisons, gagnez du temps et de l'argent, concentrez-vous sur votre activité.</p>
  </div>

  <div class=" border-b-4 border-red-600 bg-[#FFFFFF] hover:scale-105 hover:shadow-xl lg:w-[30%] w-[80%] p-3 flex flex-col justify-center items-center gap-4 transition-all duration-700 animate__animated " id="animatedService3">
    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[99px] w-[70px] md:h-[99px] h-[70px]" viewBox="0 0 50 51" fill="none">
      <g clip-path="url(#clip0_9_140)">
        <path d="M38.1771 36.044H11.8516C11.5365 36.044 11.2787 36.3663 11.2787 36.7602L11.2715 41.0573C11.2715 41.4512 11.5293 41.7735 11.8444 41.7735H38.1771C38.4922 41.7735 38.75 41.4512 38.75 41.0573V36.7602C38.75 36.3663 38.4922 36.044 38.1771 36.044ZM38.1771 44.6382H11.8301C11.515 44.6382 11.2572 44.9605 11.2572 45.3544L11.25 49.6515C11.25 50.0454 11.5079 50.3676 11.823 50.3676H38.1771C38.4922 50.3676 38.75 50.0454 38.75 49.6515V45.3544C38.75 44.9605 38.4922 44.6382 38.1771 44.6382ZM38.1771 27.4499H11.8659C11.5508 27.4499 11.293 27.7721 11.293 28.166L11.2858 32.4631C11.2858 32.857 11.5437 33.1793 11.8588 33.1793H38.1771C38.4922 33.1793 38.75 32.857 38.75 32.4631V28.166C38.75 27.7721 38.4922 27.4499 38.1771 27.4499ZM45.8041 15.0062L26.3177 4.8633C25.8989 4.6461 25.4499 4.5343 24.9965 4.5343C24.543 4.5343 24.094 4.6461 23.6752 4.8633L4.196 15.0062C2.92126 15.6776 2.08337 17.2353 2.08337 18.9721V49.6515C2.08337 50.0454 2.34119 50.3676 2.65629 50.3676H8.38546C8.70056 50.3676 8.95837 50.0454 8.95837 49.6515V27.4499C8.95837 25.8743 10.0039 24.5851 11.293 24.5851H38.7071C39.9961 24.5851 41.0417 25.8743 41.0417 27.4499V49.6515C41.0417 50.0454 41.2995 50.3676 41.6146 50.3676H47.3438C47.6589 50.3676 47.9167 50.0454 47.9167 49.6515V18.9721C47.9167 17.2353 47.0788 15.6776 45.8041 15.0062Z" fill="#2B2E86"/>
      </g>
      <defs>
        <clipPath id="clip0_9_140">
          <rect width="50" height="50" fill="white" transform="translate(0 0.367676)"/>
        </clipPath>
      </defs>
    </svg>
    <h1 class="text-[#2B2E86] lg:text-[1.3rem] text-[1.5rem] font-semibold" >Espace stockage</h1>
    <p class="text-[#505050] font-normal w-[60%]  lg:w-[60%] lg:text-[1rem] text-[1.1rem] leading-7 text-center ">Nous offrons un stockage sécurisé pour les marchandises des e-commerçants.</p>
  </div>

  </div>
</div>
<script>
    // Get the element to animate
    const animatedService = document.querySelector('#animatedService');
    const animatedService2 = document.querySelector('#animatedService2');
    const animatedService3 = document.querySelector('#animatedService3');

    // Options for the IntersectionObserver
    const optionsService = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Adjust the threshold based on your needs
    };

    // Callback function to handle intersection changes
    const handleIntersectionService = (entries, observerService) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInUp');
                // Use the correct observer variable name
                observerService.unobserve(entry.target);
            }
        });
    };

    // Create the IntersectionObserver
    const observerService = new IntersectionObserver(handleIntersectionService, optionsService);
    const observerService2 = new IntersectionObserver(handleIntersectionService, optionsService);
    const observerService3 = new IntersectionObserver(handleIntersectionService, optionsService);

    // Observe the target element
    observerService.observe(animatedService);
    observerService2.observe(animatedService2)
    observerService3.observe(animatedService3)
</script>
<!--end of services section-->

<!--Comment ca marche Section-->
<div class="bg-[#F6F6F6/[.3] max-h-max flex flex-col justify-around gap-12 p-8 mt-5" >
  <h1 class="text-center lg:text-[2rem] text-[2rem] text-[#2B2E86]" > <span class="text-[#E92C24]" > Comment </span> ça marche ?</h1>

  <div class="flex lg:flex-row flex-col justify-between items-center  gap-1" >

    <div id="step1" class="  flex flex-col justify-center items-center gap-4 animate__animated  "  >
      <div class="bg-red-600 shadow-xl lg:w-[70%]  flex justify-center items-center rounded-md p-4" >
      <iconify-icon icon="material-symbols:download" class="text-[4rem] text-white" ></iconify-icon>
      </div>
      <h1 class="lg:text-[1.5rem] text-[1.8rem]" >TÉLÉCHARGER</h1>
      <p class=" text-center lg:text-[1rem] text-[1.1rem]  font-normal tracking-widest" >Visitez notre <span class="text-[#2B2E86]" > site web</span> ou téléchargez <span class="text-[#E92C24]" > l'application mobile</span></p>
    </div>

    <iconify-icon icon="bi:arrow-right" class="text-[3.5rem] lg:block hidden text-[#2B2E86] animate__animated" id="animatedArrow"  ></iconify-icon>
    <iconify-icon icon="solar:arrow-down-outline" class="lg:hidden block text-[5rem] text-[#2B2E86]"></iconify-icon>

    <div id="step2" class="  flex flex-col justify-center items-center gap-2 animate__animated "  >
      <div class="bg-red-600 shadow-xl lg:w-[50%]  flex justify-center items-center rounded-md p-4" >
      <iconify-icon icon="mdi:user-add" class="text-[4rem] text-white" ></iconify-icon>
      </div>
      <h1 class="lg:text-[1.5rem] text-[1.8rem] " >Connectez-vous</h1>
      <p class=" text-center lg:text-[1rem] text-[1.1rem] font-normal tracking-widest" >Connectez-vous, saisissez les détails et adresses, puis cliquez sur "Valider"</p>
    </div>
    <iconify-icon icon="bi:arrow-right" class="text-[3.5rem] lg:block hidden text-[#2B2E86] animate__animated" id="animatedArrow2"  ></iconify-icon>
    <iconify-icon icon="solar:arrow-down-outline" class="lg:hidden block text-[5rem] text-[#2B2E86]"></iconify-icon>

    <div id="step3" class="  flex flex-col justify-center items-center gap-2 animate__animated"  >
      <div class="bg-red-600 shadow-xl lg:w-[50%]  flex justify-center items-center rounded-md p-4" >
      <iconify-icon  icon="majesticons:creditcard" class="text-[4rem] text-white" ></iconify-icon>
      </div>
      <h1 class="lg:text-[1.5rem] text-[1.8rem]" >Commander</h1>
      <p class=" text-center lg:text-[1rem] text-[1.1rem] font-normal tracking-widest" >Après validation de votre commande, recevez un lien de suivi par SMS pour suivre votre colis en temps réel.</span></p>
    </div>
    <iconify-icon icon="bi:arrow-right" class="text-[3.5rem] lg:block hidden text-[#2B2E86] animate__animated" id="animatedArrow3"  ></iconify-icon>
    <iconify-icon icon="solar:arrow-down-outline" class="lg:hidden block text-[5rem] text-[#2B2E86]"></iconify-icon>

    <div id="step4" class="  flex flex-col justify-center items-center gap-2 animate__animated"  >
      <div class="bg-red-600 shadow-xl lg:w-[50%]  flex justify-center items-center rounded-md p-4" >
      <iconify-icon icon="solar:box-bold" class="text-[4rem] text-white" ></iconify-icon>
      </div>
      <h1 class="lg:text-[1.5rem] text-[1.8rem]" >réceptionner</h1>
      <p class=" text-center lg:text-[1rem] text-[1.1rem] font-normal tracking-widest" >Attribuez une note à votre coursier après la livraison pour finaliser l'opération.</span></p>
    </div>
    


  </div>
</div>
<script>
    // Get the element to animate
    const animatedStep = document.querySelector('#step1');
    const animatedStep2 = document.querySelector('#step2');
    const animatedStep3 = document.querySelector('#step3');
    const animatedStep4 = document.querySelector('#step4');

    const animatedArrow = document.querySelector('#animatedArrow');
    const animatedArrow2 = document.querySelector('#animatedArrow2');
    const animatedArrow3 = document.querySelector('#animatedArrow3');

    // Options for the IntersectionObserver
    const optionsStep = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Adjust the threshold based on your needs
    };

    // Callback function to handle intersection changes
    const handleIntersectionStep = (entries, observerStep) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInUp');
                // Use the correct observer variable name
                observerStep.unobserve(entry.target);
            }
        });
    };
     const handleIntersectionArrow = (entries, observerArrow) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInLeft');
                // Use the correct observer variable name
                observerArrow.unobserve(entry.target);
            }
        });
    }; 

    // Create the IntersectionObserver
    const observerStep = new IntersectionObserver(handleIntersectionStep, optionsStep);
    const observerStep2 = new IntersectionObserver(handleIntersectionStep, optionsStep);
    const observerStep3 = new IntersectionObserver(handleIntersectionStep, optionsStep);
    const observerStep4 = new IntersectionObserver(handleIntersectionStep, optionsStep);

    // Observe the target element
    observerStep.observe(animatedStep);
    observerStep2.observe(animatedStep2)
    observerStep3.observe(animatedStep3)
    observerStep4.observe(animatedStep4)

    //Arrow animations
    const observerArrow = new IntersectionObserver(handleIntersectionArrow, optionsStep);
    const observerArrow2 = new IntersectionObserver(handleIntersectionArrow, optionsStep);
    const observerArrow3 = new IntersectionObserver(handleIntersectionArrow, optionsStep);

    observerArrow.observe(animatedArrow)
    observerArrow2.observe(animatedArrow2)
    observerArrow3.observe(animatedArrow3)

</script>
<!--end of Comment ca marche Section-->


<!--why us section-->
<div class="bg-[#F6F6F6] flex flex-col justify-center items-center gap-12 p-7" >
  <h1 class="text-[#2B2E86] lg:text-[2rem] text-[2rem]" >Pourquoi nous <span class="text-[#E92C24]" >choisir</span> ?</h1>
  <div class="flex lg:flex-row flex-col gap-12 justify-center items-center" >

  <div class=" border-b-4 border-red-600 bg-[#FFFFFF] hover:scale-105 hover:shadow-xl lg:w-[30%] w-[80%] p-3 flex flex-col justify-center items-center gap-4 transition-all duration-700 animate__animated " id="why-us-1"  >
  <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-[51px] w-[70px] lg:h-[51px] h-[70px]" viewBox="0 0 51 52" fill="none">
<path d="M18.2144 19.0159C22.7411 19.0159 26.4108 15.3462 26.4108 10.8195C26.4108 6.29271 22.7411 2.62305 18.2144 2.62305C13.6876 2.62305 10.0179 6.29271 10.0179 10.8195C10.0179 15.3462 13.6876 19.0159 18.2144 19.0159Z" stroke="#FF0000" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M21.857 24.8809C19.4548 24.3263 16.9584 24.3219 14.5544 24.868C12.1503 25.4141 9.90079 26.4966 7.97399 28.0345C6.0472 29.5725 4.49298 31.5261 3.42754 33.7493C2.36209 35.9724 1.81298 38.4077 1.82126 40.873V46.3373H21.857M38.8691 49.8709C38.4689 50.0156 38.0307 50.0156 37.6305 49.8709C34.5925 48.6673 31.9857 46.5795 30.1476 43.8776C28.3096 41.1758 27.325 37.9844 27.3213 34.7166V29.9445C27.3052 29.7011 27.3412 29.4571 27.4271 29.2288C27.5129 29.0005 27.6465 28.7932 27.819 28.6208C27.9915 28.4483 28.1988 28.3147 28.4271 28.2288C28.6553 28.143 28.8993 28.1069 29.1427 28.123H47.357C47.6003 28.1069 47.8443 28.143 48.0726 28.2288C48.3009 28.3147 48.5082 28.4483 48.6807 28.6208C48.8531 28.7932 48.9867 29.0005 49.0726 29.2288C49.1584 29.4571 49.1945 29.7011 49.1784 29.9445V34.7166C49.1747 37.9844 48.1901 41.1758 46.352 43.8776C44.514 46.5795 41.9072 48.6673 38.8691 49.8709Z" stroke="#FF0000" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
    <h1 class="text-[#E92C24] lg:text-[1.5rem] text-[1.8rem] font-semibold" >SÉCURITÉ</h1>
    <p  class="text-[#505050] font-normal w-[80%] lg:p-0 p-3 lg:text-[1rem] text-[1.1rem] leading-7 text-center " >Chez TELEMEX, tous les coursiers sont professionnels et identifiés, avec suivi en temps réel.</p>
  </div>

  <div class=" border-b-4 border-red-600 bg-[#FFFFFF] hover:scale-105 hover:shadow-xl lg:w-[30%] w-[80%] p-3 flex flex-col justify-center items-center gap-4 transition-all duration-700 animate__animated " id="why-us-2"  >
  <svg xmlns="http://www.w3.org/2000/svg"  class="lg:w-[51px] w-[70px] lg:h-[51px] h-[70px]" viewBox="0 0 51 51" fill="none">
<g clip-path="url(#clip0_13_309)">
<path d="M5.25793 6.81517H46.3885V0.55249H5.25793C2.7444 0.55249 0.687866 3.37069 0.687866 6.81517V44.3913C0.687866 47.8357 2.7444 50.6539 5.25793 50.6539H14.3981V44.3913H5.25793V6.81517ZM28.1083 25.6032H18.9681V31.177C17.5743 32.8992 16.6831 35.3417 16.6831 38.1286C16.6831 40.9154 17.5743 43.3579 18.9681 45.0802V50.6539H28.1083V45.0802C29.5021 43.3579 30.3933 40.8842 30.3933 38.1286C30.3933 35.373 29.5021 32.8992 28.1083 31.177V25.6032ZM23.5382 42.8256C21.6416 42.8256 20.1106 40.7276 20.1106 38.1286C20.1106 35.5296 21.6416 33.4316 23.5382 33.4316C25.4348 33.4316 26.9657 35.5296 26.9657 38.1286C26.9657 40.7276 25.4348 42.8256 23.5382 42.8256ZM48.6735 13.0778H34.9634C33.8208 13.0778 32.6783 14.6435 32.6783 16.2091V47.5226C32.6783 49.0883 33.8208 50.6539 34.9634 50.6539H48.6735C49.816 50.6539 50.9585 49.0883 50.9585 47.5226V16.2091C50.9585 14.6435 49.816 13.0778 48.6735 13.0778ZM46.3885 44.3913H37.2484V19.3406H46.3885V44.3913Z" fill="#E92C24"/>
</g>
<defs>
<clipPath id="clip0_13_309">
<rect width="51" height="51" fill="white"/>
</clipPath>
</defs>
</svg>
    <h1 class="text-[#E92C24] lg:text-[1.5rem] text-[1.8rem] font-semibold" >FLEXIBILITÉ</h1>
    <p  class="text-[#505050] font-normal w-[80%] lg:p-0 p-3 lg:text-[1rem] text-[1.1rem] leading-7 text-center " >Commandez facilement depuis chez vous ou votre bureau grâce à TELEMEX, sur ordinateur, smartphone ou tablette</p>
  </div>

  <div class=" border-b-4 border-red-600 bg-[#FFFFFF] hover:scale-105 hover:shadow-xl lg:w-[30%] w-[80%] h-[31vh] p-3 lg:gap-4 gap-0 flex flex-col justify-center items-center  transition-all duration-700 animate__animated " id="why-us-3"  >
  <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-[51px] w-[100px] lg:h-[51px] h-[100px]" viewBox="0 0 51 51" fill="none">
<path d="M4.51718 23.8241L46.41 4.772M46.41 4.772L38.5779 1.82129M46.41 4.772L43.4957 12.6041M48.2679 49.2149H39.1607V23.7149C39.1607 23.2318 39.3526 22.7685 39.6942 22.4269C40.0358 22.0853 40.4991 21.8934 40.9822 21.8934H46.4465C46.9295 21.8934 47.3928 22.0853 47.7344 22.4269C48.076 22.7685 48.2679 23.2318 48.2679 23.7149V49.2149ZM30.0536 49.2149H20.9465V29.1791C20.9465 28.6961 21.1384 28.2328 21.4799 27.8912C21.8215 27.5496 22.2848 27.3577 22.7679 27.3577H28.2322C28.7152 27.3577 29.1785 27.5496 29.5201 27.8912C29.8617 28.2328 30.0536 28.6961 30.0536 29.1791V49.2149ZM11.8393 49.2149H2.73218V34.6434C2.73218 34.1604 2.92408 33.6971 3.26566 33.3555C3.60725 33.0139 4.07053 32.822 4.55361 32.822H10.0179C10.501 32.822 10.9643 33.0139 11.3058 33.3555C11.6474 33.6971 11.8393 34.1604 11.8393 34.6434V49.2149Z" stroke="#FF0000" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
    <h1 class="text-[#E92C24] lg:text-[1.5rem] text-[1.3rem] text-center font-semibold" >BOOSTEZ VOTRE PERFORMANCE</h1>
    <p  class="text-[#505050] font-normal w-[80%] lg:p-0 p-3 lg:text-[1rem] text-[1.1rem] leading-7 text-center ">Concentrez-vous sur votre activité et confiez la livraison de vos colis à TELEMEX</p>
  </div>

  </div>
</div>

<!--end of why us section-->

<!--Reviews Section-->
  
<div>
  <h1 class="text-center lg:text-[2rem] text-[2rem] text-[#2B2E86]  mt-8" >ILS PARLENT DE NOUS</h1>
<div id="indicators-carousel" class="relative w-full " data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-[70%] overflow-hidden rounded-lg flex justify-center items-center mt-16">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out m-auto " data-carousel-item="active">

            <div class="lg:w-[40%] m-auto bg-[#2B2E86]/[.3]   shadow-lg max-h-max lg:p-6 p-4 mt-5" >
              <div class="flex flex-row gap-4 justify-start items-center p-3" >
              <iconify-icon icon="mingcute:user-4-line" class="text-white lg:text-[4rem] text-[5rem]" ></iconify-icon>
              <div class="flex flex-col gap-1 font-semibold" >
                <h1 class="text-red-600 lg:text-[1.5rem] text-[1.5rem] " >nom entreprise</h1>
                <div class="flex flex-row" >
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]"  ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>

                </div>
              </div>
              </div>
              <p class="px-8 lg:leading-7 font-normal lg:text-[1rem] text-[1rem] " >J’ai une boutique de vente de produits cosmétiques c’était assez compliqué pour moi de livrer les clients qui me passaient les commandes et qui n’avaient pas le temps de se déplacer pour récupérer. J’ai découvert TELEMEX via le réseau Facebook, je me suis dit je vais essayer en testant leur service. Ça fera un bon bout de temps aujourd’hui que je travaille avec eux et je relève particulièrement un point qui me satisfait, celui des prix accessibles qu’ils pratiquent. Merci TELEMEX</p>
            </div>

        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out " data-carousel-item="active">
        <div class="lg:w-[40%] m-auto bg-[#2B2E86]/[.3]   shadow-lg max-h-max lg:p-6 p-4 mt-5" >
              <div class="flex flex-row gap-4 justify-start items-center p-3" >
              <iconify-icon icon="mingcute:user-4-line" class="text-white lg:text-[4rem] text-[5rem]" ></iconify-icon>
              <div class="flex flex-col gap-1" >
                <h1 class="text-red-600 lg:text-[1.5rem] text-[1.5rem] font-semibold " >nom entreprise</h1>
                <div class="flex flex-row" >
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]"  ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>

                </div>
              </div>
              </div>
              <p class="px-8 lg:leading-7 lg:text-[1rem] text-[1rem] font-normal" >J’ai découvert Telemex par le biais d’une amie qui me l’a recommandé. Moi J’effectue régulièrement mes vente en ligne étant très occupée j’ai souvent du mal à faire à livrer moi-même. Je les ai contacté la première fois en leur fournissant toutes les infos. En un laps de temps l’opération s’est faite. J’ai été très Surprise de la rapidité et le professionnalisme de leur coursier. Dorénavant je ne me tracasserai plus je sais que j’ai la solution.</p>
            </div>
            </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out " data-carousel-item="active">
        <div class="lg:w-[40%] m-auto bg-[#2B2E86]/[.3]   shadow-lg max-h-max lg:p-6 p-4 mt-5" >
              <div class="flex flex-row gap-4 justify-start items-center p-3" >
              <iconify-icon icon="mingcute:user-4-line" class="text-white lg:text-[4rem] text-[5rem]" ></iconify-icon>
              <div class="flex flex-col gap-1" >
                <h1 class="text-red-600 lg:text-[1.5rem] text-[1.5rem] font-semibold " >nom entreprise</h1>
                <div class="flex flex-row" >
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]"  ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>
                <iconify-icon icon="ic:outline-star" class=" text-yellow-400 lg:text-[1.5rem] text-[1.75rem]" ></iconify-icon>

                </div>
              </div>
              </div>
              <p class="px-8 lg:leading-7 lg:text-[1rem] text-[1rem] font-normal " >Notre restaurant est réputé comme l’un des meilleurs dans la ville de Douala. Depuis que nous avons découvert TELEMEX nous n’avons plus de problèmes de livraison avec nos clients. Leur disponibilité et rapidité nous permet de satisfaire nos clients. Merci TELEMEX</p>
            </div>
            </div>
      
    </div>
   
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center bg-red-200 hover:bg-gray-50  shadow-md lg:w-10 lg:h-10 w-10 h-10 rounded-full  focus:ring-2 focus:ring-purple-500">
            <svg class="lg:w-4 lg:h-4 w-4 h-4 text-red-600 hover:text-purple-500 rtl:rotate-180   " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center bg-red-200 hover:bg-gray-50  shadow-md lg:w-10 lg:h-10 w-10 h-10 rounded-full  focus:ring-2 focus:ring-purple-500">
            <svg class="lg:w-4 lg:h-4 w-4 h-4 text-red-600 hover:text-purple-500 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!--end of Reviews Section-->

<!--Download App section-->
<div class="bg-[#F6F6F6]/[.8] mt-16 flex lg:flex-row flex-col justify-around items-center gap-5 p-1 " >
  <h1 class="lg:text-[2rem] text-[2rem] text-[#2B2E86] p-8 animate__animated " id="downloadContent" >Expédiez vos colis via notre <span class="text-[#E92C24]" >app mobile</span></h1>
  <img src="./newdesign/images/group8.svg" id="appImage" class="lg:w-[30%] animate__animated " alt="TELEMEX APP">
</div>
</div>
<script>
    // Get the element to animate
    const animatedDownlaodContent = document.getElementById('downloadContent');
    const animatedAppImage = document.getElementById('appImage');


    // Options for the IntersectionObserver
    const optionsDownload = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Adjust the threshold based on your needs
    };

    // Callback function to handle intersection changes
    const handleIntersectionDownloadContent = (entries, observerDownload) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInLeft');
                observerDownload.unobserve(entry.target);
            }

        });
    };

    const handleIntersectionDownloadImage = (entries, observerDownloadImage) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInRight');
                observerDownloadImage.unobserve(entry.target);
            }

        });
    };

    // Create the IntersectionObserver
    const observerDownload = new IntersectionObserver(handleIntersectionDownloadContent, optionsDownload);

    // Observe the target element
    observerDownload.observe(animatedDownlaodContent);

    const observerDownloadImage = new IntersectionObserver(handleIntersectionDownloadImage, optionsDownload);
    observerDownloadImage.observe(animatedAppImage);

</script>
<!--end of Download App section-->

<!--Sponsors section-->
<div class="p-4 mt-8 flex flex-col gap-6 " >
  <h1 class="lg:text-[2rem] text-[2rem] text-center text-[#2B2E86]" >ILS NOUS FONT <span class="text-[#E92C24]" > CONFIANCE</span></h1>
  

<div id="controls-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-[30vh] overflow-hidden rounded-lg lg:h-96">
         <!-- Item 1 -->
        <div class="flex justify-center items-center duration-700 ease-in-out bg-[#D9D9D9]/[.3] rounded-lg " data-carousel-item>
            <img src="./newdesign/images/design/1.png" class="lg:w-[20%] w-[50%] m-auto" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="flex justify-center items-center duration-700 ease-in-out bg-[#D9D9D9]/[.3] rounded-lg " data-carousel-item>
            <img src="./newdesign/images/design/2.png" class="lg:w-[20%] w-[50%] m-auto" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="flex justify-center items-center duration-700 ease-in-out bg-[#D9D9D9]/[.3] rounded-lg " data-carousel-item>
            <img src="./newdesign/images/design/3.png" class="lg:w-[20%] w-[50%] m-auto" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="flex justify-center items-center duration-700 ease-in-out bg-[#D9D9D9]/[.3] rounded-lg " data-carousel-item>
            <img src="./newdesign/images/design/4.png" class="lg:w-[20%] w-[50%] m-auto" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="flex justify-center items-center duration-700 ease-in-out bg-[#D9D9D9]/[.3] rounded-lg " data-carousel-item>
            <img src="./newdesign/images/design/5.png" class="lg:w-[20%] w-[50%] m-auto" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center lg:w-10 lg:h-10 w-16 h-16 rounded-full group-focus:outline-none">
            <svg class="lg:w-4 lg:h-4 w-10 h-10 text-[#2B2E86] rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center lg:w-10 lg:h-10 w-16 h-16 rounded-full group-focus:outline-none">
            <svg class="lg:w-4 lg:h-4 w-10 h-10 text-[#2B2E86]  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

</div>
<!--end of Sponsors section-->
<!--Performances section-->
<div class="flex flex-col  items-center bg-[#D9D9D9]/[.5] mt-8 p-4" >
  <h2 class="text-center lg:text-[2.5rem] text-[2rem] text-[#2B2E86] font-normal" >Nos performances</h2>
  <div class="flex lg:flex-row flex-col justify-around items-center  w-full" >

    <div class="flex flex-col justify-center items-center hover:shadow-md p-4 hover:rounded-lg transition-all duration-600 animate__animated " id="perf1" >
    <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-[90px] lg:h-[90px] w-[80px] h-[80px]" viewBox="0 0 50 45" fill="none">
<path d="M25 3.75C24.5833 3.75 24.1667 3.9375 23.75 4.125L7.29167 12.375C6.66667 12.75 6.25 13.3125 6.25 14.0625V30.9375C6.25 31.6875 6.66667 32.25 7.29167 32.625L23.75 40.875C24.1667 41.0625 24.5833 41.25 25 41.25C25.4167 41.25 25.8333 41.0625 26.25 40.875L28.125 39.9375C27.5 38.8125 27.2917 37.5 27.0833 36.1875V23.625L39.5833 17.25V24.375C41.0417 24.375 42.5 24.5625 43.75 24.9375V14.0625C43.75 13.3125 43.3333 12.75 42.7083 12.375L26.25 4.125C25.8333 3.9375 25.4167 3.75 25 3.75ZM25 7.875L37.5 14.0625L33.3333 16.125L21.0417 9.75L25 7.875ZM16.875 11.8125L29.1667 18.375L25 20.4375L12.5 14.0625L16.875 11.8125ZM10.4167 17.25L22.9167 23.625V36.1875L10.4167 29.8125V17.25ZM44.375 29.625L36.875 36.375L33.5417 33.375L31.25 35.625L37.0833 41.25L47.0833 32.25L44.375 29.625Z" fill="#FF0000" fill-opacity="0.68"/>
</svg>
<p  class="text-[#E92C24] lg:text-[1.8rem] text-[1.8rem] font-semibold"  >+5000</p>
<p class="text-[#000000]/[.8] font-semibold lg:text-[1.5rem] text-[1.6rem]" >Colis livrés</p>
    </div>

    <div class="flex flex-col justify-center items-center hover:shadow-md p-4 hover:rounded-lg transition-all duration-600 animate__animated" id="perf2"  >
    <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-[90px] lg:h-[90px] w-[80px] h-[80px]" viewBox="0 0 47 44" fill="none">
<path d="M23.5 32.9998C31.3334 32.9998 33.2917 25.6665 33.2917 25.6665H13.7084C13.7084 25.6665 15.6667 32.9998 23.5 32.9998Z" fill="#FF0000" fill-opacity="0.68"/>
<path d="M23.5 3.6665C12.7017 3.6665 3.91663 11.8908 3.91663 21.9998C3.91663 32.1088 12.7017 40.3332 23.5 40.3332C34.2982 40.3332 43.0833 32.1088 43.0833 21.9998C43.0833 11.8908 34.2982 3.6665 23.5 3.6665ZM23.5 36.6665C14.8618 36.6665 7.83329 30.0867 7.83329 21.9998C7.83329 13.913 14.8618 7.33317 23.5 7.33317C32.1382 7.33317 39.1666 13.913 39.1666 21.9998C39.1666 30.0867 32.1382 36.6665 23.5 36.6665Z" fill="#FF0000" fill-opacity="0.68"/>
<path d="M25.4583 22L29.375 22.022C29.3985 21.175 29.7549 20.1667 31.3333 20.1667C32.9117 20.1667 33.2681 21.175 33.2916 22H37.2083C37.2083 19.789 35.6436 16.5 31.3333 16.5C27.023 16.5 25.4583 19.789 25.4583 22ZM15.6666 20.1667C17.245 20.1667 17.6015 21.175 17.625 22H21.5416C21.5416 19.789 19.9769 16.5 15.6666 16.5C11.3563 16.5 9.79163 19.789 9.79163 22L13.7083 22.022C13.7318 21.175 14.0882 20.1667 15.6666 20.1667Z" fill="#FF0000" fill-opacity="0.68"/>
</svg>
<p class="text-[#E92C24] lg:text-[1.8rem] text-[1.8rem] font-semibold" >+200</p>
<p class="text-[#000000]/[.8] font-semibold lg:text-[1.5rem] text-[1.6rem]" >Clients satisfaits</p>
    </div>

  </div>
</div>

<script>
    // Get the element to animate
    const animatedPerf1 = document.getElementById('perf1');
    const animatedPerf2 = document.getElementById('perf2');


    // Options for the IntersectionObserver
    const optionsPerf = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Adjust the threshold based on your needs
    };

    // Callback function to handle intersection changes
    const handleIntersectionPerf1 = (entries, observerPerf1) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInLeft');
                observerPerf1.unobserve(entry.target);
            }

        });
    };

    const handleIntersectionPerf2 = (entries, observerPerf2) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the animation class when the element comes into view
                entry.target.classList.add('animate__fadeInRight');
                observerPerf2.unobserve(entry.target);
            }

        });
    };

    // Create the IntersectionObserver
    const observerPerf1 = new IntersectionObserver(handleIntersectionPerf1, optionsDownload);

    // Observe the target element
    observerPerf1.observe(animatedPerf1);

    const observerPerf2 = new IntersectionObserver(handleIntersectionPerf2, optionsDownload);
    observerPerf2.observe(animatedPerf2);

</script>
<!--end of performance section-->


 

  <?php include"footer-new.php" ?>
  </div>