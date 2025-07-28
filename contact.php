

                       <?php include('header.php'); include('admin/config.php');?>
         <!-- end of all header part -->
            <div
              class="col-span-12 lg:col-span-9 lg:ml-[30px]"
              data-wow-duration="1.5s"
              data-wow-delay="0.3s"
            >
              <div class="main__body">
                <section class="mt-[60px]">
                  <!-- contact Intro  -->
                  <div class="rounded-xl bg-white p-[30px] dark:bg-card">
                    <div>
                      <h2
                        class="text-[42px] wow animated fadeIn leading-[52px] text-btn dark:text-white md:text-[62px] md:leading-[72px]"
                      >
                        Let’s Chat<span class="text-theme">!</span>
                      </h2>
                      <p class="text-[14px] text-text wow animated fadeIn">
                        Feel free to contact us through Twitter or Facebook if
                        you prefer!
                      </p>
                      <div class="mb-[30px] mt-[30px]">
                        <div>
                          <div>
                            <form
                              id="contact-form"
                              class="contact-form"
                              action="mail.php"
                              method="POST"
                            >
                              <div
                                class="grid w-full gap-[20px] md:flex wow animated fadeIn"
                              >
                                <div class="md:w-1/2">
                                  <input
                                    class="block w-full rounded-lg border bg-white px-[15px] py-[10px] text-btn focus:outline-none dark:border-none dark:bg-btn dark:text-white"
                                    type="text"
                                    placeholder="Enter Your Name"
                                    id="name"
                                    name="name"
                                    required="required"
                                  />
                                </div>
                                <div class="md:w-1/2">
                                  <input
                                    class="block w-full rounded-lg border bg-white px-[15px] py-[10px] text-btn focus:outline-none dark:border-none dark:bg-btn dark:text-white"
                                    type="email"
                                    id="email"
                                    name="email"
                                    required="required"
                                    placeholder="Enter Your Email"
                                  />
                                </div>
                              </div>
                              <div class="mt-[20px] wow animated fadeIn">
                                <input
                                  class="block w-full rounded-lg border bg-white px-[15px] py-[10px] text-btn focus:outline-none dark:border-none dark:bg-btn dark:text-white"
                                  placeholder="Website Link:"
                                  type="url"
                                  id="website"
                                  name="website"
                                  required="required"
                                />
                              </div>
                              <div class="mt-[20px] wow animated fadeIn">
                                <textarea
                                  name="message"
                                  id="massage"
                                  placeholder="Enter Your Massage"
                                  required
                                  cols="30"
                                  rows="6"
                                  class="block w-full rounded-lg border bg-white px-[15px] py-[10px] text-btn focus:outline-none dark:border-none dark:bg-btn dark:text-white"
                                ></textarea>
                              </div>
                              <div>
                                <div
                                  class="mb-6 mt-[20px] flex items-start wow animated fadeIn"
                                >
                                  <div class="flex h-5 items-center">
                                    <input
                                      id="remember"
                                      aria-describedby="remember"
                                      type="checkbox"
                                      class="h-4 w-4 rounded bg-btn"
                                      required=""
                                    />
                                  </div>
                                  <div class="ml-3 text-sm">
                                    <label
                                      for="remember"
                                      class="font-medium text-text"
                                    >
                                      Save my name, email, and website in this
                                      browser for the next time I comment.
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="mb-[30px] wow animated fadeIn">
                                <button
                                  type="submit"
                                  class="rounded-full border-2 border-theme bg-theme px-[30px] py-[10px] font-medium text-btn transition-all duration-300 dark:hover:bg-transparent dark:hover:text-theme"
                                >
                                  Send Massage
                                </button>
                                <p
                                  class="mt-[15px] text-theme form-Messages"
                                ></p>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Map section  -->
                  <div
                    class="mt-[30px] rounded-xl bg-white p-[30px] dark:bg-card wow animated fadeIn"
                  >
                    <div class="contact-map">
                      <iframe
                        title="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.895531868613!2d90.33542767167094!3d23.76706445269667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c083149585f5%3A0xeb28ac94751626ca!2sBangladesh%20University!5e0!3m2!1sen!2sbd!4v1747081504593!5m2!1sen!2sbd" width="975" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        height="470"
                        width="100%"
                      ></iframe>
                    </div>
                  </div>
                  <!-- contact info  -->

                </section>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  <!-- footer section one start -->

  <?php include('footer.php') ?>