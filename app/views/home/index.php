<!-- Hero section start -->
<section id="home" class="pt-36 pb-36">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl">
              Halo! 🖐 saya
              <span class="mt-1 block text-4xl font-bold text-dark lg:text-5xl"
                ><?= $data['nama']; ?></span
              >
            </h1>
            <h2 class="mb-5 text-lg font-medium text-secondary lg:text-2xl">
              Student
            </h2>
            <p class="mb-10 font-medium leading-relaxed text-light">
              Saya selalu mengikuti perkembangan terbaru dalam pengembangan web
              dan senang memberikan solusi inovatif sesuai standar industri dan
              harapan pengguna. Selamat datang di portfolio saya.
            </p>
            <a
              href="#"
              class="transaition rounded-full bg-primary px-8 py-3 text-base font-semibold text-white duration-300 ease-in-out hover:opacity-80 hover:shadow-lg"
              >Hubungi Saya</a
            >
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <img
                src="<?= BASEURL; ?>/img/okrafaldino2.png"
                alt="okrafaldino"
                class="mx-auto max-w-full"
              />
              <span
                class="absolute -bottom-8 left-1/2 -z-10 -translate-x-1/2 md:scale-125"
              >
                <svg
                  width="400"
                  height="400"
                  viewBox="0 0 200 200"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="#7D5A50"
                    d="M53.6,-20.9C60.3,3.2,50.2,29.2,30.3,44.2C10.4,59.3,-19.3,63.4,-38.6,50.1C-57.9,36.8,-66.7,6.1,-58.5,-20C-50.4,-46.1,-25.2,-67.7,-0.9,-67.4C23.5,-67.1,46.9,-45,53.6,-20.9Z"
                    transform="translate(100 100) scale(1.1)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero section -->