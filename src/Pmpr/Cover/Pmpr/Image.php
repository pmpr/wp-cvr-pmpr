<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b85330cef5b             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\144\x65\x6c\x65\x74\x65\x5f\141\164\164\141\143\x68\155\x65\x6e\164", [$this, "\161\x79\x63\x6d\151\x61\151\161\x79\x73\x63\171\x79\x6d\x73\153"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x73\166\x67\137\x65\x6c\x65\155\x65\156\x74\x5f\143\154\141\163\163\137\162\141\x74\x69\157\156\137\x63\x6f\156\x76\x65\x72\164\145\162", [$this, "\x6d\x73\163\x6d\165\147\145\153\x6d\x67\171\x6b\171\x6d\167\147"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\x65\164\x5f\x63\157\x76\145\x72\x5f\151\155\141\147\x65\137\x73\151\172\x65\163"), [$this, "\155\153\143\x71\147\x67\151\x73\x75\167\165\165\x75\145\x71\x6d"])->cecaguuoecmccuse("\143\x6d\163\x5f\160\x6f\163\x74\x5f\151\x6d\x61\147\x65\x5f\x66\x65\x61\164\165\162\145\x5f\151\155\x61\x67\145\x5f\166\141\154\151\144\x61\164\x69\157\156\x5f\x73\151\172\145\163", [$this, "\x61\147\153\147\161\165\x6d\153\167\x65\x6b\x61\165\167\x67\x65"], 10, 2); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\x69\x63\157\x6e\55\x78\x73" => 1, "\151\x63\157\156\x2d\163\x6d" => 1.25, "\151\143\157\156\x2d\155\144" => 1.5, "\151\143\x6f\x6e\x2d\154\147" => 1.75, "\151\x63\157\x6e\55\x78\154" => 2, "\x69\x63\157\x6e\55\170\154\x6c" => 2.25, "\151\143\x6f\x6e\x2d\x33\x78" => 3, "\151\143\x6f\x6e\x2d\x34\170" => 3, "\151\x63\157\x6e\55\x35\170" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\155\x65\144\x69\x75\155\x5f\x6c\x61\x72\x67\x65"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\x73\x69\x7a\145\x73"]) && is_array($ugugimquukqwogge["\163\151\x7a\145\163"]))) { goto uougwgeyiokewkkm; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\142\x61\163\x65\144\x69\162"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\163\151\x7a\x65\x73"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\61\x36\170\71", "\64\170\63", "\x31\x78\x31"])) { goto amgsueumgaguceaa; } goto mwysseaekcsiesmm; amgsueumgaguceaa: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto gygwewcqsmwqismo; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); gygwewcqsmwqismo: mwysseaekcsiesmm: } ukkcmocamwgiqayu: uougwgeyiokewkkm: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto ucqmumuygcywwqma; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); ucqmumuygcywwqma: } ukqocwewouckikso: gommacygsykyussk: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\x77\151\x64\164\150") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto uimeeckqksqeekqq; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto uykousayyomcaeaa; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); uykousayyomcaeaa: goto iuuuususuuuaieem; uimeeckqksqeekqq: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); iuuuususuuuaieem: return (int) $qcgkuqesqqymcuui; } }
