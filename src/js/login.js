function login(e) {
    $.ajax({ type: "POST", data: e.serialize(), url: "./src/backend/valida.php"}).then(
        function (e) {
            ($sucesso = $.parseJSON(e).sucesso),
            ($idUser = $.parseJSON(e).id),
                $sucesso
                    ? (window.location.href = "./telaPrincipal.php?id=" + $idUser)     
                    : (Swal.fire({ title: "Falha ao realizar login.", text: "Verifique os campos e tente novamente", icon: "error", confirmButtonText: "Voltar", position: "center" }));
        },
        function () {
            Swal.fire({ title: "Erro ao realizar login.", text: "Contate nosso suporte.", icon: "error", confirmButtonText: "Voltar", position: "center" });
        }
    );
}


$("#formLogin").submit(function (e) {
    e.preventDefault(),
    
    Swal.fire({
        title: "Aguarde...",
        onBeforeOpen: () => {
            Swal.showLoading();
        },
    });
    login($(this));
});