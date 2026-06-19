

<?php

if (intent('Productos_General')){
    

    $conv = getContextParameter("auto") ['conversation'];

    $prod = getContextParameter("auto") ['productos'];

    if(!$prod){

    $cTitleArray=[];

    $Productos = Productos::getProductos();

    for ($i = 0;$i < count ($Productos); $i++){
        array_push($cTitleArray, $Productos[$i]["Producto_descripcion"]);
    }

    $cCustomArray = $cTitleArray;

    $cIconArray = ["Button Icon","Button Icon 2","Button Icon 3","Button Icon 4","Button Icon 5","Button Icon 6"];

    if($conv == 'Productos'){
        $aTitleArray = ["Claro, tenemos una variedad de productos. ¿Te gustaría saber más sobre alguno en particular?"];
        $aSubtitleArray = ["Haz click en el"];
        $aTextArray = ["Text"];
        //$bCustomArray = ["Componentes_general","Accesorios_General"];
        $cTitleArray = ["Componentes", "Accesorios"];
     }else{
        $aTitleArray = ["Claro, tenemos una variedad de servicios. ¿Te gustaría saber más sobre alguno en particular?"];
        $aSubtitleArray = ["Haz click en el"];
        $aTextArray = ["Text"];
        $cTitleArray = ["Tecnico", "Garantia del producto"];
     }
    $context = false;
    $contextBody = [];
    $webTitle = ["Productos_General"];

    $imageArray = ["https://m.media-amazon.com/images/I/31BR-B5wYlL._SL500_.jpg"];
    

    $structure = ['image','comma','card','superDivider','reply'];
    $components = [
        [$imageArray,$webTitle],
        [],
        [$aTitleArray,$aSubtitleArray,$aTextArray],
        [],
        [$cTitleArray,$cCustomArray,$cIconArray]
    ];

    webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);

    }else{

        triggerError(false,[],['Test'],["El producto que escogiste es $prod "],[]);

    }

    
}    

?>