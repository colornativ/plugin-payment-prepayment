# plentymarkets Payment – Vorkasse

Mit diesem Plugin binden Sie die Zahlungsart **Vorkasse** in Ihren Webshop ein.

## Zahlungsart einrichten

Bevor die Zahlungsart in Ihrem Webshop verfügbar ist, müssen Sie Einstellungen in Ihrem plentymarkets Backend vornehmen. Prüfen Sie zudem die Einstellungen für **Erlaubte Zahlungsarten** in den <strong><a href="https://knowledge.plentymarkets.com/auftragsabwicklung/payment/zahlungsarten-verwalten#30" target="_blank">Kundenklassen</a></strong> und für **Gesperrte Zahlungsarten** in den <strong><a href="https://knowledge.plentymarkets.com/auftragsabwicklung/fulfillment/versand-vorbereiten#1000" target="_blank">Versandprofilen</a></strong>.

##### Zahlungsart einrichten:

1. Öffnen Sie das Menü **System&nbsp;» Aufträge&nbsp;» Zahlung » Plugins » Vorkasse**.
2. Wählen Sie einen Mandanten.
3. Nehmen Sie die Einstellungen vor. Beachten Sie dazu die Erläuterungen in Tabelle 1.
4. **Speichern** Sie die Einstellungen.

<table>
<caption>Tab. 1: Einstellungen für die Zahlungsart vornehmen</caption>
	<thead>
		<th>
			Einstellung
		</th>
		<th>
			Erläuterung
		</th>
	</thead>
	<tbody>
        <tr>
			<td>
				<b>Sprache</b>
			</td>
			<td>
				Sprache wählen. Die übrigen Einstellungen, z.B. Name, Infoseite etc., werden sprachabhängig gespeichert.
			</td>
		</tr>
        <tr>
			<td>
				<b>Name</b>
			</td>
			<td>
				Bezeichnung eingeben, die in der Übersicht der Zahlungsarten in der Kaufabwicklung für diese Zahlungsart angezeigt wird.
			</td>
		</tr>
		<tr>
			<td>
				<b>Infoseite</b>
			</td>
			<td>Wählen, ob als <a href="https://knowledge.plentymarkets.com/auftragsabwicklung/payment/bankdaten-verwalten#40"><strong>Information zur Zahlungsart</strong></a> eine Kategorieseite oder eine externe Webseite angezeigt wird.
			</td>
		</tr>
		<tr>
			<td>
				<b>Infoseite intern/<br />Infoseite extern</b>
			</td>
			<td>In der Beschreibung der Zahlungsart wird ein Link zu den <strong>Details</strong> der Zahlungsart angezeigt.<br /><strong>Infoseite intern:</strong> Über Eingabe der Kategorie-ID oder das Auswahlfeld eine Kategorieseite vom Typ <strong>Content</strong> wählen, die weitere Informationen zur Zahlungsart bietet.<br /><strong>Infoseite extern:</strong> Die URL einer externen Informationsseite eingeben. <strong><i>Wichtig:</i></strong>Entweder http:// oder https:// verwenden.<br />Wird keine Eingabe vorgenommen, wird kein Link angezeigt.
			</td>
        <tr>
			<td>
				<b>Logo</b>
			</td>
			<td>
			Wählen, ob das im Plugin hinterlegte <strong>Standard-Logo</strong> der Zahlungsart oder ein eigenes Logo angezeigt wird.
			</td>
		</tr>
        <tr>
			<td>
				<b>Logo-URL</b>
			</td>
			<td>
			Eine https-URL, die zum Logo-Bild führt. Gültige Dateiformate sind .gif, .jpg oder .png. Die Maximalgröße beträgt 190 Pixel in der Breite und 60 Pixel in der Höhe.
			</td>
		</tr>
		<tr>
			<td>
				<b>Beschreibung</b>
			</td>
			<td>
				Eine Beschreibung der Zahlungsart eingeben, die dem Kunden in der Kaufabwicklung angezeigt wird. Der Text wird nach 150 Zeichen mit Ellipse abgeschnitten.
			</td>
		</tr>
		<tr>
			<td>
				<b>Lieferländer</b>
			</td>
			<td>
				Lieferländer aktivieren, für die diese Zahlungsart freigegeben ist.
			</td>
		</tr>
        <tr>
			<td colspan="2" class="th">Anzeigedaten</td>  
		</tr>
		<tr>
			<td>
				<b>Verwendungszweck</b>
			</td>  
			<td>
			Verwendungszweck für die Zahlungsart eingeben. Mit dem Platzhalter <code>%s</code> kann die Auftrags-ID angezeigt werden.
			</td>
		</tr>
		<tr>
			<td>
				<b>Verwendungszweck anzeigen</b>
			</td>  
			<td>
			Aktivieren, um den Verwendungszweck in der Bestellbestätigung anzuzeigen. Diese Informationen werden dem passenden <a href="#10."><strong>Template-Container</strong></a> verknüpft.
			</td>
		</tr>
		<tr>
			<td>
				<b>Bankdaten anzeigen</b>
			</td>  
			<td>
			Aktivieren, um die Bankdaten in der Bestellbestätigung anzuzeigen. Bankdaten speichern Sie im Menü <strong>System » Einstellungen » Bank</strong>.
			</td>
		</tr>
	</tbody>
