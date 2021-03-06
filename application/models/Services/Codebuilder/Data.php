<?php

/**
 * Name:
 * Location:
 *
 * Description for class (if any)...
 *
 * @author     Jessie Green <jessie.winslows@gmail.com>
 * @copyright  2012 Winslows inc.
 */
namespace Services\Codebuilder;

class Data 
{   
    public $location_types_models = array(
	    "ce" => array(
		"MC" => array(
		    "RA",
		    "BA",
		    "VA"
		)
	    ),
	    "ne" => array(
		"MC" => array(
		    "RS",
		    "BS",
		    "VS"
		)
	    ),
	    "nt" => array(
		"MC" => array(
		    "RA",
		    "BA",
		    "VA"
		), 
		"WF"
	    ),
	    "mi" => array(
		"MC" => array(
		    "RX",
		    "BX",
		    "VX"
		)
	    ),
	    "fl" => array(
		"MC" => array(
		    "RW",
		    "BW",
		    "VW"
		)
	    )
	);
    
    public $model_sizes_prices = array(
	    "MC" => 
		array(
		    "RA" => array(
			    "12X21" => 595,
			    "12X26" => 895,
			    "12X31" => 1095,
			    "12X36" => 1295,
			    "12X41" => 1495,
			    "18X21" => 695,
			    "18X26" => 995,
			    "18X31" => 1195,
			    "18X36" => 1395,
			    "18X41" => 1695,
			    "20X21" => 995,
			    "20X26" => 1195,
			    "20X31" => 1495,
			    "20X36" => 1795,
			    "20X41" => 2095,
			    "22X21" => 1195,
			    "22X26" => 1495,
			    "22X31" => 1795,
			    "22X36" => 2095,
			    "22X41" => 2495,
			    "24X21" => 1295,
			    "24X26" => 1595,
			    "24X31" => 1995,
			    "24X36" => 2295,
			    "24X41" => 2695
		    ),
		    "BA" => array(
			    "12X21" => 695,
			    "12X26" => 995,
			    "12X31" => 1195,
			    "12X36" => 1395,
			    "12X41" => 1695,
			    "18X21" => 795,
			    "18X26" => 1095,
			    "18X31" => 1395,
			    "18X36" => 1595,
			    "18X41" => 1895,
			    "20X21" => 1095,
			    "20X26" => 1295,
			    "20X31" => 1595,
			    "20X36" => 1895,
			    "20X41" => 2295,
			    "22X21" => 1295,
			    "22X26" => 1595,
			    "22X31" => 1895,
			    "22X36" => 2195,
			    "22X41" => 2695,
			    "24X21" => 1495,
			    "24X26" => 1895,
			    "24X31" => 2195,
			    "24X36" => 2595,
			    "24X41" => 3095
		    ),
		    "VA" => array(
			    "12X21" => 995,
			    "12X26" => 1395,
			    "12X31" => 1695,
			    "12X36" => 1995,
			    "12X41" => 2295,
			    "18X21" => 1095,
			    "18X26" => 1495,
			    "18X31" => 1795,
			    "18X36" => 2095,
			    "18X41" => 2495,
			    "20X21" => 1295,
			    "20X26" => 1695,
			    "20X31" => 1995,
			    "20X36" => 2395,
			    "20X41" => 2695,
			    "22X21" => 1595,
			    "22X26" => 1995,
			    "22X31" => 2395,
			    "22X36" => 2795,
			    "22X41" => 3295,
			    "24X21" => 1695,
			    "24X26" => 2095,
			    "24X31" => 2595,
			    "24X36" => 2995,
			    "24X41" => 3495
		    ),
		    "RW" => array(
			    "12X21" => 695,
			    "12X26" => 995,
			    "12X31" => 1295,
			    "12X36" => 1495,
			    "12X41" => 1695,
			    "18X21" => 795,
			    "18X26" => 1195,
			    "18X31" => 1395,
			    "18X36" => 1595,
			    "18X41" => 1895,
			    "20X21" => 1095,
			    "20X26" => 1395,
			    "20X31" => 1695,
			    "20X36" => 1995,
			    "20X41" => 2295,
			    "22X21" => 1295,
			    "22X26" => 1695,
			    "22X31" => 1995,
			    "22X36" => 2295,
			    "22X41" => 2695,
			    "24X21" => 1495,
			    "24X26" => 1895,
			    "24X31" => 2295,
			    "24X36" => 2695,
			    "24X41" => 3095
		    ),
		    "BW" => array(
			    "12X21" => 795,
			    "12X26" => 1095,
			    "12X31" => 1395,
			    "12X36" => 1595,
			    "12X41" => 1895,
			    "18X21" => 895,
			    "18X26" => 1295,
			    "18X31" => 1595,
			    "18X36" => 1795,
			    "18X41" => 2095,
			    "20X21" => 1195,
			    "20X26" => 1495,
			    "20X31" => 1795,
			    "20X36" => 2095,
			    "20X41" => 2495,
			    "22X21" => 1395,
			    "22X26" => 1795,
			    "22X31" => 2095,
			    "22X36" => 2495,
			    "22X41" => 2895,
			    "24X21" => 1595,
			    "24X26" => 1995,
			    "24X31" => 2395,
			    "24X36" => 2795,
			    "24X41" => 3295
		    ),
		    "VW" => array(
			    "12X21" => 1095,
			    "12X26" => 1495,
			    "12X31" => 1895,
			    "12X36" => 2195,
			    "12X41" => 2495,
			    "18X21" => 1195,
			    "18X26" => 1695,
			    "18X31" => 1995,
			    "18X36" => 2295,
			    "18X41" => 2695,
			    "20X21" => 1495,
			    "20X26" => 1895,
			    "20X31" => 2295,
			    "20X36" => 2695,
			    "20X41" => 3095,
			    "22X21" => 1695,
			    "22X26" => 2195,
			    "22X31" => 2595,
			    "22X36" => 2995,
			    "22X41" => 3495,
			    "24X21" => 1895,
			    "24X26" => 2395,
			    "24X31" => 2795,
			    "24X36" => 3395,
			    "24X41" => 3895
		    ),
		    "RS" => array(
			    "12X21" => 695,
			    "12X26" => 995,
			    "12X31" => 1295,
			    "12X36" => 1495,
			    "12X41" => 1695,
			    "18X21" => 795,
			    "18X26" => 1195,
			    "18X31" => 1395,
			    "18X36" => 1595,
			    "18X41" => 1895,
			    "20X21" => 1095,
			    "20X26" => 1395,
			    "20X31" => 1695,
			    "20X36" => 1995,
			    "20X41" => 2295,
			    "22X21" => 1295,
			    "22X26" => 1695,
			    "22X31" => 1995,
			    "22X36" => 2295,
			    "22X41" => 2695,
			    "24X21" => 1495,
			    "24X26" => 1895,
			    "24X31" => 2295,
			    "24X36" => 2695,
			    "24X41" => 3095
		    ),
		    "BS" => array(
			    "12X21" => 795,
			    "12X26" => 1095,
			    "12X31" => 1395,
			    "12X36" => 1595,
			    "12X41" => 1895,
			    "18X21" => 895,
			    "18X26" => 1295,
			    "18X31" => 1595,
			    "18X36" => 1795,
			    "18X41" => 2095,
			    "20X21" => 1195,
			    "20X26" => 1495,
			    "20X31" => 1795,
			    "20X36" => 2095,
			    "20X41" => 2495,
			    "22X21" => 1395,
			    "22X26" => 1795,
			    "22X31" => 2095,
			    "22X36" => 2495,
			    "22X41" => 2895,
			    "24X21" => 1595,
			    "24X26" => 1995,
			    "24X31" => 2395,
			    "24X36" => 2795,
			    "24X41" => 3295
		    ),
		    "VS" => array(
			    "12X21" => 1095,
			    "12X26" => 1495,
			    "12X31" => 1895,
			    "12X36" => 2195,
			    "12X41" => 2495,
			    "18X21" => 1195,
			    "18X26" => 1695,
			    "18X31" => 1995,
			    "18X36" => 2295,
			    "18X41" => 2695,
			    "20X21" => 1495,
			    "20X26" => 1895,
			    "20X31" => 2295,
			    "20X36" => 2695,
			    "20X41" => 3095,
			    "22X21" => 1695,
			    "22X26" => 2195,
			    "22X31" => 2595,
			    "22X36" => 2995,
			    "22X41" => 3495,
			    "24X21" => 1895,
			    "24X26" => 2395,
			    "24X31" => 2795,
			    "24X36" => 3395,
			    "24X41" => 3895
		    ),
		    "RX" => array(
			    "12X21" => 995,
			    "12X26" => 1295,
			    "12X31" => 1595,
			    "12X36" => 1895,
			    "12X41" => 2095,
			    "18X21" => 1095,
			    "18X26" => 1395,
			    "18X31" => 1695,
			    "18X36" => 1995,
			    "18X41" => 2295,
			    "20X21" => 1495,
			    "20X26" => 1895,
			    "20X31" => 2295,
			    "20X36" => 2695,
			    "20X41" => 3095,
			    "22X21" => 1895,
			    "22X26" => 2395,
			    "22X31" => 2895,
			    "22X36" => 3395,
			    "22X41" => 3895,
			    "24X21" => 2095,
			    "24X26" => 2595,
			    "24X31" => 3195,
			    "24X36" => 3795,
			    "24X41" => 4295
		    ),
		    "BX" => array(
			    "12X21" => 1095,
			    "12X26" => 1395,
			    "12X31" => 1695,
			    "12X36" => 1995,
			    "12X41" => 2295,
			    "18X21" => 1195,
			    "18X26" => 1495,
			    "18X31" => 1795,
			    "18X36" => 2095,
			    "18X41" => 2495,
			    "20X21" => 1595,
			    "20X26" => 1995,
			    "20X31" => 2395,
			    "20X36" => 2795,
			    "20X41" => 3295,
			    "22X21" => 1995,
			    "22X26" => 2495,
			    "22X31" => 2995,
			    "22X36" => 3495,
			    "22X41" => 4095,
			    "24X21" => 2195,
			    "24X26" => 2695,
			    "24X31" => 3295,
			    "24X36" => 3895,
			    "24X41" => 4495
		    ),
		    "VX" => array(
			    "12X21" => 1395,
			    "12X26" => 1695,
			    "12X31" => 2095,
			    "12X36" => 2495,
			    "12X41" => 2895,
			    "18X21" => 1495,
			    "18X26" => 1895,
			    "18X31" => 2295,
			    "18X36" => 2695,
			    "18X41" => 3095,
			    "20X21" => 1895,
			    "20X26" => 2395,
			    "20X31" => 2895,
			    "20X36" => 3395,
			    "20X41" => 3895,
			    "22X21" => 2295,
			    "22X26" => 2895,
			    "22X31" => 3495,
			    "22X36" => 4095,
			    "22X41" => 4695,
			    "24X21" => 2495,
			    "24X26" => 3095,
			    "24X31" => 3695,
			    "24X36" => 4395,
			    "24X41" => 5095
		    ),
		)
	    );
    
