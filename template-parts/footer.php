    <footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo $path; ?>js/materialize.js"></script>
      <script type="text/javascript" src="<?php echo $path; ?>js/custom-scripts/scripts.js"></script>
      <script language="javascript">
       function errorLogin(){
        new M.Toast({text: "I am a toast"});
       }
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function () {
          // Quando o documento estiver pronto, faça a requisição
          $.ajax({
              url: "http://localhost/api/clientes/lista", // Endpoint da API
              method: "GET", // Método HTTP
              dataType: "json", // Tipo esperado de retorno
              success: function (data) {
                  console.log("Dados recebidos:", data);
                  if (Array.isArray(data.dados)) {
                    data.dados.sort(function (a, b) {
                        return a.id - b.id;
                    });                    
                    let html = "";
                    data.dados.forEach(function (cliente) {
                        html += '<tr>';
                        html += '<td>' + cliente.id + '</td>';
                        html += '<td>' + cliente.nome + '</td>';
                        html += '<td>' + cliente.nome + '</td>';
                        html += '<td>email@gmail.com</td>';
                        html += '<td><button class="delete"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;&nbsp;Deletar</button><button class="update"><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Atualizar</button></td>';
                        html += '</tr>';
                    });
                    $("#lista").html(html);
                  } 
                  else 
                    {
                      console.warn("Resposta não contém um array 'dados':", data);
                  }
              },
              error: function (xhr, status, error) {
                  // Em caso de erro
                  console.error("Erro na requisição:", error);
              }
          });
        });
        $(document).on('click', '.delete', function () {
            console.log("Botão deletar clicado!");  
        });
      </script>
    </footer>
  </body>
</html>