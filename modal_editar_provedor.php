<div id="editEmployeeModal<?php echo $row['id_provedores'] ?>" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <form action="editar_provedor.php" method="POST">
                                      <div class="modal-header">						
                                        <h4 class="modal-title">Editar Proveedor</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                      <div class="modal-body">					
                                        <div class="form-group">
                                          <label>Nombre</label>
                                          <input type="hidden" class="form-control mb-3" name="id" value="<?php echo $row['id_provedores'] ?>">
                                          <input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                          <label>Dirección</label>
                                          <textarea class="form-control" name="direccion" required><?php echo $row['direccion'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Teléfono</label>
                                          <input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono'] ?>" required>
                                        </div>					
                                      </div>
                                      <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-info" value="Save">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>