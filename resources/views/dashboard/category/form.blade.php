@csrf 
@include('dashboard.partials.validation-error')
<div class="form-group row">
                            <label for="publication" class="col-md-4 col-form-label text-md-right">
                                {{ __('Publicacion') }}</label>

                            <div class="col-md-6">
                                <input id="publication" type="text" class="form-control @error('publication') is-invalid @enderror" name="publication" value="{{ old('publication') }}" required autocomplete="publication" autofocus>

                                @error('publication')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="from-control" name="state_publication" id="state publication">
                                <option value="">Pubicado</option>
                                <option value="">No Pubicado</option>
                                <option value="">En Revisión</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <textarea name="form-control" name="content_publication" id="content_publication" cols="30" rows="10" 
                              placeholder= "contenido de la publicación">
                              {{old('content_publication', $post -> content_publication)}}
                          </textarea>
                        </div>
                        <button tipe="submit"  class="btn btn_success">Aceptar</button>
                        <button class="btn btn_danger" href="{{ URL::previous() }}">Cancelar</button>