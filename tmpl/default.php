<?php
//linea de seguridad
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
$doc = Factory::getDocument();
JHtml::_('jquery.framework');
// validando logoPosition
  $logoPosit    = "logoPosition: [";
  $top          =  "210";
  $coma         =    ",";
  $right        =   "10";
  $coma2        =    ",";
  $comilla      =    "'";
  $auto         = "auto";
  $comilla2     =    "'";
  $coma3        =    ",";
  $comilla3     =    "'";
  $auto2        = "auto";
  $comilla4     =    "'";
  $cierre       =   "],";
  $logoPosition = $logoPosit.$top.$coma.$right.$coma2.$comilla .$auto.
  $comilla2.$coma3.$comilla3.$auto2.$comilla4.$cierre;

  // logohide
  if ($Logo_Hide ==0) {
		$hide = "true";
	}

  if ($Logo_Hide ==1) {
		$hide = "false";
	}

  // fin hide

  if ($video_youtube) {
    $logoPosition = $logoPosition;
  }
  else {
    $logoPosition = "";
  }

//validando  fields controles de videos mp4
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
<?php if ($video_youtube) {?>
  <source src="<?php echo $video_youtube;?>" type="video/youtube">
<?php } ?>
</video>
<!-- agregando jquery -->
<?php
$doc->addScriptDeclaration("
$(document).ready(function(){
                $('#$id').videoExtend({
                logo: '$ruta$logo',
                logoLink: '$url',
                logoAutoHide: $hide,
                backgroundColor: '$color',
                $logoPosition
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
