<?php
global $title;
global $seperator;
global $description;

?>



        <!-- header/navbar -->
            <?php require_once("frontend/pages/components/navbar.php"); ?>
        <!-- end of header/navbar -->
        <main>
              <!--Pageheader start-->
         <div class="pattern-square" id="Pageheader"></div>
         <section class="pt-lg-7 pt-5" data-cue="fadeIn">
            <div class="container">
               <div class="row align-items-center justify-content-lg-start justify-content-center flex-lg-nowrap">
                  <div class="col-lg-5 col-12" data-cues="slideInDown" data-group="page-title" data-delay="700">
                     <div class="text-center text-lg-start" data-cue="zoomIn">
                        <div class="mb-5">
                           <span class="badge align-items-center p-2 pe-3 ps-3 fs-6 text-primary border border-primary-subtle rounded-pill mb-4">Asimetrics: New way to learn finance</span>
                           <h1 class="mb-3 display-4">Teman Perjalanan Finansialmu!</h1>
                           <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel suscipit accusamus accusantium tenetur, voluptatem odio sed voluptas dolorem dignissimos consequuntur ipsum quae mollitia incidunt ratione eaque aut illum repudiandae consectetur.</p>
                        </div>
                        <div data-cues="slideInDown" data-group="page-title-buttons" data-delay="800">
                           <a href="#" class="btn btn-primary me-2">Gabung Sekarang!</a>
                        </div>

                        
                     </div>
                  </div>
                  <div class="col-xxl-7 offset-xxl-1 col-lg-7 col-12 mt-5 mt-lg-0" data-cue="fadeIn" data-delay="1000">
                     <div class="position-relative">
                        <div class="bg-light-subtle p-md-4 p-2 rounded-4 border scene" data-relative-input="true">
                           <div data-depth="0.09">
                              <figure data-cues="zoomIn" data-delay="900">
                                 <img src="assets/images/landings/saas/app-screen-1.jpg" alt="landing" class="w-100 rounded-4 shadow border" />
                              </figure>
                           </div>
                        </div>
                        
               </div>
            </div>
         </section>
         <!--Pageheader end-->

         <!--Trusted worldwide start-->
         <!-- <div class="my-xl-7 py-5 features" data-cue="fadeIn">
            <div class="container py-2">
               <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                     <div class="text-center mb-4 mb-lg-7">
                        <small class="text-uppercase ls-md fw-semibold">
                           Supported by
                           
                        </small>
                     </div>
                     <div class="swiper logoSwiper row" data-cue="slideInDown">
                        <div class="swiper-wrapper  pb-6">
                           <div class="swiper-slide">
                              <div data-cue="slideInDown">
                                 <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-1.svg" alt="logo" />
                                 </figure>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div data-cue="slideInDown">
                                 <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-2.svg" alt="logo" />
                                 </figure>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div data-cue="slideInDown">
                                 <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-3.svg" alt="logo" />
                                 </figure>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div data-cue="slideInDown">
                                 <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-4.svg" alt="logo" />
                                 </figure>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div data-cue="slideInDown">
                                 <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-5.svg" alt="logo" />
                                 </figure>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!--Trusted worldwide end-->

         <!--Features start-->
         <section id="features" class="my-xl-7 py-5" data-cue="fadeIn">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                     <div class="text-center mb-6 mb-lg-9">
                        <small class="text-primary text-uppercase ls-md fw-semibold">features</small>
                        <h2 class="my-3">Features to make you stand out</h2>
                        <p class="mb-0 lead">Manage your projects from start to finish. With all of your projects in Block, you’ll always know who’s doing what, by when.</p>
                     </div>
                  </div>
               </div>
               <div class="row g-lg-7 gy-5">
                  <div class="col-lg-4 col-md-6">
                     <div class="text-center text-md-start" data-cue="zoomIn">
                        <div class="icon-lg icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle mb-5">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle text-primary" viewBox="0 0 16 16">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                           </svg>
                        </div>

                        <h4>Realistic Investment Simulations</h4>
                        <p class="mb-0">Nikmati simulasi investasi yang realistis dengan data pasar yang akurat dan dinamis. Pengalaman ini membantu Anda memahami fluktuasi pasar dan strategi investasi yang efektif.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="text-center text-md-start" data-cue="zoomIn">
                        <div class="icon-lg icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle mb-5">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-flag-fill text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                           </svg>
                        </div>

                        <h4>Portfolio Management</h4>
                        <p class="mb-0">Bangun dan kelola portofolio investasi Anda sendiri. Diversifikasi aset Anda dengan berbagai pilihan investasi, termasuk saham, obligasi, properti, dan lain-lain.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="text-center text-md-start" data-cue="zoomIn">
                        <div class="icon-lg icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle mb-5">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clock-history text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                              <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                           </svg>
                        </div>

                        <h4>Interactive Learning Modules</h4>
                        <p class="mb-0">Pelajari dasar-dasar investasi melalui modul interaktif yang dirancang untuk pemula hingga tingkat lanjutan. Setiap modul mencakup teori, contoh kasus, dan latihan praktis.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="text-center text-md-start" data-cue="zoomIn">
                        <div class="icon-lg icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle mb-5">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layout-text-window-reverse text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z" />
                              <path
                                 d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z" />
                           </svg>
                        </div>

                        <h4>Community and Social Features</h4>
                        <p class="mb-0">Terhubung dengan komunitas investor lainnya. Bagikan strategi, diskusikan tren pasar, dan ikuti turnamen investasi untuk menguji kemampuan Anda.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="text-center text-md-start" data-cue="zoomIn">
                        <div class="icon-lg icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle mb-5">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-paperclip text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z" />
                           </svg>
                        </div>

                        <h4>In-Game Tutorials and Support</h4>
                        <p class="mb-0">Manfaatkan tutorial dalam game dan dukungan pengguna untuk membantu Anda memahami setiap fitur dan fungsi game. Tim dukungan kami siap membantu Anda kapan saja.</p>
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
         <!--Features end-->

         <!--Benefit start-->