    public $framegauge_prices = array(
		    "21" => 100,
		    "26" => 125,
		    "31" => 150,
		    "36" => 175,
		    "41" => 200
		);
    
    public $walls_prices = array(
		"location" => array(
		    "end" => array(
			"type" => array(
			    "gable"	    => array(
				"certified" => array(
				    "noncertified"  => array(
					"orientation"   => array(
					    "horizontal"	=> 150,
					    "vertical"	=> 200
					)
				    ),
				    "certified"	=> array(
					"orientation"   => array(
					    "horizontal"	=> 175,
					    "vertical"	=> 225
					)
				    )
				)
			    ),
			    "closed"    => array(
				"certified" => array(
				    "noncertified"  => array(
					"orientation" => array(
					    "horizontal" => array(
						"width"   => array(
						    "12"	=> array(
							"leg_height" => array(
							    "5"  => 350,
							    "6"  => 375,
							    "7"  => 425,
							    "8"  => 475,
							    "9"  => 500,
							    "10" => 575,
							    "11" => 650,
							    "12" => 725
							)
						    ),
						    "18"	=> array(
							"leg_height" => array(
							    "5"  => 420,
							    "6"  => 450,
							    "7"  => 505,
							    "8"  => 560,
							    "9"  => 590,
							    "10" => 680,
							    "11" => 770,
							    "12" => 860
							)
						    ),
						    "20"	=> array(
							"leg_height" => array(
							    "5"  => 490,
							    "6"  => 525,
							    "7"  => 585,
							    "8"  => 645,
							    "9"  => 680,
							    "10" => 785,
							    "11" => 890,
							    "12" => 995
							)
						    ),
						    "22"	=> array(
							"leg_height" => array(
							    "5"  => 560,
							    "6"  => 600,
							    "7"  => 665,
							    "8"  => 730,
							    "9"  => 770,
							    "10" => 890,
							    "11" => 1010,
							    "12" => 1130
							)
						    ),
						    "24"	=> array(
							"leg_height" => array(
							    "5"  => 630,
							    "6"  => 675,
							    "7"  => 745,
							    "8"  => 815,
							    "9"  => 860,
							    "10" => 995,
							    "11" => 1130,
							    "12" => 1265
							)
						    ),
						)
					    ),
					    "vertical" => array(
						"width"   => array(
						    "12"	=> array( //Horizontal price + 100
							"leg_height" => array(
							    "5"  => 450,
							    "6"  => 475,
							    "7"  => 525,
							    "8"  => 575,
							    "9"  => 600,
							    "10" => 675,
							    "11" => 750,
							    "12" => 825
							)
						    ),
						    "18"	=> array( //Horizontal price + 200
							"leg_height" => array(
							    "5"  => 620,
							    "6"  => 650,
							    "7"  => 705,
							    "8"  => 760,
							    "9"  => 790,
							    "10" => 880,
							    "11" => 970,
							    "12" => 1060
							)
						    ),
						    "20"	=> array( //Horizontal price + 225
							"leg_height" => array(
							    "5"  => 715,
							    "6"  => 750,
							    "7"  => 810,
							    "8"  => 870,
							    "9"  => 905,
							    "10" => 1010,
							    "11" => 1115,
							    "12" => 1220
							)
						    ),
						    "22"	=> array( //Horizontal price + 250
							"leg_height" => array(
							    "5"  => 810,
							    "6"  => 850,
							    "7"  => 915,
							    "8"  => 980,
							    "9"  => 1020,
							    "10" => 1140,
							    "11" => 1260,
							    "12" => 1380
							)
						    ),
						    "24"	=> array( //Horizontal price + 275
							"leg_height" => array(
							    "5"  => 905,
							    "6"  => 950,
							    "7"  => 1020,
							    "8"  => 1090,
							    "9"  => 1135,
							    "10" => 1270,
							    "11" => 1405,
							    "12" => 1540
							)
						    ),
						)
					    ),
					)
				    ),
				    "certified"  => array(
					"orientation" => array(
					    "horizontal" => array(
						"width"   => array(
						    "12"	=> array(
							"leg_height" => array(
							    "5"  => 400,
							    "6"  => 425,
							    "7"  => 475,
							    "8"  => 525,
							    "9"  => 550,
							    "10" => 625,
							    "11" => 700,
							    "12" => 775 
							)
						    ),
						    "18"	=> array(
							"leg_height" => array(
							    "5"  => 510,
							    "6"  => 540,
							    "7"  => 595,
							    "8"  => 650,
							    "9"  => 680,
							    "10" => 760,
							    "11" => 840,
							    "12" => 920 
							)
						    ),
						    "20"	=> array(
							"leg_height" => array(
							    "5"  => 620,
							    "6"  => 655,
							    "7"  => 715,
							    "8"  => 775,
							    "9"  => 810,
							    "10" => 895,
							    "11" => 980,
							    "12" => 1065 
							)
						    ),
						    "22"	=> array(
							"leg_height" => array(
							    "5"  => 730,
							    "6"  => 770,
							    "7"  => 835,
							    "8"  => 900,
							    "9"  => 940,
							    "10" => 1030,
							    "11" => 1120,
							    "12" => 1210
							)
						    ),
						    "24"	=> array(
							"leg_height" => array(
							    "5"  => 840,
							    "6"  => 885,
							    "7"  => 955,
							    "8"  => 1025,
							    "9"  => 1070,
							    "10" => 1185,
							    "11" => 1260,
							    "12" => 1355
							)
						    ),
						)
					    ),
					    "vertical" => array(
						"width"   => array(
						    "12"	=> array( //Horizontal price + 100
							"leg_height" => array(
							    "5"  => 500,
							    "6"  => 525,
							    "7"  => 575,
							    "8"  => 625,
							    "9"  => 650,
							    "10" => 725,
							    "11" => 800,
							    "12" => 875 
							)
						    ),
						    "18"	=> array( //Horizontal price + 200
							"leg_height" => array(
							    "5"  => 710,
							    "6"  => 740,
							    "7"  => 795,
							    "8"  => 850,
							    "9"  => 880,
							    "10" => 960,
							    "11" => 1040,
							    "12" => 1120 
							)
						    ),
						    "20"	=> array( //Horizontal price + 225
							"leg_height" => array(
							    "5"  => 845,
							    "6"  => 880,
							    "7"  => 940,
							    "8"  => 1000,
							    "9"  => 1035,
							    "10" => 1120,
							    "11" => 1205,
							    "12" => 1290 
							)
						    ),
						    "22"	=> array( //Horizontal price + 250
							"leg_height" => array(
							    "5"  => 980,
							    "6"  => 1020,
							    "7"  => 1085,
							    "8"  => 1150,
							    "9"  => 1190,
							    "10" => 1280,
							    "11" => 1370,
							    "12" => 1460
							)
						    ),
						    "24"	=> array( //Horizontal price + 275
							"leg_height" => array(
							    "5"  => 1115,
							    "6"  => 1160,
							    "7"  => 1230,
							    "8"  => 1300,
							    "9"  => 1345,
							    "10" => 1460,
							    "11" => 1535,
							    "12" => 1630
							)
						    ),
						)
					    ),
					)
				    ),
				)
			    )
			)
		    ),
		    "side" => array(
			"orientation" => array(
			    "horizontal" => array(
				"length"   => array(
				    "21"	=> array(
					"leg_height" => array(
					    "5"  => 137.50,
					    "6"  => 150,
					    "7"  => 175,
					    "8"  => 212.50,
					    "9"  => 225,
					    "10" => 250,
					    "11" => 287.50,
					    "12" => 300
					)
				    ),
				    "26"	=> array(
					"leg_height" => array(
					    "5"  => 172.50,
					    "6"  => 187.50,
					    "7"  => 217.50,
					    "8"  => 260,
					    "9"  => 277.50,
					    "10" => 310,
					    "11" => 355,
					    "12" => 375
					)
				    ),
				    "31"	=> array(
					"leg_height" => array(
					    "5"  => 207.50,
					    "6"  => 225,
					    "7"  => 260,
					    "8"  => 307.50,
					    "9"  => 330,
					    "10" => 370,
					    "11" => 422.50,
					    "12" => 450
					)
				    ),
				    "36"	=> array(
					"leg_height" => array(
					    "5"  => 242.50,
					    "6"  => 262.50,
					    "7"  => 302.50,
					    "8"  => 355,
					    "9"  => 382.50,
					    "10" => 430,
					    "11" => 490,
					    "12" => 525
					)
				    ),
				    "41"	=> array(
					"leg_height" => array(
					    "5"  => 275,
					    "6"  => 300,
					    "7"  => 345,
					    "8"  => 402.50,
					    "9"  => 435,
					    "10" => 490,
					    "11" => 557.50,
					    "12" => 600
					)
				    ),
				)
			    ),
			    "vertical" => array(
				"length"   => array(
				    "21"	=> array( //Horizontal price + 100
					"leg_height" => array(
					    "5"  => 237.50,
					    "6"  => 250,
					    "7"  => 275,
					    "8"  => 312.50,
					    "9"  => 325,
					    "10" => 350,
					    "11" => 387.50,
					    "12" => 400
					)
				    ),
				    "26"	=> array( //Horizontal price + 125
					"leg_height" => array(
					    "5"  => 297.50,
					    "6"  => 312.50,
					    "7"  => 342.50,
					    "8"  => 385,
					    "9"  => 402.50,
					    "10" => 435,
					    "11" => 480,
					    "12" => 500
					)
				    ),
				    "31"	=> array( //Horizontal price + 150
					"leg_height" => array(
					    "5"  => 357.50,
					    "6"  => 375,
					    "7"  => 410,
					    "8"  => 457.50,
					    "9"  => 480,
					    "10" => 520,
					    "11" => 572.50,
					    "12" => 600
					)
				    ),
				    "36"	=> array( //Horizontal price + 175
					"leg_height" => array(
					    "5"  => 417.50,
					    "6"  => 437.50,
					    "7"  => 477.50,
					    "8"  => 530,
					    "9"  => 557.50,
					    "10" => 605,
					    "11" => 665,
					    "12" => 750
					)
				    ),
				    "41"	=> array( //Horizontal price + 200
					"leg_height" => array(
					    "5"  => 475,
					    "6"  => 500,
					    "7"  => 545,
					    "8"  => 602.50,
					    "9"  => 635,
					    "10" => 690,
					    "11" => 757.50,
					    "12" => 800
					)
				    ),
				)
			    ),
			)
		    )
		)
	    );
    
