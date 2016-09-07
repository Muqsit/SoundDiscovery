<?php
namespace SoundDiscovery;
use pocketmine\level\sound\GenericSound;
use pocketmine\math\Vector3;

class StrangeSound extends GenericSound{

	public function __construct(Vector3 $pos, $pitch = 0){
		parent::__construct($pos, 1060, $pitch);// 1060 is the sound id.
	}

}
