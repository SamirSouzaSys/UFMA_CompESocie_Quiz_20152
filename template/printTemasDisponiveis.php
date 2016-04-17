<?php

//array(idtema->array(nome,qtdCadastrada))

function printTemasDisponiveis($temas){
  $resultTemas = '';

  foreach ($temas as $idTema => $dadosTema) {
    $resultTemas .=
      '<div class="checkbox-inline">
        <label>
          <input type="checkbox" id="'.$idTema.'">'.
          $dadosTema['nome'] .' - <span class="text-success"><b>'.
          $dadosTema['qtdPerguntasCadastradas'] .' perguntas cadastradas</b></span>';
      $resultTemas .= '</label>
    </div>';
  }

  return $resultTemas;
}
?>