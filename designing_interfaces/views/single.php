<?php
echo '<div class="row">';
 if ($content instanceof TrackableInterFace) {
    include __DIR__.'/track.php';
}
if ($content instanceof ShareableInterFace) {
    include __DIR__.'/share.php';
}
echo '</div>';
echo '<article>';
echo $content->current()->details;
echo '</article>';