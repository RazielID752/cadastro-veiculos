const formVeiculo = document.getElementById("formVeiculo");

formVeiculo.addEventListener("submit", async function(event) {
    event.preventDefault();

    const dadosFormulario = new FormData(formVeiculo);

    try{
      const resposta = await fetch("php/inserir_veiculo.php", {
        method: "POST",
        body: dadosFormulario
      });

      const resultado = await resposta.json();

      alert(resultado.mensagem);

      if (resultado.status === "sucesso") {
        formVeiculo.reset();
      }
    } catch (error) {
      
    }
});