<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240ccf7a7920             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\x61\163\x68\142\x6f\x61\162\x64" => IconFontawesomeInterface::ecwsqqmyqyiyaqmg, "\157\x72\x64\145\x72\163" => IconFontawesomeInterface::aaimaiciamyiswsy, "\144\157\x77\x6e\154\x6f\141\144\163" => IconFontawesomeInterface::qwssukegewagecki, "\x65\144\151\x74\x2d\x61\x64\x64\x72\x65\163\x73" => IconFontawesomeInterface::cismwmmymsgoswuo, "\160\x61\x79\x6d\145\156\164\x2d\155\x65\x74\x68\157\x64\x73" => IconFontawesomeInterface::yeqamuyomoqsqoak, "\x65\144\151\164\x2d\x61\143\x63\157\165\x6e\x74" => IconFontawesomeInterface::aqykgqywgikckyee, "\x63\x75\x73\164\x6f\155\x65\x72\55\154\157\147\x6f\165\x74" => IconFontawesomeInterface::suecqgqeiockiwmw]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconFontawesomeInterface::aqaocgsqseeqmoii); } protected bool $isGridView = false; public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\x6f\x6f\x63\157\x6d\x6d\145\x72\143\145\x5f\154\157\157\x70\x5f\160\162\x6f\144\x75\x63\x74\x5f\154\151\156\153", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\154\x61\x73\x73" => "\x74\145\170\164\x2d\x64\x65\x63\x6f\x72\x61\164\151\157\x6e\55\x6e\157\156\145\x20\164\145\x78\164\x2d\155\165\164\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\162\x69\x63\145\x73" => [], "\x70\162\157\x64\165\143\x74" => '', "\x74\144\x5f\x63\x6c\x61\163\x73" => '', "\164\162\137\143\154\141\163\x73" => '', "\164\x68\137\x63\x6c\141\x73\163" => "\164\x65\170\164\x2d\147\162\141\171\55\x38\60\60\x20\x70\171\x2d\62", "\x68\x61\163\137\x74\151\x74\154\x65" => true, "\164\141\142\154\145\x5f\x63\154\x61\x73\x73" => "\x6d\142\x2d\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\160\x72\157\144\165\143\164", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\x69\143\x65\163", false); if (!$product) { goto yqykqysmiquwoasu; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto ayyweymyuuiauamo; yqykqysmiquwoasu: global $product; ayyweymyuuiauamo: if (!$product instanceof WC_Product) { goto qqewoyookaskiuek; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto iggyqogweyosuikc; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\56\167\x6f\x6f\143\x6f\155\x6d\x65\162\143\145\55\120\162\x69\143\x65\x2d\x63\165\162\162\145\156\143\171\x53\x79\x6d\142\x6f\x6c" => ["\x63\154\141\163\163" => "\x66\157\x6e\x74\55\x31\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto mosqsmqimqgqoase; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); mosqsmqimqgqoase: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\x65\154"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\x6e\163"); if ($eukiyocmgugiioei) { goto ygcsmkuycoagwyou; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $uiiuuaeiyecmiouc["\162\145\147\x75\154\x61\162\x5f\x70\162\151\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto omugkkesagcyagmk; } $uiiuuaeiyecmiouc["\x64\x69\x73\143\x6f\x75\x6e\164"] = $this->yqauycsoymimeise($product); omugkkesagcyagmk: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\x69\163\x63\157\165\156\164\137\x65\x78\160\x69\162\145"] = $this->sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\x6d\145\162\x63\x65\x5f\x70\x72\x6f\x64\x75\143\164\137\144\151\163\x63\x6f\165\x6e\164\x5f\145\170\x70\x69\x72\x65\x5f\x68\164\155\x6c", '', ["\x70\x72\157\x64\x75\x63\164" => $product]); kqksuugcgsyeoayy: $uiiuuaeiyecmiouc["\163\x61\154\145\137\x70\162\x69\143\x65"] = $eeeyyekmaesysegc; iggyqogweyosuikc: qqewoyookaskiuek: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto wmmggowmigekyoso; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\x67\x75\154\x61\x72\x5f\x70\162\151\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\x65\147\x75\154\141\162\x20\x50\162\151\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto miyqyeiwquwsacsm; case "\163\x61\154\145\137\160\x72\151\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\x6c\x65\40\120\x72\151\x63\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto miyqyeiwquwsacsm; case "\144\x69\x73\143\x6f\x75\156\x74\x5f\145\170\160\x69\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\163\x63\x6f\165\x6e\164\x20\x45\x78\160\x69\162\141\x74\151\157\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto miyqyeiwquwsacsm; case "\x64\151\x73\143\157\165\156\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\163\143\157\165\156\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto miyqyeiwquwsacsm; } eegqyykygiccaoeo: miyqyeiwquwsacsm: if (!$aumscagymwyyicag) { goto ywqgcegomwaiuquc; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; ywqgcegomwaiuquc: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6d\145\164\141\x64\141\x74\141\137\162\x65\x6e\144\145\162"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\164\145\x6d\163" => $oammesyieqmwuwyi, "\x74\x65\155\160\x6c\141\x74\145" => $this->eskggqsasgsiommy("\x70\x72\x69\x63\145")])); wmmggowmigekyoso: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto soqqemyioggmoakg; } woocommerce_template_loop_add_to_cart(); goto acaqummmoyiemqss; soqqemyioggmoakg: woocommerce_template_single_add_to_cart(); acaqummmoyiemqss: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto oqugqwcyomiaaoqu; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\160\x72\157\144\x75\x63\164\x5f\x63\x61\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto eeqesooyqagwawae; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\143\154\141\163\163" => "\160\162\x6f\144\x75\143\x74\55\x63\x61\164\145\147\157\x72\x79\x20\x68\x6f\166\145\x72\55\x70\x72\151\155\x61\x72\x79\40\x66\157\156\x74\x2d\x31\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\x6e\x20\x43\141\x74\x65\147\157\162\x79\72\x20\x25\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\141\163\x73" => "\164\145\x78\164\x2d\147\162\141\x79\55\x36\60\x30"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconFontawesomeInterface::usaocmsseuquaqsu, ["\143\x6c\x61\x73\x73" => "\x69\143\x6f\156\55\163\155\40\155\162\55\x32"]); $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\143\x6c\x61\163\163" => "\144\55\146\154\x65\170"], $wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw); if (!$koaqeegoeiaiccse) { goto suswcqoyyqkkquuo; } echo $nsmgceoqaqogqmuw; suswcqoyyqkkquuo: eeqesooyqagwawae: oqugqwcyomiaaoqu: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = "\166\151\145\167") { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === "\166\x69\x65\x77") { goto foeeqckqsyockkak; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto iekumemscwieugqw; foeeqckqsyockkak: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\143\x6c\x61\x73\x73" => "\x70\162\x69\x63\x65\55\x64\x69\x73\x63\157\165\x6e\164\55\x61\x6d\x6f\x75\156\x74\40\164\x65\x78\164\x2d\144\x61\156\x67\x65\162"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy("\167\x63\x5f\160\162\151\x63\145\137\144\151\x73\x63\157\x75\x6e\164", $wewsywccwwomowkw, $xgwukwqqaseqagay); iekumemscwieugqw: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = "\x76\151\145\x77") { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto usquiuuyiyqaeyiu; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto hoeeyiowekaeemko; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; hoeeyiowekaeemko: if (!($mgkceomocowocqyo === "\166\151\x65\167")) { goto kymkucucyeoeikim; } $wewsywccwwomowkw = $this->sscegwueamckwmcy("\x77\143\137\x70\162\x69\x63\x65\137\x64\x69\163\143\x6f\x75\x6e\x74", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); kymkucucyeoeikim: usquiuuyiyqaeyiu: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\145\161\165\151\162\145\x64"]) && $aiowsaccomcoikus["\162\x65\x71\165\x69\162\x65\x64"])) { goto uqqaiagaeqgqgaiy; } $aiowsaccomcoikus["\143\154\x61\163\x73"] = ["\151\x73\55\151\156\x76\141\x6c\151\144"]; uqqaiagaeqgqgaiy: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; uguigkcmukuouway: } qicwaskssogcokgm: unset($ikgwqyuyckaewsow["\x62\x69\154\154\x69\156\x67\137\143\157\165\156\x74\x72\171"]); unset($ikgwqyuyckaewsow["\x62\x69\x6c\x6c\151\x6e\x67\x5f\x61\x64\144\x72\x65\163\163\137\x32"]); $ikgwqyuyckaewsow["\x62\151\154\154\151\x6e\147\137\163\164\x61\164\x65"]["\x70\162\151\157\x72\151\x74\x79"] = 60; $ikgwqyuyckaewsow["\142\151\x6c\154\151\x6e\147\137\x63\151\164\x79"]["\160\162\x69\157\162\151\x74\171"] = 70; $ikgwqyuyckaewsow["\x62\151\154\x6c\x69\x6e\147\137\141\x64\x64\162\145\x73\163\137\61"]["\160\x72\151\x6f\x72\x69\164\171"] = 80; $ikgwqyuyckaewsow["\142\151\x6c\154\x69\x6e\x67\x5f\145\155\141\x69\154"]["\x70\x72\151\157\162\x69\164\171"] = 98; $ikgwqyuyckaewsow["\142\151\154\154\x69\x6e\147\x5f\160\157\x73\164\143\x6f\x64\145"]["\x6c\x61\142\145\154"] = __("\120\x6f\163\x74\x63\x6f\x64\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\151\154\x6c\x69\x6e\147\137\x65\155\141\x69\x6c"]["\154\x61\142\145\154"] = __("\105\155\x61\x69\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\156\40\142\x74\x6e\55\142\154\157\143\153\x20\142\164\x6e\x2d\160\162\x69\x6d\x61\162\171\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\154\56\167\x6f\x6f\143\157\x6d\x6d\x65\x72\x63\145\55\163\150\151\160\x70\151\156\147\x2d\x6d\x65\164\150\157\144\163" => ["\143\x6c\141\163\x73" => "\x6c\151\x73\164\x2d\147\162\157\x75\160\x20\154\151\x73\x74\x2d\147\x72\157\x75\x70\x2d\146\154\165\x73\x68\40\142\147\55\164\162\x61\156\x73\x70\x61\162\x65\x6e\164"], "\165\154\56\167\157\157\143\157\x6d\x6d\x65\x72\143\x65\x2d\x73\150\x69\x70\160\x69\x6e\x67\x2d\155\145\164\x68\157\x64\x73\x20\154\x61\142\145\154" => ["\143\x6c\x61\x73\x73" => "\155\x2d\x30"], "\165\154\56\x77\x6f\157\143\x6f\155\155\145\x72\x63\145\x2d\163\x68\x69\x70\160\151\156\147\x2d\x6d\145\164\150\x6f\x64\x73\40\x6c\151" => ["\x63\x6c\141\163\x73" => "\x6c\x69\x73\164\55\147\162\157\x75\160\55\x69\x74\x65\155\40\160\171\x2d\61\40\x70\170\55\60"]]; } public function umooigokeuauqqsw() : array { return ["\x64\154\x2e\166\x61\x72\x69\141\164\151\x6f\x6e" => ["\x63\154\141\163\163" => "\x64\x2d\x66\x6c\145\170\x20\x6d\x2d\x61\165\164\157"], "\144\x6c\x2e\x76\141\x72\151\x61\164\151\157\156\x20\x70" => ["\143\154\141\163\x73" => "\x6d\x62\55\x30"], "\144\x6c\x2e\166\141\162\x69\x61\164\x69\157\x6e\x20\144\144" => ["\x63\154\x61\x73\x73" => "\x6d\x62\55\60"], "\144\154\56\166\141\x72\x69\x61\164\151\x6f\x6e\40\144\164" => ["\143\x6c\141\163\163" => "\167\x2d\x6c\x67\x2d\x32\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\146\x6f\162\x6d\x2d\x72\x6f\x77" => ["\143\154\141\163\x73" => "\x66\x6f\162\x6d\55\x72\x6f\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\167\157\157\x63\x6f\x6d\155\x65\x72\143\145\x2d{$eaoumsseceiowgsk}\55\x66\x69\x65\154\x64\163\137\x5f\146\151\145\154\144\x2d\167\162\141\x70\x70\x65\162\40\x3e\x20\x70", ["\x63\x6c\141\163\x73" => "\162\x6f\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\142\142\x72"]); $ggauoeuaesiymgee = ["\x2e\151\163\55\x69\x6e\x76\141\x6c\151\144\x20\x69\156\x70\x75\x74" => ["\143\154\x61\163\x73" => "\x72\145\161\x75\151\162\x65\x64\55\x69\156\160\x75\164"], "\56\x69\x73\x2d\x69\x6e\x76\x61\154\151\144\x20\163\x65\x6c\x65\143\x74" => ["\143\154\x61\x73\163" => "\x72\x65\161\165\x69\162\x65\x64\x2d\151\x6e\160\165\x74"], "\x73\145\x6c\145\x63\x74\x2c\40\151\x6e\x70\x75\x74" => ["\x63\154\141\163\x73" => "\x66\157\x72\x6d\55\143\157\156\x74\162\x6f\154"], "\x23\142\x69\154\154\x69\x6e\147\x5f\x66\x69\x72\x73\x74\x5f\x6e\x61\x6d\145\x5f\x66\x69\x65\x6c\x64" => ["\143\x6c\x61\x73\163" => "\143\157\154\55\155\144\55\x36"], "\43\x62\151\154\154\x69\156\x67\137\x6c\141\x73\x74\137\x6e\x61\x6d\145\137\146\x69\x65\x6c\x64" => ["\143\x6c\x61\x73\x73" => "\143\157\154\x2d\x6d\144\55\x36"], "\43\x62\151\154\154\x69\x6e\x67\x5f\x70\x68\157\x6e\145\x5f\x66\x69\145\x6c\x64" => ["\x63\154\141\x73\x73" => "\x63\x6f\154\55\155\144\x2d\66"], "\x23\142\151\x6c\x6c\x69\156\x67\137\x6d\x6f\142\151\154\145\137\146\x69\145\154\x64" => ["\x63\154\x61\x73\163" => "\143\x6f\154\x2d\x6d\144\x2d\x36"], "\43\x62\x69\x6c\154\x69\156\x67\137\143\x6f\x6d\160\x61\x6e\x79\x5f\146\151\145\x6c\144" => ["\x63\x6c\141\163\163" => "\x63\157\x6c\x2d\155\144\55\66"], "\x23\142\x69\x6c\154\151\156\147\x5f\143\151\x74\171\137\x66\151\x65\154\x64" => ["\143\x6c\141\163\163" => "\143\x6f\154\55\155\144\x2d\66"], "\43\142\151\x6c\154\x69\x6e\147\x5f\163\x74\x61\x74\145\137\146\151\x65\154\x64" => ["\x63\154\141\163\163" => "\143\157\x6c\x2d\x6d\144\x2d\66"], "\x23\142\151\154\154\x69\156\147\137\x65\155\141\x69\154\x5f\146\x69\x65\x6c\x64" => ["\x63\x6c\141\163\x73" => "\x63\x6f\x6c\x2d\155\x64\55\66"], "\x23\x62\x69\x6c\154\151\156\x67\x5f\160\x6f\163\x74\143\x6f\x64\145\x5f\x66\151\145\154\144" => ["\x63\154\x61\x73\x73" => "\x63\x6f\154\55\155\x64\x2d\x36"], "\x23\142\151\154\x6c\151\156\147\137\x70\x6f\163\x74\x63\x6f\144\x65\x5f\146\151\x65\x6c\x64\x20\x69\156\160\165\x74" => ["\x63\x6c\141\163\x73" => "\x64\x69\162\x65\143\164\151\x6f\156\55\154\x74\x72"], "\43\143\165\x73\164\157\155\x65\x72\x5f\x64\x65\164\141\x69\154\x73\x20\x69\x6e\x70\165\x74" => ["\143\154\141\x73\x73" => "\x66\x6f\162\155\x2d\143\x6f\x6e\x74\x72\x6f\x6c"], "\56\167\x6f\x6f\143\157\x6d\155\x65\162\143\x65\x2d{$eaoumsseceiowgsk}\x2d\146\x69\x65\x6c\144\x73\137\137\146\x69\145\x6c\x64\x2d\167\162\x61\x70\160\x65\x72\x20\160" => ["\143\x6c\x61\x73\163" => "\x66\157\162\155\x2d\147\x72\157\x75\x70\x20\143\157\x6c\55\x31\62"], "\160" => ["\x63\x6c\141\163\x73" => "\x6d\x62\55\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