<section id="benefit">
   <div class="container">
      <div class="row gx-lg-10">
         <div class="col-md-6 col-12">
            <small class="text-primary text-uppercase ls-md fw-bold">Benefit</small>
            <h2 class="my-3">Pengalaman Praktis Tanpa Risiko </h2>
            <p class="mb-0 me-lg-9">
               Dapatkan pengalaman praktis dalam mengelola portofolio investasi tanpa mempertaruhkan uang nyata. Anda bisa mencoba berbagai strategi investasi, melihat hasilnya, dan belajar dari kesalahan tanpa kerugian finansial.
            </p>
         </div>
         <div class="col-md-6 col-12 mb-10">
            <div class="border-bottom my-5 pb-5 d-flex me-lg-9">
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                     <path
                        d="M28.4908 5.50939C25.4433 2.46189 21.31 0.749817 17.0002 0.749817C12.6904 0.749817 8.55708 2.46189 5.50957 5.50939C2.46207 8.55689 0.75 12.6902 0.75 17C0.75 21.3098 2.46207 25.4431 5.50957 28.4906C8.55708 31.5381 12.6904 33.2502 17.0002 33.2502C21.31 33.2502 25.4433 31.5381 28.4908 28.4906C31.5383 25.4431 33.2504 21.3098 33.2504 17C33.2504 12.6902 31.5383 8.55689 28.4908 5.50939ZM10.7502 29.2453V24.5H23.2502V29.2453C21.3134 30.2283 19.1721 30.7406 17.0002 30.7406C14.8283 30.7406 12.687 30.2283 10.7502 29.2453ZM13.2502 19.5H20.7502V22H13.2502V19.5ZM15.4377 17L17.0002 9.50001L18.5627 17H15.4377ZM26.7221 26.7235C26.4096 27.036 26.0846 27.3281 25.7502 27.6047V24.5C25.7502 23.837 25.4868 23.2011 25.018 22.7322C24.5491 22.2634 23.9132 22 23.2502 22V19.5C23.2494 18.9022 23.0345 18.3245 22.6444 17.8716C22.2542 17.4187 21.7147 17.1206 21.1236 17.0313L19.4471 8.99064C19.3294 8.42881 19.0219 7.92461 18.5763 7.56271C18.1308 7.20082 17.5742 7.00328 17.0002 7.00328C16.4262 7.00328 15.8696 7.20082 15.4241 7.56271C14.9785 7.92461 14.671 8.42881 14.5533 8.99064L12.8768 17.0313C12.2857 17.1206 11.7462 17.4187 11.356 17.8716C10.9659 18.3245 10.751 18.9022 10.7502 19.5V22C10.0872 22 9.45127 22.2634 8.98243 22.7322C8.51359 23.2011 8.2502 23.837 8.2502 24.5V27.6047C7.91582 27.3281 7.59082 27.036 7.27832 26.7235C5.35511 24.8006 4.04531 22.3506 3.51457 19.6833C2.98383 17.016 3.25599 14.2512 4.29663 11.7385C5.33726 9.22592 7.09963 7.07832 9.36086 5.56735C11.6221 4.05637 14.2806 3.24989 17.0002 3.24989C19.7198 3.24989 22.3783 4.05637 24.6395 5.56735C26.9008 7.07832 28.6631 9.22592 29.7038 11.7385C30.7444 14.2512 31.0166 17.016 30.4858 19.6833C29.9551 22.3506 28.6453 24.8006 26.7221 26.7235Z"
                        fill="#EA6C08" />
                  </svg>
               </div>
               <div>
                  <p class="ms-4 mb-0">
                     <span class="text-dark fw-bold">Belajar investasi dan finansial dengan harga yang murah dan menyenangkan
                     </span>
                  </p>
               </div>
            </div>
            <div class="border-bottom mb-5 pb-5 d-flex me-lg-9">
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                     <path
                        opacity="0.2"
                        d="M37.5 20C27.5 20 37.5 33.75 27.5 33.75H12.5C2.5 33.75 12.5 20 2.5 20C12.5 20 2.5 6.25 12.5 6.25H27.5C37.5 6.25 27.5 20 37.5 20Z"
                        fill="#EA6C08" />
                     <path
                        d="M6.74707 20C7.2768 20.4357 7.70365 20.9832 7.99707 21.6031C8.74707 23.15 8.74707 25.0406 8.74707 26.875C8.74707 30.6734 8.90332 32.5 12.4971 32.5C12.8286 32.5 13.1465 32.6317 13.381 32.8661C13.6154 33.1005 13.7471 33.4185 13.7471 33.75C13.7471 34.0815 13.6154 34.3995 13.381 34.6339C13.1465 34.8683 12.8286 35 12.4971 35C9.76582 35 7.91582 34.0406 6.99707 32.1469C6.24707 30.6 6.24707 28.7094 6.24707 26.875C6.24707 23.0766 6.09082 21.25 2.49707 21.25C2.16555 21.25 1.84761 21.1183 1.61319 20.8839C1.37877 20.6495 1.24707 20.3315 1.24707 20C1.24707 19.6685 1.37877 19.3505 1.61319 19.1161C1.84761 18.8817 2.16555 18.75 2.49707 18.75C6.09082 18.75 6.24707 16.9234 6.24707 13.125C6.24707 11.2937 6.24707 9.4 6.99707 7.85312C7.91895 5.95937 9.76894 5 12.5002 5C12.8317 5 13.1497 5.1317 13.3841 5.36612C13.6185 5.60054 13.7502 5.91848 13.7502 6.25C13.7502 6.58152 13.6185 6.89946 13.3841 7.13388C13.1497 7.3683 12.8317 7.5 12.5002 7.5C8.90644 7.5 8.7502 9.32656 8.7502 13.125C8.7502 14.9563 8.7502 16.85 8.0002 18.3969C7.70587 19.0172 7.27793 19.5646 6.74707 20ZM37.5002 18.75C33.9064 18.75 33.7502 16.9234 33.7502 13.125C33.7502 11.2937 33.7502 9.4 33.0002 7.85312C32.0814 5.95937 30.2314 5 27.5002 5C27.1687 5 26.8507 5.1317 26.6163 5.36612C26.3819 5.60054 26.2502 5.91848 26.2502 6.25C26.2502 6.58152 26.3819 6.89946 26.6163 7.13388C26.8507 7.3683 27.1687 7.5 27.5002 7.5C31.0939 7.5 31.2502 9.32656 31.2502 13.125C31.2502 14.9563 31.2502 16.85 32.0002 18.3969C32.2936 19.0168 32.7205 19.5643 33.2502 20C32.7205 20.4357 32.2936 20.9832 32.0002 21.6031C31.2502 23.15 31.2502 25.0406 31.2502 26.875C31.2502 30.6734 31.0939 32.5 27.5002 32.5C27.1687 32.5 26.8507 32.6317 26.6163 32.8661C26.3819 33.1005 26.2502 33.4185 26.2502 33.75C26.2502 34.0815 26.3819 34.3995 26.6163 34.6339C26.8507 34.8683 27.1687 35 27.5002 35C30.2314 35 32.0814 34.0406 33.0002 32.1469C33.7502 30.6 33.7502 28.7094 33.7502 26.875C33.7502 23.0766 33.9064 21.25 37.5002 21.25C37.8317 21.25 38.1497 21.1183 38.3841 20.8839C38.6185 20.6495 38.7502 20.3315 38.7502 20C38.7502 19.6685 38.6185 19.3505 38.3841 19.1161C38.1497 18.8817 37.8317 18.75 37.5002 18.75Z"
                        fill="#EA6C08" />
                  </svg>
               </div>
               <div>
                  <p class="ms-4 mb-0">
                     <span class="text-dark fw-bold">Belajar investasi tanpa resiko karena berupa game simulasi investasi 
                     </span>
                     
                  </p>
               </div>
            </div>
            <div class="border-bottom mb-5 pb-5 d-flex me-lg-9">
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                     <path
                        opacity="0.2"
                        d="M33.75 10L31.85 20.4469C31.7453 21.0229 31.4418 21.544 30.9924 21.9192C30.543 22.2944 29.9761 22.4999 29.3906 22.5H9.77344L7.5 10H33.75Z"
                        fill="#EA6C08" />
                     <path
                        d="M34.7094 9.19844C34.592 9.05802 34.4453 8.94509 34.2795 8.8676C34.1137 8.79011 33.933 8.74997 33.75 8.75H8.54375L7.77969 4.55312C7.67503 3.97709 7.37153 3.45605 6.92209 3.08085C6.47265 2.70565 5.90578 2.50008 5.32031 2.5H2.5C2.16848 2.5 1.85054 2.6317 1.61612 2.86612C1.3817 3.10054 1.25 3.41848 1.25 3.75C1.25 4.08152 1.3817 4.39946 1.61612 4.63388C1.85054 4.8683 2.16848 5 2.5 5H5.3125L9.30625 26.9203C9.42389 27.5704 9.71119 28.1779 10.1391 28.6812C9.54851 29.2328 9.12226 29.9372 8.90759 30.7163C8.69291 31.4953 8.6982 32.3186 8.92286 33.0948C9.14752 33.871 9.58277 34.5699 10.1804 35.1139C10.7779 35.6578 11.5145 36.0256 12.3084 36.1766C13.1022 36.3275 13.9224 36.2555 14.6779 35.9688C15.4334 35.682 16.0947 35.1916 16.5885 34.552C17.0823 33.9123 17.3893 33.1484 17.4755 32.3449C17.5616 31.5414 17.4235 30.7298 17.0766 30H24.1734C23.8938 30.5854 23.7491 31.2262 23.75 31.875C23.75 32.7403 24.0066 33.5862 24.4873 34.3056C24.9681 35.0251 25.6513 35.5858 26.4508 35.917C27.2502 36.2481 28.1299 36.3347 28.9785 36.1659C29.8272 35.9971 30.6067 35.5804 31.2186 34.9686C31.8304 34.3567 32.2471 33.5772 32.4159 32.7285C32.5847 31.8799 32.4981 31.0002 32.167 30.2008C31.8358 29.4013 31.2751 28.7181 30.5556 28.2373C29.8362 27.7566 28.9903 27.5 28.125 27.5H12.9953C12.7026 27.5 12.4191 27.3972 12.1944 27.2096C11.9697 27.022 11.818 26.7615 11.7656 26.4734L11.2703 23.75H29.3953C30.2735 23.7499 31.1238 23.4415 31.798 22.8787C32.4721 22.3159 32.9274 21.5344 33.0844 20.6703L34.9844 10.2234C35.0165 10.0429 35.0086 9.85745 34.961 9.6803C34.9135 9.50316 34.8276 9.33865 34.7094 9.19844ZM15 31.875C15 32.2458 14.89 32.6084 14.684 32.9167C14.478 33.225 14.1851 33.4654 13.8425 33.6073C13.4999 33.7492 13.1229 33.7863 12.7592 33.714C12.3955 33.6416 12.0614 33.463 11.7992 33.2008C11.537 32.9386 11.3584 32.6045 11.286 32.2408C11.2137 31.8771 11.2508 31.5001 11.3927 31.1575C11.5346 30.8149 11.775 30.522 12.0833 30.316C12.3916 30.11 12.7542 30 13.125 30C13.6223 30 14.0992 30.1975 14.4508 30.5492C14.8025 30.9008 15 31.3777 15 31.875ZM30 31.875C30 32.2458 29.89 32.6084 29.684 32.9167C29.478 33.225 29.1851 33.4654 28.8425 33.6073C28.4999 33.7492 28.1229 33.7863 27.7592 33.714C27.3955 33.6416 27.0614 33.463 26.7992 33.2008C26.5369 32.9386 26.3584 32.6045 26.286 32.2408C26.2137 31.8771 26.2508 31.5001 26.3927 31.1575C26.5346 30.8149 26.775 30.522 27.0833 30.316C27.3916 30.11 27.7542 30 28.125 30C28.6223 30 29.0992 30.1975 29.4508 30.5492C29.8025 30.9008 30 31.3777 30 31.875ZM30.625 20.2234C30.5725 20.5122 30.4201 20.7734 30.1944 20.9611C29.9687 21.1488 29.6842 21.2511 29.3906 21.25H10.8156L8.99844 11.25H32.2516L30.625 20.2234Z"
                        fill="#EA6C08" />
                  </svg>
               </div>
               <div>
                  <p class="ms-4 mb-0">
                     <span class="text-dark fw-bold">Dapat memahami analisis fundamental dan teknikal yang ada di pasar saham
                     </span>
                     
                  </p>
               </div>
            </div>
            <div class="border-bottom mb-5 pb-5 d-flex me-lg-9">
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                     <path opacity="0.2" d="M30 8.75V31.25H10V8.75H30Z" fill="#EA6C08" />
                     <path
                        d="M27.5 2.5H12.5C11.5054 2.5 10.5516 2.89509 9.84835 3.59835C9.14509 4.30161 8.75 5.25544 8.75 6.25V33.75C8.75 34.7446 9.14509 35.6984 9.84835 36.4016C10.5516 37.1049 11.5054 37.5 12.5 37.5H27.5C28.4946 37.5 29.4484 37.1049 30.1517 36.4016C30.8549 35.6984 31.25 34.7446 31.25 33.75V6.25C31.25 5.25544 30.8549 4.30161 30.1517 3.59835C29.4484 2.89509 28.4946 2.5 27.5 2.5ZM11.25 10H28.75V30H11.25V10ZM12.5 5H27.5C27.8315 5 28.1495 5.1317 28.3839 5.36612C28.6183 5.60054 28.75 5.91848 28.75 6.25V7.5H11.25V6.25C11.25 5.91848 11.3817 5.60054 11.6161 5.36612C11.8505 5.1317 12.1685 5 12.5 5ZM27.5 35H12.5C12.1685 35 11.8505 34.8683 11.6161 34.6339C11.3817 34.3995 11.25 34.0815 11.25 33.75V32.5H28.75V33.75C28.75 34.0815 28.6183 34.3995 28.3839 34.6339C28.1495 34.8683 27.8315 35 27.5 35Z"
                        fill="#EA6C08" />
                  </svg>
               </div>
               <div>
                  <p class="ms-4 mb-0">
                     <span class="text-dark fw-bold">Melatih kemampuan investasi tanpa takut rugi
                     </span>
                     
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
         <!--Benefit end-->


