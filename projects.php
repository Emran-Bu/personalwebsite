
           <?php include('header.php'); include('admin/config.php');?>
         <!-- end of all header part -->
          <div class="col-span-12 lg:col-span-9 lg:ml-[30px]" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="main__body">
              <section class="mt-[60px]">
                <!-- Project Intro  -->
                <div class="rounded-xl bg-white px-[20px] py-[40px] dark:bg-card md:p-[40px]">
                  <div>
                    <h2
                      class="text-[42px] wow animated fadeIn leading-[52px] text-btn dark:text-white md:text-[62px] md:leading-[72px]">
                      Featured Projects<span class="text-theme">!</span>
                    </h2>
                    <p class="text-[14px] text-text wow animated fadeIn">
                      Featured and popular products are the best-selling items
                      for your product, product range, or company. However, a
                      featured product could be a new product line or seasonal
                      products instead.
                    </p>

                    <div class="mt-[60px]">
                      <div class="grid grid-cols-12 md:gap-[30px]">

                       <?php
                          
                          $sql = "SELECT * FROM projects ORDER BY id DESC LIMIT 6";

                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)){      
                            
                        ?>

                        <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0">

                          <div class="boxShadow group rounded-xl bg-white p-[20px] dark:bg-btn dark:shadow-none">
                            <div class="overflow-hidden rounded-lg wow animated fadeIn">
                              <img src="admin/assets/img/projects/<?php echo $row['pimg'];  ?>" alt=""
                                class="transition-all duration-500 group-hover:scale-[110%]" />
                            </div>
                            <div class="mb-[10px] mt-[20px]">
                              <p class="text-[16px] text-text wow animated fadeIn">
                                <?php echo $row['ptitle'];  ?>
                              </p>
                              <a href="<?php echo $row['plink'];  ?> " target="_blank">
                                <h2
                                  class="mt-[14px] wow animated fadeIn inline-block text-[30px] leading-[40px] text-btn transition-all duration-300 hover:text-theme dark:text-white dark:hover:text-theme">
                                  <?php echo $row['pname'];  ?>
                                </h2>
                              </a>
                            </div>
                            <div class="mb-[8px] mt-[20px]">
                              <a href="<?php echo $row['pclink'];  ?> " target="_blank">
                                <h2
                                  class="mt-[14px] wow animated fadeIn inline-block text-[20px] leading-[40px] text-theme transition-all duration-300 hover:text-theme dark:text-white dark:hover:text-theme">
                                  Source Code
                                </h2>
                              </a>
                            </div>
                          </div>

                        </div>
<?php } } else { ?>
                        <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0">
                          <div class="boxShadow group rounded-xl bg-white p-[20px] dark:bg-btn dark:shadow-none">
                            <div class="overflow-hidden rounded-lg wow animated fadeIn">
                              <img src="assets/images/show/image-6.png" alt=""
                                class="transition-all duration-500 group-hover:scale-[110%]" />
                            </div>
                            <div class="mb-[10px] mt-[20px]">
                              <p class="text-[16px] text-text wow animated fadeIn">
                                Web Design & Development
                              </p>
                              <a href=" ">
                                <h2
                                  class="mt-[14px] wow animated fadeIn inline-block text-[30px] leading-[40px] text-btn transition-all duration-300 hover:text-theme dark:text-white dark:hover:text-theme">
                                  Website Design and Development (ERP)
                                </h2>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0">
                          <div class="boxShadow group rounded-xl bg-white p-[20px] dark:bg-btn dark:shadow-none">
                            <div class="overflow-hidden rounded-lg wow animated fadeIn">
                              <img src="assets/images/show/image-7.png" alt=""
                                class="transition-all duration-500 group-hover:scale-[110%]" />
                            </div>
                            <div class="mb-[10px] mt-[20px]">
                              <p class="text-[16px] text-text wow animated fadeIn">
                                Restaurant Website Design
                              </p>
                              <a href=" ">
                                <h2
                                  class="mt-[14px] wow animated fadeIn inline-block text-[30px] leading-[40px] text-btn transition-all duration-300 hover:text-theme dark:text-white dark:hover:text-theme">
                                  Restaurant Landing Page Design
                                </h2>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0">
                          <div class="boxShadow group rounded-xl bg-white p-[20px] dark:bg-btn dark:shadow-none">
                            <div class="overflow-hidden rounded-lg wow animated fadeIn">
                              <img src="assets/images/show/image-8.png" alt=""
                                class="transition-all duration-500 group-hover:scale-[110%]" />
                            </div>
                            <div class="mb-[10px] mt-[20px]">
                              <p class="text-[16px] text-text wow animated fadeIn">
                                Website Design
                              </p>
                              <a href=" ">
                                <h2
                                  class="mt-[14px] wow animated fadeIn inline-block text-[30px] leading-[40px] text-btn transition-all duration-300 hover:text-theme dark:text-white dark:hover:text-theme">
                                  U-Mart BD – Your Ultimate eCommerce Solution!
                                </h2>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0">
                          <div class="boxShadow group rounded-xl bg-white p-[20px] dark:bg-btn dark:shadow-none">
                            <div class="overflow-hidden rounded-lg wow animated fadeIn">
                              <img src="assets/images/show/image-9.png" alt=""
                                class="transition-all duration-500 group-hover:scale-[110%]" />
                            </div>
                            <div class="mb-[10px] mt-[20px]">
                              <p class="text-[16px] text-text wow animated fadeIn">
                                Portfolio Website
                              </p>
                              <a href=" ">
                                <h2
                                  class="mt-[14px] wow animated fadeIn inline-block text-[30px] leading-[40px] text-btn transition-all duration-300 hover:text-theme dark:text-white dark:hover:text-theme">
                                  Portfolio Website
                                </h2>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-span-12 mb-[40px] md:col-span-6 md:mb-0">
                          <div class="boxShadow group rounded-xl bg-white p-[20px] dark:bg-btn dark:shadow-none">
                            <div class="overflow-hidden rounded-lg wow animated fadeIn">
                              <img src="assets/images/show/image-10.png" alt=""
                                class="transition-all duration-500 group-hover:scale-[110%]" />
                            </div>
                            <div class="mb-[10px] mt-[20px]">
                              <p class="text-[16px] text-text wow animated fadeIn">
                                UX / UI Design
                              </p>
                              <a href=" ">
                                <h2
                                  class="mt-[14px] wow animated fadeIn inline-block text-[30px] leading-[40px] text-btn transition-all duration-300 hover:text-theme dark:text-white dark:hover:text-theme">
                                  Restaurant Mobile Application Figma Design
                                </h2>
                              </a>
                            </div>
                          </div>
                        </div>
<?php } ?>
                      </div>
                    </div>
                    <!-- Pagination  -->

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