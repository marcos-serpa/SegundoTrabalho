<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORMULÁRIO - MINE HORTA VERDE</title>
    <link href="../Códigos-Complemento/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

<form action="salva.php">
  <main>
    <div class=" bg-light py-3 ">
      <div class="container">
        <h1>MINE HORTA VERDE - FORMULÁRIO</h1>
        <h6> Preencha o formulário para cadastrar sua firma no sistema da Mine Horta Verde</h6>
      </div>

      <div class="container">
    
       
        <div class="row py-3">
     
          <div class="col-6">
            <input type="text" name="firma" class="form-control" placeholder="Firma" aria-label="Firma">
          </div>
     
          <div class="col-4">
            <input type="date" name="data" class="form-control" placeholder="Data" aria-label="Data">
          </div>

          <div class="col-2">
            <input type='number' name="numero"  class="form-control" placeholder="N°" aria-label="N°">
          </div>

        </div>


        <div class="row py-3">
     
          <div class="col-10">
            <input type="text" name="endereco" class="form-control" placeholder="Endereço" aria-label="Endereço">
          </div>
     
          <div class="col-2">
            <input type="number" name="complemento" class="form-control" placeholder="Complemento" aria-label="Complemento">
          </div>

        </div>

        <div class="row py-3">
     
          <div class="col-4">
            <select class="form-select" name="estado" aria-label="Estado">
              <option selected="Estado">Estado</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espirito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MT">Mato Grosso</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
     
          <div class="col-4">
            <input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Bairro">
          </div>

          <div class="col-4">
            <input type='text' name="bairro" class="form-control" placeholder="Bairro" aria-label="Bairro">
          </div>

        </div>

        <div class="row py-3">
     
          <div class="col-4">
            <input type="number" name="cep" class="form-control" placeholder="CEP" aria-label="CEP">
          </div>

          <div class="col-4">
            <input type="number" name="cnpj" class="form-control" placeholder="CNPJ" aria-label="CNPJ">
          </div>

          <div class="col-4">
            <input type='number' name="inscricao" class="form-control" placeholder="Inscrição" aria-label="Inscrição">
          </div>

        </div>

        <div class="row py-3">
     
          <div class="col-8">
            <input type="text" name="telefone" class="form-control" placeholder="Telefone(s)" aria-label="Telefone(s)">
          </div>
     
          <div class="col-4">
            <input type="text" name="celular" class="form-control" placeholder="Celular" aria-label="Celular">
          </div>

        </div>
        
        <div class="row py-3">
     
          <div class="col-12">
            <input type="email" name="email" class="form-control" placeholder="E-Mail" aria-label="E-Mail">

        </div>

        <div class="row py-3">
     
          <div class="col-12">
          <textarea rows="5" cols="149" name="observacao" placeholder="Observações Adicionais" aria-label="Observações Adicionais"></textarea>

        </div>

      </div>

    </div>

    <div class="row py-3">
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Li e Concordo com os Termos de Serviço e Privacidade do Sistema Mine Horta Verde
        </label>
      </div>
    </div>
  </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar Formulário</button>
    </div>


  </main>
</form>


  </body>
</html>
