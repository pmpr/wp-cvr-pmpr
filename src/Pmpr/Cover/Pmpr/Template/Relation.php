<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             640cfeb0677a7             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\x6e\x64\145\x72\137\162\145\x6c\141\x74\x65\x64", [$this, "\x79\157\x79\145\x77\147\157\x75\x65\145\153\157\x6f\171\167\x63"], 1, 3)->qcsmikeggeemccuu("\x72\145\156\x64\145\162\x5f\x72\x65\143\157\155\155\x65\156\x64\x65\144", [$this, "\x63\141\x71\x6f\x75\161\141\x67\x63\x73\x67\x6d\x69\x63\151\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); ugqwuugsweqgmywk: } gmwykkouysyaqwqm: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto uaukmuiwskcemcsw; } $qookweymeqawmcwo["\x69\x74\145\x6d\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\x73\151\172\x65" => "\x73\x6d\141\x6c\154", "\154\141\x79\157\x75\164" => "\143\x6f\154\154\x61\x70\163\x69\x62\x6c\x65\137\154\151\163\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\x61\x79\x6f\165\x74"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\145\154\x61\164\151\157\156\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); uaukmuiwskcemcsw: if (!$koaqeegoeiaiccse) { goto sockeswygwcskeuq; } echo $aqykuigiuwmmcieu; sockeswygwcskeuq: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