<!--Event tickets start-->
<section id="price" class="py-xl-9 py-5 bg-gray-100">
   <div class="container">
       <div class="row">
           <div class="col-md-8 offset-md-2">
               <div class="text-center mb-xl-9 mb-5">
                   <h2 class="mb-3">Price</h2>
                   <p class="mb-0 lead px-xl-7">Grab your plan today.
</p>
               </div>
           </div>
       </div>
       <!-- Pricing Style 3 -->
       <div class="table-responsive-lg">
           <div class="row flex-nowrap me-5 me-lg-0">
               <div class="col-lg-4 col-md-6 col-12">
                   <!--card-->
                   <div class="card bg-gray-200 border-0 p-2 mb-5 mb-xl-0">
                       <div class="card-body bg-white shadow rounded-2">
                           <div class="mb-5">
                               <h3 class="h6 mb-3">Free</h3>
                               <h2 class="d-flex align-items-center">
                                   <span class="text-dark">Rp0*</span>
                               </h2>
                           </div>
                           

                           <ul class="list-unstyled">
                               <li class="mb-2">
                                   <svg xmlns="http://www.w3.org/2000/svg"
                                       width="14" height="14"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-success"
                                       viewBox="0 0 16 16">
                                       <path
                                           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                   <span class="ms-3">3 Day Access</span>
                               </li>
                               <li class="mb-2">
                                   <svg xmlns="http://www.w3.org/2000/svg"
                                       width="14" height="14"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-success"
                                       viewBox="0 0 16 16">
                                       <path
                                           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                   <span class="ms-3">modul dasar investasi dan finansial
                                 </span>
                               </li>
                           </ul>
                           <div class="d-grid mt-5">
                               <a href="#"
                                   class="btn btn-outline-primary">Register
                                   Now</a>
                           </div>
                       </div>
                   </div>
                   <!--card-->
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                   <!--card-->
                   <div
                       class="card bg-primary-subtle border-0 p-2 mb-5 mb-xl-0">
                       <div class="card-body bg-white shadow rounded-2">
                           <div class="mb-5">
                               <h3 class="h6 mb-3">VIP</h3>
                               <h2 class="d-flex align-items-center">
                                   <span class="text-dark">Rp199.000/</span>
                                   <span
                                       class="text-body-tertiary ms-1">Bulan</span>
                               </h2>
                           </div>
                           

                           <ul class="list-unstyled">
                               <li class="mb-2">
                                   <svg xmlns="http://www.w3.org/2000/svg"
                                       width="14" height="14"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-success"
                                       viewBox="0 0 16 16">
                                       <path
                                           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                   <span class="ms-3">akses semua fitur
                                 </span>
                               </li>
                               <li class="mb-2">
                                   <svg xmlns="http://www.w3.org/2000/svg"
                                       width="14" height="14"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-success"
                                       viewBox="0 0 16 16">
                                       <path
                                           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                   <span class="ms-3">Unlock beberapa karakter dan pekerjaan 
                                 </span>
                               </li>
                               
                               <li class="mb-2">
                                   <svg xmlns="http://www.w3.org/2000/svg"
                                       width="14" height="14"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-success"
                                       viewBox="0 0 16 16">
                                       <path
                                           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                   <span class="ms-3">2x Free konsultasi 

                                 </span>
                               </li>
                           </ul>
                           <div class="d-grid mt-5">
                               <a href="#"
                                   class="btn btn-primary">Register</a>
                           </div>
                       </div>
                   </div>
                   <!--card-->
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                   <!--card-->
                   <div class="card bg-gray-200 border-0 p-2 mb-xl-0">
                       <div class="card-body bg-white shadow rounded-2">
                           <div class="mb-5">
                               <h3 class="h6 mb-3">VIP + VIP Plus</h3>
                               <h2 class="d-flex align-items-center">
                                   <span class="text-dark">Rp249.000/</span>
                                   <span
                                       class="text-body-tertiary ms-1">Bulan</span>
                               </h2>
                           </div>

                           <ul class="list-unstyled">
                              <li class="mb-2">
                                  <svg xmlns="http://www.w3.org/2000/svg"
                                      width="14" height="14"
                                      fill="currentColor"
                                      class="bi bi-check-circle-fill text-success"
                                      viewBox="0 0 16 16">
                                      <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                  </svg>
                                  <span class="ms-3">akses semua fitur
                                </span>
                              </li>
                              <li class="mb-2">
                                  <svg xmlns="http://www.w3.org/2000/svg"
                                      width="14" height="14"
                                      fill="currentColor"
                                      class="bi bi-check-circle-fill text-success"
                                      viewBox="0 0 16 16">
                                      <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                  </svg>
                                  <span class="ms-3">Unlock semua karakter (include limited karakter) 
                                </span>
                              </li>
                              
                              <li class="mb-2">
                                  <svg xmlns="http://www.w3.org/2000/svg"
                                      width="14" height="14"
                                      fill="currentColor"
                                      class="bi bi-check-circle-fill text-success"
                                      viewBox="0 0 16 16">
                                      <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                  </svg>
                                  <span class="ms-3">5x Free konsultasi 

                                </span>
                              </li>
                          </ul>
                           <div class="d-grid mt-5">
                               <a href="#"
                                   class="btn btn-outline-primary">Get the
                                   VIP plus tickets</a>
                           </div>
                       </div>
                   </div>
                   <!--card-->
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12">
               <div class="text-center mt-5">
                   <small>* Additional 5% VAT charge applies to
                       individuals, companies VAT non-payers, and companies
                       in the country.</small>
               </div>
           </div>
       </div>
   </div>
