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



    <div
      class="hero page-inner overlay"
      style="background-image: url('{{ asset('storage'.'/'.$batiment['images'][0]['path'])  }}')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">

                {{ Str::upper($batiment['ville'])  }}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="{{ route('batiments') }}">Appartements</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                @foreach ($batiment['lieu']  as $lieu )
                {{Str::lower($lieu) }},
                @endforeach

                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        @auth


        <div class="row">
            <div class="col-lg-7 col-sm-12">


        <a href="{{ route('batiment.list') }}" role="button" class="btn btn-dark mb-3 "><i class="bi bi-person-check-fill  mr-4"></i> <span class="ml-3"> Dashboard </span>  </a>
        </div>
    </div>
        @endauth
        <div class="row justify-content-between">

          <div class="col-lg-6">





                <div class="card mb-3 bg-image ">

                    <img  src="{{ asset('storage'.'/'.$batiment['images'][0]['path'])  }}"alt="Card image cap" id="product-detail" class="w-100">
                </div>

                <div class="row">
                    <!--Start Controls-->

                    <!--End Controls-->
                    <!--Start Carousel Wrapper-->
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <!--Start Slides-->
                        <div class="carousel-inner product-links-wap" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">
                                <div class="row">

                                    @foreach ($batiment['images'] as $image )
                                                  <div class="col-3">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="{{ asset('storage'.'/'.$image['path'])  }}"  >
                                        </a>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!--/.First slide-->


                        </div>
                        <!--End Slides-->
                    </div>
                    <!--End Carousel Wrapper-->
                    <!--Start Controls-->

                    <!--End Controls-->
                </div>



          </div>
          <div class="col-lg-5">





            <h3 class="city d-block mt-5 mb-5 {{ $batiment['status'] == 'disponible' ? 'text-success' : 'text-danger' }} w-50 align-self-center ">{{ Str::ucfirst($batiment['status'] )  }}</h3>



            <h4 class="heading text-primary mb-3 ">  {{ $batiment['prix'] }}  MAD  </h4>

            <h5 class="heading text-success mt-3">  {{ $batiment['metrage'] }}  m³  </h5>

            <p class="meta">
                  @foreach ($batiment['lieu']  as $lieu )
                {{ $lieu}},
                @endforeach
            </p>
            <div class="mt-5">

            <strong class="text-dark">
                Description :
               </strong>
   <p class=" text-dark">

    {{ $batiment['description'] }}
   </p>
</div>

          </div>
        </div>
      </div>
    </div>
    <x-footer/>
    <script>
          $('.product-links-wap a').click(function(){
      var this_src = $(this).children('img').attr('src');
      $('#product-detail').attr('src',this_src);
      return false;
    });
    </script>

  </body>
</html>
