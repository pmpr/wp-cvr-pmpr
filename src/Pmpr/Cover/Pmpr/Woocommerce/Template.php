<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f8694bf67             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ['dashboard' => IconInterface::ygcmqmkcsymeucoq, 'orders' => IconInterface::goqumcwkcuygcaui, 'downloads' => IconInterface::msyqysqykouywsua, 'edit-address' => IconInterface::wykikkeyisimsmyy, 'payment-methods' => IconInterface::acciucugwcskkwmi, 'edit-account' => IconInterface::wqqgoiyyqicsycmm, 'customer-logout' => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy('woocommerce_loop_product_link', $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(), $product); $this->meqqwuauskckweee(['class' => 'text-decoration-none text-mute'], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::oguseymmyyoyaako => '', 'prices' => [], 'td_class' => '', 'tr_class' => '', 'th_class' => 'text-gray-800 py-2', 'has_title' => true, 'table_class' => 'mb-5']); $product = $ywmkwiwkosakssii[Constants::oguseymmyyoyaako]; $uiiuuaeiyecmiouc = $ywmkwiwkosakssii['prices']; if (!$product) { global $product; } else { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); } if ($product instanceof WC_Product) { $aumscagymwyyicag = $product->get_price_html(); if ($aumscagymwyyicag) { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aumscagymwyyicag = $smuykqsageuocuos->igmaewykumgwoaoy($aumscagymwyyicag, ['.woocommerce-Price-currencySymbol' => ['class' => 'font-13']]); $qecuekqmeaiykeek = 0; if ($product instanceof WC_Product_Variation) { $qecuekqmeaiykeek = count($product->get_variation_attributes()); } $eukiyocmgugiioei = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, 'del'); $ywoyoawciekocqao = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, 'ins'); if ($eukiyocmgugiioei) { $uiiuuaeiyecmiouc['regular_price'] = $eukiyocmgugiioei; if ($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao) { $uiiuuaeiyecmiouc['discount'] = $this->yqauycsoymimeise($product); } $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc['discount_expire'] = $this->sscegwueamckwmcy('woocommerce_product_discount_expire_html', '', ['product' => $product]); } else { $eeeyyekmaesysegc = $aumscagymwyyicag; } $uiiuuaeiyecmiouc['sale_price'] = $eeeyyekmaesysegc; } } if (is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc) { $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case 'regular_price': $ugugimquukqwogge->gswweykyogmsyawy(__('Regular Price', PR__CVR__PMPR))->jyumyyugiwwiqomk(10); break; case 'sale_price': $ugugimquukqwogge->gswweykyogmsyawy(__('Sale Price', PR__CVR__PMPR))->jyumyyugiwwiqomk(25); break; case 'discount_expire': $ugugimquukqwogge->gswweykyogmsyawy(__('Discount Expiration', PR__CVR__PMPR))->jyumyyugiwwiqomk(20); break; case 'discount': $ugugimquukqwogge->gswweykyogmsyawy(__('Discount', PR__CVR__PMPR))->jyumyyugiwwiqomk(15); break; } if ($aumscagymwyyicag) { $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; } } $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::uwceyikaaaqgkkee => $this->eskggqsasgsiommy('price')]); $this->ewcsyqaaigkicgse('metadata_render', $ywmkwiwkosakssii); } } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { woocommerce_template_single_add_to_cart(); } else { woocommerce_template_loop_add_to_cart(); } } public function wigckqooeccseiyu() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !($cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if ($product instanceof WC_Product) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), Constants::cmckeoksigiaqykc); if ($iwewcwusemqaiggk instanceof WP_Term) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ['class' => 'product-category hover-primary font-16']); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(__('In Category: %s', PR__CVR__PMPR), $nsmgceoqaqogqmuw), ['class' => 'text-gray-600']); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ['class' => 'icon-sm mr-2 my-auto']); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ['class' => 'd-flex']); if ($koaqeegoeiaiccse) { echo $nsmgceoqaqogqmuw; } } } return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->eccmmwqkaocgogms($product); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($xgwukwqqaseqagay . '%', ['class' => 'price-discount-amount text-danger']); $wewsywccwwomowkw = $this->ocksiywmkyaqseou('price_discount', $wewsywccwwomowkw, $xgwukwqqaseqagay); } else { $wewsywccwwomowkw = $xgwukwqqaseqagay; } return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; if ($product) { $wewsywccwwomowkw = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->eccmmwqkaocgogms($product, ''); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $wewsywccwwomowkw = $this->ocksiywmkyaqseou('price_discount', $wewsywccwwomowkw, $product); } } return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (isset($aiowsaccomcoikus['required']) && $aiowsaccomcoikus['required']) { $aiowsaccomcoikus['class'] = ['is-invalid']; } $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; } unset($ikgwqyuyckaewsow['billing_country']); unset($ikgwqyuyckaewsow['billing_address_2']); $ikgwqyuyckaewsow['billing_state']['priority'] = 60; $ikgwqyuyckaewsow['billing_city']['priority'] = 70; $ikgwqyuyckaewsow['billing_address_1']['priority'] = 80; $ikgwqyuyckaewsow['billing_email']['priority'] = 98; $ikgwqyuyckaewsow['billing_postcode']['label'] = __('Postcode', PR__CVR__PMPR); $ikgwqyuyckaewsow['billing_email']['label'] = __('Email', PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("btn btn-block btn-primary {$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ['ul.woocommerce-shipping-methods' => ['class' => 'list-group list-group-flush bg-transparent'], 'ul.woocommerce-shipping-methods label' => ['class' => 'm-0'], 'ul.woocommerce-shipping-methods li' => ['class' => 'list-group-item py-1 px-0']]; } public function umooigokeuauqqsw() : array { return ['dl.variation' => ['class' => 'd-flex m-auto'], 'dl.variation p' => ['class' => 'mb-0'], 'dl.variation dd' => ['class' => 'mb-0'], 'dl.variation dt' => ['class' => 'w-lg-20']]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $smuykqsageuocuos->ogaeogwycyqqckeu($aqykuigiuwmmcieu, ['.form-row' => ['class' => 'form-row']]); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, ".woocommerce-{$eaoumsseceiowgsk}-fields__field-wrapper > p", ['class' => 'row']); $aqykuigiuwmmcieu = $smuykqsageuocuos->suygukqgsuwaaumg($aqykuigiuwmmcieu, ['abbr']); $ggauoeuaesiymgee = ['.is-invalid input' => ['class' => 'required-input'], '.is-invalid select' => ['class' => 'required-input'], 'select, input' => ['class' => 'form-control'], '#billing_first_name_field' => ['class' => 'col-md-6'], '#billing_last_name_field' => ['class' => 'col-md-6'], '#billing_phone_field' => ['class' => 'col-md-6'], '#billing_mobile_field' => ['class' => 'col-md-6'], '#billing_company_field' => ['class' => 'col-md-6'], '#billing_city_field' => ['class' => 'col-md-6'], '#billing_state_field' => ['class' => 'col-md-6'], '#billing_email_field' => ['class' => 'col-md-6'], '#billing_postcode_field' => ['class' => 'col-md-6'], '#billing_postcode_field input' => ['class' => 'direction-ltr'], '#customer_details input' => ['class' => 'form-control'], ".woocommerce-{$eaoumsseceiowgsk}-fields__field-wrapper p" => ['class' => 'form-group col-12'], 'p' => ['class' => 'mb-2']]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
