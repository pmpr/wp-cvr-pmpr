<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c031df4f2f6             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Theme\Pmpr\Traits\CommonTrait; class Media extends Template { const WC_IMAGE_SIZES = ["\x73\151\156\x67\154\x65" => "\154\x61\x72\147\x65", "\x74\150\165\155\142\156\141\x69\154" => "\164\150\x75\155\142\156\x61\x69\154", "\x67\141\x6c\154\x65\162\171\x5f\164\x68\165\x6d\142\x6e\141\151\x6c" => "\x74\x68\x75\155\142\x6e\x61\x69\154"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\x63\x6f\155\x6d\145\162\x63\145\x5f\160\154\141\143\145\150\x6f\x6c\144\x65\x72\137\151\x6d\147", [$this, "\163\x67\145\171\x67\151\143\x73\153\x6b\141\x6b\171\x71\155\x63"], 99)->cecaguuoecmccuse("\151\x6e\164\145\x72\x6d\145\144\151\141\x74\x65\137\x69\x6d\141\147\145\137\x73\x69\x7a\x65\163\x5f\141\x64\166\141\x6e\x63\145\144", [$this, "\145\141\143\141\x6b\x61\153\x6d\161\147\x63\x63\163\x79\171\167"], 99)->cecaguuoecmccuse("\x73\151\x6e\147\x6c\145\x5f\160\162\157\144\x75\143\x74\x5f\141\162\143\x68\x69\166\x65\137\164\x68\165\x6d\142\156\141\151\x6c\137\x73\x69\x7a\145", [$this, "\155\145\x6b\x77\x71\x73\171\165\161\x71\x67\165\157\x75\x61\163"], 999)->cecaguuoecmccuse("\x77\x70\x5f\x67\x65\x74\137\141\x74\164\x61\143\150\x6d\145\156\164\137\151\x6d\x61\x67\145\137\141\x74\164\x72\151\142\x75\164\x65\163", [$this, "\157\163\151\x63\167\x6d\161\161\155\171\171\x71\x6f\143\x71\x6d"], 99, 2); foreach (self::WC_IMAGE_SIZES as $ymqmyyeuycgmigyo => $oiegiwogmwmawkeo) { $this->cecaguuoecmccuse("\x77\x6f\157\143\x6f\155\155\x65\162\x63\145\x5f\147\145\x74\137\x69\x6d\141\147\145\137\163\x69\172\145\x5f{$ymqmyyeuycgmigyo}", [$this, "\x77\155\171\155\x6d\157\145\163\161\165\147\x69\165\x77\145\171"]); ikqqskkqqwmwssoo: } iwekmyyccgiyuecc: } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::WC_IMAGE_SIZES); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); cwwmimggaaecmucw: } aomysykcgikegiau: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto awoaooyoeoyeeqee; } $ymqmyyeuycgmigyo = str_replace("\167\157\157\x63\157\155\x6d\x65\162\x63\x65\x5f\147\x65\x74\137\x69\x6d\x61\x67\145\137\x73\x69\172\145\137", '', current_filter()); awoaooyoeoyeeqee: $wyicceigkekkkwgs = $this->imeemecmsckmsgcu(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::WC_IMAGE_SIZES, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto ogqmesokykywseys; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; ogqmesokykywseys: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return "\155\145\x64\151\x75\x6d"; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\x69\x6d\147" => ["\x63\x6c\x61\x73\x73" => "\x63\x61\x72\x64\x2d\151\x6d\x67\55\164\157\160\40\151\155\x67\x2d\146\x6c\x75\151\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!(ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca())) { goto ykomgumacooyomsk; } $egkyssmuqcwaciya = "\x69\x6d\x67\55\146\x6c\x75\x69\x64\x20\x6d\142\x2d\63\x20\155\x78\55\x61\x75\x74\x6f\40\x72\157\x75\156\x64\x65\144" . ($this->yeoeauseikmskscu() ? '' : "\x20\x6d\142\x2d\155\x64\x2d\x61\165\164\x6f"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\x73", $egkyssmuqcwaciya); ykomgumacooyomsk: return $wwgucssaecqekuek; } }
