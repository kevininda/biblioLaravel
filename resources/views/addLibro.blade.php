<div class="modal fade" id="addLibro">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Agregar Libro</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="codigo">Codigo</label>
                        <input type="text" class="form-control" id="codigo" placeholder="Codigo">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <select id="autor" class="form-control">
                          @foreach($errors as $item)  
                        <option selected>{{$item->nombre}}</option>
                        @endforeach()
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Descripcion</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Descripcion">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Agregar">
            </div>
        </div>
    </div>
</div>