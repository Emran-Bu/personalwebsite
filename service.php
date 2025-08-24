
            
           <?php include('header.php'); include('admin/config.php');?>
         <!-- end of all header part -->
            <div
              class="col-span-12 lg:col-span-9 lg:ml-[30px]"
              data-wow-duration="1.5s"
              data-wow-delay="0.3s"
            >
              <div class="main__body">
                <section class="mt-[60px]">
                  <!-- Service Intro  -->
                  <div
                    class="rounded-xl bg-white px-[20px] py-[40px] dark:bg-card lg:p-[40px]"
                  >
                    <div>
                      <h2
                        class="text-[42px] wow animated fadeIn leading-[52px] text-btn dark:text-white md:text-[62px] md:leading-[72px]"
                      >
                        My Best Service<span class="text-theme">!</span>
                      </h2>
                      <p class="text-[14px] text-text wow animated fadeIn">
                        The imperative for integrated, expansive, and seamless
                        digital experiences is fueling software product design
                        and development across organizations at an unprecedented
                        scale. These demands require capabilities to imagine,
                        build, and run digital products and services for new and
                        existing.
                      </p>
                      <div class="mt-[60px]">
                        <div class="grid grid-cols-12 md:gap-[30px]">

                        <?php
                          
                          $sql = "SELECT * FROM services ORDER BY id ASC";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){
                                
                             
                        ?>

                          <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0 wow animated fadeIn">
                            <div class="boxShadow rounded-xl bg-white p-[30px] dark:bg-btn dark:shadow-none">
                              <div>
                                <img
                                  src="admin/assets/img/services/<?php echo $row['serviceimg']; ?>"
                                  alt=""
                                  class="w-[60px]"
                                />
                              </div>
                              <div class="mt-[20px]">
                                <h2
                                  class="text-[24px] text-btn dark:text-white"
                                >
                                  <?php echo $row['servicename']; ?>
                                </h2>
                                <ul class="mt-[20px] grid gap-[16px]">
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    <?php echo $row['servicetitle1']; ?>
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    <?php echo $row['servicetitle2']; ?>
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    <?php echo $row['servicetitle3']; ?>
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    <?php echo $row['servicetitle4']; ?>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

<?php  }  } else { ?>

                          <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0 wow animated fadeIn">
                            <div
                              class="boxShadow rounded-xl bg-white p-[30px] dark:bg-btn dark:shadow-none"
                            >
                              <div>
                                <img
                                  src="assets/images/icon/designer.png"
                                  alt=""
                                  class="w-[60px]"
                                />
                              </div>
                              <div class="mt-[20px]">
                                <h2
                                  class="text-[24px] text-btn dark:text-white"
                                >
                                  UX Design Services
                                </h2>
                                <ul class="mt-[20px] grid gap-[16px]">
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    User flow charts, diagrams
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Content strategy & Wireframes
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Brand and design system development
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Design technology consulting
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0 wow animated fadeIn">
                            <div
                              class="boxShadow rounded-xl bg-white p-[30px] dark:bg-btn dark:shadow-none"
                            >
                              <div>
                                <img
                                  src="assets/images/icon/application.png"
                                  alt=""
                                  class="w-[60px]"
                                />
                              </div>
                              <div class="mt-[20px]">
                                <h2
                                  class="text-[24px] text-btn dark:text-white"
                                >
                                  Mobile Application Design
                                </h2>
                                <ul class="mt-[20px] grid gap-[16px]">
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Voting Application for Market Validation
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Poker Application for Agile Teams
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Storytelling Mobile App for Travelers
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Mobile and web app user interface
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0 wow animated fadeIn">
                            <div
                              class="boxShadow rounded-xl bg-white p-[30px] dark:bg-btn dark:shadow-none"
                            >
                              <div>
                                <img
                                  src="assets/images/icon/design-tool.png"
                                  alt=""
                                  class="w-[60px]"
                                />
                              </div>
                              <div class="mt-[20px]">
                                <h2
                                  class="text-[24px] text-btn dark:text-white"
                                >
                                  Logo design
                                </h2>
                                <ul class="mt-[20px] grid gap-[16px]">
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Adobe Illustrator
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Vector tracing tools that convert
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Inkscape
                                  </li>
                                  <li class="flex items-start text-text">
                                    <i
                                      class="fa-solid fa-caret-right mr-[8px] mt-[4px]"
                                    ></i>
                                    Gravit Designer
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

 <?php }?>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Button  -->
                  <!-- <div class="mt-[30px]">
                    <button
                      class="rounded-full border-2 border-theme bg-theme px-[30px] py-[10px] font-medium text-btn transition-all duration-300 dark:hover:bg-transparent dark:hover:text-theme wow animated fadeIn"
                    >
                      Load More
                    </button>
                  </div> -->
                  <!-- Counter section  -->
                  <div class="mt-[60px] grid grid-cols-12 gap-[20px] wow animated fadeIn" >

                    


                     <?php
                          
                          $sql = "SELECT * FROM workhistory ORDER BY id ASC LIMIT 4";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){
                                
                             
                        ?>

                    <div class="col-span-6 md:col-span-3">
                      <div class="flex items-center gap-[20px]">
                        <h2 class="text-[50px] text-theme">
                          <span class="w-[80px]">
                            <span class="counter wow"><?php echo $row['number'] ?></span>+
                          </span>
                        </h2>
                        <p class="text-[14px] leading-[24px] text-text">
                          <?php echo $row['title'] ?>
                        </p>
                      </div>
                    </div>

 <?php  }  } else { ?>

                    <div class="col-span-6 md:col-span-3">
                      <div class="flex items-center gap-[20px]">
                        <h2 class="text-[50px] text-theme">
                          <span class="w-[80px]">
                            <span class="counter wow">490</span>+
                          </span>
                        </h2>
                        <p class="text-[14px] leading-[24px] text-text">
                          Projects <br />
                          Completed
                        </p>
                      </div>
                    </div>

                    <div class="col-span-6 md:col-span-3">
                      <div class="flex items-center gap-[20px]">
                        <h2 class="text-[50px] text-theme">
                          <span class="w-[80px]">
                            <span class="counter wow">980</span>+
                          </span>
                        </h2>
                        <p class="text-[14px] leading-[24px] text-text">
                          Download <br />
                          Projects
                        </p>
                      </div>
                    </div>

                    <div class="col-span-6 md:col-span-3">
                      <div class="flex items-center gap-[20px]">
                        <h2 class="text-[50px] text-theme">
                          <span class="w-[80px]">
                            <span class="counter wow">790</span>+
                          </span>
                        </h2>
                        <p class="text-[14px] leading-[24px] text-text">
                          Hour <br />
                          Work Time
                        </p>
                      </div>
                    </div>


 <?php }?>

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