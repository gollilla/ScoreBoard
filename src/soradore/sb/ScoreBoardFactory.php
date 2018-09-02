<?php 

namespace soradore\sb;


use pocketmine\network\mcbe\protocol\types\ScoreboardIdentityPacketEntry;
use pocketmine\utils\UUID;

class ScoreBoardFactory {

	public static $id = 0;

	public static function createRegisterEntry(UUID $uuid){
		$entry = new ScoreboardIdentityPacketEntry();
		$entry->uuid = $uuid;
		$entry->scoreboardId = self::$id++;
		return $entry;
	}

	public static function createClearEntry(UUID $uuid, int $id){
		$entry = new ScoreboardIdentityPacketEntry();
		$entry->uuid = $uuid;
		$entry->scoreboardId = $id;

		return $entry;
	}
}