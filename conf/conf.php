<?php
/*
 * Clase:       conf 
 * Descripcion: Encargada de obtener los valores de paranetros de configuracion 
 *              comunes a todas las aplicaciones
 * Autor:       Walberto Moncada
 */
//define("host","190.5.128.84");
class conf
{
    /* Configuracion de CAS */
    private static $cas_host    = "192.168.20.38";//"190.5.128.84"; //192.168.2.151";
    private static $cas_port    = 8444;
    private static $cas_context = "/cas";
    /* servidor http */
    //private static $server_host = "192.168.2.35";//"http://programador-04/";
    
    /*Conexion para Reportes con Jasper*/
    //public static $jas_url_java     = "http://localhost:8083/JavaBridge/java/Java.inc";
    public static $jas_url_java     = "http://192.168.20.38:8083/JavaBridge/java/Java.inc";
    //public static $jas_url_java     = "http://192.168.2.151:8083/JavaBridge/java/Java.inc";
    //public static $jas_url_java     ="http://190.5.128.84:8083/JavaBridge/java/Java.inc";
    public static $jas_php_jru      = "php-jru/php-jru.php";
    public static $jas_driver       = "org.postgresql.Driver";
    public static $jas_conexion_url = "jdbc:postgresql://192.168.20.38:5432/Sisad";//"jdbc:postgresql://190.5.128.84:5433/Sisad";
    //public static $jas_user         = Yii::app()->session["usuario"];
    //public static $jas_user         = "karengomez";//"postgres";
    public static $jas_user         = "karengomez";
    //public static $jas_pass         = base64_decode( Yii::app()->session["bdpass"]);
    public static $jas_pass         = "123456";
    /*Fin de conexion Jasper*/
    private static $uploadsImagesFolder = "http://192.168.20.38:8081/erp/uploads/images";
    
    
    public static function getCasHost()
    {
        return self::$cas_host;
    }
    
    public static function getCasPort()
    {
        return self::$cas_port;
    }
    
    public static function getCasContext()
    {
        return self::$cas_context;
    }
    
    public static function getUploadsImagesFolder()
    {
        return self::$uploadsImagesFolder;
    }
}
?>
