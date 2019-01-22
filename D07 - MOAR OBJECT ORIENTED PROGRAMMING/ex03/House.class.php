<?php
	class House
	{
		public function introduce() {
			// print — Output a string
			// printf — Output a formatted string
			// print('House ' . $this->getHouseName() . ' of ' . $this->getHouseSeat() . ' : ' . '"' . $this->getHouseMotto() . '"' . PHP_EOL);
			printf("House %s of %s : \"%s\"\n", $this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto());
		}
	}
?>
