<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151c1dba229a             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\x6e\x64\145\x72\x5f\162\x65\154\141\x74\x65\144", [$this, "\x79\157\171\x65\x77\x67\x6f\x75\145\x65\x6b\x6f\x6f\x79\x77\x63"], 1, 3)->qcsmikeggeemccuu("\162\x65\x6e\144\145\162\x5f\x72\x65\143\x6f\155\x6d\145\x6e\144\x65\144", [$this, "\143\x61\x71\157\165\x71\141\x67\143\163\147\x6d\151\x63\x69\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { goto egesuwkqkmaigaoe; egesuwkqkmaigaoe: $icwicymcioeyeyek = []; goto syusgosewwkoagoq; icumkkykaoqycqqu: return $icwicymcioeyeyek; goto oeamoqweiueaueay; syusgosewwkoagoq: $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); goto mcqucouuiuoagqwc; mcqucouuiuoagqwc: foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); ugogoekeckgcmuaw: } goto eweaaismksecwagy; eweaaismksecwagy: ykqsuiyyosyeyscc: goto icumkkykaoqycqqu; oeamoqweiueaueay: } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { goto awgmegueeqeyqamu; yggseoaommssscwo: echo $aqykuigiuwmmcieu; goto aeiemwacaiygemmg; aeiemwacaiygemmg: kyiwsiakwgiwouyi: goto yyqygaokeccgugos; gqimwsyemoewagcy: $post = get_post(); goto aoaqwygkaagiuuws; esagiiawomyacuiw: $qookweymeqawmcwo["\151\x74\145\x6d\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); goto maaisuqwkymeguys; iuwkiyimqmgguose: if (!$koaqeegoeiaiccse) { goto kyiwsiakwgiwouyi; } goto yggseoaommssscwo; yyqygaokeccgugos: return $aqykuigiuwmmcieu; goto oeusomaaeekakake; maaisuqwkymeguys: $qookweymeqawmcwo = array_replace(["\x73\151\172\145" => "\163\x6d\x61\154\x6c", "\x6c\141\171\157\165\x74" => "\143\x6f\x6c\154\x61\x70\163\151\x62\x6c\x65\137\154\x69\163\164"], $qookweymeqawmcwo); goto qkyciyiwkmgkmquk; aoaqwygkaagiuuws: if (!$post) { goto owgsameoayaogsma; } goto esagiiawomyacuiw; awgmegueeqeyqamu: $aqykuigiuwmmcieu = null; goto gqimwsyemoewagcy; ayceeyuocgowqwsa: owgsameoayaogsma: goto iuwkiyimqmgguose; sksgcusuyqcwqswe: $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\x65\x6c\x61\x74\151\157\156\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); goto ayceeyuocgowqwsa; qkyciyiwkmgkmquk: $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\x61\x79\157\165\164"); goto sksgcusuyqcwqswe; oeusomaaeekakake: } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RELATED, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RECOMMEND, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
