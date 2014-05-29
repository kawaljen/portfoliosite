<?php

/*******************************************************************************************************************************/
/*******************************************************MOBILES
/******************************************************************************************************************************/

function detection_mobile ()
{

	if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']))
		return true;

	if (isset ($_SERVER['HTTP_ACCEPT']))
	{
		$accept = strtolower($_SERVER['HTTP_ACCEPT']);
		if (strpos($accept, 'wap') !== false)
			return true;
	}

	if (isset ($_SERVER['HTTP_USER_AGENT']))
	{
		if (strpos ($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false)
			return true;

		if (strpos ($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
			return true;
	}

	return false;
}



/*******************************************************************************************************************************/
/*******************************************************MAIL
/*******************************************************************************************************************************/
function envoimail($post){
	
	if (strlen($post['email'])>6 && strlen($post['nom'])>5 && strlen($post['message'])>6) {
		if(checkemail($post['email'])){
			$reponse=array();
			
			// To
			$to = 'declicsweb@gmail.com';
			$copie = $post['email'];

			// Subject
			$subject = 'Demande d\'informations webdesign Alexandra Persilié';
			 
			// Headers
			$headers = 'From: Alexandra Persilié Webdesign'."\r\n";
			$headers .= 'Reply-To: declicsweb@gmail.com'."\r\n";
			$headers .= 'Mime-Version: 1.0'."\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
			$headers .= "\r\n";
			 
			// Message
			if ($post['lg'] = 'fr'){
				// Subject
				$subject = 'Demande d\'informations webdesign Alexandra Persilié';
				$msg = '<p>Madame, Monsieur, <br/>Merci de l\'attention portée. Je vous répondrez dans les plus brefs délais</p>';
				$msg .= '<p>Alexandra Persilié, Déclics Webdesign.</p>';
				$msg .= '<h3 style="color:#A02C2C; padding-left:20px;">Votre message</h3> ';
				if(!empty($post['sujet'])) $msg .= '<h2 style="color:#808080; padding-left:20px;">Sujet :'.$post['sujet'].'</h2> ';
				$msg .= '<p style="color:#808080; padding-left:20px;">'.$post['message'].'</p>';
				$msg .= '<p style="color:#808080; padding-left:20px;">'.$post['nom'].'</p>';
				$msg .= '<p style="color:#808080; padding-left:20px;">'.$post['email'].'</p>';
			} else {
				// Subject
				$subject = 'Informations webdesign Alexandra Persilié';
				$msg = '<p>Dear Sir or Madam, <br/>Thank you for your time, I will answer you as soon as possible</p>';
				$msg .= '<p>Alexandra Persilié, Déclics Webdesign.</p>';
				$msg .= '<h3 style="color:#A02C2C; padding-left:20px;">Your message</h3> ';
				if(!empty($post['sujet'])) $msg .= '<h2 style="color:#808080; padding-left:20px;">Sujet :'.$post['subject'].'</h2> ';
				$msg .= '<p style="color:#808080; padding-left:20px;">'.$post['message'].'</p>';
				$msg .= '<p style="color:#808080; padding-left:20px;">'.$post['name'].'</p>';
				$msg .= '<p style="color:#808080; padding-left:20px;">'.$post['email'].'</p>';				
			}
			 
			// Function mail()
			if(mail($to, $subject, $msg, $headers))
					$reponse[]=true;
			if(mail($copie, $subject, $msg, $headers))
					$reponse[]=true;
		
		
		} else {
			$reponse= array( false, false);}
		
	} else {
			$reponse= array( false, false);		
	}
			
	return $reponse;
	}

function checkemail($adresse)
{

  if(strlen($adresse)>254){
    return false;
  }

  $nonASCII='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  $nonASCII.='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  $nonASCII.='ũūŭůűųŵŷźżztșțΐάέήίΰαβγδεζηθικλμνξοπρςστυφ';
  $nonASCII.='χψωϊϋόύώабвгдежзийклмнопрстуфхцчшщъыьэюяt';
  $nonASCII.='ἀἁἂἃἄἅἆἇἐἑἒἓἔἕἠἡἢἣἤἥἦἧἰἱἲἳἴἵἶἷὀὁὂὃὄὅὐὑὒὓὔ';
  $nonASCII.='ὕὖὗὠὡὢὣὤὥὦὧὰάὲέὴήὶίὸόὺύὼώᾀᾁᾂᾃᾄᾅᾆᾇᾐᾑᾒᾓᾔᾕᾖᾗ';
  $nonASCII.='ᾠᾡᾢᾣᾤᾥᾦᾧᾰᾱᾲᾳᾴᾶᾷῂῃῄῆῇῐῑῒΐῖῗῠῡῢΰῤῥῦῧῲῳῴῶῷ';

  $syntaxe="#^[[:alnum:][:punct:]]{1,64}@[[:alnum:]-.$nonASCII]{2,253}\.[[:alpha:].]{2,6}$#";

  if(preg_match($syntaxe,$adresse)) {
    return true;
  }
  else {
    return false;
  }
}

/*******************************************************************************************************************************/
/*******************************************************DETECTION LANGUAGE
/*******************************************************************************************************************************/
//this solution work even if more than two languages shared the same value. 
//The function prioritizes specific languages
function Get_Client_Prefered_Language ($getSortedList = false, $acceptedLanguages = false) {

    if (empty($acceptedLanguages))
        $acceptedLanguages = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

        // regex borrowed from Gabriel Anderson on http://stackoverflow.com/questions/6038236/http-accept-language
    preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $acceptedLanguages, $lang_parse);
    $langs = $lang_parse[1]; //langue
    $ranks = $lang_parse[4]; //niveau de priorité

        // (recursive anonymous function)
    $getRank = function ($j)use(&$getRank, &$ranks)
    {
        while (isset($ranks[$j]))
            if (!$ranks[$j])
                return $getRank($j + 1);
            else
                return $ranks[$j];
    };

        // (create an associative array 'language' => 'preference')
    $lang2pref = array();
    for($i=0; $i<count($langs); $i++)
        $lang2pref[$langs[$i]] = (float) $getRank($i);

        // (comparison function for uksort)
    $cmpLangs = function ($a, $b) use ($lang2pref) {
        if ($lang2pref[$a] > $lang2pref[$b])
            return -1;
        elseif ($lang2pref[$a] < $lang2pref[$b])
            return 1;
        elseif (strlen($a) > strlen($b))
            return -1;
        elseif (strlen($a) < strlen($b))
            return 1;
        else
            return 0;
    };

        // sort the languages by prefered language and by the most specific region
    uksort($lang2pref, $cmpLangs);


    if ($getSortedList)
        return $lang2pref;

        // return the first value's key
    reset($lang2pref);
    return key($lang2pref);
}
?>
