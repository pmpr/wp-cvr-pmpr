<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621bc64b2b206             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\x6e\144\145\x72\x5f\162\x65\154\141\164\x65\144", [$this, "\x79\x6f\171\x65\167\x67\x6f\x75\x65\145\x6b\157\x6f\x79\x77\143"], 1, 3)->qcsmikeggeemccuu("\x72\145\156\x64\145\162\137\162\145\143\x6f\x6d\155\x65\x6e\x64\145\x64", [$this, "\x63\141\x71\157\165\161\x61\147\143\x73\x67\x6d\x69\x63\x69\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); kocqqoyymosmuksu: } iuuuususuuuaieem: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto uqokiksoqcwwqgio; } $qookweymeqawmcwo["\151\164\145\155\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\163\151\x7a\x65" => "\x73\x6d\141\154\x6c", "\x6c\141\x79\157\165\x74" => "\143\157\x6c\154\141\160\163\x69\x62\154\145\137\154\151\163\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\x61\171\157\x75\x74"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\x65\x6c\141\164\x69\157\x6e\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); uqokiksoqcwwqgio: if (!$koaqeegoeiaiccse) { goto qukocuwgakemmyga; } echo $aqykuigiuwmmcieu; qukocuwgakemmyga: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
