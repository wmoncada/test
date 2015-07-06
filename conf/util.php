<?php
class Util
{

    public static function CodificarValor($string)
    {
        $result = '';
         $key = 'Pjc';
       for($i=0; $i<strlen($string); $i++) {
          $char = substr($string, $i, 1);
          $keychar = substr($key, ($i % strlen($key))-1, 1);
          $char = chr(ord($char)+ord($keychar));
          $result.=$char;
       }
        return str_replace('+','_???',(base64_encode($result)));
    }

    public static function DecodificarValor($string){
       $result = '';
       $key='Pjc';
       $string =str_replace('_???','+',$string);
       $string = base64_decode($string);
       for($i=0; $i<strlen($string); $i++) {
          $char = substr($string, $i, 1);
          $keychar = substr($key, ($i % strlen($key))-1, 1);
          $char = chr(ord($char)-ord($keychar));
          $result.=$char;
       }
       return $result;
    }


}
?>
