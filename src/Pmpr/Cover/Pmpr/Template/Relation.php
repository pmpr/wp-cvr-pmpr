<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624218e50ab26             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\x6e\x64\145\x72\137\x72\x65\154\x61\x74\x65\144", [$this, "\x79\157\x79\145\x77\x67\x6f\x75\x65\x65\x6b\157\157\x79\167\x63"], 1, 3)->qcsmikeggeemccuu("\x72\x65\156\x64\145\x72\x5f\x72\145\x63\157\155\155\x65\x6e\144\x65\x64", [$this, "\143\x61\161\157\165\161\141\147\x63\163\x67\x6d\151\x63\151\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); wsesqmcqoiyyqkqi: } iesekaeqeomeuaui: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto mogkoocsoeuyoqqa; } $qookweymeqawmcwo["\151\164\145\x6d\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\163\x69\172\x65" => "\163\x6d\x61\x6c\154", "\x6c\141\x79\157\x75\164" => "\x63\x6f\x6c\154\141\160\x73\151\142\x6c\145\137\154\151\x73\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\x6c\x61\x79\157\165\164"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\145\x6c\141\164\x69\x6f\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); mogkoocsoeuyoqqa: if (!$koaqeegoeiaiccse) { goto wkwamkgkwykeqkec; } echo $aqykuigiuwmmcieu; wkwamkgkwykeqkec: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }