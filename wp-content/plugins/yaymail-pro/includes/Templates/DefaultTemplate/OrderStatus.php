<?php
namespace YayMail\Templates\DefaultTemplate;

defined( 'ABSPATH' ) || exit;

class OrderStatus {

	protected static $instance = null;

	public static function getInstance() {
		if ( null == self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public static function getTemplates( $template_informations ) {
		/*
		@@@ Html default send email.
		@@@ Note: Add characters '\' before special characters in a string.
		@@@ Example: font-family: \'Helvetica Neue\'...
		*/

		$emailTitle = __( '' === $template_informations->heading ? $template_informations->title : $template_informations->heading, 'woocommerce' );
		if ( isset( $template_informations->plugin ) && 'custom_order_status' == $template_informations->plugin ) {
			$emailtext = esc_html__( 'Status changed from ', 'woocommerce' ) . esc_html( do_shortcode( '[yaymail_order_status_from]' ) ) . esc_html__( ' to ', 'woocommerce' ) . esc_html( do_shortcode( '[yaymail_order_status]' ) );
		} else {
			$emailtext = esc_html__( 'Your order is now ', 'woocommerce' ) . esc_html( do_shortcode( '[yaymail_order_status]' ) . ':' );
		}

		$textShippingAddress = __( 'Shipping Address', 'woocommerce' );
		$textBillingAddress  = __( 'Billing Address', 'woocommerce' );
		/*
		@@@ Elements default when reset template.
		@@@ Note 1: Add characters '\' before special characters in a string.
		@@@ example 1: "family": "\'Helvetica Neue\',Helvetica,Roboto,Arial,sans-serif",

		@@@ Note 2: Add characters '\' before special characters in a string.
		@@@ example 2: "<h1 style=\"font-family: \'Helvetica Neue\',...."
		*/

		// Elements
		$elements  =
		'[{
        "id": "8ffa62b5-7258-42cc-ba53-7ae69638c1fe",
        "type": "Logo",
        "nameElement": "Logo",
        "settingRow": {
          "backgroundColor": "#ECECEC",
          "align": "center",
          "pathImg": "",
          "paddingTop": "15",
          "paddingRight": "0",
          "paddingBottom": "15",
          "paddingLeft": "0",
          "width": "172",
          "url": "#"
        }
      }, {
        "id": "802bfe24-7af8-48af-ac5e-6560a81345b3",
        "type": "ElementText",
        "nameElement": "Email Heading",
        "settingRow": {
          "content": "<h1 style=\"font-size: 30px; font-weight: 300; line-height: normal; margin: 0px; color: inherit;\">' . $emailTitle . ': #[yaymail_order_id]</h1>",
          "backgroundColor": "#96588A",
          "textColor": "#ffffff",
          "family": "Helvetica,Roboto,Arial,sans-serif",
          "paddingTop": "41",
          "paddingRight": "48",
          "paddingBottom": "41",
          "paddingLeft": "48"
        }
      }, {
        "id": "b035d1f1-0cfe-41c5-b79c-0478f144ef5f",
        "type": "ElementText",
        "nameElement": "Text",
        "settingRow": {
          "content": "<p style=\"margin: 0px;\"><span style=\"font-size: 14px;\">' . $emailtext . '</span></p>",
          "backgroundColor": "#fff",
          "textColor": "#636363",
          "family": "Helvetica,Roboto,Arial,sans-serif",
          "paddingTop": "32",
          "paddingRight": "50",
          "paddingBottom": "0",
          "paddingLeft": "50"
        }
      },
      {
        "id": "ad422370-f762-4a26-92de-c4cf3878h0oi",
        "type": "OrderItem",
        "nameElement": "Order Item",
        "settingRow": {
          "contentBefore": "[yaymail_items_border_before]",
          "contentAfter": "[yaymail_items_border_after]",
          "contentTitle": "[yaymail_items_border_title]",
          "content": "[yaymail_items_border_content]",
          "backgroundColor": "#fff",
          "titleColor" : "#96588a",
          "textColor": "#636363",
          "borderColor": "#e5e5e5",
          "family": "Helvetica,Roboto,Arial,sans-serif",
          "paddingTop": "15",
          "paddingRight": "50",
          "paddingBottom": "15",
          "paddingLeft": "50"
        }
      },';
		$elements .= '{
      "id": "de242956-a617-4213-9107-138842oi4tch",
      "type": "BillingAddress",
      "nameElement": "Billing Shipping Address",
      "settingRow": {
        "nameColumn": "BillingShippingAddress",
        "contentTitle": "[yaymail_billing_shipping_address_title]",
        "checkBillingShipping": "[yaymail_billing_shipping_address_title]",
        "titleBilling": "' . $textBillingAddress . '",
        "titleShipping": "' . $textShippingAddress . '",
        "content": "[yaymail_billing_shipping_address_content]",
        "titleColor" : "#96588a",
        "backgroundColor": "#fff",
        "borderColor": "#e5e5e5",
        "textColor": "#636363",
        "family": "Helvetica,Roboto,Arial,sans-serif",
        "paddingTop": "15",
        "paddingRight": "50",
        "paddingBottom": "15",
        "paddingLeft": "50"
      }
    },
    {
      "id": "b39bf2e6-8c1a-4384-a5ec-37663da27c8ds",
      "type": "ElementText",
      "nameElement": "Footer",
      "settingRow": {
        "content": "<p style=\"font-size: 14px;margin: 0px 0px 16px; text-align: center;\">[yaymail_site_name]&nbsp;- Built with <a style=\"color: #96588a; font-weight: normal; text-decoration: underline;\" href=\"https://woocommerce.com\" target=\"_blank\" rel=\"noopener\">WooCommerce</a></p>",
        "backgroundColor": "#ececec",
        "textColor": "#8a8a8a",
        "family": "Helvetica,Roboto,Arial,sans-serif",
        "paddingTop": "15",
        "paddingRight": "50",
        "paddingBottom": "15",
        "paddingLeft": "50"
      }
    }]';

		// Templates New Order
		$templates = array(
			$template_informations->id => array(),
		);

		$templates[ $template_informations->id ]['elements'] = $elements;
		return $templates;
	}
}
