<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f7627560aa             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\156\144\145\x72\x5f\x72\145\154\x61\x74\145\144", [$this, "\x79\x6f\x79\x65\x77\x67\157\165\145\145\153\x6f\157\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\145\x6e\x64\145\x72\x5f\x72\145\x63\x6f\x6d\x6d\145\156\144\x65\x64", [$this, "\x63\x61\x71\157\165\161\x61\147\x63\x73\147\x6d\151\x63\x69\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); uqokiksoqcwwqgio: } kocqqoyymosmuksu: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto qukocuwgakemmyga; } $qookweymeqawmcwo["\x69\x74\x65\x6d\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\163\151\x7a\145" => "\x73\x6d\141\154\154", "\154\141\171\x6f\x75\x74" => "\x63\x6f\154\x6c\141\x70\x73\x69\142\x6c\x65\137\154\x69\x73\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\x6c\141\171\x6f\x75\164"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\x65\x6c\141\164\151\157\x6e\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); qukocuwgakemmyga: if (!$koaqeegoeiaiccse) { goto sioekkmekwygemyc; } echo $aqykuigiuwmmcieu; sioekkmekwygemyc: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
