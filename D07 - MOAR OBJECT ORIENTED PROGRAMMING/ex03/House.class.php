<?php
	class House
	{
		public function introduce() {
			// print — Output a string
			// printf — Output a formatted string
			printf("House %s of %s : \"%s\"\n", $this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto());
		}
	}
?>
