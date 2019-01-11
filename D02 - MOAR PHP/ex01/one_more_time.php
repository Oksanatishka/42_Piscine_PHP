#!/usr/bin/php
<?php
// date_default_timezone_set — Sets the default timezone used by all date/time functions in a script
// mktime                    — Get Unix timestamp for a date
// lcfirst                   — Make a string's first character lowercase
// date                      — Format a local time/date
// The unix time stamp is a way to track time as a running total of seconds. 

    if ($argc != 2)
        exit();

	function get_month($val)
	{
		if ($val == "Janvier" || $val == "janvier")
			return ("January");
		else if ($val == "Fevrier" || $val == "fevrier" || $val == "Février" || $val == "février")
			return ("February");
		else if ($val == "Mars" || $val == "mars")
			return ("March");
		else if ($val == "Avril" || $val == "avril")
			return ("April");
		else if ($val == "Mai" || $val == "mai")
			return ("May");
		else if ($val == "Juin" || $val == "juin")
			return ("June");
		else if ($val == "Juillet" || $val == "juillet")
			return ("July");
		else if ($val == "Aout" || $val == "aout" || $val == "Août" || $val == "août")
			return ("August");
		else if ($val == "Septembre" || $val == "septembre")
			return ("September");
		else if ($val == "Octobre" || $val == "octobre")
			return ("October");
		else if ($val == "Novembre" || $val == "novembre")
			return ("November");
        else if ($val == "Decembre" || $val == "decembre" || $val == "Décembre" || $val == "décembre")
        // else if ($val == "/[D,d][e,é]cembre)/") // not working
			return ("December");
    }
     
	function get_day($val)
	{
		
		if ($val == "Lundi" || $val == "lundi")
			return ("Monday");
		else if ($val == "Mardi" || $val == "mardi")
			return ("Tuesday");
		else if ($val == "Mercredi" || $val == "mercredi")
			return ("Wednesday");
		else if ($val == "Jeudi"  || $val == "jeudi")
			return ("Thursday");
		else if ($val == "Vendredi" || $val == "vendredi")
			return ("Friday");
		else if ($val == "Samedi" || $val == "samedi")
			return ("Saturday");
		else if ($val == "Dimanche" || $val == "dimanche")
			return ("Sunday");
	
	}
	if ($argc == 2)
	{
		date_default_timezone_set('Europe/Paris');
		$date = trim(preg_replace('/\s\s+/', ' ', $argv[1]));
		$date = explode(' ', $date);
		$day_of_week = get_day($date[0]);
		$day_number = $date[1];
		$month = get_month($date[2]);
		$year = $date[3];
        $hour = $date[4];
        // strtotime — Parse about any English textual datetime description into a Unix timestamp
        $date = strtotime("$day_number $month $year $hour");
        // l    A full textual representation of the day of the week    (e.g. Sunday through Saturday)
        // d	Day of the month, 2 digits with leading zeros	        (e.g. 01 to 31)
        // F	A full textual representation of a month, such as January or March	(e.g. January through December)
        // Y	A full numeric representation of a year, 4 digits	(e.g. 1999 or 2003) 
        // h	12-hour format of an hour with leading zeros	(e.g. 01 through 12)
        // i	Minutes with leading zeros	(e.g. 00 to 59)
        // s	Seconds, with leading zeros	(e.g. 00 through 59)

		if ("$day_of_week $day_number $month $year $hour" == date('l d F Y h:i:s', $date))
		{
			echo $date ."\n";
			exit();
		}
		echo "Wrong Format\n";	
    }
	
?>