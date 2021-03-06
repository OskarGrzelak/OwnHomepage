<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Oskar Grzelak</title>
</head>
<body>
    <header class="header">
        <div class="header__text-box-out">
            <div class="header__text-box-in">
                <span class="heading-primary heading-primary--main">Hi!</span>
                <span class="heading-primary heading-primary--main">I'm Oskar</span>
                <span class="heading-primary heading-primary--sub">I will code your dreams</span>

                <ul class="header__btn-list">
                    <li class="header__btn-list-item"><a href="#" class="btn btn--big" id="contact-me-btn">Contact me</a></li>
                    <li class="header__btn-list-item"><a href="#" class="btn btn--small" id="about-me-btn">About me</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section class="section-about" id="about-me">
            <div class="row">
                <div class="col-2-of-3">
                    <div class="u-center-text u-margin-bottom-big">
                        <h2 class="heading-secondary">This is who I am</h2>
                    </div>
                    <p class="paragraph">
                        <span>I</span> was always chasing my dreams and fighting with my weaknesses. As a teenager, I imagined myself as a Shaolin warrior so I started kung-fu training. To overcome a fear of heights I am climbing and I really enjoy it. I studied econometrics because I love statistics. It has been always a dream for me to work in a book market so I become a marketing and PR specialist at SQN Publishing.
                    </p>
                </div>
                <div class="col-1-of-3">
                    <div class="u-img-shape u-img-shape--1 hidden hidden-right">
                        <img src="img/img-1.jpg" alt="Oskar Grzelak" class="about-img">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-3 display-over-900">
                    <div class="u-img-shape u-img-shape--2 hidden hidden-left">
                        <div class="u-img-shape__text-box--2">
                            <p class="shape-text shape-text--main">You should</p>
                            <p class="shape-text shape-text--main">absolutely check</p>
                            <p class="shape-text shape-text--main">my GitHub account</p>
                            <p class="shape-text shape-text--sub"><a href="https://github.com/OskarGrzelak" class="btn">github.com/OskarGrzelak</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-2-of-3">
                    <p class="paragraph">
                        <span>T</span>hen I followed my fiancée to Denmark. I was forced to left my job but I considered this as a chance to grasp another dream. I completed some online courses for web developers and javascript developers, I worked hard with my own projects and I decided to learn Danish. Now I feel I am ready to show everyone what I am capable of as a programmer and web developer.
                    </p>
                </div>
            </div>
            <div class="display-under-900">
                <div class="u-img-shape u-img-shape--2 hidden hidden-left">
                    <div class="u-img-shape__text-box--2">
                        <p class="shape-text shape-text--main">You should</p>
                        <p class="shape-text shape-text--main">absolutely check</p>
                        <p class="shape-text shape-text--main">my GitHub account</p>
                        <p class="shape-text shape-text--sub"><a href="https://github.com/OskarGrzelak" class="btn">github.com/OskarGrzelak</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2-of-3">
                    <p class="paragraph">
                        <span>I</span> hope you are the one who will challenge me soon with some hard projects. There is nothing better than a real struggle finished with huge success.
                    </p>
                </div>
                <div class="col-1-of-3">
                    <div class="u-img-shape u-img-shape--3 hidden hidden-right">
                        <div class="u-img-shape__text-box--3">
                            <p class="shape-text shape-text--main">And also</p>
                            <p class="shape-text shape-text--main">please look at</p>
                            <p class="shape-text shape-text--sub"><a href="#" class="btn" id="portfolio-btn">my latest projects</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-portfolio" id="portfolio">
            <div class="row">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">Check my latest projects</h2>
                </div>
                <div class="portfolio hidden hidden-fade">
                    <figure class="portfolio__project fade active">
                        <img src="img/todos_prtsc.jpg" alt="Project 1" class="portfolio__img">
                        <figcaption class="portfolio__caption">
                            <p>I present my another yet web application. This TodoList, which I called TODOS, helps keep track of tasks one has to do. A user can add new tasks and set for each of them a due date. Tasks can be marked as important and then they will be displayed on important tasks list. Also, tasks are displayed on different lists according to the set due date. When the task is completed the user can mark it as checked and it will be transferred to the archived list.</p>
                            <a href="http://oskargrzelak.pl/todos/" class="btn btn--portfolio">Check this out!</a>
                        </figcaption>
                    </figure>
                    <figure class="portfolio__project fade unactive">
                        <img src="img/memorygame_prtsc.jpg" alt="Project 2" class="portfolio__img">
                        <figcaption class="portfolio__caption">
                            <p>Basically, this is my own variation on one of the most popular memory games. A user defines how many tiles app has to render on the screen and he chooses a game mode - it can be either matching pairs of colors or images. Colors are randomly generated and the images are randomly fetching from the unsplash.com. This simple game is my non-commercial project created in order to train some javascript techniques as I have just started my web developing journey.</p>
                            <a href="http://oskargrzelak.pl/memorygame/" class="btn btn--portfolio">Check this out!</a>
                        </figcaption>
                    </figure>
                    <figure class="portfolio__project fade unactive">
                        <img src="img/hangman_prtsc.jpg" alt="Project 3" class="portfolio__img">
                        <figcaption class="portfolio__caption">
                            <p>This is a simple game of guessing words. A user defines a length of a hidden word and a number of rounds. His task is to guess a hidden word before all the rounds are finished. One round lasts until a user makes a mistake so a number of rounds define how many mistakes the user can make. A mistake is either guessing a letter which is not contained in the hidden word or guessing a wrong hidden word.</p>
                            <a href="http://oskargrzelak.pl/hangman/" class="btn btn--portfolio">Check this out!</a>
                        </figcaption>
                    </figure>
                    <a class="portfolio__arrow portfolio__arrow--left" id="prev"></a>
                    <a class="portfolio__arrow portfolio__arrow--right" id="next"></a>
                </div>
            </div>
        </section>

        <section class="section-contact" id="contact-me">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">I can't wait to hear from you</h2>
            </div>
            <div class="contact">
                <div class="contact__text-box-out">
                    <div class="contact__text-box-in">
                        <div class="contact__text">
                            <span class="heading-tertiary heading-tertiary--main">You can</span>
                            <span class="heading-tertiary heading-tertiary--main">also email me at</span>
                            <span class="heading-tertiary heading-tertiary--sub"><a href="mailto:oskar.grzelak@gmail.com" class="btn">oskar.grzelak@gmail.com</a></span>
                        </div>
                    </div>  
                </div>
                <div class="contact__form">
                    <form action="mailer.php" method="POST" class="form">
                        
                        <div class="form__group">
                            <input name="name" type="text" class="form__input" placeholder="Full name" id="name" required>
                        </div>
                        <div class="form__group">
                            <input name="email" type="email" class="form__input" placeholder="Email address" id="email" required>
                        </div>
                        <div class="form__group">
                            <input name="subject" type="text" class="form__input" placeholder="Subject" id="subject">
                        </div>
                        <div class="form__group">
                            <textarea name="message" class="form__input" placeholder="Your message" required></textarea>
                        </div>
                        <div class="form__group">
                            <input type="submit" name="submit" class="btn btn--form" value="Send it">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="row">
            <div class="col-2-of-3">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Home</a></li>
                        <li class="footer__item"><a href="#about-me" class="footer__link">About me</a></li>
                        <li class="footer__item"><a href="#portfolio" class="footer__link">My projects</a></li>
                        <li class="footer__item"><a href="#contact-me" class="footer__link">Contact me</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-3">
                <p class="footer__copyright">
                    &copy; 2018 by Oskar Grzelak
                </p>
            </div>
        </div>
    </footer>
    
    <script src="js/script.js"></script>
</body>
</html>