<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
    <title>PHP in progress</title>
    <link rel="stylesheet" type="text/css" href="_css/reset.css">
    <link rel="stylesheet" type="text/css" href="_css/mk-style.css">
	</head>
	<body>

<<?php
  $longString = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE fcpxml>

<fcpxml version="1.5">
    <resources>
        <format id="r1" name="FFVideoFormat1080p2398" frameDuration="1001/24000s" width="1920" height="1080"/>
        <media id="r2" name="20161216_002_LL_SOC113_Manja_MC" uid="/8sjap64QwSZntUO1W4qcw">
            <multicam format="r1" tcStart="1081593513/24000s" tcFormat="NDF">
                <mc-angle name="C300a" angleID="0P49Yw2lRNChGiVreSorVQ">
                    <clip name="20161216_002_LL_SOC113_Manja_C300a_001" offset="0s" duration="102306204/24000s" start="1081593513/24000s" format="r3" tcFormat="NDF">
                        <adjust-conform type="fill"/>
                        <video offset="1081593513/24000s" ref="r4" duration="102306204/24000s" start="1081593513/24000s">
                            <audio lane="-1" offset="32447805390/720000s" ref="r4" duration="3069186120/720000s" start="32447805390/720000s" role="dialogue.dialogue-1" srcCh="1, 2"/>
                        </video>
                        <keyword start="360531171/8000s" duration="102306204/24000s" value="20161216_002_LL_SOC113_Manja, C300a"/>
                        <audio-source role="dialogue.dialogue-1" srcCh="1"/>
                        <audio-source role="dialogue.dialogue-2" srcCh="2"/>
                    </clip>
                </mc-angle>
                <mc-angle name="C300b" angleID="ja8e9/p/SmSrzmmWJrYvgw">
                    <gap name="Gap" offset="0s" duration="1352351/24000s" start="86400314/24000s"/>
                    <clip name="20161216_002_LL_SOC113_Manja_C300b_001" offset="1352351/24000s" duration="100924824/24000s" start="1082945864/24000s" format="r3" tcFormat="NDF">
                        <adjust-conform type="fill"/>
                        <video offset="1082945864/24000s" ref="r5" duration="100924824/24000s" start="1082945864/24000s">
                            <audio lane="-1" offset="32488375920/720000s" ref="r5" duration="3027744720/720000s" start="32488375920/720000s" role="dialogue.dialogue-1" srcCh="1, 2"/>
                        </video>
                        <keyword start="135368233/3000s" duration="100924824/24000s" value="20161216_002_LL_SOC113_Manja, C300b"/>
                        <audio-source role="dialogue.dialogue-1" srcCh="1"/>
                        <audio-source role="dialogue.dialogue-2" srcCh="2"/>
                    </clip>
                </mc-angle>
                <mc-angle name="GH4" angleID="sfMd3EERRau99wabapCoQA">
                    <gap name="Gap" offset="0s" duration="269269/24000s" start="86400314/24000s"/>
                    <clip name="20161216_002_LL_SOC113_Manja_GH4_001" offset="269269/24000s" duration="101798697/24000s" start="1088263176/24000s" format="r3" tcFormat="NDF">
                        <adjust-conform type="fill"/>
                        <video offset="1088263176/24000s" ref="r6" duration="101798697/24000s" start="1088263176/24000s">
                            <audio lane="-1" offset="32647895280/720000s" ref="r6" duration="3053960910/720000s" start="32647895280/720000s" role="dialogue.dialogue-1" srcCh="1, 2"/>
                        </video>
                        <keyword start="45344299/1000s" duration="101798697/24000s" value="20161216_002_LL_SOC113_Manja, GH4"/>
                    </clip>
                </mc-angle>
            </multicam>
        </media>
        <format id="r3" frameDuration="1001/24000s" width="640" height="360"/>
        <asset id="r4" name="20161216_002_LL_SOC113_Manja_C300a_001" uid="C97202390B2362558D6CF4ECB4E241AC" src="file:///Users/mlv_100_mk/Movies/20161216_002_LL_SOC113_Manja_360/20161216_002_LL_SOC113_Manja_C300a_001.mov" start="1081593513/24000s" duration="102306204/24000s" hasVideo="1" format="r3" hasAudio="1" audioSources="1" audioChannels="2" audioRate="48000">
            <bookmark>Ym9vaxwDAAAAAAQQMAAAAKWr6UyzsJTs7eThlQfIQO8SuKXVDKASguVjAD7hFVsJGAIAAAQAAAADAwAAAAgAKAUAAAABAQAAVXNlcnMAAAAKAAAAAQEAAG1sdl8xMDBfbWsAAAYAAAABAQAATW92aWVzAAAgAAAAAQEAADIwMTYxMjE2XzAwMl9MTF9TT0MxMTNfTWFuamFfMzYwKgAAAAEBAAAyMDE2MTIxNl8wMDJfTExfU09DMTEzX01hbmphX0MzMDBhXzAwMS5tb3YAABQAAAABBgAAEAAAACAAAAA0AAAARAAAAGwAAAAIAAAABAMAABEqBgAAAAAACAAAAAQDAACpiQYAAAAAAAgAAAAEAwAA54kGAAAAAAAIAAAABAMAAIs/9AEAAAAACAAAAAQDAACNP/QBAAAAABQAAAABBgAAvAAAAMwAAADcAAAA7AAAAPwAAAAIAAAAAAQAAEG+Be5wAAAAGAAAAAECAAABAAAAAAAAAA8AAAAAAAAAAAAAAAAAAAAIAAAABAMAAAMAAAAAAAAABAAAAAMDAAD1AQAACAAAAAEJAABmaWxlOi8vLwoAAAABAQAATUxWXzEwMF9NSwAACAAAAAQDAAAAAIIxdAAAAAgAAAAABAAAQbwADiMAAAAkAAAAAQEAADk0OTJDRUU1LTcwRTgtM0FCRS1CRjU3LTc4MzFBRkFENDM1OBgAAAABAgAAgQAAAAEAAADvEwAAAQAAAAAAAAAAAAAAAQAAAAEBAAAvAAAAAAAAAAEFAADMAAAA/v///wEAAAAAAAAAEAAAAAQQAACgAAAAAAAAAAUQAAAMAQAAAAAAABAQAAA4AQAAAAAAAEAQAAAoAQAAAAAAAAIgAAAEAgAAAAAAAAUgAAB0AQAAAAAAABAgAACEAQAAAAAAABEgAAC4AQAAAAAAABIgAACYAQAAAAAAABMgAACoAQAAAAAAACAgAADkAQAAAAAAADAgAAAQAgAAAAAAAAHAAABYAQAAAAAAABHAAAAgAAAAAAAAABLAAABoAQAAAAAAABDQAAAEAAAAAAAAAA==</bookmark>
        </asset>
        <asset id="r5" name="20161216_002_LL_SOC113_Manja_C300b_001" uid="B0307A6BEABAF681BFA452268A1AF266" src="file:///Users/mlv_100_mk/Movies/20161216_002_LL_SOC113_Manja_360/20161216_002_LL_SOC113_Manja_C300b_001.mov" start="1082945864/24000s" duration="100924824/24000s" hasVideo="1" format="r3" hasAudio="1" audioSources="1" audioChannels="2" audioRate="48000">
            <bookmark>Ym9vaxwDAAAAAAQQMAAAAH4/9Is1WCM5IQG1h55yi1gJYaco6HOxmtAXIdA3VlQOGAIAAAQAAAADAwAAAAgAKAUAAAABAQAAVXNlcnMAAAAKAAAAAQEAAG1sdl8xMDBfbWsAAAYAAAABAQAATW92aWVzAAAgAAAAAQEAADIwMTYxMjE2XzAwMl9MTF9TT0MxMTNfTWFuamFfMzYwKgAAAAEBAAAyMDE2MTIxNl8wMDJfTExfU09DMTEzX01hbmphX0MzMDBiXzAwMS5tb3YAABQAAAABBgAAEAAAACAAAAA0AAAARAAAAGwAAAAIAAAABAMAABEqBgAAAAAACAAAAAQDAACpiQYAAAAAAAgAAAAEAwAA54kGAAAAAAAIAAAABAMAAIs/9AEAAAAACAAAAAQDAACRP/QBAAAAABQAAAABBgAAvAAAAMwAAADcAAAA7AAAAPwAAAAIAAAAAAQAAEG+BfCsAAAAGAAAAAECAAABAAAAAAAAAA8AAAAAAAAAAAAAAAAAAAAIAAAABAMAAAMAAAAAAAAABAAAAAMDAAD1AQAACAAAAAEJAABmaWxlOi8vLwoAAAABAQAATUxWXzEwMF9NSwAACAAAAAQDAAAAAIIxdAAAAAgAAAAABAAAQbwADiMAAAAkAAAAAQEAADk0OTJDRUU1LTcwRTgtM0FCRS1CRjU3LTc4MzFBRkFENDM1OBgAAAABAgAAgQAAAAEAAADvEwAAAQAAAAAAAAAAAAAAAQAAAAEBAAAvAAAAAAAAAAEFAADMAAAA/v///wEAAAAAAAAAEAAAAAQQAACgAAAAAAAAAAUQAAAMAQAAAAAAABAQAAA4AQAAAAAAAEAQAAAoAQAAAAAAAAIgAAAEAgAAAAAAAAUgAAB0AQAAAAAAABAgAACEAQAAAAAAABEgAAC4AQAAAAAAABIgAACYAQAAAAAAABMgAACoAQAAAAAAACAgAADkAQAAAAAAADAgAAAQAgAAAAAAAAHAAABYAQAAAAAAABHAAAAgAAAAAAAAABLAAABoAQAAAAAAABDQAAAEAAAAAAAAAA==</bookmark>
        </asset>
        <asset id="r6" name="20161216_002_LL_SOC113_Manja_GH4_001" uid="0000E7F926504528137EAC1410C37C97" src="file:///Users/mlv_100_mk/Movies/20161216_002_LL_SOC113_Manja_360/20161216_002_LL_SOC113_Manja_GH4_001.mov" start="1088263176/24000s" duration="101798697/24000s" hasVideo="1" format="r3" hasAudio="1" audioSources="1" audioChannels="2" audioRate="48000">
            <bookmark>Ym9vaxgDAAAAAAQQMAAAAHeCZR//OTZc0D6vBNjPGcja5vMQwdpYmk88w2oLXynZFAIAAAQAAAADAwAAAAgAKAUAAAABAQAAVXNlcnMAAAAKAAAAAQEAAG1sdl8xMDBfbWsAAAYAAAABAQAATW92aWVzAAAgAAAAAQEAADIwMTYxMjE2XzAwMl9MTF9TT0MxMTNfTWFuamFfMzYwKAAAAAEBAAAyMDE2MTIxNl8wMDJfTExfU09DMTEzX01hbmphX0dINF8wMDEubW92FAAAAAEGAAAQAAAAIAAAADQAAABEAAAAbAAAAAgAAAAEAwAAESoGAAAAAAAIAAAABAMAAKmJBgAAAAAACAAAAAQDAADniQYAAAAAAAgAAAAEAwAAiz/0AQAAAAAIAAAABAMAAME/9AEAAAAAFAAAAAEGAAC4AAAAyAAAANgAAADoAAAA+AAAAAgAAAAABAAAQb4F8usAAAAYAAAAAQIAAAEAAAAAAAAADwAAAAAAAAAAAAAAAAAAAAgAAAAEAwAAAwAAAAAAAAAEAAAAAwMAAPUBAAAIAAAAAQkAAGZpbGU6Ly8vCgAAAAEBAABNTFZfMTAwX01LAAAIAAAABAMAAAAAgjF0AAAACAAAAAAEAABBvAAOIwAAACQAAAABAQAAOTQ5MkNFRTUtNzBFOC0zQUJFLUJGNTctNzgzMUFGQUQ0MzU4GAAAAAECAACBAAAAAQAAAO8TAAABAAAAAAAAAAAAAAABAAAAAQEAAC8AAAAAAAAAAQUAAMwAAAD+////AQAAAAAAAAAQAAAABBAAAJwAAAAAAAAABRAAAAgBAAAAAAAAEBAAADQBAAAAAAAAQBAAACQBAAAAAAAAAiAAAAACAAAAAAAABSAAAHABAAAAAAAAECAAAIABAAAAAAAAESAAALQBAAAAAAAAEiAAAJQBAAAAAAAAEyAAAKQBAAAAAAAAICAAAOABAAAAAAAAMCAAAAwCAAAAAAAAAcAAAFQBAAAAAAAAEcAAACAAAAAAAAAAEsAAAGQBAAAAAAAAENAAAAQAAAAAAAAA</bookmark>
        </asset>
    </resources>
    <library location="file:///Users/mlv_100_mk/Movies/20161216_Manja_to_test%2020161230_1017_EST.fcpbundle/">
        <event name="Projects" uid="1C244A53-6115-4D54-94A6-6B165F21DBA9">
            <project name="Rough_Cut" uid="AC918DD0-7B6D-4F24-82D2-652F493FF618">
                <sequence duration="600600/24000s" format="r1" tcStart="0s" tcFormat="NDF" audioLayout="stereo" audioRate="48k">
                    <spine>
                        <mc-clip name="20161216_002_LL_SOC113_Manja_MC" offset="0s" ref="r2" duration="113113/24000s" start="1114429316/24000s">
                            <mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="all"/>
                        </mc-clip>
                        <mc-clip name="20161216_004_LLUF_AC_Alain" offset="0s" ref="r2" duration="17397381/24000s" start="1088312225/24000s">
								<mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="audio"/>
								<mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="video"/>
						</mc-clip>
                        <mc-clip name="20161216_002_LL_SOC113_Manja_MC" offset="113113/24000s" ref="r2" duration="204204/24000s" start="1114542429/24000s">
                            <mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="audio"/>
                            <mc-source angleID="ja8e9/p/SmSrzmmWJrYvgw" srcEnable="video"/>
                        </mc-clip>
                        <mc-clip name="20161216_002_LL_SOC113_Manja_MC" offset="317317/24000s" ref="r2" duration="72072/24000s" start="1114746633/24000s">
                            <mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="all"/>
                        </mc-clip>
                        <mc-clip name="20161216_002_LL_SOC113_Manja_MC" offset="389389/24000s" ref="r2" duration="124124/24000s" start="1114818705/24000s">
                            <mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="audio"/>
                            <mc-source angleID="sfMd3EERRau99wabapCoQA" srcEnable="video"/>
                        </mc-clip>
                        <mc-clip name="20161216_002_LL_SOC113_Manja_MC" offset="513513/24000s" ref="r2" duration="87087/24000s" start="1114942829/24000s">
                            <mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="all"/>
                        </mc-clip>
                        <mc-clip name="20161216_002_LL_SOC113_Manja_MC" offset="0s" ref="r2" duration="1415415/24000s" start="1112816705/24000s">
<mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="audio"/>
<mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="video"/>
</mc-clip>
                    </spine>
                </sequence>
            </project>
        </event>
        <smart-collection name="Projects" match="all">
            <match-clip rule="is" type="project"/>
        </smart-collection>
        <smart-collection name="All Video" match="any">
            <match-media rule="is" type="videoOnly"/>
            <match-media rule="is" type="videoWithAudio"/>
        </smart-collection>
        <smart-collection name="Audio Only" match="all">
            <match-media rule="is" type="audioOnly"/>
        </smart-collection>
        <smart-collection name="Stills" match="all">
            <match-media rule="is" type="stills"/>
        </smart-collection>
        <smart-collection name="Favorites" match="all">
            <match-ratings value="favorites"/>
        </smart-collection>
    </library>
</fcpxml>';

$start1 = '<mc-angle';
$end1 = '</mc-angle>';


  function get_string_between($string, $start, $end){
      $string = ' ' . $string;
      $ini = strpos($string, $start);
      if ($ini == 0) return '';
      $ini += strlen($start);
      $len = strpos($string, $end, $ini) - $ini;
      return substr($string, $ini, $len);
  }

  $parsed = get_string_between($longString, $start1, $end1);

  echo $parsed; // (result = dog)

 ?>

	</body>
</html>
