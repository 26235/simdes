<?php include "header.php" ?>
          <?php include "navigation.php" ?>
          <div class="subjudul"> <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" /> <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span> </div>
          <form id="form1" method="post" action="index.php?form=Z.03">
            <div class="form-region">
              <table border="0" cellspacing="0">
                <tbody>
                  <? if ($errorCode) { ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="padding-bottom: 5px" class="errors"><? echo $errorCode ?></td>
                  </tr>
                  <? } ?>
                  <tr>
                    <td><strong>Password Lama</strong></td>
                    <td style="padding: 2px"><input type="password" id="oldPassword" name="oldPassword" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td><strong>Password Baru</strong></td>
                    <td style="padding: 2px"><input type="password" id="newPassword" name="newPassword" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td><strong>Ulangi Password Baru</strong></td>
                    <td style="padding: 2px"><input type="password" id="newPasswordAgain" name="newPasswordAgain" style="width: 250px"/></td>
                  </tr>
                  <tr>
                    <td  style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="batal" id="batal" value="&laquo; BATAL" onclick="window.location = 'index.php?form=Z.01';"/></td>
                    <td style="padding: 10px 2px 2px 2px"><div align="right">
                        <input class="formbutton" type="submit" name="next" id="next" value="GANTI PASSWORD &raquo;"/>
                      </div></td>
                  </tr>
                </tbody>
              </table>
              <input type="hidden" name="next" value="true"/>
            </div>
          </form>
          <?php include "footer.php" ?>
