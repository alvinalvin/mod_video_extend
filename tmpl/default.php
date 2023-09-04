
<?php
//linea de seguridad
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
$doc = Factory::getDocument();
JHtml::_('jquery.framework');
//recibiendo parametros
$txtmarker1  = $params->get("txto1");
$txtmarker2  = $params->get("txto2");
$txtmarker3  = $params->get("txto3");
$txtmarker4  = $params->get("txto4");
$widthvideo  = $params->get("anchovideo");
$heightvideo = $params->get("largovideo");
$widthlogo   = $params->get("anchologo");
$heightlogo  = $params->get("largologo");
$time1       = $params->get("tiempo1");
$time2       = $params->get("tiempo2");
$time3       = $params->get("tiempo3");
$time5       = $params->get("tiempo5");
$url         = $params->get("urllogo");
$logo        = $params->get("logo");
$video       = $params->get("video");
$poster      = $params->get("poster");
$muted       = $params->get("Muted");
$autoplay    = $params->get("autoplay");
$loop        = $params->get("loop");
$preload     = $params->get("preload");
$id          = $params->get("id");
//validando  fields controles de videos
$controls = "controls";

if ($preload) {
  $PreloadVideo = "Preload";
}
else {
  $PreloadVideo = "";
}

if ($loop) {
  $loopVideo = "loop";
    } else {
  $loopVideo = "";
}

if ($autoplay) {
  $autoplayVideo = "autoplay";
    } else {
  $autoplayVideo = "";
}

if ($muted) {
  $mutedVideo = "muted";
    } else {
  $mutedVideo = "";
}
$ruta = JURI::base()."images"."/";
?>
<!-- video -->
<video id="<?php echo $id; ?>" width="<?php echo $widthvideo; ?>" height="<?php echo $heightvideo; ?>"
<?php echo $controls." ".$loopVideo." ".$autoplayVideo." ".$mutedVideo;?> <?php echo ""; ?>
<?php echo $PreloadVideo;?> poster="<?php echo $poster; ?>">
<?php if ($video) {?>
   <source src="<?php echo $ruta.$video; ?>" type="video/mp4">
<?php } ?>
</video>
<!-- agregando jquery -->
<?php
$doc->addScriptDeclaration("
$(document).ready(function(){

            $('#$id').videoExtend({
                logo: '$ruta$logo',
                logoLink: ' $url',
                logoSize: [$widthlogo,$heightlogo ],
                markers: [
                    {
                        time:$time1,
                        text:'$txtmarker1'
                    },
                    {
                        time: $time2,
                        text: '$txtmarker2'
                    },
                    {
                        time: $time3,
                        text: '$txtmarker3'
                    },
                    {
                        time: $time5,
                        text: '$txtmarker4'
                    }
                ]
            });

          });

");
?>
