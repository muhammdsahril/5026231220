<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/tugas-linktree/pertemuan-enam.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Kemnaker Linktree</title>
  </head>
  <body>
    <div>
      <div class="d-flex flex-column container">
        <!--Top Bar Section-->
        <div class="d-flex justify-content-end m-4 p-2">
          <div class="d-flex justify-content-center">
            <button class="btn btn-secondary btn-ellipsis rounded-circle">
              <img
                src="{{ asset('img/tugas-linktree/icon-ellipsis.png') }}"
                alt="Logo Ellipsis"
                height="10px"
                width="10px"
                class="rounded-circle"
              />
            </button>
          </div>
        </div>

        <!--Profile Section-->
        <div
          class="d-flex flex-column justify-content-center align-items-center"
        >
          <img
            src="{{ asset('img/tugas-linktree/logo-kemnaker.jpg') }}"
            alt="Logo Kemnaker"
            height="95"
            width="95"
            class="rounded-circle"
          />
          <h5 class="text-white font-weight-bold mt-3">@kemnaker</h5>
          <h6 class="text-white font-weight-bold mt-4">
            Kementerian Ketenagakerjaan RI
          </h6>
        </div>

        <!--Link Section-->
        <div class="d-flex justify-content-center">
          <div class="d-flex flex-column link-container mt-3">
            <div class="btn-item border">
              <a href="#" class="btn-font d-flex justify-content-center"
                >Saluran/Channel Whatsapp</a
              >
              <div class="btn-menu">
                <img
                  src="{{ asset('img/tugas-linktree/icon-ellipsis.png') }}"
                  alt="Ellipsis"
                  height="15"
                  width="15"
                  class="btn-ellipsis-item"
                />
              </div>
            </div>

            <div class="btn-item border mt-3">
              <a href="#" class="btn-font d-flex justify-content-center"
                >Situs Web Kemnaker</a
              >
              <div class="btn-menu">
                <img
                  src="{{ asset('img/tugas-linktree/icon-ellipsis.png') }}"
                  alt="Ellipsis"
                  height="15"
                  width="15"
                  class="btn-ellipsis-item"
                />
              </div>
            </div>

            <div class="btn-item border mt-3">
              <a href="#" class="btn-font d-flex justify-content-center"
                >Berita Ketenagakerjaan</a
              >
              <div class="btn-menu">
                <img
                  src="{{ asset('img/tugas-linktree/icon-ellipsis.png') }}"
                  alt="Ellipsis"
                  height="15"
                  width="15"
                  class="btn-ellipsis-item"
                />
              </div>
            </div>

            <div class="btn-item border mt-3">
              <a href="#" class="btn-font d-flex justify-content-center"
                >TikTok Kemnaker</a
              >
              <div class="btn-menu">
                <img
                  src="{{ asset('img/tugas-linktree/icon-ellipsis.png') }}"
                  alt="Ellipsis"
                  height="15"
                  width="15"
                  class="btn-ellipsis-item"
                />
              </div>
            </div>

            <div class="btn-item border mt-3">
              <a href="#" class="btn-font d-flex justify-content-center"
                >Youtube Kemnaker</a
              >
              <div class="btn-menu">
                <img
                  src="{{ asset('img/tugas-linktree/icon-ellipsis.png') }}"
                  alt="Ellipsis"
                  height="15"
                  width="15"
                  class="btn-ellipsis-item"
                />
              </div>
            </div>

            <div class="btn-item border mt-3">
              <a href="#" class="btn-font d-flex justify-content-center"
                >Line Kemnaker</a
              >
              <div class="btn-menu">
                <img
                  src="{{ asset('img/tugas-linktree/icon-ellipsis.png') }}"
                  alt="Ellipsis"
                  height="15"
                  width="15"
                  class="btn-ellipsis-item"
                />
              </div>
            </div>
          </div>
        </div>

        <!--Social Section-->

        <div class="d-flex justify-content-center align-items-center pt-5">
          <a href="#" class="mx-2 social-icon">
            <img src="{{ asset('img/tugas-linktree/icons8-facebook.svg') }}" height="35px" />
          </a>
          <a href="#" class="mx-2 social-icon">
            <img src="{{ asset('img/tugas-linktree/icons8-instagram.svg') }}" height="34px" />
          </a>
          <a href="#" class="mx-2 social-icon">
            <img src="{{ asset('img/tugas-linktree/logo-tiktok-svgrepo-com.svg') }}" height="32px" />
          </a>
          <a href="#" class="mx-2 social-icon">
            <img src="{{ asset('img/tugas-linktree/youtube-svgrepo-com.svg') }}" height="39px" />
          </a>
          <a href="#" class="mx-2 social-icon">
            <img src="{{ asset('img/tugas-linktree/icons8-telegram (1).svg') }}" height="34px" />
          </a>
        </div>

        <!--Linktree Icon Section-->
        <div class="d-flex justify-content-center mt-4 mb-5">
          <button class="d-flex align-items-center btn-linktree">
            <img src="{{ asset('img/tugas-linktree/linktree.svg') }}"/>
            <p class="m-0">Join Kemnaker on Linktree</p>
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
