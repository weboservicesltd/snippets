<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$check=$this->session->userdata('admin_email');
if(!isset($check)){
redirect('admin_manage/admin_login','refresh');
}
echo 'admin dashboard';
echo '<html>';
echo "<a href='".base_url()."/admin_manage/session_destroy'>Logout</a>";
echo '<br/>';
echo "<a href='".base_url()."index.php/admin_manage/admin_change_password'>Change Password</a>";
//var_dump($users);
 ?>
<table>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<?php foreach ($users as $user) {
?><tr>
<td><?php echo $user->id;?></td>
<td><?php echo $user->fname;?></td>
<td><?php echo $user->lname;?></td>
<td><?php echo $user->email;?></td>
</tr>
<?php }?>
</table>