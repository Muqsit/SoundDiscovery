<?php
namespace SoundDiscovery;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\{Command, CommandSender};
class SoundDiscovery extends PluginBase implements Listener{

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($cmd->getName() === "sound"){
      if(!isset($args[0])){
        $sender->sendMessage("Usage: /sound <sound-id>");
        return;
      }
      if(isset($args[0])){
        if(is_numeric($args[0])){
          $this->getServer()->scheduleRepeatingTask(new SoundTask($this,$sender));
        }else{
          $sender->sendMessage("Error: sound-id must be numeric!");
        }
      }
    }
  }
}
