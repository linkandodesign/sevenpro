
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Nós, na Indústria Criativa, oferecemos serviços educacionais e assessoria profissional a instituições públicas e privadas. Conheça mais em nosso site.">
    <title><?= $title; ?></title>
    <link
      rel="icon"
      href="./img/icons/favicon.ico"
      type="image/x-icon"
      sizes="16x16"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link href="./css/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <header class="menu d-flex align-items-center">
        <nav class="container-fluid container-xxl px-lg-5">
          <div class="row align-items-center my-4">
            <div class="col col-md-auto text-center text-xl-start my-2 my-xl-0">
              <a href="home">
                <img
                  src="./img/logo-menu.svg"
                  class="img-fluid mt-n3"
                  alt="Logo Seven Pro Menu"
                />
              </a>
            </div>
            <div class="col-12 col-lg my-2 my-xl-0">
              <form>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control input-search"
                    placeholder="Pesquisar"
                  />
                  <span class="input-group-text">
                    <button class="btn p-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="17"
                        height="17"
                        viewBox="0 0 17 17"
                        fill="none"
                      >
                        <path
                          d="M7.03276 11.6369C5.74595 11.6369 4.65701 11.1911 3.76592 10.2996C2.87484 9.40803 2.42906 8.31909 2.42859 7.03276C2.42859 5.74595 2.87437 4.65701 3.76592 3.76592C4.65748 2.87484 5.74642 2.42906 7.03276 2.42859C8.31956 2.42859 9.40851 2.87437 10.2996 3.76592C11.1907 4.65748 11.6364 5.74642 11.6369 7.03276C11.6369 7.5522 11.5543 8.04213 11.389 8.50255C11.2237 8.96296 10.9994 9.37026 10.7161 9.72442L14.6828 13.6911C14.8126 13.8209 14.8775 13.9862 14.8775 14.1869C14.8775 14.3876 14.8126 14.5529 14.6828 14.6828C14.5529 14.8126 14.3876 14.8775 14.1869 14.8775C13.9862 14.8775 13.8209 14.8126 13.6911 14.6828L9.72442 10.7161C9.37026 10.9994 8.96296 11.2237 8.50255 11.389C8.04213 11.5543 7.5522 11.6369 7.03276 11.6369ZM7.03276 10.2203C7.91817 10.2203 8.67089 9.91024 9.29092 9.29021C9.91095 8.67019 10.2207 7.9177 10.2203 7.03276C10.2203 6.14734 9.91024 5.39462 9.29021 4.77459C8.67019 4.15456 7.9177 3.84478 7.03276 3.84526C6.14734 3.84526 5.39462 4.15527 4.77459 4.7753C4.15456 5.39532 3.84478 6.14781 3.84526 7.03276C3.84526 7.91817 4.15527 8.67089 4.7753 9.29092C5.39532 9.91095 6.14781 10.2207 7.03276 10.2203Z"
                          fill="#FCFCFC"
                        />
                      </svg>
                    </button>
                  </span>
                </div>
              </form>
            </div>
            <div class="col-6 col-lg-auto text-center my-2 my-xl-0">
              <button class="btn w-100 btn-outline-white px-xl-4" type="button">
                PLATAFORMA
              </button>
            </div>
            <div class="col-6 col-lg-auto text-center my-2 my-xl-0">
              <button class="btn w-100 btn-theme px-xl-4" type="button">
                INSCREVA-SE
              </button>
            </div>
          </div>
        </nav>
      </header>
      <ul
        class="nav justify-content-center align-content-center sub-menu py-3 py-xl-0"
      >
        <li class="nav-item px-0 px-lg-3">
          <a class="nav-link" href="saude">SAÚDE</a>
        </li>
        <li class="nav-item px-0 px-lg-3">
          <a class="nav-link" href="negocios">NEGÓCIOS</a>
        </li>
        <li class="nav-item px-0 px-lg-3">
          <a class="nav-link" href="educacao">EDUCAÇÃO</a>
        </li>
        <li class="nav-item px-0 px-lg-3">
          <a class="nav-link" href="tecnologia">TECNOLOGIA</a>
        </li>
        <li class="nav-item px-0 px-lg-3">
          <a class="nav-link" href="teologia">TEOLOGIA</a>
        </li>
      </ul>
    </div>