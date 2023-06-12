@include('admin.layouts.navbar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold ">Welcome <span class=" text-success"> {{ $user['name'] }} </span></h3>

                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="/images/dashboard/people.svg" alt="people">

                </div>
              </div>
            </div>

          </div>



      @include('admin.layouts.footer')
