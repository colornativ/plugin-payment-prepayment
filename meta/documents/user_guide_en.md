# plentymarkets Payment – Cash in advance

With this plugin, you integrate the payment method **Cash in advance** into your online store.

## Setting up a payment method

In order to make this payment method available in your online store, you have to carry out the settings in the plentymarkets back end. In addition, check the settings for Permitted payment methods in the <strong><a href="https://knowledge.plentymarkets.com/en/order-processing/payment/managing-payment-methods#30" target="_blank">customer classes</a></strong> and for Blocked payment methods in the <strong><a href="https://knowledge.plentymarkets.com/en/order-processing/fulfilment/preparing-the-shipment#1000" target="_blank">shipping profiles</a></strong>.

##### Setting up a payment method:

1. Go to **System&nbsp;» Orders&nbsp;» Payment » Plugins » Cash in advance**.
2. Select a Client (store).
3. Carry out the settings. Pay attention to the information given in table 1.
4. **Save** the settings.

<table>
<caption>Table 1: Carrying out settings for the payment method</caption>
	<thead>
		<th>
			Setting
		</th>
		<th>
			Explanation
		</th>
	</thead>
	<tbody>
        <tr>
			<td>
				<b>Language</b>
			</td>
			<td>
				Select a language. Other settings, such as name, info page, etc., will be saved depending on the selected language.
			</td>
		</tr>
        <tr>
			<td>
				<b>Name</b>
			</td>
			<td>
				Enter the name of the payment method that will be displayed in the overview of payment methods in the checkout.
			</td>
		</tr>
		<tr>
			<td>
				<b>Info page</b>
			</td>
			<td>
				Select a category page of the type <strong>content</strong> or an external website to provide <strong><a href="https://knowledge.plentymarkets.com/en/order-processing/payment/managing-bank-details#40">information about the payment method</a></strong>.
			</td>
		</tr>
		<tr>
			<td>
				<b>Info page internal/<br />Info page external</b>
			</td>
			<td>In the description of the payment method, a link to the <strong>details</strong> of the payment method is displayed.<br /><strong>Infopage (internal):</strong> By entering the category ID or using the selector, pick a category page of the type <strong>content</strong> to provide additional information on the payment method.<br /><strong>Info page (external):</strong> Enter the URL of an external information page. <strong><i>Important:</i></strong>Use either http:// or https://.<br />If no input is made, no link will be shown.
			</td>
		</tr>
        <tr>
			<td>
				<b>Logo</b>
			</td>
			<td>
			Select if the <strong>Standard logo</strong> of the payment method provided by the plugin or an individual logo is displayed.
			</td>
		</tr>				
		<tr>
			<td>
				<b>Logo-URL</b>
			</td>
			<td>
			An https URL that leads to the logo. Valid file formats are .gif, .jpg or .png. The image may not exceed a maximum size of 190 pixels in width and 60 pixels in height.
			</td>
		</tr>
		<tr>
			<td>
				<b>Description</b>
			</td>
			<td>
				Enter a description for the payment method to inform the customer in the checkout. The text will be cut with an ellipsis after 150 characters.
			</td>
		</tr>
		<tr>
			<td>
				<b>Countries of delivery</b>
			</td>
			<td>
				Activat the countries of delivery, for which this payment method is active.
			</td>
		</tr>
        <tr>
			<td colspan="2" class="th">Display data</td>  
		</tr>
		<tr>
			<td>
				<b>Designated use</b>
			</td>  
			<td>
			Enter the designated use for this payment method. Use the placeholder <code>%s</code> to display the order ID.
			</td>
		</tr>
		<tr>
			<td>
				<b>Show designated use</b>
			</td>  
			<td>
			Activate to display the designated use on the order confirmation page. This information must be linked with the respective <a href="#10."><strong>template container</strong></a>.
			</td>
		</tr>
		<tr>
			<td>
				<b>Show bank details</b>
			</td>  
			<td>
			Activate to display the bank details on the order confirmation page. Go to <strong>System » Settings » Bank</strong> to save bank details.
			</td>
		</tr>
	</tbody>
</table>

## Displaying the logo of the payment method on the homepage

The template plugin **Ceres** allows you to display the logo of your payment method on the homepage by using template containers. Proceed as described below to link the logo of the payment method.

##### Linking the logo with a template container:

1. Go to **CMS » Container links**.
3. Go to the **Cash in advance icon (PrePayment)** area.
4. Activate the container **Homepage: Payment method container**.
5. **Save** the settings.<br />→ The logo of the payment method will be displayed on the homepage of the online store.

## Displaying the bank details on the order confirmation page <a id="10." name="10."></a>

Proceed as follows to display the bank details that are saved in the system as well as a designated use on the order confirmation page.

##### Displaying bank details:

1. Go to **System&nbsp;» Orders&nbsp;» Payment » Plugins » Cash in advance**.
2. Select a Client (store).
3. Enter the **Designated use** in the **Display data** area.
4. Activate the option **Show designated use**.
5. Activate the option **Show bank details**.
6. **Save** the settings.

After these settings, link the bank details with a template container.

##### Linking the bank details with a template container:

1. Go to **CMS » Container links**.
3. Go to the **Cash in advance bank details (PrePayment)** area.
4. Activate the container **Order confirmation: Additional payment information**.
5. **Save** the settings.<br />→ The bank details will be displayed on the order confirmation page.

## Reinitialising the payment

You can offer your customers to reinitialise the payment. To do so, proceed as follows.

##### Reinitialising the payment:

1. Go to **CMS » Container links**.
2. Go to **Cash in advance Reinitialise Payment (PrePayment)**.
3. Activate the container **My account: Additional payment information**.<br />→ The customer can reinitialise the payment in the order history in the **My Account** area.
3. Activate the container **Order confirmation: Additional payment information**.<br />→ The customer can reinitialise the payment on the order confirmation page.
4. Go to **Cash in advance Reinitialise Payment Script (PrePayment)**.
5. Activate the container **Script loader: After scripts loaded**.
6. **Save** the settings.

The customer can now reinitialise the payment either in the order history in the **My Account** area or on the order confirmation page. For Cash in advance, this means accessing once more the bank data saved in the backend.

## Editing texts

You can adjust all of the text elements provided by the PrePayment plugin in the **CMS » Multilingualism** menu. You can store translations for all plentymarkets system languages. To do so, proceed as follows.

##### Editing individual text elements

1. Go to **CMS » Multilingualism**.
2. Select the Source language from the drop-down list on the left side.
3. Select the Target language from the drop-down list on the right side.
4. Expand the sections **bank data**, **designated use** and **reinitilization** in the **PrePayment** area.
5. Enter the desired text for the individual text elements in the area of the target language.
6. **Save** the settings.

You can find further information about editing texts of your online store in the <a href="https://knowledge.plentymarkets.com/en/omni-channel/online-store/setting-up-ceres#231" target="_blank"> Setting up Ceres manual page</a>.

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE. – find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-payment-cashinadvance/blob/master/LICENSE.md).
