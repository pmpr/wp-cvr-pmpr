<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066d89355c             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\x6e\x64\x65\162\137\162\x65\154\x61\164\145\x64", [$this, "\171\157\171\145\x77\147\157\165\145\x65\x6b\157\x6f\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\x65\x6e\144\145\x72\x5f\x72\145\x63\x6f\155\155\145\x6e\x64\x65\x64", [$this, "\143\141\161\157\165\x71\141\x67\143\163\147\155\x69\x63\x69\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); qukocuwgakemmyga: } uqokiksoqcwwqgio: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto sioekkmekwygemyc; } $qookweymeqawmcwo["\151\164\x65\x6d\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\x73\x69\x7a\x65" => "\x73\155\141\154\x6c", "\x6c\141\171\157\165\164" => "\143\157\x6c\154\x61\160\x73\151\x62\154\145\137\x6c\x69\163\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\x61\171\x6f\165\164"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\x65\154\141\x74\151\157\156\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); sioekkmekwygemyc: if (!$koaqeegoeiaiccse) { goto yiowgigkkwsoqcci; } echo $aqykuigiuwmmcieu; yiowgigkkwsoqcci: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RELATED, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RECOMMEND, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
