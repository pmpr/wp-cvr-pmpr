<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f8694bf67             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Interfaces\Constants; class Header extends Container { const ceoqekoayyauoiui = 'https://cdnjs.cloudflare.com/'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('render_header', [$this, 'render'], 1)->qcsmikeggeemccuu('widgets_init', [$this, 'mysamweggamekgow']); $this->waqewsckuayqguos('before_header', [$this, 'ikgaqekwqoiiaqso'])->waqewsckuayqguos('pmpr_header_left_buttons', [$this, 'gwmqeyaicaccsqgu'])->waqewsckuayqguos('pmpr_header_left_dropdowns', [$this, 'cqyskawgwqgiseyk']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('amp_styles', [$this, 'mkcymsuwmakmmksa'])->aqaqisyssqeomwom('breadcrumb_generate_args', [$this, 'loyaoukiqyocgumm'])->aqaqisyssqeomwom('breadcrumb_can_render', [$this, 'mguaggoqueykukka'], 99); } public function render() { $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($this->ocksiywmkyaqseou('header_template_filename', 'header')); echo $nsmgceoqaqogqmuw; } public function ikgaqekwqoiiaqso() { if ($this->weysguygiseoukqw(Setting::yyceeeegckkkiuia)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiwcguiecocoyqqi = []; $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::yoeekgeigssyasic); if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aiwcguiecocoyqqi[] = [Constants::ogigqueukwysusii => $seumokooiykcomco->ycqquoiyyuesegsy($gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ssgocaqsoossmmmq), true), Constants::TEXT => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::kcyioiskeyiemoga), Constants::igssuqwuicwawgam => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uyikcieaeauoseys)]; } } $this->iuygowkemiiwqmiw('promotion', [Constants::mcaucuyeeiwsmmuy => [Constants::TEXT => $this->weysguygiseoukqw(Setting::kuewmoewsyceysks), Constants::qgqyauaqwqmqseim => $this->weysguygiseoukqw(Setting::qgwomqwoyuoqqyse), Constants::quacsuksmqmguawa => $aiwcguiecocoyqqi, Constants::akmgqeyqcecqukia => $this->weysguygiseoukqw(Setting::agwkysgwegsoescw), Constants::umiomsmcqkceuyae => $this->weysguygiseoukqw(Setting::smmqmquwgwewguau)], Constants::skogicecygyyskkq => [Constants::TEXT => $this->weysguygiseoukqw(Setting::ycuimgkgiqgymoie), Constants::ogigqueukwysusii => $seumokooiykcomco->ycqquoiyyuesegsy($this->weysguygiseoukqw(Setting::tseyqwigsocwogoe), true), Constants::qgqyauaqwqmqseim => $this->weysguygiseoukqw(Setting::eawmqwcaqeyimomo), Constants::akmgqeyqcecqukia => $this->weysguygiseoukqw(Setting::sowgkgiieawmuuao), Constants::umiomsmcqkceuyae => $this->weysguygiseoukqw(Setting::yqeckiggsayimkkw)]], [Constants::qaacaqioeyiuakeu => true]); } } public function gwmqeyaicaccsqgu() { $nsmgceoqaqogqmuw = []; $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $cisgaeugskeomuee = [Customizer::eaymwcsywymcueus => [Constants::yuguikokwoymmqem => false, Constants::TEXT => Customizer::emasiqiiokegmgus, Constants::qgqyauaqwqmqseim => Customizer::giesgyymgqsuoqwm, Constants::auqoykcmsiauccao => $ekymkycgewkiouqe->geoemsmuouqcqmei()], Customizer::kakmqeamywsckeso => [Constants::yuguikokwoymmqem => true, Constants::TEXT => Customizer::soekqoaqayyqqwgo, Constants::qgqyauaqwqmqseim => Customizer::ckamasqwquyyiksk, Constants::auqoykcmsiauccao => $ekymkycgewkiouqe->gauymgyqasaqyqam()]]; foreach ($cisgaeugskeomuee as $uusmaiomayssaecw => $ewuukoycimkekouc) { if ($this->wkiaeewoqmsougim($uusmaiomayssaecw)) { if ($wkaqekwwgqsqwcoi = $this->wkiaeewoqmsougim($ewuukoycimkekouc[Constants::qgqyauaqwqmqseim])) { $uuisoqqiumgmmkeg = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => 'icon-2x icon-dark ml-2']); $uuisoqqiumgmmkeg = $this->ocksiywmkyaqseou("header_left_menu_icon_{$uusmaiomayssaecw}", $uuisoqqiumgmmkeg, $ewuukoycimkekouc); $wwgucssaecqekuek = ['class' => 'd-flex ml-3']; $kiywciwiceaccago = $gkyciwoiiisgywcs->get($ewuukoycimkekouc, Constants::yuguikokwoymmqem); if (!$kiywciwiceaccago || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ['aria-haspopup' => 'true', 'aria-expanded' => 'true', 'data-toggle' => 'dropdown', 'data-target' => "#{$uusmaiomayssaecw}_dropdown"]); } $giksqiwqwoimkkwy = ''; if ($cmwygeyygwqaemaq = $this->wkiaeewoqmsougim($ewuukoycimkekouc[Constants::TEXT])) { $giksqiwqwoimkkwy = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ['class' => 'sr-only']); } $osicmmkccsgkiqqo = $uuisoqqiumgmmkeg . $giksqiwqwoimkkwy; $osicmmkccsgkiqqo = $swqimwqeweekeusq->yuawgssgauywkiia($osicmmkccsgkiqqo, $ewuukoycimkekouc[Constants::auqoykcmsiauccao], $wwgucssaecqekuek, $cmwygeyygwqaemaq ?: __('Menu Icon', PR__CVR__PMPR)); $nsmgceoqaqogqmuw[] = $swqimwqeweekeusq->iaaacsuskiakkwui($osicmmkccsgkiqqo, ['class' => 'position-relative my-auto']); } } } } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('contact')) { if ($woigsqkskmwcgimi = $this->wkiaeewoqmsougim(Customizer::wsksicykoaaacquk)) { if ($yyimiwcuegayoskq = $this->ocksiywmkyaqseou('get_contact_information_by_key', [], $woigsqkskmwcgimi)) { $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, Constants::qgqyauaqwqmqseim); $auoeyussiyykosqg = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, Constants::ciyoccqkiamemcmm); $nsmgceoqaqogqmuw[] = $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => 'icon-2x icon-dark ml-2', 'rel' => 'nofollow noopener noreferrer']), "https://api.whatsapp.com/send?phone={$auoeyussiyykosqg}", ['class' => 'ml-3 my-auto'], __('Whatsapp Account', PR__CVR__PMPR)); } } } if ($nsmgceoqaqogqmuw) { $swqimwqeweekeusq->sykissckqqccoiqs('div', ['class' => 'header-action-right d-flex justify-content-around ml-auto'], $nsmgceoqaqogqmuw); } } public function cqyskawgwqgiseyk() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { $cisgaeugskeomuee = [Customizer::eaymwcsywymcueus, Customizer::kakmqeamywsckeso]; foreach ($cisgaeugskeomuee as $ewuukoycimkekouc) { if ($this->wkiaeewoqmsougim($ewuukoycimkekouc)) { echo $this->ocksiywmkyaqseou("header_left_menu_html_{$ewuukoycimkekouc}", ''); } } } } public function mkcymsuwmakmmksa($icyaoosaykeskiuu = '') : string { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cukiusasccucgwqc([Constants::mswoacegomcucaik, Constants::oguseymmyyoyaako])) { $icyaoosaykeskiuu .= $meakksicouekcgoe->souwykwwmyygqyqi($this, 'amp-single.css'); } else { $icyaoosaykeskiuu .= $meakksicouekcgoe->souwykwwmyygqyqi($this, 'amp.css'); } return $icyaoosaykeskiuu; } public function skeewyqiekiswawa() { if ($this->gmiywgyyecweiegc()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $nsmgceoqaqogqmuw = ''; for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < 15; $ciyackuwsqkoqese++) { $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->iaaacsuskiakkwui('', ['class' => 'thing']); } $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($nsmgceoqaqogqmuw, ['class' => 'page-preloader']); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($nsmgceoqaqogqmuw, ['class' => 'page-preloader-cover show']); echo $nsmgceoqaqogqmuw; } } public function gmiywgyyecweiegc() : bool { return $this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu(); } public function loyaoukiqyocgumm($ywmkwiwkosakssii = []) : array { return array_merge($ywmkwiwkosakssii, ['wrap_attrs' => ['class' => 'breadcrumb text-nowrap d-table px-0 m-0'], 'link_attrs' => ['class' => 'card-link'], 'item_attrs' => ['class' => 'breadcrumb-item d-table-cell'], 'divider_attrs' => ['class' => 'arrow-icon arrow-sm arrow-left ml-1 mr-2 my-auto border-gray-600'], 'active_item_attrs' => ['class' => 'breadcrumb-item active d-table-cell']]); } public function mysamweggamekgow() { global $wp_widget_factory; $this->kuieicsuscgmwigg('wp_head', [$wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style']); } public function mguaggoqueykukka($gkuksucqwuewkwws) : bool { return $gkuksucqwuewkwws && !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw(); } }
