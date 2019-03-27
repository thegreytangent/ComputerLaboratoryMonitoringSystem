<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php

if (Input::get('NotifType') === 'assistanceAlert')
{
  if  ( RequestAssistanceReply::countUnSeenNotif(Input::get('lab')) > 0 )
  {
    RequestAssistanceReply::updateSeenToSeen(Input::get('lab'));
  }
}




?>
