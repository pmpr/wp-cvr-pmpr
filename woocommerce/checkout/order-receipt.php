<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f0edbe3b             |
    |_______________________________________|
*/
 if (defined("\x41\102\123\x50\x41\124\110")) { goto osmmoyqkqoucsgow; } exit; osmmoyqkqoucsgow: if (isset($umwqusowiqmyseom)) { goto wgiygcmqaokywuqa; } return; wgiygcmqaokywuqa: ?>

<div class="container my-5">
        <div class="card mx-auto max-width-1">
            <div class="card-body">
                <table class="order_details table table-borderless mb-0">
                    <?php  foreach (get_wc_order_details($umwqusowiqmyseom) as $uusmaiomayssaecw => $igqsaukqcqscimok) { ?>
                        <tr class="<?php  echo $uusmaiomayssaecw; ?>">
                            <th><?php  echo esc_html($igqsaukqcqscimok["\x74\151\x74\x6c\x65"]); ?></th>
                            <td><?php  echo $igqsaukqcqscimok["\166\x61\x6c\165\x65"]; ?></td>
                        </tr>
                    <?php  aukucaieceiwesmm: } iauwuugggmegwisk: ?>
                </table>
            </div>
            <div class="card-footer">
	            <?php  do_action("\167\x6f\157\143\x6f\x6d\x6d\145\x72\143\x65\137\x72\145\x63\145\x69\x70\164\x5f" . $umwqusowiqmyseom->get_payment_method(), $umwqusowiqmyseom->get_id()); ?>
            </div>
        </div>
</div>
