<?php
// Získání a úprava dat z formuláře
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r", "\n"), array(" ", " "), $name);

$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$phone = isset($_POST["form-phone"]) ? strip_tags(trim($_POST["form-phone"])) : "Neuvedeno";
$partic = isset($_POST["partic"]) ? strip_tags($_POST["partic"]) : "Neuvedeno";
$kids = isset($_POST["kids"]) ? intval($_POST["kids"]) : 0;
$message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : "Žádná zpráva";

// Dětské věkové kategorie
$kids_ages = [];
if (isset($_POST["kids-3"])) $kids_ages[] = "0-3 let";
if (isset($_POST["kids-6"])) $kids_ages[] = "4-6 let";
if (isset($_POST["kids-10"])) $kids_ages[] = "7-10 let";
if (isset($_POST["kids-more"])) $kids_ages[] = "Více než 10 let";

$kids_ages_text = !empty($kids_ages) ? implode(", ", $kids_ages) : "Neuvedeno";

// Kontrola nutných polí
if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "error";
    exit;
}

// Nastavení příjemců
$recipients = ["marek.432@email.cz", "terkach23@gmail.com"];

// Předmět e-mailu
$subject = "Nová zpráva ke svatbě od: $name";

// Obsah e-mailu
$email_content = "Jméno: $name\n";
$email_content .= "E-mail: $email\n";
$email_content .= "Telefon: $phone\n\n";
$email_content .= "Účast: $partic\n";
$email_content .= "Počet dětí: $kids\n";
$email_content .= "Věk dětí: $kids_ages_text\n\n";
$email_content .= "Zpráva:\n$message\n";

// Hlavičky e-mailu
$email_headers = "From: $name <$email>\r\n";
$email_headers .= "Reply-To: $email\r\n";

// Odeslání e-mailu každému příjemci
foreach ($recipients as $recipient) {
    mail($recipient, $subject, $email_content, $email_headers);
}

// Přesměrování po úspěšném odeslání
echo "success";
exit;
?>