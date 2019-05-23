<!DOCTYPE html>
<html lang="de">
  <!-- color scheme: https://coolors.co/080f17-0a141f-fdfffc-70a9a1-40798c -->
  <!-- color scheme: https://coolors.co/080f17-0a141f-fdfffc-84dccf-d62828 -->

  <head>
    <title>Erik Bent</title>
    <meta name="description" content="Erik Bent" />
    <meta
      name="keywords"
      content="erik bent, design, marketing"
    />
    <meta name="author" content="Simon Herrmann" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="/favicons/site.webmanifest" />
    <link
      rel="mask-icon"
      href="/favicons/safari-pinned-tab.svg"
      color="#195757"
    />
    <link rel="shortcut icon" href="/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#195757" />
    <meta name="msapplication-config" content="/favicons/browserconfig.xml" />
    <meta name="theme-color" content="#195757" />
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
    <script type="text/javascript" src="scripts/slide.js" async></script>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="frame sticky" id="navbar">
      <a class="linkTo button" href="#aboutMe" onfocus="this.blur()">ABOUT ME</a>
      <a class="linkTo button" href="#skidCat" onfocus="this.blur()">PROJECTS</a>
      <a class="linkTo button" href="#contact" onfocus="this.blur()">CONTACT</a>
      <a class="start button" href="#start" onfocus="this.blur()">START</a>
      <div class="responsiveMenu">
        <button class="dropMenu button" onclick="dropMenu()" onfocus="this.blur()">☰</button>
        <div id="droppedMenuContent" class="menuContent">
          <a class="droppedLink button" href="#start" onfocus="this.blur()">START</a>
          <a class="droppedLink button" href="#aboutMe" onfocus="this.blur()">ABOUT ME</a>
          <a class="droppedLink button" href="#skidCat" onfocus="this.blur()">PROJECTS</a>
          <a class="droppedLink button" href="#contact" onfocus="this.blur()">CONTACT</a>
        </div>
      </div>
      <div class="frameLine"><div class="lineBlack"></div></div>
    </div>

    <div class="header" id="start">
      <div class="headerPicture"></div>
      <div class="headerTextFrame">
        <h1 class="headerText">CREATIVE &nbsp; | &nbsp; DESIGN &nbsp; | &nbsp; MARKETING</h1>
        <h1 class="headerTextSlim">CREATIVE</br>DESIGN</br>MARKETING</h1>
        <div class="headerButton">
          <a class="scrollToAboutMe button" href="#aboutMe" onfocus="this.blur()">ABOUT ME</a>
        </div>
      </div>
    </div>

    <div class="content wrap withBackgroundColor" id="aboutMe">
      <div class="contentPicture" id="aboutMePicture"></div>
      <div class="contentText" id="aboutMeText">
        <h2>ABOUT ME</h2>
        <p>I first started creating websites with HTML, CSS and Javascript when I was 13. Oh, and small desktop
          applications with Visual Basic 6. I love solving tricky problems which require detailed thinking
          to find a solution. At the moment I'm mostly focused on the backend – where I find just the right
          challenges for my taste.</p>
        <p>My goal is to create a secure and reliable platform for our users. I like fixing errors, thinking about
          how to avoid those and making our platform more resilient. This is why I want our code to be
          of high quality, easy to read, maintain and extend.</p>
        <p>Since I'm a creative person hardly a day goes by without me picking up my guitar,
          truly enjoying the quietness and music. Spending time with friends helps me to clear my head,
          find a healthy balance and regain my focus for the next challenging task.</p>
      </div>
    </div>

    <div class="content wrapReverse" id="skidCat">
      <div class="contentText" id="skidCatText">
        <h2>SKIDCAT</h2>
        <p>SkidCat is a simple game for in between. The goal of the game is to steer a cat, which has been
          kicked away by an aggressive boy, through obstacles and to get as far as possible without hitting them.</p>
        <p>The biggest motivation to play the game for a long time is probably the ambition
          to achieve an even higher result everytime. Another motivation are the built-in levels that make you
          want to know what the next level is.</p>
        <p>The free version of the game generates revenue through advertising.
          In addition, there is the game without advertising for little money to buy.</p>
        <p> I designed SkidCat completely myself, which includes:</p>
        <li>Programming</li>
        <li>3D Design and Animations</li>
        <li>Music</li>
        <p>As an engine, I have used the Godot engine, and to design the individual objects
          in the animations and level images I have used Blender.</p>
      </div>
      <div class="contentPicture" id="skidCatPicture"></div>
    </div>

    <div class="content wrap withBackgroundColor" id="bear">
      <div class="contentPicture" id="bearPicture"></div>
      <div class="contentText" id="bearText">
        <h2>BEAR</h2>
        <p>This game is not finished yet. The landscape and the game character in low poly optics
          are ready so that a large part of the 3D objects is already created. Also, the animations and control
          of the character are finished. There is still missing the game logic and the programming of the server.</p>
        <p>The goal of this app is to be a small "first-person shooter" in which you control a bear,
          pick up tomatoes and have to hit your opponent with it. The time of one round is limited and
          you can choose before each round an advantage that you want to use in the following round.</p>
        <p>Also for this game, I use the Godot engine and Blender for creating the 3D objects.</p>
      </div>
    </div>

    <div class="content wrap">
      <form id="contact" method="post" action="scripts/contact.php">
        <div class="frameRowMulti">
          <div class="nameFrame">
            <label for="name">NAME</label>
            <input
              type="text"
              id="name"
              placeholder="Your name"
              required=""
              oninvalid="this.setCustomValidity('Gib deinen Namen ein')"
              onchange="this.setCustomValidity('')"
              value=""
            />
          </div>
          <div class="emailFrame">
            <label for="email">EMAIL</label>
            <input
              type="text"
              id="email"
              placeholder="Your email address"
              required=""
              oninvalid="this.setCustomValidity('Gib deine Email-Adresse ein')"
              onchange="this.setCustomValidity('')"
              value=""
            />
          </div>
          <div class="subjectFrame">
            <label for="subject">SUBJECT</label>
            <input
              type="text"
              id="subject"
              placeholder="Subject"
              required=""
              oninvalid="this.setCustomValidity('Gib deinen Betreff ein')"
              onchange="this.setCustomValidity('')"
              value=""
            />
          </div>
        </div>
        <div class="messageFrame">
          <label for="message">MESSAGE</label>
          <textarea
            rows="10"
            cols="30"
            id="message"
            placeholder="Your message"
            required=""
            oninvalid="this.setCustomValidity('Gib deine Nachricht ein')"
            onchange="this.setCustomValidity('')"
          ></textarea>
        </div>
        <div class="frame">
          <div
            class="g-recaptcha"
            data-theme="dark"
            data-sitekey="6LcKjHoUAAAAAEJ4Rpq3dAIeghxt14kewGdvac3C"
          ></div>
        </div>
        <div class="frame">
          <button
            class="submit button"
            type="submit"
            name="send"
            onfocus="this.blur()"
          >
            Absenden
          </button>
        </div>
      </form>
    </div>

    <div class="lineBlack"></div>

    <div class="footer">
      <div class="footerPartFrame">
        <img src="graphics/location.svg" alt="Adresse" class="footerPicture" />
        <div class="footerText">
          <p>
            Simon Herrmann<br />
            Obere Hardt 19<br />
            76467 Bietigheim<br />
            Homepage: www.erikbent.de
          </p>
        </div>
      </div>
      <div class="footerPartFrame">
        <img src="graphics/email.svg" alt="Email" class="footerPicture" />
        <div class="footerText"><p>Mail: erikbent@contact.de</p></div>
      </div>
      <div class="footerPartFrame">
        <img src="graphics/phone.svg" alt="Telefon" class="footerPicture" />
        <div class="footerText">
          <p>
            Fon
          </p>
        </div>
      </div>
    </div>

    <div class="footerCopyright">
      <p>
        © Simon Herrmann<br />
        <a href="imprint.html" style="color: white">Impressum</a>
        <a href="dataProtection.html" style="color: white">Datenschutz</a><br />
        Made with ♥ by
        <a
          href="https://github.com/siherrmann"
          style="color: white"
          target="_blank"
          rel="noopener"
          >siherrmann</a
        ><br />
      </p>
    </div>

    <?php
      $value = 'true';
      setcookie("cookiesAccepted", $value, time()+3600);
      if (!isset($_COOKIE['cookiesAccepted'])) {
    ?>

    <div id="cookie-popup">
      <span class="hinweis">We use cookies. By continuing to use the website, you agree to the use of cookies.<br/>
      </span>
      <span class="more-info"><a href="/dataProtection.html" style="color: white">Further information</a><br/><br/></span>
      <a class="cookieButton" onclick="cookieOk()">OK, I agree.</a>
    </div>

    <?php
      };
    ?>

    <script type="text/javascript" src="scripts/scripts.js" async></script>
    <script src="https://www.google.com/recaptcha/api.js" defer></script>
  </body>
</html>