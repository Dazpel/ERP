@extends('layout.master')


@section('content')

 <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Empleados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Complete los pasos llenando los camos correspondientes</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Paso 1<br />
                                              <small>Datos Personales</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Paso 2<br />
                                              <small>Datos para inicio de sesión (si aplica)</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              paso 3<br />
                                              <small>Datos de Empleo</small>
                                          </span>
                          </a>
                        </li>
                        
                      </ul>
                      <form id="Form">
                     {{ csrf_field() }}
                      <div id="step-1">
                        <div class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" name="nombre" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" name="apellido" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cedula <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" name="cedula" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          
                         </div>

                        

                      </div>
                      <div id="step-2">
                      <div class="form-horizontal form-label-left">

                          <div class="form-group">                              
                            <label class="control-label center-block switch">
                              <input type="checkbox" id="chack" >
                              <div class="slider round"></div>
                            </label>

                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Correo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" name="email" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group hidden" id="pass">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Contraseña <span class=""></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="last-name" name="password"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                         </div>
                      </div>
                      <div id="step-3">
                       <div class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sueldo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" name="sueldo_actual" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fecha de Ingreso <span class=""></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="date" id="last-name" name="fecha_ingreso"  class="form-control col-md-7 col-xs-12">
                            </div>
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
        </div>
@endsection

@section('scripts')
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard({
        transitionEffect: 'fade', 
          onFinish: onFinishCallback,
          labelFinish:'Enviar'
        }
          );

       function onFinishCallback(){
           $.ajax({
             type:'POST',
             url: '/user/add',
             data: $('#Form').serialize(),
             cache: false,
             success: function(){
                  
                  new PNotify({
                                  title: 'Registro Exitoso',
                                  text: 'Usuario Registrado con Éxito',
                                  type: 'success',
                                  hide: true,
                                  delay:8000,
                                  styling: 'bootstrap3'
                              });          
              document.getElementById('Form').reset();               
             },
             error: function(result){
              new PNotify({
                                  title: 'Error',
                                  text: 'Ha ocurrido un error en el registro revise los datos',
                                  type: 'error',
                                  hide: true,
                                  delay:8000,
                                  styling: 'bootstrap3'
                              });  
             }

           });
          }

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
       $('.buttonFinish').addClass('btn btn-default');

        var state= $("#chack").attr("checked") ? 1 : 0;
         
        $("#chack").change(function(event) {
          if (state==0) {
            state=1
            $("#pass").removeClass('hidden');
          }else{
             
            state=0
             $("#pass").addClass('hidden');
          }
          
        });

        
      });

    </script>
@endsection