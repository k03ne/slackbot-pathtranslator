<?php

header("Content-type: application/json; charset=utf-8");

$valid_tokens = [
    "HERE_GOES_YOUR_TOKEN", // key 1
];

$filterOptions = [ // ARRAY OF FILTER OPTIONS, WINDOWS DRIVE TRANSLATED TO NAMES OF THE MAC DRIVES
    "P:" => "KUNDEN",
    "N:" => "INTERN",
    "Q:" => "BILDER",
    "S:" => "TRANSFER",
    "L:" => "###",
    "O:" => "###",
    "M:" => "###",
	  "R:" => "###",
	  "T:" => "###",
	  "Z:" => "###",
];

$error = [ // IF NO CORRECT PATH IS PASSED
    "404 - Die Sauerei bring ich nicht in Ordnung!",
    "File not found - Der Link war mir zu wild! Bitte nochmal.",
    "Komm schon, das kann ich doch nicht lesen!",
    "Ich glaub da ist ein Fehler in deinem Link. Ganz sicher sogar!",
    "Ohje, die Angabe war mir zu wirr. Prüf doch deinen Link nochmal!"
];

$noPath = [ // IF NO PATH IS FOUND
    "Ohne Pfad nichts los, Muchacho...",
    "Von nichts kommt nichts!",
    "...du hast den Pfad vergessen!",
    "Heiderzacken, da ist mir doch glatt der Pfad abhanden gekommen. Oder war da überhaupt einer?",
    "Ich könnte dir auch einen Witz erzählen, aber gib mir lieber einen Pfad zum übersetzen!"
];

$backslash = '\\\\';

$helpnote = [ 
    "Ich seh dir die Verzweiflung doch an, nutz die Hilfe, Mensch! */path help*",
    "...da stellt sich aber jemand wieder an... */pfad help*",
    "Du weißt es ja eh besser... aber versuch doch mal */path help*",
];

$help = '{ // START OF HELP INFO
    "response_type": "ephemeral",
	"blocks": [
		{
			"type": "header",
			"text": {
				"type": "plain_text",
				"text": "Beep Boop... hust... H..all..o, HALLO!",
				"emoji": true
			}
		},
		{
			"type": "section",
			"text": {
				"type": "plain_text",
				"text": "Oh herrje, entschuldige mich, ich mein:",
				"emoji": true
			}
		},
		{
			"type": "header",
			"text": {
				"type": "plain_text",
				"text": "Hallo Erdling,",
				"emoji": true
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "Du darfst mich *Pathy* nennen, ich bin dein intergalaktischer *Übersetzer* für den Kosmos rund um *Windows und Macintosh* hier bei #AGENTURNAME. Kurz um, ich bau deine *Pfade zu allen Dateien und Ordner* auf dem Wust, den die hier Server nennen, so um, dass Sie jeder Hans auf der Erde verstehen wird! Wie das geht, fragst du? Ganz einfach so:",
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "*/pathy < der Pfad zum Ordner / Datei auf dem Server >*"
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "*/path < der Pfad zum Ordner / Datei auf dem Server >*"
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "*/pfad < der Pfad zum Ordner / Datei auf dem Server >*"
			}
		},
		{
			"type": "divider"
		},
		{
			"type": "section",
			"text": {
				"type": "plain_text",
				"text": "Ein Beispiel dazu:"
			}
		},
		{
			"type": "header",
			"text": {
				"type": "plain_text",
				"text": "Macintosh:",
				"emoji": true
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "*/path /IPADRESSE/ORDNER_1/ORDNER_2/ORDNER_3/ORDNER_4/2022_weihnachtsfeier*"
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "*/pfad smb://IPADRESSE/ORDNER_1/ORDNER_2/ORDNER_3/ORDNER_4/2022_weihnachtsfeier*"
			}
		},
		{
			"type": "header",
			"text": {
				"type": "plain_text",
				"text": "Windows:",
				"emoji": true
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "*/path Q:'.$backslash.'KUNDEN'.$backslash.'triebwerk'.$backslash.'weihnachtsfeier18*"
			}
		},
		{
			"type": "header",
			"text": {
				"type": "plain_text",
				"text": "Ergebnis:",
				"emoji": true
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "*smb://IPADRESSE/ORDNER_1/ORDNER_2/ORDNER_3/ORDNER_4/2022_weihnachtsfeier * \n *Q:'.$backslash.'ORDNER_1'.$backslash.'ORDNER_2'.$backslash.'ORDNER_3'.$backslash.'2022_weihnachtsfeier *"
			}
		},
		{
			"type": "divider"
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "Wunder dich nicht, deine ursprüngliche Nachricht wird auch ausgegeben, danach komm aber ich!"
			}
		},
		{
			"type": "divider"
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": "Was ich nicht kann: :ghost:"
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": ":x: Ich erkenne keine Befehle an mich, die in einem Fließtext geschrieben sind, schreibe also bitte deine Anfrage immer separat von jeglichem Text!"
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": ":x: Ich kann (leider) nicht in Threads verwendet werden - sorry, don’t blame me, blame the Slack Team!"
			}
		},
		{
			"type": "section",
			"text": {
				"type": "mrkdwn",
				"text": ":x: - Ist der Pfad nicht korrekt, werd ich dir das sagen, der Fehler liegt dann bei dir :wink:"
			}
		}
	]
}'; // END OF HELP INFO

