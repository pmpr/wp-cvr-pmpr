<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267960fca960             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\156\144\145\x72\137\162\145\x6c\141\164\145\x64", [$this, "\x79\x6f\x79\145\x77\147\x6f\x75\145\145\x6b\157\157\171\167\x63"], 1, 3)->qcsmikeggeemccuu("\x72\x65\156\x64\x65\162\x5f\x72\145\143\x6f\x6d\x6d\145\x6e\x64\145\144", [$this, "\143\x61\x71\157\165\161\x61\147\143\163\147\x6d\151\143\x69\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); cgewcsueoyaeikgm: } cuoqqgaygogsmmic: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto sukskmcwsoysiuqu; } $qookweymeqawmcwo["\x69\x74\x65\x6d\x73"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\163\151\172\145" => "\x73\155\141\x6c\x6c", "\154\141\x79\157\x75\164" => "\143\157\154\154\x61\160\x73\x69\x62\x6c\x65\137\154\x69\x73\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\x61\x79\157\x75\164"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\x65\154\141\164\151\157\156\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); sukskmcwsoysiuqu: if (!$koaqeegoeiaiccse) { goto igymseewwyiocoug; } echo $aqykuigiuwmmcieu; igymseewwyiocoug: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
