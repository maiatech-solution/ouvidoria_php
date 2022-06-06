

function enviar(){
    var nome = document.getElementById("nome").value;
    var cpf = document.getElementById("cpf").value;
    var email = document.getElementById("email").value;
    var data = document.getElementById("nasc").value;
    var sex_M = document.querySelector('input[name="sex"]:checked').value;
    var sex_F = document.querySelector('input[name="sex"]:checked').value;
    var mensagem = document.getElementById("mensagem").value;
    
    if(!nome || !cpf || !email || !mensagem){
        alert("Preenche todos os campos abaixo");
    }else{
        alert(`Solicitação enviada!
Sr(a). ${nome} seu protocolo foi enviado para seu e-mail.`);
    }
}