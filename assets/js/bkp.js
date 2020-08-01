class UserForm {

	constructor(formId) {

		this.form = document.querySelector(formId);
		this.msg = document.querySelector("#msg");

		this.onSubmit();

	}

	// Responsável por impedir que a página recarregue ao dar "SUBMIT"
	onSubmit() {
		
		this.form.addEventListener("submit", event => {
			event.preventDefault(); // previne que atualize a página.

			this.getValues();

		});
	}

	// Responsável por pegar os valores inseridos no formulário
	getValues() {

		let user = {};

		[...this.form.getElementsByClassName("inputContato")].forEach(event => {
			user[event.name] = event.value;
			
			if (event.value == "") {
				throw document.querySelector("#msg").innerHTML = `<p class="text-danger">Informe todos os campos!</p>`
				
			}

		});

		//this.verifyUser(user);
		this.requestResponse(user);
	}

	// Responsável por verificar se o usuário preencheu o formulário
	/*verifyUser(user) {
		
		
		if (user.inputNome == "" || user.inputEmail == "" || user.inputTexto == "") {
			
			document.querySelector("#msg").innerHTML = `<p class="text-danger">Informe todos os campos!</p>`
			
		} else {
			
			this.requestResponse(user);
			
		}
	}*/

	// Responsável pelo REQUEST e RESPONSE do servidor utilizando a API FETCH
	requestResponse(user) {

		// Graças a alguma divindade substitui o método xmlhttprequest
		fetch('http://localhost/portifolio/controller/createContato.php', {
				method: 'POST',
				body: JSON.stringify(user) //transforma os dados enviados em um objeto JSON
			})
			.then(function (response) {
				//retorna os dados da requisição no servidor no formato JSON 
				document.querySelector("#msg").innerHTML = `<p class="text-danger">Erro ao cadastrar!</p>`
			})
			.then(function (response) {
				//(response.status == 200)
				document.querySelector("#msg").innerHTML = `<p class="text-success">Obrigado pelo contato ${user.inputNome} - Enviado com sucesso!</p>`

				this.form.reset();
			})
	}
}
