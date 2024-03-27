
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
      Site created by Brian Design on youtube @ www.youtube.com/channel/UCsKsymTY_4BYR-wytLjex7A?view_as=subscriber
    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML CSS Website</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
                * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Kumbh Sans', sans-serif;
        }

        .navbar {
        background: #131313;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.2rem;
        position: sticky;
        top: 0;
        z-index: 999;
        }

        .navbar__container {
        display: flex;
        justify-content: space-between;
        height: 80px;
        z-index: 1;
        width: 100%;
        max-width: 1300px;
        margin-right: auto;
        margin-left: auto;
        padding-right: 50px;
        padding-left: 50px;
        }

        #navbar__logo {
        background-color: #ff8177;
        background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
        background-size: 100%;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
        display: flex;
        align-items: center;
        cursor: pointer;
        text-decoration: none;
        font-size: 2rem;
        }

        .fa-gem {
        margin-right: 0.5rem;
        }

        .navbar__menu {
        display: flex;
        align-items: center;
        list-style: none;
        text-align: center;
        }

        .navbar__item {
        height: 80px;
        }

        .navbar__links {
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        padding: 0 1rem;
        height: 100%;
        }

        .navbar__btn {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 1rem;
        width: 100%;
        }

        .button {
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        padding: 10px 20px;
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        border-radius: 4px;
        background: #f77062;
        color: #fff;
        }

        .button:hover {
        background: #4837ff;
        transition: all 0.3s ease;
        }

        .navbar__links:hover {
        color: #f77062;
        transition: all 0.3s ease;
        }

        @media screen and (max-width: 960px) {
        .navbar__container {
            display: flex;
            justify-content: space-between;
            height: 80px;
            z-index: 1;
            width: 100%;
            max-width: 1300px;
            padding: 0;
        }

        .navbar__menu {
            display: grid;
            grid-template-columns: auto;
            margin: 0;
            width: 100%;
            position: absolute;
            top: -1000px;
            opacity: 1;
            transition: all 0.5s ease;
            height: 50vh;
            z-index: -1;
        }

        .navbar__menu.active {
            background: #131313;
            top: 100%;
            opacity: 1;
            transition: all 0.5s ease;
            z-index: 99;
            height: 50vh;
            font-size: 1.6rem;
        }

        #navbar__logo {
            padding-left: 25px;
        }

        .navbar__toggle .bar {
            width: 25px;
            height: 3px;
            margin: 5px auto;
            transition: all 0.3s ease-in-out;
            background: #fff;
        }

        .navbar__item {
            width: 100%;
        }

        .navbar__links {
            text-align: center;
            padding: 2rem;
            width: 100%;
            display: table;
        }

        .navbar__btn {
            padding-bottom: 2rem;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            height: 80px;
            margin: 0;
        }

        #mobile-menu {
            position: absolute;
            top: 20%;
            right: 5%;
            transform: translate(5%, 20%);
        }

        .navbar__toggle .bar {
            display: block;
            cursor: pointer;
        }

        #mobile-menu.is-active .bar:nth-child(2) {
            opacity: 0;
        }

        #mobile-menu.is-active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        #mobile-menu.is-active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
        }

        /* Main Content CSS */
        .main {
        background-color: #141414;
        }

        .main__container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        justify-self: center;
        margin: 0 auto;
        height: 90vh;
        background-color: #131313;
        z-index: 1;
        width: 100%;
        max-width: 1300px;
        padding-right: 50px;
        padding-left: 50px;
        }

        .main__content {
        color: #fff;
        width: 100%;
        }

        .main__content h1 {
        font-size: 4rem;
        background-color: #ff8177;
        background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
        background-size: 100%;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
        }

        .main__content h2 {
        font-size: 4rem;
        margin-top: 10px;
        background-color: #ff8177;
        background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
        background-size: 100%;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
        }

        .main__content p {
        margin-top: 1rem;
        font-size: 2rem;
        font-weight: 700;
        }

        .main__btn {
        font-size: 1rem;
        background-image: linear-gradient(to top, #f77062 0%, #fe5196 100%);
        padding: 14px 32px;
        border: none;
        border-radius: 4px;
        color: #fff;
        margin-top: 2rem;
        cursor: pointer;
        position: relative;
        transition: all 0.35s;
        outline: none;
        }

        .main__btn a {
        position: relative;
        z-index: 2;
        color: #fff;
        text-decoration: none;
        }

        .main__btn:after {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: #4837ff;
        transition: all 0.35s;
        border-radius: 4px;
        }

        .main__btn:hover {
        color: #fff;
        }

        .main__btn:hover:after {
        width: 100%;
        }

        .main__img--container {
        text-align: center;
        }

        #main__img {
        height: 80%;
        width: 80%;
        }

        /* Mobile Responsive */
        @media screen and (max-width: 768px) {
        .main__container {
            display: grid;
            grid-template-columns: auto;
            align-items: center;
            justify-self: center;
            width: 100%;
            margin: 0 auto;
            height: 90vh;
        }

        .main__content {
            text-align: center;
            margin-bottom: 4rem;
        }

        .main__content h1 {
            font-size: 2.5rem;
            margin-top: 2rem;
        }

        .main__content h2 {
            font-size: 3rem;
        }

        .main__content p {
            margin-top: 1rem;
            font-size: 1.5rem;
        }
        }

        @media screen and (max-width: 480px) {
        .main__content h1 {
            font-size: 2rem;
            margin-top: 3rem;
        }

        .main__content h2 {
            font-size: 2rem;
        }

        .main__content p {
            margin-top: 2rem;
            font-size: 1.5rem;
        }

        .main__btn {
            padding: 12px 36px;
            margin: 2.5rem 0;
        }
        }

        /* Services Section */
        .services {
        background: #131313;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        .services h1 {
        background-color: #ff8177;
        background-image: linear-gradient(
            to right,
            #ff8177 0%,
            #ff867a 0%,
            #ff8c7f 21%,
            #f99185 52%,
            #cf556c 78%,
            #b12a5b 100%
        );
        background-size: 100%;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
        margin-bottom: 5rem;
        font-size: 2.5rem;
        }

        .services__container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        }

        .services__card {
        margin: 1rem;
        height: 525px;
        width: 400px;
        border-radius: 4px;
        background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0) 0%,
            rgba(17, 17, 17, 0.6) 100%
            ),
            url('/images/pic3.jpg');
        background-size: cover;
        position: relative;
        color: #fff;
        }

        .services__card:before {
        opacity: 0.2;
        }

        .services__card:nth-child(2) {
        background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0) 0%,
            rgba(17, 17, 17, 0.9) 100%
            ),
            url('/images/pic4.jpg');
        }

        .services__card h2 {
        position: absolute;
        top: 350px;
        left: 30px;
        }

        .services__card p {
        position: absolute;
        top: 400px;
        left: 30px;
        }

        .services__card button {
        color: #fff;
        padding: 10px 20px;
        border: none;
        outline: none;
        border-radius: 4px;
        background: #f77062;
        position: absolute;
        top: 440px;
        left: 30px;
        font-size: 1rem;
        }

        .services__card button:hover {
        cursor: pointer;
        }

        .services__card:hover {
        transform: scale(1.075);
        transition: 0.2s ease-in;
        cursor: pointer;
        }

        @media screen and (max-width: 960px) {
        .services {
            height: 1600px;
        }

        .services h1 {
            font-size: 2rem;
            margin-top: 12rem;
        }
        }

        @media screen and (max-width: 480px) {
        .services {
            height: 1400px;
        }

        .services h1 {
            font-size: 1.2rem;
        }

        .services__card {
            width: 300px;
        }
        }

        /* Footer CSS */
        .footer__container {
        background-color: #141414;
        padding: 5rem 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        }

        #footer__logo {
        color: #fff;
        display: flex;
        align-items: center;
        cursor: pointer;
        text-decoration: none;
        font-size: 2rem;
        }

        .footer__links {
        width: 100%;
        max-width: 1000px;
        display: flex;
        justify-content: center;
        }

        .footer__link--wrapper {
        display: flex;
        }

        .footer__link--items {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin: 16px;
        text-align: left;
        width: 160px;
        box-sizing: border-box;
        }

        .footer__link--items h2 {
        margin-bottom: 16px;
        }

        .footer__link--items > h2 {
        color: #fff;
        }

        .footer__link--items a {
        color: #fff;
        text-decoration: none;
        margin-bottom: 0.5rem;
        }

        .footer__link--items a:hover {
        color: #e9e9e9;
        transition: 0.3s ease-out;
        }

        /* Social Icons */
        .social__icon--link {
        color: #fff;
        font-size: 24px;
        }

        .social__media {
        max-width: 1000px;
        width: 100%;
        }

        .social__media--wrap {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 90%;
        max-width: 1000px;
        margin: 40px auto 0 auto;
        }

        .social__icons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 240px;
        }

        .social__logo {
        color: #fff;
        justify-self: start;
        margin-left: 20px;
        cursor: pointer;
        text-decoration: none;
        font-size: 2rem;
        display: flex;
        align-items: center;
        margin-bottom: 16px;
        }

        .website__rights {
        color: #fff;
        }

        @media screen and (max-width: 820px) {
        .footer__links {
            padding-top: 2rem;
        }

        #footer__logo {
            margin-bottom: 2rem;
        }

        .website__rights {
            margin-bottom: 2rem;
        }

        .footer__link--wrapper {
            flex-direction: column;
        }

        .social__media--wrap {
            flex-direction: column;
        }
        }

        @media screen and (max-width: 480px) {
        .footer__link--items {
            margin: 0;
            padding: 10px;
            width: 100%;
        }
    }
    </style>
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="/" id="navbar__logo"><i class="fas fa-gem"></i>DeMrc</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="{{ route('students.create')}}" class="navbar__links">Add Students</a>
          </li>
          <li class="navbar__item">
            <a href="{{ route('students.collection')}}" class="navbar__links">List Students</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="main">
      <div class="main__container">
        <div class="main__content">
          <h1>DeMrc GENERATION</h1>
          <h2>Application</h2>
          <p>see the management of your students differently.</p>
          <button class="main__btn"><a href="{{ route('students.create')}}">Get Started with adding student!</a></button>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <div class="services">
      <h1>let's see what service we offer you</h1>
      <div class="services__container">
        <div class="services__card">
          <h2>Adding Students</h2>
          <p>ergonomic interface for your student adding operation for your satisfaction</p>
          <button class="main__btn"><a href="{{ route('students.create')}}">Get Started</a></button>
        </div>
        <div class="services__card">
          <h2>List of students</h2>
          <p>Manage your collection of students</p>
          <button class="main__btn" ><a href="{{ route('students.create')}}">Get Started</a></button>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
     
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo"><i class="fas fa-gem"></i>DeMrc</a>
          </div>
          <p class="website__rights">© DeMrc 2032. All rights reserved</p>
          <div class="social__icons">
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Facebook"
            >
              <i class="fab fa-facebook"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Instagram"
            >
              <i class="fab fa-instagram"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Youtube"
            >
              <i class="fab fa-youtube"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Twitter"
            >
              <i class="fab fa-twitter"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="LinkedIn"
            >
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script>
        const menu = document.querySelector('#mobile-menu');
        const menuLinks = document.querySelector('.navbar__menu');

        menu.addEventListener('click', function() {
        menu.classList.toggle('is-active');
        menuLinks.classList.toggle('active');
        });
    </script>
  </body>
</html>
