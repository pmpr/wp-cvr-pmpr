<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621bc64b2b206             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Theme\Woocommerce\Template as BaseClass; use Pmpr\Theme\Pmpr\Interfaces\CommonInterface; use Pmpr\Theme\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\144\x61\x73\150\142\157\x61\162\x64" => IconFontawesomeInterface::ecwsqqmyqyiyaqmg, "\x6f\x72\x64\145\x72\x73" => IconFontawesomeInterface::aaimaiciamyiswsy, "\144\x6f\167\x6e\154\157\x61\x64\163" => IconFontawesomeInterface::qwssukegewagecki, "\x65\x64\x69\x74\x2d\x61\x64\x64\x72\145\163\x73" => IconFontawesomeInterface::cismwmmymsgoswuo, "\160\x61\171\x6d\145\156\164\x2d\155\x65\164\x68\x6f\x64\163" => IconFontawesomeInterface::yeqamuyomoqsqoak, "\x65\x64\151\164\x2d\x61\143\x63\157\x75\156\x74" => IconFontawesomeInterface::aqykgqywgikckyee, "\x63\165\x73\x74\x6f\x6d\x65\x72\x2d\154\x6f\x67\x6f\165\x74" => IconFontawesomeInterface::suecqgqeiockiwmw]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconFontawesomeInterface::aqaocgsqseeqmoii); } protected bool $isGridView = false; public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\157\157\143\157\x6d\155\x65\x72\143\145\x5f\154\157\x6f\x70\137\160\x72\157\144\165\x63\164\x5f\154\x69\x6e\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\x6c\x61\163\x73" => "\x74\x65\170\x74\55\x64\x65\x63\157\162\141\164\x69\x6f\156\55\x6e\x6f\156\145\x20\164\x65\170\x74\x2d\155\165\x74\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\162\x69\143\145\163" => [], "\160\162\157\144\165\143\164" => '', "\x74\x64\137\x63\x6c\x61\163\x73" => '', "\x74\x72\x5f\x63\154\x61\163\x73" => '', "\x74\150\x5f\x63\154\x61\x73\x73" => "\164\145\170\x74\x2d\x67\x72\141\171\55\70\x30\60\40\160\x79\x2d\62", "\x68\141\x73\137\x74\x69\164\x6c\145" => true, "\164\141\x62\x6c\145\x5f\x63\x6c\x61\163\x73" => "\155\x62\55\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\157\144\x75\x63\164", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\151\143\x65\x73", false); if (!$product) { goto yqykqysmiquwoasu; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto ayyweymyuuiauamo; yqykqysmiquwoasu: global $product; ayyweymyuuiauamo: if (!$product instanceof WC_Product) { goto qqewoyookaskiuek; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto iggyqogweyosuikc; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\x6f\157\143\157\155\x6d\145\162\x63\x65\x2d\120\162\151\x63\x65\55\x63\165\x72\162\x65\x6e\143\x79\123\171\x6d\142\x6f\x6c" => ["\143\x6c\x61\163\x73" => "\146\157\156\x74\55\61\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto mosqsmqimqgqoase; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); mosqsmqimqgqoase: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\x65\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\x6e\163"); if ($eukiyocmgugiioei) { goto ygcsmkuycoagwyou; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $uiiuuaeiyecmiouc["\162\145\147\165\x6c\141\162\137\160\x72\x69\143\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto omugkkesagcyagmk; } $uiiuuaeiyecmiouc["\x64\151\x73\143\157\165\156\164"] = $this->yqauycsoymimeise($product); omugkkesagcyagmk: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\151\163\x63\x6f\165\156\164\137\x65\x78\x70\x69\x72\x65"] = $this->sscegwueamckwmcy("\167\x6f\x6f\143\157\155\x6d\145\162\143\x65\137\160\162\x6f\x64\x75\x63\164\x5f\x64\x69\x73\x63\x6f\165\x6e\x74\x5f\x65\x78\x70\151\162\x65\x5f\x68\x74\x6d\x6c", '', ["\160\162\x6f\144\165\143\164" => $product]); kqksuugcgsyeoayy: $uiiuuaeiyecmiouc["\163\x61\154\145\x5f\x70\x72\x69\x63\145"] = $eeeyyekmaesysegc; iggyqogweyosuikc: qqewoyookaskiuek: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto wmmggowmigekyoso; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\x67\x75\154\141\x72\137\160\x72\x69\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\145\147\x75\x6c\x61\x72\x20\120\x72\151\143\x65", PR__THM__PMPR))->jyumyyugiwwiqomk(10); goto miyqyeiwquwsacsm; case "\163\141\x6c\145\137\160\162\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\x61\x6c\x65\40\120\162\151\143\x65", PR__THM__PMPR))->jyumyyugiwwiqomk(25); goto miyqyeiwquwsacsm; case "\x64\x69\163\143\x6f\165\156\x74\137\145\170\x70\151\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\x63\157\x75\x6e\x74\x20\105\x78\x70\151\x72\141\x74\x69\x6f\x6e", PR__THM__PMPR))->jyumyyugiwwiqomk(20); goto miyqyeiwquwsacsm; case "\x64\x69\163\x63\x6f\165\156\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\151\x73\x63\157\165\156\x74", PR__THM__PMPR))->jyumyyugiwwiqomk(15); goto miyqyeiwquwsacsm; } eegqyykygiccaoeo: miyqyeiwquwsacsm: if (!$aumscagymwyyicag) { goto ywqgcegomwaiuquc; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; ywqgcegomwaiuquc: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6d\145\x74\x61\x64\141\164\x61\137\x72\x65\x6e\144\x65\x72"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x69\164\145\155\x73" => $oammesyieqmwuwyi, "\164\x65\155\x70\x6c\141\164\145" => $this->eskggqsasgsiommy("\160\162\x69\x63\145")])); wmmggowmigekyoso: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto soqqemyioggmoakg; } woocommerce_template_loop_add_to_cart(); goto acaqummmoyiemqss; soqqemyioggmoakg: woocommerce_template_single_add_to_cart(); acaqummmoyiemqss: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto oqugqwcyomiaaoqu; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\162\x6f\144\165\x63\164\x5f\x63\x61\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto eeqesooyqagwawae; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\x6c\141\163\163" => "\x70\x72\x6f\x64\x75\143\164\55\143\141\164\x65\147\x6f\x72\171\40\150\x6f\x76\x65\162\55\160\162\x69\x6d\141\162\171\x20\x66\x6f\x6e\164\55\61\x36"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\x6e\40\x43\141\x74\x65\x67\x6f\162\171\x3a\40\x25\163", PR__THM__PMPR), $nsmgceoqaqogqmuw), ["\x63\x6c\141\x73\163" => "\x74\x65\170\x74\x2d\147\162\x61\x79\x2d\66\x30\x30"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconFontawesomeInterface::usaocmsseuquaqsu, ["\x63\x6c\141\x73\163" => "\x69\143\x6f\156\x2d\x73\x6d\x20\155\162\x2d\x32"]); $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\143\x6c\x61\x73\163" => "\144\55\x66\x6c\x65\170"], $wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw); if (!$koaqeegoeiaiccse) { goto suswcqoyyqkkquuo; } echo $nsmgceoqaqogqmuw; suswcqoyyqkkquuo: eeqesooyqagwawae: oqugqwcyomiaaoqu: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = "\166\x69\x65\167") { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === "\166\x69\x65\167") { goto foeeqckqsyockkak; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto iekumemscwieugqw; foeeqckqsyockkak: $wewsywccwwomowkw = ManipulateHTML::uuccukgasskgimsq("\163\160\141\x6e", ["\x63\154\141\x73\x73" => "\x70\162\151\x63\x65\x2d\144\x69\x73\x63\157\x75\x6e\164\x2d\141\x6d\x6f\x75\x6e\x74\x20\x74\145\170\x74\x2d\144\x61\x6e\147\145\x72"], $xgwukwqqaseqagay . "\45"); $wewsywccwwomowkw = $this->sscegwueamckwmcy("\x77\143\x5f\x70\x72\x69\143\x65\137\x64\x69\163\143\157\165\156\x74", $wewsywccwwomowkw, $xgwukwqqaseqagay); iekumemscwieugqw: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = "\x76\x69\145\x77") { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto usquiuuyiyqaeyiu; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto hoeeyiowekaeemko; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; hoeeyiowekaeemko: if (!($mgkceomocowocqyo === "\166\151\x65\167")) { goto kymkucucyeoeikim; } $wewsywccwwomowkw = $this->sscegwueamckwmcy("\x77\143\137\160\162\x69\143\x65\x5f\144\151\163\143\157\x75\x6e\164", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); kymkucucyeoeikim: usquiuuyiyqaeyiu: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\x65\x71\x75\x69\x72\x65\144"]) && $aiowsaccomcoikus["\162\145\x71\x75\151\162\145\144"])) { goto uqqaiagaeqgqgaiy; } $aiowsaccomcoikus["\143\154\x61\163\163"] = ["\151\163\x2d\x69\156\x76\x61\154\x69\x64"]; uqqaiagaeqgqgaiy: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; uguigkcmukuouway: } qicwaskssogcokgm: unset($ikgwqyuyckaewsow["\142\151\x6c\154\x69\x6e\147\137\x63\157\165\x6e\x74\x72\171"]); unset($ikgwqyuyckaewsow["\142\151\154\154\x69\x6e\x67\x5f\x61\x64\x64\162\x65\163\163\137\x32"]); $ikgwqyuyckaewsow["\x62\151\154\x6c\151\156\147\x5f\x73\x74\x61\x74\x65"]["\x70\162\151\157\162\151\x74\171"] = 60; $ikgwqyuyckaewsow["\142\x69\x6c\154\151\x6e\147\137\143\151\164\x79"]["\160\162\x69\157\162\x69\164\x79"] = 70; $ikgwqyuyckaewsow["\142\x69\x6c\x6c\151\x6e\x67\137\x61\144\144\x72\x65\x73\x73\x5f\61"]["\160\x72\x69\157\162\151\x74\171"] = 80; $ikgwqyuyckaewsow["\142\x69\x6c\154\x69\156\147\x5f\x65\155\x61\x69\154"]["\x70\162\x69\x6f\x72\x69\164\x79"] = 98; $ikgwqyuyckaewsow["\142\151\x6c\154\151\156\147\x5f\x70\x6f\163\x74\143\157\x64\x65"]["\154\141\142\x65\x6c"] = __("\x50\157\163\x74\143\157\x64\145", PR__THM__PMPR); $ikgwqyuyckaewsow["\142\151\x6c\x6c\x69\156\x67\137\145\x6d\x61\x69\154"]["\x6c\141\142\145\x6c"] = __("\105\x6d\x61\151\154", PR__THM__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\156\40\x62\x74\156\x2d\142\154\x6f\143\153\x20\x62\x74\156\55\x70\x72\x69\x6d\141\x72\x79\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\x6c\x2e\x77\x6f\x6f\x63\157\x6d\x6d\145\162\143\x65\x2d\x73\150\x69\160\x70\151\156\147\55\x6d\145\164\150\x6f\144\163" => ["\143\154\x61\163\163" => "\154\x69\163\164\x2d\x67\162\x6f\x75\x70\x20\x6c\151\163\x74\55\x67\162\x6f\x75\x70\55\x66\x6c\165\163\150\x20\x62\x67\x2d\164\x72\141\x6e\163\160\x61\162\x65\x6e\164"], "\165\x6c\56\167\x6f\x6f\x63\157\155\155\145\162\143\x65\55\163\150\x69\x70\160\151\156\147\x2d\x6d\x65\x74\150\x6f\144\x73\x20\154\141\142\x65\154" => ["\143\x6c\x61\x73\163" => "\x6d\x2d\60"], "\x75\x6c\x2e\x77\157\x6f\143\x6f\x6d\155\145\x72\x63\145\x2d\x73\150\x69\x70\160\151\156\147\55\155\x65\x74\150\x6f\x64\163\x20\154\151" => ["\x63\x6c\x61\163\x73" => "\154\x69\x73\x74\55\x67\x72\157\165\x70\x2d\151\x74\145\x6d\40\x70\171\55\61\40\160\x78\55\x30"]]; } public function umooigokeuauqqsw() : array { return ["\144\x6c\x2e\166\141\x72\x69\141\x74\151\x6f\156" => ["\143\x6c\x61\163\163" => "\x64\55\146\154\x65\170\40\155\x2d\x61\165\164\157"], "\144\154\x2e\x76\141\x72\x69\x61\164\x69\x6f\x6e\x20\160" => ["\143\x6c\141\163\163" => "\x6d\x62\55\60"], "\144\154\x2e\x76\141\x72\x69\141\x74\x69\157\156\x20\x64\x64" => ["\x63\x6c\141\163\163" => "\x6d\x62\55\60"], "\144\x6c\56\166\x61\x72\151\141\164\151\157\156\40\x64\x74" => ["\143\154\141\x73\x73" => "\x77\x2d\154\147\55\62\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\x66\157\x72\x6d\x2d\x72\x6f\167" => ["\143\x6c\141\163\x73" => "\x66\157\162\x6d\x2d\162\157\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\167\157\157\143\x6f\155\155\x65\162\143\145\55{$eaoumsseceiowgsk}\55\146\151\145\154\x64\x73\x5f\137\146\x69\145\154\144\55\x77\x72\x61\160\160\x65\162\40\76\x20\x70", ["\x63\154\x61\163\x73" => "\x72\x6f\x77"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\142\x62\162"]); $ggauoeuaesiymgee = ["\56\151\163\55\x69\x6e\166\x61\x6c\x69\144\x20\x69\156\160\x75\164" => ["\143\x6c\141\163\x73" => "\162\145\x71\165\151\162\145\144\55\x69\x6e\160\x75\x74"], "\56\151\x73\55\x69\x6e\166\x61\x6c\x69\x64\x20\x73\x65\154\145\143\164" => ["\143\x6c\141\163\163" => "\162\x65\161\165\151\x72\x65\144\55\x69\156\160\165\x74"], "\163\x65\154\145\143\164\x2c\40\151\156\160\x75\164" => ["\x63\154\x61\163\163" => "\x66\157\162\155\55\x63\x6f\156\x74\x72\x6f\154"], "\x23\142\151\x6c\154\151\x6e\147\137\146\151\162\163\x74\x5f\156\141\x6d\x65\x5f\x66\x69\x65\154\x64" => ["\143\154\141\163\163" => "\x63\x6f\154\x2d\x6d\144\55\66"], "\x23\142\151\154\x6c\151\x6e\x67\137\x6c\141\x73\x74\137\x6e\x61\x6d\145\x5f\146\151\145\154\144" => ["\143\x6c\141\x73\163" => "\x63\157\x6c\x2d\x6d\144\x2d\66"], "\x23\142\x69\154\x6c\151\x6e\x67\x5f\x70\150\x6f\156\145\137\146\151\x65\x6c\x64" => ["\143\154\141\x73\163" => "\143\157\x6c\55\155\144\x2d\66"], "\x23\142\151\154\154\151\156\147\x5f\x6d\157\x62\x69\154\x65\137\x66\x69\145\x6c\144" => ["\x63\154\x61\x73\x73" => "\x63\x6f\x6c\55\155\144\55\x36"], "\x23\x62\x69\154\x6c\x69\156\x67\137\143\x6f\155\x70\141\156\171\137\146\151\x65\x6c\144" => ["\x63\154\141\163\163" => "\143\157\154\x2d\155\144\x2d\x36"], "\x23\142\x69\x6c\x6c\x69\156\x67\x5f\143\151\x74\171\137\146\151\145\x6c\144" => ["\143\x6c\x61\x73\x73" => "\143\x6f\x6c\55\x6d\144\x2d\66"], "\x23\142\x69\x6c\x6c\151\x6e\147\x5f\x73\x74\141\x74\145\x5f\146\151\x65\154\x64" => ["\x63\x6c\x61\163\163" => "\x63\157\x6c\55\x6d\144\x2d\66"], "\x23\142\151\x6c\x6c\x69\x6e\x67\x5f\x65\x6d\x61\151\154\x5f\146\x69\145\x6c\144" => ["\143\x6c\x61\163\x73" => "\x63\x6f\154\x2d\x6d\x64\x2d\x36"], "\x23\142\151\154\x6c\151\x6e\147\137\x70\x6f\x73\x74\143\x6f\144\145\x5f\146\151\x65\154\144" => ["\143\154\x61\163\163" => "\143\157\x6c\x2d\x6d\144\55\66"], "\x23\142\151\154\x6c\151\156\x67\137\160\157\x73\x74\x63\157\x64\145\137\146\151\x65\x6c\x64\40\151\156\x70\165\164" => ["\x63\x6c\141\163\x73" => "\144\151\x72\x65\143\x74\151\157\156\x2d\154\164\x72"], "\43\x63\165\x73\164\157\x6d\145\162\137\144\145\x74\x61\151\x6c\163\x20\151\x6e\x70\x75\x74" => ["\143\154\141\163\x73" => "\146\x6f\162\x6d\55\143\157\x6e\164\162\x6f\154"], "\56\x77\x6f\x6f\143\157\155\155\145\162\x63\145\x2d{$eaoumsseceiowgsk}\55\146\x69\x65\154\144\163\137\137\146\151\x65\x6c\144\x2d\167\x72\141\x70\x70\x65\x72\40\x70" => ["\x63\x6c\x61\163\x73" => "\x66\157\162\x6d\x2d\147\162\x6f\165\160\x20\x63\157\154\x2d\x31\x32"], "\x70" => ["\143\154\141\x73\163" => "\x6d\x62\x2d\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
