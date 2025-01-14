{*
 * 2008 - 2017 Presto-Changeo
 *
 * MODULE Authorize.net (AIM / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.0
 * @link      http://www.presto-changeo.com
 *
 * NOTICE OF LICENSE
 *
 * Don't use this module on several shops. The license provided by PrestaShop Addons
 * for all its modules is valid only once for a single shop.
*}
<br />
<link rel="stylesheet" href="{$path|escape:'htmlall':'UTF-8'}views/css/adminOrder.css">
<div class="row">
	<div class="col-lg-7">
		<div class="panel">
			<h3>
				<img src="../modules/authorizedotnet/logo.gif"> {l s='Authorize.net Refund Transaction' mod='authorizedotnet'}
			</h3>
			<div id="refund_order_details">
				
			</div>
		</div>
	</div>
</div>



{if ($isCanCapture)}
	
		<div class="row">
			<div class="col-lg-7">
				<div class="panel">
					<h3>
						<img src="../modules/authorizedotnet/logo.gif"> {l s='Authorize.net Capture Transaction' mod='authorizedotnet'}
					</h3>
					<div id="capture_order_details">
						
					</div>
				</div>
			</div>
		</div>	
	
{/if}

<script type="text/javascript">
		var baseDir = '{$module_basedir|escape:'htmlall':'UTF-8'}';
		function search_orders(type)
		{ldelim}
			// var type = 2;
			var orderId = {$order_id|intval};

			if (type == 1)
			{ldelim}
				$.ajax({ldelim}
					type: "POST",
					url: baseDir + "authorizedotnet-ajax.php",
					async: true,
					cache: false,
					data: "id_shop={$id_shop|intval}&orderId=" + orderId + "&adminOrder=1&id_lang={$cookie->id_lang|intval}&id_employee={$cookie->id_employee|intval}&type="+ type + "&secure_key={$_adn_secure_key|escape:'htmlall':'UTF-8'}",
					success: function(html){ldelim} $("#capture_order_details").html(html); {rdelim},
					error: function() {ldelim} alert("ERROR:");  {rdelim}
				{rdelim});
			{rdelim}

			if (type == 2)
			{ldelim}
				$.ajax({ldelim}
					type: "POST",
					url: baseDir + "authorizedotnet-ajax.php",
					async: true,
					cache: false,
					data: "id_shop={$id_shop|intval}&orderId=" + orderId + "&adminOrder=1&id_lang={$cookie->id_lang|intval}&id_employee={$cookie->id_employee|intval}&type="+ type + "&secure_key={$_adn_secure_key|escape:'htmlall':'UTF-8'}",
					success: function(html){ldelim} $("#refund_order_details").html(html); {rdelim},
					error: function() {ldelim} alert("ERROR:"); {rdelim}
				{rdelim});
			{rdelim}
		{rdelim}
	
		$(document).ready(function() {ldelim}
				search_orders(2);
			{if ($isCanCapture)}
				search_orders(1);
			{/if}
		{rdelim});
</script>