    private $_leg_height_prices_standard = 
			    array(
				"leg_height" => array(
					"5"	=> array(
					    "length" => array(
						"21" => 0,
						"26" => 0,
						"31" => 0,
						"36" => 0,
						"41" => 0
					    )
					),
					"6"	=> array(
					    "length" => array(
						"21" => 50,
						"26" => 60,
						"31" => 75,
						"36" => 85,
						"41" => 100
					    )
					),
					"7"	=> array(
					    "length" => array(
						"21" => 100,
						"26" => 120,
						"31" => 150,
						"36" => 170,
						"41" => 200
					    )
					),
					"8"	=> array(
					    "length" => array(
						"21" => 150,
						"26" => 180,
						"31" => 225,
						"36" => 255,
						"41" => 300
					    )
					),
					"9"	=> array(
					    "length" => array(
						"21" => 200,
						"26" => 240,
						"31" => 300,
						"36" => 340,
						"41" => 400
					    )
					),
					"10"	=> array(
					    "length" => array(
						"21" => 250,
						"26" => 300,
						"31" => 375,
						"36" => 425,
						"41" => 500
					    )
					),
					"11"	=> array(
					    "length" => array(
						"21" => 300,
						"26" => 360,
						"31" => 450,
						"36" => 510,
						"41" => 600
					    )
					),
					"12"	=> array(
					    "length" => array(
						"21" => 350,
						"26" => 420,
						"31" => 525,
						"36" => 595,
						"41" => 700
					    )
					),
				)
			    );
    