</table>

## Logo der Zahlungsart auf der Startseite anzeigen

Das Template-Plugin **Ceres** bietet Ihnen auf der Startseite einen Template-Container, in dem Sie die Logos Ihrer Zahlungsart anzeigen können. Gehen Sie wie im Folgenden beschrieben vor, um das Logo der Zahlungsart zu verknüpfen.

##### Logo mit Template-Container verknüpfen:

1. Gehen Sie zu **CMS » Container-Verknüpfungen**.
3. Wählen Sie den Bereich **Cash in advance icon (PrePayment)**.
4. Aktivieren Sie den Container **Homepage: Payment method container**.
5. **Speichern** Sie die Einstellungen.<br />→ Das Logo der Zahlungsart wird auf der Startseite des Webshops angezeigt.

## Bankdaten in der Bestellbestätigung anzeigen <a id="10." name="10."></a>

Gehen Sie wie im Folgenden beschrieben vor, um die im System hinterlegten Bankdaten und einen Verwendungszweck auf der Bestellbestätigungsseite anzuzeigen.

##### Bankdaten anzeigen:


1. Öffnen Sie das Menü **System&nbsp;» Aufträge&nbsp;» Zahlung » Plugins » Vorkasse**.
2. Wählen Sie einen Mandanten.
3. Geben Sie im Bereich **Anzeigedaten** einen **Verwendungszweck** ein.
4. Aktivieren Sie die Option **Verwendungszweck anzeigen**.
5. Aktivieren Sie die Option **Bankdaten anzeigen**.
4. **Speichern** Sie die Einstellungen.

Nachdem Sie die Einstellungen vorgenommen haben, verknüpfen Sie die Bankdaten mit einem Template-Container.

##### Bankdaten mit Template-Container verknüpfen:

1. Öffnen Sie das Menü **CMS » Container-Verknüpfungen**.
3. Wählen Sie den Bereich **Cash in advance bank details (PrePayment)**.
4. Aktivieren Sie den Container **Order confirmation: Additional payment information**.
5. **Speichern** Sie die Einstellungen.<br />→ Die Bankdaten werden auf der Bestellbestätigungsseite angezeigt.

## Zahlungsart neu ausführen

Sie können Kunden die Möglichkeit anbieten, diese Zahlungsart erneut auszuführen. Gehen Sie dazu wie im Folgenden beschrieben vor.

##### Zahlungsart neu ausführen:

1. Öffnen Sie das Menü **CMS » Container-Verknüpfungen**.
2. Gehen Sie zum Bereich **Cash in advance Reinitialise Payment (PrePayment)**.
3. Aktivieren Sie den Container **My account: Additional payment information**.<br />→ Der Kunde kann in der Auftragshistorie im **Mein-Konto**-Bereich die Zahlung neu ausführen.
4. Aktivieren Sie den Container **Order confirmation: Additional payment information**.<br />→ Der Kunde kann auf der Bestellbestätigungsseite die Zahlung neu ausführen.
2. Gehen Sie zu **Cash in advance Reinitialise Payment Script (PrePayment)**.
5. Aktivieren Sie den Container **Script loader: After scripts loaded**.
7. **Speichern** Sie die Einstellungen.

Der Kunde kann nun die Zahlungsart in der Auftragshistorie im **Mein-Konto**-Bereich bzw. auf der Bestellbestätigungsseite neu ausführen. Bei Vorkasse bedeutet dies, dass die im Backend hinterlegten Bankinformationen erneut angezeigt werden.

## Sprachelemente anpassen

Sie können alle Benennungen, die das Vorkasse-Plugin mitbringt im Menü **CMS » Mehrsprachigkeit** nach Ihren Bedürfnissen in allen verfügbaren Systemsprachen anpassen. Gehen Sie dazu wie im Folgenden beschrieben vor.

##### Sprachdateien anpassen

1. Öffnen Sie das Menü **CMS » Mehrsprachigkeit**.
2. Wählen Sie auf der linken Seite die **Ausgangssprache** aus der Dropdown-Liste.
3. Wählen Sie auf der rechten Seite die **Zielsprache** aus der Dropdown-Liste.
4. Klappen Sie im Bereich **PrePayment** die Sektionen **bank data**, **designated use** und **reinitilization** aus.
5. Geben Sie im Bereich der Zielsprache die gewünschten Texte für die einzelnen Sprachelemente ein.
6. Speichern Sie die Einstellungen.

 Weitere Informationen zum Bearbeiten von im Webshop angezeigten Texten finden Sie auf der <a href="https://knowledge.plentymarkets.com/omni-channel/online-shop/ceres-einrichten#231" target="_blank"> Ceres einrichten Handbuchseite</a>.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-payment-cashinadvance/blob/master/LICENSE.md).
