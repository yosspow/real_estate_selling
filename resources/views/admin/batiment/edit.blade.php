@include('admin.layouts.navbar')

<div class="container">

<div class="row">

                        <h2 class="title m-4 h-auto w-100 ">Edit Appartements (<a class="h3" href="{{ route('batiment-single',$batiment['id'])  }}"><i class="bi bi-eye"></i></a>)  </h2>

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">

                                <form class="forms-sample" action="{{ route('batiment.update',$batiment['id'])  }} " method="POST" enctype="multipart/form-data">
                                    @csrf
                                  <div class="form-group">
                                    <label for="exampleInputName1">Prix (MAD)</label>
                                    <input type="text" class="form-control" name="prix" value="{{ $batiment['prix'] }}" placeholder="Le Prix.....">
                                    @error('prix')
                                    <div class=" text-danger m-2 ">Le champ Prix est obligatoire</div>

                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label>metrage (m³)</label>
                                    <input type="number" class="form-control" value="{{ $batiment['metrage'] }}" name="metrage" placeholder="Le Metrage......">
                                    @error('metrage')
                                    <div class=" text-danger m-2 ">Le champ Metrage est obligatoire</div>

                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="select">status</label>
                                   <select class="form-control" name="status" >
                                    <option value="disponible" {{$batiment['status'] == 'disponible' ? 'selected' : '' }} >Disponible</option>
                                    <option value="vendu" {{$batiment['status'] == 'vendu' ? 'selected' : '' }} >Vendu</option>



                                   </select>

                                  </div>

                                  <div class="form-group">
                                    <label >ville</label>
                                    <input type="text" class="form-control" value="{{ $batiment['ville'] }}" name="ville"  placeholder="ville.....">
                                    @error('ville')
                                    <div class=" text-danger m-2 ">Le champ ville est obligatoire</div>

                                    @enderror
                                  </div>

                                  <div class="form-group">
                                    <label >lieu</label>
                                    <input type="text" class="form-control" value="{{ $batiment['lieu'] }}" name="lieu"  placeholder="LIEU.....">
                                    @error('lieu')
                                    <div class=" text-danger m-2 ">Le champ lieu est obligatoire</div>

                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleTextarea1">description</label>
                                    <textarea class="form-control" name="description"  rows="4"> {{  $batiment['description'] }}</textarea>
                                    @error('description')
                                    <div class=" text-danger m-2 ">Le champ Description est obligatoire</div>

                                    @enderror
                                  </div>
                                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <a role="button" href="{{ route('batiment.list') }}" class="btn btn-light">Cancel</a>
                                </form>
                              </div>
                            </div>
                          </div>

                </div>
                </div>

 @include('admin.layouts.footer')
