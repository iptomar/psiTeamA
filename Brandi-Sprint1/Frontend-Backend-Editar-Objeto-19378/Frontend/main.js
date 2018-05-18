var VueFormGenerator = window.VueFormGenerator;

var vm = new Vue({
	el: "#app",
	components: {
		"vue-form-generator": VueFormGenerator.component
	},

	methods: {
		prettyJSON: function (json) {
			if (json) {
				json = JSON.stringify(json, undefined, 4);
				json = json.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
				return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
					var cls = "number";
					if (/^"/.test(match)) {
						if (/:$/.test(match)) {
							cls = "key";
						} else {
							cls = "string";
						}
					} else if (/true|false/.test(match)) {
						cls = "boolean";
					} else if (/null/.test(match)) {
						cls = "null";
					}
					return "<span class=\"" + cls + "\">" + match + "</span>";
				});
			}
		}
	},

	data: {
		model: {
			id: 1,
			nome: "",
			categoria: "Bens Culturais Móveis",
			subcategoria: "Retabulística",
			dimensao: "",
			tipologia: "",
			identificador:"",
			butao:""
		},
		schema: {
			fields: [
				{
					type: "input",
					inputType: "text",
					label: "ID",
					model: "id",
					inputName: "id",
					readonly: true,
					featured: true,
					required: false,
					disabled: false
				},
				{
					type: "input",
					inputType: "text",
					label: "Nome",
					model: "nome",
					inputName: "nome",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					placeholder: "Nome do objeto",
					validator: VueFormGenerator.validators.string
				},
				{
					type: "select",
					label: "Categoria",
					model: "categoria",
					inputName: "categoria",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					values: [
						"Bens Culturais Móveis"
					],
					validator: VueFormGenerator.validators.string
				},
				{
					type: "select",
					label: "Subcategoria",
					model: "subcategoria",
					inputName: "subcategoria",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					values: [
						"Retabulística",
						"Escultura",
						"Talha"
					],
					validator: VueFormGenerator.validators.string
				},
				{
					type: "input",
					inputType: "text",
					label: "Dimensão",
					model: "dimensao",
					inputName: "dimensao",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					placeholder: "Dimensão do objeto",
					validator: VueFormGenerator.validators.string
				}, 
				{
					type: "input",
					inputType: "text",
					label: "Tipologia",
					model: "tipologia",
					inputName: "tipologia",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					placeholder: "Tipologia do objeto",
					validator: VueFormGenerator.validators.string
				}, 
				{
					type: "submit",
					buttonText: "Alterar",
					label: "Alterar",
					model: "alterar",
					validateBeforeSubmit: false
				},
				{
					type: "input",
					inputType: "number",
					label: "Identificador",
					model: "identificador",
					inputName: "identificador",
					readonly: false,
					featured: false,
					required: false,
					disabled: false,
					placeholder: "Identificador do objeto",
				},
				{
					buttons: [
							{
									classes: "btn-location",
									label: "Adicionar info Objeto",
									onclick: function() {
											adicionarInfo();
									}
							}
					]
				}

			]
		},

		formOptions: {
			validateAfterLoad: false,
			validateAfterChanged: false
		}
	}
});