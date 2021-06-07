@extends('site\home')

@section('content')

<div class="container py-5">

<form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Primeiro nome</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" value="Mark" required>
        <div class="valid-feedback">
          Tudo certo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Sobrenome</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome" value="Otto" required>
        <div class="valid-feedback">
          Tudo certo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Usuário</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
          </div>
          <input type="text" class="form-control" id="validationCustomUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Por favor, escolha um nome de usuário.
          </div>
        </div>
      </div>
    </div>
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Endereço</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Complemento</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputEstado">Estado</label>
            <select id="inputEstado" class="form-control">
              <option selected>Escolher...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP">
          </div>
        </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Concordo com os termos e condições
        </label>
        <div class="invalid-feedback">
          Você deve concordar, antes de continuar.
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
  </form>

  <script>
  // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
      var forms = document.getElementsByClassName('needs-validation');
      // Faz um loop neles e evita o envio
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>


@endsection
