<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/3040.less', 'css/3040.css');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>3040</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="<?php echo $url_path ?>/css/3040.css" rel="stylesheet" type="text/css"/>


        <div class="repair-steps">
                
        <div class="step-intro">
            <h2>Steps For Repairing Your Device</h2>
            <hr>
            <p>Maga aliquat veniam nostrud exercit eration ullamc cididunt utabore etas dolore magna aliqua.</p>
        </div>
        <div class="steps">
            <div class="step">
                <div class="step-circle">1</div>
                <i class="fas fa-mobile-alt fa-3x"></i>
                <p>Select Your Device Brand</p>
            </div>
            
            <div class="step">
                <div class="step-circle">2</div>
                <i class="fa-sharp fa-regular fa-compass fa-3x"></i>
                <p>Choose Our Nearest Shop</p>
            </div>
            <div class="step">
                <div class="step-circle">3</div>
                <i class="fas fa-life-ring   fa-3x"></i>
                <p>Get Repair Your Device</p>
            </div>
        </div>
   
    </head>
    
</html>
