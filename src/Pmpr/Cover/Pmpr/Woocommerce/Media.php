<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a6ebce3271             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\x73\151\156\x67\x6c\145" => "\154\x61\x72\147\145", "\164\150\165\155\142\x6e\141\x69\154" => "\x74\150\165\x6d\x62\x6e\x61\151\154", "\x67\x61\x6c\x6c\x65\162\171\137\x74\x68\x75\x6d\142\156\141\151\154" => "\x74\150\165\155\x62\x6e\x61\x69\154"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\157\143\x6f\155\155\x65\162\143\x65\x5f\160\x6c\x61\143\x65\150\157\x6c\x64\x65\x72\x5f\x69\x6d\x67", [$this, "\x73\x67\145\171\x67\151\x63\163\153\x6b\141\x6b\x79\x71\x6d\x63"], 99)->cecaguuoecmccuse("\151\x6e\164\x65\x72\x6d\145\x64\x69\141\164\145\x5f\x69\155\141\147\145\137\163\x69\172\x65\x73\x5f\141\144\166\x61\156\143\x65\144", [$this, "\145\x61\143\x61\153\141\x6b\x6d\161\147\x63\143\x73\x79\x79\167"], 99)->cecaguuoecmccuse("\163\151\156\x67\x6c\x65\x5f\x70\162\157\x64\x75\143\164\x5f\141\x72\x63\x68\151\166\x65\x5f\x74\x68\x75\x6d\142\x6e\141\151\x6c\x5f\x73\x69\172\145", [$this, "\x6d\145\153\167\161\163\x79\165\x71\161\x67\x75\x6f\165\141\x73"], 999)->cecaguuoecmccuse("\x77\x70\x5f\x67\145\x74\137\x61\x74\x74\x61\x63\150\155\145\156\x74\x5f\151\155\141\147\145\137\x61\164\164\x72\151\x62\x75\164\x65\163", [$this, "\x6f\163\151\x63\167\x6d\161\x71\155\171\171\161\157\143\x71\x6d"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); gicyayswqyuoekcq: } kosaqwikueyksqmw: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto iikiiioqiyegyaak; } $ymqmyyeuycgmigyo = str_replace("\x77\x6f\x6f\x63\x6f\x6d\155\x65\162\143\x65\137\147\145\x74\x5f\151\x6d\x61\147\145\x5f\163\x69\x7a\x65\x5f", '', current_filter()); iikiiioqiyegyaak: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto uiosisocuwokwkie; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; uiosisocuwokwkie: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\151\155\x67" => ["\x63\154\141\163\x73" => "\151\x6d\x67\x2d\146\x6c\165\151\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto gcckqucukawcasgk; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto cuumeogeomowqisc; } $egkyssmuqcwaciya = "\x69\x6d\x67\x2d\146\154\165\151\144\x20\155\x62\55\x33\40\x6d\x78\x2d\x61\165\x74\157\40\162\x6f\x75\x6e\x64\x65\144" . ($this->yeoeauseikmskscu() ? '' : "\40\155\x62\x2d\155\144\55\141\x75\x74\x6f\40\155\167\x2d\62\x30\60\x70\170"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\163", $egkyssmuqcwaciya); cuumeogeomowqisc: gcckqucukawcasgk: return $wwgucssaecqekuek; } }
