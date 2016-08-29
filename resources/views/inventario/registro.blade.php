@extends('layout.master')


@section('content')
<div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Proveedores</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="/producto" class="btn btn-primary">Registrar Producto</a></li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>


                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form id="Form">
{{csrf_field()}}
<div id="wizard_verticle" class="form_wizard wizard_verticle">
                      <ul class="list-unstyled wizard_steps">
                        <li>
                          <a href="#step-11">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-22">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                        
                      </ul>

                      <div id="step-11" class="form-horizontal form-label-left">
                        <h2 class="StepTitle">Paso 1</h2>
                        

                          <span class="section">Registrar Compra</span>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Proveedor <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <select class="form-control col-md-7 col-xs-12" name="pro_id">
                              	<option value="">Seleccione</option>
                              	@foreach($proveedor as $p)
                              	<option value="{{$p->id}}">{{$p->nombre}}</option>
                              	@endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Fecha de Compra <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="date" id="last-name2" name="fecha" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3">Convenio</label>
                            <div class="col-md-6 col-sm-6">
                              <select name="convenio" id="convenio" class="form-control col-md-7 col-xs-12">
                              	<option value="">Seleccione</option>
                              	<option value="1">Si</option>
                              	<option value="2">No</option>
                              </select>
                            </div>
                          </div>
                         
                          <div id="con"></div>
                        
                      </div>
                      <div id="step-22" class="form-horizontal form-label-left">
                        <h2 class="StepTitle">Paso 2 </h2>
                        <span class="section">Registrar Inventario</span>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Cantidad de Productos <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="number" id="cantidad" required="required" class="form-control col-md-7 col-xs-12" name="cant">
                            </div>
                        </div>
                          
                         
                        <div id="par"></div>

                          
                      </div>
                      
                      
                    </div>

                    </form>
                   </div>
                    </div>
                   </div>
                    </div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
    $('#convenio').change(function(event) {
      $('#con').empty();
      if ($('#convenio').val()==1) {
      $('#con').append('<div class="form-group"><label class="control-label col-md-3 col-sm-3">Convenio<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="birthday2" name="conv" class=" form-control col-md-7 col-xs-12" required="required" type="text"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3">Deuda<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="birthday2" name="deuda" class=" form-control col-md-7 col-xs-12" required="required" type="text"></div></div>')
       }
    });
     
		$('#cantidad').change(function(event) {
			$('#par').empty();
			for (var i = 0; i < event.target.valueAsNumber; i++) {
				$('#par').append('<div><p>producto '+(i+1)+'</p><div class="form-group"><label class="control-label col-md-3 col-sm-3" for="first-name">Producto <span class="required">*</span></label><div class="col-md-6 col-sm-6"><select id="first-name2" required="required" class="form-control col-md-7 col-xs-12 select" name="producto[]"><option value="">Seleccione</option></select></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3" for="last-name">Precio Unitario<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input type="text" id="last-name2" name="precio_unitario[]" required="required" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label for="middle-name" class="control-label col-md-3 col-sm-3">Precio Venta</label><div class="col-md-6 col-sm-6"><input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="Precio_venta[]"></div></div><div class="form-group"><label for="middle-name" class="control-label col-md-3 col-sm-3">Cantidad</label><div class="col-md-6 col-sm-6"><input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="cantidad[]"></div></div></div>');
			}

      $.get('/producto/pr', function(data) {

        for (var i = 0; i < data.length; i++) {
          console.log(data[i].id);
          $('.select').append('<option value='+data[i].id+'>'+data[i].nombre+'</option>');
        }
        //
      });
			
		});

        $('#wizard').smartWizard({
        	
        });
function onFinishCallback(){
           $.ajax({
             type:'POST',
             url: '/inventario/add',
             data: $('#Form').serialize(),
             cache: false,
             success: function(){
                  
                  new PNotify({
                                  title: 'Registro Exitoso',
                                  text: 'Producto Registrado con Éxito',
                                  type: 'success',
                                  hide: true,
                                  delay:8000,
                                  styling: 'bootstrap3'
                              });          
              document.getElementById('Form').reset();  
              $('#par').empty();             
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

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'fade',
          onFinish: onFinishCallback,
          labelFinish:'Enviar'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
</script>
@endsection