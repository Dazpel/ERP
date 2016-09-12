@extends('layout.master')


@section('content')
<div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Ventas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                   
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
                        <li>
                          <a href="#step-23">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-24">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                        
                      </ul>

                      <div id="step-11" class="form-horizontal form-label-left">
                        <h2 class="StepTitle">Paso 1</h2>
                        

                          <span class="section">Registrar Productos Vendidos</span>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Fecha <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="date" class="form-control col-md-7 col-xs-12" name="fecha">
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Cantidad de Items <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="number" id="items" name="items" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                         
                          <div id="con"></div>
                        
                      </div>
                      
                      <div id="step-22" class="form-horizontal form-label-left">
                        <h2 class="StepTitle">Paso 2</h2>
                        

                          <span class="section">Registrar Ingresos</span>

                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Monto Reporte Z<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="last-name2" name="reportez" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Monto Efectivo<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="last-name2" name="efectivo" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Monto Punto de Venta<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="last-name2" name="punto" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        
                      </div>
                      
                      <div id="step-23" class="form-horizontal form-label-left">
                        <h2 class="StepTitle">Paso 3</h2>
                        

                          <span class="section">Registrar Egresos</span>

                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Cantidad de Egresos<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="number" id="legresos" name="cant_egresos" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div id="egre"></div>
                        
                      </div>
                      <div id="step-24" class="form-horizontal form-label-left">
                        <h2 class="StepTitle">Paso 4</h2>
                        

                          <span class="section">Registrar Depósito</span>

                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Nro de Depósito <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="last-name2" name="deposito" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Banco <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="last-name2" name="banco" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Monto del Depósito <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="last-name2" name="monto_deposito" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                         
                          
                        
                      </div>

                    </div>
                    @include('ventas.modal')
                    <!--
                       <div class="form-group absolute bottom margin col-md-12 center-block">
                            
                            <div class="col-md-12 ">
                              <input type="text" id="observacion" name="observacion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Observación">
                            </div>
                          </div>
                          -->
                    </form>
                   </div>
                    </div>
                   </div>
                    </div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function() {
   
     
		$('#items').change(function(event) {
			$('#con').empty();
			for (var i = 0; i < event.target.valueAsNumber; i++) {
				$('#con').append('<div><p>Producto '+(i+1)+'</p><div class="form-group"><label class="control-label col-md-3 col-sm-3" for="first-name">Producto <span class="required">*</span></label><div class="col-md-6 col-sm-6"><select id="first-name2" required="required" class="form-control col-md-7 col-xs-12 select" name="producto[]"><option value="">Seleccione</option></select></div></div><div class="form-group"><label for="middle-name" class="control-label col-md-3 col-sm-3">Cantidad</label><div class="col-md-6 col-sm-6"><input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="cantidad[]"></div></div><div class="form-group"><label for="middle-name" class="control-label col-md-3 col-sm-3">Precio Base</label><div class="col-md-6 col-sm-6"><input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="base[]"></div></div></div>');
			}

     $.get('/producto/pr', function(data) {
        
        for (var i = 0; i < data.length; i++) {
          
          $('.select').append('<option value='+data[i].id+'>'+data[i].nombre+'</option>');
        }
        //
      });
    
			
		});
$('#legresos').change(function(event) {
			$('#egre').empty();
			for (var i = 0; i < event.target.valueAsNumber; i++) {
				$('#egre').append('<div><p>Egreso '+(i+1)+'</p><div class="form-group"><label for="middle-name" class="control-label col-md-3 col-sm-3">Descripción</label><div class="col-md-6 col-sm-6"><input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="descripción[]"></div></div><div class="form-group"><label for="middle-name" class="control-label col-md-3 col-sm-3">Monto</label><div class="col-md-6 col-sm-6"><input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="monto[]"></div></div></div>');
			}
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
function modal(){
//--------------------------poblando el modal-----------
var data= $('#Form').serializeArray();
 
//-----productos
for (var i = 1; i <= data[2].value; i++) {
  for (var i = 1; i <= data[2].value*2; i=i+2) {

var pr=$.get('/producto/pr');
pr.done(function (val){
  console.log(val)
  $('#prod').append('<li>'+data[2+i].value+'</li>');
});
    
  $('#cant').append('<li>'+data[2+i+1].value+'</li>');
  $('#total').append('<li>'+(data[2+i+2].value*data[2+i+1].value)+'</li>');
  }
  
  //-----productos

  //------ingresos
  var inicio=data[2].value*2+3;
  var fin=data[2].value*2+6; 
for (var i = inicio; i <= fin; i++) {
  $('#ingresos').append('<li>'+data[i+1].value+'</li>');
}
  
}
  //--------------Inicio el modal-------------------
  $("#modal").modal();




}
        $('#wizard_verticle').smartWizard({
          transitionEffect: 'fade',
          onFinish: modal,
          labelFinish:'Enviar'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
</script>
@endsection