<?php
	class Jaime extends Lannister
	{
		public function sleepWith($person) {
			if ($person instanceof Cersei) {
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			}
			// is_subclass_of — Checks if the object has this class as one of its parents or implements it
			else if (is_subclass_of($person, Lannister)) {
				print("Not even if I'm drunk !" . PHP_EOL);
			}
			else {
				print("Let's do this." . PHP_EOL);
			}
		}
	}
?>