</section>
<!--Event tickets end-->
<!--Have question start-->
<section id="FAQ" class="py-xl-9 py-5 bg-gray-100">
   <div class="container">
       <div class="row">
           <div class="col-lg-5 col-md-6">
               <div class="mb-7 mb-md-0 me-lg-7">
                   <div class="mb-4">
                       <h2 class="mb-3">Still have questions?</h2>
                       <p class="mb-0">We've answered a few FAQs to get you
                           started. But please don't hesitate to reach out
                           with more.</p>
                   </div>

                   <a href="#!" class="btn btn-outline-primary">Support
                       Team</a>
                   <span class="ms-3">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16"
                           height="16" fill="currentColor"
                           class="bi bi-telephone text-primary"
                           viewBox="0 0 16 16">
                           <path
                               d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                       </svg>
                   </span>
                   <span class="ms-2 text-primary">(+62) 877-8323-1232</span>
               </div>
           </div>
           <div class="col-lg-7 col-md-6">
               <div class="pb-4 border-bottom">
                   <h4 class="mb-3">Q1?</h4>
                   <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor a sed labore voluptas suscipit reiciendis architecto magnam eum. Distinctio necessitatibus quis nisi quisquam laboriosam nihil quod doloribus dolores rem expedita?
                   </p>
               </div>
               <div class="py-4 border-bottom">
                   <h4 class="mb-3">Q2?</h4>
                   <p class="mb-0">
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ipsa recusandae, obcaecati consectetur placeat assumenda facilis perspiciatis praesentium unde, deleniti iste dolor fugit vel nobis. Iste inventore aliquid itaque accusantium.
                   </p>
               </div>
               <div class="py-4 border-bottom">
                   <h4 class="mb-3">Q3?</h4>
                   <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, rem rerum nobis fuga velit debitis ullam aspernatur possimus laboriosam, natus officiis, repudiandae delectus. Officia accusantium impedit adipisci corrupti officiis nostrum?</p>
               </div>
               <div class="py-4 border-bottom">
                   <h4 class="mb-3">Q4?</h4>
                   <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, animi tempore? Voluptas, quos corporis. Sapiente voluptatum et, ex voluptas in rerum quibusdam aut eveniet! Perferendis dignissimos quos id voluptatem libero.</p>
               </div>
           </div>
       </div>
   </div>
</section>
<!--Have question end-->
        </main>
      <!-- footer -->
            <?php require_once("frontend/pages/components/footer.php"); ?>
     <!-- end of footer -->
