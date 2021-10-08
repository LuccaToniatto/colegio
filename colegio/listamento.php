<?php
    class handler
    {
        public static function arrayHandler()
        {
                
            $a = [];
            $_POST['media'] = ($_POST['nota2'] + $_POST['nota1'])/2;
            $a['nome'] = $_POST['nome'];
            $a['nota1'] = $_POST['nota1'];
            $a['nota2'] = $_POST['nota2'];
            $a['media'] = $_POST['media'];

            $gravar = $_POST['nome']."|".$_POST['nota1']."|".$_POST['nota2']."|".$_POST['media']."|";
            $arquivo =fopen('informa.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>