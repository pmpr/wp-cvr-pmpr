<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c508e944d8a             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use WP_Post; class Card extends Common { const kkaiwagiuqkoeiwo = "\166\145\162\x74\151\x63\141\x6c\x5f\x69\155\141\147\x65\x5f\164\x65\x78\x74"; const qmseaqikkacquqgs = "\x76\145\x72\x74\151\143\x61\x6c\137\151\x6d\141\x67\145\x5f\164\145\170\164\x5f\x66\157\x6f\164\x65\x72"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\156\x64\x65\x72\137\143\141\162\x64", [$this, "\151\153\x75\x77\153\165\x6b\x73\157\167\141\x65\x61\165\x6b\x75"], 1, 5)->qcsmikeggeemccuu("\162\x65\x6e\144\x65\x72\x5f\143\141\162\144\163", [$this, "\165\x75\165\171\x69\x69\x63\x75\x6d\x6b\x63\167\x69\x6b\151\167"], 1, 3); } public function ikuwkuksowaeauku($post, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x65\143\150\157" => true, "\x69\x6e\144\x65\170" => 1, "\x63\154\141\x73\x73" => '', "\154\145\156\x67\164\x68" => 1, "\154\x61\x79\157\165\164" => $this->isygaaucmuqaqoac(), "\x63\x6f\x6c\165\155\156" => "\143\157\154\55\155\x64\55\x36\40\x63\x6f\x6c\55\154\147\x2d\64", "\x68\x61\x73\x5f\x67\x72\151\x64" => true, "\x68\141\x73\137\155\145\x74\x61" => true, "\x68\141\163\x5f\x64\x65\x73\143\x72\151\x70\x74\x69\157\156" => true]); $iqyiekoceqqsqoow = $ywmkwiwkosakssii["\154\141\171\157\x75\x74"]; unset($ywmkwiwkosakssii["\x6c\141\x79\x6f\165\x74"]); $ywmkwiwkosakssii["\151\164\x65\155"] = $post; $ywmkwiwkosakssii["\154\157\157\x70"] = ConvertArray::kamisyecckmwywwo(["\x69\x6e\144\x65\170" => $ywmkwiwkosakssii["\151\156\144\145\x78"], "\154\x65\x6e\x67\164\x68" => $ywmkwiwkosakssii["\x6c\145\x6e\147\x74\x68"]]); if (isset($ywmkwiwkosakssii["\x69\x6d\x61\147\145\137\163\151\172\145"])) { goto iuuuususuuuaieem; } $ywmkwiwkosakssii["\151\x6d\141\x67\x65\137\163\x69\x7a\145"] = $this->iuwsgyqakicakuoq($iqyiekoceqqsqoow); iuuuususuuuaieem: $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x63\x61\162\x64\137{$iqyiekoceqqsqoow}", $ywmkwiwkosakssii); if (!$ywmkwiwkosakssii["\x65\x63\x68\157"]) { goto kocqqoyymosmuksu; } echo $aqykuigiuwmmcieu; kocqqoyymosmuksu: return $aqykuigiuwmmcieu; } public function isygaaucmuqaqoac() : string { if (!($this->caokeucsksukesyo()->kyqakacqeumicgag()->okiaumcqquyioqcy() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy())) { goto uqokiksoqcwwqgio; } return self::qmseaqikkacquqgs; uqokiksoqcwwqgio: return self::kkaiwagiuqkoeiwo; } public function iuwsgyqakicakuoq($iqyiekoceqqsqoow) : string { switch ($iqyiekoceqqsqoow) { case self::kkaiwagiuqkoeiwo: case self::qmseaqikkacquqgs: $oiegiwogmwmawkeo = "\155\x65\x64\151\x75\x6d"; goto qukocuwgakemmyga; default: $oiegiwogmwmawkeo = "\164\x68\165\x6d\x62\x6e\x61\x69\x6c"; goto qukocuwgakemmyga; } sioekkmekwygemyc: qukocuwgakemmyga: return $oiegiwogmwmawkeo; } public function uuuyiicumkcwikiw($wyoiwuqokyeeuguk, $ywmkwiwkosakssii) { $aqykuigiuwmmcieu = ''; if (is_array($wyoiwuqokyeeuguk)) { goto mscyggqcesgqqksu; } if ($wyoiwuqokyeeuguk instanceof WP_Post) { goto oyeyomcgkmgymogq; } goto gamqcwuwkikwqoay; mscyggqcesgqqksu: $ywmkwiwkosakssii["\x6c\145\156\x67\x74\150"] = count($wyoiwuqokyeeuguk); foreach ($wyoiwuqokyeeuguk as $momcykaoccoymeig => $post) { $aqykuigiuwmmcieu .= $this->ikuwkuksowaeauku($post, $ywmkwiwkosakssii); ieqesiiageaauiuw: } yiowgigkkwsoqcci: goto gamqcwuwkikwqoay; oyeyomcgkmgymogq: $aqykuigiuwmmcieu .= $this->ikuwkuksowaeauku($wyoiwuqokyeeuguk, $ywmkwiwkosakssii); gamqcwuwkikwqoay: return $aqykuigiuwmmcieu; } }
