<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63aed6ffced90             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; class Setting extends BaseClass implements CommonInterface { const aycugmweyouqeiea = "\141\147\x72\x65\x65\155\x65\x6e\164"; const mgwmuqmguauukqeq = "\152\x6f\142\x5f\164\151\164\x6c\145"; const guaaeawmegqeouuy = "\164\x65\141\155\x5f\143\x6f\x75\x6e\164"; const oeouaqyskusqoasi = "\141\x63\164\x69\x6f\156\x5f\164\x65\x78\164"; const miykmmqkcuaakoom = "\x74\x65\x61\x6d\x5f\145\x78\x70\145\162\x69\x65\156\143\145"; const eigsugyqaecywyeq = "\163\145\143\x74\151\x6f\x6e\x5f"; const wmuocueiuqacmqsc = self::eigsugyqaecywyeq . "\61\x5f"; const qoauigwkukeecage = self::eigsugyqaecywyeq . "\62\x5f"; const wwkkwcgwceoueauo = self::eigsugyqaecywyeq . "\63\137"; const emgcmwcicoekgsik = self::eigsugyqaecywyeq . "\x34\x5f"; const quswgwuygqegmiqu = self::eigsugyqaecywyeq . "\x35\137"; const iuuyqwoiyoeyiiga = self::eigsugyqaecywyeq . "\66\x5f"; const gcgaogswqsukoeig = self::wmuocueiuqacmqsc . "\164\157\x70\137\154\151\163\x74"; const wqeqaueukmiwkwik = self::wmuocueiuqacmqsc . "\x74\x6f\160\137\x73\154\151\144\145\162"; const sqemmgwmwwawgecq = self::wmuocueiuqacmqsc . "\x62\x6f\x74\164\x6f\155\137\154\151\163\164"; const qggmmsccekaeawoc = self::wqeqaueukmiwkwik . self::oeouaqyskusqoasi; const goaeygisucequeqs = self::qoauigwkukeecage . self::qescuiwgsyuikume; const gwokiiwmeucmigem = self::qoauigwkukeecage . self::eqkeooqcsscoggia; const iiokomyaiiwokwgu = self::qoauigwkukeecage . "\156\145\167\x65\163\x74\137\x70\x72\157\x64\x75\x63\164\163"; const mokwceeesgoiqykk = self::qoauigwkukeecage . self::oguseymmyyoyaako . self::oeouaqyskusqoasi; const ecgcgowekkgwywuk = self::wwkkwcgwceoueauo . self::iockmgiyoygcswog . "\137"; const yeoauowmckkwokys = self::wwkkwcgwceoueauo . "\x74\145\141\x6d\163"; const kqaykcwsmauommaw = self::ecgcgowekkgwywuk . self::NAME; const gaayaukqcmygkmsg = self::ecgcgowekkgwywuk . self::mkousmkiawwousws; const iyysyggsoauagagu = self::ecgcgowekkgwywuk . "\x62\x61\x64\x67\x65\163"; const cuiomisokkyumoso = self::ecgcgowekkgwywuk . "\x61\x63\164\151\x6f\x6e\x5f\160\x6f\x73\164"; const cwgaumwyaysmkgwe = self::ecgcgowekkgwywuk . "\x61\x63\x74\151\157\156\137\x74\151\164\154\145"; const eqqscegsgukyuwky = self::emgcmwcicoekgsik . "\x70\157\x73\164\x73"; const goemqugwaiiaukec = self::emgcmwcicoekgsik . self::oeouaqyskusqoasi; const eimskssquwymsqyu = self::quswgwuygqegmiqu . "\x70\157\163\x74\x73\137\x6f\162\144\145\162"; const yayugsaemuciyscs = self::quswgwuygqegmiqu . "\141\143\164\151\157\156\137\160\157\x73\x74"; const oiigmckuoekemays = self::quswgwuygqegmiqu . "\x61\143\x74\151\x6f\156\137\164\151\x74\x6c\145"; const kmwomuiqseaeigcy = self::quswgwuygqegmiqu . "\x62\154\157\x67\137\x73\164\x61\x74\163"; const kasskqiyaswguqcg = "\x63\157\155\160\x6f\156\x65\x6e\x74\x73\137"; const quugakkwosgsoqsg = self::kasskqiyaswguqcg . "\x77\157\x6f\143\157\x6d\x6d\x65\162\x63\x65\137"; const ecomaekukeyouiay = self::quugakkwosgsoqsg . "\143\x61\162\164\x5f\151\x6d\141\x67\145"; public function __construct() { $this->name = self::akuociswqmoigkas(); $this->parentMenu = "\x74\150\x65\155\145\163\x2e\160\150\160"; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x43\157\166\145\162\x20\123\x65\164\164\x69\x6e\x67", PR__CVR__PMPR); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\107\x65\x6e\145\162\141\x6c", PR__CVR__PMPR))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x68\x6f\x6d\x65", __("\110\x6f\x6d\x65", PR__CVR__PMPR))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x68\157\x6d\x65\55\163\145\143\x74\151\157\x6e\x73", __("\x53\x65\143\x74\151\157\x6e\x73", PR__CVR__PMPR))->aucimgwswmgaocae($this->mismyewsggusymya(1)->mkksewyosgeumwsa(self::iseogkiymousogom(self::gcgaogswqsukoeig, __("\x54\x6f\x70\40\114\151\163\164", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk())->wygoskowywcuyaiq())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qggmmsccekaeawoc, __("\x53\154\151\144\145\x72\x20\x41\x63\x74\151\157\x6e\40\x54\145\x78\x74", PR__CVR__PMPR))->eyygsasuqmommkua(__("\122\x65\141\x64\40\x4d\157\162\x65", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::wqeqaueukmiwkwik, __("\116\x65\167\163\40\x53\154\151\144\x65\162", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk(true))->wygoskowywcuyaiq())->mkksewyosgeumwsa(self::iseogkiymousogom(self::sqemmgwmwwawgecq, __("\x42\157\164\164\157\x6d\x20\114\x69\163\x74", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk(true))->wygoskowywcuyaiq()->sosuookgumsgyyyc(2))->gswweykyogmsyawy(__("\124\157\x70\40\x53\145\143\x74\x69\157\156", PR__CVR__PMPR))->saemoowcasogykak(IconInterface::miecumwmuocmymoa))->aucimgwswmgaocae($this->mismyewsggusymya(2)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mokwceeesgoiqykk, __("\x41\143\x74\151\x6f\x6e\x20\124\145\x78\x74", PR__CVR__PMPR))->eyygsasuqmommkua(__("\102\x75\x79\40\116\157\167\41", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::iiokomyaiiwokwgu, __("\x4e\145\167\x65\163\164\x20\x50\x72\x6f\x64\x75\x63\x74\163", PR__CVR__PMPR))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::mswoacegomcucaik, __("\x50\x72\x6f\144\x75\143\164", PR__CVR__PMPR))->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\164\x6c\x65", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x54\x69\x74\154\x65", PR__CVR__PMPR))))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::eqkeooqcsscoggia, __("\x44\145\x73\143\x72\151\160\164\x69\157\156", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\105\170\x63\145\x72\x70\164", PR__CVR__PMPR)))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x42\x61\143\153\147\x72\x6f\x75\156\x64\x20\111\155\141\147\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\106\145\x61\x74\x75\x72\145\x64\x20\x49\155\x61\147\x65", PR__CVR__PMPR))))->wygoskowywcuyaiq())->gswweykyogmsyawy(__("\120\162\157\x64\x75\x63\x74\163", PR__CVR__PMPR))->saemoowcasogykak(IconInterface::eqmcawggoiaogyqa))->aucimgwswmgaocae($this->mismyewsggusymya(3)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::kqaykcwsmauommaw, __("\117\x77\x6e\145\x72\40\116\141\155\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gaayaukqcmygkmsg, __("\117\x77\156\x65\x72\40\x49\x6d\x61\147\145", PR__CVR__PMPR))->euagkaqymgiigyaa())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::iyysyggsoauagagu, __("\117\x77\x6e\145\x72\x20\x42\x61\144\147\145\x73", PR__CVR__PMPR), $this->iiacsiaagsusawuw())->oikgogcweiiaocka())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::cuiomisokkyumoso, __("\101\143\x74\151\x6f\x6e\x20\120\157\x73\x74", PR__CVR__PMPR))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::cwgaumwyaysmkgwe, __("\101\x63\x74\x69\157\156\40\x54\x69\x74\154\x65", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\124\x69\164\154\145", PR__CVR__PMPR), __("\x41\x63\x74\151\x6f\x6e\40\x50\157\163\x74", PR__CVR__PMPR))))->mkksewyosgeumwsa(self::iseogkiymousogom(self::yeoauowmckkwokys, __("\124\x65\141\155\163", PR__CVR__PMPR))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\141\x62\40\x54\151\164\154\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::NAME, __("\x4d\141\156\141\147\145\162\40\116\141\x6d\x65", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::mkousmkiawwousws, __("\x4d\141\x6e\x61\x67\145\162\x20\111\155\x61\x67\x65", PR__CVR__PMPR))->euagkaqymgiigyaa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mgwmuqmguauukqeq, __("\112\x6f\142\x20\124\151\x74\x6c\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qsskmqwcucisywqy, __("\x53\x75\142\x74\x65\x78\x74", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::guaaeawmegqeouuy, __("\124\x65\141\155\x20\x43\x6f\x75\x6e\164", PR__CVR__PMPR), __("\x54\x68\x69\163\40\x76\x61\154\165\145\x20\141\x64\144\x65\x64\40\x74\x6f\40\162\x65\x61\154\x20\166\x61\154\x75\x65\40\x62\x61\x73\145\144\x20\157\156\x20\141\143\143\145\160\x74\145\144\40\141\147\x72\x65\145\155\145\156\x74\x20\162\145\x71\165\x65\163\164\163", PR__CVR__PMPR))->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::miykmmqkcuaakoom, __("\124\145\x61\155\40\x45\170\x70\x65\162\151\145\156\143\x65", PR__CVR__PMPR))->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::aycugmweyouqeiea, __("\x41\x67\162\145\x65\x6d\x65\156\x74", PR__CVR__PMPR))->wkqyoukciomqiyew()->oeewiaacscgyamai(Agreement::class))->mkksewyosgeumwsa(self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->wygoskowywcuyaiq())->gswweykyogmsyawy(__("\x4f\167\x6e\x65\x72\x20\x61\156\x64\x20\x54\x65\141\155\163", PR__CVR__PMPR))->saemoowcasogykak(IconInterface::kukgkqakogugoyuw))->aucimgwswmgaocae($this->mismyewsggusymya(4)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::goemqugwaiiaukec, __("\x41\x63\x74\x69\157\156\40\124\x65\170\x74", PR__CVR__PMPR))->eyygsasuqmommkua(__("\126\x69\x65\167\x20\123\164\x6f\x72\x79", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::eqqscegsgukyuwky, __("\x50\157\x73\164\x73", PR__CVR__PMPR))->smmismmuuccmscya()->oeewiaacscgyamai("\x73\165\143\143\x65\x73\x73\55\x73\164\x6f\162\171")->oikgogcweiiaocka())->gswweykyogmsyawy(__("\123\x75\x63\143\x65\163\x73\40\x53\x74\x6f\x72\x69\x65\163", PR__CVR__PMPR))->saemoowcasogykak(IconInterface::woicayuomuosegio))->aucimgwswmgaocae($this->mismyewsggusymya(5)->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::eimskssquwymsqyu, __("\117\162\x64\x65\x72\40\x62\x79", PR__CVR__PMPR), [self::kumuoysauoagaiiy => __("\x4e\145\x77\x65\163\164", PR__CVR__PMPR)]))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::kmwomuiqseaeigcy, __("\x53\164\141\164\163", PR__CVR__PMPR), $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\164\x61\144\141\x74\141\x5f\x73\x74\x61\164\x5f\147\145\164\x5f\141\154\x6c\137\x69\x74\145\155\x73"), []))->oikgogcweiiaocka())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::yayugsaemuciyscs, __("\101\x63\x74\151\x6f\x6e\40\x50\157\163\164", PR__CVR__PMPR))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::oiigmckuoekemays, __("\101\x63\x74\151\x6f\x6e\x20\124\x69\x74\x6c\x65", PR__CVR__PMPR)))->gswweykyogmsyawy(__("\102\x6c\x6f\147\40\120\157\163\164\163", PR__CVR__PMPR))->saemoowcasogykak(IconInterface::sqomikyigsmkymsk))->aucimgwswmgaocae($this->mismyewsggusymya(6)->gswweykyogmsyawy(__("\x43\x6f\x6e\164\141\x63\164\x20\125\123", PR__CVR__PMPR))->saemoowcasogykak(IconInterface::uawwwqemuukgssge))->saemoowcasogykak(IconInterface::oqiqceesquwkkwae))->saemoowcasogykak(IconInterface::oeusgoaisyyskcqa))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\143\x6f\x6d\x70\x6f\x6e\145\x6e\164\x73", __("\103\x6f\x6d\160\157\156\x65\156\x74\163\40\46\x20\x50\154\x75\147\x69\x6e\163", PR__CVR__PMPR))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\167\157\x6f\143\157\155\x6d\x65\x72\143\x65", __("\127\157\157\143\x6f\155\x6d\145\162\143\x65", PR__CVR__PMPR))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::ecomaekukeyouiay, __("\x43\141\162\164\x20\x49\x6d\x61\147\x65", PR__CVR__PMPR))->eswksowyeqcsokew(self::MEDIUM))->saemoowcasogykak(IconInterface::cqewsiuumgmiwgcq))->saemoowcasogykak(IconInterface::ouqyiwcmkcoymkqk)); parent::ecwgiiuacoaokqkw(); } public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak) { $eqgoocgaqwqcimie = self::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::yeoauowmckkwokys); return parent::iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak); } private function iiacsiaagsusawuw(array $ywmkwiwkosakssii = []) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\164\137\142\141\144\x67\145\x73"), [], $ywmkwiwkosakssii); } private function mismyewsggusymya(int $awcmekyiwwkeyisq) : Tab { $uusmaiomayssaecw = "\163\x65\x63\164\x69\157\156\x5f{$awcmekyiwwkeyisq}"; return self::sgsmqaoowiyocqaa($uusmaiomayssaecw, sprintf(__("\123\145\x63\164\151\x6f\156\x20\x25\x73", PR__CVR__PMPR), $this->msywmyaoqmaegsuy($awcmekyiwwkeyisq)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::agkkyokkmaksskoi . $uusmaiomayssaecw, __("\x44\151\x73\141\142\x6c\145\40\x53\145\x63\x74\x69\157\156", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws($uusmaiomayssaecw . self::icmokuskwoskgace, __("\124\x69\164\x6c\x65\x20\x6f\x66\40\x53\145\x63\x74\x69\x6f\x6e", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg($uusmaiomayssaecw . self::oiuiymiygsoiasug, __("\x44\x65\163\x63\162\151\x70\x74\151\157\x6e\40\x6f\x66\x20\x53\145\x63\164\151\157\x6e", PR__CVR__PMPR))->qsecygiycssgacqs(3)); } private function qoammkgymwwcmumk(int $awcmekyiwwkeyisq) : array { $uusmaiomayssaecw = "\x73\145\x63\x74\151\x6f\x6e\x5f{$awcmekyiwwkeyisq}"; $ksaameoqigiaoigg = []; if (self::eiwcuqigayigimak(self::agkkyokkmaksskoi . $uusmaiomayssaecw, false)) { goto cwikoaeqmmoimmso; } $ksaameoqigiaoigg = [self::qescuiwgsyuikume => self::eiwcuqigayigimak($uusmaiomayssaecw . self::icmokuskwoskgace, ''), self::eqkeooqcsscoggia => self::eiwcuqigayigimak($uusmaiomayssaecw . self::oiuiymiygsoiasug, '')]; cwikoaeqmmoimmso: return $ksaameoqigiaoigg; } private function zosugeiykwsowuuk(bool $qykkaqkwmecqcyai = false) : array { $ikgwqyuyckaewsow = [self::ckuwucygcwsiawms(self::mswoacegomcucaik, __("\x50\x6f\x73\x74", PR__CVR__PMPR))->smmismmuuccmscya()->oeeumggeiyyckkom('', [self::yoayaissyomokiui, self::ogigqueukwysusii]), self::ckuwucygcwsiawms(self::yoayaissyomokiui, __("\124\145\x72\x6d", PR__CVR__PMPR))->yyayequseyasoyks()->oeeumggeiyyckkom('', [self::mswoacegomcucaik, self::ogigqueukwysusii]), self::ymuegqgyuagyucws(self::ogigqueukwysusii, __("\114\x69\x6e\153", PR__CVR__PMPR))->xkgcwkwsqysqamic()->oeeumggeiyyckkom('', [self::mswoacegomcucaik, self::yoayaissyomokiui]), self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\151\164\154\x65", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\124\x69\x74\x6c\145", PR__CVR__PMPR)))]; if (!$qykkaqkwmecqcyai) { goto egaymskkosukqeao; } $ikgwqyuyckaewsow[] = self::uouyygwcgsmygaee(self::eqkeooqcsscoggia, __("\x44\x65\x73\x63\162\151\x70\x74\x69\x6f\156", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\105\170\143\x65\162\160\x74", PR__CVR__PMPR)))->qsecygiycssgacqs(3); $ikgwqyuyckaewsow[] = self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x42\141\x63\153\147\x72\x6f\x75\156\x64\x20\x49\155\141\147\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x46\x65\x61\x74\165\x72\x65\144\x20\111\155\x61\147\x65", PR__CVR__PMPR))); egaymskkosukqeao: return $ikgwqyuyckaewsow; } private function wmsmscymqimmamoi($aiowsaccomcoikus, $ccamueccusigaaio = null) : string { if ($ccamueccusigaaio) { goto kaiesowkgwogqseg; } $ccamueccusigaaio = sprintf("\45\x73\x2f\x25\163", __("\x50\157\x73\x74", PR__CVR__PMPR), __("\x54\x65\162\155", PR__CVR__PMPR)); kaiesowkgwogqseg: return sprintf(__("\114\145\x61\166\x65\40\x65\155\x70\x74\171\x20\151\x66\40\171\x6f\165\x20\x77\141\156\164\x20\163\150\157\167\40\45\163\x20\x25\163\x2e", PR__CVR__PMPR), $ccamueccusigaaio, $aiowsaccomcoikus); } public function iaoqaucmqmweqmae(string $amakmumgguksgmum, bool $qykkaqkwmecqcyai = false) : array { $ksaameoqigiaoigg = []; $wgiowequysowwsky = self::eiwcuqigayigimak($amakmumgguksgmum); if (!($wgiowequysowwsky && is_array($wgiowequysowwsky))) { goto kwyimqumkuuyaiku; } foreach ($wgiowequysowwsky as $igqsaukqcqscimok) { $qsqwqsymmqeoqwcu = []; $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws . self::mswocgcucqoaesaa); $ukwokcuqauuosmoo = ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia); if (isset($igqsaukqcqscimok[self::mswoacegomcucaik])) { goto koiscokkkaimiecq; } if (isset($igqsaukqcqscimok[self::yoayaissyomokiui])) { goto owuuuiekkaeoeacq; } if ($meqocwsecsywiiqs && isset($igqsaukqcqscimok[self::ogigqueukwysusii])) { goto saauykgakaeiyoua; } goto cquecqekuucwoumw; koiscokkkaimiecq: $post = $igqsaukqcqscimok[self::mswoacegomcucaik]; if ($meqocwsecsywiiqs) { goto kgmeiwiakwicgkkk; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post); kgmeiwiakwicgkkk: if (!$qykkaqkwmecqcyai) { goto csieaismmmocyacu; } if ($ukwokcuqauuosmoo) { goto suuskagowwgsouqw; } $ukwokcuqauuosmoo = ManipulatePost::masoymaamekuykso($post); suuskagowwgsouqw: if ($mcqieaigyeeyaksm) { goto omykokikgocoikec; } $mcqieaigyeeyaksm = ManipulatePost::wsiiswmaagmyiaiw($post); omykokikgocoikec: csieaismmmocyacu: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = ManipulatePost::ycqquoiyyuesegsy($post); goto cquecqekuucwoumw; owuuuiekkaeoeacq: $iwewcwusemqaiggk = $igqsaukqcqscimok[self::yoayaissyomokiui]; if ($meqocwsecsywiiqs) { goto aquqkiggamaoegoo; } $meqocwsecsywiiqs = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); aquqkiggamaoegoo: if (!$qykkaqkwmecqcyai) { goto agemwookwseyycqo; } if ($ukwokcuqauuosmoo) { goto mykiyqcqiegkiqys; } $ukwokcuqauuosmoo = DecoratorTerm::meqceykmywmqgoym($iwewcwusemqaiggk); mykiyqcqiegkiqys: agemwookwseyycqo: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk); goto cquecqekuucwoumw; saauykgakaeiyoua: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = $igqsaukqcqscimok[self::ogigqueukwysusii]; cquecqekuucwoumw: if (!$qsqwqsymmqeoqwcu) { goto mqimkwickkgqqeoi; } $qsqwqsymmqeoqwcu[self::qescuiwgsyuikume] = $meqocwsecsywiiqs; if (!$qykkaqkwmecqcyai) { goto qwemkcoaseywkuuc; } $qsqwqsymmqeoqwcu[self::mkousmkiawwousws] = $mcqieaigyeeyaksm; $qsqwqsymmqeoqwcu[self::eqkeooqcsscoggia] = $ukwokcuqauuosmoo; qwemkcoaseywkuuc: $ksaameoqigiaoigg[] = $qsqwqsymmqeoqwcu; mqimkwickkgqqeoi: cwswueuqoamqasya: } kicwiowcogmauwiy: kwyimqumkuuyaiku: return $ksaameoqigiaoigg; } public function gyiawqogoyoymcis() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(1); if (!$ksaameoqigiaoigg) { goto gkqiqaqecmoogmaa; } $ksaameoqigiaoigg["\x73\x6c\151\x64\x65\x72"] = $this->iaoqaucmqmweqmae(self::wqeqaueukmiwkwik, true); $ksaameoqigiaoigg["\x74\x6f\x70\137\x6c\x69\x73\164"] = $this->iaoqaucmqmweqmae(self::gcgaogswqsukoeig); $ksaameoqigiaoigg["\x62\157\164\x74\157\x6d\137\x6c\151\x73\164"] = $this->iaoqaucmqmweqmae(self::sqemmgwmwwawgecq, true); $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::qggmmsccekaeawoc, __("\x52\x65\141\x64\40\115\x6f\162\145", PR__CVR__PMPR)); gkqiqaqecmoogmaa: return $ksaameoqigiaoigg; } public function ageqswwkkqywckco() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(2); if (!$ksaameoqigiaoigg) { goto mceucsaeouuwyumm; } $ksaameoqigiaoigg["\160\162\x6f\x64\x75\x63\164\163"] = $this->iaoqaucmqmweqmae(self::iiokomyaiiwokwgu, true); $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::mokwceeesgoiqykk, __("\102\165\171\x20\116\x6f\x77\41", PR__CVR__PMPR)); mceucsaeouuwyumm: return $ksaameoqigiaoigg; } public function agcggaoesgiameyi() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(3); if (!$ksaameoqigiaoigg) { goto syusgosewwkoagoq; } if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto egesuwkqkmaigaoe; } $aiamqeawckcsuaou = self::eiwcuqigayigimak(self::cuiomisokkyumoso); if (!($memkywmosqicmcqs = self::eiwcuqigayigimak(self::iyysyggsoauagagu))) { goto ceiuqsiqgiuiekem; } $memkywmosqicmcqs = $this->iiacsiaagsusawuw([self::ackcaikowcokggsc => $memkywmosqicmcqs, self::aisguagukaewucii => self::ckmqoekmugkggeym]); ceiuqsiqgiuiekem: $ksaameoqigiaoigg[self::iockmgiyoygcswog] = ["\x62\141\144\147\145\x73" => $memkywmosqicmcqs, self::NAME => self::eiwcuqigayigimak(self::kqaykcwsmauommaw), self::mkousmkiawwousws => $eygsasmqycagyayw->uakscggyguwqmkoe(self::eiwcuqigayigimak(self::gaayaukqcmygkmsg)), self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou), self::oeouaqyskusqoasi => self::eiwcuqigayigimak(self::cwgaumwyaysmkgwe, ManipulatePost::qcgakseyaikigqco($aiamqeawckcsuaou))]; if (!($iaseaecuamsukckm = self::eiwcuqigayigimak(self::yeoauowmckkwokys, []))) { goto ugogoekeckgcmuaw; } foreach ($iaseaecuamsukckm as $momcykaoccoymeig => $ksuesqoiqqiiyqsq) { if (!($mcqieaigyeeyaksm = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::mkousmkiawwousws))) { goto isewysikysqewkis; } $ksuesqoiqqiiyqsq[self::mkousmkiawwousws] = $eygsasmqycagyayw->uakscggyguwqmkoe($mcqieaigyeeyaksm); isewysikysqewkis: if (!($wmmioqqsqesggsei = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::miykmmqkcuaakoom))) { goto wiwoiyoakywqyaiy; } $ksuesqoiqqiiyqsq[self::miykmmqkcuaakoom] = sprintf(__("\45\x73\x20\x79\x65\141\162\163\40\x6f\146\40\x74\145\x61\x6d\x20\145\170\x70\145\x72\151\145\156\x63\x65", PR__CVR__PMPR), ManipulateHTML::gmqyuaqwgiayskei($this->msywmyaoqmaegsuy($wmmioqqsqesggsei), ["\143\x6c\141\163\163" => "\146\x6f\x6e\x74\x2d\x77\145\151\x67\x68\164\x2d\x62\x6f\154\144"])); wiwoiyoakywqyaiy: $bauwgewmoqokkmkm = 0; if (!($xssuewsokckmigqk = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::aycugmweyouqeiea))) { goto uscokkmquayiukag; } if (!$this->omseesogaocascyo("\123\x61\x6c\x61\x72\171")) { goto sqwuqegeiisoiiuq; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($kueeocmceokoouqa && $mssuumukiiaqmcka)) { goto eouwacqiommmeaqc; } $gikyaoiioawywyeu = $xssuewsokckmigqk; $xssuewsokckmigqk = $mssuumukiiaqmcka->akkkoiiymmamsauc($xssuewsokckmigqk); $iueymcwwscwqkiyq = $mssuumukiiaqmcka->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $xssuewsokckmigqk); $bauwgewmoqokkmkm = $kueeocmceokoouqa->asskucacysemeoiu([$kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => $gikyaoiioawywyeu]); if (!($mssuumukiiaqmcka::aqugcqsyeisayuog !== $iueymcwwscwqkiyq)) { goto igmmqwyawcuuckkq; } $ksuesqoiqqiiyqsq[self::aycugmweyouqeiea] = ["\x69\x73\x5f\157\160\145\156" => self::miswkosqicsksgok === $iueymcwwscwqkiyq, self::qescuiwgsyuikume => __("\x44\x6f\40\171\157\165\40\167\141\x6e\164\x20\164\x6f\40\x77\157\162\153\x20\167\x69\164\x68\x20\x74\x68\x69\x73\x20\x74\145\x61\x6d\x3f", PR__CVR__PMPR), self::ucoiewcoucauqwko => __("\103\x6f\x6f\x70\x65\162\x61\164\x69\x6f\x6e\40\124\145\x72\x6d\163", PR__CVR__PMPR), self::ckmqoekmugkggeym => $xssuewsokckmigqk, self::sauwwsocmukoaayu => ManipulateServer::oiucukewkckkwiqc("\x2f\x73\x61\154\x61\162\x79\x2f\141\160\160\x6c\171\x2f{$gikyaoiioawywyeu}", self::ismwwqmwgmqqocke), "\163\165\142\x6d\x69\164\137\x72\145\161\x75\x65\x73\164" => __("\123\165\x62\155\151\164\40\122\145\161\x75\x65\x73\164\40\146\x6f\x72\40\x43\157\x6f\160\145\162\x61\164\x69\157\156", PR__CVR__PMPR)]; igmmqwyawcuuckkq: eouwacqiommmeaqc: sqwuqegeiisoiiuq: uscokkmquayiukag: if (!($ymmgsoswiamqoiae = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::guaaeawmegqeouuy))) { goto ykqsuiyyosyeyscc; } $ksuesqoiqqiiyqsq[self::guaaeawmegqeouuy] = sprintf(__("\x25\163\40\x6d\x65\155\x62\x65\162\163\x20\x74\145\x61\x6d", PR__CVR__PMPR), ManipulateHTML::gmqyuaqwgiayskei($this->msywmyaoqmaegsuy($ymmgsoswiamqoiae + $bauwgewmoqokkmkm), ["\x63\x6c\141\x73\x73" => "\x66\157\156\164\55\167\x65\x69\147\x68\164\55\142\x6f\154\144"])); ykqsuiyyosyeyscc: $iaseaecuamsukckm[$momcykaoccoymeig] = $ksuesqoiqqiiyqsq; ugykmcouiwiscoqu: } gsymkkskwsgggoic: $ksaameoqigiaoigg["\x74\x65\x61\155\163"] = $iaseaecuamsukckm; ugogoekeckgcmuaw: egesuwkqkmaigaoe: syusgosewwkoagoq: return $ksaameoqigiaoigg; } public function usgiygmmoewsoqic($ywmkwiwkosakssii = []) : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(4); if (!$ksaameoqigiaoigg) { goto kyiwsiakwgiwouyi; } if (!($wyoiwuqokyeeuguk = self::eiwcuqigayigimak(self::eqqscegsgukyuwky, []))) { goto owgsameoayaogsma; } foreach ($wyoiwuqokyeeuguk as $momcykaoccoymeig => $post) { $yyimiwcuegayoskq = ManipulatePost::auosyisuakguyimw($post, $ywmkwiwkosakssii); $cmwygeyygwqaemaq = ManipulateHTML::iaaacsuskiakkwui(__("\x53\165\143\143\x65\x73\x73\40\x73\x74\157\x72\x79\x20\157\146", PR__CVR__PMPR)); $cmwygeyygwqaemaq .= ManipulateHTML::iaaacsuskiakkwui(sprintf(__("\x25\163\40\x75\163\151\156\147", PR__CVR__PMPR), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($yyimiwcuegayoskq, self::NAME)))); $eoycqimaqkcquymo = ManipulateHTML::ciuuiyckmsygceis(ManipulatePost::qcgakseyaikigqco(ManipulateArray::get($yyimiwcuegayoskq, "\x6f\x72\144\145\x72\145\144\x5f\160\x72\x6f\144\x75\x63\x74"))); if ($mcgkyouewgkokmmm = ManipulateArray::get($yyimiwcuegayoskq, "\x62\x75\163\x69\156\145\163\x73\137\x6e\141\x6d\145")) { goto icumkkykaoqycqqu; } $cmwygeyygwqaemaq .= $eoycqimaqkcquymo; goto oeamoqweiueaueay; icumkkykaoqycqqu: $cmwygeyygwqaemaq .= ManipulateHTML::iaaacsuskiakkwui(sprintf(__("\45\163\x20\151\x6e", PR__CVR__PMPR), $eoycqimaqkcquymo)); $cmwygeyygwqaemaq .= ManipulateHTML::ciuuiyckmsygceis($mcgkyouewgkokmmm, ["\143\154\141\x73\163" => "\x6d\142\55\63"]); oeamoqweiueaueay: $yyimiwcuegayoskq[self::TEXT] = $cmwygeyygwqaemaq; $wyoiwuqokyeeuguk[$momcykaoccoymeig] = $yyimiwcuegayoskq; eweaaismksecwagy: } mcqucouuiuoagqwc: $ksaameoqigiaoigg["\160\157\x73\164\x73"] = $wyoiwuqokyeeuguk; $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::goemqugwaiiaukec, __("\126\x69\x65\x77\40\123\x74\157\162\171", PR__CVR__PMPR)); owgsameoayaogsma: kyiwsiakwgiwouyi: return $ksaameoqigiaoigg; } public function cykwscocqwykiocm() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(5); if (!$ksaameoqigiaoigg) { goto esagiiawomyacuiw; } $umwqusowiqmyseom = self::eiwcuqigayigimak(self::eimskssquwymsqyu, self::kumuoysauoagaiiy); $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas(self::mswoacegomcucaik, [self::gqiasegggowomgie => $umwqusowiqmyseom, self::goqgcigmiawyauai => 7]); if (!$wyoiwuqokyeeuguk) { goto aoaqwygkaagiuuws; } $ksaameoqigiaoigg["\x70\x6f\x73\164\163"] = $wyoiwuqokyeeuguk; if (!($gaciecykoqycioyu = self::eiwcuqigayigimak(self::kmwomuiqseaeigcy, []))) { goto awgmegueeqeyqamu; } $ksaameoqigiaoigg["\163\x74\141\164\x73"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\145\x74\141\x64\141\164\141\137\x73\164\x61\164\x5f\147\x65\164\137\x68\164\x6d\x6c"), '', [self::ackcaikowcokggsc => $gaciecykoqycioyu, self::uouymeyqasaeckso => self::mswoacegomcucaik]); awgmegueeqeyqamu: if (!($aiamqeawckcsuaou = self::eiwcuqigayigimak(self::yayugsaemuciyscs))) { goto gqimwsyemoewagcy; } $meqocwsecsywiiqs = self::eiwcuqigayigimak(self::oiigmckuoekemays); $ksaameoqigiaoigg[self::uqgcmmosieyimiku] = [self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou), self::qescuiwgsyuikume => $meqocwsecsywiiqs ?: ManipulatePost::qcgakseyaikigqco()]; gqimwsyemoewagcy: aoaqwygkaagiuuws: esagiiawomyacuiw: return $ksaameoqigiaoigg; } public function isyicyuwucckmckg() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(6); if (!$ksaameoqigiaoigg) { goto maaisuqwkymeguys; } $ksaameoqigiaoigg["\151\156\146\157\x72\155\x61\x74\x69\x6f\156"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\137\x63\x6f\156\x74\x61\143\x74\x5f\x69\156\x66\x6f\162\x6d\141\x74\x69\x6f\156"), [], [self::aisguagukaewucii => self::ckmqoekmugkggeym]); maaisuqwkymeguys: return $ksaameoqigiaoigg; } }
