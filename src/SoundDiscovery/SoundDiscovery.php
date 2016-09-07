<?php
namespace SoundDiscovery;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\{Command, CommandSender};
use pocketmine\math\Vector3;
class SoundDiscovery extends PluginBase implements Listener{

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($cmd->getName() === "sound"){
      if(!isset($args[0])){
        $sender->sendMessage("Playing strange sound.");
	$this->getServer()->getScheduler()->scheduleRepeatingTask(new SoundTask($this, $sender), 20);
        return;
      }
    }
  }
}
