<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284d92880e1b             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\156\144\x65\162\137\x72\145\154\x61\x74\145\144", [$this, "\171\157\171\x65\167\147\x6f\x75\145\x65\x6b\x6f\x6f\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\x65\156\144\145\x72\x5f\x72\145\x63\x6f\x6d\x6d\145\156\x64\145\144", [$this, "\143\x61\161\157\165\x71\141\147\x63\163\147\155\x69\x63\151\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); uiosisocuwokwkie: } iikiiioqiyegyaak: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto cuumeogeomowqisc; } $qookweymeqawmcwo["\151\164\145\x6d\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\x73\151\x7a\x65" => "\x73\x6d\x61\x6c\x6c", "\x6c\x61\171\x6f\165\164" => "\143\x6f\154\154\x61\160\163\151\142\154\x65\137\154\x69\163\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\x6c\x61\171\157\165\164"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\145\x6c\141\164\x69\x6f\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); cuumeogeomowqisc: if (!$koaqeegoeiaiccse) { goto gcckqucukawcasgk; } echo $aqykuigiuwmmcieu; gcckqucukawcasgk: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
