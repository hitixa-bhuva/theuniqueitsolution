<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Error handler function
    function respond($success, $message) {
        echo "<p style='font-family:Arial;color:" . ($success ? "green" : "red") . ";'>$message</p>";
        exit;
    }

    // Check if file uploaded
    if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
        $errorCode = $_FILES['resume']['error'] ?? 'No file uploaded';
        respond(false, "File upload error. Error code: $errorCode");
    }

    $file = $_FILES['resume'];

    // Allowed MIME types and extensions
    $allowedMime = [
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    ];
    $allowedExt = ['pdf', 'doc', 'docx'];

    $fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $mimeType = mime_content_type($file['tmp_name']); // safer than $_FILES['type']

    if (!in_array($fileExt, $allowedExt) || !in_array($mimeType, $allowedMime)) {
        respond(false, "Invalid file type. Only PDF, DOC, and DOCX are allowed.");
    }

    // Check file size
    $maxSize = 4 * 1024 * 1024; // 4MB
    if ($file['size'] > $maxSize) {
        respond(false, "File is too large. Max allowed size is 4MB.");
    }

    // Sanitize filename
    $originalFileName = preg_replace("/[^A-Za-z0-9_\.-]/", "_", basename($file['name']));
    $tmpFilePath = $file['tmp_name'];

    // FTP credentials
    $ftp_server = "ftp.uniqueconsumerservices.com";
    $ftp_user = "upload@theuniqueitsolution.com";
    $ftp_pass = "upload@1234567890";
    $ftp_port = 21;
    $remote_dir = "/uploads/";
    $remote_file = $remote_dir . time() . "_" . $originalFileName;

    // Connect and upload via FTP
    $conn = ftp_connect($ftp_server, $ftp_port);
    if (!$conn) respond(false, "Could not connect to FTP server.");

    if (!ftp_login($conn, $ftp_user, $ftp_pass)) {
        ftp_close($conn);
        respond(false, "FTP login failed.");
    }

    ftp_pasv($conn, true); // Enable passive mode

    if (!ftp_put($conn, $remote_file, $tmpFilePath, FTP_BINARY)) {
        ftp_close($conn);
        respond(false, "FTP upload failed.");
    }

    ftp_close($conn);

    // Send email notification
    include __DIR__ . '/sendmail.php';
    $ftp_link = "ftp://$ftp_server$remote_file";

    $mailObj = new SendMail();
    $mailObj->ReciverEmail = "patelhitixa4439@gmail.com";
    $mailObj->Subject = "Resume Uploaded via FTP";
    $mailObj->Body = "
        The resume has been uploaded successfully.<br><br>
        <strong>Download Link:</strong><br>
        <a href='$ftp_link'>$ftp_link</a>
    ";

    $mailObj->sendMail();

    respond(true, "File uploaded and email sent successfully!");
}
?>