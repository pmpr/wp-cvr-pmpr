<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f0c533e9             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\163\151\x6e\147\x6c\x65" => "\x6c\x61\x72\x67\x65", "\x74\x68\x75\x6d\x62\156\x61\x69\x6c" => "\x74\150\x75\155\142\156\x61\x69\154", "\147\x61\154\x6c\145\x72\171\x5f\x74\150\165\155\x62\156\x61\x69\x6c" => "\164\150\165\x6d\x62\156\x61\151\x6c"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\x6f\143\x6f\x6d\155\x65\162\x63\x65\137\160\154\141\x63\145\x68\157\x6c\144\x65\x72\137\151\155\147", [$this, "\x73\x67\145\171\x67\151\143\x73\153\x6b\x61\x6b\171\161\155\143"], 99)->cecaguuoecmccuse("\x69\156\164\145\x72\155\145\144\151\141\164\145\x5f\151\155\x61\x67\x65\x5f\x73\x69\172\x65\x73\x5f\141\x64\x76\x61\x6e\143\x65\x64", [$this, "\x65\x61\143\141\153\x61\153\155\x71\x67\143\143\163\x79\171\167"], 99)->cecaguuoecmccuse("\163\151\x6e\147\154\x65\137\x70\x72\x6f\x64\165\x63\x74\137\x61\162\143\x68\151\x76\145\137\164\x68\165\155\x62\x6e\x61\x69\154\x5f\163\151\172\x65", [$this, "\x6d\145\153\x77\x71\163\171\x75\161\161\x67\165\157\165\x61\x73"], 999)->cecaguuoecmccuse("\167\160\x5f\147\x65\164\137\x61\164\x74\141\143\x68\155\x65\156\x74\137\x69\155\141\147\x65\x5f\141\x74\164\162\x69\x62\x75\164\145\163", [$this, "\x6f\163\x69\x63\167\155\x71\x71\155\x79\x79\161\x6f\x63\x71\155"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); esuiysskoweawsue: } uqqaiagaeqgqgaiy: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto gaomwagkcciesyqy; } $ymqmyyeuycgmigyo = str_replace("\x77\x6f\x6f\143\157\x6d\155\x65\x72\x63\x65\x5f\x67\145\164\x5f\151\155\141\x67\145\137\x73\x69\x7a\145\137", '', current_filter()); gaomwagkcciesyqy: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto aegysmeecgcgayyw; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; aegysmeecgcgayyw: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\151\155\x67" => ["\143\x6c\141\163\163" => "\x69\155\x67\55\146\154\x75\151\x64"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto soaccwqimeksgwiw; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto suqkuqygkkgwyaie; } $egkyssmuqcwaciya = "\x69\x6d\147\x2d\x66\154\165\x69\144\40\155\x62\55\x33\x20\x6d\x78\x2d\x61\165\164\157\x20\x72\x6f\165\x6e\144\145\x64" . ($this->yeoeauseikmskscu() ? '' : "\x20\155\x62\55\x6d\x64\55\141\165\x74\157\x20\x6d\167\x2d\62\x30\60\x70\170"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\163\163", $egkyssmuqcwaciya); suqkuqygkkgwyaie: soaccwqimeksgwiw: return $wwgucssaecqekuek; } }
