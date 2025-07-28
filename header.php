<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Home | Emran</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/blue-e-md.png" />

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/font-awesome-pro.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script>
    if (
      localStorage.getItem("color-theme") === "dark" ||
      (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
      document.documentElement.classList.add("dark");
    } else {
      document.documentElement.classList.remove("dark");
    }
  </script>
</head>

<body class="dark:bg-body">
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> href improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- Preloader Start-->

  <div class="InitLoader">
    <div class="fingerprint-spinner">
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
      <div class="spinner-ring"></div>
    </div>
  </div>

  <!-- back href top start  -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- back href top end -->

  <!-- header-area-start -->

  <header>
    <div class="container mx-auto pt-[30px]">
      <div class="flex justify-between rounded-[10px] bg-white py-[30px] dark:bg-card">
        <div class="logo flex items-center px-[30px]">
          <a href="index.php">
            <!-- <img src="assets/images/logo-2.png" alt="pucu portfolio web template" /> -->
             <div style="
                        color: rgba(0,0,0,0.6); text-shadow: 2px 8px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3); font-size: 30px; letter-spacing:2px" id="demotext"><h1>Portfolio</h1></div>
          </a>
        </div>
        <nav class="hidden items-center md:flex">
          <ul class="flex gap-4">
            <li class="navActive">
              <a href="index.php"> Home </a>
            </li>
            <li class="navDefault">
              <a href="about.php"> About Me </a>
            </li>
            <li class="w-[100px] navDefault">
              <a href="contact.php">
                <span class="typeIntro"></span>
              </a>
            </li>
          </ul>
        </nav>
        <div>
          <div class="flex items-center gap-4 px-[30px]">
            <button id="theme-toggle" class="hidden md:flex" type="button">
              <span class="flex gap-3 items-center">
                <span>
                  <span class="dark:text-white text-btn">Dark</span>
                  <span class="dark:text-white text-btn">/</span>
                  <span class="dark:text-white text-btn">Light</span>
                </span>
                <svg id="theme-toggle-dark-icon" class="hidden w-[30px] h-[30px] text-theme" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-[30px] h-[30px] text-theme" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
              </span>
            </button>
            <button class="sidebar-open rounded-full border border-[#919295] p-[10px] text-[25px]">
              <i class="fa-solid fa-bars-staggered text-text dark:text-text block text-[20px]"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- header-area-end -->

  <!-- sidebar area start -->
  <section
    class="sidebar fixed leftFull h-full overflow-y-scroll top-0 z-[999] w-full bg-btn/60 transition-all duration-500">
    <div class="ml-auto w-[300px] h-full min-h-[750px] md:min-h-[700px] bg-white px-[30px] pt-[60px] dark:bg-card">
      <div class="relative flex justify-center">
        <button
          class="sidebar-close group absolute left-[-70px] rounded-lg bg-white px-[15px] py-[10px] text-[26px] dark:bg-card">
          <i
            class="fa-solid block fa-xmark text-btn transition-all duration-500 group-hover:rotate-90 dark:text-white dark:group-hover:text-theme"></i>
        </button>
        <div>
          <!-- <img src="assets/images/logo-2.png" alt="pucu portfolio web template" /> -->
          <a href="index.php">
            <!-- <img src="assets/images/logo-2.png" alt="pucu portfolio web template" /> -->
             <div style="
                        color: rgba(0,0,0,0.6); text-shadow: 2px 8px 6px rgba(0,0,0,0.2), 0px -5px 35px rgba(255,255,255,0.3); font-size: 30px; letter-spacing:2px" id="demotext"><h1>SIDEBAR MENU</h1></div>
          </a>
          <!-- <img src="assets/images/logo-2.png" alt="pucu portfolio web template" /> -->
          <!-- <a href="index.php">
            <div style="
                        color: #A7DD3C;
