<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63aed6ffced90             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\x73\x69\x6e\x67\154\145" => "\154\x61\x72\x67\x65", "\164\150\x75\155\142\156\141\151\154" => "\164\150\x75\155\x62\x6e\x61\151\154", "\147\x61\154\154\145\x72\x79\x5f\164\x68\165\155\x62\156\141\151\154" => "\x74\x68\x75\155\142\156\x61\x69\x6c"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\143\157\155\155\x65\162\x63\145\137\x70\154\x61\143\145\150\x6f\154\x64\x65\162\137\151\155\147", [$this, "\x73\x67\x65\171\147\151\x63\x73\153\153\x61\153\x79\161\155\143"], 99)->cecaguuoecmccuse("\x69\x6e\x74\145\162\155\145\x64\151\x61\x74\145\x5f\151\155\x61\x67\145\x5f\x73\x69\x7a\x65\163\137\141\144\x76\x61\156\x63\145\x64", [$this, "\145\x61\143\141\153\x61\153\x6d\161\147\x63\x63\163\x79\x79\x77"], 99)->cecaguuoecmccuse("\x73\151\x6e\x67\154\x65\137\x70\162\x6f\144\165\x63\x74\x5f\141\x72\143\x68\151\166\x65\x5f\164\x68\165\155\142\x6e\x61\151\154\137\163\x69\x7a\145", [$this, "\155\145\153\167\x71\x73\x79\x75\x71\161\147\x75\157\165\141\x73"], 999)->cecaguuoecmccuse("\x77\160\x5f\147\x65\164\137\x61\164\x74\x61\143\x68\x6d\x65\x6e\x74\137\x69\155\x61\x67\x65\x5f\141\x74\164\162\x69\x62\165\164\x65\163", [$this, "\157\163\151\x63\167\155\161\161\155\x79\x79\161\157\143\161\x6d"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); cuoqqgaygogsmmic: } ygkcacsyyckescqs: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto cgewcsueoyaeikgm; } $ymqmyyeuycgmigyo = str_replace("\167\157\157\x63\157\x6d\x6d\x65\x72\x63\145\x5f\147\x65\164\x5f\x69\155\141\x67\x65\137\x73\x69\x7a\145\137", '', current_filter()); cgewcsueoyaeikgm: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto sukskmcwsoysiuqu; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; sukskmcwsoysiuqu: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\x69\155\x67" => ["\143\x6c\x61\163\163" => "\x69\x6d\x67\55\146\x6c\165\151\x64"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto mqccmesakuemceqi; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto igymseewwyiocoug; } $egkyssmuqcwaciya = "\x69\x6d\147\55\x66\154\165\151\144\40\x6d\x62\55\x33\40\155\170\x2d\x61\165\164\x6f\x20\x72\157\x75\156\144\145\144" . ($this->yeoeauseikmskscu() ? '' : "\40\155\x62\x2d\155\x64\55\141\x75\164\157\x20\155\x77\x2d\x32\60\60\x70\x78"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\163", $egkyssmuqcwaciya); igymseewwyiocoug: mqccmesakuemceqi: return $wwgucssaecqekuek; } }
