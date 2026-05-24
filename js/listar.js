async function carregarVeiculos() {
  const tabela = document.getElementById("tabelaVeiculos");

  try {
    const resposta = await fetch("php/listar_veiculos.php");
    if (!resposta.ok) {
      throw new Error("Falha ao buscar veiculos.");
    }
    const veiculos = await resposta.json();

    tabela.innerHTML = "";

    if(veiculos.length === 0) {
      tabela.innerHTML = 
      `<tr>
        <td colspan="13">Nenhum veículo cadastrado.</td>
      </tr>`;
      return;
    }
    veiculos.forEach((veiculo) => {
      tabela.innerHTML +=
      `
      <tr>
        <td>${veiculo.id}</td>
        <td>${veiculo.placa}</td>
        <td>${veiculo.marca}</td>
        <td>${veiculo.modelo}</td>
        <td>${veiculo.ano_fabricacao}</td>
        <td>${veiculo.ano_modelo}</td>
        <td>${veiculo.cor}</td>
        <td>${veiculo.combustivel}</td>
        <td>${veiculo.quilometragem}</td>
        <td>${veiculo.chassi}</td>
        <td>${veiculo.renavam}</td>
        <td>${veiculo.data_cadastro}</td>
        <td>${veiculo.observacoes}</td>
      </tr>
      `
    })
  } catch (erro) {
    tabela.innerHTML =
    `<tr>
      <td colspan="13">Erro ao carregar veículos.</td>
    </tr>`;

    console.error(erro);
  }
}

document.addEventListener("DOMContentLoaded", carregarVeiculos);