$delimiter = '~[\\\\/]~';

$arraylimit = -1;

$macPath = 'smb://IP_ADRESSE';  // standard severpath beginning for mac
$winPath = ''; // empty string to start with

if (!in_array($_REQUEST['token'], $valid_tokens) && !$_SERVER['REMOTE_ADDR'] == 'REMOTE_IP_ADRESSE') {
    die('{"response_type": "ephemeral","text": "no access!"}');
}

if ($_REQUEST['text'] == "" || $_REQUEST['text'] == " ") { // empty user input
    die('{
		"response_type": "ephemeral",
		"blocks" : [
			{
				"type": "section",
				"text": {
					"type": "mrkdwn",
					"text": "'. $noPath[rand(0, (count($noPath) - 1))] .'"
				}
			},{
				"type": "section",
				"text": {
					"type": "mrkdwn",
					"text": "'. $helpnote[rand(0, (count($helpnote) - 1))] .'"
				}
			},
		]
	}');
} else if ($_REQUEST['text'] == "help" || $_REQUEST['text'] == "hilfe") {
    die($help);
} else {
    
    $input = preg_split($delimiter, $_REQUEST['text'], $arraylimit , PREG_SPLIT_NO_EMPTY);
    $max = sizeof($input);

    if ($input[0] == "smb:") {  // if input is already an interactive MAC-Serverpath!
        $macPath = $_REQUEST['text'];

        for ($i=0;$i<$max;$i++) {   
            if ($i == 2) {
                $winPath = array_search($input[2], $filterOptions);
            } else if ($i > 2) {
                $winPath = $winPath . $backslash . $input[$i]; // "implode" of Array for WINDOWS
            }
        }    
    } else if (array_key_exists($input[0], $filterOptions)) { // if a WINDOWS Path is the Starting Point
        
        for ($i=0;$i<$max;$i++) {
            if ($i == 0) {
                $winPath = $input[0]; // "implode" of Array for WINDOWS
                $macPath = $macPath . "/" . $filterOptions[$input[0]]; // Drive Switch
            } else if ($i > 0) {
                if ($input[$i] != "" || $input[$i] != " " ) {
                    $macPath = $macPath . "/" . $input[$i];  // "Implode" of Array
                    $winPath = $winPath . "\\\\" . $input[$i]; // "implode" of Array for WINDOWS
                }
            }
        }    

    } else if (in_array($input[1], $filterOptions)) { // if a MAC Path is the Starting Point
        for ($i=0;$i<$max;$i++) {   
            if ($i > 0) {
                if ($input[$i] != "" || $input[$i] != " " ) {
                    $macPath = $macPath . "/" . $input[$i]; // "Implode" of Array for MAC
                }
            }
            if ($i == 1) {
                $winPath = array_search($input[1], $filterOptions);
            } else if ($i > 1) {
                $winPath = $winPath . "\\\\" . $input[$i]; // "implode" of Array for WINDOWS
            }
        }    
    } else {
         die('{
			"response_type": "ephemeral",
			"blocks" : [
				{
					"type": "section",
					"text": {
						"type": "mrkdwn",
						"text": "'. $error[rand(0, (count($error) - 1))] .'"
					}
				},{
					"type": "section",
					"text": {
						"type": "mrkdwn",
						"text": "'. $helpnote[rand(0, (count($helpnote) - 1))] .'"
					}
				},
			]
		}'); // no correct string attached
    }
    
    
    $output = '{
            "channel": "'. $_REQUEST['channel_id'] .'",
            "response_type": "in_channel",
            "blocks": 
            [
                    {
                        "type": "section",
                        "text": {
                            "type": "mrkdwn",
                            "text": "'. $macPath .'"
                        }
                    },
                    {
                        "type": "section",
                        "text": {
                            "type": "mrkdwn",
                            "text": "'. $winPath .'"
                        }
                    }
            ]
            
        }';
        die($output);

    }

?>
