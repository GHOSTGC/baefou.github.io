<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["entry.2085394520"];
    $parent_name = $_POST["entry.942114543"];
    $email = $_POST["entry.843742282"];
    $mobileNumber = $_POST["entry.1457127663"];
    $parentContact = $_POST["entry.2063555604"];
    $program = $_POST["entry.1770750423"];
    $to = "info.baefou@email.com";
    $subject = "New Form Submission";
    $headers = "From: $email\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $body = "<p>You have received a new form submission from:</p>
    <p>Name: $username</p>
    <p>Email: $email</p>
    <p>StudentNumber: $mobileNumber</p>
    <p>Parent_name: $parent_name</p>
    <p>ParentContact: $parentContact</p>
    <p>Program: $program</p>";
    mail($to, $subject, $body, $headers);
    echo ("EMAILSENT.");
}
?>