    private $_leg_height_prices_aframe = 
			    array(
				"leg_height" => array(
					"6"	=> array(
					    "length" => array(
						"21" => 0,
						"26" => 0,
						"31" => 0,
						"36" => 0,
						"41" => 0
					    )
					),
					"7"	=> array(
					    "length" => array(
						"21" => 50,
						"26" => 60,
						"31" => 75,
						"36" => 85,
						"41" => 100
					    )
					),
					"8"	=> array(
					    "length" => array(
						"21" => 100,
						"26" => 120,
						"31" => 150,
						"36" => 170,
						"41" => 200
					    )
					),
					"9"	=> array(
					    "length" => array(
						"21" => 150,
						"26" => 180,
						"31" => 225,
						"36" => 255,
						"41" => 300
					    )
					),
					"10"	=> array(
					    "length" => array(
						"21" => 200,
						"26" => 240,
						"31" => 300,
						"36" => 340,
						"41" => 400
					    )
					),
					"11"	=> array(
					    "length" => array(
						"21" => 250,
						"26" => 300,
						"31" => 375,
						"36" => 425,
						"41" => 500
					    )
					),
					"12"	=> array(
					    "length" => array(
						"21" => 300,
						"26" => 360,
						"31" => 450,
						"36" => 510,
						"41" => 600
					    )
					)
				)
			    );
    
