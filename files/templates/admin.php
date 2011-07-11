<?php OC_UTIL::addScript('files','admin'); ?>

<form name="filesForm" action='#' method='post'>
	<?php if($_['htaccessWorking']):?>
		<label for="maxUploadSize"><?php echo $l->t( 'Maximum upload size' ); ?> </label><input name='maxUploadSize' id="maxUploadSize" value='<?php echo $_['uploadMaxFilesize'] ?>'/><br/>
	<?php endif;?>
	<input type="checkbox" name="publicEnable"<?php echo ($_['publicFolders']=='on'?' checked':'');?> id="publicEnable" onclick="
		if(this.checked){
			document.getElementById('publicFolderOptions').style.display='block';
		} else {
			document.getElementById('publicFolderOptions').style.display='none';
		}
		"/><label for="publicEnable"> <?php echo $l->t( 'Allow public folders' ); ?></label><br>

	<div id="publicFolderOptions" style="display:<?php echo ($_['publicFolders']=='on'?'block':'none');?>;padding-left:20px">
		<input type="radio" name="sharingaim" value="separated"<?php echo($_['sharingaim']=='separated'?' checked':'');?> />
		<label for="separated"><?php echo $l->t( 'separated from webdav storage' ); ?></label><br>
		<input type="radio" name="sharingaim" value="userdecide"<?php echo($_['sharingaim']=='userdecide'?' checked':'');?> />
		<label for="userdecide"><?php echo $l->t( 'let the user decide' ); ?></label><br>
		<input type="radio" name="sharingaim" value="inwebdav"<?php echo($_['sharingaim']=='inwebdav'?' checked':'');?> />
		<label for="inwebdav"><?php echo $l->t( 'folder "/public" in webdav storage' ); ?></label><br>
	</div>

	<input type="checkbox" name="downloadShared"<?php echo ($_['allowDl']=='on'?' checked':'');?> id="downloadShared"/>
	<label for="downloadShared"><?php echo $l->t( 'Allow downloading shared files' ); ?></label><br>
	<input type="checkbox" name="uploadShared"<?php echo ($_['sharedUl']=='on'?' checked':'');?> id="uploadShared"/>
	<label for="uploadShared"><?php echo $l->t( 'Allow uploading in shared directory' ); ?></label><br>
	<input type='submit' value='Save'/>
</form>
