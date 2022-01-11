function cadastrarUsuario(e) {
    $.ajax({ type: "POST", data: e.serialize(), url: "./src/backend/cadastroUsuario.php"}).then(
        function (e) {
            ($sucesso = $.parseJSON(e).sucesso),
            ($msgErro = $.parseJSON(e).erroCadastro),
            // console.log($msgErro),
                $sucesso
                    ? (Swal.fire({ title: "Cadastro realizado com sucesso!", icon: "success", confirmButtonText: "Entendi", position: "center", showConfirmButton: "false"}))
                        
                    : (Swal.fire({ title: "Falha ao realizar cadastro.", text: "Verifique os campos e tente novamente", icon: "error", confirmButtonText: "Voltar", position: "center" }));
        },
        function () {
            Swal.fire({ title: "Erro ao realizar cadastro.", text: "Contate nosso suporte.", icon: "error", confirmButtonText: "Voltar", position: "center" });
        }
    );
}



$("#formCadastro").submit(function (e) {
    e.preventDefault(),
    
    Swal.fire({
        title: "Aguarde...",
        onBeforeOpen: () => {
            Swal.showLoading();
        },
    });
    cadastrarUsuario($(this));
});