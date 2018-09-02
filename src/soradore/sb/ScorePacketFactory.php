<?php 

namespace soradore\sb;


use pocketmine\network\mcbe\protocol\types\ScorePacketEntry;
use pocketmine\utils\UUID;

class ScorePacketEntry {

	public static function createModifyEntry(UUID $uuid, string $objectiveName){
		$entry = new ScorePacketEntry();
		$entry->uuid = $uuid;
		$entry->objectiveName = $objectiveName;
		$entry->score = -1;

		return $entry;
	}

	public static function createResetEntry(UUID $uuid, string $objectiveName){
		self::createModifyEntry($uuid, $objectiveName);
	}
}
