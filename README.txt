�������:
- ����� ������� �� wp
- ���������� ������
- �� ������� � ����� Blog ������������ ��������� ������ ������� Blog
- �� ������� � ����� Case Studies ������������ ��������� ������ ������� Case Studies
- ��������� ����������� ��������� (Blog, Case Studies)
- ��������� � ���� �������������� History, Expertise, Our Services, Contact Us
- ��������� ������ ���� /*�������� handler ��� ������������ ��������� �� �����-�������*/
-- ����� �������� ����� ����� AJAX (��. dropbox) /*����� �����*/

���� ������:
- Frontend:
-- null
- Backend:
-- ����������� ����� (����������, ��������, �����������, ����������, �������)

/*
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];} 
if (isset($_POST['subjectField'])) {$subjectField = $_POST['subjectField'];} 

$to = "eugenesolovyev92@gmail.com"; /*������� �����, �� ������� ������ ��������� ������*/ 
$sendfrom = "polishlawyer@polishlawyer.us"; /*������� �����, � �������� ����� ��������� ������, ����� �� ���������, ����� ��� ������������ ��������� ������*/ 
$headers = "From: " . strip_tags($sendfrom) . "\r\n"; 
$headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html;charset=utf-8 \r\n"; 
$subject = "Test"; 
$message = "<b>��� ����������: </b>$name<br><b>�������: </b>$email<br><b>E-mail: </b>$subjectField"; 
$send = mail ($to, $subject, $message, $headers);
    //Have to test this code
    //I seem that this code doesn't work on real server
}
?>
*/