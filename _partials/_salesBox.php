<!-- box 1 -->
<div class="box1">

    <!-- Home sale box -->
    <div class="home-sale-box">
        Sale
    </div>


    <!-- fav heart -->
    <!-- <div class="fav-heart"><a href="#"><img src="/assets/img/icons/heart.png" alt=""></a></div> -->

    <?php if ($_SESSION['isLoggedIn'] == true) { ?>
        <input type="checkbox" class="checkbox" id="<?php echo $image['id'] ?>" />
        <label for="<?php echo $image['id'] ?>">
            <a href="/Listings/toggleFavorite.php?id=<?= $index ?>"><svg class="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                    <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                        <path class="heart <?php echo ($image['favourite'] == true) ? 'favorite' : ''; ?>" d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" fill="white" />
                        <circle id="main-circ" fill="white" opacity="0" cx="29.5" cy="29.5" r="1.5" />

                </svg>
            </a>

        </label>

        <div class="contact-icon">
            <a class="button contact-icon" href="#popup1"><img src="/assets/img/icons/msg.png" alt=""></a>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Contact the owner</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">

                    <form class="cssform">
                        <div class="cssform1">
                            <label for="name">First name</label>
                            <input type="name" name="name" id="name">
                        </div>

                        <div class="cssform1">
                            <label for="name">Last name</label>
                            <input type="name" name="name" id="name">
                        </div>

                        <div class="cssform1">
                            <label for="email">Adresse Email</label>
                            <input type="email" name="email" id="email">
                        </div>

                        <div class="cssform1">
                            <label for="email">Message</label>
                            <textarea name="message" id="message" cols="70" rows="5"></textarea>
                        </div>

                        <div class="cssform-checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="checkbox">Cochez cette case</label>
                        </div>

                    </form>
                    <button class="button">Envoyer</button>


                </div>
            </div>
        </div>
    <?php } ?>

    <!-- contact icon -->
    <!-- <div class="contact-icon"><a href="#"><img src="/assets/img/icons/msg.png" alt=""></a></div> -->




    <!-- Carousel box 1-->
    <a class="link" href="">
        <div id="<?php echo $image['id-carr']; ?>" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="<?php echo $image['id-carr']; ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#<?php echo $image['id-carr']; ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#<?php echo $image['id-carr']; ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carouselImg" src="
                <?php echo $image[0]; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carouselImg" src="<?php echo $image[1]; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carouselImg" src="<?php echo $image[2]; ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $image['id-carr']; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $image['id-carr']; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </a>

    <!-- carousel div / home informations-->

    <div class="carousel-div">
        <div class="carousel-div-price">
            <div class="price"><?php echo $image['price'] ?></div>
            <div class="price-per-sqft"><?php echo $image['price/sqft'] ?></div>
        </div>
        <div class="carousel-div-features">
            <div><span><?php echo $image['bedrooms'] ?></span><img src="/assets/img/icons/bedroom.png" alt="bedroom"></div>
            <div><span><?php echo $image['bathrooms'] ?></span><img src="/assets/img/icons/bath.png" alt="bathroom"></div>
            <div><span><?php echo $image['sqft'] ?></span><img src="/assets/img/icons/sqft.svg" alt="area"></div>

        </div>
    </div>
</div>





</div>