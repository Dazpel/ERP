                 <div class="modal fade bs-example-modal-lg modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Verifique los datos</h4>
                        </div>
                        <form action="/producto/addtipo" method="post">
                        {{csrf_field()}}
                        <div class="modal-body ">
                          		<div class="form-group center-block  ">
                          			<label class="form-label">Tipo de producto</label>
                          		</div>
                               		<div class="form-group center-block ">
                          			<input type="text" name="nombre" class="form-control" required>
                          		</div>
                        
                            
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary" id="verificacion">Guardar Registro</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

