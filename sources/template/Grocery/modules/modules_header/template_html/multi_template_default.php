<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT
 *  @licence MIT - Portion of osCommerce 2.4
 *  @Info : https://www.clicshopping.org/forum/trademark/
 *
 */

use ClicShopping\OM\HTML;
use ClicShopping\OM\CLICSHOPPING;
?>
<style>
  .headerGrocery {
    background-color: #1C2224!important;
  }
</style>
<div class="headerGrocery">
    <div class="row col-md-12">
      <span class="col-lg-2 col-sm-12">
        <a class="navbar-brand" href="#"><?php echo $logo_header; ?></a>
      </span>

      <span class="col-lg-4 col-sm-12">
        <div class="separator"></div>
        <div class="row col-lg-6 col-sm-12 align-items-center float-md-left"><?php echo $categories_dropdown; ?></div>
        <?php echo $form_advanced_result; ?>
        <div class="row col-lg-6 col-sm-12 input-group w-100">
          <?php echo HTML::inputField('keywords', null, 'required aria-required="true" id="inputKeywordsSearchLogin" placeholder="' . CLICSHOPPING::getDef('modules_header_multi_template_header_search') . '"', 'search'); ?>
          <div class="input-group-append">
            <?php echo HTML::button(null, 'fas fa-search', null, 'warning', null, 'md'); ?>
            <?php echo HTML::hiddenField('search_in_description', '1'); ?>
          </div>
        </div>
        </form> <!-- search-wrap .end// -->
      </span>

      <span class="col-lg-3 col-sm-8">
        <div class="row-sm align-items-center">
          <span>
