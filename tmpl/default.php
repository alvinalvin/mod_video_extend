<?php
//linea de seguridad
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
$doc = Factory::getDocument();
JHtml::_('jquery.framework');
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
                backgroundColor: '$color',
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
