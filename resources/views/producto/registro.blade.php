@extends('layout.master')


@section('content')

 <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Producto</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><button type="button" name="button" class="btn btn-success">Nuevo Tipo de Producto</button></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Complete los pasos llenando los campos correspondientes</p>


                      <form action="/producto/add" method="post">
                        {{csrf_field()}}
                        <div class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipo Producto <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select type="text" id="first-name" required="required" name="tipo_producto" class="form-control col-md-7 col-xs-12">
                                <option value="">Seleccione</option>

                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Producto <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" name="producto" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripción <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" name="descripcion" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">

                            <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
                              <input type="submit" id="last-name" value="Enviar" required="required" class="form-control btn btn-success col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <input type="reset" id="last-name" value="Cancelar" required="required" class="form-control btn btn-danger col-md-3 col-xs-12">
                            </div>
                          </div>
                        </div>

                     </form>

                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
@endsection
