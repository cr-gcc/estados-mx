<div class="modal fade" id="cargaINEGI" data-backdrop="static" data-keyboard="false" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="px-2 py-1">
        <h5 class="modal-title" id="staticBackdropLabel">Carga INEGI</h5>
      </div>
      <div class="modal-body">
        <p id="modal-msg-info" class="mb-0">
          ¿Desea cargar los registros del INEGI a la base de datos local?
        </p>
        <p id="modal-msg-response" class="mb-0 vanish"></p>
      </div>
      <div id="modal-footer" class="modal-footer py-1">
        <div id="modal-options">
          <button type="button" class="btn btn-sm btn-outline-secondary" onclick="cargaInegi()">Aceptar</button>
          <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Salir</button>
        </div>
        <div id="modal-reloaded" class="vanish">
          <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.reload()">Aceptar</button>
        </div>
      </div>
      <div id="modal-loading" class="px-2 pb-1 vanish">
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar"
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>
      </div>
    </div>
  </div>
</div>