background: #FFFFFF;
text-shadow: 2px 0 0px #800040, 3px 2px 0px rgba(77,0,38,0.5), 3px 0 3px #FF002B, 5px 0 3px #800015, 6px 2px 3px rgba(77,0,13,0.5), 6px 0 9px #FF5500, 8px 0 9px #802A00, 9px 2px 9px rgba(77,25,0,0.5), 9px 0 18px #FFD500, 11px 0 18px #806A00, 12px 2px 18px rgba(77,66,0,0.5), 12px 0 30px #D4FF00, 14px 0 30px #6A8000, 15px 2px 30px rgba(64,77,0,0.5), 15px 0 45px #80FF00, 17px 0 45px #408000, 17px 2px 45px rgba(38,77,0,0.5); font-size: 30px; letter-spacing:2px" id="demotext"><h1>Emran</h1></div>
          </a> -->

        </div>
      </div>
      <div class="my-[30px] border-t border-[#ddd] dark:border-btn"></div>
      <nav class="mt-[30px]">
        <ul class="grid gap-[18px]">
          <li class="text-[18px] font-semibold inline-block navActive">
            <a href="index.php"> Home </a>
          </li>
          <li class="text-[18px] font-semibold inline-block navDefault">
            <a href="about.php"> About Me </a>
          </li>
          <li class="text-[18px] font-semibold inline-block navDefault">
            <a href="service.php"> Services </a>
          </li>
          <li class="text-[18px] font-semibold inline-block navDefault">
            <a href="projects.php"> Projects </a>
          </li>
          <li class="text-[18px] font-semibold inline-block navDefault">
            <a href="contact.php"> Contact </a>
          </li>
          <!-- <li class="text-[18px] font-semibold inline-block navDefault">
            <a href="error.html"> Error </a>
          </li> -->
        </ul>
      </nav>

      <div class="my-[30px] border-t border-[#ddd] dark:border-btn"></div>
      <button id="theme-toggle-mobile" type="button" class="md:hidden">
        <span class="flex gap-3 items-center">
          <span>
            <span class="dark:text-white text-btn">Dark</span>
            <span class="dark:text-white text-btn">/</span>
            <span class="dark:text-white text-btn">Light</span>
          </span>
          <svg id="theme-toggle-dark-icon-mobile" class="hidden w-[30px] h-[30px] text-theme" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
          </svg>
          <svg id="theme-toggle-light-icon-mobile" class="hidden w-[30px] h-[30px] text-theme" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
              fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
        </span>
      </button>
      
      <div class="contact mt-[40px] md:mt-[30px] pb-[20px]">
        <div>
          <p class="text-[20px] font-semibold text-btn dark:text-white">
            Follow Me:
          </p>


          <div class="mt-[20px] flex gap-3">

          <?php
                        include('admin/config.php');
                        $sql = "SELECT * FROM personaldetails ORDER BY id DESC LIMIT 1";

                        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result); 
                  ?>

            <a href="<?php echo $row['fblink']; ?>" class="block">
              <i class="fa-brands fa-facebook-f socialIcon"></i>
            </a>
            <a href="<?php echo $row['instalink']; ?>" target="_blank" class="block">
              <i title="Go Instagram" class="fa-brands fab fa-instagram socialIcon"></i>
            </a>
            <a href="<?php echo $row['githublink']; ?>" class="block">
              <i class="fa-brands fa-github socialIcon"></i>
            </a>
            <a href="<?php echo $row['linkedinlink']; ?>" class="block">
              <i class="fa-brands fa-linkedin-in socialIcon"></i>
            </a>
            </a>

                        <?php } else {
                          ?>

            <a href="#" class="block">
              <i class="fa-brands fa-facebook-f socialIcon"></i>
            </a>
            <a href="<?php echo $row['instalink']; ?>" target="_blank" class="block">
              <i title="Go Instagram" class="fa-brands fab fa-instagram socialIcon"></i>
            </a>
            <a href="#" class="block">
              <i class="fa-brands fa-github socialIcon"></i>
            </a>
            <a href="#" class="block">
              <i class="fa-brands fa-linkedin-in socialIcon"></i>
            </a>
            </a>

                          <?php
                        } ?>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- sidebar area end -->

  <main>
    <section>
      <div class="container mx-auto">
        <div class="grid grid-cols-12">
          <?php
                        include('admin/config.php');
                        $sql = "SELECT * FROM personaldetails ORDER BY id DESC LIMIT 1";

                        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result); 
                  ?>
          <div class="col-span-12 lg:col-span-3" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="info-card mt-[60px]">
              <div class="rounded-[20px] bg-white px-[45px] py-[40px] dark:bg-card">
                <div class="relative flex justify-center wow animated fadeIn">
                  <img style="    height: 200px; width: 200px; border-radius: 100%;  border: 4px solid #dbb6b6;" src="admin/assets/img/ppic/<?php echo $row['pic']; ?>" alt="pucu portfolio web template" class="w-[200px] h-[100px]" />
                  <!-- <img
                      src="assets/images/show/underline.svg"
                      alt="pucu portfolio web template"
                      class="absolute bottom-0"
                    /> -->
                </div>
                <div>
      
                  <div class="mt-[25px]">
                    <div class="text-center">
                      <h3 class="text-[24px] text-danger text-btn dark:text-white wow animated fadeIn">
                        Hy! I’m
                        <span class="text-theme"> <?php echo $row['fname']; ?></span>
                      </h3>
                      <p class="text-btn dark:text-white wow animated fadeIn">
                        <?php echo $row['desig1']; ?>
                      </p>
                      <p class="mt-[25px] text-[14px] text-btn dark:text-white wow animated fadeIn">
                        <?php echo $row['email']; ?>
                      </p>
                      <p class="mt-1 text-[14px] text-btn dark:text-white wow animated fadeIn">
                        <?php echo $row['pnum1']; ?>
                      </p>
                      <div class="mt-[30px] flex justify-center gap-3 wow animated fadeIn">
                        <a href="<?php echo $row['fblink']; ?>" target="_blank" class="block">
                          <i title="Go Facebook" class="fa-brands fa-facebook-f socialIcon"></i>
                        </a>
                        <a href="<?php echo $row['instalink']; ?>" target="_blank" class="block">
                          <i title="Go Instagram" class="fa-brands fab fa-instagram socialIcon"></i>
                        </a>
                        <a href="<?php echo $row['githublink']; ?>" target="_blank" class="block">
                          <i title="Go Github" class="fa-brands fa-github socialIcon"></i>
                        </a>
                        <a href="<?php echo $row['linkedinlink']; ?>" target="_blank" class="block">
                          <i title="Go Linkedin" class="fa-brands fa-linkedin-in socialIcon"></i>
                        </a>
                      </div>
                      <div class="mt-[30px] wow animated fadeIn">
                        <a href="contact.html"
                          class="block rounded-full border-2 border-theme bg-theme py-[10px] font-medium text-btn transition-all duration-300 dark:hover:bg-transparent dark:hover:text-theme">
                          Hire Me!
                        </a>
                      </div>
                      <div class="mt-[20px] wow animated fadeIn">
                        <a download href="admin/assets/img/cv/<?php echo $row['cv']; ?>"
                          class="block rounded-full border-2 border-btn bg-btn py-[10px] font-medium text-white transition-all duration-300 dark:hover:bg-transparent">
                          Download CV
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php } else {
                    ?>
                    <div class="mt-[25px]">
                    <div class="text-center">
                      <h3 class="text-[24px] text-btn dark:text-white wow animated fadeIn">
                        Hy! I’m
                        <!-- <span class="text-theme"> MD.ATIKUR RAHMAN</span> -->
                      </h3>
                      <p class="text-btn dark:text-white wow animated fadeIn">
                        WEB DEVELOPER
                      </p>
                      <p class="mt-[25px] text-[14px] text-btn dark:text-white wow animated fadeIn">
                        atik.necit@gmail.com
                      </p>
                      <p class="mt-1 text-[14px] text-btn dark:text-white wow animated fadeIn">
                        +88 01943 700042
                      </p>
                      <div class="mt-[30px] flex justify-center gap-3 wow animated fadeIn">
                        <a href="#" class="block">
                          <i class="fa-brands fa-facebook-f socialIcon"></i>
                        </a>
                        <a href="#" class="block">
                          <i class="fa-brands fa-github socialIcon"></i>
                        </a>
                        <a href="#" class="block">
                          <i class="fa-brands fa-linkedin-in socialIcon"></i>
                        </a>
                      </div>
                      <div class="mt-[30px] wow animated fadeIn">
                        <a href="contact.html"
                          class="block rounded-full border-2 border-theme bg-theme py-[10px] font-medium text-btn transition-all duration-300 dark:hover:bg-transparent dark:hover:text-theme">
                          Hire Me!
                        </a>
                      </div>
                      <div class="mt-[20px] wow animated fadeIn">
                        <a download href="assets/pdf/Md.Atikur_Rahman_CV.pdf"
                          class="block rounded-full border-2 border-btn bg-btn py-[10px] font-medium text-white transition-all duration-300 dark:hover:bg-transparent">
                          Download CV
                        </a>
                      </div>
                    </div>
                  </div>
                 <?php }?>
                </div>
              </div>
            </div>
          </div>