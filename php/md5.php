<form action="md5.php" method="post">
  <table>
    <tr>
      <td><input type="text" name="string" value="<?php echo (isset($_POST['string']) && $_POST['string'] ? $_POST['string'] : ''); ?>"/></td>
      <td><input type="submit" value="Hash it" /></td>
    </tr>
    <tr>
      <td><input type="text" value="<?php echo (isset($_POST['string']) && $_POST['string'] <> '' ? md5($_POST['string']) : ''); ?>" onclick="this.select()" /></td>
      <td></td>
    </tr>
  </table>
</form>
