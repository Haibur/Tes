<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    TK ASY-SYAWALIYYAH
  </title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <!--Replace with your tailwind.css once created-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
  <style>
    .gradient {
      background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
    }
  </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
  <!--Nav-->
  <nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="<?= base_url(); ?>">
          TKSmart
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3">
            <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="<?= base_url(); ?>">Beranda</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Tentang Kami</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Cara Pendaftaran</a>
          </li>
        </ul>
        <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="https://cangkulterus.com/TK/Login">Login</a>
        </button>
      </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
  </nav>
  <!--Hero-->
  <div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full">Ayo Daftar Segera !</p>
        <h1 class="my-4 text-5xl font-bold leading-tight">
          Dapatkan Promo Potongan Sebesar 10%
        </h1>
        <!-- <p class="leading-normal text-2xl mb-8">
            Taman Kanak-kanak Islam Asy-Syukriyyah berupaya menyelenggarakan konsep pendidikan pra sekolah dengan menggunakan pembelajaran melalui sentra. 
            Kegiatan-kegiatan yang ada didalam sentra disiapkan untuk membangun akhlakul karimah, kecerdasan jamak dan enam domain berpikir pada anak (Aestetika, Afeksi, Bahasa, Kognisi, Fisik dan Sosial).
          </p> -->
        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <?php $TKpromo = 270000; ?>
          <a href="https://cangkulterus.com/TK/Pendaftaran/daftar/2">Klik Disini</a>
        </button>
      </div>
      <!--Right Col-->
      <div class=" w-full md:w-3/5 py-6 text-center">
        <img class="w-full md:w-4/5 z-50" src="<?= base_url(); ?>assets/A3.png">
      </div>
    </div>
  </div>
  <div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
        </g>
      </g>
    </svg>
  </div>
  <section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-12">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Mengapa Memilih TK ASY-SYAWALIYYAH ?
      </h1>
      <div class="w-full mb-6">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <div class="flex flex-wrap">
        <div class="w-5/6 sm:w-1/2 p-6">
          <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
            1. Metode Pembelajaran Adaptif
          </h3>
          <p class="text-gray-600 mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
            <br />
            <br />
            <!-- 
              Images from:

              <a class="text-pink-500 underline" href="https://undraw.co/">undraw.co</a> -->
          </p>
        </div>
        <div class="w-full sm:w-1/2 p-6">
          <svg data-name="Layer 2" id="Layer_2" viewBox="0 0 2050 2050" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <style>
                .cls-1 {
                  fill: #4d4c78;
                }

                .cls-2 {
                  fill: #323150;
                }

                .cls-3 {
                  fill: #3f3e6b;
                }

                .cls-4 {
                  fill: #64639c;
                }

                .cls-5 {
                  fill: #f4c23f;
                }

                .cls-6 {
                  fill: #f4a93f;
                }

                .cls-7 {
                  fill: #de3226;
                }

                .cls-8 {
                  fill: #b11a31;
                }

                .cls-9 {
                  fill: #f8881b;
                }

                .cls-10 {
                  fill: #f08000;
                }

                .cls-11 {
                  fill: #fad564;
                }

                .cls-12 {
                  fill: #f44533;
                }
              </style>
            </defs>
            <title />
            <path class="cls-1" d="M978.4,193.8,170.6,511.4c-18.8,7.5-18.8,34.1,0,41.6l854.9,336.1a21.9,21.9,0,0,0,16.3,0L1896.7,553c18.9-7.5,18.9-34.1,0-41.6L1088.9,193.8A150.6,150.6,0,0,0,978.4,193.8Z" />
            <polygon class="cls-2" points="741 492.6 473.1 671.9 736.7 775.6 741 492.6" />
            <polygon class="cls-2" points="1326.3 492.6 1594.2 671.9 1330.7 775.6 1326.3 492.6" />
            <path class="cls-1" d="M1434.8,1108.8H632.5L706.8,530A44.3,44.3,0,0,1,741,492.6q319.8-71.2,586.9-.9a43.7,43.7,0,0,1,32.4,36.9Z" />
            <path class="cls-2" d="M833.3,620.9a44.2,44.2,0,0,1,34.2-37.4q267-59.4,497.3-20.3l-4.5-34.6a43.7,43.7,0,0,0-32.4-36.9q-267-70.3-586.9.9A44.3,44.3,0,0,0,706.8,530l-74.3,578.8H770.7Z" />
            <ellipse class="cls-2" cx="1033.7" cy="1108.8" rx="401.1" ry="49.3" />
            <path class="cls-2" d="M1631.4,1016.8a19.9,19.9,0,0,1-20-20V429a20,20,0,0,1,40,0V996.8A20,20,0,0,1,1631.4,1016.8Z" />
            <path class="cls-1" d="M1628.6,1213.3a69.4,69.4,0,0,1-69.3-69.3V1032.8a69.3,69.3,0,0,1,138.5,0V1144A69.4,69.4,0,0,1,1628.6,1213.3Z" />
            <path class="cls-2" d="M1594.2,1182V1070.8a69.2,69.2,0,0,1,99.1-62.5,69.2,69.2,0,0,0-134,24.5V1144a69.4,69.4,0,0,0,39.4,62.5A68.8,68.8,0,0,1,1594.2,1182Z" />
            <path class="cls-1" d="M1827.5,1285.4a67.5,67.5,0,0,0-54.3-27.3H240.8a67.6,67.6,0,0,0-54.3,27.3q-94.6,127.6,0,255.2a67.6,67.6,0,0,0,54.3,27.3H1773.2a67.5,67.5,0,0,0,54.3-27.3Q1922.3,1413,1827.5,1285.4Z" />
            <path class="cls-3" d="M1867.2,1457.2H334.8a67.5,67.5,0,0,1-54.3-27.3q-63.7-85.8-41.7-171.8a68.2,68.2,0,0,0-52.3,27.3q-94.6,127.6,0,255.2a67.6,67.6,0,0,0,54.3,27.3H1773.2a67.5,67.5,0,0,0,54.3-27.3q31.1-41.7,41.7-83.4Z" />
            <rect class="cls-2" height="309.82" width="124.9" x="433.6" y="1258.1" />
            <rect class="cls-2" height="309.82" width="124.9" x="1455.5" y="1258.1" />
            <rect class="cls-4" height="379.76" rx="60.3" ry="60.3" transform="translate(-104.3 198.6) rotate(-8.2)" width="120.7" x="1272.3" y="636.3" />
            <rect class="cls-4" height="379.76" rx="60.3" ry="60.3" transform="translate(536.5 1470) rotate(-70.1)" width="120.7" x="1256.6" y="162.3" />
            <rect class="cls-4" height="114.13" rx="28.4" ry="28.4" width="56.8" x="1639.5" y="1044" />
            <path class="cls-5" d="M1283.9,1533.8c0,27.9-40.4,49.1-48.6,74.2s11.5,66.9-4.3,88.6-61,15.4-82.9,31.4-29.4,60.7-55.5,69.2-57.7-23.4-85.6-23.4-60.4,31.6-85.5,23.4-33.8-53.4-55.5-69.2-67-9.5-82.9-31.4,4.1-62.5-4.3-88.6-48.6-46.3-48.6-74.2,40.4-49,48.6-74.1-11.5-66.9,4.3-88.6,61-15.5,82.9-31.4,29.4-60.8,55.5-69.2,57.7,23.4,85.5,23.4,60.5-31.6,85.6-23.4,33.8,53.4,55.5,69.2,67,9.5,82.9,31.4-4.2,62.5,4.3,88.6S1283.9,1506,1283.9,1533.8Z" />
            <path class="cls-6" d="M1000.6,1732.2A181.2,181.2,0,0,1,872.5,1423a182.8,182.8,0,0,1,57.6-38.8,181.1,181.1,0,0,1,237.3,237.4,181.1,181.1,0,0,1-166.8,110.6Z" />
            <path class="cls-6" d="M1115.4,1590.5a15.1,15.1,0,0,0-19.9-7.6l-111.2,50a18.1,18.1,0,0,0-4.2,2.8,18.1,18.1,0,0,0-4.2-2.8l-111.2-50a15.1,15.1,0,0,0-19.9,7.6l-51.6,114.9c20.1,11.6,54.5,9.3,72.8,22.6,21,15.3,28.9,57.8,53,68.3l61.1-135.9,54.2,120.5c20.3,8.8,41.1,21.9,58.3,16.3,26.1-8.5,33.8-53.4,55.5-69.2,6.6-4.8,15.3-7.6,24.7-9.7Z" />
            <path class="cls-7" d="M891.4,1859.1l-26.3-46.6a15,15,0,0,0-16.3-7.3l-52.3,11.2a15.1,15.1,0,0,1-16.9-20.9l92.2-205a15.1,15.1,0,0,1,19.9-7.6l111.2,50a15.2,15.2,0,0,1,7.5,19.9l-92.2,205A15,15,0,0,1,891.4,1859.1Z" />
            <path class="cls-8" d="M904,1628.1a31.1,31.1,0,0,0-15.2-41.3l-8.9-4.1a14.7,14.7,0,0,0-8.1,7.8l-92.2,205a15.1,15.1,0,0,0,16.9,20.9l22.6-4.9Z" />
            <path class="cls-7" d="M1122.7,1859.1l26.3-46.6a15,15,0,0,1,16.3-7.3l52.3,11.2a15.1,15.1,0,0,0,16.9-20.9l-92.2-205a15.1,15.1,0,0,0-19.9-7.6l-111.2,50a15.1,15.1,0,0,0-7.5,19.9l92.1,205A15.1,15.1,0,0,0,1122.7,1859.1Z" />
            <path class="cls-8" d="M1040.1,1643.8l-33.7,15,89.4,199a15.1,15.1,0,0,0,26.9,1.3l7.5-13.3Z" />
            <path class="cls-8" d="M1002.9,1632.9l-111.2-50a15.1,15.1,0,0,0-19.9,7.6l-25.2,55.9a181.7,181.7,0,0,0,128.9,84.1l34.9-77.7A15.2,15.2,0,0,0,1002.9,1632.9Z" />
            <path class="cls-8" d="M1161.8,1633.7l-19.5-43.2a15.1,15.1,0,0,0-19.9-7.6l-111.2,50a15.1,15.1,0,0,0-7.5,19.9l33.9,75.6a180.7,180.7,0,0,0,33.5-10.5,182.6,182.6,0,0,0,90.7-84.2Z" />
            <circle class="cls-9" cx="1007" cy="1529.4" r="169.5" />
            <circle class="cls-10" cx="1007" cy="1529.4" r="149.7" />
            <circle class="cls-5" cx="1007" cy="1529.4" r="132.9" />
            <path class="cls-11" d="M1125.4,1333.5h0a31.4,31.4,0,0,0,9.5-8.6c-13.1-19.8-22.2-47.9-42.3-54.4-6.9-2.3-14.3-1.5-22.1.8a30.3,30.3,0,0,0,.7,29.2l12.6,21.9A30.5,30.5,0,0,0,1125.4,1333.5Z" />
            <path class="cls-11" d="M1007.7,1303.9a30.6,30.6,0,0,0,4.3-10.3,41.9,41.9,0,0,1-5,.3c-24.4,0-52.5-24.4-76-24.8a30.4,30.4,0,0,0,13.4,29.7l21.2,13.9a30.5,30.5,0,0,0,42.1-8.8Z" />
            <path class="cls-11" d="M1235.3,1459.7c-8.5-26.1,11.5-66.9-4.3-88.6-9.9-13.7-31.3-16.3-51.2-20.2a48.4,48.4,0,0,0-6.7,29.9l3.9,40.8a49.3,49.3,0,0,0,53.8,44.4h0a49.3,49.3,0,0,0,6.7-1.1A38.5,38.5,0,0,1,1235.3,1459.7Z" />
            <rect class="cls-12" height="85.82" rx="22.5" ry="22.5" transform="translate(833.7 -224.2) rotate(24.8)" width="45" x="903.9" y="1739.5" />
            <rect class="cls-12" height="85.82" rx="22.5" ry="22.5" transform="translate(-600.1 629) rotate(-24)" width="45" x="1156" y="1682.4" />
            <rect class="cls-4" height="89.05" rx="44.5" ry="44.5" width="181.2" x="1594.2" y="1258.1" />
            <rect class="cls-4" height="89.05" rx="44.5" ry="44.5" width="181.2" x="1242.1" y="1258.1" />
            <rect class="cls-4" height="89.05" rx="44.5" ry="44.5" width="139.5" x="267.3" y="1258.1" />
          </svg>
        </div>
      </div>
      <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 p-6 mt-6">
          <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
            <title />
            <g data-name="17" id="_17">
              <path d="M59,8H5A1,1,0,0,0,4,9V44a1,1,0,0,0,1,1h5.75L2.12,52.52A1,1,0,0,0,2.06,54L7,58.93a1,1,0,0,0,.71.3h0a1,1,0,0,0,.71-.32L21.44,45H59a1,1,0,0,0,1-1V9A1,1,0,0,0,59,8ZM7.7,56.79,4.24,53.33l9.89-8.62h0l10.51-9.15L26.13,37,24,39.28l0,0-3.72,4h0ZM24,26H18V21h6ZM58,43H23.3l1.87-2H55a1,1,0,0,0,1-1V29a1,1,0,0,0-2,0V39H27l1.21-1.3a1,1,0,0,0,0-1.39l-2.57-2.57A1,1,0,0,0,26,33V20a1,1,0,0,0-1-1H17a1,1,0,0,0-1,1V33a1,1,0,0,0,2,0V28h6v5a.9.9,0,0,0,.09.4l-.05,0L17.64,39H10V14H45a1,1,0,0,0,0-2H9a1,1,0,0,0-1,1V40a1,1,0,0,0,1,1h6.35l-2.3,2H6V10H58Z" />
              <path d="M49,14h5V26a1,1,0,0,0,2,0V13a1,1,0,0,0-1-1H49a1,1,0,0,0,0,2Z" />
              <path d="M33.62,19H28a1,1,0,0,0-1,1V33a1,1,0,0,0,1,1h5.62A3.39,3.39,0,0,0,37,30.62V22.38A3.39,3.39,0,0,0,33.62,19Zm0,2A1.38,1.38,0,0,1,35,22.38V26H29V21Zm0,11H29V28h6v2.62A1.38,1.38,0,0,1,33.62,32Z" />
              <path d="M38,20V33a1,1,0,0,0,1,1h8a1,1,0,0,0,0-2H40V21h7a1,1,0,0,0,0-2H39A1,1,0,0,0,38,20Z" />
            </g>
          </svg>
        </div>
        <div class="w-full sm:w-1/2 p-6 mt-6">
          <div class="align-middle">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              2. Memiliki Kreaktivitas Tinggi
            </h3>
            <p class="text-gray-600 mb-8">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
              <br />
              <br />
              <!-- Images from:

                <a class="text-pink-500 underline" href="https://undraw.co/">undraw.co</a> -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Prestasi TK ASY-SYAWALIYYAH
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
          <a href="#" class="flex flex-wrap no-underline hover:no-underline">
            <p class="w-full text-gray-600 text-xs md:text-sm px-6">
              xGETTING STARTED
            </p>
            <div class="w-full font-bold text-xl text-gray-800 px-6">
              Lorem ipsum dolor sit amet.
            </div>
            <p class="text-gray-800 text-base px-6 mb-5">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
            </p>
          </a>
        </div>
        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
          <div class="flex items-center justify-start">
            <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              Lihat
            </button>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
          <a href="#" class="flex flex-wrap no-underline hover:no-underline">
            <p class="w-full text-gray-600 text-xs md:text-sm px-6">
              xGETTING STARTED
            </p>
            <div class="w-full font-bold text-xl text-gray-800 px-6">
              Lorem ipsum dolor sit amet.
            </div>
            <p class="text-gray-800 text-base px-6 mb-5">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
            </p>
          </a>
        </div>
        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
          <div class="flex items-center justify-center">
            <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              Lihat
            </button>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
          <a href="#" class="flex flex-wrap no-underline hover:no-underline">
            <p class="w-full text-gray-600 text-xs md:text-sm px-6">
              xGETTING STARTED
            </p>
            <div class="w-full font-bold text-xl text-gray-800 px-6">
              Lorem ipsum dolor sit amet.
            </div>
            <p class="text-gray-800 text-base px-6 mb-5">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
            </p>
          </a>
        </div>
        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
          <div class="flex items-center justify-end">
            <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              Lihat
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-100 py-8">
    <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Paket Pendaftaran
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
        <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
          <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
            <div class="p-8 text-3xl font-bold text-center border-b-4">
              TK A
            </div>
            <ul class="w-full text-center text-sm">
              <li class="border-b py-4">Uang Pangkal Rp 300.000</li>
              <li class="border-b py-4">SPP PerBulan Rp 100.000 x 6 Bulan</li>
              <li class="border-b py-4">Biaya Kenaikan Kelas Rp 200.000</li>
            </ul>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
              Total Rp 1.100.000
              <!-- <span class="text-base">for one user</span> -->
            </div>
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <a href="https://cangkulterus.com/TK/Pendaftaran/daftar/1">Daftar</a>
              </button>
            </div>
          </div>
        </div>
        <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <div class="w-full p-8 text-3xl font-bold text-center">Promo TK A/B</div>
            <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
            <ul class="w-full text-center text-base font-bold">
              <li class="border-b py-4">Uang Pangkal Rp 270.000</li>
              <li class="border-b py-4">SPP PerBulan Rp 80.000 x 6 Bulan</li>
              <li class="border-b py-4">Biaya Kelulusan/Kenaikan Rp 180.000</li>
              <li class="border-b py-4">Jika TK B Manasik Haji Tetap Rp 300.000</li>
            </ul>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="w-full pt-6 text-4xl font-bold text-center">
              Promo 10% Total Rp 930.000
              <!-- <span class="text-base">/ per user</span> -->
            </div>
            <?php $TKpromo = 270000; ?>
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <a href="https://cangkulterus.com/TK/Pendaftaran/daftar/2">Daftar</a>
              </button>
            </div>
          </div>
        </div>
        <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
          <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
            <div class="p-8 text-3xl font-bold text-center border-b-4">
              TK B
            </div>
            <ul class="w-full text-center text-sm">
              <li class="border-b py-4">Uang Pangkal Rp 300.000</li>
              <li class="border-b py-4">SPP PerBulan Rp 100.000 x 6 Bulan</li>
              <li class="border-b py-4">Manasik Haji Rp 300.000</li>
              <li class="border-b py-4">Biaya kelulusan Rp 200.000</li>
            </ul>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
              Total Rp 1.400.000
            </div>
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <a href="https://cangkulterus.com/TK/Pendaftaran/daftar/3">Daftar</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
        <g class="wave" fill="#f8fafc">
          <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
        </g>
        <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
          <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
          </g>
        </g>
      </g>
    </g>
  </svg>
  <section class="container mx-auto text-center py-6 mb-12">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
      Formulir Pendaftaran
    </h1>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <h3 class="my-4 text-3xl leading-tight">
      Ayo Segera Dapatkan Promo!
    </h3>
    <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
      <a href="https://cangkulterus.com/TK/Pendaftaran/daftar/2">Klik Disini</a>
    </button>
  </section>
  <!--Footer-->
  <footer class="bg-white">
    <div class="container mx-auto px-8">
      <div class="w-full flex flex-col md:flex-row py-6">
        <div class="flex-1 mb-6 text-black">
          <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <!--Icon from: http://www.potlabicons.com/ -->
            <!-- <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                <path
                  class="plane-take-off"
                  d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                />
              </svg> -->
            TK ASY-SYAWALIYYAH
          </a>
        </div>
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Links</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
            </li>
          </ul>
        </div>
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Legal</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
            </li>
          </ul>
        </div>
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Social</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
            </li>
          </ul>
        </div>
        <div class="flex-1">
          <p class="uppercase text-gray-500 md:mb-6">Company</p>
          <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
            </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <a href="https://www.cangkulterus.com/" class="text-gray-500">Background vector created by MeB - www.cangkulterus.com</a>
  </footer>
  <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  <script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function() {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;

      if (scrollpos > 10) {
        header.classList.add("bg-white");
        navaction.classList.remove("bg-white");
        navaction.classList.add("gradient");
        navaction.classList.remove("text-gray-800");
        navaction.classList.add("text-white");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-gray-800");
          toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
      } else {
        header.classList.remove("bg-white");
        navaction.classList.remove("gradient");
        navaction.classList.add("bg-white");
        navaction.classList.remove("text-white");
        navaction.classList.add("text-gray-800");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-white");
          toToggle[i].classList.remove("text-gray-800");
        }

        header.classList.remove("shadow");
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
      }
    });
  </script>
  <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);

      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {
            navMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
    }

    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>
</body>

</html>