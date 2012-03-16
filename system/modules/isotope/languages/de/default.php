<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Burg <ab@andreasburg.de>
 * @author     Nikolas Runde <info@nrmedia.de>
 * @author     Patrick Grob <grob@a-sign.ch>
 * @author     Frank Berger <berger@mediastuff.de>
 * @author     Angelica Schempp <aschempp@gmx.net>
 * @author     Oliver Hoff <oliver@hoff.com>
 * @author     Stefan Preiss <stefan@preiss-at-work.de>
 * @author     Nina Gerling <gerling@ena-webstudio.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['TL_LANG']['ERR']['systemColumn'] = 'Der Name `%s` ist vom System reserviert. Bitte wählen Sie einen anderen Namen.';
$GLOBALS['TL_LANG']['ERR']['missingButtonTemplate'] = 'Für den Button "%s" müssen Sie ein Template angeben.';
$GLOBALS['TL_LANG']['ERR']['order_conditions'] = 'Sie müssen die AGB akzeptieren um fortzufahren';
$GLOBALS['TL_LANG']['ERR']['noStoreConfigurationSet'] = 'Keine Shop-Konfiguration verfügbar';
$GLOBALS['TL_LANG']['ERR']['noDefaultStoreConfiguration'] = 'Bitte erstellen Sie eine Standard-Shop-Konfiguration.';
$GLOBALS['TL_LANG']['ERR']['productNameMissing'] = '<keinen Produkt-Namen gefunden>';
$GLOBALS['TL_LANG']['ERR']['noSubProducts'] = 'keine Unter-Produkte gefunden';
$GLOBALS['TL_LANG']['ERR']['emptyOrderHistory'] = 'Sie haben noch keine Bestellungen getätigt.';
$GLOBALS['TL_LANG']['ERR']['orderNotFound'] = 'Die gewünschte Bestellung wurde nicht gefunden.';
$GLOBALS['TL_LANG']['ERR']['missingCurrencyFormat'] = 'Währungs-Formatierung nicht gefunden';
$GLOBALS['TL_LANG']['ERR']['searchNotEnabled'] = 'Die Suchfunktion ist nicht aktiviert!';
$GLOBALS['TL_LANG']['ERR']['isoLoginRequired'] = 'Für den Bezahlvorgang müssen Sie eingeloggt sein.';
$GLOBALS['TL_LANG']['ERR']['mandatoryOption'] = 'Bitte wählen Sie eine Option.';
$GLOBALS['TL_LANG']['ERR']['noAddressData'] = 'Zur Steuerberechnung werden Adressdaten benötigt!';
$GLOBALS['TL_LANG']['ERR']['variantDuplicate'] = 'Eine Variante mit diesen Attributen ist bereits vorhanden. Wählen Sie bitte eine andere Zusammenstellung.';
$GLOBALS['TL_LANG']['ERR']['breadcrumbEmpty'] = 'Die gewählte Kategorie ist leer. Es werden stattdessen alle Produkte angezeigt.';
$GLOBALS['TL_LANG']['ERR']['discount'] = 'Bitte geben Sie ganze Zahlen oder Dezimalzahlen verbunden mit + oder - und optional mit einer Prozentangabe ein.';
$GLOBALS['TL_LANG']['ERR']['surcharge'] = 'Bitte geben Sie ganze Zahlen oder Dezimalzahlen optional mit einer Prozentangabe ein.';
$GLOBALS['TL_LANG']['ERR']['orderFailed'] = 'Der Bezahlvorgang ist fehlgeschlagen. Bitte versuchen Sie es erneut oder wählen Sie eine andere Bezahlmethode.';
$GLOBALS['TL_LANG']['ERR']['specifyBillingAddress'] = 'Es wurde keine Rechnungs-Adresse gefunden. Bitte geben Sie eine Rechnungs-Adresse an.';
$GLOBALS['TL_LANG']['ERR']['cc_num'] = 'Geben Sie bitte eine gültige Kreditkarten-Nummer an.';
$GLOBALS['TL_LANG']['ERR']['cc_type'] = 'Bitte wählen Sie einen Kreditkarten-Typ.';
$GLOBALS['TL_LANG']['ERR']['cc_exp'] = 'Bitte geben Sie ein Kreditkarten-Ablaufdatum im Format mm/jj an.';
$GLOBALS['TL_LANG']['ERR']['cc_ccv'] = 'Bitte geben Sie eine Kartenprüfnummer (CVC) an (3- od. 4-stellig auf der Vorder- od. Rückseite der Karte).';
$GLOBALS['TL_LANG']['ERR']['cc_match'] = 'Ihre Kreditkarten-Nummer stimmt nicht mit dem gewählten Kreditkarten-Typ überein.';
$GLOBALS['TL_LANG']['ERR']['addressDoesNotExist'] = 'Diese Adresse ist nicht in Ihrem Adressbuch.';
$GLOBALS['TL_LANG']['ERR']['noAddressBookEntries'] = 'Sie haben keine Adressbuch-Einträge.';
$GLOBALS['TL_LANG']['ERR']['cartMinSubtotal'] = 'Der Mindestbestellwert beträgt %s. Bitte legen Sie weitere Produkte in den Warenkorb.';
$GLOBALS['TL_LANG']['MSC']['editLanguage'] = 'Bearbeiten';
$GLOBALS['TL_LANG']['MSC']['deleteLanguage'] = 'Löschen';
$GLOBALS['TL_LANG']['MSC']['defaultLanguage'] = 'Fallback-Sprache';
$GLOBALS['TL_LANG']['MSC']['editingLanguage'] = 'ACHTUNG: Sie bearbeiten die sprachspezifischen Daten dieses Produkts!';
$GLOBALS['TL_LANG']['MSC']['deleteLanguageConfirm'] = 'Soll diese Sprache wirklich gelöscht werden? Hierfür gibt es keine Rückgängig-Funktion!';
$GLOBALS['TL_LANG']['MSC']['undefinedLanguage'] = 'undefiniert';
$GLOBALS['TL_LANG']['MSC']['copyFallback'] = 'Fallback kopieren';
$GLOBALS['TL_LANG']['MSC']['noSurcharges'] = 'Es wurden keine Aufpreise gefunden.';
$GLOBALS['TL_LANG']['MSC']['ajaxLoadingMessage'] = 'Lade...';
$GLOBALS['TL_LANG']['MSC']['orderDetailsHeadline'] = 'Bestellung Nr. %s vom %s';
$GLOBALS['TL_LANG']['MSC']['payment_processing'] = 'Ihre Zahlung wird durchgeführt. Bitte haben Sie Geduld...';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet_process_failed'] = 'Ihre Zahlung konnte nicht durchgeführt werden.<br /><br />Begründung: %s';
$GLOBALS['TL_LANG']['MSC']['mmNoUploads'] = 'Keine Dateien hochgeladen.';
$GLOBALS['TL_LANG']['MSC']['mmUpload'] = 'Neue Datei hochladen';
$GLOBALS['TL_LANG']['MSC']['quantity'] = 'Anzahl';
$GLOBALS['TL_LANG']['MSC']['order_conditions'] = 'Ich akzeptiere die AGB';
$GLOBALS['TL_LANG']['MSC']['defaultSearchText'] = 'Produkte suchen';
$GLOBALS['TL_LANG']['MSC']['blankSelectOptionLabel'] = '-';
$GLOBALS['TL_LANG']['MSC']['emptySelectOptionLabel'] = 'Bitte auswählen...';
$GLOBALS['TL_LANG']['MSC']['downloadsLabel'] = 'Ihre Produkte zum Herunterladen';
$GLOBALS['TL_LANG']['MSC']['priceRangeLabel'] = '<span class="from">Ab</span> %s';
$GLOBALS['TL_LANG']['MSC']['detailLabel'] = 'Details sehen';
$GLOBALS['TL_LANG']['MSC']['searchTextBoxLabel'] = 'Suchbegriff:';
$GLOBALS['TL_LANG']['MSC']['searchFieldsLabel'] = 'Suchfelder:';
$GLOBALS['TL_LANG']['MSC']['perPageLabel'] = 'Produkte pro Seite';
$GLOBALS['TL_LANG']['MSC']['searchTermsLabel'] = 'Suchbegriffe';
$GLOBALS['TL_LANG']['MSC']['submitLabel'] = 'Senden';
$GLOBALS['TL_LANG']['MSC']['clearFiltersLabel'] = 'Filter leeren';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['update'] = 'Aktualisieren';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_to_cart'] = 'In den Warenkorb';
$GLOBALS['TL_LANG']['MSC']['pagerSectionTitleLabel'] = 'Seite:';
$GLOBALS['TL_LANG']['MSC']['orderByLabel'] = 'Sortieren nach:';
$GLOBALS['TL_LANG']['MSC']['buttonActionString']['add_to_cart'] = 'Produkt %s in den Warenkorb legen';
$GLOBALS['TL_LANG']['MSC']['noProducts'] = 'Zurzeit sind in dieser Kategorie keine Produkte vorhanden.';
$GLOBALS['TL_LANG']['MSC']['invalidProductInformation'] = 'Das von Ihnen gewünschte Produkt ist leider nicht vorhanden oder wurde aus dem Shop entfernt. Für weitere Hilfe nehmen Sie bitte Kontakt mit uns auf.';
$GLOBALS['TL_LANG']['MSC']['productOptionsLabel'] = 'Optionen';
$GLOBALS['TL_LANG']['MSC']['previousStep'] = 'Zurück';
$GLOBALS['TL_LANG']['MSC']['nextStep'] = 'Weiter';
$GLOBALS['TL_LANG']['MSC']['confirmOrder'] = 'Bestellen';
$GLOBALS['TL_LANG']['MSC']['noCategoriesAssociated'] = 'Dieses Produkt ist keiner Kategorie zugeordnet.';
$GLOBALS['TL_LANG']['MSC']['labelPerPage'] = 'Pro Seite';
$GLOBALS['TL_LANG']['MSC']['labelSortBy'] = 'Sortieren nach';
$GLOBALS['TL_LANG']['MSC']['labelSubmit'] = 'Senden';
$GLOBALS['TL_LANG']['MSC']['labelProductVariants'] = 'Bitte wählen Sie';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkText'] = 'Entfernen';
$GLOBALS['TL_LANG']['MSC']['noItemsInCart'] = 'Ihr Warenkorb ist leer.';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkTitle'] = '%s aus Ihrem Warenkorb entfernen';
$GLOBALS['TL_LANG']['MSC']['subTotalLabel'] = 'Zwischensumme';
$GLOBALS['TL_LANG']['MSC']['shippingLabel'] = 'Versandkosten';
$GLOBALS['TL_LANG']['MSC']['paymentLabel'] = 'Bezahlung';
$GLOBALS['TL_LANG']['MSC']['taxLabel'] = 'Enthaltene MwSt.';
$GLOBALS['TL_LANG']['MSC']['grandTotalLabel'] = 'Bestellsumme';
$GLOBALS['TL_LANG']['MSC']['shippingOptionsLabel'] = 'Gewählte Versand-Optionen:';
$GLOBALS['TL_LANG']['MSC']['noVariants'] = 'Keine Produktvarianten gefunden.';
$GLOBALS['TL_LANG']['MSC']['generateSubproducts'] = 'Erzeuge Unter-Produkte';
$GLOBALS['TL_LANG']['MSC']['selectItemPrompt'] = '(wähle)';
$GLOBALS['TL_LANG']['MSC']['actualPrice'] = 'Aktueller Preis';
$GLOBALS['TL_LANG']['MSC']['noPaymentModules'] = 'Zur Zeit sind keine Zahlungsoptionen verfügbar.';
$GLOBALS['TL_LANG']['MSC']['noShippingModules'] = 'Leider können die Produkte zur Zeit nicht in Ihr Land geliefert werden. Bitte wählen Sie eine andere Versand-Adresse oder nur Artikel die nicht versendet werden müssen (z.B. Download-Artikel).';
$GLOBALS['TL_LANG']['MSC']['noOrderEmails'] = 'Keine Bestell-E-Mails gefunden.';
$GLOBALS['TL_LANG']['MSC']['noOrders'] = 'Keine Bestellungen gefunden.';
$GLOBALS['TL_LANG']['MSC']['downloadsRemaining'] = '<br />%s Downloads verbleibend';
$GLOBALS['TL_LANG']['MSC']['addedToCart'] = 'Das gewählte Produkt wurde in den Warenkorb gelegt.';
$GLOBALS['TL_LANG']['MSC']['cartMerged'] = 'Die unbestellten Produkte Ihres letzten Besuchs wurden wieder übernommen. Bitte prüfen Sie den Warenkorb-Inhalt.';
$GLOBALS['TL_LANG']['ISO']['couponsInputLabel'] = 'Gutschein-Code';
$GLOBALS['TL_LANG']['ISO']['couponsHeadline'] = 'Gutschein-Code anwenden';
$GLOBALS['TL_LANG']['ISO']['couponsSubmitLabel'] = 'Anwenden';
$GLOBALS['TL_LANG']['MSC']['cartBT'] = 'Warenkorb';
$GLOBALS['TL_LANG']['MSC']['checkoutBT'] = 'Zur Kasse';
$GLOBALS['TL_LANG']['MSC']['continueShoppingBT'] = 'Weiter einkaufen';
$GLOBALS['TL_LANG']['MSC']['updateCartBT'] = 'Warenkorb aktualisieren';
$GLOBALS['TL_LANG']['MSC']['orderStatusHeadline'] = 'Bestell-Status: %s';
$GLOBALS['TL_LANG']['MSC']['checkboutStepBack'] = 'Zurück zu "%s"';
$GLOBALS['TL_LANG']['MSC']['createNewAddressLabel'] = 'Neue Adresse anlegen';
$GLOBALS['TL_LANG']['MSC']['useBillingAddress'] = 'Rechnungs-Adresse verwenden';
$GLOBALS['TL_LANG']['MSC']['useCustomerAddress'] = 'Kunden-Adresse verwenden';
$GLOBALS['TL_LANG']['MSC']['differentShippingAddress'] = 'Abweichende Versand-Adresse';
$GLOBALS['TL_LANG']['MSC']['addressBookLabel'] = 'Adressen';
$GLOBALS['TL_LANG']['MSC']['editAddressLabel'] = 'Bearbeiten';
$GLOBALS['TL_LANG']['MSC']['deleteAddressLabel'] = 'Löschen';
$GLOBALS['TL_LANG']['MSC']['deleteAddressConfirm'] = 'Möchten Sie diese Adresse wirklich löschen? Es gibt keine Rückgängig-Funktion für diesen Vorgang.';
$GLOBALS['TL_LANG']['MSC']['iso_invoice_title'] = 'Rechnung';
$GLOBALS['TL_LANG']['MSC']['iso_order_status'] = 'Status';
$GLOBALS['TL_LANG']['MSC']['iso_order_date'] = 'Bestelldatum';
$GLOBALS['TL_LANG']['MSC']['iso_billing_address_header'] = 'Rechnungs-Adresse';
$GLOBALS['TL_LANG']['MSC']['iso_shipping_address_header'] = 'Versand-Adresse';
$GLOBALS['TL_LANG']['MSC']['iso_tax_header'] = 'Davon MwSt.';
$GLOBALS['TL_LANG']['MSC']['iso_subtotal_header'] = 'Zwischensumme';
$GLOBALS['TL_LANG']['MSC']['iso_order_shipping_header'] = 'Versand und Bearbeitung';
$GLOBALS['TL_LANG']['MSC']['iso_order_grand_total_header'] = 'Gesamtsumme';
$GLOBALS['TL_LANG']['MSC']['iso_order_items'] = 'Artikel';
$GLOBALS['TL_LANG']['MSC']['iso_order_sku'] = 'Artikelnr.';
$GLOBALS['TL_LANG']['MSC']['iso_quantity_header'] = 'Anzahl';
$GLOBALS['TL_LANG']['MSC']['iso_price_header'] = 'Preis';
$GLOBALS['TL_LANG']['MSC']['iso_sku_header'] = 'Artikelnr.';
$GLOBALS['TL_LANG']['MSC']['iso_product_name_header'] = 'Produktbezeichnung';
$GLOBALS['TL_LANG']['MSC']['iso_card_name_title'] = 'Name auf Kreditkarte';
$GLOBALS['TL_LANG']['ORDER']['pending'] = 'Anstehend';
$GLOBALS['TL_LANG']['ORDER']['processing'] = 'In Bearbeitung';
$GLOBALS['TL_LANG']['ORDER']['complete'] = 'Erledigt';
$GLOBALS['TL_LANG']['ORDER']['on_hold'] = 'Zurück gestellt';
$GLOBALS['TL_LANG']['ORDER']['cancelled'] = 'Storniert';
$GLOBALS['TL_LANG']['MSC']['low_to_high'] = 'niedrig - hoch';
$GLOBALS['TL_LANG']['MSC']['high_to_low'] = 'hoch - niedrig';
$GLOBALS['TL_LANG']['MSC']['a_to_z'] = 'A - Z';
$GLOBALS['TL_LANG']['MSC']['z_to_a'] = 'Z - A';
$GLOBALS['TL_LANG']['MSC']['old_to_new'] = 'alt - neu';
$GLOBALS['TL_LANG']['MSC']['new_to_old'] = 'neu - alt';
$GLOBALS['ISO_LANG']['MSC']['useDefault'] = 'Standardwert nutzen';
$GLOBALS['TL_LANG']['CTE']['isotope'] = 'Isotope eCommerce';
$GLOBALS['TL_LANG']['ISO']['productSingle'] = '1 Produkt';
$GLOBALS['TL_LANG']['ISO']['productMultiple'] = '%s Produkte';
$GLOBALS['TL_LANG']['ISO']['shipping_address_message'] = 'Geben Sie Ihre Versand-Adresse ein, oder wählen Sie eine bestehende Adresse.';
$GLOBALS['TL_LANG']['ISO']['billing_address_message'] = 'Geben Sie Ihre Rechnungs-Adresse ein, oder wählen Sie eine bestehende Adresse.';
$GLOBALS['TL_LANG']['ISO']['billing_address_guest_message'] = 'Bitte geben Sie Ihre Rechnungs-Adresse ein.';
$GLOBALS['TL_LANG']['ISO']['customer_address_message'] = 'Geben Sie Ihre Kunden-Adresse ein, oder wählen Sie eine bestehende Adresse.';
$GLOBALS['TL_LANG']['ISO']['customer_address_guest_message'] = 'Geben Sie Ihre Kunden-Adresse ein.';
$GLOBALS['TL_LANG']['ISO']['shipping_method_message'] = 'Wählen Sie eine Versandart.';
$GLOBALS['TL_LANG']['ISO']['shipping_method_missing'] = 'Bitte wählen Sie eine Versandart.';
$GLOBALS['TL_LANG']['ISO']['payment_method_message'] = 'Wählen Sie eine Zahlungsart.';
$GLOBALS['TL_LANG']['ISO']['payment_method_missing'] = 'Bitte wählen Sie eine Zahlungsart.';
$GLOBALS['TL_LANG']['ISO']['order_review_message'] = 'Überprüfen und bestätigen Sie Ihre Bestellung.';
$GLOBALS['TL_LANG']['ISO']['checkout_address'] = 'Adresse';
$GLOBALS['TL_LANG']['ISO']['checkout_shipping'] = 'Versand';
$GLOBALS['TL_LANG']['ISO']['checkout_payment'] = 'Bezahlung';
$GLOBALS['TL_LANG']['ISO']['checkout_review'] = 'Überprüfung';
$GLOBALS['TL_LANG']['ISO']['billing_address'] = 'Rechnungs-Adresse';
$GLOBALS['TL_LANG']['ISO']['shipping_address'] = 'Versand-Adresse';
$GLOBALS['TL_LANG']['ISO']['billing_shipping_address'] = 'Rechnungs- und Versand-Adresse';
$GLOBALS['TL_LANG']['ISO']['customer_address'] = 'Kunden-Adresse';
$GLOBALS['TL_LANG']['ISO']['shipping_method'] = 'Versandart';
$GLOBALS['TL_LANG']['ISO']['payment_method'] = 'Zahlungsart';
$GLOBALS['TL_LANG']['ISO']['order_conditions'] = 'AGB akzeptieren';
$GLOBALS['TL_LANG']['ISO']['order_review'] = 'Bestellübersicht';
$GLOBALS['TL_LANG']['ISO']['changeCheckoutInfo'] = 'Ändern';
$GLOBALS['TL_LANG']['ISO']['cc_num'] = 'Kreditkarten-Nummer';
$GLOBALS['TL_LANG']['ISO']['cc_type'] = 'Kreditkarten-Typ';
$GLOBALS['TL_LANG']['ISO']['cc_ccv'] = 'CVC-Nummer (3- od. 4-stelliger Code)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_paypal'] = 'Kreditkarten-Ablaufdatum (mm/yyyy)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_date'] = 'Kreditkarten-Ablaufdatum (mm/yy)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_month'] = 'Kreditkarten-Ablaufmonat';
$GLOBALS['TL_LANG']['ISO']['cc_exp_year'] = 'Kreditkarten-Ablaufjahr';
$GLOBALS['TL_LANG']['ISO']['cc_issue_number'] = 'Kreditkarten-Ausgabenummer, 2-stellig (erforderlich für Maestro- und Solo-Karten).';
$GLOBALS['TL_LANG']['ISO']['cc_start_date'] = 'Kreditkarten-Ausstelldatum (erforderlich für Maestro- und Solo-Karten).';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][0] = 'Zahlung ausführen';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][1] = 'Bitte geben Sie die benötigten Informationen ein.';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][2] = 'Bezahlen';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][0] = 'Zahlung ausführen';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][1] = 'Sie werden nun zum Zahlunganbieter weitergeleitet. Falls die Weiterleitung nicht automatisch funktioniert, klicken Sie auf "Bezahlen".';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][2] = 'Bezahlen';
$GLOBALS['TL_LANG']['MSC']['backendPaymentEPay'] = 'Bitte nutzen Sie diese Adresse für den Zugang zum ePay-Adminbereich.';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNotFound'] = 'Bezahlmodul nicht gefunden!';
$GLOBALS['TL_LANG']['ISO']['backendShippingNotFound'] = 'Versandmodul nicht gefunden!';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNoInfo'] = 'Dieses Bezahlmodul enthält keine weiteren Informationen.';
$GLOBALS['TL_LANG']['ISO']['backendShippingNoInfo'] = 'Dieses Versandmodul enthält keine weiteren Informationen.';
$GLOBALS['ISO_LANG']['SHIP']['flat'][0] = 'Pauschalversand';
$GLOBALS['ISO_LANG']['SHIP']['weight_total'][0] = 'Gesamtgewicht-basierter-Versand';
$GLOBALS['ISO_LANG']['SHIP']['order_total'][0] = 'Bestellsummen-basierter-Versand';
$GLOBALS['ISO_LANG']['SHIP']['collection'][0] = 'Abholung';
$GLOBALS['ISO_LANG']['SHIP']['ups'][0] = 'UPS Live Rates and Service shipping';
$GLOBALS['ISO_LANG']['SHIP']['usps'][0] = 'USPS Live Rates and Service shipping';
$GLOBALS['ISO_LANG']['PAY']['cash'][0] = 'Barzahlung';
$GLOBALS['ISO_LANG']['PAY']['cash'][1] = 'Wählen Sie dies für alle Offline-Bezahlmethoden.';
$GLOBALS['ISO_LANG']['PAY']['paypal'][0] = 'PayPal Standard';
$GLOBALS['ISO_LANG']['PAY']['paypal'][1] = 'Dieses PayPal-Modul unterstützt die "Sofortige Zahlungsbestätigung" (IPN).';
$GLOBALS['ISO_LANG']['PAY']['paypalpayflowpro'][0] = 'PayPal Payflow Pro';
$GLOBALS['ISO_LANG']['PAY']['paypalpayflowpro'][1] = 'Das PayPal Payflow Modul ist eine Full-Service Kreditkarten-Schnittstelle.';
$GLOBALS['ISO_LANG']['PAY']['postfinance'][0] = 'Postfinance (Schweizer Post)';
$GLOBALS['ISO_LANG']['PAY']['postfinance'][1] = 'Schnittstelle des Bezahlsystems der Schweizer Post. Unterstützt verschiedene Karten. Der Shop wird sofort über erfolgreiche Transaktionen informiert.';
$GLOBALS['ISO_LANG']['PAY']['authorizedotnet'][0] = 'Authorize.net';
$GLOBALS['ISO_LANG']['PAY']['authorizedotnet'][1] = 'Eine Bezahl-Schnittstelle von Authorize.net';
$GLOBALS['ISO_LANG']['PAY']['cybersource'][0] = 'Cybersource';
$GLOBALS['ISO_LANG']['PAY']['cybersource'][1] = 'Für Cybersource Nutzer. Funktioniert auf Basis der Simple Order API-Methode.';
$GLOBALS['ISO_LANG']['GAL']['default'][0] = 'Standardgalerie (Lightbox/Mediabox)';
$GLOBALS['ISO_LANG']['GAL']['default'][1] = '<p>Nutzt die Lightbox/Mediabox für die Vollansicht der Bilder. Wählen Sie das passende moo_-Template in Ihrer Seitenlayout-Konfiguration.</p><p>Sie können mit dem Senkrechtstrich | ein "rel"-Attribut zum Verlinkungsziel hinzufügen (z. B. "tl_files/video.mov|lightbox[400 300]"). Wenn kein "rel"-Attribut vorhanden ist, wird der Link in einem neuen Browser-Fenster geöffnet.';
$GLOBALS['ISO_LANG']['GAL']['inline'][0] = 'Inline-Galerie';
$GLOBALS['ISO_LANG']['GAL']['inline'][1] = '<p>Beim Klick auf das Galeriebild (Thumbnail) wird die Großansicht davon anstatt des Startbildes innerhalb der Galerie  angezeigt. Sie sollten das Startbild zweimal hochladen damit es auch in der Galerie zur Auswahl steht.</p>';
$GLOBALS['ISO_LANG']['PRODUCT']['regular'][0] = 'Normales Produkt';
$GLOBALS['ISO_LANG']['PRODUCT']['regular'][1] = 'Ein Standard-Produkt. Wähle dieses, wenn sonst keins zutrifft.';
$GLOBALS['ISO_LANG']['CCT']['mc'] = 'MasterCard';
$GLOBALS['ISO_LANG']['CCT']['visa'] = 'Visa';
$GLOBALS['ISO_LANG']['CCT']['amex'] = 'American Express';
$GLOBALS['ISO_LANG']['CCT']['discover'] = 'Discover';
$GLOBALS['ISO_LANG']['CCT']['jcb'] = 'JCB';
$GLOBALS['ISO_LANG']['CCT']['diners'] = 'Diner\'s Club';
$GLOBALS['ISO_LANG']['CCT']['enroute'] = 'EnRoute';
$GLOBALS['ISO_LANG']['CCT']['carte_blanche'] = 'Carte Blanche';
$GLOBALS['ISO_LANG']['CCT']['jal'] = 'JAL';
$GLOBALS['ISO_LANG']['CCT']['maestro'] = 'Maestro UK';
$GLOBALS['ISO_LANG']['CCT']['delta'] = 'Delta';
$GLOBALS['ISO_LANG']['CCT']['solo'] = 'Solo';
$GLOBALS['ISO_LANG']['CCT']['visa_electron'] = 'Visa Electron';
$GLOBALS['ISO_LANG']['CCT']['dankort'] = 'Dankort';
$GLOBALS['ISO_LANG']['CCT']['laser'] = 'Laser';
$GLOBALS['ISO_LANG']['CCT']['carte_bleue'] = 'Carte Bleue';
$GLOBALS['ISO_LANG']['CCT']['carta_si'] = 'Carta Si';
$GLOBALS['ISO_LANG']['CCT']['enc_acct_num'] = 'Kodierte Konto-Nummer';
$GLOBALS['ISO_LANG']['CCT']['uatp'] = 'Universal Air Travel Programm';
$GLOBALS['ISO_LANG']['CCT']['maestro_intl'] = 'Maestro International';
$GLOBALS['ISO_LANG']['CCT']['ge_money_uk'] = 'GE Money UK';
$GLOBALS['ISO_LANG']['WGT']['mg'][0] = 'Milligramm (mg)';
$GLOBALS['ISO_LANG']['WGT']['mg'][1] = 'Eine Maßeinheit identisch mit einem Tausendstel Gramm';
$GLOBALS['ISO_LANG']['WGT']['g'][0] = 'Gramm (g)';
$GLOBALS['ISO_LANG']['WGT']['g'][1] = 'Eine metrische Gewichtseinheit identisch mit einem Tausendstel Kilogramm.';
$GLOBALS['ISO_LANG']['WGT']['kg'][0] = 'Kilogramm.';
$GLOBALS['ISO_LANG']['WGT']['kg'][1] = 'Ein Kilogramm ist das Equivalent von 1.000 Gramm oder ca. 2,2 angloamerikanischen Pfund; das Gewicht eines Liters Wasser.';
$GLOBALS['ISO_LANG']['WGT']['t'][0] = 'Metrische Tonne (t)';
$GLOBALS['ISO_LANG']['WGT']['t'][1] = 'Eine Gewichtseinheit identisch zu 1.000 Kilogramm oder 2.204,6 angloamerikanischen Pfund.';
$GLOBALS['ISO_LANG']['WGT']['ct'][0] = 'Metrisches Karat (ct)';
$GLOBALS['ISO_LANG']['WGT']['ct'][1] = "Eine gesetzliche Maßeinheit für die Masse von Edelsteinen.\nEin metrisches Karat entspricht 0,2 Gramm (200 Miligramm). \nDas Karat (Abkürzung kt oder C) ist hingegen eine Maßeinheit für den Feingehalt von Gold.";
$GLOBALS['ISO_LANG']['WGT']['oz'][0] = 'Unze (oz.)';
$GLOBALS['ISO_LANG']['WGT']['oz'][1] = 'Die gewöhnliche Unze ist eine nicht-metrische Maßeinheit für Masse und entspricht in etwa 28,35 Gramm (in Deutschland für die Gewichtsangabe bei Lebensmitteln unzulässig).';
$GLOBALS['ISO_LANG']['WGT']['lb'][0] = 'angloamerikanische Pfund (lb)';
$GLOBALS['ISO_LANG']['WGT']['lb'][1] = 'Alte Einheit für Masse aus dem angloamerikanischen Maßsystem. 1 Pfund entspricht ca. 16 Unzen oder ca. 0,45 Kilogramm.';
$GLOBALS['ISO_LANG']['WGT']['st'][0] = 'Stone (st)';
$GLOBALS['ISO_LANG']['WGT']['st'][1] = 'Eine britische nicht SI-konforme Einheit von Masse und Gewichtskraft. Entspricht ca. 14 angloamerikanischen Pfund oder ca. 6,35 Kilogramm.';
$GLOBALS['ISO_LANG']['WGT']['grain'][0] = 'Gran (gr)';
$GLOBALS['ISO_LANG']['WGT']['grain'][1] = 'Alte englische Maßeinheit der Masse. Entspricht in etwa 64,79891 Milligramm oder 1/7000 angloamerikanisches Pfund.';
$GLOBALS['ISO_LANG']['ATTR']['text'][0] = 'Textfeld';
$GLOBALS['ISO_LANG']['ATTR']['text'][1] = 'Ein einzeiliges Eingabefeld für kurzen oder mittellangen Text.';
$GLOBALS['ISO_LANG']['ATTR']['textarea'][0] = 'Textbereich';
$GLOBALS['ISO_LANG']['ATTR']['textarea'][1] = 'Ein mehrzeiliges Eingabefeld für einen mittellangen oder langen Text.';
$GLOBALS['ISO_LANG']['ATTR']['select'][0] = 'Auswahlmenü';
$GLOBALS['ISO_LANG']['ATTR']['select'][1] = 'Ein einfaches oder mehrzeiliges Ausklappmenü.<br><i>Dieser Feldtyp ist für Produktvarianten geeignet.</i>';
$GLOBALS['ISO_LANG']['ATTR']['radio'][0] = 'Radio Button-Menü';
$GLOBALS['ISO_LANG']['ATTR']['radio'][1] = 'Mehrere Optionen aus denen eine Option ausgewählt werden kann.<br><i>Dieser Feldtyp ist für Produktvarianten geeignet.</i>';
$GLOBALS['ISO_LANG']['ATTR']['checkbox'][0] = 'Checkbox-Menü';
$GLOBALS['ISO_LANG']['ATTR']['checkbox'][1] = 'Mehrere Optionen aus denen beliebig viele Optionen ausgewählt werden können.';
$GLOBALS['ISO_LANG']['ATTR']['mediaManager'][0] = 'Dateiverwaltung';
$GLOBALS['ISO_LANG']['ATTR']['mediaManager'][1] = 'Laden Sie Bilder oder andere Dateitypen in die Isotope Ecommerce-Dateiverwaltung (nicht gleichzusetzen mit der Contao-Dateiverwaltung!). Die Ausgabe erfolgt durch eine IsotopeGallery Klasse.';
$GLOBALS['ISO_LANG']['ATTR']['conditionalselect'][0] = 'Abhängiges Auswahlmenü';
$GLOBALS['ISO_LANG']['ATTR']['conditionalselect'][1] = 'Zeigt Auswahloptionen basierend auf einem anderen Auswahlmenü.';
$GLOBALS['ISO_LANG']['CUR']['AED'] = 'AED - VAE-Dirham';
$GLOBALS['ISO_LANG']['CUR']['AFN'] = 'AFN - Afghani';
$GLOBALS['ISO_LANG']['CUR']['ALL'] = 'ALL - Lek';
$GLOBALS['ISO_LANG']['CUR']['AMD'] = 'AMD - Dram';
$GLOBALS['ISO_LANG']['CUR']['ANG'] = 'ANG - Antillen-Gulden';
$GLOBALS['ISO_LANG']['CUR']['AOA'] = 'AOA - Kwanza';
$GLOBALS['ISO_LANG']['CUR']['ARS'] = 'ARS - argentinischer Peso';
$GLOBALS['ISO_LANG']['CUR']['AUD'] = 'AUD - australischer Dollar';
$GLOBALS['ISO_LANG']['CUR']['AWG'] = 'AWG - Aruba-Gulden';
$GLOBALS['ISO_LANG']['CUR']['AZN'] = 'AZN - Aserbaidschan-Manat';
$GLOBALS['ISO_LANG']['CUR']['BAM'] = 'BAM - konvertierbarer Mark';
$GLOBALS['ISO_LANG']['CUR']['BBD'] = 'BBD - Barbados-Dollar';
$GLOBALS['ISO_LANG']['CUR']['BDT'] = 'BDT - Taka';
$GLOBALS['ISO_LANG']['CUR']['BGN'] = 'BGN - Lew';
$GLOBALS['ISO_LANG']['CUR']['BHD'] = 'BHD - Bahrain-Dinar';
$GLOBALS['ISO_LANG']['CUR']['BIF'] = 'BIF - Burundi-Franc';
$GLOBALS['ISO_LANG']['CUR']['BMD'] = 'BMD - Bermuda- Dollar';
$GLOBALS['ISO_LANG']['CUR']['BND'] = 'BND - Brunei-Dollar';
$GLOBALS['ISO_LANG']['CUR']['BOB'] = 'BOB - Boliviano';
$GLOBALS['ISO_LANG']['CUR']['BRL'] = 'BRL - Real';
$GLOBALS['ISO_LANG']['CUR']['BSD'] = 'BSD - Bahama-Dollar';
$GLOBALS['ISO_LANG']['CUR']['BTN'] = 'BTN - Ngultrum';
$GLOBALS['ISO_LANG']['CUR']['BWP'] = 'BWP - Pula';
$GLOBALS['ISO_LANG']['CUR']['BYR'] = 'BYR - Belarus-Rubel';
$GLOBALS['ISO_LANG']['CUR']['BZD'] = 'BZD - Belize-Dollar';
$GLOBALS['ISO_LANG']['CUR']['CAD'] = 'CAD - kanadischer Dollar';
$GLOBALS['ISO_LANG']['CUR']['CDZ'] = 'CDF - Kongo-Franc';
$GLOBALS['ISO_LANG']['CUR']['CHF'] = 'CHF - Schweizer Franken';
$GLOBALS['ISO_LANG']['CUR']['CLP'] = 'CLP - chilenischer Peso';
$GLOBALS['ISO_LANG']['CUR']['CNY'] = 'CNY - Renminbi Yuan';
$GLOBALS['ISO_LANG']['CUR']['COP'] = 'COP - kolumbianischer Peso';
$GLOBALS['ISO_LANG']['CUR']['CRC'] = 'CRC - Costa-Rica-Colón';
$GLOBALS['ISO_LANG']['CUR']['CUP'] = 'CUP - kubanischer Peso';
$GLOBALS['ISO_LANG']['CUR']['CVE'] = 'CVE - Kap-Verde-Escudo';
$GLOBALS['ISO_LANG']['CUR']['CZK'] = 'CZK - tschechische Krone';
$GLOBALS['ISO_LANG']['CUR']['DJF'] = 'DJF - Dschibuti-Franc';
$GLOBALS['ISO_LANG']['CUR']['DKK'] = 'DKK - dänische Krone';
$GLOBALS['ISO_LANG']['CUR']['DOP'] = 'DOP - dominikanischer Peso';
$GLOBALS['ISO_LANG']['CUR']['DZD'] = 'DZD - algerischer Dinar';
$GLOBALS['ISO_LANG']['CUR']['EEK'] = 'EEK - estnische Krone';
$GLOBALS['ISO_LANG']['CUR']['EGP'] = 'EGP - ägyptisches Pfund';
$GLOBALS['ISO_LANG']['CUR']['ERN'] = 'ERN - Nakfa';
$GLOBALS['ISO_LANG']['CUR']['ETB'] = 'ETB - Birr';
$GLOBALS['ISO_LANG']['CUR']['EUR'] = 'EUR - Euro';
$GLOBALS['ISO_LANG']['CUR']['FJD'] = 'FJD - Fidschi-Dollar';
$GLOBALS['ISO_LANG']['CUR']['FKP'] = 'FKP - Falkland-Pfund';
$GLOBALS['ISO_LANG']['CUR']['GBP'] = 'GBP - Pfund Sterling';
$GLOBALS['ISO_LANG']['CUR']['GEL'] = 'GEL - Lari';
$GLOBALS['ISO_LANG']['CUR']['GHS'] = 'GHS - Ghana Cedi';
$GLOBALS['ISO_LANG']['CUR']['GIP'] = 'GIP - Gibraltar-Pfund';
$GLOBALS['ISO_LANG']['CUR']['GMD'] = 'GMD - Dalasi';
$GLOBALS['ISO_LANG']['CUR']['GTQ'] = 'GTQ - Quetzal';
$GLOBALS['ISO_LANG']['CUR']['GYD'] = 'GYD - Guyana-Dollar';
$GLOBALS['ISO_LANG']['CUR']['HKD'] = 'HKD - Hongkong-Dollar';
$GLOBALS['ISO_LANG']['CUR']['HNL'] = 'HNL - Lempira';
$GLOBALS['ISO_LANG']['CUR']['HRK'] = 'HRK - Kuna';
$GLOBALS['ISO_LANG']['CUR']['HTG'] = 'HTG - Gourde';
$GLOBALS['ISO_LANG']['CUR']['HUF'] = 'HUF - Forint';
$GLOBALS['ISO_LANG']['CUR']['IDR'] = 'IDR - Rupiah';
$GLOBALS['ISO_LANG']['CUR']['ILS'] = 'ILS - Schekel';
$GLOBALS['ISO_LANG']['CUR']['INR'] = 'INR - indische Rupie';
$GLOBALS['ISO_LANG']['CUR']['IQD'] = 'IQD - Irak-Dinar';
$GLOBALS['ISO_LANG']['CUR']['IRR'] = 'IRR - iranischer Rial';
$GLOBALS['ISO_LANG']['CUR']['ISK'] = 'ISK - isländische Krone';
$GLOBALS['ISO_LANG']['CUR']['JMD'] = 'JMD - Jamaika-Dollar';
$GLOBALS['ISO_LANG']['CUR']['JOD'] = 'JOD - Jordan-Dinar';
$GLOBALS['ISO_LANG']['CUR']['JPY'] = 'JPY - Yen';
$GLOBALS['ISO_LANG']['CUR']['KES'] = 'KES - Kenia-Schilling';
$GLOBALS['ISO_LANG']['CUR']['KGS'] = 'KGS - Som';
$GLOBALS['ISO_LANG']['CUR']['KHR'] = 'KHR - Riel';
$GLOBALS['ISO_LANG']['CUR']['KMF'] = 'KMF - Komoren-Franc';
$GLOBALS['ISO_LANG']['CUR']['KPW'] = 'KPW - nordkoreanischer Won';
$GLOBALS['ISO_LANG']['CUR']['KRW'] = 'KRW - südkoreanischer Won';
$GLOBALS['ISO_LANG']['CUR']['KWD'] = 'KWD - Kuwait-Dinar';
$GLOBALS['ISO_LANG']['CUR']['KYD'] = 'KYD - Kaiman-Dollar';
$GLOBALS['ISO_LANG']['CUR']['KZT'] = 'KZT - Tenge';
$GLOBALS['ISO_LANG']['CUR']['LAK'] = 'LAK - Kip';
$GLOBALS['ISO_LANG']['CUR']['LBP'] = 'LBP - libanesisches Pfund';
$GLOBALS['ISO_LANG']['CUR']['LKR'] = 'LKR - Sri-Lanka-Rupie';
$GLOBALS['ISO_LANG']['CUR']['LRD'] = 'LRD - liberianischer Dollar';
$GLOBALS['ISO_LANG']['CUR']['LSL'] = 'LSL - Loti';
$GLOBALS['ISO_LANG']['CUR']['LTL'] = 'LTL - Litas';
$GLOBALS['ISO_LANG']['CUR']['LVL'] = 'LVL - Lats';
$GLOBALS['ISO_LANG']['CUR']['LYD'] = 'LYD - libyscher Dinar';
$GLOBALS['ISO_LANG']['CUR']['MAD'] = 'MAD - marokkanischer Dirham';
$GLOBALS['ISO_LANG']['CUR']['MDL'] = 'MDL - Moldau-Leu';
$GLOBALS['ISO_LANG']['CUR']['MGA'] = 'MGA - Ariary';
$GLOBALS['ISO_LANG']['CUR']['MKD'] = 'MKD - Denar';
$GLOBALS['ISO_LANG']['CUR']['MMK'] = 'MMK - Kyat';
$GLOBALS['ISO_LANG']['CUR']['MNT'] = 'MNT - Tugrik';
$GLOBALS['ISO_LANG']['CUR']['MOP'] = 'MOP - Pataca';
$GLOBALS['ISO_LANG']['CUR']['MRO'] = 'MRO - Ouguiya';
$GLOBALS['ISO_LANG']['CUR']['MUR'] = 'MUR - Mauritius-Rupie';
$GLOBALS['ISO_LANG']['CUR']['MVR'] = 'MVR - Rufiyaa';
$GLOBALS['ISO_LANG']['CUR']['MWK'] = 'MWK - Malawi-Kwacha';
$GLOBALS['ISO_LANG']['CUR']['MYR'] = 'MYR - Ringgit';
$GLOBALS['ISO_LANG']['CUR']['MZN'] = 'MZN - Metical';
$GLOBALS['ISO_LANG']['CUR']['NAD'] = 'NAD - Namibia-Dollar';
$GLOBALS['ISO_LANG']['CUR']['NGN'] = 'NGN - Naira';
$GLOBALS['ISO_LANG']['CUR']['NOK'] = 'NOK - norwegische Krone';
$GLOBALS['ISO_LANG']['CUR']['NPR'] = 'NPR - nepalesische Rupie';
$GLOBALS['ISO_LANG']['CUR']['NZD'] = 'NZD - neuseeländischer Dollar';
$GLOBALS['ISO_LANG']['CUR']['OMR'] = 'OMR - Rial Omani';
$GLOBALS['ISO_LANG']['CUR']['PAB'] = 'PAB - Balboa';
$GLOBALS['ISO_LANG']['CUR']['PEN'] = 'PEN - Neuer Sol';
$GLOBALS['ISO_LANG']['CUR']['PGK'] = 'PGK - Kina';
$GLOBALS['ISO_LANG']['CUR']['PHP'] = 'PHP - philippinischer Peso';
$GLOBALS['ISO_LANG']['CUR']['PKR'] = 'PKR - pakistanische Rupie';
$GLOBALS['ISO_LANG']['CUR']['PLN'] = 'PLN - Zloty';
$GLOBALS['ISO_LANG']['CUR']['PYG'] = 'PYG - Guarani';
$GLOBALS['ISO_LANG']['CUR']['QAR'] = 'QAR - Katar-Riyal';
$GLOBALS['ISO_LANG']['CUR']['RON'] = 'RON - rumänischer Leu';
$GLOBALS['ISO_LANG']['CUR']['RSD'] = 'RSD - serbischer Dinar';
$GLOBALS['ISO_LANG']['CUR']['RUB'] = 'RUB - russischer Rubel';
$GLOBALS['ISO_LANG']['CUR']['RWF'] = 'RWF - Ruanda-Franc';
$GLOBALS['ISO_LANG']['CUR']['SAR'] = 'SAR - Riyal';
$GLOBALS['ISO_LANG']['CUR']['SBD'] = 'SBD - Salomonen-Dollar';
$GLOBALS['ISO_LANG']['CUR']['SCR'] = 'SCR - Seychellen-Rupie';
$GLOBALS['ISO_LANG']['CUR']['SDG'] = 'SDG - sudanesisches Pfund';
$GLOBALS['ISO_LANG']['CUR']['SEK'] = 'SEK - schwedische Krone';
$GLOBALS['ISO_LANG']['CUR']['SGD'] = 'SGD - Singapur-Dollar';
$GLOBALS['ISO_LANG']['CUR']['SHP'] = 'SHP - St. Helena-Pfund';
$GLOBALS['ISO_LANG']['CUR']['SLL'] = 'SLL - Leone';
$GLOBALS['ISO_LANG']['CUR']['SOS'] = 'SOS - Somalia-Schilling';
$GLOBALS['ISO_LANG']['CUR']['SRD'] = 'SRD - Suriname-Dollar';
$GLOBALS['ISO_LANG']['CUR']['STD'] = 'STD - Dobra';
$GLOBALS['ISO_LANG']['CUR']['SYP'] = 'SYP - syrisches Pfund';
$GLOBALS['ISO_LANG']['CUR']['SZL'] = 'SZL - Lilangeni';
$GLOBALS['ISO_LANG']['CUR']['THB'] = 'THB - Baht';
$GLOBALS['ISO_LANG']['CUR']['TJS'] = 'TJS - Somoni';
$GLOBALS['ISO_LANG']['CUR']['TMT'] = 'TMT - Turkmenistan-Manat';
$GLOBALS['ISO_LANG']['CUR']['TND'] = 'TND - tunesischer Dinar';
$GLOBALS['ISO_LANG']['CUR']['TOP'] = 'TOP - Pa’anga';
$GLOBALS['ISO_LANG']['CUR']['TRY'] = 'TRY - türkische Lira';
$GLOBALS['ISO_LANG']['CUR']['TTD'] = 'TTD - Trinidad-und-Tobago-Dollar';
$GLOBALS['ISO_LANG']['CUR']['TWD'] = 'TWD - neuer Taiwan-Dollar';
$GLOBALS['ISO_LANG']['CUR']['TZS'] = 'TZS - Tansania-Schilling';
$GLOBALS['ISO_LANG']['CUR']['UAH'] = 'UAH - Griwna';
$GLOBALS['ISO_LANG']['CUR']['UGX'] = 'UGX - Uganda-Schilling';
$GLOBALS['ISO_LANG']['CUR']['USD'] = 'USD - US-Dollar';
$GLOBALS['ISO_LANG']['CUR']['UYU'] = 'UYU - uruguayischer Peso';
$GLOBALS['ISO_LANG']['CUR']['UZS'] = 'UZS - Sum';
$GLOBALS['ISO_LANG']['CUR']['VEF'] = 'VEF - Bolivar fuerte';
$GLOBALS['ISO_LANG']['CUR']['VND'] = 'VND - Dong';
$GLOBALS['ISO_LANG']['CUR']['VUV'] = 'VUV - Vatu';
$GLOBALS['ISO_LANG']['CUR']['WST'] = 'WST - Tala';
$GLOBALS['ISO_LANG']['CUR']['YER'] = 'YER - Jemen-Rial';
$GLOBALS['ISO_LANG']['CUR']['ZAR'] = 'ZAR - Rand';
$GLOBALS['ISO_LANG']['CUR']['ZMK'] = 'ZMK - sambischer Kwacha';
$GLOBALS['ISO_LANG']['CUR']['ZWL'] = 'ZWL - Simbabwe-Dollar';


/**
 * Miscellaneous
 */
$GLOBALS['ISO_LANG']['MSC']['templateConfig']		= '%s (Shop-Konfiguration: %s)';
$GLOBALS['ISO_LANG']['MSC']['templateTheme']		= '%s (Theme: %s)';

