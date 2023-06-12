@include('admin.layouts.navbar')

<div class="container-fluid">
    <h2 class="title m-4 h-auto w-100 "> Appartements</h2> <br>


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Batiment
                    </th>
                    <th>
                      price (MAD)
                    </th>
                    <th>
                        métrage (m³)
                    </th>
                    <th>
                      status
                    </th>

                    <th>
                     Modifier
                    </th>
                    <th>
                        Supprimer
                       </th>
                       <th>
                        meilleur
                     </th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $batiments as $batiment )

                  <tr>
                    <td class="py-1">
                        <a href="{{ route('batiment-single',$batiment->id) }}">


                      <img src="{{ asset('storage').'/'.$batiment->path }}" alt="image"/>
                    </td>
                </a>
                    <td>
                      {{ $batiment->prix }}
                      MAD
                    </td>
                    <td>
                  {{ $batiment->metrage }} m³
                    </td>
                    <td class="{{ $batiment->status == 'disponible' ? 'text-success' : 'text-danger'}}">
                        <strong>


                     {{ $batiment->status }}    </strong>
                    </td>
                    <td>
                <a href="{{ route('batiment.edit',$batiment->id) }}" role="button" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                </a>
                    </td>
                    <td>
                        <a href="{{ route('batiment.destroy',$batiment->id) }}" role="button" class="btn btn-dark ">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                              </svg>

                        </a>
                   </td>
                   <td>
                    <a href="{{ route('batiment.save',$batiment->id) }}" role="button" >

                       @if ($batiment->best == 0 )
                       <i class="bi bi-bookmark-plus" style="font-size: 30px ;color:black"></i>
                       @else
                       <i class="bi bi-bookmark-plus-fill" style="font-size: 30px"></i>

                       @endif

                    </a>
               </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>

            </div>
            <div class="mt-3">



            {!! $batiments->links() !!}
            </div>
          </div>
        </div>
      </div>

    </div>
      @include('admin.layouts.footer')


