$(document).ready(function(){
	$('#apagar').click(function(ev){
		var href = $(this).attr('href');
		if (!$('#confirm-delete').length){
			// Modal
			$('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-danger text-white"><h5 class="modal-title" align="center">EXCLUIR CONTA</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza que deseja excluir sua conta permanentemente?</div><div class="modal-footer"><button type="button" class="btn btn-success rounded" data-dismiss="modal">Cancelar</button><a class="btn btn-danger rounded text-white" id="dataConfirmOK">Apagar</a></div></div></div></div>');
		}
		$('#dataConfirmOK').attr('href', href);
		$('#confirm-delete').modal({show: true});
		return false;
	});
});