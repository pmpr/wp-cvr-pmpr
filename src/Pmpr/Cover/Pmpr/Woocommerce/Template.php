<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cfede4ac12c             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\144\141\163\x68\x62\157\141\x72\x64" => IconInterface::ygcmqmkcsymeucoq, "\157\162\x64\145\x72\163" => IconInterface::goqumcwkcuygcaui, "\144\157\167\x6e\x6c\x6f\141\x64\x73" => IconInterface::msyqysqykouywsua, "\x65\x64\x69\x74\55\x61\144\144\162\145\x73\163" => IconInterface::wykikkeyisimsmyy, "\x70\141\x79\x6d\145\156\x74\55\x6d\145\164\x68\157\x64\x73" => IconInterface::acciucugwcskkwmi, "\145\144\151\164\x2d\141\x63\x63\x6f\165\156\164" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\x73\x74\x6f\155\x65\x72\55\x6c\157\147\x6f\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\157\157\x63\157\155\x6d\x65\x72\x63\x65\137\154\157\x6f\160\137\x70\162\x6f\x64\165\x63\164\x5f\x6c\151\x6e\153", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\x6c\141\x73\163" => "\164\x65\x78\x74\55\144\x65\143\157\x72\x61\164\151\x6f\156\55\x6e\157\x6e\x65\40\x74\x65\x78\164\x2d\x6d\165\164\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x72\151\x63\145\x73" => [], "\160\x72\x6f\144\165\x63\x74" => '', "\164\144\x5f\x63\x6c\x61\163\163" => '', "\164\162\x5f\x63\154\141\163\163" => '', "\164\150\x5f\143\154\141\x73\163" => "\164\x65\x78\x74\x2d\147\162\x61\171\x2d\x38\x30\60\40\160\171\55\62", "\150\x61\163\137\164\151\x74\x6c\145" => true, "\164\141\142\154\145\x5f\143\154\141\163\163" => "\x6d\x62\x2d\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\157\144\x75\143\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\160\162\x69\x63\145\163", false); if (!$product) { goto usqgaogkqgemuima; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto mswsoaimesegiiic; usqgaogkqgemuima: global $product; mswsoaimesegiiic: if (!$product instanceof WC_Product) { goto eiawsoasmscmqswa; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto goeoymmqqqeeoime; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\56\x77\157\157\143\x6f\155\155\145\162\x63\x65\x2d\120\x72\x69\143\145\x2d\x63\x75\162\162\145\x6e\x63\171\x53\x79\155\x62\x6f\154" => ["\143\154\141\x73\x73" => "\146\157\x6e\164\55\61\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto egasokooagakisiy; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); egasokooagakisiy: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\x65\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\156\x73"); if ($eukiyocmgugiioei) { goto qgegkeomwscwwiuw; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto qmiwsequckckoaei; qgegkeomwscwwiuw: $uiiuuaeiyecmiouc["\x72\x65\147\x75\154\141\162\137\x70\162\151\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto kecwuwwcwokuksyq; } $uiiuuaeiyecmiouc["\144\151\x73\143\157\x75\156\164"] = $this->yqauycsoymimeise($product); kecwuwwcwokuksyq: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\x64\x69\163\143\x6f\165\x6e\164\x5f\x65\170\160\x69\x72\145"] = $this->sscegwueamckwmcy("\167\x6f\x6f\x63\157\155\x6d\145\x72\x63\x65\x5f\160\x72\157\x64\165\143\164\137\144\151\x73\143\157\165\156\x74\x5f\145\170\160\x69\x72\x65\137\x68\164\155\x6c", '', ["\x70\x72\x6f\x64\165\x63\164" => $product]); qmiwsequckckoaei: $uiiuuaeiyecmiouc["\x73\x61\154\145\137\x70\x72\x69\x63\145"] = $eeeyyekmaesysegc; goeoymmqqqeeoime: eiawsoasmscmqswa: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto sukskmcwsoysiuqu; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\145\x67\165\154\141\162\137\160\x72\x69\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\x65\x67\165\x6c\x61\x72\40\x50\162\x69\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto ygkcacsyyckescqs; case "\163\x61\154\x65\137\x70\162\x69\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\141\x6c\x65\40\120\x72\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto ygkcacsyyckescqs; case "\144\x69\163\143\x6f\x75\x6e\x74\137\x65\170\160\x69\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\163\x63\x6f\x75\x6e\164\x20\105\170\x70\x69\x72\x61\164\151\x6f\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto ygkcacsyyckescqs; case "\x64\151\163\143\157\x75\x6e\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\151\x73\x63\x6f\165\156\164", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto ygkcacsyyckescqs; } cuoqqgaygogsmmic: ygkcacsyyckescqs: if (!$aumscagymwyyicag) { goto cgewcsueoyaeikgm; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; cgewcsueoyaeikgm: qmeoaqmsuseueqiy: } ickcmqoiosquugwe: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6d\x65\x74\x61\x64\141\x74\141\x5f\162\145\x6e\144\145\162"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\160\x72\151\x63\x65")])); sukskmcwsoysiuqu: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto igymseewwyiocoug; } woocommerce_template_loop_add_to_cart(); goto mqccmesakuemceqi; igymseewwyiocoug: woocommerce_template_single_add_to_cart(); mqccmesakuemceqi: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto kooskuwkuayiuose; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\160\162\157\x64\165\x63\x74\x5f\143\x61\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto twkmiuomimomscew; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\162\145\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\143\154\141\163\x73" => "\160\162\x6f\x64\165\143\164\55\143\141\x74\145\x67\x6f\162\x79\40\150\x6f\x76\x65\162\55\x70\162\151\155\x61\162\171\x20\146\x6f\156\x74\x2d\x31\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x49\x6e\40\x43\141\164\x65\147\x6f\x72\x79\72\40\45\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\x6c\x61\163\x73" => "\164\145\170\x74\55\147\x72\141\x79\x2d\66\60\x30"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\143\x6c\141\163\163" => "\x69\x63\157\x6e\55\163\x6d\40\155\162\x2d\x32\x20\x6d\x79\55\x61\x75\164\x6f"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\143\154\141\163\163" => "\x64\55\146\x6c\x65\170"]); if (!$koaqeegoeiaiccse) { goto eyiamcekkgkiawqy; } echo $nsmgceoqaqogqmuw; eyiamcekkgkiawqy: twkmiuomimomscew: kooskuwkuayiuose: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto qwcegcuowwgiccos; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto qcessicwuikwqsis; qwcegcuowwgiccos: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\143\x6c\x61\x73\163" => "\x70\x72\151\x63\145\55\144\151\163\143\157\x75\156\x74\x2d\x61\x6d\157\x75\156\x74\x20\164\x65\170\164\x2d\144\x61\x6e\x67\145\162"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\x69\x63\145\137\144\x69\x73\143\157\x75\156\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); qcessicwuikwqsis: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto coywmiyqgsweuiic; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto yssscwioiyygssec; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; yssscwioiyygssec: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto ieumumsgyguceusy; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\x69\143\145\137\x64\x69\163\x63\157\x75\x6e\164"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); ieumumsgyguceusy: coywmiyqgsweuiic: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\x65\161\x75\151\162\x65\x64"]) && $aiowsaccomcoikus["\162\145\x71\165\x69\162\x65\144"])) { goto oouoqimaaqcmccay; } $aiowsaccomcoikus["\143\154\141\163\163"] = ["\x69\163\x2d\151\156\166\141\154\151\144"]; oouoqimaaqcmccay: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; ycakugokkqkuqyiu: } siqagquguiemuoku: unset($ikgwqyuyckaewsow["\x62\x69\154\154\151\156\147\137\143\157\165\156\164\x72\171"]); unset($ikgwqyuyckaewsow["\x62\151\154\154\151\156\x67\x5f\141\x64\x64\162\x65\x73\163\137\x32"]); $ikgwqyuyckaewsow["\142\x69\x6c\x6c\151\x6e\147\x5f\x73\x74\141\164\145"]["\x70\162\151\x6f\x72\x69\164\171"] = 60; $ikgwqyuyckaewsow["\142\151\154\154\151\x6e\x67\x5f\x63\x69\x74\171"]["\160\162\151\157\x72\x69\164\x79"] = 70; $ikgwqyuyckaewsow["\142\x69\x6c\154\151\x6e\x67\x5f\141\144\x64\x72\145\x73\x73\137\61"]["\160\162\151\157\162\151\x74\x79"] = 80; $ikgwqyuyckaewsow["\x62\x69\154\x6c\151\x6e\147\137\x65\155\x61\x69\x6c"]["\160\x72\x69\157\x72\151\164\171"] = 98; $ikgwqyuyckaewsow["\x62\151\x6c\x6c\x69\x6e\147\x5f\x70\x6f\163\164\x63\x6f\x64\145"]["\154\141\142\x65\x6c"] = __("\120\157\163\x74\143\157\144\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\x69\154\x6c\x69\x6e\x67\x5f\145\x6d\141\151\x6c"]["\154\x61\142\145\154"] = __("\x45\x6d\x61\x69\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\x6e\x20\x62\x74\156\x2d\x62\154\157\143\153\40\x62\x74\156\x2d\160\x72\x69\x6d\141\x72\171\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\x6c\x2e\167\157\157\x63\x6f\x6d\x6d\x65\x72\143\x65\55\163\150\151\160\x70\151\x6e\147\55\x6d\x65\164\x68\157\x64\x73" => ["\143\x6c\x61\x73\163" => "\154\x69\163\x74\x2d\x67\162\x6f\x75\x70\40\154\x69\x73\x74\x2d\x67\x72\x6f\165\160\55\x66\x6c\x75\163\150\x20\142\147\x2d\164\162\x61\x6e\163\160\x61\x72\145\156\164"], "\x75\x6c\56\167\x6f\x6f\143\157\155\x6d\145\x72\143\145\55\x73\150\x69\x70\160\151\156\147\55\x6d\x65\164\150\157\144\163\x20\x6c\141\142\145\x6c" => ["\x63\154\141\163\163" => "\x6d\55\60"], "\165\x6c\56\x77\157\x6f\143\x6f\x6d\155\x65\x72\143\145\55\163\x68\x69\160\160\x69\x6e\x67\x2d\x6d\x65\x74\x68\157\x64\x73\40\154\x69" => ["\x63\x6c\x61\163\x73" => "\154\151\163\164\x2d\x67\162\157\165\x70\55\x69\x74\145\155\x20\160\x79\55\61\x20\160\170\x2d\x30"]]; } public function umooigokeuauqqsw() : array { return ["\144\154\56\166\141\162\151\141\x74\151\x6f\156" => ["\143\x6c\x61\163\163" => "\144\x2d\146\x6c\145\x78\x20\155\x2d\x61\x75\164\x6f"], "\144\x6c\x2e\x76\141\x72\151\141\x74\151\x6f\x6e\40\x70" => ["\143\154\141\163\163" => "\x6d\142\55\x30"], "\144\154\x2e\x76\x61\162\151\141\x74\x69\157\156\x20\144\x64" => ["\x63\154\141\x73\163" => "\x6d\142\x2d\x30"], "\x64\154\56\166\x61\162\x69\x61\x74\x69\x6f\156\x20\x64\x74" => ["\143\x6c\141\163\x73" => "\167\x2d\154\147\55\62\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\x66\157\162\x6d\55\162\157\x77" => ["\x63\x6c\141\x73\163" => "\146\x6f\162\x6d\x2d\x72\157\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\x77\x6f\157\143\x6f\155\x6d\x65\x72\143\x65\55{$eaoumsseceiowgsk}\x2d\146\151\x65\x6c\x64\163\x5f\x5f\x66\x69\x65\154\x64\x2d\x77\x72\x61\x70\160\x65\x72\40\x3e\40\160", ["\x63\154\141\163\x73" => "\162\x6f\x77"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\x62\142\162"]); $ggauoeuaesiymgee = ["\56\151\x73\x2d\151\x6e\x76\141\154\151\144\x20\151\x6e\x70\x75\164" => ["\x63\154\141\163\163" => "\x72\x65\161\x75\x69\x72\x65\x64\55\x69\156\160\x75\x74"], "\56\x69\163\x2d\151\156\x76\141\x6c\151\x64\40\163\145\154\x65\x63\x74" => ["\x63\x6c\x61\163\163" => "\162\145\161\165\x69\162\x65\x64\x2d\151\156\160\165\x74"], "\x73\145\154\x65\x63\x74\x2c\40\151\x6e\x70\x75\164" => ["\143\154\141\x73\x73" => "\x66\157\x72\x6d\55\143\x6f\156\164\x72\157\x6c"], "\43\142\x69\154\154\151\156\147\137\146\151\x72\163\164\137\x6e\141\x6d\x65\x5f\x66\x69\x65\x6c\144" => ["\143\x6c\141\163\x73" => "\x63\157\154\55\155\x64\55\66"], "\x23\142\151\x6c\x6c\151\156\147\x5f\154\x61\x73\164\137\156\141\155\x65\x5f\146\x69\145\x6c\x64" => ["\143\154\141\x73\163" => "\x63\157\x6c\55\x6d\144\x2d\x36"], "\x23\x62\151\x6c\154\x69\x6e\147\x5f\x70\x68\157\156\145\137\x66\151\145\x6c\x64" => ["\143\154\141\163\163" => "\143\x6f\x6c\55\x6d\x64\55\x36"], "\43\142\151\x6c\x6c\151\x6e\x67\x5f\155\157\x62\x69\x6c\x65\x5f\146\x69\x65\x6c\x64" => ["\x63\154\141\x73\x73" => "\x63\157\x6c\55\155\144\x2d\66"], "\x23\x62\x69\154\154\151\156\x67\137\x63\157\155\x70\x61\x6e\171\x5f\146\151\145\x6c\144" => ["\143\154\141\163\x73" => "\143\x6f\154\x2d\x6d\x64\55\66"], "\43\142\x69\x6c\154\x69\x6e\147\137\143\151\x74\x79\x5f\146\x69\145\x6c\x64" => ["\x63\x6c\x61\163\163" => "\143\157\154\55\x6d\144\55\66"], "\x23\142\x69\154\x6c\x69\x6e\147\137\x73\x74\x61\164\x65\137\146\x69\145\154\144" => ["\143\x6c\141\163\163" => "\x63\x6f\154\x2d\x6d\144\55\66"], "\43\142\x69\x6c\154\x69\x6e\x67\137\145\155\x61\151\154\137\146\x69\x65\154\144" => ["\x63\x6c\x61\163\x73" => "\x63\x6f\x6c\55\x6d\144\x2d\x36"], "\x23\x62\151\x6c\x6c\151\x6e\147\x5f\160\157\163\164\x63\x6f\144\x65\x5f\x66\x69\x65\154\144" => ["\143\x6c\x61\x73\x73" => "\143\x6f\x6c\55\155\x64\x2d\x36"], "\43\x62\151\154\154\x69\156\147\137\160\157\x73\x74\143\x6f\144\145\137\146\x69\x65\154\x64\x20\x69\156\160\x75\x74" => ["\143\154\141\x73\163" => "\144\151\x72\x65\x63\x74\151\157\156\55\154\x74\x72"], "\x23\x63\165\163\x74\157\155\145\x72\x5f\144\x65\164\141\x69\x6c\163\x20\x69\x6e\160\165\164" => ["\143\154\x61\163\x73" => "\x66\157\162\155\55\143\x6f\156\164\x72\157\x6c"], "\56\167\157\157\x63\x6f\155\x6d\145\x72\143\145\55{$eaoumsseceiowgsk}\55\x66\151\145\x6c\144\x73\x5f\x5f\146\x69\145\x6c\x64\55\x77\162\x61\x70\x70\145\x72\x20\x70" => ["\143\x6c\x61\x73\163" => "\x66\157\x72\x6d\x2d\x67\162\157\x75\160\x20\143\157\154\55\x31\x32"], "\160" => ["\x63\154\141\x73\x73" => "\155\142\55\x32"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
