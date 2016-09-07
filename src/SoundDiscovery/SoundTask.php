<?php
namespace SoundDiscovery;
use pocketmine\scheduler\PluginTask;
use pocketmine\Player;

class SoundTask extends PluginTask{

	public function __construct(SoundDiscovery $plugin, Player $player){
	  $this->plugin = $plugin;
		$this->player = $player;
		parent::__construct($plugin);
	}
  
  public function onRun($currentTick){
    $this->player->getLevel()->addSound(new StrangeSound(new Vector3($this->player->x, $this->player->y, $this->player->z)));
  }
}
