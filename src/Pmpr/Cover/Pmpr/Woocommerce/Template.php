<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661da299c54f1             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\144\141\x73\150\x62\x6f\141\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\157\x72\x64\x65\162\x73" => IconInterface::goqumcwkcuygcaui, "\144\x6f\167\156\154\157\x61\x64\x73" => IconInterface::msyqysqykouywsua, "\145\x64\151\x74\55\x61\x64\x64\x72\145\163\x73" => IconInterface::wykikkeyisimsmyy, "\x70\x61\x79\155\145\x6e\164\x2d\155\x65\x74\150\157\144\163" => IconInterface::acciucugwcskkwmi, "\145\144\x69\164\55\141\143\x63\157\165\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\143\165\x73\164\x6f\x6d\x65\x72\55\154\157\147\157\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\157\x6f\143\x6f\155\x6d\145\x72\143\x65\x5f\x6c\x6f\157\160\137\x70\162\157\144\165\143\164\x5f\154\151\156\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\154\141\163\x73" => "\164\x65\x78\x74\x2d\144\x65\x63\x6f\x72\141\164\151\157\156\55\x6e\157\156\145\40\x74\x65\170\x74\x2d\x6d\165\164\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\160\162\x69\143\145\x73" => [], "\x70\x72\x6f\144\x75\143\x74" => '', "\164\144\x5f\x63\154\141\x73\163" => '', "\164\x72\x5f\x63\x6c\141\163\163" => '', "\164\x68\x5f\143\154\141\x73\163" => "\x74\x65\x78\164\x2d\147\x72\x61\x79\55\70\x30\60\40\x70\x79\55\x32", "\150\141\x73\137\164\x69\x74\154\x65" => true, "\164\x61\x62\154\145\137\x63\154\141\x73\163" => "\155\142\x2d\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\160\162\x6f\144\165\143\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\x69\x63\x65\x73", false); if (!$product) { goto aiccyaswigkaycqk; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto sqyokemumceysegy; aiccyaswigkaycqk: global $product; sqyokemumceysegy: if (!$product instanceof WC_Product) { goto ucuoeymyqeokgsya; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto egmayaiikwsskgmy; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\167\x6f\157\143\x6f\x6d\155\x65\x72\x63\145\55\120\162\151\143\x65\55\x63\165\162\x72\x65\156\143\171\x53\171\x6d\x62\157\154" => ["\x63\x6c\x61\163\163" => "\146\157\156\x74\x2d\x31\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto oqousikwiiqagoyw; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); oqousikwiiqagoyw: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\145\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\x6e\163"); if ($eukiyocmgugiioei) { goto aueaceeyommgkicu; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto mysueeoswqgccmui; aueaceeyommgkicu: $uiiuuaeiyecmiouc["\x72\x65\147\165\x6c\141\162\137\160\162\151\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto zayqqeqgcwkekwws; } $uiiuuaeiyecmiouc["\144\151\x73\x63\157\x75\156\x74"] = $this->yqauycsoymimeise($product); zayqqeqgcwkekwws: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\151\x73\143\157\165\156\164\x5f\x65\x78\x70\151\162\x65"] = $this->sscegwueamckwmcy("\167\x6f\157\x63\157\155\x6d\x65\x72\x63\145\x5f\160\162\x6f\144\165\143\x74\137\144\151\x73\143\x6f\x75\x6e\x74\137\145\x78\160\151\162\x65\137\150\164\x6d\154", '', ["\x70\162\x6f\x64\x75\x63\x74" => $product]); mysueeoswqgccmui: $uiiuuaeiyecmiouc["\x73\x61\x6c\145\137\160\x72\x69\143\145"] = $eeeyyekmaesysegc; egmayaiikwsskgmy: ucuoeymyqeokgsya: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto qkcsykuocwuyaice; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\x65\147\x75\x6c\x61\x72\137\160\162\x69\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\x65\147\165\154\x61\x72\x20\120\x72\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto agkmiayuawacakau; case "\163\x61\154\145\x5f\160\162\151\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\x61\x6c\x65\x20\120\x72\151\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto agkmiayuawacakau; case "\144\x69\x73\x63\x6f\165\x6e\x74\x5f\145\170\x70\x69\x72\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\151\x73\x63\157\165\x6e\164\x20\105\170\x70\x69\x72\141\x74\151\157\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto agkmiayuawacakau; case "\144\x69\163\x63\x6f\165\156\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\143\157\x75\x6e\164", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto agkmiayuawacakau; } syuaummumssgwwee: agkmiayuawacakau: if (!$aumscagymwyyicag) { goto oocuemosmeeekgas; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; oocuemosmeeekgas: sguskaeaaqcagqgc: } yuuyikiacmmueosu: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\160\x72\x69\143\145")]); $this->ewcsyqaaigkicgse("\x6d\145\164\141\144\x61\x74\141\137\162\x65\156\144\x65\x72", $ywmkwiwkosakssii); qkcsykuocwuyaice: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto uoeasoimegouymka; } woocommerce_template_loop_add_to_cart(); goto egsycocugqyyswsi; uoeasoimegouymka: woocommerce_template_single_add_to_cart(); egsycocugqyyswsi: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto osuscoaaomwcqkew; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\160\x72\157\x64\165\143\x74\x5f\143\x61\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto aoquoewagkseayug; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\154\x61\163\163" => "\160\x72\x6f\x64\165\143\164\x2d\x63\141\x74\145\x67\157\162\x79\40\x68\157\166\x65\162\55\x70\162\x69\x6d\141\x72\171\40\x66\157\156\x74\55\61\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\x6e\x20\103\141\164\x65\x67\x6f\162\x79\x3a\40\45\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\x6c\141\163\x73" => "\x74\145\x78\164\x2d\x67\x72\x61\x79\x2d\x36\60\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\x6c\x61\163\163" => "\x69\x63\157\156\55\163\x6d\40\155\162\x2d\x32\x20\155\x79\55\141\165\164\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\143\154\x61\x73\163" => "\x64\55\x66\x6c\145\170"]); if (!$koaqeegoeiaiccse) { goto qiaimmucomukkeka; } echo $nsmgceoqaqogqmuw; qiaimmucomukkeka: aoquoewagkseayug: osuscoaaomwcqkew: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto ciucewqgyoiouesq; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto cgmgqucewwssmicq; ciucewqgyoiouesq: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\143\154\x61\163\x73" => "\x70\x72\x69\143\145\x2d\x64\x69\163\143\x6f\x75\x6e\164\x2d\141\155\157\165\x6e\164\x20\164\x65\x78\x74\55\x64\141\156\147\145\162"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\143\x65\x5f\144\x69\163\143\x6f\x75\156\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); cgmgqucewwssmicq: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto oyiuemaaykgkqqam; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto mkomygccqkmkumsi; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; mkomygccqkmkumsi: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto ussceseaimqywuiy; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\x69\x63\x65\x5f\x64\151\163\x63\157\x75\x6e\164"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); ussceseaimqywuiy: oyiuemaaykgkqqam: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\x65\161\165\x69\x72\x65\x64"]) && $aiowsaccomcoikus["\x72\145\x71\x75\x69\x72\x65\144"])) { goto uycesqqkoeamocgm; } $aiowsaccomcoikus["\143\154\141\163\x73"] = ["\x69\x73\x2d\x69\x6e\166\x61\154\151\144"]; uycesqqkoeamocgm: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; sqmoqymckwsogsqg: } gqmewagyagamokok: unset($ikgwqyuyckaewsow["\142\x69\154\x6c\151\156\x67\x5f\143\x6f\165\156\164\162\171"]); unset($ikgwqyuyckaewsow["\142\x69\x6c\x6c\x69\156\x67\x5f\141\x64\x64\x72\145\163\x73\x5f\62"]); $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\x69\156\x67\x5f\163\x74\141\x74\x65"]["\x70\x72\151\157\162\x69\164\x79"] = 60; $ikgwqyuyckaewsow["\x62\x69\154\154\151\156\147\x5f\143\151\164\x79"]["\160\162\151\157\162\151\164\171"] = 70; $ikgwqyuyckaewsow["\x62\x69\154\x6c\x69\156\x67\137\x61\x64\144\x72\x65\x73\x73\137\61"]["\x70\x72\x69\157\x72\x69\164\171"] = 80; $ikgwqyuyckaewsow["\x62\x69\154\x6c\x69\156\x67\x5f\x65\155\141\151\x6c"]["\x70\162\x69\x6f\162\151\x74\x79"] = 98; $ikgwqyuyckaewsow["\x62\x69\154\154\x69\x6e\x67\x5f\x70\157\x73\x74\143\157\144\145"]["\154\141\142\x65\x6c"] = __("\120\x6f\163\164\143\x6f\144\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\x69\x6c\154\151\x6e\x67\137\145\155\141\x69\x6c"]["\154\141\142\145\154"] = __("\x45\155\141\x69\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\x6e\40\142\x74\156\55\142\x6c\x6f\x63\153\40\142\x74\x6e\x2d\x70\x72\x69\155\141\162\171\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\x6c\x2e\167\157\157\x63\157\155\x6d\145\x72\x63\x65\x2d\163\150\151\x70\160\151\156\147\55\x6d\x65\x74\x68\157\144\x73" => ["\143\x6c\x61\x73\x73" => "\x6c\151\163\x74\55\147\162\157\165\x70\40\x6c\151\163\164\55\147\x72\157\x75\160\x2d\x66\x6c\165\163\x68\x20\x62\147\x2d\x74\x72\141\x6e\x73\160\x61\162\x65\x6e\164"], "\x75\154\x2e\x77\157\157\x63\157\x6d\155\145\x72\x63\x65\x2d\x73\150\151\x70\160\151\x6e\147\55\x6d\x65\x74\x68\157\x64\x73\x20\154\141\142\x65\154" => ["\x63\x6c\141\163\x73" => "\155\55\x30"], "\x75\154\x2e\x77\x6f\x6f\143\x6f\155\x6d\145\162\143\x65\55\x73\x68\x69\x70\160\x69\156\147\55\155\145\x74\150\x6f\x64\x73\40\x6c\x69" => ["\x63\x6c\141\x73\x73" => "\154\x69\163\x74\x2d\147\x72\157\x75\x70\55\151\164\145\155\40\x70\x79\x2d\x31\x20\x70\170\55\60"]]; } public function umooigokeuauqqsw() : array { return ["\144\x6c\56\x76\141\x72\151\x61\x74\151\157\x6e" => ["\x63\x6c\141\x73\163" => "\144\x2d\x66\154\x65\170\40\155\x2d\141\x75\x74\157"], "\x64\x6c\x2e\166\141\x72\x69\x61\164\151\157\156\40\x70" => ["\x63\154\141\x73\163" => "\155\142\55\60"], "\x64\154\x2e\166\141\x72\151\x61\x74\151\157\156\x20\144\144" => ["\143\154\141\163\163" => "\155\x62\55\x30"], "\144\154\56\166\141\x72\x69\141\x74\151\157\156\x20\x64\164" => ["\x63\154\x61\163\x73" => "\x77\55\x6c\x67\55\62\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\146\x6f\x72\x6d\x2d\162\x6f\167" => ["\x63\154\x61\x73\163" => "\146\157\x72\155\55\162\x6f\167"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\x77\157\157\143\157\x6d\x6d\x65\x72\x63\x65\x2d{$eaoumsseceiowgsk}\55\x66\x69\x65\x6c\x64\163\x5f\137\146\151\x65\x6c\x64\x2d\x77\x72\141\x70\160\145\x72\40\x3e\40\x70", ["\x63\154\x61\x73\x73" => "\162\x6f\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\142\142\x72"]); $ggauoeuaesiymgee = ["\56\151\163\x2d\151\156\166\x61\154\x69\x64\x20\x69\x6e\160\x75\x74" => ["\143\154\x61\x73\163" => "\162\x65\161\x75\151\162\145\144\x2d\151\x6e\160\x75\x74"], "\56\x69\x73\x2d\151\x6e\x76\x61\154\151\144\40\163\x65\x6c\145\x63\x74" => ["\143\x6c\x61\x73\x73" => "\162\145\x71\165\x69\x72\145\x64\x2d\x69\156\x70\x75\164"], "\x73\x65\154\145\x63\164\x2c\40\x69\x6e\x70\165\x74" => ["\143\x6c\x61\163\163" => "\146\x6f\162\x6d\55\x63\x6f\156\164\x72\x6f\x6c"], "\x23\x62\x69\154\x6c\151\156\147\137\x66\151\x72\x73\x74\137\156\141\155\x65\x5f\x66\x69\145\154\x64" => ["\x63\154\141\163\x73" => "\x63\x6f\154\55\155\144\x2d\66"], "\43\142\x69\x6c\154\x69\156\147\x5f\x6c\141\163\x74\x5f\156\x61\155\x65\137\x66\151\145\154\144" => ["\x63\x6c\141\163\x73" => "\x63\157\154\55\x6d\x64\x2d\66"], "\43\x62\x69\x6c\x6c\x69\x6e\147\x5f\160\x68\x6f\156\x65\137\146\151\x65\x6c\144" => ["\x63\x6c\x61\163\x73" => "\143\157\x6c\55\x6d\144\x2d\66"], "\x23\x62\151\x6c\154\x69\156\147\137\x6d\157\142\151\x6c\x65\137\146\151\x65\x6c\144" => ["\x63\154\x61\x73\163" => "\x63\157\x6c\x2d\155\144\x2d\x36"], "\x23\x62\x69\154\154\151\156\x67\137\x63\x6f\x6d\160\x61\156\x79\137\146\x69\x65\154\144" => ["\x63\154\x61\163\163" => "\143\x6f\x6c\x2d\155\x64\55\66"], "\43\x62\151\x6c\x6c\x69\x6e\x67\x5f\143\x69\164\x79\x5f\146\151\x65\154\144" => ["\143\154\141\x73\163" => "\x63\x6f\154\x2d\155\144\55\66"], "\43\142\151\x6c\x6c\151\x6e\147\x5f\163\x74\141\x74\x65\137\x66\151\x65\154\x64" => ["\143\154\141\163\163" => "\143\157\x6c\x2d\x6d\144\x2d\x36"], "\43\142\x69\x6c\154\x69\x6e\147\137\145\155\141\151\154\137\146\151\145\x6c\x64" => ["\143\154\141\x73\163" => "\x63\157\154\55\155\144\55\x36"], "\x23\x62\x69\154\x6c\x69\156\147\137\160\157\163\164\143\x6f\x64\x65\137\146\151\x65\x6c\x64" => ["\143\x6c\141\x73\x73" => "\143\157\x6c\55\155\x64\55\x36"], "\43\142\151\154\x6c\x69\156\x67\137\x70\157\x73\164\143\157\x64\145\x5f\x66\x69\x65\154\144\x20\x69\x6e\160\x75\x74" => ["\143\154\x61\x73\163" => "\144\x69\x72\x65\x63\x74\x69\x6f\156\55\x6c\x74\x72"], "\x23\143\x75\x73\x74\x6f\x6d\x65\162\x5f\144\145\164\141\151\x6c\x73\x20\151\156\160\165\164" => ["\143\154\x61\x73\x73" => "\x66\x6f\162\x6d\55\143\157\156\164\162\x6f\x6c"], "\x2e\x77\x6f\x6f\143\157\155\x6d\x65\162\x63\x65\55{$eaoumsseceiowgsk}\x2d\146\151\x65\x6c\144\163\137\x5f\146\151\x65\154\x64\55\167\162\141\x70\160\145\x72\40\160" => ["\143\x6c\x61\x73\163" => "\146\x6f\162\x6d\x2d\x67\x72\x6f\165\160\40\x63\x6f\x6c\x2d\61\62"], "\160" => ["\143\154\x61\163\x73" => "\155\x62\55\x32"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
