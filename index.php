
           <?php include('header.php'); include('admin/config.php');?>
         <!-- end of all header part -->
          <div class="col-span-12 lg:col-span-9 lg:ml-[30px]" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="main__body">
              <section class="mt-[60px]">
                <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                  <div>
                    <p class="text-[18px] text-text wow animated fadeIn">
                      <span class="dark:text-theme">Hi!</span> There I’m
                    </p>
                    <h2
                      class="mt-[20px] wow animated fadeIn text-[50px] leading-[60px] text-btn dark:text-white md:text-[62px] md:leading-[72px]">
                      Professional <span class="text-theme">FULL STACK</span>
                      <br />
                      Web Developer
                    </h2>
                    <p class="mt-[15px] text-text wow animated fadeIn">
                      <!-- I am a Professional Full Stack Web Developer and have
                      been working in this field for more than 4 years. We are
                      highly experts in converting PSD href HTML, PSD href
                      Bootstrap, CSS href HTML, Bootstrap href HTML, JavaScript
                      href HTML, and JQuery href HTML ,CSS responsive design and pixel-perfect using
                      bootstrap latest version, jQuery, JavaScript. I always
                      take care of code with SEO friendly. -->
                      My name is Emran Hasan. I am a Web designer and Web Developer, and I'm very passionate and dedicated to my work. With 05 years experience as a professional Web designer and Web developer, I have acquired the skills and knowledge necessary to make your project a success.
                      <!-- I am a Professional Full Stack Web Developer and have
                      been working in this field for more than 4 years. We are
                      highly experts in converting PSD href HTML, PSD href
                      Bootstrap, Figma href HTML, Sketch href HTML, and Xd
                      href HTML ,CSS responsive design and pixel-perfect using
                      bootstrap latest version, jQuery, JavaScript. I always
                      take care of code with SEO friendly. -->
                    </p>
                  </div>
                </div>

                <!-- {/* About US */} -->

                <div class="mt-[30px]">
                  <div class="grid grid-cols-12 gap-[30px]">
                    <div class="col-span-12 md:col-span-5">
                      <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                        <!-- <img src="assets/images/logo.svg" alt="pucu portfolio web template"
                          class="mt-[10px] wow animated fadeIn" /> -->
                        <div style="
                        text-shadow: 0 1px 0 #CCCCCC, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
                        color: #4CACE2; font-size:40px; letter-spacing:2px" id="demotext"><h1><?php
                        if (isset($row['fname'])) {
                          echo $row['fname'];
                        } else {
                          echo "EMRAN";
                        }
                         ?></h1></div>
                        
                        <div class="mt-[20px]">
                          <p class="text-[14px] text-text dark:text-white wow animated fadeIn">
                            More Specialized
                          </p>
                          <a href="about.php">
                            <h3
                              class="mt-[5px] wow animated fadeIn inline-block text-[26px] tracking-[6px] text-btn dark:text-white">
                              About Me
                            </h3>
                          </a>
                        </div>
                      </div>
                      <div>

                        <div class="mt-[30px] rounded-xl bg-white p-[30px] dark:bg-card">
                          
                        <div class="flex gap-[20px] wow animated fadeIn">
                            <button class="boxShadow rounded-lg p-[20px] dark:bg-btn dark:shadow-none">
                              <img src="assets/images/icon/figma.png" alt="pucu portfolio web template" />
                            </button>
                            <button class="boxShadow rounded-lg p-[20px] dark:bg-btn dark:shadow-none">
                              <img src="assets/images/icon/react.png" alt="pucu portfolio web template" />
                            </button>
                            <button class="boxShadow rounded-lg p-[20px] dark:bg-btn dark:shadow-none">
                              <img src="assets/images/icon/php.png" alt="pucu portfolio web template" />
                            </button>
                          </div>

                          <div class="mt-[30px]">
                            <p class="text-[14px] text-text dark:text-white wow animated fadeIn">
                              Specialization
                            </p>
                            <a href="service.php">
                              <h3
                                class="mt-[5px] wow animated fadeIn inline-block text-[26px] tracking-[6px] text-btn dark:text-white">
                                Services Offer
                              </h3>
                            </a>
                          </div>

                        </div>

                      </div>
                      
                      <div class="mt-[30px] rounded-xl bg-white p-[30px] dark:bg-card">
                        <div class="grid grid-cols-12" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <?php
                          
                          $sql = "SELECT * FROM workhistory ORDER BY id ASC LIMIT 2";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){
                                
                             
                        ?>
                          <div class="col-span-6">
                            <h2 class="text-[50px] font-semibold text-btn dark:text-theme wow animated fadeIn">
                              <span class="counter"><?php echo $row['number'] ?></span>+
                            </h2>
                            <p class="text-text dark:text-white wow animated fadeIn">
                              <?php echo $row['title'] ?>
                            </p>
                          </div>

                        <?php  }  } else { ?>
                        <div class="col-span-6">
                            <h2 class="text-[50px] font-semibold text-btn dark:text-theme wow animated fadeIn">
                              <span class="counter">2</span>+
                            </h2>
                            <p class="text-text dark:text-white wow animated fadeIn">
                              Years of <br />
                              Experience
                            </p>
                          </div>
                          <div class="col-span-6">
                            <h2 class="text-[50px] font-semibold text-btn dark:text-theme wow animated fadeIn">
                              <span class="counter">10</span>+
                            </h2>
                            <p class="text-text dark:text-white wow animated fadeIn">
                              Project <br />
                              Completed
                            </p>
                          </div>
                           <?php }?>
                        </div>
                      </div>
                      
                        <!-- <div class="mt-[30px] rounded-xl bg-white p-[30px] dark:bg-card">
                        <div class="grid grid-cols-12" data-wow-duration="1.5s" data-wow-delay="0.3s">
                          
                        </div>
                      </div> -->
                    
                    </div>

                    <div class="col-span-12 md:col-span-7">
                      
                      <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                        <div class="flex justify-center gap-[20px]">
                        <?php
                          
                          $sql = "SELECT * FROM projects ORDER BY id DESC LIMIT 2";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){      
                            
                        ?>
                          <div class="overflow-hidden rounded-lg">
                            <div>
                              <img src="admin/assets/img/projects/<?php echo $row['pimg'];  ?>" alt="portfolio web template"
                                class="transition-all duration-300 hover:scale-[110%] wow animated fadeIn" />
                                <?php //echo "<p style='color:red;'>". $row['pimg'] . "</p>"; ?>
                            </div>
                          </div>

                          <?php }
                          } else {
                            # code...
                            ?>
                          <div class="overflow-hidden rounded-lg">
                            <div>
                              <img src="assets/images/show/project-2.1.jpg" alt="pucu portfolio web template"
                                class="transition-all duration-300 hover:scale-[110%] wow animated fadeIn" />
                            </div>
                          </div>
                            <?php
                          }
                          ?>

                          

                        </div>
                        <div class="mt-[30px]">
                          <p class="text-[14px] text-text dark:text-white wow animated fadeIn">
                            Showcase View
                          </p>
                          <a href="projects.php">
                            <h3
                              class="mt-[5px] wow animated fadeIn inline-block text-[26px] tracking-[6px] text-btn dark:text-white">
                              Projects
                            </h3>
                          </a>
                        </div>
                      </div>

                      <!-- testimonial area start -->
                      <div class="mt-[20px]">
                        <div
                          class="relative flex h-[185px] items-end rounded-xl bg-cover bg-local bg-center wow animated fadeIn bg-no-repeat px-[30px] py-[30px]"
                          style="
                              background-image: url('assets/images/show/image-4.png');
                            ">
                          <div>
                            <h1 style="color: rgb(113, 252, 0);" class="text-[26px] wow animated fadeIn">
                              Recent Projects
                            </h1>
                            <?php 
                            $sql = "SELECT * FROM projects ORDER BY id DESC LIMIT 3";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){   
                                ?>

                            <a href="projects.php">
                              <p  style="color: rgb(255, 255, 255);"  class="mt-[5px] wow animated fadeIn text-[0px] tracking-[0px] text-black">
                                <?php echo $row['pname'];  ?>
                              </p>
                            </a>
<?php } }
else{

?>
                            <a href="testimonial.php">
                              <p  style="color: rgb(255, 255, 255);"  class="mt-[5px] wow animated fadeIn text-[0px] tracking-[0px] text-black">
                                Educational management system
                              </p>
                            </a>
                            <a href="testimonial.php">
                              <p  style="color:rgb(255, 255, 255);"  class="mt-[5px] wow animated fadeIn text-[0px] tracking-[0px] text-black">
                                Hospital management system
                              </p>
                            </a>
<?php } ?>
                            <img class="absolute right-[30px] top-[50px] z-10 wow animated fadeIn"
                              src="assets/images/icon/shape.svg" alt="pucu portfolio web template" />
                          </div>
                        </div>
                      </div>
                      <!-- testimonial area end -->

                      <!-- contact area start -->
                      <div class="mt-[30px] grid grid-cols-12 gap-[30px]">
                        <!-- <div class="col-span-6 rounded-xl bg-theme px-[30px] py-[25px]">
                          <p class="text-[14px] text-btn wow animated fadeIn">
                            Visit Our Blog
                          </p>
                          <a href="blog.html">
                            <h3 class="mt-[5px] wow animated fadeIn inline-block text-[26px] tracking-[6px] text-btn">
                              Blog
                            </h3>
                          </a>
                        </div> -->
                        <div class="hero-pattern col-span-12 rounded-xl bg-white px-[30px] py-[25px] dark:bg-card">
                          <p class="text-[14px] text-text dark:text-white wow animated fadeIn">
                            Let’s work
                          </p>
                          <a href="contact.php">
                            <h3
                              class="mt-[5px] wow animated fadeIn inline-block text-[26px] tracking-[6px] text-btn dark:text-white">
                              Contact
                            </h3>
                          </a>
                        </div>
                      </div>
                      <!-- contact area end -->
                      
                      
                    </div>

                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- footer section one start -->

  <?php include('footer.php') ?>