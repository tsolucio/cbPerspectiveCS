<?php
/*************************************************************************************************
 * Copyright 2015 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS customizations.
 * You can copy, adapt and distribute the work under the "Attribution-NonCommercial-ShareAlike"
 * Vizsage Public License (the "License"). You may not use this file except in compliance with the
 * License. Roughly speaking, non-commercial users may share and modify this code, but must give credit
 * and share improvements. However, for proper details please read the full License, available at
 * http://vizsage.com/license/Vizsage-License-BY-NC-SA.html and the handy reference for understanding
 * the full license at http://vizsage.com/license/Vizsage-Deed-BY-NC-SA.html. Unless required by
 * applicable law or agreed to in writing, any software distributed under the License is distributed
 * on an  "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the
 * License terms of Creative Commons Attribution-NonCommercial-ShareAlike 3.0 (the License).
 *************************************************************************************************
 *  Module       : coreBOS Perspective ChangeSets
 *  Version      : 1.0
 *  Author       : JPL TSolucio, S. L.
 *************************************************************************************************/
global $currentModule;
require_once "modules/$currentModule/$currentModule.php";
$pptv = new $currentModule();
?>
<table border=0 width=90% align=center>
<tr>
<td><H2><?php echo $pptv::$perspective_name; ?></H2><br /></td>
<td>&nbsp;</td>
<td><H2><?php echo getTranslatedString('License Agreement',$currentModule); ?></H2><br /></td>
</tr>
<tr valign=top>
<td width=48%><span style="font-size:large"><p><?php echo $pptv::$perspective_description; ?></p>
<br /><?php echo $pptv::$perspective_signature; ?></span>
<p align=center><a href="<?php echo $pptv::$perspective_website; ?>" target="_blank"><img src="<?php echo $pptv::$perspective_logo; ?>" border="0" align=center/></a></p><br />
<?php echo $pptv::$perspective_company; ?>
</td>
<td>&nbsp;</td>
<td width=48%><div style="overflow:auto; height:500px;"><?php readfile($pptv::$perspective_license); ?></div></td>
</tr>
</table>
