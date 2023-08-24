<!-- hero
    ================================================== -->
    @php
        $random = rand(1, 6);
    @endphp
    <section
    class="s-hero"
    data-parallax="scroll"
    data-image-src="{{url()->to('/images/hero/'.$random.'.jpg')}}"
    data-natural-width=3000 data-natural-height=2000
    data-position-y=center>

        <div class="hero-left-bar"></div>

        <div class="row hero-content">

            <div class="column large-full hero-content__text">
                <h1>
                    Worship is an act <br/>
                    of war against the <br />
                    enemy of our hearts
                </h1>

                <div class="hero-content__buttons">
                    <a href="https://www.facebook.com/events/856455279435959" target="_blank" class="btn btn--stroke">Facebook Event</a>
                    <a href="#" id="aboutTheEvent" class="btn btn--stroke">About the event</a>
                </div>
            </div> <!-- end hero-content__text -->

        </div> <!-- end hero-content -->

        <ul class="hero-social">
            <li class="hero-social__title">Follow Us</li>
            <li>
                <a href="https://www.facebook.com/groups/107554519297925" title="">Facebook</a>
            </li>
            <li>
                <a href="https://www.youtube.com/@descultimedia/featured" title="">YouTube</a>
            </li>
        </ul> <!-- end hero-social -->

        <div class="hero-scroll">
            <a href="#about" class="scroll-link smoothscroll">
                Scroll For More
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->
