<!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <p>Kepada Yth.,</p>
    <p>Kepala PT. Safwana Marine International</p>

    <p>Saya harap email ini menemui Anda dalam keadaan sehat dan baik. Nama saya <strong>{{ $name }}</strong>, dan saya tertarik untuk mempelajari lebih lanjut tentang dunia perawakan kapal.</p>

    <p>Saya ingin mengetahui lebih lanjut mengenai:</p>
    <p>{{ $message_content }}</p>

    <p>Jika memungkinkan, saya juga ingin berdiskusi lebih lanjut mengenai topik ini. Apakah Anda bersedia untuk berbagi wawasan atau merekomendasikan referensi yang relevan?</p>

    <p>Terima kasih atas waktu dan perhatian Anda. Saya menantikan balasan Anda.</p>

    <p>Salam hormat,</p>
    <p><strong>{{ $name }}</strong></p>
    <p>Email: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
</body>
</html>

