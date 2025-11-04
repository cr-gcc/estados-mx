window.estadosInegi = async () => {

  try {
		$('#pb-estados').removeClass('vanish');
    const response = await axios.get('/estados-inegi');
		console.log(response);
		if (response.data.lengh) {

		}
		else {
			$('#no-estados').removeClass('vanish');
		}
  } catch (error) {
    console.error('Error:', error);
  } finally {
    $('#pb-estados').addClass('vanish');
  }
};

window.cargaInegi = async () => {
  let msg = "";
	try {
    $('#modal-loading').removeClass('vanish');
    $('#modal-footer').addClass('vanish');
    const response = await axios.get('/carga-inegi');
		if (response.status==200) {
			msg = response.data.message;
			
		}
		else {
			msg = response.data.message;
		}
  } catch (error) {
    console.error('Error:', error);
  } finally {
    $('#modal-loading').addClass('vanish');
    $('#modal-footer').removeClass('vanish');
  }
};

document.addEventListener("DOMContentLoaded", () => {
  estadosInegi();
});