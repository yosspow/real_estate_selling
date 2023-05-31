<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<x-head/>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  <x-navbar/>

    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_3.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_2.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_1.jpg')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
                Le moyen le plus simple de trouver la maison de vos rêves
            </h1>
            <form
              action="#"
              class="narrow-w form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Your ZIP code or City. e.g. New York"
              />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
                les meilleur Batiments
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a
                href="{{ route('batiments') }}"
                target="_blank"
                class="btn btn-primary text-white py-3 px-4"
                >voir toutes les propriétés</a
              >
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                    <!-- .item -->
                    @foreach ($bests as $best)


                    <div class="property-item mb-30" style="min-width: 410px ">
                        <a href="{{ route('batiment-single',$best->id) }}" class="img">
                          <img src="{{ asset('storage').'/'.$best->path }}" alt="Image" class="img-fluid" style="max-height: 400px ; min-height: 400px ;min-width: 410px ;max-width: 410px ;"/>
                        </a>

                        <div class="property-content" style="min-width: 410px ">
                          <div class="price mb-2"><span>MAD {{ $best->prix }}</span></div>
                          <div>
                            <span class="d-block mb-2 text-black-50"
                              >{{Str::ucfirst( $best->ville) }}</span
                            >
                            <span class="city d-block mb-3 {{ $best->status == 'disponible' ? 'text-success' : 'text-danger' }} w-50 align-self-center">{{ Str::upper($best->status )  }}</span>

                            <div class="specs d-flex mb-4">
                              <span class="d-block d-flex align-items-center me-3">
                                <span class="icon-bed me-2"></span>
                                <span class="caption">2 beds</span>
                              </span>
                              <span class="d-block d-flex align-items-center">
                                <span class="icon-bath me-2"></span>
                                <span class="caption">2 baths</span>
                              </span>
                            </div>

                            <a
                              href="{{ route('batiment-single',$best->id) }}"
                              class="btn btn-primary py-2 px-3"
                              >See details</a
                            >
                          </div>
                        </div>
                      </div>
                @endforeach


              </div>

              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="features-1">
      <div class="container">

        <div class="row">

          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature" style="min-height: 350px">
              <span class="flaticon-house"></span>
              <h3 class="mb-3">Vente de biens immobiliers </h3>
              <p>
                Elle propose à la vente des appartements, des maisons et des villas, qu'ils soient neufs ou anciens.
              </p>

            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature" style="min-height: 350px">
                <span class="flaticon-house-4 mb-4 d-block"></span>
              <h3 class="mb-3">Service après-vente</h3>
              <p>
                Une fois l'achat réalisé, la société peut fournir un service après-vente en aidant les clients à résoudre d'éventuels problèmes ou en leur proposant des services de maintenance.
              </p>

            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="box-feature" style="min-height: 350px ; max-height:350px">
              <span class="flaticon-house-3"></span>
              <h3 class="mb-3">Conseils et accompagnement</h3>
              <p>

 Elle offre des conseils et un accompagnement personnalisé aux clients tout au long du processus d'achat ou de vente, en les aidant à trouver la propriété qui correspond à leurs besoins et en les guidant dans les démarches administratives.
              </p>

            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature" style="min-height: 350px">
                <span class="flaticon-house-2 mb-4 d-block-3"></span>
              <h3 class="mb-3">Aménagement et décoration intérieure</h3>
              <p>
                Certaines sociétés de promotion immobilière proposent également des services d'aménagement intérieur et de décoration pour personnaliser les logements selon les goûts des clients.

              </p>

            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Let's find home that's perfect for you
            </h2>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit.
            </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">2M Properties</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Top Rated Agents</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Legit Properties</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row section-counter mt-5">


          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">9316</span></span
              >
              <span class="caption text-black-50"># of All Properties</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">7191</span></span
              >
              <span class="caption text-black-50"># of Agents</span>
            </div>
          </div>
        </div>
      </div>
    </div>



    <x-footer/>
  </body>
</html>
