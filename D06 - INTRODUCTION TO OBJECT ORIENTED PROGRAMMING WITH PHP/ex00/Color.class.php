<?php

    class Color
    {
        // three public integer attributes red, green and blue - will be used to represent the components of a color.
        public $red;
        public $green;
        public $blue;
        // a static Boolean attribute called verbose - to activate the display of useful information for debugging and defence
        static $verbose = false;

        public function __construct($color)
        {
            // isset — Determine if a variable is set and is not NULL
            // intval — Get the integer value of a variable
            if (isset($color['red']) && isset($color['green']) && isset($color['blue'])) {
                $this->red = intval($color['red']);
                $this->green = intval($color['green']);
                $this->blue = intval($color['blue']);
            } else if (isset($color['rgb'])) {
                $rgb = intval($color["rgb"]);
                // int alpha = (rgb >>> 24) & 0xFF;
                // int red   = (rgb >>> 16) & 0xFF;
                // int green = (rgb >>>  8) & 0xFF;
                // int blue  = (rgb >>>  0) & 0xFF;

                // width + (256 * Blue) + (256 * 256 * Green) + (256 * 256 * 256 * Red)
                // 1 pixel line of RGB(0,0,255) (blue) would be 1 + (256 * 255) + (256 * 256 * 0) + (256 * 256 * 256 * 0) = 65281
                
                // red 
                // Hex Code (#RRGGBB) = #FF0000  
                // Decimal Code (R,G,B)	= rgb(255,0,0)
                
                $this->red = $rgb / 65281 % 256;
                $this->green = $rgb / 256 % 256;
                $this->blue = $rgb % 256;
            }
            if (Self::$verbose)
                printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
        }

        function __destruct()
        {
            if (Self::$verbose)
                printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
        }
        // to add the the components of the current instance to the components of another instance argument.
        public function add($Color)
        {
            return (new Color(array('red' => $this->red + $Color->red, 'green' => $this->green + $Color->green, 'blue' => $this->blue + $Color->blue)));
        }
        // to substract the com- ponents of the current instance to the components of another instance argument.
        public function sub($Color)
        {
            return (new Color(array('red' => $this->red - $Color->red, 'green' => $this->green - $Color->green, 'blue' => $this->blue - $Color->blue)));
        }
        // to multiply the com- ponents of the current instance to the components of of another instance argument.
        public function mult($mult)
        {
            return (new Color(array('red' => $this->red * $mult, 'green' => $this->green * $mult, 'blue' => $this->blue * $mult)));
        }

        function __toString()
        {
            // vsprintf — Return a formatted string
            return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
        }
        
        //  a static method called doc returns the documentation in a string.
        public static function doc()
        {
            $read = fopen("Color.doc.txt", 'r');
            echo "\n";
            while ($read && !feof($read))
                echo fgets($read);
            echo "\n";
        }

    }
