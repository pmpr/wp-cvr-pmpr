<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649c4bc7a9615             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\156\x64\145\x72\x5f\162\x65\x6c\141\x74\145\x64", [$this, "\171\157\171\145\167\147\157\165\145\145\153\157\x6f\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\145\x6e\x64\x65\162\x5f\x72\x65\143\157\x6d\155\145\x6e\144\145\144", [$this, "\143\x61\161\157\x75\161\141\147\143\163\147\155\x69\143\x69\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); goeoymmqqqeeoime: } qmiwsequckckoaei: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto eiawsoasmscmqswa; } $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([self::waguuiqqgsysuukq => self::meugkwqwuyoyeeqs, self::sqomuccqsqwsckyw => "\x63\157\x6c\154\x61\160\x73\x69\x62\154\145\x5f\x6c\x69\x73\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, self::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\x65\154\x61\164\x69\157\x6e\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); eiawsoasmscmqswa: if (!$koaqeegoeiaiccse) { goto ickcmqoiosquugwe; } echo $aqykuigiuwmmcieu; ickcmqoiosquugwe: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
