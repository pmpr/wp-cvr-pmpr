<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665dbc49a1166             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\144\141\163\x68\142\x6f\x61\x72\144" => IconInterface::ygcmqmkcsymeucoq, "\157\162\144\145\x72\163" => IconInterface::goqumcwkcuygcaui, "\144\x6f\167\156\154\x6f\x61\x64\x73" => IconInterface::msyqysqykouywsua, "\x65\x64\x69\x74\x2d\x61\x64\x64\x72\145\x73\x73" => IconInterface::wykikkeyisimsmyy, "\160\x61\x79\x6d\x65\156\164\55\x6d\x65\164\150\157\x64\x73" => IconInterface::acciucugwcskkwmi, "\145\144\x69\164\x2d\141\x63\x63\157\165\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\x73\x74\157\155\145\162\55\154\157\147\x6f\165\x74" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\157\157\143\x6f\x6d\155\x65\x72\x63\145\137\x6c\157\157\160\137\x70\x72\x6f\144\165\x63\164\x5f\x6c\151\156\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\143\154\x61\x73\163" => "\164\145\170\164\x2d\x64\x65\143\157\x72\141\x74\x69\157\156\x2d\156\x6f\156\145\x20\x74\x65\170\164\55\155\165\x74\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x70\x72\x69\143\145\163" => [], "\x70\162\x6f\x64\165\143\x74" => '', "\164\x64\x5f\143\x6c\x61\x73\x73" => '', "\164\162\137\x63\x6c\141\163\163" => '', "\164\x68\x5f\143\154\x61\x73\163" => "\x74\145\170\164\x2d\x67\x72\x61\x79\x2d\x38\x30\x30\40\x70\171\x2d\62", "\x68\141\x73\x5f\x74\x69\164\154\145" => true, "\164\x61\x62\154\145\x5f\x63\154\x61\163\163" => "\155\x62\x2d\65"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\157\144\x75\x63\164", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\160\162\x69\143\145\x73", false); if (!$product) { goto msemumccgceyugmg; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto wagqgeqymeqoeuyi; msemumccgceyugmg: global $product; wagqgeqymeqoeuyi: if (!$product instanceof WC_Product) { goto mqicocmqegwukkwg; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto ciykoyeioqgyaeqo; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\157\157\x63\157\155\155\x65\162\x63\x65\x2d\120\162\x69\x63\145\x2d\x63\165\x72\162\145\156\143\171\x53\x79\x6d\x62\157\x6c" => ["\143\154\141\x73\163" => "\146\157\x6e\164\x2d\61\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto qoqskyuuwueqkquk; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); qoqskyuuwueqkquk: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\x65\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\156\163"); if ($eukiyocmgugiioei) { goto wcugqegqsuuuwqao; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $uiiuuaeiyecmiouc["\x72\145\x67\x75\x6c\x61\x72\137\x70\x72\151\x63\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto iwsuawwqomaowuii; } $uiiuuaeiyecmiouc["\x64\x69\163\143\157\165\156\x74"] = $this->yqauycsoymimeise($product); iwsuawwqomaowuii: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\x69\x73\x63\157\165\156\x74\137\145\170\160\151\x72\x65"] = $this->sscegwueamckwmcy("\167\157\157\143\x6f\155\x6d\x65\x72\x63\145\137\160\162\157\x64\x75\x63\164\137\144\151\x73\x63\157\x75\x6e\164\x5f\145\x78\x70\x69\162\x65\137\150\x74\x6d\154", '', ["\x70\162\157\x64\165\143\164" => $product]); asiqwuoswmigcaki: $uiiuuaeiyecmiouc["\163\x61\154\x65\137\x70\162\x69\143\x65"] = $eeeyyekmaesysegc; ciykoyeioqgyaeqo: mqicocmqegwukkwg: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto oomguqikqokqwgku; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\147\x75\154\141\x72\137\x70\162\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\x65\x67\165\x6c\x61\162\40\x50\162\151\x63\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto ouamogymawucwswu; case "\163\141\154\145\137\x70\162\x69\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\141\154\145\x20\x50\x72\151\x63\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto ouamogymawucwswu; case "\144\151\x73\143\x6f\165\x6e\x74\137\145\170\160\151\162\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\x73\143\x6f\165\x6e\164\40\x45\170\160\x69\162\x61\164\x69\157\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto ouamogymawucwswu; case "\144\x69\163\x63\x6f\165\156\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\x73\143\x6f\165\x6e\164", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto ouamogymawucwswu; } mugqyyeayeyggqqk: ouamogymawucwswu: if (!$aumscagymwyyicag) { goto acsqgiuageaasiyy; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; acsqgiuageaasiyy: emmsycooskoqmgeg: } qgeugwymkkiacwoc: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\162\151\143\145")]); $this->ewcsyqaaigkicgse("\x6d\x65\164\141\x64\x61\x74\141\137\x72\x65\x6e\x64\x65\x72", $ywmkwiwkosakssii); oomguqikqokqwgku: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto samwkqgwouggsguc; } woocommerce_template_loop_add_to_cart(); goto wyuemgggaqogsmsq; samwkqgwouggsguc: woocommerce_template_single_add_to_cart(); wyuemgggaqogsmsq: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto miweggwqeiaeweia; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\162\157\144\x75\143\164\137\x63\141\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto kkumywowcoycymeo; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\143\x6c\x61\163\163" => "\160\x72\157\144\x75\143\164\55\x63\141\164\x65\147\157\x72\x79\x20\150\157\x76\x65\162\x2d\160\x72\151\x6d\x61\x72\x79\x20\x66\x6f\x6e\x74\x2d\61\x36"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\x6e\x20\103\x61\x74\145\147\157\x72\171\x3a\x20\45\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\x6c\x61\163\163" => "\164\145\x78\164\x2d\x67\x72\141\x79\55\x36\x30\x30"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\143\154\141\163\163" => "\151\x63\157\156\55\x73\155\x20\155\162\55\62\40\x6d\x79\x2d\141\x75\x74\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\154\141\x73\163" => "\144\x2d\x66\154\145\x78"]); if (!$koaqeegoeiaiccse) { goto guykyqecgswcsmws; } echo $nsmgceoqaqogqmuw; guykyqecgswcsmws: kkumywowcoycymeo: miweggwqeiaeweia: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto kqqiegkuqagcqsya; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\143\x6c\x61\x73\x73" => "\x70\x72\x69\143\x65\55\144\x69\163\143\x6f\x75\156\164\x2d\x61\155\157\x75\156\x74\40\164\x65\170\x74\x2d\x64\141\x6e\x67\x65\x72"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\143\x65\137\144\x69\163\x63\x6f\x75\156\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); ousiuuwgwkiyikyq: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto ikqqskkqqwmwssoo; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto ogsaaqsaogcqiouy; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; ogsaaqsaogcqiouy: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto iwekmyyccgiyuecc; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\x69\x63\145\x5f\x64\151\x73\x63\157\x75\x6e\164"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); iwekmyyccgiyuecc: ikqqskkqqwmwssoo: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\x65\x71\165\x69\162\x65\144"]) && $aiowsaccomcoikus["\x72\x65\x71\165\x69\x72\145\x64"])) { goto awoaooyoeoyeeqee; } $aiowsaccomcoikus["\143\x6c\141\x73\163"] = ["\151\163\x2d\151\x6e\166\141\154\x69\x64"]; awoaooyoeoyeeqee: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; cwwmimggaaecmucw: } aomysykcgikegiau: unset($ikgwqyuyckaewsow["\x62\x69\154\x6c\151\156\x67\x5f\143\157\165\156\164\x72\x79"]); unset($ikgwqyuyckaewsow["\142\151\x6c\154\x69\156\x67\137\141\144\x64\x72\145\163\x73\137\x32"]); $ikgwqyuyckaewsow["\142\x69\x6c\154\x69\156\x67\x5f\x73\x74\141\164\145"]["\160\162\x69\x6f\162\x69\164\x79"] = 60; $ikgwqyuyckaewsow["\x62\151\x6c\154\x69\x6e\147\137\143\x69\x74\x79"]["\160\x72\x69\157\x72\151\x74\171"] = 70; $ikgwqyuyckaewsow["\x62\x69\154\154\x69\156\147\x5f\141\144\x64\x72\145\163\x73\137\x31"]["\160\x72\x69\x6f\x72\x69\164\x79"] = 80; $ikgwqyuyckaewsow["\x62\151\x6c\154\151\156\147\x5f\145\155\x61\151\154"]["\x70\162\151\157\162\x69\164\x79"] = 98; $ikgwqyuyckaewsow["\x62\x69\154\154\x69\156\x67\x5f\x70\x6f\x73\164\x63\157\144\145"]["\154\141\x62\145\x6c"] = __("\x50\x6f\163\x74\x63\x6f\x64\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\151\x6c\154\151\156\147\137\x65\155\141\x69\154"]["\x6c\141\142\145\x6c"] = __("\x45\155\141\x69\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\164\x6e\x20\142\x74\x6e\x2d\x62\154\x6f\143\153\40\142\x74\x6e\55\x70\x72\x69\x6d\x61\x72\171\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\154\x2e\167\x6f\157\x63\157\x6d\155\145\162\143\145\x2d\x73\150\151\160\x70\151\x6e\x67\x2d\155\145\164\150\157\x64\163" => ["\x63\154\x61\163\163" => "\154\151\163\x74\x2d\x67\x72\157\165\x70\40\x6c\151\x73\164\x2d\x67\162\157\165\160\55\146\x6c\165\163\150\40\142\x67\x2d\164\x72\141\x6e\x73\160\x61\x72\x65\x6e\164"], "\165\x6c\x2e\167\157\157\x63\157\x6d\x6d\145\162\x63\145\x2d\x73\150\151\160\160\x69\156\x67\55\155\145\x74\x68\x6f\x64\x73\40\x6c\x61\142\145\154" => ["\x63\x6c\141\163\x73" => "\x6d\55\x30"], "\x75\154\x2e\167\157\x6f\143\157\155\155\x65\162\143\x65\55\163\150\x69\x70\x70\151\x6e\147\55\x6d\x65\164\x68\157\144\163\x20\154\x69" => ["\143\x6c\141\163\163" => "\154\151\163\x74\55\x67\x72\157\165\x70\x2d\151\x74\x65\155\40\160\171\55\61\x20\160\x78\x2d\x30"]]; } public function umooigokeuauqqsw() : array { return ["\144\x6c\56\166\141\162\151\141\x74\151\157\156" => ["\143\x6c\x61\x73\x73" => "\x64\55\146\154\x65\x78\x20\x6d\x2d\141\x75\x74\157"], "\x64\x6c\56\166\x61\x72\151\x61\x74\151\157\x6e\x20\160" => ["\x63\154\x61\x73\163" => "\x6d\142\x2d\60"], "\144\x6c\56\x76\141\162\x69\x61\164\x69\x6f\156\x20\x64\x64" => ["\x63\154\x61\x73\163" => "\x6d\x62\55\x30"], "\x64\x6c\56\166\x61\162\x69\x61\x74\x69\x6f\156\x20\144\x74" => ["\143\154\141\163\x73" => "\x77\x2d\154\x67\55\62\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\146\157\162\155\55\162\157\x77" => ["\x63\154\141\163\x73" => "\x66\157\162\x6d\55\162\157\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\167\157\x6f\x63\157\155\155\x65\x72\143\145\55{$eaoumsseceiowgsk}\55\x66\151\145\154\144\163\x5f\137\x66\x69\x65\x6c\x64\x2d\167\162\x61\160\x70\x65\x72\x20\x3e\40\x70", ["\143\x6c\141\163\163" => "\x72\x6f\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\x62\142\x72"]); $ggauoeuaesiymgee = ["\56\151\163\55\x69\156\166\141\154\151\144\40\x69\156\160\x75\x74" => ["\143\154\141\163\163" => "\162\145\x71\165\151\162\x65\x64\x2d\x69\x6e\x70\x75\164"], "\56\151\x73\55\151\x6e\166\141\154\151\x64\40\163\145\154\x65\x63\x74" => ["\x63\154\x61\x73\163" => "\x72\145\161\x75\151\x72\145\x64\55\x69\156\x70\165\164"], "\x73\145\x6c\x65\143\164\x2c\x20\x69\156\160\165\x74" => ["\x63\x6c\x61\x73\x73" => "\146\157\162\155\55\x63\157\156\164\162\x6f\x6c"], "\43\142\x69\x6c\154\x69\x6e\147\x5f\146\151\162\163\164\137\156\141\155\x65\137\x66\x69\145\154\x64" => ["\143\x6c\x61\x73\163" => "\143\x6f\154\x2d\x6d\144\x2d\66"], "\43\x62\151\154\154\x69\x6e\147\137\154\x61\163\164\137\156\141\155\x65\x5f\x66\151\x65\154\144" => ["\143\154\x61\x73\163" => "\143\157\x6c\55\x6d\144\x2d\66"], "\43\142\151\x6c\x6c\151\x6e\x67\137\x70\150\x6f\156\145\137\x66\x69\145\154\144" => ["\143\x6c\141\x73\163" => "\143\157\x6c\55\x6d\x64\x2d\66"], "\43\142\x69\x6c\x6c\x69\156\x67\x5f\155\157\x62\151\154\x65\x5f\x66\151\x65\x6c\144" => ["\143\x6c\x61\x73\x73" => "\x63\157\154\55\155\144\x2d\66"], "\43\142\x69\154\x6c\151\156\x67\137\x63\x6f\x6d\160\141\x6e\x79\x5f\146\x69\x65\x6c\144" => ["\143\154\x61\163\x73" => "\x63\157\x6c\x2d\155\x64\x2d\x36"], "\x23\142\151\x6c\154\151\x6e\147\x5f\143\151\x74\171\x5f\x66\151\145\154\x64" => ["\143\154\141\163\163" => "\143\x6f\154\x2d\x6d\144\x2d\x36"], "\43\x62\x69\x6c\x6c\151\x6e\x67\137\x73\164\x61\x74\145\137\x66\x69\x65\154\x64" => ["\x63\x6c\x61\x73\163" => "\x63\x6f\154\55\155\144\x2d\x36"], "\x23\142\x69\154\154\151\156\x67\x5f\145\155\141\151\154\137\146\151\x65\154\144" => ["\x63\x6c\141\163\163" => "\143\157\154\x2d\x6d\144\55\66"], "\x23\x62\x69\154\154\151\156\x67\137\160\157\163\164\x63\157\x64\145\137\146\151\x65\154\x64" => ["\143\x6c\x61\163\163" => "\143\x6f\154\x2d\155\144\x2d\x36"], "\x23\x62\151\154\x6c\151\156\147\x5f\160\x6f\x73\164\x63\x6f\x64\x65\137\x66\151\145\154\144\40\x69\x6e\160\x75\164" => ["\x63\154\141\x73\163" => "\144\151\162\145\143\x74\151\157\156\x2d\x6c\x74\162"], "\x23\x63\165\163\x74\157\155\x65\162\137\144\145\164\141\x69\154\163\x20\x69\x6e\x70\x75\164" => ["\143\x6c\x61\x73\163" => "\x66\x6f\x72\x6d\55\143\x6f\x6e\x74\x72\157\154"], "\x2e\x77\157\157\x63\157\x6d\x6d\x65\162\143\145\55{$eaoumsseceiowgsk}\55\146\x69\x65\154\144\163\137\x5f\146\x69\145\x6c\x64\x2d\167\162\141\x70\160\x65\162\x20\160" => ["\143\154\141\x73\163" => "\x66\157\x72\155\55\147\x72\x6f\165\160\x20\143\157\154\x2d\x31\62"], "\160" => ["\143\154\141\x73\163" => "\155\142\55\x32"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
