<?php
class Card {
    public $suit;
    public $value;
    public $intValue;

    function __construct(string $suit, string $value, int $intValue) {
        $this->suit = $suit;
        $this->value = $value;
        $this->intValue = $intValue;
    }

    function getCardString() {
        return $this->suit. $this->value. "(". $this->intValue. ")";
    }
}

class Deck {
    public $deck;

    function __construct() {
        $this->deck = self::generateDeck();
    }

    static function generateDeck() {
        $newDeck = [];
        $suits = ["♣", "♦", "♥", "♠"];
        $values = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];

        for ($i = 0; $i < count($suits); $i++) {
            for ($j = 0; $j < count($values); $j++) {
                $newCard = new Card($suits[$i], $values[$j], $j + 1);
                $newDeck[] = $newCard;
            }
        }
        return $newDeck;
    }

    function printDeck() {
        echo "Displaying cards...". PHP_EOL;
        for ($i = 0; $i < count($this->deck); $i++) {
            echo $this->deck[$i]->getCardString(). PHP_EOL;
        }
    }
}

$deck1 = new Deck();
$deck1->printDeck();
