<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6634d46bd9359             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\141\163\150\142\x6f\x61\x72\144" => IconInterface::ygcmqmkcsymeucoq, "\x6f\x72\x64\x65\162\x73" => IconInterface::goqumcwkcuygcaui, "\x64\157\167\x6e\x6c\157\x61\x64\163" => IconInterface::msyqysqykouywsua, "\x65\x64\x69\x74\x2d\141\x64\x64\162\145\163\x73" => IconInterface::wykikkeyisimsmyy, "\160\x61\x79\155\x65\x6e\164\x2d\x6d\145\164\150\157\x64\x73" => IconInterface::acciucugwcskkwmi, "\145\144\x69\x74\x2d\141\x63\143\x6f\165\156\164" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\x73\164\157\x6d\145\x72\x2d\x6c\157\147\x6f\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\155\x6d\145\162\143\x65\137\x6c\x6f\157\160\137\x70\162\x6f\x64\x75\x63\164\137\154\x69\x6e\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\154\141\x73\x73" => "\x74\x65\x78\164\x2d\x64\145\x63\157\162\141\164\151\157\x6e\x2d\x6e\x6f\156\x65\x20\164\145\170\164\x2d\x6d\x75\164\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x70\162\151\x63\x65\163" => [], "\x70\x72\x6f\x64\x75\143\x74" => '', "\x74\x64\137\x63\x6c\141\x73\163" => '', "\164\x72\x5f\x63\154\141\163\x73" => '', "\164\x68\x5f\x63\154\x61\163\x73" => "\x74\145\170\x74\55\147\x72\x61\x79\x2d\x38\60\x30\40\x70\171\55\x32", "\150\x61\163\137\164\x69\164\154\x65" => true, "\164\x61\x62\154\x65\137\x63\x6c\141\x73\x73" => "\155\x62\x2d\65"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\x6f\144\165\143\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\160\162\x69\x63\145\x73", false); if (!$product) { goto iuuuususuuuaieem; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto kocqqoyymosmuksu; iuuuususuuuaieem: global $product; kocqqoyymosmuksu: if (!$product instanceof WC_Product) { goto gamqcwuwkikwqoay; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto ieqesiiageaauiuw; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\167\x6f\157\x63\157\155\155\x65\162\143\145\55\x50\x72\x69\x63\x65\55\x63\x75\x72\x72\x65\156\143\171\123\171\155\142\157\154" => ["\143\154\141\163\163" => "\146\x6f\156\164\x2d\61\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto uqokiksoqcwwqgio; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); uqokiksoqcwwqgio: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\145\154"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\156\x73"); if ($eukiyocmgugiioei) { goto sioekkmekwygemyc; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto yiowgigkkwsoqcci; sioekkmekwygemyc: $uiiuuaeiyecmiouc["\162\145\x67\x75\x6c\141\x72\x5f\160\162\151\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto qukocuwgakemmyga; } $uiiuuaeiyecmiouc["\x64\151\163\143\157\165\156\164"] = $this->yqauycsoymimeise($product); qukocuwgakemmyga: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\151\163\x63\x6f\x75\156\164\137\x65\170\x70\x69\162\x65"] = $this->sscegwueamckwmcy("\x77\x6f\157\143\157\x6d\155\145\x72\143\145\x5f\x70\162\157\144\165\143\x74\x5f\144\x69\163\143\157\165\x6e\164\137\145\x78\160\151\x72\x65\x5f\150\164\155\x6c", '', ["\160\162\x6f\144\x75\x63\x74" => $product]); yiowgigkkwsoqcci: $uiiuuaeiyecmiouc["\163\141\x6c\145\x5f\x70\x72\x69\x63\x65"] = $eeeyyekmaesysegc; ieqesiiageaauiuw: gamqcwuwkikwqoay: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto wkwamkgkwykeqkec; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\145\x67\x75\x6c\141\x72\137\160\162\x69\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\x65\147\165\154\141\162\x20\120\162\151\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto iesekaeqeomeuaui; case "\163\x61\154\x65\x5f\x70\162\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\x6c\145\x20\x50\162\x69\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto iesekaeqeomeuaui; case "\144\151\163\143\157\x75\x6e\164\x5f\x65\170\x70\151\x72\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\163\x63\157\165\x6e\164\40\x45\170\x70\151\162\x61\x74\x69\x6f\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto iesekaeqeomeuaui; case "\144\x69\x73\143\157\x75\156\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\x73\143\x6f\165\x6e\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto iesekaeqeomeuaui; } wsesqmcqoiyyqkqi: iesekaeqeomeuaui: if (!$aumscagymwyyicag) { goto mogkoocsoeuyoqqa; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; mogkoocsoeuyoqqa: oyeyomcgkmgymogq: } mscyggqcesgqqksu: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\x72\x69\x63\x65")]); $this->ewcsyqaaigkicgse("\x6d\x65\x74\x61\x64\141\164\x61\137\x72\x65\156\144\145\162", $ywmkwiwkosakssii); wkwamkgkwykeqkec: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto oimkeqocuguqqsqk; } woocommerce_template_loop_add_to_cart(); goto oeocukauoyosicso; oimkeqocuguqqsqk: woocommerce_template_single_add_to_cart(); oeocukauoyosicso: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto kwiggogcgciwuwqk; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\x72\157\x64\165\x63\x74\x5f\143\x61\164"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto yykqaowwsqgqysmq; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\145\x66" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\143\x6c\141\x73\163" => "\x70\x72\157\x64\x75\x63\164\55\143\x61\x74\x65\147\x6f\x72\171\40\150\157\166\145\x72\x2d\160\162\x69\x6d\x61\x72\171\x20\146\157\x6e\164\x2d\x31\x36"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\x6e\40\103\x61\164\145\x67\x6f\162\x79\x3a\x20\x25\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\154\x61\x73\x73" => "\164\x65\170\164\x2d\147\162\x61\171\x2d\x36\60\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\143\x6c\141\x73\163" => "\x69\143\x6f\156\55\163\x6d\x20\155\162\55\x32\40\155\x79\x2d\141\x75\164\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\x6c\x61\x73\163" => "\x64\x2d\146\154\145\170"]); if (!$koaqeegoeiaiccse) { goto suqceasgacskcmkc; } echo $nsmgceoqaqogqmuw; suqceasgacskcmkc: yykqaowwsqgqysmq: kwiggogcgciwuwqk: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto uckewycoogsogwiy; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto ikuuiauwouuqawuw; uckewycoogsogwiy: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\143\154\x61\163\x73" => "\x70\162\151\x63\145\x2d\x64\x69\x73\143\x6f\x75\x6e\164\x2d\x61\x6d\x6f\x75\x6e\164\x20\x74\x65\x78\x74\x2d\144\141\x6e\147\145\x72"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\x69\x63\x65\137\x64\151\163\x63\x6f\165\156\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); ikuuiauwouuqawuw: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto yuimwyoywaiiqacs; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto yoqakewookqoqacm; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; yoqakewookqoqacm: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto gswcoeiisamakwii; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\x69\x63\145\x5f\x64\151\163\x63\157\x75\x6e\x74"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); gswcoeiisamakwii: yuimwyoywaiiqacs: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\145\161\165\151\x72\145\x64"]) && $aiowsaccomcoikus["\x72\x65\x71\x75\151\x72\145\x64"])) { goto iwsmmkqaoksmocok; } $aiowsaccomcoikus["\x63\154\x61\163\163"] = ["\x69\163\x2d\x69\x6e\166\141\x6c\x69\x64"]; iwsmmkqaoksmocok: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; emqswoaawgeyosmi: } ocywegekakimmwcq: unset($ikgwqyuyckaewsow["\x62\151\154\154\151\x6e\x67\137\143\x6f\165\x6e\x74\x72\171"]); unset($ikgwqyuyckaewsow["\x62\151\x6c\154\x69\x6e\147\x5f\x61\144\x64\162\145\163\163\x5f\62"]); $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\151\156\147\x5f\x73\x74\141\x74\x65"]["\x70\x72\x69\157\x72\x69\x74\x79"] = 60; $ikgwqyuyckaewsow["\142\151\x6c\x6c\151\x6e\x67\x5f\143\x69\164\171"]["\160\162\151\157\x72\151\x74\171"] = 70; $ikgwqyuyckaewsow["\x62\x69\x6c\154\x69\156\x67\x5f\x61\144\144\x72\x65\163\163\137\61"]["\x70\162\x69\157\162\x69\x74\171"] = 80; $ikgwqyuyckaewsow["\142\151\x6c\x6c\151\x6e\x67\x5f\145\155\141\x69\154"]["\160\x72\x69\157\162\x69\164\171"] = 98; $ikgwqyuyckaewsow["\142\151\x6c\154\x69\156\x67\137\x70\x6f\163\x74\143\x6f\144\145"]["\x6c\141\142\145\154"] = __("\120\157\x73\164\143\x6f\x64\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\151\x6c\x6c\x69\x6e\147\x5f\145\x6d\x61\151\x6c"]["\x6c\141\142\145\154"] = __("\x45\155\x61\151\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\x6e\40\142\164\156\55\x62\x6c\157\x63\153\x20\142\x74\x6e\55\160\162\151\x6d\141\x72\x79\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\x6c\56\x77\x6f\x6f\143\x6f\x6d\155\145\x72\x63\145\x2d\x73\x68\x69\160\160\151\156\147\x2d\155\x65\x74\x68\x6f\144\163" => ["\143\x6c\x61\x73\163" => "\x6c\x69\163\164\55\147\162\x6f\x75\x70\x20\x6c\151\x73\x74\x2d\x67\162\x6f\165\160\x2d\x66\154\x75\x73\x68\40\142\147\55\164\162\141\156\x73\160\141\162\x65\x6e\164"], "\x75\x6c\56\x77\157\157\143\157\x6d\155\x65\x72\x63\x65\55\163\x68\151\160\160\x69\x6e\x67\55\155\145\x74\x68\157\144\163\x20\154\x61\142\145\154" => ["\143\154\x61\x73\163" => "\x6d\x2d\x30"], "\x75\x6c\56\167\157\157\143\157\x6d\x6d\145\162\143\145\x2d\163\x68\151\160\160\x69\156\147\x2d\155\145\164\150\157\x64\x73\40\154\x69" => ["\x63\x6c\141\163\163" => "\x6c\151\x73\164\55\x67\162\x6f\165\x70\x2d\x69\164\145\155\x20\x70\x79\55\61\x20\160\x78\55\x30"]]; } public function umooigokeuauqqsw() : array { return ["\x64\x6c\56\166\x61\162\x69\x61\164\151\157\156" => ["\143\154\x61\x73\x73" => "\x64\x2d\x66\x6c\x65\x78\x20\x6d\x2d\141\165\x74\x6f"], "\x64\154\56\166\141\162\151\141\x74\x69\157\x6e\x20\x70" => ["\143\154\141\x73\x73" => "\155\142\x2d\x30"], "\x64\154\x2e\166\x61\x72\151\x61\164\x69\157\x6e\40\x64\x64" => ["\x63\x6c\141\163\163" => "\155\142\x2d\x30"], "\x64\154\x2e\x76\141\x72\151\141\164\151\x6f\156\40\144\x74" => ["\x63\154\x61\163\163" => "\167\x2d\154\x67\x2d\62\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\x66\157\x72\x6d\55\162\157\167" => ["\143\x6c\141\163\163" => "\x66\x6f\162\x6d\x2d\x72\x6f\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\x77\x6f\x6f\x63\x6f\155\x6d\145\x72\143\145\55{$eaoumsseceiowgsk}\x2d\146\151\x65\154\x64\x73\137\137\146\151\x65\x6c\144\55\167\162\141\160\x70\x65\162\40\x3e\40\x70", ["\x63\154\141\x73\x73" => "\162\x6f\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\142\142\x72"]); $ggauoeuaesiymgee = ["\x2e\x69\x73\55\x69\156\166\141\x6c\x69\144\40\151\156\x70\x75\164" => ["\x63\154\141\163\x73" => "\162\x65\x71\x75\151\x72\145\144\55\151\156\160\165\x74"], "\56\x69\163\x2d\151\156\x76\141\x6c\151\144\40\163\x65\154\145\x63\164" => ["\x63\154\x61\x73\163" => "\x72\x65\x71\165\151\x72\145\144\x2d\x69\156\160\x75\164"], "\163\x65\x6c\x65\143\164\54\40\151\x6e\160\165\x74" => ["\x63\x6c\x61\163\x73" => "\x66\x6f\162\155\x2d\143\x6f\x6e\164\x72\157\154"], "\43\142\151\x6c\154\x69\156\x67\137\146\151\x72\x73\x74\x5f\156\141\155\145\137\146\x69\145\x6c\x64" => ["\143\154\141\x73\x73" => "\143\x6f\154\x2d\155\144\55\x36"], "\43\x62\151\x6c\154\x69\x6e\x67\x5f\154\x61\163\x74\x5f\156\x61\155\145\137\x66\151\x65\154\144" => ["\x63\154\141\163\163" => "\x63\157\154\x2d\x6d\x64\x2d\66"], "\43\142\x69\x6c\x6c\x69\x6e\147\x5f\x70\x68\x6f\x6e\x65\x5f\x66\x69\145\154\144" => ["\143\154\141\163\163" => "\143\157\x6c\x2d\155\144\55\x36"], "\x23\142\151\154\154\x69\x6e\x67\x5f\x6d\157\x62\x69\x6c\x65\x5f\x66\151\x65\154\x64" => ["\143\x6c\141\163\x73" => "\x63\x6f\x6c\x2d\155\144\x2d\66"], "\43\142\151\154\154\x69\x6e\x67\x5f\143\x6f\x6d\x70\x61\x6e\171\137\x66\x69\145\x6c\144" => ["\x63\x6c\141\163\163" => "\x63\x6f\154\55\155\x64\55\x36"], "\x23\142\x69\x6c\154\151\156\x67\137\143\151\x74\x79\x5f\146\x69\145\154\x64" => ["\x63\154\141\x73\x73" => "\x63\x6f\154\55\x6d\144\55\x36"], "\x23\x62\x69\x6c\x6c\x69\156\x67\x5f\163\x74\141\164\145\137\x66\151\145\154\x64" => ["\143\154\x61\x73\x73" => "\x63\157\154\x2d\x6d\144\x2d\x36"], "\x23\142\151\154\154\151\x6e\x67\x5f\x65\x6d\x61\151\x6c\x5f\146\151\x65\x6c\144" => ["\143\x6c\141\163\x73" => "\143\x6f\154\55\x6d\144\x2d\66"], "\43\x62\x69\154\154\x69\156\x67\x5f\160\x6f\x73\164\143\157\x64\x65\x5f\x66\x69\145\154\144" => ["\x63\154\141\x73\x73" => "\143\x6f\x6c\55\155\x64\x2d\66"], "\x23\x62\151\154\154\x69\x6e\x67\x5f\160\x6f\163\164\143\157\x64\x65\x5f\x66\x69\x65\x6c\x64\x20\151\156\160\165\164" => ["\143\154\x61\x73\x73" => "\144\151\162\145\x63\164\x69\x6f\156\55\x6c\x74\x72"], "\x23\143\x75\x73\x74\157\155\x65\x72\x5f\x64\145\x74\x61\151\x6c\x73\x20\x69\x6e\x70\x75\x74" => ["\143\154\x61\163\163" => "\146\x6f\162\x6d\x2d\x63\157\x6e\x74\x72\157\x6c"], "\x2e\167\x6f\157\143\x6f\x6d\155\145\x72\143\x65\x2d{$eaoumsseceiowgsk}\x2d\x66\151\x65\x6c\144\163\x5f\137\146\x69\145\154\x64\55\x77\162\x61\160\160\145\x72\40\x70" => ["\143\x6c\141\x73\163" => "\x66\x6f\x72\x6d\55\x67\x72\x6f\165\160\40\143\157\x6c\x2d\x31\x32"], "\x70" => ["\x63\x6c\x61\x73\x73" => "\x6d\142\x2d\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
