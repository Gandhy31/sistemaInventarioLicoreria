<div id="deleteEmployeeModal<?php echo $row['id_provedores'] ?>" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <form action="eliminar_provedor.php" method="POST">
                                      <div class="modal-header">						
                                        <h4 class="modal-title">Eliminar Proveedor</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                      <div class="modal-body">					
                                        <p>Estás seguro que deseas eliminar estos registros?</p>
                                        <p class="text-warning"><small>Esta acción no se podrá revertir</small></p>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id_provedores'] ?>">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>