    private $_leg_height_prices_snow_standard = 
			    array(
				"leg_height" => array(
					"5"	=> array(
					    "length" => array(
						"21" => 0,
						"26" => 0,
						"31" => 0,
						"36" => 0,
						"41" => 0
					    )
					),
					"6"	=> array(
					    "length" => array(
						"21" => 60,
						"26" => 70,
						"31" => 80,
						"36" => 90,
						"41" => 100
					    )
					),
					"7"	=> array(
					    "length" => array(
						"21" => 120,
						"26" => 140,
						"31" => 160,
						"36" => 180,
						"41" => 200
					    )
					),
					"8"	=> array(
					    "length" => array(
						"21" => 180,
						"26" => 210,
						"31" => 240,
						"36" => 270,
						"41" => 300
					    )
					),
					"9"	=> array(
					    "length" => array(
						"21" => 240,
						"26" => 280,
						"31" => 320,
						"36" => 360,
						"41" => 400
					    )
					),
					"10"	=> array(
					    "length" => array(
						"21" => 300,
						"26" => 350,
						"31" => 400,
						"36" => 450,
						"41" => 500
					    )
					),
					"11"	=> array(
					    "length" => array(
						"21" => 360,
						"26" => 420,
						"31" => 480,
						"36" => 540,
						"41" => 600
					    )
					),
					"12"	=> array(
					    "length" => array(
						"21" => 420,
						"26" => 490,
						"31" => 560,
						"36" => 630,
						"41" => 700
					    )
					),
				)
			    );
    
