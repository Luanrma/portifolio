let form = document.querySelector("#formContato");
let msg   = document.querySelector("#msg");

let nome  = document.querySelector('#inputNome');
let email = document.querySelector('#inputEmail');
let texto = document.querySelector('#inputTexto');

form.addEventListener("submit", function(event){
	event.preventDefault(); // previne que atualize a página.

	
	if (nome.value == ""|| email.value == "" || texto.value == "") {
		msg.innerHTML = `<p class="text-danger">Informe todos os campos!</p>`
	} else {
		let dados = {
			nome : nome.value,
			email: email.value,
			texto: texto.value
		};			

		// Graças a alguma divindade substitui o método xmlhttprequest
		fetch('http://localhost/portifolio/controller/createContato.php', {
		method: 'POST', 
		body: JSON.stringify(dados) //transforma os dados enviados em um objeto JSON
		})
		.then(function(response) {
			//retorna os dados da requisição no servidor no formato JSON 
			msg.innerHTML = `<p class="text-danger">Erro ao cadastrar!</p>`
		})
		.then(function(response) {
			msg.innerHTML = `<p class="text-success">Obrigado pelo contato ${nome.value} - Enviado com sucesso!</p>`//(response.status == 200)
			form.reset();	
		})
	}
});
