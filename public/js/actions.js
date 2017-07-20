$( function () {
	var Cback;
	var blur = $('#PI').attr('class');
	var back = $('body').attr('class');

	$('input[value="CANCELAR"]').on('click', function () {
		$('#Finder').css({
			'display' : 'none',
			'opacity' : 0
		});
		$('.alert').css('display','none');
		$('#block').css('display','block');
		$('#sectA').css('display','block');
		if (
			$('#NProduct').attr('data-action') != 'EProduct'
		) {
			$('input[name="id"]').val('');
			$('input[name="name"]').val('');
			$('input[name="mark"]').val('');
			$('input[name="type"]').val('');
			$('input[name="description"]').val('');
			$('input[name="price"]').val('');
			$('input[name="quantity"]').val('');
			$('#Aedit').removeClass('active');
			$('#Aremove').removeClass('active');
			$('#NProduct').attr('data-action','NProduct');
		}
	});

	$('#Anew').on('click', function () {
		$('#block').css('display','none');
		$('#sectA').css('display','none');
		$('input[name="name"]').val('');
		$('input[name="mark"]').val('');
		$('input[name="type"]').val('');
		$('input[name="description"]').val('');
		$('input[name="price"]').val('');
		$('input[name="quantity"]').val('');
		$('#NProduct').attr('data-action','NProduct');
	});

	$('#Aedit').on('click', function () {
		$('#block').css('display','none');
		$('#sectA').css('display','none');
		$('#NProduct').attr('data-action','EProduct');
	});
	/* - - - - - - Remove Button  - - - - - - */
	$('#Aremove').on('click', function () {
		$('.alert').css('display','block');
		$('.alert #aDates').text(
			$('input[name="name"]').val() + ' | ' +
			$('input[name="mark"]').val() + ' | ' +
			$('input[name="type"]').val() + ' | ' +
			$('input[name="description"]').val() + ' | ' +
			$('input[name="price"]').val() + ' | ' +
			$('input[name="quantity"]').val()
		);
	});

	$('.alert button[name="no"]').on('click', function () {
		$('.alert').css('display','none');
	});
	/* / - - - - - Remove Button  - - - - - - */
	$('input[name="price"]').change( function () {
		var pri = $(this).val();
		var rp = '';
		for (var i = 0; i < pri.length; i++) {
			if (pri[i] != ',') {
				rp += pri[i];
			}
		}
		$(this).val(rp);
	});

	$('#NProduct').click( function () {
		$.post( "config/actions.php", {
			id: $('input[name="id"]').val(),
			name: $('input[name="name"]').val(),
			mark: $('input[name="mark"]').val(),
			type: $('input[name="type"]').val(),
			description: $('input[name="description"]').val(),
			price: $('input[name="price"]').val(),
			quantity: $('input[name="quantity"]').val(),
			action: $(this).attr('data-action')
		}, function( data ) {
			if (data == "Realizado") {
				addProdDes(
					$('input[name="name"]').val(),
					$('input[name="mark"]').val(),
					$('input[name="type"]').val(),
					$('input[name="description"]').val(),
					$('input[name="price"]').val(),
					$('input[name="quantity"]').val()
				);
			} else if (data == "Actualizado") {
				alert(
					$('input[name="name"]').val() + " ha sido actualizado"
				);
			} else if (data == "Acción inválida") {
				alert(data);
			} else if (data == "No has llenado todos los campos") {
				alert(data);
			}
		});
	});

	$('button[name="si"]').click( function () {
		$.post( "config/actions.php", {
			id: $('input[name="id"]').val(),
			action: $(this).attr('name')
		}, function( data ) {
			if (data == "Eliminado") {
				$('#Aedit').removeClass('active');
				$('#Aremove').removeClass('active');
				$('.alert button').css('display','none');
				$('.alert #aDates').text('ELEMENTO ELIMINADO');
				$('.alert p:nth-child(1)').css('display','none');
				$('input[name="name"]').val('');
				$('input[name="mark"]').val('');
				$('input[name="type"]').val('');
				$('input[name="description"]').val('');
				$('input[name="price"]').val('');
				$('input[name="quantity"]').val('');
				$('#NProduct').attr('data-action','NProduct');
				setTimeout(function(){
					$('.alert').css('display','none');
					$('.alert button').css('display','block');
					$('.alert p:nth-child(1)').css('display','block');
				}, 1000);
			} else if (data == "Acción inválida") {
				alert(data);
			} else if (data == "No has llenado todos los campos") {
				alert(data);
			}
		});
	});

	function addProdDes(name,mark,type,description,price,quantity) {
		$('#secProducts > div:last-child').css('display','none');
		back = $('body').attr('class');
		if (back.length == 5) {
			Cback = back[4];
		} else {
			Cback = back[4];
			Cback += back[5];
		}
		var addPro = '<div class="tblH blur' + Cback + '" ' +
			'style="max-height: 30px !important; font-weight: 100 !important;">' +
			'<div style="height: 30px !important; font-weight: 100 !important;' +
			' line-height: 30px;">' +
				name +
			'</div>' +
			'<div style="max-height: 30px !important; font-weight: 100 !important;' +
			' line-height: 30px;">' +
				mark +
			'</div>' +
			'<div style="max-height: 30px !important; font-weight: 100 !important;' +
			' line-height: 30px;">' +
				type +
			'</div>' +
			'<div style="max-height: 30px !important; font-weight: 100 !important;' +
			' line-height: 30px;">' +
				description +
			'</div>' +
			'<div style="max-height: 30px !important; font-weight: 100 !important;' +
			' line-height: 30px;">$ ' +
				price +
			'</div>' +
			'<div style="max-height: 30px !important; font-weight: 100 !important;' +
			' line-height: 30px;">' +
				quantity +
			'</div>' +
		'</div>';
		$('#secProducts').append(addPro);
		$('input[value="CANCELAR"]').click();
	}

	$('#SearchBox input[name="find"]').keyup( function () {
		$('#Finder').css({
			'display' : 'block',
			'opacity' : 1
		});
		back = $('body').attr('class');
		if (back.length == 5) {
			Cback = back[4];
		} else {
			Cback = back[4];
			Cback += back[5];
		}
		$.post( "views/find.php", {
			text: $(this).val(),
			back: 'blur' + Cback
		}, function( data ) {
			$('#Finder').html(data);
		});
	});

	$(document).on('click', '.findPro', function(){
		$('input[name="id"]').val(
			$(this).attr('data-id')
		);
		$('input[name="name"]').val(
			$(this).attr('data-name')
		);
		$('input[name="mark"]').val(
			$(this).attr('data-mark')
		);
		$('input[name="type"]').val(
			$(this).attr('data-type')
		);
		$('input[name="description"]').val(
			$(this).attr('data-description')
		);
		$('input[name="price"]').val(
			$(this).attr('data-price')
		);
		$('input[name="quantity"]').val(
			$(this).attr('data-quantity')
		);
		$('#Finder').css({
			'display' : 'none',
			'opacity' : 0
		});
		$('#Aedit').addClass('active');
		$('#Aremove').addClass('active');
		$('.alert').css('display','none');
		$('#block').css('display','block');
		$('#sectA').css('display','block');
	});

});
