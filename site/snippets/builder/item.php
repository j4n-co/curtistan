
<?php
  $itemStyles = '';
  ( $data->x()->isNotEmpty() ) ? $itemStyles .= 'top: '.$data->x().'%; ' : '';
  ( $data->y()->isNotEmpty() ) ? $itemStyles .= 'left: '.$data->y().'%; ' : '';
  ( $data->width()->isNotEmpty() ) ? $itemStyles .= 'width: '.$data->width().'px; ' : '';
  ( $data->height()->isNotEmpty() ) ? $itemStyles .= 'height: '.$data->height().'px; ' : '';

?>
<div class="project-item l__floating-box" style="<?= $itemStyles?>">
    <?= $data->text()->kirbytext() ?>
</div>