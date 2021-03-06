<?php
/**
 * Author: PeratX
 * Time: 2015/12/31 16:41
 * Copyright(C) 2011-2015 iTX Technologies LLC.
 * All rights reserved.
 *
 * OpenGenisys Project
 */
namespace pocketmine\level\sound;

use pocketmine\math\Vector3;
use pocketmine\network\protocol\LevelEventPacket;

class ButtonClickSound extends GenericSound{
	public function __construct(Vector3 $pos){
		parent::__construct($pos, LevelEventPacket::EVENT_SOUND_BUTTON_CLICK);
	}
}