<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64cbb6720cb12             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\163\151\x6e\x67\x6c\x65" => "\154\x61\162\147\145", "\x74\150\x75\155\142\156\x61\x69\154" => "\164\x68\165\x6d\142\156\141\151\154", "\x67\x61\x6c\x6c\x65\162\x79\137\x74\x68\x75\x6d\142\156\x61\151\x6c" => "\164\x68\x75\155\x62\x6e\x61\x69\154"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\143\x6f\155\x6d\145\x72\143\145\x5f\160\154\141\x63\145\150\x6f\x6c\x64\x65\162\x5f\x69\155\147", [$this, "\163\x67\145\171\147\151\143\163\x6b\153\x61\x6b\171\x71\x6d\143"], 99)->cecaguuoecmccuse("\151\156\x74\x65\x72\x6d\x65\x64\151\141\164\145\x5f\x69\155\x61\147\x65\x5f\x73\x69\172\145\x73\137\x61\144\x76\141\x6e\x63\x65\144", [$this, "\145\x61\x63\x61\x6b\141\x6b\155\161\147\143\143\163\x79\x79\167"], 99)->cecaguuoecmccuse("\163\151\156\x67\154\145\137\x70\162\x6f\x64\x75\143\164\137\x61\162\143\150\x69\166\145\x5f\164\150\x75\x6d\142\156\141\x69\154\x5f\163\x69\172\145", [$this, "\155\145\153\x77\161\163\x79\x75\x71\x71\147\x75\157\x75\x61\163"], 999)->cecaguuoecmccuse("\167\160\137\x67\x65\x74\x5f\141\164\x74\141\x63\150\x6d\145\x6e\x74\137\151\155\141\x67\145\x5f\141\x74\x74\162\x69\142\165\x74\x65\x73", [$this, "\x6f\x73\x69\143\167\155\161\161\x6d\171\x79\161\x6f\x63\161\x6d"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); ugqwuugsweqgmywk: } gmwykkouysyaqwqm: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto uaukmuiwskcemcsw; } $ymqmyyeuycgmigyo = str_replace("\x77\x6f\157\x63\157\155\x6d\145\x72\143\145\x5f\147\145\x74\x5f\151\155\x61\147\x65\137\163\x69\172\145\x5f", '', current_filter()); uaukmuiwskcemcsw: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto sockeswygwcskeuq; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; sockeswygwcskeuq: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\x69\155\x67" => ["\x63\154\141\163\x73" => "\x69\155\147\x2d\146\x6c\165\x69\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto uaqackioaiqwcocy; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto mkwkkmkgiqiamacc; } $egkyssmuqcwaciya = "\x69\155\147\x2d\x66\154\165\151\144\40\155\142\55\x33\x20\155\x78\x2d\141\x75\164\157\x20\x72\x6f\165\156\x64\x65\x64" . ($this->yeoeauseikmskscu() ? '' : "\x20\x6d\142\55\x6d\x64\55\x61\x75\x74\157\x20\155\167\55\62\60\x30\x70\x78"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\163", $egkyssmuqcwaciya); mkwkkmkgiqiamacc: uaqackioaiqwcocy: return $wwgucssaecqekuek; } }
