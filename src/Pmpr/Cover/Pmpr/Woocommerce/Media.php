<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66895809724d0             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\x73\151\156\x67\154\x65" => "\x6c\x61\x72\x67\x65", "\164\150\165\x6d\x62\x6e\x61\x69\154" => "\x74\150\165\155\142\x6e\141\x69\x6c", "\147\141\154\154\x65\x72\x79\x5f\164\150\x75\x6d\142\156\141\x69\154" => "\164\x68\165\x6d\x62\156\x61\151\x6c"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\157\x63\x6f\155\155\x65\x72\x63\x65\x5f\x70\x6c\141\x63\x65\x68\157\x6c\x64\x65\162\137\x69\155\147", [$this, "\x73\x67\x65\x79\147\x69\143\x73\x6b\153\141\x6b\171\161\155\x63"], 99)->cecaguuoecmccuse("\151\x6e\x74\x65\162\x6d\145\x64\151\141\x74\145\137\x69\155\141\147\145\137\163\x69\172\x65\x73\x5f\141\x64\x76\x61\156\143\145\x64", [$this, "\x65\x61\143\141\x6b\x61\153\x6d\161\x67\x63\143\163\x79\x79\x77"], 99)->cecaguuoecmccuse("\x73\x69\156\x67\x6c\x65\137\160\162\x6f\144\165\143\x74\x5f\141\162\x63\x68\151\x76\x65\x5f\x74\x68\165\x6d\x62\156\x61\x69\154\x5f\163\151\x7a\145", [$this, "\155\x65\153\167\161\x73\x79\165\x71\161\x67\x75\157\165\x61\x73"], 999)->cecaguuoecmccuse("\x77\160\x5f\147\145\x74\x5f\141\164\x74\x61\143\x68\x6d\145\156\164\137\x69\155\141\x67\145\137\x61\164\x74\x72\151\x62\x75\164\145\163", [$this, "\x6f\x73\x69\x63\167\155\161\161\x6d\171\171\161\157\143\161\x6d"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); kicwiowcogmauwiy: } kaiesowkgwogqseg: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto cwswueuqoamqasya; } $ymqmyyeuycgmigyo = str_replace("\x77\157\157\143\x6f\x6d\x6d\145\x72\x63\145\x5f\x67\145\164\x5f\151\155\x61\x67\x65\137\x73\151\172\145\137", '', current_filter()); cwswueuqoamqasya: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto kgmeiwiakwicgkkk; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; kgmeiwiakwicgkkk: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\x69\x6d\147" => ["\143\154\141\163\163" => "\151\155\x67\x2d\x66\x6c\165\151\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto omykokikgocoikec; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto suuskagowwgsouqw; } $egkyssmuqcwaciya = "\151\x6d\147\x2d\146\154\165\151\x64\x20\155\x62\x2d\x33\40\155\170\55\x61\x75\x74\157\x20\x72\157\165\156\144\145\144" . ($this->yeoeauseikmskscu() ? '' : "\x20\x6d\x62\x2d\x6d\144\55\141\165\164\x6f\40\x6d\x77\55\62\x30\60\x70\x78"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\163", $egkyssmuqcwaciya); suuskagowwgsouqw: omykokikgocoikec: return $wwgucssaecqekuek; } }
