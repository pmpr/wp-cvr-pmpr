<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d1dbc97f5c2             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Interfaces\Constants; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\156\x64\x65\x72\x5f\x72\x65\154\x61\164\145\x64", [$this, "\x79\157\171\x65\167\x67\157\x75\145\145\x6b\157\157\171\x77\x63"], 1, 3)->qcsmikeggeemccuu("\162\x65\x6e\x64\145\162\137\x72\145\x63\157\155\x6d\x65\156\x64\145\144", [$this, "\x63\x61\x71\157\165\x71\141\x67\x63\163\147\155\x69\143\151\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); wsesqmcqoiyyqkqi: } iesekaeqeomeuaui: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto mogkoocsoeuyoqqa; } $qookweymeqawmcwo[Constants::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([Constants::waguuiqqgsysuukq => Constants::meugkwqwuyoyeeqs, Constants::sqomuccqsqwsckyw => "\143\x6f\x6c\154\141\160\163\x69\x62\154\145\x5f\x6c\151\x73\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, Constants::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\x65\154\x61\x74\x69\x6f\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); mogkoocsoeuyoqqa: if (!$koaqeegoeiaiccse) { goto wkwamkgkwykeqkec; } echo $aqykuigiuwmmcieu; wkwamkgkwykeqkec: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
