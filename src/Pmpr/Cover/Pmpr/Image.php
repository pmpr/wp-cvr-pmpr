<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623fffd75497b             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\144\x65\154\x65\x74\x65\137\x61\164\164\x61\143\150\155\x65\x6e\x74", [$this, "\161\x79\x63\155\151\x61\x69\161\x79\163\x63\171\171\x6d\x73\153"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\163\x76\147\x5f\x65\154\x65\155\x65\156\164\x5f\143\154\141\x73\163\x5f\162\x61\x74\151\x6f\156\137\x63\157\x6e\x76\x65\x72\x74\145\162", [$this, "\155\x73\163\x6d\165\147\145\x6b\155\147\x79\x6b\x79\x6d\x77\147"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\145\x74\x5f\143\x6f\x76\145\x72\137\151\x6d\141\x67\145\x5f\x73\151\172\x65\163"), [$this, "\155\153\x63\x71\x67\x67\x69\x73\x75\167\165\165\165\145\161\155"])->cecaguuoecmccuse("\x63\155\163\137\160\x6f\x73\x74\137\151\x6d\141\x67\x65\137\x66\x65\141\164\x75\162\145\137\x69\155\141\x67\145\137\166\x61\x6c\x69\x64\141\164\x69\157\156\x5f\163\x69\172\145\163", [$this, "\x61\147\153\147\x71\165\155\153\167\x65\x6b\x61\x75\167\x67\145"], 10, 2); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\x69\143\x6f\x6e\55\170\x73" => 1, "\151\143\157\x6e\55\x73\x6d" => 1.25, "\151\143\x6f\x6e\x2d\x6d\x64" => 1.5, "\x69\143\x6f\156\x2d\154\147" => 1.75, "\x69\143\157\x6e\55\170\154" => 2, "\151\143\157\x6e\55\170\154\154" => 2.25, "\151\x63\x6f\156\x2d\63\x78" => 3, "\x69\143\157\156\x2d\x34\x78" => 3, "\x69\143\x6f\156\x2d\x35\170" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\155\145\144\151\165\x6d\137\154\141\x72\x67\145"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\163\x69\x7a\145\163"]) && is_array($ugugimquukqwogge["\163\151\172\145\163"]))) { goto qgegkeomwscwwiuw; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\142\x61\x73\145\x64\151\x72"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\163\151\x7a\145\x73"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\x31\66\x78\71", "\x34\170\63", "\x31\x78\x31"])) { goto egasokooagakisiy; } goto mswsoaimesegiiic; egasokooagakisiy: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto kecwuwwcwokuksyq; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); kecwuwwcwokuksyq: mswsoaimesegiiic: } usqgaogkqgemuima: qgegkeomwscwwiuw: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto eiawsoasmscmqswa; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); eiawsoasmscmqswa: } goeoymmqqqeeoime: qmiwsequckckoaei: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\x77\151\144\x74\150") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto qmeoaqmsuseueqiy; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto ickcmqoiosquugwe; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); ygkcacsyyckescqs: return (int) $qcgkuqesqqymcuui; } }
