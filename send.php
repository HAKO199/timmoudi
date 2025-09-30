<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kerroumi41@gmail.com"; // ✨ غيّرها إلى بريدك
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $subject = "رسالة جديدة من $name عبر موقعك";
    $body = "الاسم: $name\nالبريد: $email\n\nالرسالة:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ تم إرسال رسالتك بنجاح.";
    } else {
        echo "❌ حدث خطأ أثناء الإرسال.";
    }
}
?>
