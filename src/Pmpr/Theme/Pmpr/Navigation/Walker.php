<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6149044a69ab6             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Navigation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu { public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $id_field = $this->db_fields["\x69\144"]; if (!is_object($ywmkwiwkosakssii[0])) { goto ygkcacsyyckescqs; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$id_field}]); ygkcacsyyckescqs: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $qoqkkmgaewoiykkw = str_repeat("\11", $gquaqgsmiuqsaoum); $aqykuigiuwmmcieu .= "\xa{$qoqkkmgaewoiykkw}\x3c\x75\x6c\40\143\x6c\x61\x73\x73\x3d\x22\x64\162\x6f\160\144\x6f\167\x6e\55\x6d\x65\x6e\165\x20\x72\151\147\150\x74\55\60\x22\x3e\xa"; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = $ywmkwiwkosakssii->has_children; $igqsaukqcqscimok->icon = ManipulatePost::igawqaomowicuayw(Menu::ICON_FILED_META, $igqsaukqcqscimok, true); $igqsaukqcqscimok = self::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); if (isset($ywmkwiwkosakssii->item_spacing) && "\144\x69\163\x63\141\x72\144" === $ywmkwiwkosakssii->item_spacing) { goto cuoqqgaygogsmmic; } $oiywaimuayauqecq = "\11"; goto cgewcsueoyaeikgm; cuoqqgaygogsmmic: $oiywaimuayauqecq = ''; cgewcsueoyaeikgm: $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = empty($igqsaukqcqscimok->classes) ? [] : (array) $igqsaukqcqscimok->classes; $ywmkwiwkosakssii = apply_filters("\156\x61\166\x5f\155\x65\x6e\165\137\x69\x74\145\x6d\137\141\x72\147\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $cmkqisoeyioisqaw[] = $ywmkwiwkosakssii->li_class ?? ''; $gecwyaugygsikyug = join("\40", apply_filters("\156\x61\x76\137\155\145\156\165\137\143\x73\163\x5f\143\154\x61\x73\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq("\x6c\151", ["\143\x6c\141\x73\163" => $gecwyaugygsikyug]); $wwgucssaecqekuek = []; self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x72\x65\154", $igqsaukqcqscimok->xfn); self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x68\162\145\146", $igqsaukqcqscimok->url, "\x23"); self::igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x69\x74\x6c\145", $igqsaukqcqscimok->attr_title); self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\x73", $igqsaukqcqscimok->class ?? '', self::wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto sukskmcwsoysiuqu; } self::igmaewykumgwoaoy($wwgucssaecqekuek, "\164\141\162\147\145\x74", $igqsaukqcqscimok->target); sukskmcwsoysiuqu: if (!$ywmkwiwkosakssii->has_children) { goto igymseewwyiocoug; } self::igmaewykumgwoaoy($wwgucssaecqekuek, "\144\x61\164\141\55\x74\x6f\147\147\x6c\x65", "\144\x72\x6f\x70\144\x6f\x77\x6e"); igymseewwyiocoug: $wwgucssaecqekuek = apply_filters("\156\141\x76\137\155\x65\156\x75\137\x6c\x69\x6e\x6b\137\141\164\x74\162\x69\142\165\x74\145\x73", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $igqsaukqcqscimok->title; if (!$igqsaukqcqscimok->icon) { goto twkmiuomimomscew; } $wwgucssaecqekuek["\x74\x69\164\x6c\145"] = $meqocwsecsywiiqs; if ($igqsaukqcqscimok->type === "\x63\165\x73\x74\157\x6d") { goto mqccmesakuemceqi; } $eyueacmuwsamwesy = "\156\157\x66\x6f\x6c\x6c\x6f\167"; goto eyiamcekkgkiawqy; mqccmesakuemceqi: $eyueacmuwsamwesy = "\x6e\x6f\146\x6f\x6c\154\x6f\167\x20\156\157\157\x70\x65\156\145\162\40\156\x6f\x72\145\146\x65\x72\x72\x65\162"; eyiamcekkgkiawqy: $wwgucssaecqekuek["\x72\x65\154"] = $eyueacmuwsamwesy; $meqocwsecsywiiqs = ManipulateHTML::cuoygaaeqeqcuggu($igqsaukqcqscimok->icon, ["\x63\154\141\x73\x73" => "\x69\143\157\x6e\55\163\x65\143\x6f\156\144\141\x72\171\x20\x69\143\157\x6e\55\170\x6c"], true) . ManipulateHTML::gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\x63\154\141\x73\163" => "\163\x72\x2d\157\x6e\x6c\x79"]); twkmiuomimomscew: $meqocwsecsywiiqs = apply_filters("\x74\150\145\137\x74\151\x74\154\x65", $meqocwsecsywiiqs, $igqsaukqcqscimok->ID); $meqocwsecsywiiqs = apply_filters("\x6e\141\x76\x5f\155\145\x6e\165\137\x69\164\145\155\x5f\x74\x69\164\x6c\x65", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $item_output = $ywmkwiwkosakssii->before; $item_output .= ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ywmkwiwkosakssii->link_before . $meqocwsecsywiiqs . $ywmkwiwkosakssii->link_after); $item_output .= $ywmkwiwkosakssii->after; $aqykuigiuwmmcieu .= apply_filters("\x77\141\x6c\153\145\162\x5f\156\x61\166\137\x6d\145\156\165\137\163\x74\141\162\x74\137\x65\154", $item_output, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public static function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; if ($kkisyguyosoyymqs) { goto ieumumsgyguceusy; } if ($igqsaukqcqscimok->menu_item_parent) { goto qcessicwuikwqsis; } $cmkqisoeyioisqaw[] = "\x6e\x61\166\x2d\x69\164\145\155"; $cmkqisoeyioisqaw[] = "\144\162\157\160\x64\157\167\156"; $cmkqisoeyioisqaw[] = "\x70\157\x73\151\x74\x69\x6f\x6e\55\x72\145\154\141\x74\151\x76\x65"; goto yssscwioiyygssec; qcessicwuikwqsis: $cmkqisoeyioisqaw[] = "\144\x72\157\160\x64\157\167\x6e\x2d\x69\164\145\155"; yssscwioiyygssec: goto coywmiyqgsweuiic; ieumumsgyguceusy: $cmkqisoeyioisqaw = ["\x68\141\x73\x2d\x63\150\x69\154\x64\x72\145\156"]; if ($igqsaukqcqscimok->menu_item_parent) { goto kooskuwkuayiuose; } $cmkqisoeyioisqaw[] = "\x6e\x61\166\x2d\x69\x74\145\x6d"; $cmkqisoeyioisqaw[] = "\x64\162\157\x70\x64\x6f\x77\x6e"; goto qwcegcuowwgiccos; kooskuwkuayiuose: $cmkqisoeyioisqaw[] = "\x64\x72\157\x70\x64\157\x77\x6e\55\151\164\x65\x6d"; qwcegcuowwgiccos: coywmiyqgsweuiic: if (!$cmkqisoeyioisqaw) { goto siqagquguiemuoku; } $igqsaukqcqscimok = self::igmaewykumgwoaoy($igqsaukqcqscimok, "\143\154\141\x73\x73\145\x73", $cmkqisoeyioisqaw); siqagquguiemuoku: return $igqsaukqcqscimok; } public static function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = ''; if ($igqsaukqcqscimok->menu_item_parent) { goto sycygoiaiqqageym; } $egkyssmuqcwaciya .= "\x20\156\x61\166\x2d\x6c\151\x6e\x6b"; goto gygawoqywkukmqee; sycygoiaiqqageym: if ($kkisyguyosoyymqs) { goto ycakugokkqkuqyiu; } $egkyssmuqcwaciya = "\164\145\170\164\55\x64\x65\143\x6f\162\141\x74\x69\x6f\156\x2d\x6e\x6f\x6e\x65\40\x64\x2d\142\x6c\157\x63\153"; goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $egkyssmuqcwaciya .= "\40\144\x72\157\x70\x64\x6f\x77\x6e\x2d\154\151\x6e\x6b\40\144\x72\157\160\x64\157\167\x6e\x2d\164\157\x67\x67\154\x65"; oouoqimaaqcmccay: gygawoqywkukmqee: return $egkyssmuqcwaciya; } public static function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
