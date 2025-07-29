
           <?php include('header.php'); include('admin/config.php');?>
         <!-- end of all header part -->
          <div class="col-span-12 lg:col-span-9 lg:ml-[30px]" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="main__body">
              <section class="home__component mt-[60px]">
                <!-- About Intro -->
                <div class="rounded-xl bg-white p-[40px] dark:bg-card">
                  <!-- <div class="grid grid-cols-12 md:gap-[50px]"> -->
                  <div class="col-span-12 md:gap-[50px]">

                    <!-- <div class="col-span-12 md:col-span-4">
                      <div class="flex justify-center">
                        <div class="relative flex justify-center wow animated fadeIn">
                          <img src="assets/images/show/DP.jpg" alt="" />
                        </div>
                      </div>
                    </div> -->

                    <div class="col-span-12 md:col-span-8">
                      <div class="mt-[60px] md:mt-0">
                        <h2
                          class="text-[42px] wow animated fadeIn leading-[52px] text-btn dark:text-white md:text-[62px] md:leading-[72px]">
                          About Me<span class="text-theme">!</span>
                        </h2>
                        <p class="text-[14px] text-text wow animated fadeIn">
                          My name is Emran Hasan. I am a Web designer and Web Developer, and I'm very passionate and dedicated to my work. With 05 years experience as a professional Web designer and Web developer, I have acquired the skills and knowledge necessary to make your project a success.
                        </p>

                        <div class="mt-[25px] gap-[30px] md:flex">
                          <?php
                          
                          $sql = "SELECT * FROM workhistory ORDER BY id ASC LIMIT 5 ";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){
                                
                             
                        ?>
                        <div class="flex items-center gap-[20px]">
                            <h2 class="text-[50px] text-theme wow animated fadeIn">
                              <span class="w-[80px] wow">
                                <span class="counter"><?php echo $row['number'] ?></span>+
                              </span>
                            </h2>
                            <p class="text-[14px] leading-[24px] text-text wow animated fadeIn">
                               <?php echo $row['title'] ?>
                            </p>
                        </div>
<?php  }  } else { ?>
                          <div class="flex items-center gap-[20px]">
                            <h2 class="text-[50px] text-theme wow wow animated fadeIn">
                              <span class="w-[80px]">
                                <span class="counter">10</span>+
                              </span>
                            </h2>
                            <p class="text-[14px] leading-[24px] text-text wow animated fadeIn">
                              Satisfied <br />
                              Clients
                            </p>
                          </div>

                          <div class="flex items-center gap-[20px]">
                            <h2 class="text-[50px] text-theme wow animated fadeIn">
                              <span class="w-[80px] wow">
                                <span class="counter">10</span>+
                              </span>
                            </h2>
                            <p class="text-[14px] leading-[24px] text-text wow animated fadeIn">
                              Projects <br />
                              Completed
                            </p>
                        </div>
 <?php }?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <!-- EXPERIENCE & EDUCATION  -->
                <div class="mt-[30px] grid grid-cols-12 gap-[30px]">
                          <?php
                          
                          $sql = "SELECT * FROM education ORDER BY id ASC";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){
                                
                             
                        ?>

                  <div class="col-span-12 md:col-span-6">
                    <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                      <div>
                        <h2 class="text-[24px] text-btn dark:text-white wow animated fadeIn">
                          <?php echo $row['title'] ?>
                        </h2>
                        <div>
                          <div class="mt-[20px] wow animated fadeIn">
                            <p class="text-[14px] text-text"><?php echo $row['session'] ?></p>
                            <p class="mt-[5px] text-[16px] font-semibold text-btn dark:text-white">
                              <?php echo $row['cname'] ?>
                            </p>
                            <p class="text-[12px] text-text">
                              <?php echo $row['iname'] ?>
                            </p>
                            <p class="mt-[5px] text-[12px] text-text font-semibold text-btn dark:text-white"><?php echo $row['status'] ?></p>
                            <p class="mt-[5px] text-[12px] text-text font-semibold text-btn dark:text-white"><?php echo $row['result'] ?></p>
                            <p class="mt-[5px] text-[12px] text-text font-semibold text-btn dark:text-white"><?php echo $row['board'] ?></p> 
                            <p class="mt-[5px] text-[12px] text-text font-semibold text-btn dark:text-white"><?php echo $row['pyear'] ?></p>
                            <p class="mt-[5px] text-[12px] text-text font-semibold text-btn dark:text-white"><?php echo $row['duration'] ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
<?php  }  } else { ?>
                  <div class="col-span-12 md:col-span-6">
                    <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                      <div>
                        <h2 class="text-[24px] text-btn dark:text-white wow animated fadeIn">
                          EXPERIENCE
                        </h2>
                        <div>
                          <div class="mt-[20px] wow animated fadeIn">
                            <p class="text-[14px] text-text">2019 - Present</p>
                            <p class="mt-[5px] text-[16px] font-semibold text-btn dark:text-white">
                              Full Stack Developer
                            </p>
                            <p class="text-[12px] text-text">
                              NEC Money Transfer Ltd.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-span-12 md:col-span-6">
                    <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                      <div>
                        <h2 class="text-[24px] text-btn dark:text-white wow animated fadeIn">
                          EDUCATION
                        </h2>
                        <div>
                          <div class="mt-[20px] wow animated fadeIn">
                            <p class="text-[14px] text-text">2022 - 2025</p>
                            <p class="mt-[5px] text-[16px] font-semibold text-btn dark:text-white">
                              Computer
                              Science & Engineering
                            </p>
                            <p class="text-[12px] text-text">
                              Bangladesh University
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
 <?php }?>
                </div>

                <!-- My Advantages  -->
                <div class="mt-[30px]">
                  <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                    <div>
                      <h2 class="text-[24px] text-btn dark:text-white wow animated fadeIn">
                        EXPERIENCE
                      </h2>
                      <div>
                        <div class="mt-[30px]">
                          <div class="grid gap-[25px]">

                            
