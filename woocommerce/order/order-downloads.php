<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec51b10e4f             |
    |_______________________________________|
*/
 if (defined("\101\x42\123\120\x41\x54\x48")) { goto kicwiowcogmauwiy; } exit; kicwiowcogmauwiy: ?>
<section class="woocommerce-order-downloads mb-6">
    <div class="card border-gray-300">
        <div class="card-body table-responsive">
            <?php  if (!isset($show_title)) { goto cwswueuqoamqasya; } ?>
                <h2 class="woocommerce-order-downloads__title h4"><?php  esc_html_e("\x44\x6f\x77\x6e\154\157\141\x64\163", PR__THM__PMPR); ?></h2>
            <?php  cwswueuqoamqasya: ?>
        
            <table class="woocommerce-table woocommerce-table--order-downloads shop_table shop_table_responsive order_details table">
                <thead>
                    <tr>
                        <?php  foreach (wc_get_account_downloads_columns() as $column_id => $column_name) { ?>
                        <th class="<?php  echo esc_attr($column_id); ?>"><span class="nobr"><?php  echo esc_html($column_name); ?></span></th>
                        <?php  suuskagowwgsouqw: } kgmeiwiakwicgkkk: ?>
                    </tr>
                </thead>
        
                <?php  foreach ($casweeiuuwgqsykq as $acsweksygkmmgggk) { ?>
                    <tr>
                        <?php  foreach (wc_get_account_downloads_columns() as $column_id => $column_name) { ?>
                            <td class="<?php  echo esc_attr($column_id); ?>" data-title="<?php  echo esc_attr($column_name); ?>">
                                <?php  if (has_action("\167\157\x6f\x63\x6f\155\155\145\x72\143\x65\137\141\x63\x63\157\x75\x6e\164\137\144\x6f\167\156\154\157\x61\x64\163\x5f\143\157\x6c\x75\155\156\x5f" . $column_id)) { goto mqimkwickkgqqeoi; } switch ($column_id) { case "\144\157\167\156\154\x6f\x61\144\x2d\160\x72\x6f\x64\x75\x63\x74": if ($acsweksygkmmgggk["\160\x72\x6f\144\165\143\x74\x5f\165\x72\154"]) { goto koiscokkkaimiecq; } echo esc_html($acsweksygkmmgggk["\160\162\x6f\144\165\x63\164\x5f\x6e\141\155\x65"]); goto owuuuiekkaeoeacq; koiscokkkaimiecq: echo "\x3c\x61\40\150\162\145\x66\x3d\x22" . esc_url($acsweksygkmmgggk["\x70\x72\x6f\144\165\143\164\137\165\162\154"]) . "\x22\40\143\154\141\x73\x73\75\x22\143\x61\162\144\x2d\x6c\x69\x6e\x6b\42\76" . esc_html($acsweksygkmmgggk["\160\162\x6f\x64\165\143\x74\x5f\x6e\x61\x6d\x65"]) . "\x3c\57\x61\x3e"; owuuuiekkaeoeacq: goto agemwookwseyycqo; case "\x64\x6f\x77\x6e\154\157\x61\x64\x2d\146\x69\154\x65": echo "\74\141\40\x68\162\145\x66\x3d\x22" . esc_url($acsweksygkmmgggk["\x64\157\x77\156\x6c\157\x61\144\137\165\x72\154"]) . "\x22\x20\143\154\x61\x73\x73\x3d\x22\x77\x6f\157\143\x6f\x6d\155\145\x72\x63\x65\x2d\x4d\x79\x41\x63\143\157\165\156\x74\55\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x73\x2d\146\x69\x6c\x65\x20\142\165\x74\164\x6f\x6e\40\x61\x6c\x74\x20\x62\x74\x6e\x20\142\x74\156\55\163\155\40\x62\x74\x6e\55\157\x75\164\154\x69\156\x65\55\160\x72\x69\155\141\x72\x79\x20\x62\164\156\x2d\x62\x6c\x6f\143\153\40\160\171\x2d\x32\x22\76" . esc_html($acsweksygkmmgggk["\x64\x6f\167\x6e\154\x6f\x61\144\x5f\x6e\x61\155\145"]) . "\x3c\57\x61\76"; goto agemwookwseyycqo; case "\x64\x6f\x77\x6e\x6c\x6f\x61\144\55\162\x65\155\x61\151\x6e\151\x6e\x67": echo number_format_i18n(is_numeric($acsweksygkmmgggk["\144\157\167\x6e\x6c\157\x61\x64\163\x5f\162\145\x6d\141\151\156\x69\x6e\x67"]) ? esc_html($acsweksygkmmgggk["\x64\x6f\167\x6e\154\x6f\x61\144\163\x5f\x72\145\x6d\x61\x69\156\151\x6e\147"]) : esc_html__("\46\151\156\x66\151\x6e\x3b", PR__THM__PMPR)); goto agemwookwseyycqo; case "\x64\157\167\156\x6c\157\141\144\x2d\x65\x78\x70\151\x72\x65\163": if (!empty($acsweksygkmmgggk["\x61\x63\x63\x65\x73\163\x5f\145\x78\x70\151\162\x65\163"])) { goto saauykgakaeiyoua; } esc_html_e("\x4e\x65\166\x65\x72", PR__THM__PMPR); goto qwemkcoaseywkuuc; saauykgakaeiyoua: echo "\74\164\151\155\x65\x20\144\x61\164\x65\164\x69\155\x65\75\x22" . esc_attr(date("\x59\55\x6d\55\144", strtotime($acsweksygkmmgggk["\x61\x63\x63\x65\x73\x73\137\145\x78\x70\x69\x72\x65\x73"]))) . "\42\x20\164\x69\164\154\145\75\42" . esc_attr(strtotime($acsweksygkmmgggk["\x61\143\143\145\163\x73\x5f\x65\x78\160\151\162\x65\163"])) . "\42\76" . esc_html(date_i18n(get_option("\x64\x61\x74\145\x5f\146\157\162\x6d\141\164"), strtotime($acsweksygkmmgggk["\141\143\x63\145\163\163\x5f\x65\x78\160\x69\162\145\163"]))) . "\74\x2f\164\x69\x6d\x65\76"; qwemkcoaseywkuuc: goto agemwookwseyycqo; } cquecqekuucwoumw: agemwookwseyycqo: goto kwyimqumkuuyaiku; mqimkwickkgqqeoi: do_action("\x77\157\x6f\x63\157\155\x6d\x65\162\x63\x65\137\x61\143\x63\x6f\x75\156\164\x5f\144\157\167\x6e\x6c\157\141\144\x73\137\x63\x6f\x6c\x75\x6d\x6e\137" . $column_id, $acsweksygkmmgggk); kwyimqumkuuyaiku: ?>
                            </td>
                        <?php  mykiyqcqiegkiqys: } aquqkiggamaoegoo: ?>
                    </tr>
                <?php  csieaismmmocyacu: } omykokikgocoikec: ?>
            </table>
        </div>
    </div>
</section>
