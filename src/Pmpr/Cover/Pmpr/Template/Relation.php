<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63aee0f6868c8             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\156\x64\x65\162\137\x72\145\x6c\141\x74\145\144", [$this, "\x79\x6f\171\145\167\147\157\x75\x65\x65\x6b\x6f\157\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\145\156\x64\145\x72\x5f\x72\145\x63\157\155\x6d\x65\156\144\145\x64", [$this, "\143\141\x71\x6f\165\x71\141\147\x63\x73\147\x6d\x69\x63\151\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); eyiwqgqcsqakwqss: } yuoeumyiuqkuouey: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto sckioayasmkcoeoo; } $qookweymeqawmcwo["\151\x74\145\155\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\163\151\172\145" => "\x73\x6d\141\154\154", "\x6c\141\171\157\x75\164" => "\143\x6f\154\x6c\141\x70\163\x69\x62\154\x65\137\x6c\151\163\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\x6c\141\171\157\x75\164"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\145\x6c\x61\164\151\157\156\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); sckioayasmkcoeoo: if (!$koaqeegoeiaiccse) { goto yssqmyoaokkksukc; } echo $aqykuigiuwmmcieu; yssqmyoaokkksukc: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
