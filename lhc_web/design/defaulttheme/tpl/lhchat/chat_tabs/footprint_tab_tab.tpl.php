<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/footprint_tab_tab_pre.tpl.php')); ?>
<?php if ($chat_chat_tabs_footprint_tab_tab_enabled == true && erLhcoreClassModelChatConfig::fetch('track_footprint')->current_value == 1) : ?>
<li role="presentation"><a href="#footprint-tab-chat-<?php echo $chat->id?>" aria-controls="footprint-tab-chat-<?php echo $chat->id?>" role="tab" data-toggle="tab" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Footprint')?>"><i class="icon-chart-line"></i></a></li>
<?php endif;?>