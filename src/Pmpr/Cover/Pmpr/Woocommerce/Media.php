<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66812eb5d80af             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\x73\151\x6e\147\x6c\x65" => "\154\141\162\x67\x65", "\x74\150\165\x6d\x62\156\x61\151\x6c" => "\164\150\x75\155\x62\156\x61\x69\154", "\x67\141\x6c\x6c\x65\x72\171\x5f\164\150\x75\x6d\x62\x6e\x61\151\x6c" => "\x74\x68\165\x6d\x62\x6e\x61\x69\x6c"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\157\155\x6d\x65\162\x63\145\137\160\154\141\x63\x65\x68\157\154\144\145\162\x5f\151\155\147", [$this, "\x73\x67\x65\x79\x67\x69\143\163\153\x6b\141\x6b\171\x71\155\x63"], 99)->cecaguuoecmccuse("\151\x6e\x74\145\162\155\145\x64\x69\141\164\x65\137\151\x6d\x61\147\145\x5f\x73\151\x7a\x65\x73\x5f\x61\144\166\x61\156\x63\145\x64", [$this, "\x65\x61\143\141\153\141\153\x6d\x71\147\143\x63\163\171\x79\x77"], 99)->cecaguuoecmccuse("\x73\x69\156\x67\x6c\145\137\x70\x72\x6f\x64\x75\x63\164\x5f\x61\162\143\150\x69\166\145\x5f\x74\x68\x75\x6d\142\156\141\151\154\137\163\x69\172\x65", [$this, "\155\145\153\x77\161\x73\x79\165\161\x71\x67\165\157\165\x61\x73"], 999)->cecaguuoecmccuse("\x77\160\137\x67\145\x74\137\x61\x74\x74\141\x63\x68\155\x65\x6e\x74\137\x69\x6d\141\147\x65\x5f\x61\x74\x74\162\151\142\165\164\x65\x73", [$this, "\157\163\151\143\x77\x6d\161\161\155\171\x79\x71\157\143\161\x6d"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); kicwiowcogmauwiy: } kaiesowkgwogqseg: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto cwswueuqoamqasya; } $ymqmyyeuycgmigyo = str_replace("\167\157\x6f\x63\x6f\155\155\x65\162\x63\x65\x5f\x67\x65\164\x5f\x69\155\x61\147\x65\137\163\x69\172\145\137", '', current_filter()); cwswueuqoamqasya: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto kgmeiwiakwicgkkk; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; kgmeiwiakwicgkkk: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\151\x6d\147" => ["\x63\x6c\x61\x73\163" => "\x69\x6d\147\55\x66\154\x75\x69\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto omykokikgocoikec; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto suuskagowwgsouqw; } $egkyssmuqcwaciya = "\151\155\147\x2d\x66\154\x75\x69\x64\40\155\x62\x2d\63\x20\x6d\x78\x2d\141\x75\164\x6f\x20\x72\157\165\156\x64\x65\144" . ($this->yeoeauseikmskscu() ? '' : "\40\x6d\142\x2d\x6d\144\x2d\141\165\164\x6f\40\155\x77\x2d\62\x30\x30\160\170"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\x73", $egkyssmuqcwaciya); suuskagowwgsouqw: omykokikgocoikec: return $wwgucssaecqekuek; } }
