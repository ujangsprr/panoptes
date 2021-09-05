$('#buy-ticket-modal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget)
	var recipient = button.data('whatever')

	const img = document.getElementById("image");
	const link = document.getElementById("kunjungi");

	var name;

	if(recipient == '0'){
		name = "Klinik Mata Utama (KMU)"
		img.src = "assets/img/klinik/1.png";
		link.href = "https://kmu.id/";
	}
	else if(recipient == '1'){
		name = "Klinik Mata Nusantara (KMN)"
		img.src = "assets/img/klinik/2.png";
		link.href = "https://www.klinikmatanusantara.com/";
	}
	else if(recipient == '2'){
		name = "JEC Eye Hospitals and Clinics"
		img.src = "assets/img/klinik/3.png";
		link.href = "https://jec.co.id/";
	}

	var modal = $(this)
	modal.find('.modal-title').text(name)
	modal.find('.output').val(name)
})

// var form = document.getElementsById("form")
// var SendButton = document.getElementById("button-2")


// var loadFile = function(event) {
// 	var image = document.getElementById('output');
// 	urlim = URL.createObjectURL(event.target.files[0]);

// };