<?php
                          
                          $sql = "SELECT * FROM experience ORDER BY id DESC";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){
                                
                             
                  ?>
                            <div class="w-full wow animated fadeIn">
                              <div class="mb-2 flex items-center justify-between gap-4 w-full">
                                <div class="text-[16px] font-medium text-btn dark:text-white">
                                  <?php echo $row['ename'] ?>
                                </div>
                                <h6 class="text-btn dark:text-white"><?php echo $row['epercentage'] ?></h6>
                              </div>
                              <div
                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme"
                                  style="width: <?php echo $row['epercentage'] ?>"></div>
                              </div>
                            </div>

<?php  }  } else { ?>
                            <div class="w-full wow animated fadeIn">
                              <div class="mb-2 flex items-center justify-between gap-4 w-full">
                                <div class="text-[16px] font-medium text-btn dark:text-white">
                                  React JS
                                </div>
                                <h6 class="text-btn dark:text-white">100%</h6>
                              </div>
                              <div
                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme wow"
                                  style="width: 100%"></div>
                              </div>
                            </div>
                            <div class="w-full wow animated fadeIn">
                              <div class="mb-2 flex items-center justify-between gap-4 w-full">
                                <div class="text-[16px] font-medium text-btn dark:text-white">
                                  Javascript
                                </div>
                                <h6 class="text-btn dark:text-white">70%</h6>
                              </div>
                              <div
                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme"
                                  style="width: 70%"></div>
                              </div>
                            </div>
                            <div class="w-full wow animated fadeIn">
                              <div class="mb-2 flex items-center justify-between gap-4 w-full">
                                <div class="text-[16px] font-medium text-btn dark:text-white">
                                  Typescript
                                </div>
                                <h6 class="text-btn dark:text-white">60%</h6>
                              </div>
                              <div
                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme"
                                  style="width: 60%"></div>
                              </div>
                            </div>
                            <div class="w-full wow animated fadeIn">
                              <div class="mb-2 flex items-center justify-between gap-4 w-full">
                                <div class="text-[16px] font-medium text-btn dark:text-white">
                                  Tailwind CSS
                                </div>
                                <h6 class="text-btn dark:text-white">90%</h6>
                              </div>
                              <div
                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme"
                                  style="width: 90%"></div>
                              </div>
                            </div>

 <?php }?>
                          </div>
                        </div>
                      </div>
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