    private $_leg_height_prices_snow_aframe = 
			    array(
				"leg_height" => array(
					"6"	=> array(
					    "length" => array(
						"21" => 0,
						"26" => 0,
						"31" => 0,
						"36" => 0,
						"41" => 0
					    )
					),
					"7"	=> array(
					    "length" => array(
						"21" => 60,
						"26" => 70,
						"31" => 80,
						"36" => 90,
						"41" => 100
					    )
					),
					"8"	=> array(
					    "length" => array(
						"21" => 120,
						"26" => 140,
						"31" => 160,
						"36" => 180,
						"41" => 200
					    )
					),
					"9"	=> array(
					    "length" => array(
						"21" => 180,
						"26" => 210,
						"31" => 240,
						"36" => 270,
						"41" => 300
					    )
					),
					"10"	=> array(
					    "length" => array(
						"21" => 240,
						"26" => 280,
						"31" => 320,
						"36" => 360,
						"41" => 400
					    )
					),
					"11"	=> array(
					    "length" => array(
						"21" => 300,
						"26" => 350,
						"31" => 400,
						"36" => 450,
						"41" => 500
					    )
					),
					"12"	=> array(
					    "length" => array(
						"21" => 360,
						"26" => 420,
						"31" => 480,
						"36" => 540,
						"41" => 600
					    )
					)
				)
			    );
    
