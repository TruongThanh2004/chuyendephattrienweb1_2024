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
$less->compileFile('less/3056.less', 'css/3056.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>3056</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="<?php echo $url_path ?>/css/3056.css" rel="stylesheet" type="text/css" />  

    <div class="main">
        <div class="container policy">
            <div class="col-sm-7">
            <i class="fa-regular fa-lock fas"></i>
            </div> 
            <div class="col-sm-4 ">
            <h2>PRIVACY POLICY</h2>
            <p>Our company pays special attention to privacy of your data. No information from your gadget will be transferred to a third party. We respect our customers.</p>
            </div>
        </div>
    
    <div class="services">
        <div class="col-sm-3 service">
            <img src="./img/header.jpg" alt="">
            <h3>CORPORATE SERVICES</h3>
            <p>Nunc non tortor tincidunt, rutrum nibh in, gravida leo. Sed pulvinar lectus vitae sem consequat, lobortis sodales neque tincidunt. Nullam vel erat urna. Ut tincidunt facilisis ipsum a ullamcorper.</p>
            <a href="#">READ MORE</a>
        </div>
        <div class="col-sm-3 service">
            <img src="./img/Screen-Shot-2022-12-11-at-2.32.02-PM.png" alt="">
            <h3>CUSTOMER SERVICE</h3>
            <p>Nunc non tortor tincidunt, rutrum nibh in, gravida leo. Sed pulvinar lectus vitae sem consequat, lobortis sodales neque tincidunt. Nullam vel erat urna. Ut tincidunt facilisis ipsum a ullamcorper.</p>
            <a href="#">READ MORE</a>
        </div>
        <div class="col-sm-3 service">
            <img src="./img/Screen-Shot-2022-12-11-at-2.30.56-PM.png" alt="">
            <h3>QUALITY GUARANTEE</h3>
            <p>Nunc non tortor tincidunt, rutrum nibh in, gravida leo. Sed pulvinar lectus vitae sem consequat, lobortis sodales neque tincidunt. Nullam vel erat urna. Ut tincidunt facilisis ipsum a ullamcorper.</p>
            <a href="#">READ MORE</a>
        </div>
    </div>
</div>




</head>

</html>