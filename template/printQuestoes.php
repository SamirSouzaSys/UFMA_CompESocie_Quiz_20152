<?php
    $coresNívelPergunta = array(
                   '1'=>'green',
                   '2'=>'yellow',
                   '3'=>'red',
                   );

    for ($i=1; $i<= 10 ; $i++) {
        $Questao = array(
                             '1'=>'Questao texto 1',
                             '2'=>'Questao texto 2',
                             '3'=>'Questao texto 3',
                             '4'=>'Questao texto 4',
                             );
        $optRadioAlternativa = array(
                             '1'=> = array(
                               '1'=>'alternativa Q 1 texto 1',
                               '2'=>'alternativa Q 1 texto 2',
                               '3'=>'alternativa Q 1 texto 3',
                               '4'=>'alternativa Q 1 texto 4',
                             ),
                             '2'=> = array(
                               '1'=>'alternativa Q 2 texto 1',
                               '2'=>'alternativa Q 2 texto 2',
                               '3'=>'alternativa Q 2 texto 3',
                               '4'=>'alternativa Q 2 texto 4',
                             ),
                             '3'=> = array(
                               '1'=>'alternativa Q 3 texto 1',
                               '2'=>'alternativa Q 3 texto 2',
                               '3'=>'alternativa Q 3 texto 3',
                               '4'=>'alternativa Q 3 texto 4',
                             ),
                             '4'=> = array(
                               '1'=>'alternativa Q 4 texto 1',
                               '2'=>'alternativa Q 4 texto 2',
                               '3'=>'alternativa Q 4 texto 3',
                               '4'=>'alternativa Q 4 texto 4',
                             ),
                             );;
        $alternativaCorreta = array(
                             '1'=>'4',
                             '2'=>'3',
                             '3'=>'2',
                             '4'=>'1',
                             );
      // foreach ($variable as $key => $value) {}
      $divPerguntaInicio = '
      <div class="col-lg-4">';
      $divNivelPergunta = '
        <div class="panel panel-'.$coresNívelPergunta[rand(1,3)].'">';
      $divCabecalhoPergunta = '
          <div class="panel-heading">
            Pergunta ' . $i.
          '</div>';
      $divEnunciadoPergunta = '
          <div class="panel-body">
            <p><b>Enunciado:</b>;'.
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.'
            .'</p>';
      //while($Alternativa->Next)
      $divAlternativaPergunta = '
            <div class="radio">
              <label>
                <input type="radio" name="'.$nameQuestao.'" id="'.$optRadioAlternativa.'"
                value="" checked="">
              </label>
            </div>';
       $divBodyPerguntaFim =
          '</div>';
       $divFooterPanel =
          '<div class="panel-footer">
            E a alternativa correta é ...'.$alternativaCorreta.'
          </div>';
        '</div>
        <!-- /.col-lg-4 -->';
        $divPerguntaFim ='
      </div>';
      echo $divBodyPerguntaInicio .$divNivelPergunta . $divCabecalhoPergunta .
        $divEnunciadoPergunta .
        $divAlternativaPergunta . $divAlternativaPergunta . $divAlternativaPergunta . $divAlternativaPergunta .
        $divBodyPerguntaFim . $divFooterPanel . $divPerguntaFim;
    }
  ?>