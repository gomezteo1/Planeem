    <form action="" method="post">
                   @csrf
            <div class="form-group">
                <label for="message-text"  class="col-form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
             <div class="form-group">
                  <label for="message-text"  class="col-form-label">Estrategias</label>
                  <input type="text" class="form-control" id="estrategia" name="estrategia">
              </div>
              <div class="form-group">
                <label for="message-text"  class="col-form-label">IDPlaneacion</label>
                <input type="text" class="form-control" id="id_Planeacion" name="id_Planeacion">
            </div>

              <button type="submit" class="btn btn-planeem">Guardar</button>
              <br><br>
          </form>   