<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c358f62566             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\144\141\x73\x68\x62\157\x61\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\157\x72\x64\x65\162\x73" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\167\x6e\154\157\141\144\x73" => IconInterface::msyqysqykouywsua, "\x65\x64\x69\164\55\x61\144\x64\162\145\x73\x73" => IconInterface::wykikkeyisimsmyy, "\160\141\171\x6d\145\156\164\55\x6d\145\164\150\157\144\x73" => IconInterface::acciucugwcskkwmi, "\145\144\151\x74\55\x61\x63\143\x6f\x75\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\143\165\x73\x74\157\x6d\x65\x72\x2d\154\157\147\157\165\x74" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\x6f\x6f\143\157\155\155\x65\x72\x63\145\x5f\x6c\157\x6f\x70\x5f\x70\x72\157\x64\x75\143\x74\x5f\154\151\x6e\x6b", $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(), $product); $this->meqqwuauskckweee(["\143\x6c\141\163\x73" => "\164\x65\x78\164\x2d\144\145\143\157\x72\x61\x74\151\157\156\x2d\x6e\157\x6e\145\x20\164\145\170\164\x2d\x6d\165\x74\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::oguseymmyyoyaako => '', "\x70\x72\x69\143\x65\163" => [], "\164\x64\137\x63\154\141\x73\163" => '', "\x74\x72\137\x63\154\x61\x73\x73" => '', "\164\150\x5f\143\x6c\x61\x73\x73" => "\x74\x65\170\164\x2d\147\x72\x61\171\x2d\70\60\x30\x20\x70\171\x2d\x32", "\150\x61\x73\x5f\164\151\164\x6c\145" => true, "\164\x61\142\x6c\145\x5f\143\x6c\141\x73\x73" => "\155\x62\55\65"]); $product = $ywmkwiwkosakssii[self::oguseymmyyoyaako]; $uiiuuaeiyecmiouc = $ywmkwiwkosakssii["\x70\162\151\x63\145\163"]; if (!$product) { goto siqagquguiemuoku; } $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); goto ycakugokkqkuqyiu; siqagquguiemuoku: global $product; ycakugokkqkuqyiu: if (!$product instanceof WC_Product) { goto umgaesggesswoaqe; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto wwkgkaecgiwggcck; } $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aumscagymwyyicag = $smuykqsageuocuos->igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\167\x6f\x6f\x63\x6f\x6d\x6d\145\x72\143\145\55\120\x72\151\143\145\x2d\143\165\x72\x72\x65\156\143\171\123\x79\x6d\x62\157\x6c" => ["\143\x6c\x61\x73\163" => "\x66\157\156\164\55\x31\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto oouoqimaaqcmccay; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); oouoqimaaqcmccay: $eukiyocmgugiioei = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\145\x6c"); $ywoyoawciekocqao = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\156\x73"); if ($eukiyocmgugiioei) { goto gygawoqywkukmqee; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto kciouyuaqkyqomam; gygawoqywkukmqee: $uiiuuaeiyecmiouc["\162\145\147\165\x6c\x61\162\137\160\x72\x69\x63\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto sycygoiaiqqageym; } $uiiuuaeiyecmiouc["\x64\x69\x73\x63\157\x75\156\x74"] = $this->yqauycsoymimeise($product); sycygoiaiqqageym: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\151\163\x63\157\165\x6e\164\137\145\x78\160\151\162\145"] = $this->sscegwueamckwmcy("\x77\157\157\143\157\x6d\155\x65\x72\143\x65\x5f\160\162\157\144\165\x63\x74\137\144\x69\x73\143\157\x75\x6e\164\x5f\x65\x78\x70\x69\162\145\137\x68\x74\x6d\154", '', ["\x70\162\x6f\144\165\143\x74" => $product]); kciouyuaqkyqomam: $uiiuuaeiyecmiouc["\163\141\x6c\x65\x5f\160\162\x69\x63\145"] = $eeeyyekmaesysegc; wwkgkaecgiwggcck: umgaesggesswoaqe: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto cmqucgoewuyieoyk; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\x67\x75\154\141\x72\x5f\x70\162\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\x65\x67\x75\154\x61\x72\40\x50\162\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto quwcqmyokicssyew; case "\x73\x61\x6c\x65\x5f\x70\162\151\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\x61\154\145\40\120\x72\x69\143\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto quwcqmyokicssyew; case "\x64\x69\x73\x63\157\x75\156\164\137\x65\x78\160\151\x72\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\x63\x6f\165\156\164\x20\x45\x78\160\151\162\141\x74\x69\157\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto quwcqmyokicssyew; case "\x64\151\163\x63\157\165\x6e\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\163\143\x6f\165\156\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto quwcqmyokicssyew; } iqcogmsguwoikame: quwcqmyokicssyew: if (!$aumscagymwyyicag) { goto gimmuoqwckiseaik; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; gimmuoqwckiseaik: kiwqkcaekqqyuegq: } qsygcycwieukkgwc: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\162\x69\143\145")]); $this->ewcsyqaaigkicgse("\x6d\x65\x74\141\144\141\164\141\137\162\145\x6e\144\x65\162", $ywmkwiwkosakssii); cmqucgoewuyieoyk: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto yqykqysmiquwoasu; } woocommerce_template_loop_add_to_cart(); goto ayyweymyuuiauamo; yqykqysmiquwoasu: woocommerce_template_single_add_to_cart(); ayyweymyuuiauamo: } public function wigckqooeccseiyu() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !($cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto ygcsmkuycoagwyou; } $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), self::cmckeoksigiaqykc); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto omugkkesagcyagmk; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ["\x63\x6c\x61\x73\x73" => "\x70\162\x6f\144\x75\x63\164\x2d\143\x61\164\145\147\x6f\162\171\40\x68\157\x76\145\x72\55\160\x72\151\155\x61\162\x79\40\146\157\x6e\164\x2d\x31\x36"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(__("\x49\x6e\40\x43\x61\164\x65\x67\x6f\x72\171\x3a\x20\45\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\x6c\x61\x73\x73" => "\164\x65\170\x74\55\x67\x72\x61\171\x2d\x36\60\60"]); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\154\x61\163\163" => "\151\x63\x6f\x6e\x2d\163\155\40\155\x72\x2d\62\x20\x6d\x79\x2d\141\165\164\157"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\x6c\x61\x73\163" => "\144\55\146\154\x65\x78"]); if (!$koaqeegoeiaiccse) { goto mosqsmqimqgqoase; } echo $nsmgceoqaqogqmuw; mosqsmqimqgqoase: omugkkesagcyagmk: ygcsmkuycoagwyou: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto kqksuugcgsyeoayy; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto iggyqogweyosuikc; kqksuugcgsyeoayy: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\x63\x6c\141\x73\163" => "\x70\162\x69\143\145\55\144\151\163\143\157\x75\x6e\x74\x2d\x61\155\157\165\x6e\164\40\x74\x65\170\x74\55\x64\x61\156\x67\145\162"]); $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\160\x72\x69\143\x65\137\x64\151\x73\143\x6f\x75\156\x74", $wewsywccwwomowkw, $xgwukwqqaseqagay); iggyqogweyosuikc: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); if (!$product instanceof WC_Product) { goto qkcyqocqqwmqgqww; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto qqewoyookaskiuek; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; qqewoyookaskiuek: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto ssoucoucsgccekwe; } $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\160\x72\x69\143\145\137\x64\x69\x73\x63\157\165\x6e\164", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); ssoucoucsgccekwe: qkcyqocqqwmqgqww: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\145\161\x75\151\162\145\x64"]) && $aiowsaccomcoikus["\162\x65\x71\165\x69\162\145\x64"])) { goto ywqgcegomwaiuquc; } $aiowsaccomcoikus["\143\x6c\x61\163\x73"] = ["\x69\x73\55\x69\x6e\x76\141\154\151\x64"]; ywqgcegomwaiuquc: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; eegqyykygiccaoeo: } miyqyeiwquwsacsm: unset($ikgwqyuyckaewsow["\x62\x69\154\x6c\151\x6e\x67\137\143\157\x75\x6e\x74\162\171"]); unset($ikgwqyuyckaewsow["\142\151\154\x6c\151\x6e\x67\137\x61\144\x64\x72\x65\163\x73\137\62"]); $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\x6e\x67\137\163\x74\141\164\145"]["\x70\x72\151\x6f\162\151\x74\171"] = 60; $ikgwqyuyckaewsow["\x62\151\x6c\x6c\x69\156\147\x5f\x63\151\164\x79"]["\x70\162\x69\x6f\162\x69\x74\x79"] = 70; $ikgwqyuyckaewsow["\142\151\x6c\154\x69\156\x67\x5f\x61\x64\144\162\145\163\163\137\61"]["\x70\x72\151\157\162\x69\x74\171"] = 80; $ikgwqyuyckaewsow["\x62\x69\154\x6c\x69\156\147\137\x65\x6d\x61\151\x6c"]["\x70\x72\151\157\x72\151\164\x79"] = 98; $ikgwqyuyckaewsow["\x62\151\154\154\x69\x6e\147\137\160\157\163\x74\x63\x6f\x64\x65"]["\x6c\141\x62\x65\x6c"] = __("\x50\157\163\x74\x63\x6f\144\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\x69\x6c\154\x69\156\x67\x5f\145\155\141\x69\x6c"]["\x6c\141\x62\145\154"] = __("\x45\155\141\x69\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\156\40\x62\164\x6e\x2d\x62\154\x6f\x63\153\40\x62\x74\156\x2d\x70\162\x69\155\141\x72\171\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\154\x2e\x77\157\157\143\157\155\155\x65\162\143\x65\x2d\x73\150\151\x70\x70\x69\156\147\55\155\145\x74\x68\157\x64\163" => ["\x63\154\141\163\163" => "\x6c\x69\163\164\55\147\162\157\165\x70\x20\154\151\163\164\55\x67\x72\x6f\x75\x70\x2d\146\x6c\165\x73\x68\40\142\x67\x2d\x74\x72\x61\156\163\x70\x61\x72\145\156\x74"], "\x75\x6c\x2e\x77\x6f\x6f\x63\157\155\155\145\x72\143\145\55\163\150\x69\160\160\151\x6e\x67\55\155\x65\x74\150\157\144\163\40\x6c\x61\x62\x65\154" => ["\143\x6c\141\163\x73" => "\155\x2d\60"], "\x75\x6c\56\167\157\x6f\143\x6f\155\x6d\145\162\143\x65\55\x73\x68\x69\160\x70\x69\156\x67\x2d\155\x65\x74\150\157\x64\163\40\154\x69" => ["\x63\x6c\x61\163\x73" => "\154\x69\x73\164\55\x67\162\x6f\x75\x70\x2d\151\x74\x65\x6d\40\x70\171\55\x31\x20\160\170\x2d\60"]]; } public function umooigokeuauqqsw() : array { return ["\144\154\56\166\141\x72\x69\141\164\151\157\156" => ["\143\x6c\x61\163\x73" => "\144\x2d\x66\154\145\x78\x20\x6d\55\141\x75\164\157"], "\144\x6c\56\x76\x61\x72\x69\x61\164\151\x6f\156\x20\x70" => ["\143\x6c\x61\x73\x73" => "\155\142\55\60"], "\144\154\56\166\x61\x72\151\x61\x74\x69\x6f\156\40\x64\144" => ["\143\x6c\x61\x73\163" => "\x6d\x62\x2d\x30"], "\144\x6c\56\x76\141\x72\x69\x61\x74\x69\157\x6e\x20\x64\x74" => ["\143\154\141\x73\x73" => "\167\55\154\x67\x2d\x32\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $smuykqsageuocuos->ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\146\157\x72\x6d\55\x72\157\167" => ["\143\154\x61\163\163" => "\146\x6f\x72\155\55\162\157\x77"]]); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\167\157\157\143\x6f\x6d\155\x65\162\143\145\x2d{$eaoumsseceiowgsk}\x2d\x66\151\145\x6c\x64\x73\x5f\x5f\x66\151\145\154\x64\x2d\167\x72\141\160\x70\x65\162\40\x3e\40\160", ["\x63\x6c\x61\163\163" => "\x72\157\x77"]); $aqykuigiuwmmcieu = $smuykqsageuocuos->suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\142\x62\x72"]); $ggauoeuaesiymgee = ["\x2e\x69\163\55\151\x6e\166\141\154\151\144\x20\151\156\x70\165\164" => ["\143\154\x61\163\x73" => "\162\x65\x71\165\151\162\145\x64\55\x69\156\160\165\x74"], "\x2e\x69\x73\55\151\156\x76\141\154\x69\144\40\163\x65\154\x65\x63\164" => ["\x63\x6c\141\x73\x73" => "\162\145\x71\x75\x69\x72\x65\144\x2d\151\x6e\x70\165\x74"], "\163\x65\x6c\145\143\x74\54\x20\x69\x6e\x70\165\x74" => ["\x63\154\x61\x73\163" => "\x66\157\162\x6d\x2d\x63\x6f\156\x74\x72\x6f\154"], "\43\142\151\x6c\154\151\x6e\147\x5f\146\x69\162\163\x74\137\x6e\x61\x6d\x65\x5f\x66\151\x65\x6c\x64" => ["\143\x6c\x61\163\163" => "\143\x6f\154\55\155\x64\x2d\66"], "\x23\x62\x69\154\154\151\156\147\x5f\154\x61\163\164\x5f\156\141\155\145\x5f\x66\x69\145\x6c\x64" => ["\x63\154\x61\163\x73" => "\143\157\154\x2d\155\144\x2d\x36"], "\x23\142\151\154\x6c\151\x6e\x67\137\160\150\157\156\145\x5f\146\x69\x65\x6c\144" => ["\143\x6c\141\163\x73" => "\x63\157\154\55\155\144\55\66"], "\x23\x62\x69\x6c\x6c\151\156\147\137\155\157\142\x69\x6c\x65\x5f\x66\x69\145\154\144" => ["\143\154\141\163\x73" => "\x63\x6f\x6c\x2d\155\144\x2d\x36"], "\x23\142\151\154\154\151\156\x67\137\x63\x6f\155\x70\141\156\171\x5f\x66\151\145\x6c\144" => ["\x63\x6c\141\163\x73" => "\143\x6f\154\55\x6d\x64\x2d\x36"], "\43\x62\x69\x6c\x6c\151\156\x67\x5f\143\151\164\171\137\146\x69\x65\x6c\x64" => ["\x63\154\141\163\x73" => "\143\157\x6c\x2d\155\144\55\66"], "\x23\142\151\x6c\x6c\151\x6e\147\137\x73\x74\141\x74\x65\x5f\x66\x69\145\x6c\x64" => ["\143\x6c\x61\x73\x73" => "\x63\157\x6c\55\x6d\144\55\66"], "\x23\x62\x69\154\154\151\x6e\x67\137\145\x6d\x61\151\x6c\137\146\x69\x65\154\144" => ["\x63\x6c\x61\x73\163" => "\143\x6f\x6c\55\155\x64\55\x36"], "\43\x62\x69\154\x6c\x69\x6e\x67\x5f\160\157\x73\x74\x63\157\144\x65\x5f\146\151\x65\154\x64" => ["\x63\154\141\x73\x73" => "\x63\157\x6c\55\x6d\144\x2d\x36"], "\43\142\151\x6c\154\151\156\147\137\x70\157\x73\164\143\157\x64\x65\137\146\x69\x65\154\x64\x20\151\x6e\x70\x75\164" => ["\143\154\x61\163\163" => "\x64\151\162\145\x63\164\151\157\x6e\55\x6c\x74\x72"], "\43\x63\165\x73\x74\157\x6d\x65\x72\137\x64\x65\x74\x61\151\154\x73\x20\x69\x6e\x70\165\164" => ["\143\x6c\x61\x73\163" => "\146\157\162\155\55\x63\157\156\164\162\157\x6c"], "\x2e\167\x6f\157\143\x6f\155\x6d\145\x72\143\x65\55{$eaoumsseceiowgsk}\x2d\146\151\x65\x6c\144\x73\x5f\x5f\146\x69\145\x6c\144\x2d\x77\x72\x61\x70\x70\145\x72\40\x70" => ["\x63\154\141\x73\163" => "\146\157\x72\155\55\x67\x72\x6f\x75\x70\x20\143\x6f\x6c\55\x31\x32"], "\x70" => ["\x63\154\x61\163\x73" => "\x6d\142\x2d\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
