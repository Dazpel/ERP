@extends('layout.master')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Compra<small>{{$inv[0]->id}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Datos de la Compra
                    </p>
                    <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    <div class="col-sm-12 ">
                    <table id="datatable-buttons" class="table table-responsive table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed">
                      <thead>
                        <tr>
                          <th>Producto</th>
                          <th>Cantidad</th>
                           <th>Precio Unitario</th>
                           <th>Precio Venta</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                         @foreach($inv as $i)
                        <tr>
                          <td>{{$i->producto->nombre}}</td>
                          <td>{{$i->cantidad}}</td>
                          <td>{{$i->precio_unitario}}</td>
                          <td>{{$i->precio_venta}}</td>
                 
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
             
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        
        

      

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
   
@endsection