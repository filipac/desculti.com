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

        <div class="row hero-content" style="display: flex; align-items: center; min-height: 40vh;">

            <div class="column large-full hero-content__text" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                <h1>
                    Worship is an act <br/>
                    of war against the <br />
                    enemy of our hearts
                </h1>

                <div class="hero-content__buttons" style="display: flex; flex-direction: column; gap: 15px; align-items: center; margin-top: 4rem;">
                    <a href="https://www.facebook.com/desculti" target="_blank" class="btn btn--stroke" style="width: 300px; font-size: 1.2rem; padding: 15px 20px; display: flex; align-items: center; justify-content: center;">Facebook Page</a>
                    <a href="https://www.facebook.com/groups/107554519297925" target="_blank" class="btn btn--stroke" style="width: 300px; font-size: 1.2rem; padding: 15px 20px; display: flex; align-items: center; justify-content: center;">Facebook Group</a>
                    <a href="https://www.facebook.com/events/1308732084031208" target="_blank" class="btn btn--stroke" style="width: 300px; font-size: 1.2rem; padding: 15px 20px; display: flex; align-items: center; justify-content: center;">Facebook Event</a>
                    <a href="https://www.youtube.com/@descultimedia/featured" target="_blank" class="btn btn--stroke" style="width: 300px; font-size: 1.2rem; padding: 15px 20px; display: flex; align-items: center; justify-content: center;">Desculți YouTube</a>
                </div>
            </div> <!-- end hero-content__text -->

        </div> <!-- end hero-content -->

        <ul class="hero-social">
            <li class="hero-social__title">Follow Us</li>
            <li>
                <a href="https://www.facebook.com/groups/107554519297925" title="">Facebook Group</a>
            </li>
            <li>
                <a href="https://www.facebook.com/desculti" title="">Facebook Page</a>
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
