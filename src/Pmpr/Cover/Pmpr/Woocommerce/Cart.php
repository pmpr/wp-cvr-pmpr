<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f8694bf67             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WC_Product; class Cart extends Template { public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('woocommerce_cart_is_empty', 'wc_empty_cart_message', 10)->kuieicsuscgmwigg('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display')->kuieicsuscgmwigg('woocommerce_widget_shopping_cart_total', 'woocommerce_widget_shopping_cart_subtotal', 10)->kuieicsuscgmwigg('woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10)->kuieicsuscgmwigg('woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_proceed_to_checkout', 20); parent::kgewmaycsoykyaso(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_remove_item_link', [$this, 'yssseayikkseeqcu'])->qcsmikeggeemccuu('woocommerce_widget_shopping_cart_buttons_html', [$this, 'auqcyyeswqwaamuw'], 20); $this->waqewsckuayqguos('is_quantity_enable', [$this, 'qsqusqagceccegwc'], 20); parent::wigskegsqequoeks(); } public function qsqusqagceccegwc() : bool { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wmqwkwyuqwksiiqk(); } public function auqcyyeswqwaamuw() { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('Checkout', PR__CVR__PMPR), $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aoqkwiysueqqwigk(), ['class' => 'button checkout wc-forward btn px-5 my-auto btn-danger']); } public function yssseayikkseeqcu($ywmkwiwkosakssii = []) { echo $this->sqwquysqoqayciig($ywmkwiwkosakssii); } public function sqwquysqoqayciig($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => '', Constants::qgqyauaqwqmqseim => IconInterface::oqqegqwcamgyuemw, Constants::qescuiwgsyuikume => '', Constants::oguseymmyyoyaako => '', 'class' => 'btn btn-danger btn-block', 'icon_size' => '1x', 'icon_color' => 'white']); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = ''; $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ascagqcquwgmygkm); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qescuiwgsyuikume); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'class'); $product = $usmsssmiougymckk->get($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::oguseymmyyoyaako)); if ($wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => "icon-{$ywmkwiwkosakssii['icon_color']} icon-{$ywmkwiwkosakssii['icon_size']}"], ['markup' => true]); if ($meqocwsecsywiiqs) { $egkyssmuqcwaciya .= ' btn-iconable py-3 lh-xs'; $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, ['class' => 'btn-icon py-3']); } } if ($product instanceof WC_Product) { $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs, wc_get_cart_remove_url($uusmaiomayssaecw), ['class' => "remove {$egkyssmuqcwaciya}", 'aria-label' => __('Remove this item', 'woocommerce'), 'data-product_id' => $usmsssmiougymckk->iooowgsqoyqseyuu($product), 'data-product_sku' => $product->get_sku(), 'data-cart_item_key' => $uusmaiomayssaecw]); $iwywmkygwewiamwm = $this->sscegwueamckwmcy('woocommerce_cart_item_remove_link', $iwywmkygwewiamwm, $uusmaiomayssaecw); } return $iwywmkygwewiamwm; } public function iscucyyasyaggoii($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => '', Constants::qgqyauaqwqmqseim => IconInterface::oqqegqwcamgyuemw, Constants::qescuiwgsyuikume => '', Constants::oguseymmyyoyaako => '', 'icon_size' => '1x', 'icon_color' => 'white', 'remove_class' => '']); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aegqqyquausewoqe = ''; $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ascagqcquwgmygkm); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qescuiwgsyuikume); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'class'); $product = $usmsssmiougymckk->get($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::oguseymmyyoyaako)); $mykogkuaqwmycgog = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'remove_class'); if ($wkaqekwwgqsqwcoi) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => "icon-{$ywmkwiwkosakssii['icon_color']} icon-{$ywmkwiwkosakssii['icon_size']}"], ['markup' => true]); if ($meqocwsecsywiiqs) { $egkyssmuqcwaciya .= ' btn-iconable py-3 lh-xs'; $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, ['class' => 'btn-icon py-3']); } } if ($product instanceof WC_Product) { $aokagokqyuysuksm = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $aegqqyquausewoqe = $this->iuygowkemiiwqmiw('remove', ['icon' => $wkaqekwwgqsqwcoi, 'class' => $egkyssmuqcwaciya, 'title' => __('Remove Product', PR__CVR__PMPR), 'product' => $aokagokqyuysuksm, 'content' => __('Do you want to delete this product?', PR__CVR__PMPR), 'close_text' => __('Cancel', PR__CVR__PMPR), 'button_title' => $meqocwsecsywiiqs, 'remove_button_title' => __('Remove', PR__CVR__PMPR), 'remove_button_attrs' => ['href' => wc_get_cart_remove_url($uusmaiomayssaecw), 'class' => "remove btn btn-danger px-5 {$mykogkuaqwmycgog}", 'aria-label' => __('Remove this item', PR__CVR__PMPR), 'data-product_id' => $aokagokqyuysuksm, 'data-product_sku' => $product->get_sku(), 'data-cart_item_key' => $uusmaiomayssaecw]]); $aegqqyquausewoqe = $this->sscegwueamckwmcy('woocommerce_cart_item_remove_link', $aegqqyquausewoqe, $uusmaiomayssaecw); } return $aegqqyquausewoqe; } public function ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea = [], $ugugagoguiycqeys = []) : array { switch ($ymqmyyeuycgmigyo) { case self::wsqawsekowmycaig: if ($this->wigckqooeccseiyu()) { $ugugagoguiycqeys = ['.woocommerce-mini-cart__empty-message' => ['class' => 'm-0 py-2 text-center'], '.woocommerce-mini-cart__buttons' => ['class' => 'mb-0'], '.button.wc-forward:not(.checkout)' => ['class' => 'btn btn-primary btn-block'], 'ul' => ['class' => 'list-group list-group-flush dropdown-list max-h-20'], 'li' => ['class' => 'list-group-item px-0 py-2 position-relative'], '.remove_from_cart_button' => ['class' => 'float-left top-auto']]; } break; } return parent::ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea, $ugugagoguiycqeys); } }
