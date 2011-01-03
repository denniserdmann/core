<form action="<?php echo $this->action; ?>" class="tl_form" method="post" name="tl_select_translation">
<div class="tl_formbody">
<input type="hidden" name="FORM_SUBMIT" value="tl_translation_filters">

<div class="tl_panel">

<div class="tl_submit_panel tl_subpanel">
<input type="image" name="btfilter" id="btfilter" src="system/themes/default/images/ok.gif" class="tl_img_submit" alt="apply changes" value="apply changes" />
</div>

<div class="tl_filter tl_subpanel">

<input id="ctrl_svn_diff" name="svn_diff" type="checkbox" value="1"<?php if($this->svn_diff) echo ' checked="checked"'; ?> /> <label for="ctrl_svn_diff">Enable online SVN diff</label> &nbsp;&nbsp;

<select name="module" id="module" class="tl_select<?php echo $this->moduleClass; ?>" onChange="document.tl_select_translation.submit();">
  <option value="">Modul</option>
<?php foreach( $this->modules as $module ): ?>
	<option value="<?php echo $module['value']; ?>"<?php echo $module['default'] ? ' selected="selected"' : ''; ?>><?php echo $module['label']; ?></option>
<?php endforeach; ?>
</select>

<select name="file" id="file" class="tl_select<?php echo $this->fileClass; ?>" onChange="document.tl_select_translation.submit();">
	<option value="">-File-</option>
<?php foreach( $this->files as $file ): ?>
	<option value="<?php echo $file['value']; ?>"<?php echo $file['default'] ? ' selected="selected"' : ''; ?>><?php echo $file['label']; ?></option>
<?php endforeach; ?>
</select>

</div>

<div class="clear"></div>

</div>
</div>
</form>

<?php if(strlen($this->edit)): ?>
<div id="tl_buttons">
<a href="<?php echo $this->downloadHref; ?>" class="header_iso_export" title="<?php echo $this->downloadTitle; ?>" accesskey="n" onclick="Backend.getScrollOffset();"><?php echo $this->downloadLabel; ?></a>
</div>
<h2 class="sub_headline"><?php echo $this->headline; ?></h2>
<?php echo $this->getMessages() . '<br />'; ?>
<form action="<?php echo $this->action; ?>" method="post">
<div class="tl_listing_container" style="margin-top:0">
<div class="formbody">
<input type="hidden" name="FORM_SUBMIT" value="isotope_translation" />

<table cellpadding="0" cellspacing="0" class="tl_listing" summary="Table lists records">

<?php foreach ( $this->source as $key => $value): ?>
	  <tr onmouseover="Theme.hoverRow(this, 1);" onmouseout="Theme.hoverRow(this, 0);">
    <td class="tl_file_list" style="width: 48%"><?php echo htmlspecialchars($value, ENT_COMPAT, 'UTF-8'); ?></td>
    <td class="tl_file_list" style="width: 2%">=</td>
    <td class="tl_file_list" style="width: 48%"><?php if(strlen($value)>50):?><textarea name="<?php echo standardize($key); ?>" class="tl_text" onfocus="Backend.getScrollOffset();" style="height:60px;overflow:auto;"><?php echo str_replace('"', '&quot;', $this->translation[$key]); ?></textarea><?php else: ?><input type="text" name="<?php echo standardize($key); ?>" class="tl_text" value="<?php echo str_replace('"', '&quot;', $this->translation[$key]); ?>" onfocus="Backend.getScrollOffset();" /><?php endif; ?></td>
	<td class="tl_file_list" style="width: 2%"><a title="<?php echo $key; ?>"><img src="system/themes/default/images/show.gif" alt="" /></a></td>
  </tr>
<?php endforeach; ?> 

<?php if( $this->svn_diff && is_array($this->diff) ): $blnHeadline=false; ?>
<?php foreach( $this->diff as $key => $value ): if($this->translation[$key] != $this->diff[$key]): if(!$blnHeadline): $blnHeadline=true; ?>
      <tr><td colspan="3" style="padding-top: 50px;"><h2><?php echo $this->diff_headline; ?></h2></td></tr><?php endif; ?>
  	  <tr onmouseover="Theme.hoverRow(this, 1);" onmouseout="Theme.hoverRow(this, 0);">
	    <td class="tl_file_list" style="width: 48%"><?php echo $this->diff[$key]; ?></td>
	    <td class="tl_file_list" style="width: 2%">=</td>
	    <td class="tl_file_list" style="width: 48%"><?php echo $this->translation[$key]; /*htmlspecialchars($value, ENT_COMPAT, 'UTF-8');*/ ?></td>
		<td class="tl_file_list" style="width: 2%"><a title="<?php echo $key; ?>"><img src="system/themes/default/images/show.gif" alt="" /></a></td>
	  </tr>
<?php endif; endforeach; ?>
<?php elseif($this->svn_diff && is_string($this->diff)): ?>
<tr><td colspan="3" style="padding-top: 50px;">
	<h2><?php echo $this->diff_headline; ?></h2>
	<p class="tl_error"><?php echo $this->error; ?></p>
	<p class="tl_info"><?php echo $this->diff; ?></p>
</td></tr>
<?php endif; ?>
	
</table>

</div>
</div>

<div class="tl_formbody_submit">
<div class="tl_submit_container"><input type="submit" name="save" id="save" class="tl_submit" alt="save all changes" accesskey="s" value="<?php echo $this->slabel; ?>" /></div>
</div>
</form>
<?php else: ?>
<div class="tl_listing_container">
<?php if ($this->error): ?>
<p class="tl_error"><?php echo $this->error; ?></p><?php endif; ?>
<p class="tl_info"><?php echo $this->headline; ?></p>
</div>
<?php endif; ?>