<?php
  if (!$CLICSHOPPING_Customer->isLoggedOn()) {
    ?>
    <a data-toggle="modal" data-target="#loginModal" class="headerMultiTemplateDefaultlogin"><i class="faColor fas fa-user fa-1x">&nbsp;&nbsp;</i><?php echo CLICSHOPPING::getDef('modules_header_multi_template_account_login'); ?></a>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"><?php echo CLICSHOPPING::getDef('modules_header_multi_template_account_login') ?></h4>
                </div>
                <div class="modal-body text-md-center">
                  <?php echo $form; ?>
                  <div class="separator"></div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="inputAddressEmailLogin" class="sr-only"><?php echo CLICSHOPPING::getDef('modules_header_multi_template_header_email_address'); ?></label>
                      <span class="col-md-3 float-md-left text-md-left headerMultiTemplateDefaultLoginText"  id="inputAddressEmailLogin"><?php echo CLICSHOPPING::getDef('modules_header_multi_template_header_email_address'); ?></span>
                      <span class="col-md-9 float-md-right"><?php echo HTML::inputField('email_address', null, 'id="inputAddressEmail" aria-describedby="' . CLICSHOPPING::getDef('modules_header_multi_template_header_email_address') . '" placeholder="' . CLICSHOPPING::getDef('modules_header_multi_template_header_email_address') . '"', 'email'); ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="inputAddressPasswordLogin" class="sr-only"><?php echo CLICSHOPPING::getDef('modules_header_multi_template_account_password'); ?></label>
                      <span class="col-md-3 float-md-left text-md-left headerMultiTemplateDefaultPasswordText" id="inputAddressPasswordLogin"><?php echo CLICSHOPPING::getDef('modules_header_multi_template_account_password'); ?></span>
                      <span class="col-md-9 float-md-right"><?php echo HTML::inputField('password', null, 'id="current-password" autocomplete="current-password" aria-describedby="' . CLICSHOPPING::getDef('modules_header_multi_template_account_password') . '" placeholder="' . CLICSHOPPING::getDef('modules_header_multi_template_account_password') . '"', 'password'); ?></span>
                    </div>
                  </div>
                  <div class="separator"></div>
                  <div>
                    <span class="headerMultiTemplateDefaultPassword col-md-6"><?php echo HTML::link(CLICSHOPPING::link(null, 'Account&PasswordForgotten'), CLICSHOPPING::getDef('modules_header_multi_template_password_forgotten')); ?>
                    <span class="text-md-right col-md-6"><?php echo $login; ?></span>
                  </div>
                  <?php echo $endform; ?>

                  <hr class="dropdown-divider">
                  <?php
                    if (!$CLICSHOPPING_Customer->isLoggedOn()) {
                      ?>
                      <?php echo HTML::link(CLICSHOPPING::link(null, 'Account&Login'), CLICSHOPPING::getDef('modules_header_multi_template_create_account'), 'class="dropdown-item"'); ?>
                      <?php
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
    <?php
  } else {
    ?>

    <li class="dropdown"><a href="#" class="dropdown-toggle groceryTextHeader" data-toggle="dropdown"><i class="faColor fas fa-user fa-1x" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo CLICSHOPPING::getDef('modules_header_multi_template_my_account'); ?></a>
            <ul class="dropdown-menu ">
              <li>
<?php
  if ($CLICSHOPPING_Customer->getCustomerGuestAccount($CLICSHOPPING_Customer->getID()) == 0) {
    echo HTML::link(CLICSHOPPING::link(null, 'Account&Main'), CLICSHOPPING::getDef('modules_header_multi_template_my_account'), 'class="dropdown-item"');
  }
?>
              </li>
              <li class="groceryTextHeader"><?php echo HTML::link(CLICSHOPPING::link(null, 'Account&LogOff'), CLICSHOPPING::getDef('modules_header_multi_template_account_logoff'), 'class="dropdown-item"');?></li>
            </ul>
          </li>
    <?php
  }
?>
        </span>&nbsp;&nbsp;
        <span class="groceryTextontactUs"><i class="faColor fas fa-id-card fa-1x" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo HTML::link(ClicShopping::link(null, 'Info&Contact'), CLICSHOPPING::getDef('modules_header_multi_template_title_contact_us')); ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;
      </div>
    </span>







      <span class="col-lg-3 col-sm-12 text-md-right">
        <span class="text-md-right col-sm-6">&nbsp;<?php echo $languages_string; ?></span>
        <span class="text-md-right col-sm-6">&nbsp;<?php echo $currency_header; ?></span>
        <div class="separator"></div>
<?php
  if ($CLICSHOPPING_ShoppingCart->getCountContents() > 0) {
    ?>
    <ul>
            <li class="dropdown headerMultiTemplateDefaultShoppingCart">
              <a class="dropdown-toggle headerMultiTemplateDefaultShoppingCart" data-toggle="dropdown" href="#"><?php echo '<i class="faColor fas fa-shopping-cart fa-1x headerMultiTemplateDefaultShoppingCart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;' . $shopping_cart ?></a>
              <ul class="dropdown-menu">
                <li role="separator"></li>
<?php
  $products = $CLICSHOPPING_ShoppingCart->get_products();

  foreach ($products as $k => $v) {
    echo '<li class="headerMultiTemplateDefaultLi">&nbsp;&nbsp;
              <span class="float-md-left">' . $v['quantity'] . ' - ' . $v['name'] . '</span>
              <span class="float-md-right">' .  $CLICSHOPPING_Currencies->displayPrice($v['final_price'], $CLICSHOPPING_Tax->getTaxRate($v['tax_class_id']), $v['quantity']) . '</span>
            </li>
           ';
  }
?>
                <li role="separator" class="h-divider"></li>
                <li class="headerMultiTemplateDefaultLi">&nbsp;&nbsp;
                  <span class="float-md-left"><?php echo CLICSHOPPING::getDef('modules_header_multi_template_shopping_cart_total_content'); ?></span>
                  <span class="float-md-right text-md-right"><?php echo $CLICSHOPPING_Currencies->format($CLICSHOPPING_ShoppingCart->show_total()); ?></span>
                </li>
                <li role="separator" class="h-divider"></li>
                <li class="headerMultiTemplateDefaultLi">
                  <span class="float-md-left headerMultiTemplateDefaultShoppingSmallCart"><i class="faColor fas fa-shopping-cart fa-1x">&nbsp;&nbsp;</i><?php echo HTML::link(ClicShopping::link(null, 'Cart'), CLICSHOPPING::getDef('modules_header_multi_template_shopping_cart_view_cart')); ?></span>
                  <span class="float-md-right headerMultiTemplateDefaultCheckout"><i class="fas fa-angle-right"></i>&nbsp;&nbsp;<?php echo HTML::link(ClicShopping::link(null, 'Checkout&Shipping'), CLICSHOPPING::getDef('modules_header_multi_template_shopping_cart_checkout')); ?></span>
                </li>
              </ul>
            </li>
          </ul>
    <?php
  } else {
    echo '<ul>
        <li class="headerMultiTemplateDefaultShoppingCart"><i class="faColor fas fa-shopping-cart fa-1x headerMultiTemplateDefaultShoppingCart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;' . CLICSHOPPING::getDef('modules_header_multi_template_shopping_cart_no_content') . '</li>
        </ul>
        ';
  }
?>
      </span> <!-- col.// -->
    </div>



</div>
  <!--
            <select class="custom-select" name="category_name" onchange="this.form.submit();">
              <option value=""><?php echo CLICSHOPPING::getDef('text_all_type'); ?></option>
              <option value=""><?php echo CLICSHOPPING::getDef('text_specials'); ?></option>
              <option value=""><?php echo CLICSHOPPING::getDef('text_featured'); ?></option>
              <option value=""><?php echo CLICSHOPPING::getDef('text_favorites'); ?></option>
            </select>
-->