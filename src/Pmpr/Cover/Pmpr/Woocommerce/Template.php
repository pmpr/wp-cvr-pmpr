<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b85330cef5b             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\141\163\150\142\x6f\141\162\144" => IconFontawesomeInterface::ecwsqqmyqyiyaqmg, "\x6f\162\x64\145\162\x73" => IconFontawesomeInterface::aaimaiciamyiswsy, "\144\x6f\167\x6e\x6c\157\141\x64\x73" => IconFontawesomeInterface::qwssukegewagecki, "\x65\144\x69\x74\x2d\x61\144\x64\x72\x65\163\163" => IconFontawesomeInterface::cismwmmymsgoswuo, "\160\x61\171\x6d\x65\x6e\x74\x2d\155\145\164\150\x6f\x64\163" => IconFontawesomeInterface::yeqamuyomoqsqoak, "\145\144\x69\164\x2d\x61\x63\x63\x6f\x75\x6e\x74" => IconFontawesomeInterface::aqykgqywgikckyee, "\143\x75\x73\x74\x6f\x6d\x65\x72\55\154\x6f\x67\x6f\165\164" => IconFontawesomeInterface::suecqgqeiockiwmw]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconFontawesomeInterface::aqaocgsqseeqmoii); } protected bool $isGridView = false; public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\157\157\143\157\x6d\x6d\145\162\143\x65\x5f\154\157\157\x70\x5f\x70\162\157\x64\x75\143\164\137\154\151\156\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\143\154\141\163\x73" => "\x74\145\x78\164\x2d\x64\145\x63\157\x72\141\164\x69\x6f\156\x2d\x6e\x6f\x6e\x65\x20\x74\x65\x78\164\x2d\155\165\164\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x72\151\143\x65\163" => [], "\x70\x72\x6f\x64\165\143\x74" => '', "\164\x64\137\143\154\x61\x73\x73" => '', "\x74\162\x5f\143\154\141\x73\163" => '', "\164\150\137\x63\x6c\x61\163\163" => "\164\145\x78\x74\x2d\x67\162\x61\x79\x2d\x38\60\60\x20\160\x79\x2d\62", "\150\141\x73\137\164\151\164\154\x65" => true, "\x74\x61\142\x6c\145\137\143\x6c\x61\163\x73" => "\x6d\142\55\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\160\x72\157\144\x75\143\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\151\x63\x65\163", false); if (!$product) { goto foeeqckqsyockkak; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto iekumemscwieugqw; foeeqckqsyockkak: global $product; iekumemscwieugqw: if (!$product instanceof WC_Product) { goto uqqaiagaeqgqgaiy; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto uguigkcmukuouway; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\157\157\x63\157\x6d\155\145\x72\x63\145\55\120\162\x69\x63\145\x2d\x63\165\x72\x72\145\x6e\143\x79\123\171\x6d\x62\157\154" => ["\143\x6c\141\163\x73" => "\146\x6f\156\x74\55\x31\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto hoeeyiowekaeemko; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); hoeeyiowekaeemko: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\145\154"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\156\163"); if ($eukiyocmgugiioei) { goto usquiuuyiyqaeyiu; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto qicwaskssogcokgm; usquiuuyiyqaeyiu: $uiiuuaeiyecmiouc["\162\145\147\165\154\x61\162\x5f\x70\162\151\143\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto kymkucucyeoeikim; } $uiiuuaeiyecmiouc["\144\x69\x73\x63\x6f\165\156\x74"] = $this->yqauycsoymimeise($product); kymkucucyeoeikim: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\x64\x69\x73\x63\x6f\165\156\164\137\x65\170\x70\151\162\145"] = $this->sscegwueamckwmcy("\x77\x6f\157\x63\x6f\x6d\155\x65\x72\143\145\137\160\x72\x6f\x64\165\x63\164\137\144\151\163\143\x6f\x75\156\x74\137\x65\170\160\x69\162\145\137\150\x74\x6d\x6c", '', ["\x70\x72\x6f\x64\165\x63\x74" => $product]); qicwaskssogcokgm: $uiiuuaeiyecmiouc["\x73\141\154\x65\x5f\160\x72\151\143\x65"] = $eeeyyekmaesysegc; uguigkcmukuouway: uqqaiagaeqgqgaiy: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto wiysogeqqwgioyka; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\x65\x67\x75\154\141\x72\x5f\160\x72\151\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\x65\x67\x75\154\x61\162\40\x50\162\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto aegysmeecgcgayyw; case "\163\x61\154\x65\x5f\160\x72\151\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\141\x6c\145\x20\x50\x72\151\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto aegysmeecgcgayyw; case "\x64\x69\x73\x63\x6f\165\156\x74\x5f\145\x78\x70\x69\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\x73\143\x6f\x75\x6e\x74\x20\x45\x78\160\x69\162\x61\164\x69\x6f\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto aegysmeecgcgayyw; case "\x64\x69\x73\143\x6f\x75\x6e\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\x73\143\x6f\x75\x6e\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto aegysmeecgcgayyw; } suqkuqygkkgwyaie: aegysmeecgcgayyw: if (!$aumscagymwyyicag) { goto soaccwqimeksgwiw; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; soaccwqimeksgwiw: gaomwagkcciesyqy: } esuiysskoweawsue: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6d\x65\164\x61\144\141\x74\x61\137\162\x65\x6e\x64\x65\162"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\x72\x69\143\145")])); wiysogeqqwgioyka: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto skkamseieeusycye; } woocommerce_template_loop_add_to_cart(); goto cgiscsqwwgqqaeqi; skkamseieeusycye: woocommerce_template_single_add_to_cart(); cgiscsqwwgqqaeqi: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto ewymsmkkiksgwysk; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\160\162\157\x64\165\143\x74\x5f\x63\x61\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto giaacoqqqsekcayy; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\x6c\141\163\x73" => "\160\x72\x6f\144\165\x63\x74\x2d\x63\141\x74\x65\x67\x6f\162\x79\40\x68\x6f\x76\145\x72\x2d\x70\x72\x69\x6d\141\x72\171\40\146\x6f\x6e\164\55\61\x36"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\156\x20\103\x61\164\145\x67\157\162\171\72\x20\x25\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\154\x61\x73\163" => "\x74\x65\170\164\55\x67\x72\141\x79\x2d\66\60\x30"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconFontawesomeInterface::usaocmsseuquaqsu, ["\x63\154\141\163\x73" => "\151\x63\157\x6e\x2d\x73\x6d\40\155\x72\55\x32"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\x6c\141\163\x73" => "\144\x2d\146\154\145\170"]); if (!$koaqeegoeiaiccse) { goto syiqkaasoueowwui; } echo $nsmgceoqaqogqmuw; syiqkaasoueowwui: giaacoqqqsekcayy: ewymsmkkiksgwysk: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto cmegwsegsosyqcai; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto wmywuusgukmmaams; cmegwsegsosyqcai: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\143\x6c\141\163\x73" => "\160\x72\x69\143\x65\55\x64\151\x73\x63\x6f\165\x6e\x74\x2d\141\x6d\x6f\x75\156\x74\40\x74\x65\170\164\55\x64\x61\156\x67\x65\162"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\151\143\145\137\x64\151\x73\143\x6f\x75\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); wmywuusgukmmaams: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto egyyiccaeeiooaua; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto gkyawqqcmigqgaiq; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; gkyawqqcmigqgaiq: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto ooeausyowguqicuo; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\x63\145\137\x64\151\x73\143\157\165\x6e\164"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); ooeausyowguqicuo: egyyiccaeeiooaua: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\145\161\x75\x69\162\145\x64"]) && $aiowsaccomcoikus["\x72\x65\x71\165\x69\x72\145\x64"])) { goto igooksugieceoege; } $aiowsaccomcoikus["\x63\154\141\x73\163"] = ["\x69\x73\x2d\151\156\x76\x61\154\151\x64"]; igooksugieceoege: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; cewmoqyysgsmuiya: } scisgsyemmsekgos: unset($ikgwqyuyckaewsow["\142\x69\154\154\x69\x6e\147\x5f\x63\x6f\x75\156\x74\x72\x79"]); unset($ikgwqyuyckaewsow["\142\151\x6c\154\151\156\x67\137\141\x64\x64\162\x65\163\x73\137\62"]); $ikgwqyuyckaewsow["\142\x69\154\154\x69\x6e\x67\x5f\x73\164\x61\164\x65"]["\160\162\151\157\162\151\164\171"] = 60; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\x6e\x67\x5f\x63\x69\164\x79"]["\160\162\x69\x6f\x72\x69\x74\171"] = 70; $ikgwqyuyckaewsow["\x62\151\154\x6c\151\156\147\x5f\x61\x64\x64\162\145\163\163\137\61"]["\x70\162\151\x6f\162\x69\164\171"] = 80; $ikgwqyuyckaewsow["\x62\151\154\154\151\156\147\137\x65\x6d\141\x69\x6c"]["\160\162\x69\x6f\x72\x69\164\171"] = 98; $ikgwqyuyckaewsow["\x62\151\154\154\151\x6e\147\137\x70\157\x73\x74\x63\x6f\144\x65"]["\x6c\141\142\145\154"] = __("\120\x6f\163\x74\143\x6f\144\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\x69\x6c\154\x69\x6e\147\x5f\x65\155\x61\x69\154"]["\x6c\x61\x62\145\x6c"] = __("\x45\155\141\151\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\164\x6e\40\x62\x74\x6e\55\142\x6c\157\x63\x6b\40\142\x74\156\55\160\162\x69\155\x61\x72\x79\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\154\x2e\x77\x6f\157\x63\157\x6d\155\x65\x72\143\x65\x2d\163\x68\x69\160\x70\x69\x6e\x67\x2d\x6d\145\164\150\x6f\144\x73" => ["\x63\x6c\x61\x73\x73" => "\154\151\x73\164\x2d\147\162\157\165\x70\40\x6c\151\x73\164\55\147\162\157\165\x70\x2d\146\x6c\165\x73\x68\x20\x62\x67\55\164\162\141\x6e\163\160\x61\162\x65\x6e\164"], "\165\154\x2e\167\157\x6f\x63\157\155\155\145\x72\x63\x65\x2d\x73\150\x69\x70\x70\x69\x6e\147\x2d\155\x65\164\150\157\x64\163\x20\154\141\x62\145\154" => ["\143\x6c\x61\163\x73" => "\x6d\x2d\60"], "\165\x6c\x2e\x77\x6f\157\143\x6f\x6d\x6d\x65\x72\143\x65\55\163\150\151\160\x70\151\156\x67\55\x6d\x65\164\150\x6f\x64\163\x20\x6c\151" => ["\x63\154\141\x73\163" => "\154\x69\x73\164\55\x67\162\x6f\x75\160\x2d\x69\x74\x65\155\40\x70\171\55\x31\40\x70\170\x2d\60"]]; } public function umooigokeuauqqsw() : array { return ["\x64\154\x2e\x76\x61\x72\151\x61\164\x69\x6f\156" => ["\143\x6c\x61\x73\163" => "\144\x2d\146\154\145\170\40\x6d\x2d\x61\165\164\157"], "\144\154\56\x76\x61\x72\x69\x61\x74\151\x6f\x6e\x20\x70" => ["\x63\154\x61\163\163" => "\155\x62\x2d\x30"], "\x64\154\x2e\x76\x61\x72\x69\141\164\x69\157\x6e\x20\x64\x64" => ["\143\154\141\163\163" => "\x6d\x62\55\60"], "\144\154\x2e\166\141\x72\x69\141\164\x69\x6f\156\x20\x64\164" => ["\x63\x6c\x61\163\163" => "\167\x2d\x6c\147\x2d\62\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\146\x6f\x72\x6d\55\x72\157\x77" => ["\143\x6c\141\x73\163" => "\146\157\162\155\55\x72\157\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\x77\157\x6f\143\x6f\x6d\155\x65\x72\143\145\55{$eaoumsseceiowgsk}\55\146\151\145\x6c\x64\x73\137\x5f\146\x69\145\x6c\144\x2d\167\162\141\x70\160\x65\162\40\x3e\40\x70", ["\x63\154\141\x73\163" => "\x72\157\x77"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\142\142\x72"]); $ggauoeuaesiymgee = ["\56\x69\163\x2d\x69\x6e\x76\141\154\x69\144\x20\x69\x6e\160\165\x74" => ["\143\154\x61\163\163" => "\x72\x65\x71\x75\x69\162\x65\144\x2d\151\156\x70\165\164"], "\x2e\151\x73\55\151\156\166\x61\154\x69\144\40\x73\145\x6c\x65\x63\x74" => ["\x63\154\x61\x73\163" => "\162\x65\x71\x75\151\162\145\144\55\x69\156\x70\165\x74"], "\x73\145\x6c\x65\x63\x74\54\x20\x69\x6e\x70\x75\x74" => ["\x63\x6c\141\163\163" => "\146\157\x72\x6d\55\x63\x6f\x6e\x74\x72\157\154"], "\43\142\151\x6c\154\x69\x6e\x67\x5f\x66\151\x72\x73\164\137\156\x61\155\145\137\x66\x69\145\154\x64" => ["\143\154\141\163\163" => "\x63\x6f\154\x2d\155\144\x2d\x36"], "\43\142\x69\154\x6c\x69\156\147\137\154\x61\x73\164\x5f\156\141\155\x65\137\x66\x69\x65\x6c\144" => ["\x63\154\x61\163\x73" => "\x63\157\154\55\155\x64\55\x36"], "\43\x62\151\x6c\154\151\156\147\x5f\x70\150\157\156\145\x5f\x66\151\x65\x6c\144" => ["\143\x6c\141\163\163" => "\x63\x6f\x6c\x2d\155\x64\55\66"], "\43\x62\x69\x6c\154\x69\156\x67\137\155\x6f\x62\x69\x6c\x65\137\x66\x69\145\x6c\x64" => ["\143\x6c\x61\x73\x73" => "\x63\157\154\x2d\155\144\x2d\66"], "\43\x62\151\154\x6c\x69\156\x67\137\x63\x6f\x6d\x70\141\156\171\137\146\x69\x65\154\x64" => ["\x63\154\141\x73\x73" => "\143\x6f\154\55\155\144\55\x36"], "\x23\x62\x69\154\x6c\151\156\x67\x5f\x63\x69\x74\x79\137\x66\151\x65\154\x64" => ["\x63\154\141\163\163" => "\x63\x6f\154\55\155\144\x2d\66"], "\x23\142\x69\154\154\151\156\x67\x5f\x73\164\x61\164\145\137\x66\x69\x65\154\144" => ["\x63\x6c\141\163\x73" => "\x63\157\154\x2d\155\144\55\66"], "\x23\x62\151\154\x6c\x69\156\147\x5f\x65\155\141\151\154\137\146\x69\x65\x6c\144" => ["\143\154\x61\163\x73" => "\143\157\x6c\55\x6d\x64\55\66"], "\43\142\151\x6c\154\151\156\147\x5f\x70\x6f\x73\164\143\157\x64\145\x5f\146\x69\x65\x6c\x64" => ["\143\154\141\163\x73" => "\x63\x6f\154\55\x6d\144\x2d\x36"], "\x23\x62\x69\x6c\154\151\x6e\147\137\x70\157\163\x74\x63\157\x64\x65\x5f\146\151\145\x6c\x64\x20\x69\x6e\160\x75\x74" => ["\143\x6c\x61\163\x73" => "\144\151\x72\145\143\164\x69\157\156\x2d\x6c\x74\162"], "\43\143\x75\x73\x74\157\x6d\x65\x72\137\x64\145\x74\x61\151\x6c\163\40\x69\x6e\x70\x75\164" => ["\x63\x6c\x61\163\163" => "\x66\x6f\x72\x6d\x2d\x63\x6f\x6e\x74\x72\157\x6c"], "\x2e\x77\x6f\157\143\x6f\155\155\145\162\143\x65\x2d{$eaoumsseceiowgsk}\55\146\x69\145\x6c\x64\x73\137\x5f\x66\151\x65\154\144\x2d\167\162\141\160\x70\145\x72\x20\x70" => ["\x63\154\141\x73\163" => "\146\x6f\162\155\x2d\147\162\157\165\x70\x20\x63\157\x6c\55\61\x32"], "\x70" => ["\143\154\141\163\163" => "\x6d\142\x2d\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
