<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul']; ?></title>
  <link href="<?= BASEURL; ?>/dist/output.css" rel="stylesheet">
</head>

<body>
<!-- Header Star -->
<header
      class="absolute left-0 top-0 z-10 flex w-full items-center bg-transparent"
    >
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">
            <a href="<?= BASEURL; ?>/home" class="block py-6 text-lg font-bold text-primary"
              >Okrafaldino</a
            >
          </div>
          <div class="flex items-center px-4">
            <button
              id="hamburger"
              name="hamburger"
              type="button"
              class="absolute right-4 block lg:hidden"
            >
              <span
                class="hamburger-line origin-top-left transition duration-300 ease-in-out"
              ></span>
              <span
                class="hamburger-line transition duration-300 ease-in-out"
              ></span>
              <span
                class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"
              ></span>
            </button>

            <nav
              id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="<?= BASEURL; ?>/home"
                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                    >Home</a
                  >
                </li>
                <li class="group">
                  <a
                    href="<?= BASEURL; ?>/mahasiswa"
                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                    >Mahasiswa</a
                  >
                </li>
                <li class="group">
                  <a
                    href="<?= BASEURL; ?>/about"
                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                    >About</a
                  >
                </li>
                <li class="group">
                  <a
                    href="<?= BASEURL; ?>/projects"
                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                    >Projects</a
                  >
                </li>
                <li class="group">
                  <a
                    href="<?= BASEURL; ?>/contact"
                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                    >Contact</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->