$(document).ready(function(){
	$(document).on("click", '.link, .link-without-style', function(){ 
		//on nettoie le cache (pour IE)
		$.ajaxSetup({ cache: false });
		
		var data = new Array();
		var url = $(this).attr("data-url");
		
		if(data.length > 0)
		{
			$('#corps_page').load(url,data,function(responseTxt, statusTxt, xhr){
											if(statusTxt == "error")
												alert("Error: " + xhr.status + ": " + xhr.statusText);
										});
		} else {
			$('#corps_page').load(url,function(responseTxt, statusTxt, xhr){
											if(statusTxt == "error")
												alert("Error: " + xhr.status + ": " + xhr.statusText);
										});
		}
	});


	$(document).on('submit', '.form', function(){
		
		var reload = $(this).attr('data-reload');
		
		jQuery.ajax
		({
			url: $(this).attr('action'), // URL de la page de traitement
			type: $(this).attr('method'), // Method du formulaire (POST GET etc ...)
			data: $(this).serialize(),
			success: function(data)
			{
				if(data != "")
				{
					alert(data);
				} else {
					$('#corps_page').load(reload);
				}
			},
			error: function(data, textStatus)
			{
				alert(textStatus);
			}
		});
		 return false;
	});
	
	$(document).on('submit', '.formAddPanier', function(){
		
		var reload = 'controller/controllerPanier.php';
		
		jQuery.ajax
		({
			url: $(this).attr('action'), // URL de la page de traitement
			type: $(this).attr('method'), // Method du formulaire (POST GET etc ...)
			data: $(this).serialize(),
			success: function(data)
			{
				if(data != "")
				{
					alert(data);
				} else {
					$('#panier').load(reload);
				}
			},
			error: function(data, textStatus)
			{
				alert(textStatus);
			}
		});
		 return false;
	});
	
	
	$(document).on('click', '.suppPanier', function(){
		
		var reload = 'controller/controllerSeeAllCommande.php';

		jQuery.ajax
		({
			url: $(this).attr('data-url'), // URL de la page de traitement
			type: $(this).attr('data-method'), // Method du formulaire (POST GET etc ...)
			data: {idCmd: $(this).attr('data-id')},
			success: function(data)
			{
				if(data != "")
				{
					alert(data);
				} else {
					$('#corps_page').load(reload);
				}
			},
			error: function(data, textStatus)
			{
				alert(textStatus);
			}
		});
		 return false;
	});
	
	$(document).on('click', '#verifPanier', function(){		
		jQuery.ajax
		({
			url: $(this).attr('data-url'), // URL de la page de traitement
			type: 'post', // Method du formulaire (POST GET etc ...)
			data: $('#formPanier').serializeArray(),
			dataType: 'json',
			success: function(data)
			{
				if(data.message)
				{
					alert(data.message);
				} else {
					$('.fieldPastCmd').show();
					$('#rue').html(data.rue);
					$('#ville').val(data.ville);
					$('#code_postal').val(data.code_postal);
					$('#pays').val(data.pays);
					$('#fieldVerifPAnier').hide();
				}
				
			},
			error: function(data, textStatus)
			{
				alert(textStatus);
			}
		});
		 return false;
	});
	
	// $(document).on('click','[data-toggle="ajaxModal"]',
              // function(e) {
                // $('#ajaxModal').remove();
                // e.preventDefault();
                // var $this = $(this)
                  // , $remote = $this.data('remote') || $this.attr('href')
                  // , $modal = $('<div class="modal" id="ajaxModal"><div class="modal-body"></div></div>');
                // $('body').append($modal);
                // $modal.modal({backdrop: 'static', keyboard: false});
                // $modal.load($remote);
    // });
	
});	