<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66583846cd78a             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\x73\151\156\x67\154\x65" => "\154\x61\162\x67\145", "\x74\x68\x75\x6d\142\156\x61\x69\x6c" => "\164\x68\165\x6d\x62\156\141\x69\154", "\x67\x61\154\x6c\x65\x72\171\137\x74\x68\165\155\x62\156\x61\151\x6c" => "\164\150\165\x6d\142\x6e\x61\x69\154"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\157\143\x6f\155\155\x65\162\143\x65\137\160\x6c\x61\x63\145\150\157\x6c\144\x65\162\137\151\155\147", [$this, "\x73\x67\145\171\x67\151\143\x73\153\153\141\153\171\x71\155\143"], 99)->cecaguuoecmccuse("\x69\156\164\x65\162\x6d\x65\144\151\141\164\145\137\x69\x6d\141\147\x65\x5f\163\x69\x7a\x65\163\137\x61\144\x76\x61\x6e\143\x65\144", [$this, "\x65\141\x63\141\x6b\x61\153\x6d\x71\147\x63\x63\163\x79\x79\167"], 99)->cecaguuoecmccuse("\x73\151\156\x67\154\x65\137\160\x72\x6f\x64\x75\x63\164\137\x61\x72\143\150\x69\166\x65\x5f\164\x68\x75\x6d\x62\156\141\151\154\x5f\x73\x69\x7a\x65", [$this, "\x6d\145\x6b\x77\161\x73\x79\165\x71\161\x67\x75\157\165\141\x73"], 999)->cecaguuoecmccuse("\167\160\x5f\x67\145\164\137\141\x74\164\x61\x63\x68\155\x65\156\x74\x5f\x69\155\x61\147\145\137\141\x74\164\162\x69\142\x75\x74\x65\163", [$this, "\157\x73\x69\x63\x77\x6d\x71\x71\x6d\171\171\x71\x6f\x63\x71\155"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); esuiysskoweawsue: } uqqaiagaeqgqgaiy: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto gaomwagkcciesyqy; } $ymqmyyeuycgmigyo = str_replace("\167\x6f\x6f\143\157\155\x6d\x65\162\x63\145\137\147\145\x74\137\151\x6d\141\147\x65\137\x73\151\172\145\x5f", '', current_filter()); gaomwagkcciesyqy: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto aegysmeecgcgayyw; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; aegysmeecgcgayyw: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\x69\155\147" => ["\143\x6c\141\x73\163" => "\x69\155\x67\x2d\146\154\165\x69\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto soaccwqimeksgwiw; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto suqkuqygkkgwyaie; } $egkyssmuqcwaciya = "\151\x6d\147\x2d\146\154\165\151\x64\40\x6d\142\x2d\x33\40\x6d\170\x2d\x61\x75\x74\x6f\x20\x72\157\x75\x6e\144\145\144" . ($this->yeoeauseikmskscu() ? '' : "\x20\x6d\x62\55\155\144\x2d\x61\x75\x74\157\40\155\167\55\x32\60\60\x70\170"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", $egkyssmuqcwaciya); suqkuqygkkgwyaie: soaccwqimeksgwiw: return $wwgucssaecqekuek; } }
