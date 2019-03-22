<?php

namespace MineJump;

// 플러그인
use pocketmine\plugin\PluginBase;
// 이벤트
use pocketmine\event\Listener;
use pocketmine\item\Item;
// 이벤트 플레이어
use pocketmine\event\player\PlayerJumpEvent;

class MineJump extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
	}
	public function Jump(PlayerJumpEvent $event) {
		$player = $event->getPlayer ();
		$tag = "§e§l[ §fJump §e]§f";
		$x = ( int ) round ( $player->x - 0.5 );
		$y = ( int ) round ( $player->y - 1 );
		$z = ( int ) round ( $player->z - 0.5 );
		$b = $player->level->getBlockAt ( $x, $y, $z );
		$id = $b->getId ();
		$damage = $b->getDamage ();
		if ($id == 21 && $damage == 0 or $id == 56 && $damage == 0 or $id == 15 && $damage == 0) {
                  while (true) {
			if (mt_rand ( 0, 1 )) {
				$player->sendPopup ( $tag . " 당신은 조약돌을 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 4, 0, 1 ) );
			} else if (mt_rand ( 1, 100 ) <= 5) {
				$player->sendPopup ( $tag . " 당신은 금괴를 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 266, 0, 1 ) );
			} else if (mt_rand ( 1, 100 ) <= 6) {
				$player->sendPopup ( $tag . " 당신은 철괴을 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 265, 0, 1 ) );
			} else if (mt_rand ( 1, 100 ) <= 10) {
				$player->sendPopup ( $tag . " 당신은 석탄을 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 263, 0, 1 ) );
			} else if (mt_rand ( 1, 100 ) <= 2) {
				$player->sendPopup ( $tag . " 당신은 다이아를 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 264, 0, 1 ) );
			} else if (mt_rand ( 1, 100 ) <= 3) {
				$player->sendPopup ( $tag . " 당신은 에메랄드을 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 388, 0, 1 ) );
			} else if (mt_rand ( 1, 100 ) <= 6) {
				$player->sendPopup ( $tag . " 당신은 청금석을 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 351, 4, mt_rand ( 1, 4 ) ) );
			} else if (mt_rand ( 1, 100 ) <= 5) {
				$player->sendPopup ( $tag . " 당신은 레드스톤을 얻으셨습니다." );
				return $player->getInventory ()->addItem ( Item::get ( 331, 0, mt_rand ( 1, 4 ) ) );
                            }
			}
      		        return true;
		}
	}
}
