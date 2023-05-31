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

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Batiment</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                Batiment
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>



    <div class="section section-properties">
      <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
              <h2 class="font-weight-bold text-primary heading">
                 Batiment
              </h2>
            </div>
          </div>
        <div class="row">
            @foreach ( $data as $batiment )


          <div class=" H col-xs-12 col-sm-12 col-md-12 col-lg-4">
            <div class="property-item mb-30 mt-5 justify-content-around">
              <a href="{{ route('batiment-single',$batiment->id) }}" class="img">
                <img src="{{ asset('storage').'/'.$batiment->path }}" alt="Image" class="img-fluid" style="max-height: 400px ; min-height: 400px ;min-width: 410px ;max-width: 410px ;"/>
              </a>

              <div class="property-content"style="min-width: 410px ">
                <div class="price mb-2"><span>MAD {{ $batiment->prix }}</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >{{Str::ucfirst( $batiment->ville) }}</span
                  >
                  <span class="city d-block mb-3 {{ $batiment->status == 'disponible' ? 'text-success' : 'text-danger' }} w-50 align-self-center">{{ Str::upper($batiment->status )  }}</span>

                  <div class="specs d-flex mb-4">
                    <p class="heading  mt-3">  <span class="text-dark">{{ $batiment->metrage }}    </span>m³</p>
                  </div>

                  <a
                    href="{{ route('batiment-single',$batiment->id) }}"
                    class="btn btn-primary py-2 px-3"
                    >See details</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          @endforeach
        </div>

      </div>
      <div class="d-flex justify-content-center">
        {!! $data->links() !!}
    </div>
    </div>

    <x-footer/>
  </body>
</html>
