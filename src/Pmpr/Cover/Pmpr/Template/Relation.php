<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c7b6d27cadb             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\156\x64\145\162\x5f\x72\145\x6c\x61\164\x65\x64", [$this, "\171\157\171\145\x77\147\x6f\165\x65\x65\x6b\x6f\157\x79\x77\x63"], 1, 3)->qcsmikeggeemccuu("\162\145\156\x64\145\x72\137\162\145\x63\x6f\x6d\x6d\145\x6e\x64\145\x64", [$this, "\x63\141\161\x6f\165\161\x61\147\143\x73\x67\155\x69\x63\151\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); wsesqmcqoiyyqkqi: } iesekaeqeomeuaui: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto mogkoocsoeuyoqqa; } $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([self::waguuiqqgsysuukq => self::meugkwqwuyoyeeqs, self::sqomuccqsqwsckyw => "\x63\x6f\154\154\141\x70\x73\151\142\x6c\145\x5f\x6c\x69\x73\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, self::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\x65\x6c\x61\164\151\157\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); mogkoocsoeuyoqqa: if (!$koaqeegoeiaiccse) { goto wkwamkgkwykeqkec; } echo $aqykuigiuwmmcieu; wkwamkgkwykeqkec: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
