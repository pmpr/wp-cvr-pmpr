<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63aeb41f08931             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\144\x65\x6c\x65\x74\145\137\141\x74\x74\141\x63\150\155\145\156\164", [$this, "\161\x79\x63\x6d\151\141\151\161\171\163\x63\171\171\x6d\x73\153"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\163\166\147\x5f\x65\154\145\155\145\156\164\x5f\x63\x6c\x61\x73\x73\137\162\141\164\151\157\x6e\137\x63\x6f\x6e\x76\145\162\x74\x65\162", [$this, "\155\x73\163\155\165\x67\x65\153\x6d\147\x79\153\171\155\167\147"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\x65\x74\x5f\x63\x6f\x76\145\162\x5f\x69\155\141\x67\145\x5f\163\x69\172\x65\x73"), [$this, "\x6d\153\x63\x71\147\x67\151\x73\165\167\x75\x75\165\x65\161\x6d"])->cecaguuoecmccuse("\x63\155\163\137\160\x6f\163\164\137\x69\155\141\x67\x65\137\146\x65\141\x74\x75\162\145\x5f\151\x6d\141\x67\x65\137\x76\141\154\151\x64\141\164\x69\x6f\x6e\137\163\151\172\145\163", [$this, "\141\x67\x6b\x67\x71\165\x6d\x6b\167\145\153\141\165\x77\x67\145"], 10, 2); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\x69\143\x6f\x6e\55\170\x73" => 1, "\x69\x63\x6f\x6e\55\163\155" => 1.25, "\151\143\x6f\x6e\x2d\x6d\x64" => 1.5, "\x69\143\157\x6e\55\154\x67" => 1.75, "\x69\x63\157\x6e\55\170\154" => 2, "\x69\x63\157\156\55\170\154\154" => 2.25, "\151\x63\x6f\x6e\55\x33\x78" => 3, "\151\x63\157\156\x2d\x34\x78" => 3, "\x69\143\157\x6e\55\65\x78" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\x6d\x65\x64\151\x75\x6d\137\154\141\162\x67\x65"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\163\x69\172\x65\163"]) && is_array($ugugimquukqwogge["\x73\151\172\145\x73"]))) { goto easqmyamcmeesgya; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\142\x61\163\x65\x64\151\162"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\x73\151\172\145\163"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\61\x36\x78\x39", "\x34\x78\x33", "\61\x78\61"])) { goto siecswkggyikqkga; } goto goqmywuiicciasyk; siecswkggyikqkga: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto qkuiwoqksgayqqmg; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); qkuiwoqksgayqqmg: goqmywuiicciasyk: } oyiuyywyeoskckuw: easqmyamcmeesgya: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto smiemmcqqukyguuu; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); smiemmcqqukyguuu: } quaqmuusokiyqgqe: yuqgwwmqwqiuwmaw: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\167\151\144\x74\x68") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto yamyagayiooyeekg; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto iksewmsaugayqaqq; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); iksewmsaugayqaqq: goto yoagcooekomeokwg; yamyagayiooyeekg: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); yoagcooekomeokwg: return (int) $qcgkuqesqqymcuui; } }
