<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artha</title>
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
    <header class="header">
      <nav class="header__top">
        <ul class="container">
          <li class="header__top__item">
            <svg
              width="11"
              height="12"
              viewBox="0 0 11 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M10.3889 8.33333C9.65554 8.33333 8.9222 8.2 8.18887 7.93333C8.00554 7.86667 7.76109 7.93333 7.57776 8.06667L6.23331 9.53333C4.5222 8.6 3.11664 7 2.19997 5.13333L3.54441 3.66667C3.72775 3.46667 3.78887 3.2 3.66664 3C3.4833 2.26667 3.36108 1.46667 3.36108 0.666667C3.36108 0.266667 3.11664 0 2.74997 0H0.611081C0.244414 0 -3.05176e-05 0.266667 -3.05176e-05 0.666667C-3.05176e-05 6.93333 4.64442 12 10.3889 12C10.7556 12 11 11.7333 11 11.3333V9C11 8.6 10.7556 8.33333 10.3889 8.33333ZM9.77776 6H11C11 2.66667 8.55554 0 5.49998 0V1.33333C7.88331 1.33333 9.77776 3.4 9.77776 6ZM7.33331 6H8.55554C8.55554 4.13333 7.21109 2.66667 5.49998 2.66667V4C6.53887 4 7.33331 4.86667 7.33331 6Z"
                fill="white"
              />
            </svg>
            <a href="">{{ setting('site.contact_number') }}</a>
          </li>
          <li class="header__top__item">
            <svg
              width="14"
              height="12"
              viewBox="0 0 14 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12.6 0H1.4C0.63 0 0 0.675 0 1.5V10.5C0 11.325 0.63 12 1.4 12H12.6C13.37 12 14 11.325 14 10.5V1.5C14 0.675 13.37 0 12.6 0ZM12.6 10.5H11.2V3.9L7 6.75L2.8 3.9V10.5H1.4V1.5H2.24L7 4.65L11.76 1.5H12.6V10.5Z"
                fill="white"
              />
            </svg>
            <a href="">{{ setting('site.email') }}</a>
          </li>
          <li class="header__top__item social-box">
            @if(setting('site.facebook_link'))
            <a href="{{ setting('site.facebook_link') }}">
              <svg
                width="15"
                height="15"
                viewBox="0 0 15 15"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M14.1719 0H0.828125C0.370625 0 0 0.370625 0 0.828125V14.1725C0 14.6294 0.370625 15 0.828125 15H8.0125V9.19125H6.0575V6.9275H8.0125V5.25813C8.0125 3.32063 9.19563 2.26562 10.9244 2.26562C11.7525 2.26562 12.4637 2.3275 12.6713 2.355V4.38L11.4725 4.38062C10.5325 4.38062 10.3506 4.8275 10.3506 5.4825V6.92812H12.5925L12.3006 9.19187H10.3506V15H14.1731C14.6294 15 15 14.6294 15 14.1719V0.828125C15 0.370625 14.6294 0 14.1719 0Z"
                  fill="white"
                />
              </svg>
            </a>
            @endif
            @if(setting('site.instagram_link'))
            <a href="{{ setting('site.instagram_link') }}">
              <svg
                width="15"
                height="15"
                viewBox="0 0 15 15"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.5 1.35188C9.5025 1.35188 9.74 1.35938 10.5312 1.39562C12.5638 1.48813 13.5131 2.4525 13.6056 4.47C13.6419 5.26062 13.6487 5.49813 13.6487 7.50063C13.6487 9.50375 13.6412 9.74063 13.6056 10.5312C13.5125 12.5469 12.5656 13.5131 10.5312 13.6056C9.74 13.6419 9.50375 13.6494 7.5 13.6494C5.4975 13.6494 5.26 13.6419 4.46938 13.6056C2.43187 13.5125 1.4875 12.5438 1.395 10.5306C1.35875 9.74 1.35125 9.50313 1.35125 7.5C1.35125 5.4975 1.35938 5.26062 1.395 4.46938C1.48813 2.4525 2.435 1.4875 4.46938 1.395C5.26062 1.35938 5.4975 1.35188 7.5 1.35188ZM7.5 0C5.46312 0 5.20813 0.00875 4.40812 0.045C1.68438 0.17 0.170625 1.68125 0.045625 4.4075C0.00875 5.20813 0 5.46312 0 7.5C0 9.53687 0.00875 9.7925 0.045 10.5925C0.17 13.3162 1.68125 14.83 4.4075 14.955C5.20813 14.9913 5.46312 15 7.5 15C9.53687 15 9.7925 14.9913 10.5925 14.955C13.3138 14.83 14.8313 13.3188 14.9544 10.5925C14.9913 9.7925 15 9.53687 15 7.5C15 5.46312 14.9913 5.20813 14.955 4.40812C14.8325 1.68687 13.3194 0.170625 10.5931 0.045625C9.7925 0.00875 9.53687 0 7.5 0ZM7.5 3.64875C6.99425 3.64875 6.49345 3.74837 6.02619 3.94191C5.55894 4.13545 5.13438 4.41913 4.77675 4.77675C4.41913 5.13438 4.13545 5.55894 3.94191 6.02619C3.74837 6.49345 3.64875 6.99425 3.64875 7.5C3.64875 8.00575 3.74837 8.50655 3.94191 8.97381C4.13545 9.44106 4.41913 9.86562 4.77675 10.2232C5.13438 10.5809 5.55894 10.8645 6.02619 11.0581C6.49345 11.2516 6.99425 11.3513 7.5 11.3513C8.52141 11.3513 9.50099 10.9455 10.2232 10.2232C10.9455 9.50099 11.3513 8.52141 11.3513 7.5C11.3513 6.47859 10.9455 5.499 10.2232 4.77675C9.50099 4.05451 8.52141 3.64875 7.5 3.64875ZM7.5 10C6.83696 10 6.20107 9.73661 5.73223 9.26777C5.26339 8.79893 5 8.16304 5 7.5C5 6.83696 5.26339 6.20107 5.73223 5.73223C6.20107 5.26339 6.83696 5 7.5 5C8.16304 5 8.79893 5.26339 9.26777 5.73223C9.73661 6.20107 10 6.83696 10 7.5C10 8.16304 9.73661 8.79893 9.26777 9.26777C8.79893 9.73661 8.16304 10 7.5 10ZM11.5037 2.59688C11.3855 2.59688 11.2684 2.62016 11.1592 2.66541C11.05 2.71065 10.9507 2.77697 10.8671 2.86057C10.7835 2.94417 10.7172 3.04342 10.672 3.15265C10.6267 3.26188 10.6034 3.37896 10.6034 3.49719C10.6034 3.61542 10.6267 3.73249 10.672 3.84172C10.7172 3.95095 10.7835 4.0502 10.8671 4.1338C10.9507 4.21741 11.05 4.28372 11.1592 4.32897C11.2684 4.37421 11.3855 4.3975 11.5037 4.3975C11.7425 4.3975 11.9715 4.30265 12.1404 4.1338C12.3092 3.96496 12.4041 3.73597 12.4041 3.49719C12.4041 3.25841 12.3092 3.02941 12.1404 2.86057C11.9715 2.69173 11.7425 2.59688 11.5037 2.59688Z"
                  fill="white"
                />
              </svg>
            </a>
            @endif
          </li>
        </ul>
      </nav>
      <nav class="nav">
        <div class="container">
          <a href="" class="nav__logo">
            <img
              src="/assets/image/artha_logo.jpeg"
              alt="Artha Logo"
              width="82px"
            />
          </a>
          <ul>
            <li class="nav__item">
              <a href="" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="" class="nav__link">About</a>
            </li>
            <li class="nav__item">
              <a href="" class="nav__link">Shop</a>
            </li>
            <li class="nav__item">
              <a href="" class="nav__link">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="hero">
        <div class="container">
          <div class="hero__content flex flex-wrap">
            <h2 class="title title--light hero__content__top relative">
              artha boutique shop
            </h2>
            <div class="hero__content__main relative">
              <h2 class="title title--light hero__content__side absolute">
                Established Since 2000
              </h2>
              <h1 class="title title--main">
                <span class="font-light"> Catch Your Own </span>
                <br />
                Stylish & look
              </h1>
              <p class="paragraph">
                Sandesh boutique is best boutique shoop for every fashio men and
                women EStablished Since 2000 EStablished Since 2000 ndesh
                boutique is best boutique shoop for every
              </p>

              <a href="" class="button button--primary hero__btn"
                >Discover Now</a
              >
            </div>
          </div>
          <div class="hero__image">
            <img
              class="w-100"
              src="/assets/image/hero_image.png"
              alt="Artha Boutique Image"
            />
          </div>
        </div>
      </div>
    </header>

    <main class="main">
      <section class="collection bg-dim gutterY gutterY--bottom">
        <div class="container">
          <h2 class="title title--heading text-center">
            Discover The Collections
          </h2>
          <p class="paragraph text-center">
            Sandesh boutique is best boutique shoop for every fashio men and
            women EStablished Since
          </p>
          <ul class="collection__list mid-mar-tp">
            <li
              class="collection__item"
              style="
                background-image: url('/assets/image/artha_collection-1.png');
              "
            >
              <a
                href=""
                class="collection__item__category button button--light"
              >
                Women <span class="button__info">25 Items</span>
              </a>
            </li>
            <li class="">
              <div
                class="collection__item collection__item--group"
                style="
                  background-image: url('/assets/image/artha_collection-2.png');
                "
              >
                <a
                  href=""
                  class="collection__item__category button button--light"
                >
                  Men <span class="button__info">25 Items</span>
                </a>
              </div>
              <div
                class="collection__item collection__item--group"
                style="
                  background-image: url('/assets/image/artha_collection-3.png');
                "
              >
                <a
                  href=""
                  class="collection__item__category button button--light"
                >
                  Shoes <span class="button__info">25 Items</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="about gutterY gutterY--bottom">
        <div class="container">
          <div class="two-box">
            <div class="two-box__left">
              <img
                class="w-100"
                src="/assets/image/about_section_image.png"
                alt="Artha Boutique Image"
              />
            </div>
            <div class="two-box__right">
              <h2 class="title title--heading mid-mar-bt about__title">
                Better Way to Design Your Style
              </h2>

              <p class="paragraph sm-mar-bt">
                Sandesh boutique is best boutique shoop for every fashio men and
                women EStablished Since 2000 EStablished Since 2000 ndesh
                boutique is best boutique shoop
              </p>

              <p class="paragraph">
                for every fSandesh boutique is best boutique shoop for every
                fashio men and women EStablished Since 2000 EStablished Since
                2000 ndesh boutique is best boutique shoop for every
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="product gutterY gutterY--bottom bg-dim">
        <div class="container">
          <h2 class="title title--heading text-center">Products</h2>
          <p class="paragraph text-center">
            Sandesh boutique is best boutique shoop for every fashio men and
            women EStablished Sin
          </p>

          <ul class="product__list mid-mar-tp">
            <li class="">
              <a href="" class="product__item">
                <div class="product__image-box">
                  <span class="button button--small product__more-btn"
                    >View More +</span
                  >
                  <img
                    src="/assets/image/product-1.png"
                    alt="Artha Boutique Product 1"
                  />
                </div>

                <h4 class="title title--small product__name">
                  Sandesh Boutique Special Products
                </h4>
                <span class="product__price">NPR 3300.00</span>
              </a>
            </li>
            <li class="">
              <a href="" class="product__item">
                <div class="product__image-box">
                  <span class="button button--small product__more-btn"
                    >View More +</span
                  >
                  <img
                    src="/assets/image/product-2.png"
                    alt="Artha Boutique Product 2"
                  />
                </div>
                <h4 class="title title--small product__name">
                  Sandesh Boutique Special Products
                </h4>
                <span class="product__price">NPR 3300.00</span>
              </a>
            </li>
            <li class="">
              <a href="" class="product__item">
                <div class="product__image-box">
                  <span class="button button--small product__more-btn"
                    >View More +</span
                  >
                  <img
                    src="/assets/image/product-3.png"
                    alt="Artha Boutique Product 3"
                  />
                </div>
                <h4 class="title title--small product__name">
                  Sandesh Boutique Special Products
                </h4>
                <span class="product__price">NPR 3300.00</span>
              </a>
            </li>
            <li class="">
              <a href="" class="product__item">
                <div class="product__image-box">
                  <span class="button button--small product__more-btn"
                    >View More +</span
                  >
                  <img
                    src="/assets/image/product-4.png"
                    alt="Artha Boutique Product 4"
                  />
                </div>
                <h4 class="title title--small product__name">
                  Sandesh Boutique Special Products
                </h4>
                <span class="product__price">NPR 3300.00</span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="trending mid-mar-bt mid-mar-tp">
        <div class="container">
          <div
            class="trending__image"
            style="background-image: url(/assets/image/trending.png)"
          ></div>

          <div class="trending__content text-center">
            <h3 class="title title--small trending__title-top">
              #New Summer Collection 2021
            </h3>
            <h2 class="title title--huge sm-mar-bt">Modern Tops</h2>
            <a href="" class="button button--primary trending__button"
              >View More +</a
            >
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container text-center">
        <a href="" class="footer__link footer__link--main">
          Copyyright 2020 Artha
        </a>

        <a href="" class="footer__link">Collections</a>
        <a href="" class="footer__link">Products</a>
        <a href="" class="footer__link">Contact</a>
      </div>
    </footer>
  </body>
</html>
