document.addEventListener("DOMContentLoaded", () => {
  fetch("listar.php")
    .then(response => response.json())
    .then(vagas => {
      const lista = document.getElementById("listaVagas");

      if (vagas.length === 0) {
        lista.innerHTML = "<p>Nenhuma vaga cadastrada ainda.</p>";
        return;
      }

      vagas.forEach(vaga => {
        const vagaDiv = document.createElement("div");
        vagaDiv.classList.add("vaga");

        vagaDiv.innerHTML = `
          <h3>${vaga.cargo} @ ${vaga.empresa}</h3>
          <p><strong>Data de Aplicação:</strong> ${vaga.data_aplicacao}</p>
          <p><strong>Status:</strong> ${vaga.status}</p>
          <a href="${vaga.link}" target="_blank">Ver vaga</a>
        `;

        lista.appendChild(vagaDiv);
      });
    })
    .catch(error => {
      console.error("Erro ao carregar as vagas:", error);
    });
});
