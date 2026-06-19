<?php

if(intent('basic_welcome')){

    $context = false;
    $contextBody = [];
    $webTitle = ["basic_welcome"];

    $imageArray = ["https://media.lacapital.com.ar/p/4fe993f76560ef3f0a98db796193d78d/adjuntos/204/imagenes/022/166/0022166994/1200x675/smart/costo-los-componentes-dentro-un-telefono-celular-02jpeg.jpeg"];
    $aTitleArray = ["BIENVENIDO"];
    $aSubtitleArray = ["¡Hola! ¿En qué puedo ayudarte hoy? "];
    $aTextArray = ["Elija una de las opciones:"];

    $bTitleArray = ["Servicios","Productos"];
    $bCustomArray = ["ServCli_general","Productos_General"];
    $bIconArray = ["Button Icon","Button Icon 2"];
    $bColorArray = ["#00efff","#000fff"];


    $structure = ['image','comma','card','superDivider','reply'];
    $components = [
        [$imageArray,$webTitle],
        [],
        [$aTitleArray,$aSubtitleArray,$aTextArray],
        [],
        [$bTitleArray,$bCustomArray,$bIconArray,$bColorArray]
    ];

    webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);

    
}

?>
<?php

if (intent('ServCli_general')){
    $context = false;
    $contextBody = [];
    $webTitle = ["ServCli_general"];

    $conv = getContextParameter("auto") ['conversation'];
    if($conv == 'Servicios'){
        $aTitleArray = ["Claro, estoy aquí para ayudarte con cualquier consulta que tengas."];
        $aSubtitleArray = ["Puedes escoger cualquier servicio"];
        $aTextArray = ["Text"];
        $cTitleArray = ["Tecnico", "Garantias"];
     }else{
        $aTitleArray = ["Claro, estoy aquí para ayudarte con cualquier consulta que tengas."];
        $aSubtitleArray = ["Puedes escoger cualquier producto"];
        $aTextArray = ["Text"];
        $cTitleArray = ["Componentes", "Accesorios"];
     }

    $imageArray = ["https://images.vexels.com/media/users/3/157456/isolated/preview/762ccdc777160e3b11dc970fee95c133-icono-de-actualizacion-global-movil.png"];

    $cCustomArray = ["Servicios","Productos"];
    $cIconArray = ["Button Icon","Button Icon 2"];

    $structure = ['image','comma','card','superDivider','reply'];
    $components = [
        [$imageArray,$webTitle],
        [],
        [$aTitleArray,$aSubtitleArray,$aTextArray],
        [],
        [$cTitleArray,$cCustomArray,$cIconArray]
    ];

    webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);

}
?>