<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e6f5ab992a             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\156\x64\x65\x72\x5f\162\145\x6c\141\164\145\x64", [$this, "\171\157\171\145\x77\147\157\x75\145\145\153\157\157\171\167\143"], 1, 3)->qcsmikeggeemccuu("\x72\145\x6e\x64\x65\162\137\162\145\x63\x6f\155\155\145\x6e\144\x65\x64", [$this, "\143\141\161\157\x75\x71\141\147\143\x73\147\x6d\151\x63\151\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); mogkoocsoeuyoqqa: } wsesqmcqoiyyqkqi: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto wkwamkgkwykeqkec; } $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([self::waguuiqqgsysuukq => self::meugkwqwuyoyeeqs, self::sqomuccqsqwsckyw => "\x63\157\154\154\x61\160\163\151\142\x6c\x65\x5f\154\151\163\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, self::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\x65\x6c\x61\x74\151\157\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); wkwamkgkwykeqkec: if (!$koaqeegoeiaiccse) { goto oimkeqocuguqqsqk; } echo $aqykuigiuwmmcieu; oimkeqocuguqqsqk: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