    public $doors_array = array(
	"type" => array(
	    "MC" => array(
		"certified" => array(
		    "uncertified" => array(
			"door_type" => array(
			    "OS" => array(
				"32X72" => 175,
				"36X80" => 200
			    ),
			    "RU" => array(
				"72X72"	  => 250,
				"96X96"	  => 300,
				"108X96"  => 350,
				"120X96"  => 400,
				"120X120" => 450
			    )
			)
		    ),
		    "certified" => array(
			"door_type" => array(
			    "OS" => array(
				"32X72" => 275,
				"36X80" => 300
			    ),
			    "RU" => array(
				"72X72"	  => 450,
				"96X96"	  => 500,
				"108X96"  => 700,
				"120X96"  => 750,
				"120X120" => 800
			    )
			)
		    ),
		)
	    ),	    
	)
    );
    
    public $windows_array = array(
	"type" => array(
	    "MC" => array(
		"certified" => array(
		    "uncertified" => array(
			"window_type" => array(
			    "SA" => array(
				"30X30" => 150
			    ),
			)
		    ),
		    "certified" => array(
			"window_type" => array(
			    "SA" => array(
				"30X30" => 150
			    )
			)
		    ),
		)
	    ),	    
	)
    );
    
    public function __construct() {
	
    }
    
    public function getModelLegHeightPricesArray()
    {
	return array(
	    "type" => array(
		"MC" => array(
		    "model" => array(
			    "RA" => $this->_leg_height_prices_standard,
			    "BA" => $this->_leg_height_prices_aframe,
			    "VA" => $this->_leg_height_prices_aframe,
			    "RW" => $this->_leg_height_prices_standard,
			    "BW" => $this->_leg_height_prices_aframe,
			    "VW" => $this->_leg_height_prices_aframe,
			    "RS" => $this->_leg_height_prices_standard,
			    "BS" => $this->_leg_height_prices_aframe,
			    "VS" => $this->_leg_height_prices_aframe,
			    "RX" => $this->_leg_height_prices_snow_standard,
			    "BX" => $this->_leg_height_prices_snow_aframe,
			    "VX" => $this->_leg_height_prices_snow_aframe
			)
		    )
		)
	    );
    }
}
?>