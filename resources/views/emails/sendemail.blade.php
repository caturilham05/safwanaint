<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamaran Pekerjaan</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <table style="width: 100%; max-width: 600px; margin: 0 auto; border: 1px solid #ddd; border-radius: 8px; padding: 16px;">
        <tr>
            <td>
                <h2 style="text-align: center; color: #007bff;">Lamaran Pekerjaan</h2>
                <p>Kepada Yth.,</p>
                <p>Bagian HRD / Perekrutan<br>Safwana Marine International</p>
                <p>Dengan hormat,</p>
                <p>Nama saya <strong>{{ $name }}</strong>. Saya menulis email ini untuk mengajukan lamaran kerja dengan subjek <strong>{{ $subject }}</strong>.</p>
                <p>Berikut adalah pesan saya:</p>
                <blockquote style="margin: 16px 0; padding: 16px; background-color: #f9f9f9; border-left: 4px solid #007bff;">
                    {{ $message_content }}
                </blockquote>
                <p>Saya percaya bahwa pengalaman dan motivasi saya dapat memberikan kontribusi positif bagi perusahaan Anda.</p>
                <p>Saya sangat berharap mendapatkan kesempatan untuk mengikuti proses seleksi lebih lanjut. Saya dapat dihubungi melalui email ini (<a href="mailto:{{ $email }}">{{ $email }}</a>).</p>
                <p>Atas perhatian dan kesempatan yang diberikan, saya ucapkan terima kasih.</p>
                <br>
                <p>Hormat saya,</p>
                <p><strong>{{ $name }}</strong></p>
            </td>
        </tr>
    </table>
</body>
</html>
